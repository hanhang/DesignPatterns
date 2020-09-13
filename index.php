<?php
define('BASEDIR', __DIR__);
require_once BASEDIR . '/Common/Loader.php';
//命名空间，自动加载
spl_autoload_register('\\Common\\Loader::autoLoad');
//测试框架运行情况
Patterns\Test::test();
//抽象工厂模式
echo "--------抽象工厂模式---------\r\n";
$productFact = new Patterns\AbstractFactory\ProductFactory();
$product = $productFact->createDigitalProduct(100);
echo $product->calculatePrice() .  "\r\n";
$product = $productFact->createShippableProduct(300);
echo $product->calculatePrice() . "\r\n";
//建造者模式
echo "--------建造者模式---------\r\n";
$direct = new Patterns\Builder\Director();
$carBuilder = new Patterns\Builder\CarBuilder();
$direct->build($carBuilder)->getShow();
//工厂方法模式
echo "--------工厂方法模式---------\r\n";
$loggerFactory = new Patterns\FactoryMethod\StdoutLoggerFactory();
$loggerFactory->createLogger()->log("hello world");
//对象池模式
echo "--------对象池模式---------\r\n";
$sr = new Patterns\Pool\WorkerPool();
$sr->get();
echo $sr->count() . "\r\n";
//原型模式
echo "--------原型模式---------\r\n";
$fooPrototype = new Patterns\Prototype\FooBookPrototype();
$barPrototype = new Patterns\Prototype\BarBookPrototype();
for($i=0; $i<10; $i++){
    $book = clone $fooPrototype;
    $book->setTitle('Foo Book No: ' . $i);
    echo $book->getTitle() . "\r\n";
}
for($i=0; $i<5; $i++){
    $book = clone $fooPrototype;
    $book->setTitle('Bar Book No: ' . $i);
    echo $book->getTitle() . "\r\n";
}
//简单工厂模式
echo "--------简单工厂模式---------\r\n";
$factory = new Patterns\SimpleFactory\SimpleFactory();
$bicycle = $factory->createBicycle();
echo $bicycle->driveTo('ShangHai');
echo "\r\n";
//简单工厂模式
echo "--------单例模式---------\r\n";
$firstCall = Patterns\Singleton\Singleton::getInstance();
$secondCall = Patterns\Singleton\Singleton::getInstance();
echo "--------静态工厂模式---------\r\n";
$factory = Patterns\StaticFactory\StaticFactory::factory('number');
$factory->show();
$factory = Patterns\StaticFactory\StaticFactory::factory('string');
$factory->show();