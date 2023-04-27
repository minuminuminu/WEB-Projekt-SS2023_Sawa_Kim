<?php
include("../models/appointment.php");
class DataHandler
{
    public function queryAppointments()
    {
        $res = $this->getData();
        return $res;
    }

    private static function getData()
    {
      $demodata = [
        [new Appointment(1, "Camping", "15.05.2023", "15.30-16.00")],
        [new Appointment(2, "Essen gehen", "18.07.2023", "15.30-16.00")],
        [new Appointment(3, "Kino", "29.09.2023", "15.30-16.00")],
        [new Appointment(4, "Italienreise", "31.02.2024", "15.30-16.00")],
      ];  

        return $demodata;
    }
}
