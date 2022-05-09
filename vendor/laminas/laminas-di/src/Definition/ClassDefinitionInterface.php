<?php

/**
 * @see       https://github.com/laminas/laminas-di for the canonical source repository
 * @copyright https://github.com/laminas/laminas-di/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-di/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Di\Definition;

use ReflectionClass;

interface ClassDefinitionInterface
{
    /**
     * @return ReflectionClass
     */
    public function getReflection() : ReflectionClass;

    /**
     * @return string[]
     */
    public function getSupertypes() : array;

    /**
     * @return string[]
     */
    public function getInterfaces() : array;

    /**
     * @return ParameterInterface[]
     */
    public function getParameters() : array;
}
