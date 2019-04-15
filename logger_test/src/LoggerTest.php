<?php
namespace Drupal\logger_test;

class LoggerTest
{
    protected $channel;
    //constuctor call for setting the value of $channel
    function __construct($channel)
    {
        $this->channel = $channel;
    }
    // it get the value of the $channel
    function getLoggerChannel()
    {
        return $this->channel;
    }
}
