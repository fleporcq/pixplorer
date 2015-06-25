<?php
namespace Pixplorer\Model;


use Symfony\Component\Yaml\Yaml;

class Configuration
{

    protected $filename;

    protected $values;

    const EXTENDS_KEY = 'extends';

    public function __construct($filename = null)
    {
        if ($filename != null) {

            $this->filename = $filename;

            if (!is_readable($filename)) {
                throw new \ErrorException('Unable to load file ' . $filename);
            }

            $values = Yaml::parse(file_get_contents($filename));

            if (array_key_exists(self::EXTENDS_KEY, $values)) {
                $extendsFilename = dirname($filename) . DIRECTORY_SEPARATOR . $values[self::EXTENDS_KEY];

                if (!is_readable($extendsFilename)) {
                    throw new \ErrorException('Unable to load file ' . $extendsFilename);
                }
                $extends = new Configuration($extendsFilename);
                $values = array_merge_recursive($extends->getValues(), $values);
            }

            $this->values = $values;
        }
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setValues($values)
    {
        $this->values = $values;
    }

    public function getValues()
    {
        return $this->values;
    }

    public function get($label)
    {
        $keys = explode(":", $label);
        $array = $this->values;
        foreach ($keys as $key) {
            if (array_key_exists($key, $array)) {
                $array = $array[$key];
            } else {
                throw new \Exception('[' . $label . '] Cette clé de configuration n\'existe pas (' . $key . ')');
            }
        }
        return $array;
    }
}