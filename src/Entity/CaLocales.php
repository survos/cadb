<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaLocales
 *
 * @ORM\Table(name="ca_locales", indexes={@ORM\Index(name="u_language_country", columns={"language", "country"})})
 * @ORM\Entity
 */
class CaLocales
{
    /**
     * @var int
     *
     * @ORM\Column(name="locale_id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $localeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=3, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=false, options={"fixed"=true})
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dialect", type="string", length=8, nullable=true, options={"default"="NULL"})
     */
    private $dialect = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="dont_use_for_cataloguing", type="boolean", nullable=false)
     */
    private $dontUseForCataloguing;

    public function getLocaleId(): ?int
    {
        return $this->localeId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getDialect(): ?string
    {
        return $this->dialect;
    }

    public function setDialect(?string $dialect): self
    {
        $this->dialect = $dialect;

        return $this;
    }

    public function getDontUseForCataloguing(): ?bool
    {
        return $this->dontUseForCataloguing;
    }

    public function setDontUseForCataloguing(bool $dontUseForCataloguing): self
    {
        $this->dontUseForCataloguing = $dontUseForCataloguing;

        return $this;
    }


}
