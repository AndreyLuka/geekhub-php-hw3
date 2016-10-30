<?php

namespace Luka\DirectoryReader\DirectoryContent;

abstract class AbstractDirectoryContent implements DirectoryContentInterface
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @param string $path
     */
    public function __construct($path)
    {
        $this->path = $path;
    }
}
