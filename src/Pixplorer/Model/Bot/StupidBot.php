<?php
namespace Pixplorer\Model\Bot;


use Pixplorer\Model\Unit\Out\Audio\StandardAudioUnit;
use Pixplorer\Model\Unit\Out\Display\StandardDisplayUnit;
use Pixplorer\Model\Unit\Out\Light\MockLightUnit;

class StupidBot extends Bot
{
    public function __construct()
    {
        $this->setAudioUnit(new StandardAudioUnit());
        $this->setDisplayUnit(new StandardDisplayUnit());
        $this->setLightUnit(new MockLightUnit());
    }
}