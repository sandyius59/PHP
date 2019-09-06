<?php

// First, include Composer's autoload script from your vendor directory
include __DIR__ . '/../vendor/autoload.php';

// Configure Go! AOP - see configuration references for more details and options
$aopConfig = [
    'debug' => true,
    'cacheDir' => __DIR__ . '/../var/cache/aop',
    'appDir' => __DIR__ . '/../src/',
];

// Create application aspect kernel
$applicationAspectKernel = ApplicationAspectKernel::getInstance();

// Initialize it with your configuration
$applicationAspectKernel->init($aopConfig);

// Rest of your front controller code goes here..
