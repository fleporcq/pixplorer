<?php
namespace Pixplorer\Model\Unit\Out\Light;


class MockLightUnit extends LightUnit
{

    protected $state = false;

    public function switchOn()
    {
        $this->state = true;
        echo "\nLight is on";
    }

    public function switchOff()
    {
        $this->state = false;
        echo "\nLight is off";
    }

    public function getState()
    {
        return $this->state;
    }
}