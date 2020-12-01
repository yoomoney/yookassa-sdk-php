<?php
//
//namespace YooKassa;
//
//use PHPUnit\Framework\TestCase;
//
//require_once __DIR__ . '/../lib/autoload.php';
//
//class AutoloadTest extends TestCase
//{
//    public function testAutoload()
//    {
//        $functions = spl_autoload_functions();
//        $lastFunction = array_pop($functions);
//        self::assertEquals('yookassaSdkLoadClass', $lastFunction);
//
//        self::assertTrue(defined('YOOKASSA_SDK_ROOT_PATH'));
//        self::assertFalse(!defined('YOOKASSA_SDK_ROOT_PATH'));
//        self::assertTrue(defined('YOOKASSA_SDK_PSR_LOG_PATH'));
//        self::assertFalse(!defined('YOOKASSA_SDK_PSR_LOG_PATH'));
//
//        foreach ($functions as $function) {
//            spl_autoload_unregister($function);
//        }
//
//        $this->walkDirectoriesAndTest(YOOKASSA_SDK_ROOT_PATH, 'YooKassa');
//        $this->walkDirectoriesAndTest(YOOKASSA_SDK_PSR_LOG_PATH, 'Psr\Log');
//
//        self::assertFalse(class_exists('Unknown\\Class\\Name'));
//
//        spl_autoload_unregister($lastFunction);
//        foreach ($functions as $function) {
//            spl_autoload_register($function);
//        }
//    }
//
//    private function walkDirectoriesAndTest($directoryName, $namespace)
//    {
//        $dir = opendir($directoryName);
//        while (($entry = readdir($dir)) !== false) {
//            if ($entry === '.' || $entry === '..') {
//                continue;
//            }
//            $path = $directoryName . DIRECTORY_SEPARATOR . $entry;
//            if (is_dir($entry)) {
//                $this->walkDirectoriesAndTest($path, $namespace . '\\' . $entry);
//            } else {
//                $extension = pathinfo($entry, PATHINFO_EXTENSION);
//                if ($extension === 'php' && strtoupper($entry[0]) === $entry[0]) {
//                    $className = $namespace . '\\' . pathinfo($entry, PATHINFO_FILENAME);
//                    if (!$this->classExists($className)) {
//                        yookassaSdkLoadClass($className);
//                        self::assertTrue($this->classExists($className), 'Class "' . $className . '" not exists');
//                    }
//                }
//            }
//        }
//        closedir($dir);
//    }
//
//    private function classExists($className)
//    {
//        return class_exists($className, false) || interface_exists($className, false) || trait_exists($className, false);
//    }
//}