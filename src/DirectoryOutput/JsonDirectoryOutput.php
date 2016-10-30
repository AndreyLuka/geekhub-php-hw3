<?php

namespace Luka\DirectoryReader\DirectoryOutput;

class JsonDirectoryOutput extends AbstractDirectoryOutput
{
    /**
     * {@inheritdoc}
     */
    protected function outputDirContent($dirContentItem)
    {
        echo json_encode($dirContentItem), "\n";
    }
}
