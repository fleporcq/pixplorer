<?php
namespace Pixplorer\Model\Bot;


use Pixplorer\Model\Unit\IA\AIUnit;
use Pixplorer\Model\Unit\Out\Audio\AudioUnit;
use Pixplorer\Model\Unit\Out\Display\DisplayUnit;
use Pixplorer\Model\Unit\Out\Light\LightUnit;

class Bot
{

    protected $ai;

    protected $display;

    protected $audio;

    protected $light;


    public function __construct()
    {

    }

    protected function setAIUnit(AIUnit $ai)
    {
        $this->ai = $ai;
    }

    protected function setDisplayUnit(DisplayUnit $display)
    {
        $this->display = $display;
    }

    protected function setAudioUnit(AudioUnit $audio)
    {
        $this->audio = $audio;
    }

    protected function setLightUnit(LightUnit $light)
    {
        $this->light = $light;
    }

    public function getDisplayUnit()
    {
        return $this->display;
    }

    public function getAudioUnit()
    {
        return $this->audio;
    }

    /**
     * @return LightUnit
     */
    public function getLightUnit()
    {
        return $this->light;
    }
}