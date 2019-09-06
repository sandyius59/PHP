<?php

namespace Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation as Pointcut;

/**
 * My first aspect
 */
class MyFirstAspect implements Aspect
{

    /**
     * Method that will be invoked before targeted method is invoked.
     *
     * @param MethodInvocation $invocation Invocation
     * @Pointcut\Before("execution(public Example->*(*))")
     */
    protected function beforeMethodExecution(MethodInvocation $invocation)
    {
        $object = $invocation->getThis(); // You can access object on which method is invoked
        $arguments = $invocation->getArguments(); // You can access method invocation arguments
        $method = $invocation->getMethod(); // Even method metadata, and much more...

        // And, of course, you can execute your application logic
        echo sprintf('Class "%s" method "%s" has just been invoked with %s arguments', get_class($object), $method->getName(), count($arguments));
    }
}
