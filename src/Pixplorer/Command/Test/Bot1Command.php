<?php
namespace Pixplorer\Command\Test;

use Pixplorer\Model\Bot\StupidBot;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Bot1Command extends Command
{

    protected function configure()
    {
        $this->setName('test:bot1');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $bot = new StupidBot();
        $bot->getLightUnit()->switchOn();
        $bot->getLightUnit()->toggle();
    }
}