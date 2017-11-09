<?php

namespace Luka\DirectoryReader\DirectoryOutput;

class TextDirectoryOutput extends AbstractDirectoryOutput
{
    /**
     * {@inheritdoc}
     */
    protected function outputDirContent($dirContentItem)
    {
        echo $dirContentItem, "\n";
    }
}
