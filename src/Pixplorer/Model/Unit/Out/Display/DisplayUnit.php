<?php
namespace Pixplorer\Model\Unit\Out\Display;

abstract class DisplayUnit
{

    public abstract function write($message);

    public abstract function writeln($message);

    public abstract function clear();
}