<?php

namespace Tests\YooKassa\Client;

use DateTime;
use Exception;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_MockObject_MockObject;
use ReflectionMethod;
use YooKassa\Client;
use YooKassa\Common\Exceptions\ApiConnectionException;
use YooKassa\Common\Exceptions\ApiException;
use YooKassa\Common\Exceptions\AuthorizeException;
use YooKassa\Common\Exceptions\BadApiRequestException;
use YooKassa\Common\Exceptions\ExtensionNotFoundException;
use YooKassa\Common\Exceptions\ForbiddenException;
use YooKassa\Common\Exceptions\InternalServerError;
use YooKassa\Common\Exceptions\JsonException;
use YooKassa\Common\Exceptions\NotFoundException;
use YooKassa\Common\Exceptions\ResponseProcessingException;
use YooKassa\Common\Exceptions\TooManyRequestsException;
use YooKassa\Common\Exceptions\UnauthorizedException;
use YooKassa\Common\LoggerWrapper;
use YooKassa\Helpers\Random;
use YooKassa\Helpers\StringObject;
use YooKassa\Model\Deal\DealType;
use YooKassa\Model\Deal\FeeMoment;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\ReceiptCustomer;
use YooKassa\Model\ReceiptItem;
use YooKassa\Model\ReceiptType;
use YooKassa\Model\SafeDeal;
use YooKassa\Model\Settlement;
use YooKassa\Request\Deals\CreateDealRequest;
use YooKassa\Request\Deals\CreateDealResponse;
use YooKassa\Request\Deals\DealResponse;
use YooKassa\Request\Deals\DealsRequest;
use YooKassa\Request\Deals\DealsResponse;
use YooKassa\Request\Payments\CreatePaymentResponse;
use YooKassa\Request\Payments\CreatePaymentRequest;
use YooKassa\Request\Payments\Payment\CancelResponse;
use YooKassa\Request\Payments\Payment\CreateCaptureRequest;
use YooKassa\Request\Payments\Payment\CreateCaptureResponse;
use YooKassa\Request\Payments\PaymentResponse;
use YooKassa\Request\Payments\PaymentsRequest;
use YooKassa\Request\Payments\PaymentsResponse;
use YooKassa\Request\Payouts\CreatePayoutRequest;
use YooKassa\Request\Payouts\CreatePayoutResponse;
use YooKassa\Request\Payouts\PayoutResponse;
use YooKassa\Request\Receipts\AbstractReceiptResponse;
use YooKassa\Request\Receipts\CreatePostReceiptRequest;
use YooKassa\Request\Refunds\CreateRefundRequest;
use YooKassa\Request\Refunds\CreateRefundResponse;
use YooKassa\Request\Refunds\RefundResponse;
use YooKassa\Request\Refunds\RefundsRequest;
use YooKassa\Request\Refunds\RefundsResponse;

class ClientTest extends TestCase
{

