<?php

namespace Luka\DirectoryReader\DirectoryContent;

class FtpDirectoryContent extends AbstractDirectoryContent
{
    /**
     * @var string
     */
    private $ftpHost;

    /**
     * @var int
     */
    private $ftpPort;

    /**
     * @var string
     */
    private $ftpUserName;

    /**
     * @var string
     */
    private $ftpPassword;

    /**
     * @param string $path
     * @param string $ftpHost
     * @param int $ftpPort
     * @param string $ftpUserName
     * @param string $ftpPassword
     */
    public function __construct($path, $ftpHost, $ftpPort = 21, $ftpUserName, $ftpPassword)
    {
        parent::__construct($path);
        $this->ftpHost = $ftpHost;
        $this->ftpPort = $ftpPort;
        $this->ftpUserName = $ftpUserName;
        $this->ftpPassword = $ftpPassword;
    }

    // TODO: code to connect to ftp

    /**
     * {@inheritdoc}
     */
    public function getDirContent()
    {
        // TODO: code to get remote directory content
    }
}
