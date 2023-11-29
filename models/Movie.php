<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production
{
    protected $profit;
    protected $duration;

    protected $streamUrl;

    function __construct(String $_title, String $_language, $_rating, $_profit, $_duration)
    {
  
      parent::__construct($_title, $_language, $_rating);
      $this->setProfit($_profit);
      $this->setDuration($_duration);

    }

    public function setStreamUrl($_stream)
    {
        $this->streamUrl = $_stream;
    }

    public function getStreamUrl()
    {
        return $this->streamUrl;
    }

    public function setProfit($_profit)
    {
        $this->profit = $_profit;
    }

    public function setDuration($_duration)
    {
        $this->profit = $_duration;
    }

    public function getProfit()
    {
        return $this->profit;
    }

    public function getDuration()
    {
        return $this->duration;
    }

}




