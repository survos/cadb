<?php

namespace App\Controller;

use App\Services\DataProfileService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataProfileController extends AbstractController
{
    /**
     * @Route("/data/profiles", name="data_profiles")
     */
    public function index(DataProfileService $dataProfileService): Response
    {


        return $this->render('data_profile/index.html.twig', [
            'profiles' => $dataProfileService->loadXml(),
        ]);
    }

    /**
     * @Route("/data/profile_detail/{filename}", name="data_profile_detail")
     */
    public function detail(DataProfileService $dataProfileService, $filename): Response
    {
        $profiles = $dataProfileService->loadXml();

        return $this->render('data_profile/detail.html.twig', [
            'profile' => $profiles[$filename],
            'filename' => $filename,
            'controller_name' => 'DataProfileController',
        ]);
    }



}
