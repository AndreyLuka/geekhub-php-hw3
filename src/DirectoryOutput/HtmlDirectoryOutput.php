<?php

namespace Luka\DirectoryReader\DirectoryOutput;

class HtmlDirectoryOutput extends AbstractDirectoryOutput
{
    /**
     * {@inheritdoc}
     */
    protected function outputDirContent($dirContentItem)
    {
        echo '<p>' . $dirContentItem . '</p>';
    }
}
