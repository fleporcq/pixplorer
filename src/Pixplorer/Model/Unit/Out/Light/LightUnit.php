<?php
namespace Pixplorer\Model\Unit\Out\Light;

abstract class LightUnit
{

    public abstract function switchOn();

    public abstract function switchOff();

    public abstract function getState();

    public function toggle()
    {
        if ($this->getState()) {
            $this->switchOff();
        } else {
            $this->switchOn();
        }
    }


}