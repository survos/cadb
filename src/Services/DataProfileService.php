<?php

namespace App\Services;

use App\Entity\Profile;
use App\Repository\ProfileRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Finder\Finder;

class DataProfileService
{
    private ParameterBagInterface $bag;
    private ProfileRepository $profileRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(ParameterBagInterface $bag, ProfileRepository $profileRepository, EntityManagerInterface $entityManager)
    {
        $this->bag = $bag;
        $this->profileRepository = $profileRepository;
        $this->entityManager = $entityManager;
    }

    public function loadXml()
    {
        $profiles = [];
        $finder = new Finder();
        foreach ($finder->files()->in($this->bag->get('xml_profiles_path'))->name('*.xml') as $fileInfo)
        {
            $code = $fileInfo->getFilenameWithoutExtension();
            $xml = simplexml_load_file($fileInfo->getPathname());
            $rawData = json_decode(json_encode($xml), true);
            $profiles[$fileInfo->getFilenameWithoutExtension()] = $rawData;

            if (!$this->profileRepository->findOneBy(['filename' => $code ])) {
                $profile = (new Profile())
                    ->setFilename($code);
                $this->entityManager->persist($profile);
            }
            $profile
                ->setRawData($rawData)
                ;
        }
        return $profiles;
    }
}
