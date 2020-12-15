<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaMetadataElementLabels
 *
 * @ORM\Table(name="ca_metadata_element_labels", indexes={@ORM\Index(name="i_locale_id", columns={"locale_id"}), @ORM\Index(name="i_element_id", columns={"element_id"}), @ORM\Index(name="i_name", columns={"name"})})
 * @ORM\Entity
 */
class CaMetadataElementLabels
{
    /**
     * @var int
     *
     * @ORM\Column(name="label_id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $labelId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \CaMetadataElements
     *
     * @ORM\ManyToOne(targetEntity="CaMetadataElements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="element_id", referencedColumnName="element_id")
     * })
     */
    private $element;

    /**
     * @var \CaLocales
     *
     * @ORM\ManyToOne(targetEntity="CaLocales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locale_id", referencedColumnName="locale_id")
     * })
     */
    private $locale;

    public function getLabelId(): ?int
    {
        return $this->labelId;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getElement(): ?CaMetadataElements
    {
        return $this->element;
    }

    public function setElement(?CaMetadataElements $element): self
    {
        $this->element = $element;

        return $this;
    }

    public function getLocale(): ?CaLocales
    {
        return $this->locale;
    }

    public function setLocale(?CaLocales $locale): self
    {
        $this->locale = $locale;

        return $this;
    }


}
