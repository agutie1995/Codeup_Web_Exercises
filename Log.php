<?php

class Log
{
    public $filename;
    public $date;
    public $prefix;
    public $handle;

    public function __construct($prefix = 'log')
    {
        $this->date = date("Y-m-d");
        $this->filename = "{$prefix}-{$this->date}.log";
        $this->handle = fopen($this->filename, 'a');
    }


    public function logMessage($logLevel, $message)
    {
        $logDayTime = date("Y-m-d h:i:s a e");
        $stringToWrite = "{$logDayTime} [{$logLevel}] {$message}" . PHP_EOL;
        if (file_exists($this->filename)){
            file_put_contents($this->filename, $stringToWrite, FILE_APPEND);
        } else {
            file_put_contents($this->filename, $stringToWrite);
        }
    }

    public function __destruct()
    {
        fclose($this->handle);
    }

    public function info($message)
    {
        return $this->logMessage('INFO: ', $message);
    }

    public function error($message)
    {
        return $this->logMessage('ERROR: ', $message);
    }
}

//Add a constructor to your Log class. Your constructor should:
    //Take in a parameter called $prefix. If nothing is passed to the constructor, the $prefix should default to 'log'.
    //Set the $filename property of the class to $prefix-YYYY-MM-DD.log.
    //Open the $filename for appending and assign the file pointer to the property $handle.
//Add a destructor to close $handle when the class is destroyed.
//Update logMessage(); it should no longer need to open and close its own file handle, instead use the $handle property.
?>