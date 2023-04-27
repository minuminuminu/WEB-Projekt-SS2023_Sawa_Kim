<?php

class Appointment {
  public $id;
    public $name;
    public $date;
    public $timeframe;
    
    public function __construct($id,$name,$date,$timeframe) {
      $this->id = $id;
      $this->name = $name;
      $this->date = $date;
      $this->timeframe = $timeframe;
    }
}

?>