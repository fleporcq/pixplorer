<?php
namespace Pixplorer\Model\Unit\Out\Audio;

class StandardAudioUnit implements iAudioUnit
{
    public function play($file)
    {
        if (!is_readable($file)) {
            throw new \Exception(sprintf('Unable to read file %s', $file));
        }
        shell_exec(sprintf('aplay %s &', $file));
    }
}