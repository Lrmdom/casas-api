<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Casa;

class CasaController extends AbstractController
{
    #[Route('/casa', name: 'casa')]
    public function index(): Response
    {
        return $this->render('casa/index.html.twig', [
            'controller_name' => 'CasaController',
        ]);
    }
    #[Route('/casa/show/{id}', name: 'show')]
    public function show(int $id) : Response
    {
        $casa = $this->getDoctrine()
            ->getRepository(Casa::class)
            ->find($id);
            $cprop = $casa->getOwner()->getEmail();
       return new Response('Check out this great product:'.$cprop);
        // ...
        //$proprietario = $casa->getProprietarios()->getEmail();
        //var_dump($casa->getProprietarios());die();
        // ...
    }
}
