<?php

class Production {
    public $title;
    public $language;
    public $rating;

    function __construct(String $_title, String $_language, $_rating) {
        $this->setTitle($_title);
        $this->language = $_language;
        $this->rating = $_rating;
    }

    public function setTitle($title)
    {
      if (is_string($title)) {
        $this->title = trim($title);
      } 
    }

    public function getTitle() {
        return $this->title;
    }

}