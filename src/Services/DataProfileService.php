<?php

namespace App\Services;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Finder\Finder;

class DataProfileService
{
    private ParameterBagInterface $bag;

    public function __construct(ParameterBagInterface $bag)
    {
        $this->bag = $bag;
    }

    public function loadXml()
    {
        $profiles = [];
        $finder = new Finder();
        foreach ($finder->files()->in($this->bag->get('xml_profiles_path'))->name('*.xml') as $fileInfo)
        {
            $xml = simplexml_load_file($fileInfo->getPathname());
            $profiles[$fileInfo->getFilenameWithoutExtension()] = json_decode(json_encode($xml), true);
            return $profiles;
        }
        return $profiles;
    }
}
