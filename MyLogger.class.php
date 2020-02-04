<?php

class MyLogger {

    private $origin;

    public function log($message, $type)
    {
        echo $this->logWithTime() . $type . ": " . $message . PHP_EOL;
    }

    public function warning($message)
    {
        echo $this->logWithTime() . $this->origin . " - WARNING: " . $message . PHP_EOL;
    }

    public function info($message)
    {
        echo $this->logWithTime() . $this->origin . " - INFO: " . $message . PHP_EOL;
    }

    public function error($message)
    {
        echo $this->logWithTime() . $this->origin . " - ERROR: " . $message . PHP_EOL;
    }

    public function debug($message)
    {
        echo $this->logWithTime() . $this->origin . " - DEBUG: " . $message . PHP_EOL;
    }

    private function logWithTime()
    {
        return "[" . date('m/d/Y h:i:s', time()) . "] ";
    }

    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

}

$logger = new MyLogger();
$logger->setOrigin('TestClass');
$logger->error('dit is een error');