    public function testCreatePayment()
    {
        $payment = CreatePaymentRequest::builder()
            ->setAmount(123)
            ->setPaymentToken(Random::str(36))
            ->build();

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('createPaymentFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createPayment($payment);

        self::assertSame($curlClientStub, $apiClient->getApiClient());
        self::assertTrue($response instanceof CreatePaymentResponse);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('createPaymentFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createPayment(array(
                'amount' => array(
                    'value' => 123,
                    'currency' => 'USD',
                ),
                'payment_token' => Random::str(36),
            ), 123);

        self::assertSame($curlClientStub, $apiClient->getApiClient());
        self::assertTrue($response instanceof CreatePaymentResponse);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"type":"error","code":"request_accepted","retry_after":1800}',
                array('http_code' => 202)
            ));

        try {
            $response = $apiClient
                ->setApiClient($curlClientStub)
                ->setAuth('shopId', 'shopPassword')
                ->createPayment($payment, 123);
            self::fail('Исключение не было выброшено');
        } catch (ApiException $e) {
            self::assertInstanceOf('YooKassa\Common\Exceptions\ResponseProcessingException', $e);
            return;
        }

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"type":"error","code":"request_accepted"}',
                array('http_code' => 202)
            ));

        try {
            $apiClient->setRetryTimeout(0);
            $response = $apiClient
                ->setApiClient($curlClientStub)
                ->setAuth('shopId', 'shopPassword')
                ->createPayment($payment, 123);
            self::fail('Исключение не было выброшено');
        } catch (ResponseProcessingException $e) {
            self::assertEquals(Client::DEFAULT_DELAY, $e->retryAfter);
            return;
        }
    }

    /**
     * @dataProvider errorResponseDataProvider
     * @param $httpCode
     * @param $errorResponse
     * @param $requiredException
     * @throws Exception
     */
    public function testInvalidCreatePayment($httpCode, $errorResponse, $requiredException)
    {
        $payment = CreatePaymentRequest::builder()
            ->setAmount(123)
            ->setPaymentToken(Random::str(36))
            ->build();
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $errorResponse,
                array('http_code' => $httpCode)
            ));

        $apiClient = new Client();
        $apiClient->setApiClient($curlClientStub)->setAuth('shopId', 'shopPassword');
        try {
            $apiClient->createPayment($payment,123);
        } catch (ApiException $e) {
            self::assertInstanceOf($requiredException, $e);
            return;
        }
        self::fail('Exception not thrown');
    }

    /**
     * @dataProvider paymentsListDataProvider
     * @param mixed $request
     * @throws ApiException
     * @throws ResponseProcessingException
     * @throws BadApiRequestException
     * @throws ForbiddenException
     * @throws InternalServerError
     * @throws NotFoundException
     * @throws TooManyRequestsException
     * @throws UnauthorizedException
     */
    public function testPaymentsList($request)
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('getPaymentsFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->getPayments($request);

        $this->assertTrue($response instanceof PaymentsResponse);
    }

    public function paymentsListDataProvider()
    {
        return array(
            array(null),
            array(PaymentsRequest::builder()->build()),
            array(array(
                'account_id' => 12,
            ))
        );
    }

    /**
     * @dataProvider errorResponseDataProvider
     * @param $httpCode
     * @param $errorResponse
     * @param $requiredException
     */
    public function testInvalidPaymentsList($httpCode, $errorResponse, $requiredException)
    {
        $payments = PaymentsRequest::builder()->build();
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $errorResponse,
                array('http_code' => $httpCode)
            ));

        $apiClient = new Client();
        $apiClient->setApiClient($curlClientStub)->setAuth('shopId', 'shopPassword');
        try {
            $apiClient->getPayments($payments);
        } catch (ApiException $e) {
            self::assertInstanceOf($requiredException, $e);
            return;
        }
        self::fail('Exception not thrown');
    }

    /**
     * @dataProvider paymentInfoDataProvider
     * @param mixed $paymentId
     * @param string $exceptionClassName
     * @throws ApiException
     * @throws ResponseProcessingException
     * @throws BadApiRequestException
     * @throws ForbiddenException
     * @throws InternalServerError
     * @throws NotFoundException
     * @throws TooManyRequestsException
     * @throws UnauthorizedException
     */
    public function testGetPaymentInfo($paymentId, $exceptionClassName = null)
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($exceptionClassName !== null ? self::never() : self::once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('paymentInfoFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();

        if ($exceptionClassName !== null) {
            $this->setExpectedException($exceptionClassName);
        }

        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->getPaymentInfo($paymentId);

        self::assertTrue($response instanceof PaymentResponse);
    }

    public function paymentInfoDataProvider()
    {
        return array(
            array(null, '\InvalidArgumentException'),
            array(Random::str(36)),
            array(new StringObject(Random::str(36))),
            array(true, '\InvalidArgumentException'),
            array(false, '\InvalidArgumentException'),
            array(0, '\InvalidArgumentException'),
            array(1, '\InvalidArgumentException'),
            array(0.1, '\InvalidArgumentException'),
            array(Random::str(35), '\InvalidArgumentException'),
            array(Random::str(37), '\InvalidArgumentException'),
            array(new DateTime(), '\InvalidArgumentException'),
            array(array(), '\InvalidArgumentException'),
        );
    }

    /**
     * @dataProvider errorResponseDataProvider
     * @param $httpCode
     * @param $errorResponse
     * @param $requiredException
     * @throws Exception
     */
    public function testInvalidGetPaymentInfo($httpCode, $errorResponse, $requiredException)
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $errorResponse,
                array('http_code' => $httpCode)
            ));

        $apiClient = new Client();
        $apiClient->setApiClient($curlClientStub)->setAuth('shopId', 'shopPassword');
        try {
            $apiClient->getPaymentInfo(Random::str(36));
        } catch (ApiException $e) {
            self::assertInstanceOf($requiredException, $e);
            return;
        }
        self::fail('Exception not thrown');
    }

    public function testCapturePayment()
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('capturePaymentFixtures.json'),
                array('http_code' => 200)
            ));

        $capturePaymentRequest = array(
            'amount' => array(
                'value' => 123,
                'currency' => 'EUR',
            )
        );

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->capturePayment($capturePaymentRequest, '1ddd77af-0bd7-500d-895b-c475c55fdefc', 123);

        $this->assertTrue($response instanceof CreateCaptureResponse);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('capturePaymentFixtures.json'),
                array('http_code' => 200)
            ));

        $capturePaymentRequest = CreateCaptureRequest::builder()->setAmount(10)->build();

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->capturePayment($capturePaymentRequest, '1ddd77af-0bd7-500d-895b-c475c55fdefc');

        $this->assertTrue($response instanceof CreateCaptureResponse);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"type":"error","code":"request_accepted","retry_after":123}',
                array('http_code' => 202)
            ));

        try {
            $response = $apiClient
                ->setApiClient($curlClientStub)
                ->setAuth('shopId', 'shopPassword')
                ->capturePayment($capturePaymentRequest, '1ddd77af-0bd7-500d-895b-c475c55fdefc', 123);
            self::fail('Exception not thrown');
        } catch (ApiException $e) {
            self::assertInstanceOf('YooKassa\Common\Exceptions\ResponseProcessingException', $e);
        }

        try {
            $apiClient->capturePayment($capturePaymentRequest, null, 123);
        } catch (InvalidArgumentException $e) {
            // it's ok
            return;
        }
        self::fail('Exception not thrown');
    }

    /**
     * @dataProvider errorResponseDataProvider
     * @param $httpCode
     * @param $errorResponse
     * @param $requiredException
     * @throws Exception
     */
    public function testInvalidCapturePayment($httpCode, $errorResponse, $requiredException)
    {
        $capturePaymentRequest = CreateCaptureRequest::builder()->setAmount(10)->build();
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $errorResponse,
                array('http_code' => $httpCode)
            ));

        $apiClient = new Client();
        $apiClient->setApiClient($curlClientStub)->setAuth('shopId', 'shopPassword');
        try {
            $apiClient->capturePayment($capturePaymentRequest, '1ddd77af-0bd7-500d-895b-c475c55fdefc', 123);
        } catch (ApiException $e) {
            self::assertInstanceOf($requiredException, $e);
            return;
        }
        self::fail('Exception not thrown');
    }

    /**
     * @dataProvider paymentInfoDataProvider
     * @param mixed $paymentId
     * @param string|null $exceptionClassName
     */
    public function testPaymentIdCapturePayment($paymentId, $exceptionClassName = null)
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($exceptionClassName === null ? self::once() : self::never())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('capturePaymentFixtures.json'),
                array('http_code' => 200)
            ));

        $capturePaymentRequest = array(
            'amount' => array(
                'value' => 123,
                'currency' => 'EUR',
            )
        );

        if ($exceptionClassName !== null) {
            $this->setExpectedException($exceptionClassName);
        }

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->capturePayment($capturePaymentRequest, $paymentId, 123);

        self::assertTrue($response instanceof CreateCaptureResponse);
    }

    /**
     * @dataProvider paymentInfoDataProvider
     * @param mixed $paymentId
     * @param string $exceptionClassName
     */
    public function testCancelPayment($paymentId, $exceptionClassName = null)
    {
        $invalid = $exceptionClassName !== null;
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($invalid ? self::never() : self::once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('cancelPaymentFixtures.json'),
                array('http_code' => 200)
            ));

        if ($invalid) {
            $this->setExpectedException($exceptionClassName);
        }

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->cancelPayment($paymentId, 123);

        $this->assertTrue($response instanceof CancelResponse);
    }

    /**
     * @dataProvider errorResponseDataProvider
     * @param $httpCode
     * @param $errorResponse
     * @param $requiredException
     */
    public function testInvalidCancelPayment($httpCode, $errorResponse, $requiredException)
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $errorResponse,
                array('http_code' => $httpCode)
            ));

        $apiClient = new Client();
        $apiClient->setApiClient($curlClientStub)->setAuth('shopId', 'shopPassword');
        try {
            $apiClient->cancelPayment(Random::str(36));
        } catch (ApiException $e) {
            self::assertInstanceOf($requiredException, $e);
            return;
        }
        self::fail('Exception not thrown');
    }

    /**
     * @dataProvider refundsDataProvider
     * @param mixed $refundsRequest
     */
    public function testGetRefunds($refundsRequest)
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects(self::once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('refundsInfoFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->getRefunds($refundsRequest);

        $this->assertTrue($response instanceof RefundsResponse);
    }

    public function refundsDataProvider()
    {
        return array(
            array(null),
            array(RefundsRequest::builder()->build()),
            array(array(
                'account_id' => 123,
            )),
        );
    }

    /**
     * @dataProvider errorResponseDataProvider
     * @param $httpCode
     * @param $errorResponse
     * @param $requiredException
     */
    public function testInvalidGetRefunds($httpCode, $errorResponse, $requiredException)
    {
        $refundsRequest = RefundsRequest::builder()->build();
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $errorResponse,
                array('http_code' => $httpCode)
            ));

        $apiClient = new Client();
        $apiClient->setApiClient($curlClientStub)->setAuth('shopId', 'shopPassword');
        try {
            $apiClient->getRefunds($refundsRequest);
        } catch (ApiException $e) {
            self::assertInstanceOf($requiredException, $e);
            return;
        }
        self::fail('Exception not thrown');
    }

    public function testCreateRefund()
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('createRefundFixtures.json'),
                array('http_code' => 200)
            ));

        $refundRequest = CreateRefundRequest::builder()->setPaymentId('1ddd77af-0bd7-500d-895b-c475c55fdefc')->setAmount(123)->build();

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createRefund($refundRequest, 123);

        $this->assertTrue($response instanceof CreateRefundResponse);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('createRefundFixtures.json'),
                array('http_code' => 200)
            ));

        $refundRequest = array(
            'payment_id' => '1ddd77af-0bd7-500d-895b-c475c55fdefc',
            'amount' => array(
                'value' => 321,
                'currency' => 'RUB',
            )
        );

        $apiClient = new Client();

        $response = $apiClient
            ->setMaxRequestAttempts(2)
            ->setRetryTimeout(1000)
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createRefund($refundRequest);

        $this->assertTrue($response instanceof CreateRefundResponse);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"type":"error","code":"request_accepted","retry_after":1800}',
                array('http_code' => 202)
            ));

        try {
            $response = $apiClient
                ->setApiClient($curlClientStub)
                ->setAuth('shopId', 'shopPassword')
                ->createRefund($refundRequest, 123);
        } catch (ApiException $e) {
            self::assertInstanceOf('YooKassa\Common\Exceptions\ResponseProcessingException', $e);
            return;
        }

        self::fail('Exception not thrown');
    }

    /**
     * @dataProvider errorResponseDataProvider
     * @param $httpCode
     * @param $errorResponse
     * @param $requiredException
     * @throws Exception
     */
    public function testInvalidCreateRefund($httpCode, $errorResponse, $requiredException)
    {
        $refundRequest = CreateRefundRequest::builder()->setPaymentId('1ddd77af-0bd7-500d-895b-c475c55fdefc')->setAmount(123)->build();
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $errorResponse,
                array('http_code' => $httpCode)
            ));

        $apiClient = new Client();
        $apiClient->setApiClient($curlClientStub)->setAuth('shopId', 'shopPassword');
        try {
            $apiClient->createRefund($refundRequest, 123);
        } catch (ApiException $e) {
            self::assertInstanceOf($requiredException, $e);
            return;
        }
        self::fail('Exception not thrown');
    }

    /**
     * @dataProvider paymentInfoDataProvider
     *
     * @param mixed $refundId
     * @param string $exceptionClassName
     * @throws ApiException
     * @throws BadApiRequestException
     * @throws ForbiddenException
     * @throws InternalServerError
     * @throws NotFoundException
     * @throws ResponseProcessingException
     * @throws TooManyRequestsException
     * @throws UnauthorizedException
     */
    public function testRefundInfo($refundId, $exceptionClassName = null)
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($exceptionClassName === null ? self::once() : self::never())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('refundInfoFixtures.json'),
                array('http_code' => 200)
            ));

        if ($exceptionClassName !== null) {
            $this->setExpectedException($exceptionClassName);
        }

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->getRefundInfo($refundId);

        $this->assertTrue($response instanceof RefundResponse);

        try {
            $apiClient->getRefundInfo(null);
        } catch (InvalidArgumentException $e) {
            // it's ok
            return;
        }
        self::fail('Exception not thrown');
    }

    /**
     * @dataProvider errorResponseDataProvider
     * @param $httpCode
     * @param $errorResponse
     * @param $requiredException
     * @throws Exception
     */
    public function testInvalidRefundInfo($httpCode, $errorResponse, $requiredException)
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $errorResponse,
                array('http_code' => $httpCode)
            ));

        $apiClient = new Client();
        $apiClient->setApiClient($curlClientStub)->setAuth('shopId', 'shopPassword');
        try {
            $apiClient->getRefundInfo(Random::str(36));
        } catch (ApiException $e) {
            self::assertInstanceOf($requiredException, $e);
            return;
        }
        self::fail('Exception not thrown');
    }

    public function testApiException()
    {
        $payment = CreatePaymentRequest::builder()
            ->setAmount(123)
            ->setPaymentToken(Random::str(36))
            ->build();

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                'unknown response here',
                array('http_code' => 444)
            ));
        $this->setExpectedException('YooKassa\Common\Exceptions\ApiException');

        $apiClient = new Client();
        $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createPayment($payment, 123);
    }

    public function testBadRequestException()
    {
        $payment = CreatePaymentRequest::builder()
            ->setAmount(123)
            ->setPaymentToken(Random::str(36))
            ->build();

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"description": "error_msg", "code": "error_code", "parameter_name": "parameter_name"}',
                array('http_code' => 400)
            ));
        $this->setExpectedException('YooKassa\Common\Exceptions\BadApiRequestException');

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createPayment($payment, 123);
    }

    public function testTechnicalErrorException()
    {
        $payment = CreatePaymentRequest::builder()
            ->setAmount(123)
            ->setPaymentToken(Random::str(36))
            ->build();

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"description": "error_msg", "code": "error_code"}',
                array('http_code' => 500)
            ));
        $this->setExpectedException('YooKassa\Common\Exceptions\InternalServerError');

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createPayment($payment, 123);
    }

    public function testUnauthorizedException()
    {
        $payment = CreatePaymentRequest::builder()
            ->setAmount(123)
            ->setPaymentToken(Random::str(36))
            ->build();

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"description": "error_msg"}',
                array('http_code' => 401)
            ));
        $this->setExpectedException('YooKassa\Common\Exceptions\UnauthorizedException');

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createPayment($payment, 123);
    }

    public function testForbiddenException()
    {
        $payment = CreatePaymentRequest::builder()
            ->setAmount(123)
            ->setPaymentToken(Random::str(36))
            ->build();

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"description": "error_msg","error_code": "error_code", "parameter_name": "parameter_name", "operation_name": "operation_name"}',
                array('http_code' => 403)
            ));
        $this->setExpectedException('YooKassa\Common\Exceptions\ForbiddenException');

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createPayment($payment, 123);
    }

    public function testNotFoundException()
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"description": "error_msg","error_code": "error_code", "parameter_name": "parameter_name", "operation_name": "operation_name"}',
                array('http_code' => 404)
            ));
        $this->setExpectedException('YooKassa\Common\Exceptions\NotFoundException');

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->getPaymentInfo(Random::str(36));
    }

    public function testToManyRequestsException()
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"description": "error_msg","error_code": "error_code", "parameter_name": "parameter_name", "operation_name": "operation_name"}',
                array('http_code' => 429)
            ));
        $this->setExpectedException('YooKassa\Common\Exceptions\TooManyRequestsException');

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->getPaymentInfo(Random::str(36));
    }

    public function testAnotherExceptions()
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{}',
                array('http_code' => 322)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->getPaymentInfo(Random::str(36));

        self::assertNull($response);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{}',
                array('http_code' => 402)
            ));

        $apiClient = new Client();

        $this->setExpectedException('YooKassa\Common\Exceptions\ApiException');

        $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->getPaymentInfo(Random::str(36));

    }

    public function testConfig()
    {
        $apiClient = new Client();
        $apiClient->setConfig(array(
            'url' => 'test'
        ));

        $this->assertEquals(array('url' => 'test'), $apiClient->getConfig());
    }

    public function testSetLogger()
    {
        $wrapped = new ArrayLogger();
        $logger = new LoggerWrapper($wrapped);

        $apiClient = new Client();
        $apiClient->setLogger($logger);

        $clientMock = $this->getMockBuilder('YooKassa\Client\ApiClientInterface')
            ->setMethods(array('setLogger', 'setConfig', 'call', 'setShopId', 'getUserAgent', 'setBearerToken', 'setShopPassword'))
            ->disableOriginalConstructor()
            ->getMock();
        $expectedLoggers = array();
        $clientMock->expects(self::exactly(3))->method('setLogger')->willReturnCallback(function ($logger) use(&$expectedLoggers) {
            $expectedLoggers[] = $logger;
        });
        $clientMock->expects(self::once())->method('setConfig')->willReturn($clientMock);

        $apiClient->setApiClient($clientMock);
        self::assertSame($expectedLoggers[0], $logger);

        $apiClient->setLogger($wrapped);
        $apiClient->setLogger(function ($level, $log, $context = array()) use ($wrapped) {
            $wrapped->log($level, $log, $context);
        });
    }

    public function testDecodeInvalidData()
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects(self::any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"invalid":"json"',
                array('http_code' => 200)
            ));
        $this->setExpectedException('YooKassa\Common\Exceptions\JsonException');

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->getPaymentInfo(Random::str(36));
    }

    public function testEncodeMultibyteData()
    {
        $instance = new TestClient();

        $value = array('hello' => 'Привет', 'olleh' => 'سلام');
        $result = $instance->encode($value);

        self::assertTrue(strpos($result, 'Привет') !== false);
        self::assertTrue(strpos($result, 'سلام') !== false);
    }

    public function testEncodeInvalidData()
    {
        $instance = new TestClient();

        if (version_compare(PHP_VERSION, '5.5') >= 0) {
            $value = array('test' => 'test', 'val' => null);
            $value['val'] = &$value;
            try {
                $instance->encode($value);
                self::fail('Exception not thrown');
            } catch (JsonException $e) {
                self::assertEquals(JSON_ERROR_RECURSION, $e->getCode());
                self::assertEquals('Failed serialize json. Unknown error', $e->getMessage());
            }

            $value = array('test' => iconv('utf-8', 'windows-1251', 'абвгдеёжз'));
            try {
                $instance->encode($value);
                self::fail('Exception not thrown');
            } catch (JsonException $e) {
                self::assertEquals(JSON_ERROR_UTF8, $e->getCode());
                self::assertEquals('Failed serialize json. Malformed UTF-8 characters, possibly incorrectly encoded',
                    $e->getMessage());
            }
        } else {
            $value = array('test' => iconv('utf-8', 'windows-1251', 'абвгдеёжз'));
            $decoded = json_decode(json_encode($value), true);
            self::assertNotSame($decoded, $value);
        }
    }

    public function testCreatePaymentErrors() {
        $payment = CreatePaymentRequest::builder()
            ->setAmount(123)
            ->setPaymentToken(Random::str(36))
            ->build();

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('createPaymentErrorsGeneralFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createPayment($payment);

        self::assertSame($curlClientStub, $apiClient->getApiClient());
        self::assertTrue($response instanceof CreatePaymentResponse);
        self::assertEquals("canceled", $response->getStatus());
        self::assertEquals("general_decline", $response->getCancellationDetails()->getReason());
    }

    /**
     * @throws ApiException
     * @throws BadApiRequestException
     * @throws ForbiddenException
     * @throws InternalServerError
     * @throws NotFoundException
     * @throws ResponseProcessingException
     * @throws TooManyRequestsException
     * @throws UnauthorizedException
     * @throws ApiConnectionException
     * @throws AuthorizeException
     */
    public function testCreateReceipt()
    {
        // Create Receipt via object
        $receipt = $this->createReceiptViaObject();
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('createReceiptFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createReceipt($receipt);

        self::assertSame($curlClientStub, $apiClient->getApiClient());
        self::assertTrue($response instanceof AbstractReceiptResponse);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('createReceiptFixtures.json'),
                array('http_code' => 200)
            ));

        // Create Receipt via array
        $receipt = $this->createReceiptViaArray();
        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createReceipt($receipt, 123);

        self::assertSame($curlClientStub, $apiClient->getApiClient());
        self::assertTrue($response instanceof AbstractReceiptResponse);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"type":"error","code":"request_accepted","retry_after":1800}',
                array('http_code' => 202)
            ));

        try {
            $response = $apiClient
                ->setApiClient($curlClientStub)
                ->setAuth('shopId', 'shopPassword')
                ->createReceipt($receipt, 123);
            self::fail('Исключение не было выброшено');
        } catch (ApiException $e) {
            self::assertInstanceOf('YooKassa\Common\Exceptions\ResponseProcessingException', $e);
            return;
        }

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"type":"error","code":"request_accepted"}',
                array('http_code' => 202)
            ));

        try {
            $apiClient->setRetryTimeout(0);
            $response = $apiClient
                ->setApiClient($curlClientStub)
                ->setAuth('shopId', 'shopPassword')
                ->createReceipt($receipt, 123);
            self::fail('Исключение не было выброшено');
        } catch (ResponseProcessingException $e) {
            self::assertEquals(Client::DEFAULT_DELAY, $e->retryAfter);
            return;
        }
    }

    /**
     * @return array
     */
    private function createReceiptViaArray()
    {
        return array(
            'customer' => array(
                'full_name' => 'Иванов Иван Иванович',
                'inn' => '6321341814',
                'email' => 'johndoe@yoomoney.ru',
                'phone' => '79000000000'
            ),
            'items' => array(
                array(
                    'description' => 'string',
                    'quantity' => 1,
                    'amount' => array(
                        'value' => '10.00',
                        'currency' => 'RUB'
                    ),
                    'vat_code' => 1,
                    'payment_subject' => 'commodity',
                    'payment_mode' => 'full_prepayment',
                    'product_code' => '00 00 00 01 00 21 FA 41 00 23 05 41 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 12 00 AB 00',
                    'country_of_origin_code' => 'RU',
                    'customs_declaration_number' => '10714040/140917/0090376',
                    'excise' => '20.00'
                )
            ),
            'tax_system_code' => 1,
            'type' => 'payment',
            'send' => true,
            'settlements' => array(
                array(
                    'type' => 'cashless',
                    'amount' => array(
                        'value' => '10.00',
                        'currency' => 'RUB'
                    )
                )
            ),
            'payment_id' => '1da5c87d-0984-50e8-a7f3-8de646dd9ec9'
        );
    }

    /**
     * @return CreatePostReceiptRequest
     */
    private function createReceiptViaObject()
    {
        $customer = new ReceiptCustomer(array(
            'full_name' => 'Иванов Иван Иванович',
            'inn' => '6321341814',
            'email' => 'johndoe@yoomoney.ru',
            'phone' => '79000000000'
        ));
        $settlement = new Settlement(array(
            'type' => 'cashless',
            'amount' => array(
                'value' => '10.00',
                'currency' => 'RUB'
            )
        ));
        $receiptItem = new ReceiptItem(array(
            'description' => 'string',
            'quantity' => 1,
            'amount' => array(
                'value' => '10.00',
                'currency' => 'RUB'
            ),
            'vat_code' => 1,
            'payment_subject' => 'commodity',
            'payment_mode' => 'full_prepayment',
            'product_code' => '00 00 00 01 00 21 FA 41 00 23 05 41 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 12 00 AB 00',
            'country_of_origin_code' => 'RU',
            'customs_declaration_number' => '10714040/140917/0090376',
            'excise' => '20.00'
        ));

        return CreatePostReceiptRequest::builder()
            ->setCustomer($customer)
            ->setType(ReceiptType::PAYMENT)
            ->setObjectId('1da5c87d-0984-50e8-a7f3-8de646dd9ec9', ReceiptType::PAYMENT)
            ->setSend(true)
            ->setSettlements(array($settlement))
            ->setOnBehalfOf('545665')
            ->setItems(array($receiptItem))
            ->build();
    }

    public function testCreateDeal()
    {
        $deal = CreateDealRequest::builder()
            ->setType(DealType::SAFE_DEAL)
            ->setFeeMoment(FeeMoment::PAYMENT_SUCCEEDED)
            ->build();

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('createDealFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createDeal($deal);

        self::assertSame($curlClientStub, $apiClient->getApiClient());
        self::assertTrue($response instanceof CreateDealResponse);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('createDealFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createDeal(array(
                'type' => 'safe_deal',
                'fee_moment' => 'payment_succeeded',
                'description' => Random::str(36),
            ), 123);

        self::assertSame($curlClientStub, $apiClient->getApiClient());
        self::assertTrue($response instanceof CreateDealResponse);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"type":"error","code":"request_accepted","retry_after":1800}',
                array('http_code' => 202)
            ));

        try {
            $response = $apiClient
                ->setApiClient($curlClientStub)
                ->setAuth('shopId', 'shopPassword')
                ->createDeal($deal, 123);
            self::fail('Исключение не было выброшено');
        } catch (ApiException $e) {
            self::assertInstanceOf('YooKassa\Common\Exceptions\ResponseProcessingException', $e);
            return;
        }

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"type":"error","code":"request_accepted"}',
                array('http_code' => 202)
            ));

        try {
            $apiClient->setRetryTimeout(0);
            $response = $apiClient
                ->setApiClient($curlClientStub)
                ->setAuth('shopId', 'shopPassword')
                ->createDeal($deal, 123);
            self::fail('Исключение не было выброшено');
        } catch (ResponseProcessingException $e) {
            self::assertEquals(Client::DEFAULT_DELAY, $e->retryAfter);
            return;
        }
    }

    /**
     * @dataProvider dealInfoDataProvider
     * @param mixed $dealId
     * @param string $exceptionClassName
     * @throws ApiException
     * @throws ResponseProcessingException
     * @throws BadApiRequestException
     * @throws ForbiddenException
     * @throws InternalServerError
     * @throws NotFoundException
     * @throws TooManyRequestsException
     * @throws UnauthorizedException
     * @throws ExtensionNotFoundException
     */
    public function testGetDealInfo($dealId, $exceptionClassName = null)
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($exceptionClassName !== null ? self::never() : self::once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('dealInfoFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();

        if ($exceptionClassName !== null) {
            $this->setExpectedException($exceptionClassName);
        }

        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->getDealInfo($dealId);

        self::assertTrue($response instanceof DealResponse);
    }

    public function dealInfoDataProvider()
    {
        return array(
            array(null, '\InvalidArgumentException'),
            array(Random::str(36)),
            array(new StringObject(Random::str(36))),
            array(true, '\InvalidArgumentException'),
            array(false, '\InvalidArgumentException'),
            array(0, '\InvalidArgumentException'),
            array(1, '\InvalidArgumentException'),
            array(0.1, '\InvalidArgumentException'),
            array(Random::str(35), '\InvalidArgumentException'),
            array(Random::str(51), '\InvalidArgumentException'),
            array(new DateTime(), '\InvalidArgumentException'),
            array(array(), '\InvalidArgumentException'),
        );
    }

    /**
     * @dataProvider dealsDataProvider
     * @param mixed $dealsRequest
     */
    public function testGetDeals($dealsRequest)
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects(self::once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('dealsInfoFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->getDeals($dealsRequest);

        $this->assertTrue($response instanceof DealsResponse);
    }

    public function dealsDataProvider()
    {
        return array(
            array(null),
            array(DealsRequest::builder()->build()),
            array(array(
                'status' => 'closed',
            )),
        );
    }

    public function testCreatePayout()
    {
        $payout = CreatePayoutRequest::builder()
            ->setAmount(array('value' => '320', 'currency' => 'RUB'))
            ->setPayoutDestinationData(array(
                'type' => PaymentMethodType::YOO_MONEY,
                'account_number' => '41001614575714'
            ))
            ->setDescription('Выплата по заказу №37')
            ->setMetadata(array('order_id' => '37'))
            ->setDeal(array('id' => 'dl-285e5ee7-0022-5000-8000-01516a44b147'))
            ->build();

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('createPayoutFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createPayout($payout);

        self::assertSame($curlClientStub, $apiClient->getApiClient());
        self::assertTrue($response instanceof CreatePayoutResponse);

        $payout = CreatePayoutRequest::builder()
            ->setAmount(array('value' => '320', 'currency' => 'RUB'))
            ->setPayoutToken('<Синоним банковской карты>')
            ->setDescription('Выплата по заказу №37')
            ->setMetadata(array('order_id' => '37'))
            ->setDeal(array('id' => 'dl-285e5ee7-0022-5000-8000-01516a44b147'))
            ->build();

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('createPayoutFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createPayout($payout);

        self::assertSame($curlClientStub, $apiClient->getApiClient());
        self::assertTrue($response instanceof CreatePayoutResponse);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('createPayoutFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();
        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->createPayout(array(
                'amount' => array('value' => '320', 'currency' => 'RUB'),
                'description' => 'Выплата по заказу №37',
                'payout_token' => '<Синоним банковской карты>',
                'deal' => array('id' => 'dl-285e5ee7-0022-5000-8000-01516a44b147'),
                'metadata' => array('order_id' => '37'),
            ), 123);

        self::assertSame($curlClientStub, $apiClient->getApiClient());
        self::assertTrue($response instanceof CreatePayoutResponse);

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"type":"error","code":"request_accepted","retry_after":1800}',
                array('http_code' => 202)
            ));

        try {
            $response = $apiClient
                ->setApiClient($curlClientStub)
                ->setAuth('shopId', 'shopPassword')
                ->createPayout($payout, 123);
            self::fail('Исключение не было выброшено');
        } catch (ApiException $e) {
            self::assertInstanceOf('YooKassa\Common\Exceptions\ResponseProcessingException', $e);
            return;
        }

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"type":"error","code":"request_accepted"}',
                array('http_code' => 202)
            ));

        try {
            $apiClient->setRetryTimeout(0);
            $response = $apiClient
                ->setApiClient($curlClientStub)
                ->setAuth('shopId', 'shopPassword')
                ->createPayout($payout, 123);
            self::fail('Исключение не было выброшено');
        } catch (ResponseProcessingException $e) {
            self::assertEquals(Client::DEFAULT_DELAY, $e->retryAfter);
            return;
        }

        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($this->any())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                '{"type":"error","code":"request_accepted"}',
                array('http_code' => 202)
            ));

        try {
            $apiClient->setRetryTimeout(0);
            $response = $apiClient
                ->setApiClient($curlClientStub)
                ->setAuth('shopId', 'shopPassword')
                ->createPayout(array(
                    'amount' => array('value' => '320', 'currency' => 'RUB'),
                    'description' => 'Выплата по заказу №37',
                    'payout_token' => '<Синоним банковской карты>',
                    'payout_destination_data' => array('type' => 'bank_card', 'card' => array('number' => '1234567890123456')),
                    'deal' => array('id' => 'dl-285e5ee7-0022-5000-8000-01516a44b147'),
                    'metadata' => array('order_id' => '37'),
                ), 123);
            self::fail('Исключение не было выброшено');
        } catch (ResponseProcessingException $e) {
            self::assertEquals(Client::DEFAULT_DELAY, $e->retryAfter);
            return;
        }
    }

    /**
     * @dataProvider payoutInfoDataProvider
     * @param mixed $payoutId
     * @param string $exceptionClassName
     * @throws ApiException
     * @throws ResponseProcessingException
     * @throws BadApiRequestException
     * @throws ForbiddenException
     * @throws InternalServerError
     * @throws NotFoundException
     * @throws TooManyRequestsException
     * @throws UnauthorizedException
     * @throws ExtensionNotFoundException
     */
    public function testGetPayoutInfo($payoutId, $exceptionClassName = null)
    {
        $curlClientStub = $this->getCurlClientStub();
        $curlClientStub
            ->expects($exceptionClassName !== null ? self::never() : self::once())
            ->method('sendRequest')
            ->willReturn(array(
                array('Header-Name' => 'HeaderValue'),
                $this->getFixtures('payoutInfoFixtures.json'),
                array('http_code' => 200)
            ));

        $apiClient = new Client();

        if ($exceptionClassName !== null) {
            $this->setExpectedException($exceptionClassName);
        }

        $response = $apiClient
            ->setApiClient($curlClientStub)
            ->setAuth('shopId', 'shopPassword')
            ->getPayoutInfo($payoutId);

        self::assertTrue($response instanceof PayoutResponse);
    }

    public function payoutInfoDataProvider()
    {
        return array(
            array(null, '\InvalidArgumentException'),
            array(Random::str(36)),
            array(new StringObject(Random::str(36))),
            array(true, '\InvalidArgumentException'),
            array(false, '\InvalidArgumentException'),
            array(0, '\InvalidArgumentException'),
            array(1, '\InvalidArgumentException'),
            array(0.1, '\InvalidArgumentException'),
            array(Random::str(35), '\InvalidArgumentException'),
            array(Random::str(51), '\InvalidArgumentException'),
            array(new DateTime(), '\InvalidArgumentException'),
            array(array(), '\InvalidArgumentException'),
        );
    }

    /**
     * @return PHPUnit_Framework_MockObject_MockObject
     */
    public function getCurlClientStub()
    {
        $clientStub = $this->getMockBuilder('YooKassa\Client\CurlClient')
            ->setMethods(array('sendRequest'))
            ->getMock();

        return $clientStub;
    }

    public function errorResponseDataProvider()
    {
        return array(
            array(NotFoundException::HTTP_CODE, '{}', 'YooKassa\Common\Exceptions\NotFoundException'),
            array(BadApiRequestException::HTTP_CODE, '{}', 'YooKassa\Common\Exceptions\BadApiRequestException'),
            array(BadApiRequestException::HTTP_CODE, '{}', 'YooKassa\Common\Exceptions\BadApiRequestException'),
            array(ForbiddenException::HTTP_CODE, '{}', 'YooKassa\Common\Exceptions\ForbiddenException'),
            array(UnauthorizedException::HTTP_CODE, '{}', 'YooKassa\Common\Exceptions\UnauthorizedException'),
            array(TooManyRequestsException::HTTP_CODE, '{}', 'YooKassa\Common\Exceptions\TooManyRequestsException'),
        );
    }

    /**
     * @return bool|string
     */
    private function getFixtures($fileName)
    {
        return file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'fixtures' . DIRECTORY_SEPARATOR . $fileName);
    }
}

class ArrayLogger
{
    private $lastLog;

    public function log($level, $message, $context)
    {
        $this->lastLog = array($level, $message, $context);
    }

    public function getLastLog()
    {
        return $this->lastLog;
    }
}

class TestClient extends Client
{
    public function encode($data)
    {
        $refl = new ReflectionMethod($this, 'encodeData');
        $refl->setAccessible(true);
        return $refl->invoke($this, $data);
    }
}
