<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSetLabels
 *
 * @ORM\Table(name="ca_set_labels", indexes={@ORM\Index(name="i_set_id", columns={"set_id"}), @ORM\Index(name="i_locale_id", columns={"locale_id"})})
 * @ORM\Entity
 */
class CaSetLabels
{
    /**
     * @var int
     *
     * @ORM\Column(name="label_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $labelId;

    /**
     * @var int
     *
     * @ORM\Column(name="set_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $setId;

    /**
     * @var int
     *
     * @ORM\Column(name="locale_id", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $localeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    public function getLabelId(): ?int
    {
        return $this->labelId;
    }

    public function getSetId(): ?int
    {
        return $this->setId;
    }

    public function setSetId(int $setId): self
    {
        $this->setId = $setId;

        return $this;
    }

    public function getLocaleId(): ?int
    {
        return $this->localeId;
    }

    public function setLocaleId(int $localeId): self
    {
        $this->localeId = $localeId;

        return $this;
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


}
