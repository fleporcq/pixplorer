<?php
namespace Pixplorer\Model\Unit\Out\Display;

interface iDisplayUnit {

    public function write($message);

    public function writeln($message);

    public function clear();
}