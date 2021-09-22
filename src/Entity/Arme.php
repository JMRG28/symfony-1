<?php

namespace App\Entity;

class Arme{
    public $nom;
    public  $description;
    public $force;

    public static $armes=[];

    public function __construct($nom,$description,$force){
        $this->nom=$nom;
        $this->description=$description;
        $this->force=$force;
        array_push(self::$armes,$this);
    }

    public static function getArmeParNom($nom){

        foreach(self::$armes as $arme){
            if(strtolower($arme->nom) == strtolower($nom)) return $arme;
        }
        return null;
    }

    public static function creerArmes(){
        $a1 = new Arme("arc","Arc Arc Arc Arc",10);
        $a2 = new Arme("epee","Epée Epée Epée Epée",25);
        $a3 = new Arme("hache","Hache Hache Hache Hache",30);
    }
}