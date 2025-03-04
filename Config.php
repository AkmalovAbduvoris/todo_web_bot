<?php

class Config {
    public static $appName = "MyApp";
}


$ok = new Config();
var_dump($ok->appName); // "MyApp"