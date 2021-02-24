<?php

class Logger
{
    public $file;

    public function __construct()
    {
        $this->file = fopen(date('Y-m-d').'.log', 'a');
        $this->log('Ouverture des logs');
    }

    public function log(string $message)
    {
        fwrite($this->file, '['.date('Y-m-d H:i:s').'] '.$message.PHP_EOL);
    }

    public function __destruct()
    {
        $this->log('Fermeture des logs');
        fclose($this->file);
    }
}

$logger = new Logger();
$logger->log('test');