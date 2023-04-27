<?php
include("../db/dataHandler.php");

class SimpleLogic
{
    private $dh;
    function __construct()
    {
        $this->dh = new DataHandler();
    }

    public function handleRequest($method)
    {
        switch ($method) {
            case "getData":
                $res = $this->dh->queryAppointments();
                break;
            default:
                $res = null;
                break;
        }
        return $res;
    }
}
