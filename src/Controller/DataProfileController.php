<?php

namespace App\Controller;

use App\Services\DataProfileService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataProfileController extends AbstractController
{
    /**
     * @Route("/data/profile", name="data_profiles")
     */
    public function index(DataProfileService $dataProfileService): Response
    {
        return $this->render('data_profile/index.html.twig', [
            'profiles' => $dataProfileService->loadXml(),
            'controller_name' => 'DataProfileController',
        ]);
    }
}
