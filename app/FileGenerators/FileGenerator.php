<?php

namespace App\FileGenerators;

use App\File;

abstract class FileGenerator
{
    /**
     * Generates file at with given name and path.
     */
    abstract protected function generate();

    /**
     * @return Name of created file.
     */
    abstract protected function fileName();

    /**
     * @return Absolute path to created file.
     */
    abstract protected function directoryPath();

    /**
     * @return string absolute path from directory + file name
     */
    protected function absolutePath()
    {
        return $this->directoryPath().'/'.$this->fileName();
    }

    /**
     * @return File instance with name and absolute path parameters.
     */
    public function generateFile()
    {
        $this->generate();
        $file = new File();
        $file->name = $this->fileName();
        $file->absolute_path = $this->absolutePath();
        $file->save();
        return $file;
    }
}