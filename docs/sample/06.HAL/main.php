<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use BEAR\Resource\ResourceObject;
use Ray\Di\Injector;
use BEAR\Resource\Module\ResourceModule;
use BEAR\Resource\Module\HalModule;

bootstarp: {
    $loader = require dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';
    /** @var $loader \Composer\Autoload\ClassLoader */
    $loader->addPsr4('MyVendor\\MyApp\\', __DIR__);
}

main: {
    // create resource client with HalModule
    $resource = Injector::create([new ResourceModule('MyVendor\MyApp'), new HalModule])->getInstance('BEAR\Resource\ResourceInterface');
    // request
    $news = $resource
        ->get
        ->uri('app://self/news')
        ->withQuery(['date' => 'today'])
        ->request();
    // output
    echo $news . PHP_EOL;
}