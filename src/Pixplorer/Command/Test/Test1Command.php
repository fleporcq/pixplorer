<?php
namespace Pixplorer\Command\Test;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Test1Command extends Command
{

    const QUIT = ':q';

    protected function configure()
    {
        $this->setName('test:test1');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        define('KEYBOARD', fopen('/dev/input/event3', 'r'));

        stream_set_blocking (KEYBOARD ,0);
        while (true) {
            $line = trim(fgets(KEYBOARD));
          $output->writeln($line.'toto');
           /* $line = trim(fgets(STDIN));
            if ($line == self::QUIT) {
                break;
            }
            if($line) {
                $output->writeln($line);
            }
            $output->write(".");*/
            sleep(1);
        }

    }
}