<?php

class ModelMeteo
{

    public function __construct()
    {
    }

    public function getDataMeteo($ville)
    {
        $url = "http://www.prevision-meteo.ch/services/json/";
        $json = file_get_contents($url . $ville);
        $data = json_decode($json);
        return $data;
    }
}