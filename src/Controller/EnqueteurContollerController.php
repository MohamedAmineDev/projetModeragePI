<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnqueteurContollerController extends AbstractController
{
    /**
     * @Route("/enqueteur/contoller", name="enqueteur_contoller")
     */
    public function index(): Response
    {
        return $this->render('enqueteur_contoller/index.html.twig', [
            'controller_name' => 'EnqueteurContollerController',
        ]);
    }
    /**
     * @Route("/utilisateur/inscription/{id}",name="addEnqueteur")
     */
    public function ajoutEnqueteur($id,Request $req){
        $this->render('enqueteur_contoller/inscription.html.twig',['em'=>$id->getId()]);
    }
}
