<?php

namespace AvtoDev\AppMetrics\Contracts;

interface MetricInterface
{
    /**
     * Get metric name (key).
     *
     * @return string
     */
    public function name(): string;

    /**
     * Get metric value (or array of values).
     *
     * @return string|int|float|array
     */
    public function value();
}
