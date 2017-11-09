<?php

require_once __DIR__ . '/vendor/autoload.php';

use Luka\DirectoryReader\DirectoryContent\LocalDirectoryContent;
use Luka\DirectoryReader\DirectoryContent\FtpDirectoryContent;
use Luka\DirectoryReader\DirectoryOutput\TextDirectoryOutput;
use Luka\DirectoryReader\DirectoryOutput\HtmlDirectoryOutput;
use Luka\DirectoryReader\DirectoryOutput\JsonDirectoryOutput;


// Output a local directory

// Output a local directory content as text
$files = new TextDirectoryOutput(new LocalDirectoryContent('/home/luka/'));
$files->output();

// Output a local directory content as HTML
$files = new HtmlDirectoryOutput(new LocalDirectoryContent('/home/luka/'));
$files->output();

// Output a local directory content as JSON
$files = new JsonDirectoryOutput(new LocalDirectoryContent('/home/luka/'));
$files->output();


// Output a remote directory

// Output a remote directory content as text
$files = new TextDirectoryOutput(
    new FtpDirectoryContent(
        'ftp://ftp.example.com/path',
        'ftp.example.com',
        21,
        'UserName',
        'Password'
    )
);
$files->output();

// Output a remote directory content as HTML
$files = new HtmlDirectoryOutput(
    new FtpDirectoryContent(
        'ftp://ftp.example.com/path',
        'ftp.example.com',
        21,
        'UserName',
        'Password'
    )
);
$files->output();

// Output a remote directory content as JSON
$files = new JsonDirectoryOutput(
    new FtpDirectoryContent(
        'ftp://ftp.example.com/path',
        'ftp.example.com',
        21,
        'UserName',
        'Password'
    )
);
$files->output();
