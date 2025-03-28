<?php

declare(strict_types=1);

namespace BVP\Converter;

/**
 * @author shimomo
 */
interface ConverterCoreInterface
{
    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return string|float|int|null
     *
     * @throws \InvalidArgumentException
     */
    public function __call(string $name, array $arguments): string|float|int|null;
}
