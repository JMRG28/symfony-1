<?php

namespace App\Controller;

use App\Entity\Arme;
use App\Entity\Personnage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }

    #[Route('/persos', name: 'personnages')]
    public function persos(): Response
    {
        Personnage::creerPersonnage();
        return $this->render('personnage/persos.html.twig', [
            'controller_name' => 'PersonnageController',
            "players" => Personnage::$personnages
        ]);
    }

    #[Route('/persos/{nom}', name: 'afficher_personnage')]
    public function afficherPerso($nom): Response
    {
        Personnage::creerPersonnage();
        $perso = Personnage::getPersonnageParNom($nom);
        return $this->render('personnage/perso.html.twig', [
            'controller_name' => 'PersonnageController',
            "perso" => $perso
        ]);
    }
}
