<?php

namespace App\FileGenerators;

interface IFileGenerator
{
    /**
     * Generates file at with given name and path.
     */
    public function generate();

    /**
     * @return Name of created file.
     */
    public function fileName();

    /**
     * @return Absolute path to created file.
     */
    public function filePath();
}