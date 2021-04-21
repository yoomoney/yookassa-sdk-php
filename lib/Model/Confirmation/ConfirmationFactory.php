<?php

/**
 * The MIT License
 *
 * Copyright (c) 2020 "YooMoney", NBСO LLC
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace YooKassa\Model\Confirmation;

use YooKassa\Model\ConfirmationType;

/**
 * Class ConfirmationFactory
 *
 * @package YooKassa
 */
class ConfirmationFactory
{
    private $typeClassMap = array(
        ConfirmationType::CODE_VERIFICATION => 'ConfirmationCodeVerification',
        ConfirmationType::DEEPLINK          => 'ConfirmationDeepLink',
        ConfirmationType::EXTERNAL          => 'ConfirmationExternal',
        ConfirmationType::REDIRECT          => 'ConfirmationRedirect',
        ConfirmationType::EMBEDDED          => 'ConfirmationEmbedded',
        ConfirmationType::QR                => 'ConfirmationQr',
    );

    /**
     * Возвращает объект, соответствующий типу подтверждения платежа
     *
     * @param string $type Тип подтверждения платежа
     *
     * @return AbstractConfirmation
     */
    public function factory($type)
    {
        if (!is_string($type)) {
            throw new \InvalidArgumentException('Invalid confirmation value in confirmation factory');
        }
        if (!array_key_exists($type, $this->typeClassMap)) {
            throw new \InvalidArgumentException('Invalid confirmation value type "'.$type.'"');
        }
        $className = __NAMESPACE__.'\\'.$this->typeClassMap[$type];

        return new $className();
    }

    /**
     * Возвращает объект, соответствующий типу подтверждения платежа, из массива данных
     *
     * @param array $data Массив данных подтверждения платежа
     * @param string|null $type Тип подтверждения платежа
     *
     * @return AbstractConfirmation
     */
    public function factoryFromArray(array $data, $type = null)
    {
        if ($type === null) {
            if (array_key_exists('type', $data)) {
                $type = $data['type'];
                unset($data['type']);
            } else {
                throw new \InvalidArgumentException(
                    'Parameter type not specified in ConfirmationFactory.factoryFromArray()'
                );
            }
        }
        $confirmation = $this->factory($type);
        foreach ($data as $key => $value) {
            if ($confirmation->offsetExists($key)) {
                $confirmation->offsetSet($key, $value);
            }
        }

        return $confirmation;
    }
}