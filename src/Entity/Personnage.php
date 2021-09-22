<?php

namespace App\Entity;

class Personnage{
    public $nom;
    public  $age;
    public $sexe;
    public $carac = [];

    public static $personnages=[];

    public function __construct($nom,$age,$sexe,$carac){
        $this->nom=$nom;
        $this->age=$age;
        $this->sexe=$sexe;
        $this->carac=$carac;
        array_push(self::$personnages,$this);
    }

    public static function getPersonnageParNom($nom){

        foreach(self::$personnages as $perso){
            if(strtolower($perso->nom) == strtolower($nom)) return $perso;
        }
        return null;
    }

    public static function creerPersonnage(){
        $p1 = new Personnage("Marc",25,true,
            [
                "force" => 32,
                "agi" => 5,
                "intel" => 22,
            ]
        );
        $p2 = new Personnage("Milo",43,true,
            [
                "force" => 32,
                "agi" => 5,
                "intel" => 22,
            ]
        );
        $p3 = new Personnage("Tya",54,false,
            [
                "force" => 30,
                "agi" => 2,
                "intel" => 31,
            ]
        );
    }
}