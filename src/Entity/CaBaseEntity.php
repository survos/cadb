<?php

namespace App\Entity;

abstract class CaBaseEntity
{
    abstract function getIdno();

    // hack for https://github.com/symfony/symfony/issues/35574
    public function __sleep()
    {
        return [];
    }

    public function getRP(?array $addlParams = []): array
    {
        return ['idno' => $this->getIdno()];
    }

    public function __toString()
    {
        return $this->getIdno();
    }
}
