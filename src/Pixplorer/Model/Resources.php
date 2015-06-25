<?php

namespace Pixplorer\Model;


class Resources
{

    private static $instance;

    protected $path;

    const RESOURCES_FOLDER = 'resources';
    const AUDIO_FOLDER = 'audio';

    private function __construct()
    {
        $this->path = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . self::RESOURCES_FOLDER);
    }

    public function getPath()
    {
        return $this->path;
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            $instance = new Resources();
        }
        return $instance;
    }


    public function getAbsolutePath($filename)
    {
        return $this->path . DIRECTORY_SEPARATOR . $filename;
    }

    public function getAudio($filename)
    {
        return $this->getAbsolutePath(self::AUDIO_FOLDER . DIRECTORY_SEPARATOR . $filename);
    }
}