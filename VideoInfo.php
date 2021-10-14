<?php 

class VideoInfo {
    // Properties
    public $title;
    public $img;
    public $date;

    function __construct($title, $img, $date) {
        $this->title = $title;
        $this->img = $img;
        $this->date = $date;
    }

    // Methods
    public function getTitle() {
        return $this->title;
    }

    // public function getTitle() {
    //     return $this->
    // }
}