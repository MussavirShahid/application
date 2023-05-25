<?php
/*  328/application/model/data-layer.php
    Returns data for the application
    This is part of the MODEL
    Eventually, this will read/write the DB
*/

class DataLayer
{


    static function job()
    {
        $job = array("JavaScript", "PHP", "Python", "HTML", "CSS", "ReactJS", "NodeJS");
        return $job;
    }
    static function vertical()
    {
        $vertical = array("Saas", "Health tech", "Ag tech", "HR tech", "Industrial tech", "Cybersecurity");
        return $vertical;
    }
}