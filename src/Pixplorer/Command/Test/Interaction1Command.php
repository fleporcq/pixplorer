<?php
namespace Pixplorer\Command\Test;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Interaction1Command extends Command
{

    const QUIT = ':q';

    protected function configure()
    {
        $this->setName('test:interaction1');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        stream_set_blocking(STDIN, 0);
        while (true) {
            $line = trim(fgets(STDIN));
            if ($line == self::QUIT) {
                break;
            }
            if (!empty($line)) {
                $output->writeln('> ' . $line);
            }
            $output->write('.');
            sleep(1);
        }

    }
}