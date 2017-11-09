<?php

namespace Luka\DirectoryReader\DirectoryOutput;

use Luka\DirectoryReader\DirectoryContent\DirectoryContentInterface;

abstract class AbstractDirectoryOutput implements DirectoryOutputInterface
{
    /**
     * @var DirectoryContentInterface
     */
    protected $dirContent;

    /**
     * @param DirectoryContentInterface $dirContent
     */
    public function __construct(DirectoryContentInterface $dirContent)
    {
        $this->dirContent = $dirContent;
    }

    /**
     * {@inheritdoc}
     */
    public function output()
    {
        $dirContentItems = $this->dirContent->getDirContent();
        foreach ($dirContentItems as $dirContentItem) {
            $this->outputDirContent($dirContentItem);
        }
    }

    /**
     * @param string $dirContentItem
     * @return mixed
     */
    abstract protected function outputDirContent($dirContentItem);
}
