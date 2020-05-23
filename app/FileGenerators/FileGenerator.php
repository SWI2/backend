<?php

namespace App\FileGenerators;

abstract class FileGenerator
{
    /**
     * Generates file at with given name and path.
     */
    abstract public function generate();

    /**
     * @return Name of created file.
     */
    abstract public function fileName();

    /**
     * @return Absolute path to created file.
     */
    abstract public function directoryPath();

    /**
     * Createtes directory if not exists according directoryPath() result.
     */
    public function createDirectoryIfNotExists()
    {
        $path = $this->directoryPath();
        if (!file_exists($path)) {
            mkdir($path, 0775, true);
        }
    }

    /**
     * @return string absolute path from directory + file name
     */
    public function absolutePath()
    {
        return $this->directoryPath().'/'.$this->fileName();
    }
}