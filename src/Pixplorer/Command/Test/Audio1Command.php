<?php
namespace Pixplorer\Command\Test;

use Pixplorer\Model\Resources;
use Pixplorer\Model\Unit\Out\Audio\StandardAudioUnit;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Audio1Command extends Command
{

    protected function configure()
    {
        $this->setName('test:audio1');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $resources = Resources::getInstance();
        $audio = new StandardAudioUnit();
        $audio->play($resources->getAudio('r2d2wst3.wav'));
    }
}