<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaPersistentCache
 *
 * @ORM\Table(name="ca_persistent_cache", indexes={@ORM\Index(name="i_namespace", columns={"namespace"}), @ORM\Index(name="i_updated_on", columns={"updated_on"})})
 * @ORM\Entity
 */
class CaPersistentCache
{
    /**
     * @var string
     *
     * @ORM\Column(name="cache_key", type="string", length=32, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cacheKey;

    /**
     * @var string
     *
     * @ORM\Column(name="cache_value", type="blob", length=0, nullable=false)
     */
    private $cacheValue;

    /**
     * @var int
     *
     * @ORM\Column(name="created_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdOn;

    /**
     * @var int
     *
     * @ORM\Column(name="updated_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $updatedOn;

    /**
     * @var string
     *
     * @ORM\Column(name="namespace", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $namespace = '\'\'';

    public function getCacheKey(): ?string
    {
        return $this->cacheKey;
    }

    public function getCacheValue()
    {
        return $this->cacheValue;
    }

    public function setCacheValue($cacheValue): self
    {
        $this->cacheValue = $cacheValue;

        return $this;
    }

    public function getCreatedOn(): ?int
    {
        return $this->createdOn;
    }

    public function setCreatedOn(int $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    public function getUpdatedOn(): ?int
    {
        return $this->updatedOn;
    }

    public function setUpdatedOn(int $updatedOn): self
    {
        $this->updatedOn = $updatedOn;

        return $this;
    }

    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    public function setNamespace(string $namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }


}
