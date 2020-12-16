<?php

namespace App\Controller;

use App\Repository\CaObjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function index(CaObjectsRepository $caObjectsRepository): Response
    {
        $object = $caObjectsRepository->findOneBy([]);
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
            'object' => $object
        ]);
    }
}
