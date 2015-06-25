<?php
namespace Pixplorer\Model\Unit\Out\Display;


class StandardDisplay implements iDisplayUnit
{

    public function write($message)
    {
        echo $message;
    }

    public function writeln($message)
    {
        $this->write("\n" . $message);
    }

    public function clear()
    {
        system('clear');
    }

}