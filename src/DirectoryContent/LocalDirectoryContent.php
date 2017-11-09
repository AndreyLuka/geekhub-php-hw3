<?php

namespace Luka\DirectoryReader\DirectoryContent;

class LocalDirectoryContent extends AbstractDirectoryContent
{
    /**
     * {@inheritdoc}
     */
    public function getDirContent()
    {
        return scandir($this->path);
    }
}
