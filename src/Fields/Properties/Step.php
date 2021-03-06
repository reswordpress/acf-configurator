<?php

namespace pxlrbt\AcfConfigurator\Fields\Properties;

trait Step
{
    protected $step;

    /**
     * Set the value of step
     *
     * @param   mixed  $step
     * @return  static
     */
    public function step(int $value)
    {
        $this->step = $value;
        return $this;
    }
}
