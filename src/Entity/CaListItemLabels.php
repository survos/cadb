<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaListItemLabels
 *
 * @ORM\Table(name="ca_list_item_labels", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"item_id", "name_singular", "name_plural", "type_id", "locale_id"})}, indexes={@ORM\Index(name="fk_ca_list_item_labels_locale_id", columns={"locale_id"}), @ORM\Index(name="i_name", columns={"item_id", "name_plural"}), @ORM\Index(name="i_name_sort", columns={"name_sort"}), @ORM\Index(name="i_name_singular", columns={"item_id", "name_singular"}), @ORM\Index(name="i_type_id", columns={"type_id"}), @ORM\Index(name="i_item_id", columns={"item_id"})})
 * @ORM\Entity
 */
class CaListItemLabels
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
     * @var string
     *
     * @ORM\Column(name="name_singular", type="string", length=255, nullable=false)
     */
    private $nameSingular;

    /**
     * @var string
     *
     * @ORM\Column(name="name_plural", type="string", length=255, nullable=false)
     */
    private $namePlural;

    /**
     * @var string
     *
     * @ORM\Column(name="name_sort", type="string", length=255, nullable=false)
     */
    private $nameSort;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="source_info", type="text", length=0, nullable=false)
     */
    private $sourceInfo;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_preferred", type="boolean", nullable=false)
     */
    private $isPreferred = '0';

    /**
     * @var \CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="item_id")
     * })
     */
    private $item;

    /**
     * @var \CaLocales
     *
     * @ORM\ManyToOne(targetEntity="CaLocales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locale_id", referencedColumnName="locale_id")
     * })
     */
    private $locale;

    /**
     * @var \CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="item_id")
     * })
     */
    private $type;

    public function getLabelId(): ?int
    {
        return $this->labelId;
    }

    public function getNameSingular(): ?string
    {
        return $this->nameSingular;
    }

    public function setNameSingular(string $nameSingular): self
    {
        $this->nameSingular = $nameSingular;

        return $this;
    }

    public function getNamePlural(): ?string
    {
        return $this->namePlural;
    }

    public function setNamePlural(string $namePlural): self
    {
        $this->namePlural = $namePlural;

        return $this;
    }

    public function getNameSort(): ?string
    {
        return $this->nameSort;
    }

    public function setNameSort(string $nameSort): self
    {
        $this->nameSort = $nameSort;

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

    public function getSourceInfo(): ?string
    {
        return $this->sourceInfo;
    }

    public function setSourceInfo(string $sourceInfo): self
    {
        $this->sourceInfo = $sourceInfo;

        return $this;
    }

    public function getIsPreferred(): ?bool
    {
        return $this->isPreferred;
    }

    public function setIsPreferred(bool $isPreferred): self
    {
        $this->isPreferred = $isPreferred;

        return $this;
    }

    public function getItem(): ?CaListItems
    {
        return $this->item;
    }

    public function setItem(?CaListItems $item): self
    {
        $this->item = $item;

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

    public function getType(): ?CaListItems
    {
        return $this->type;
    }

    public function setType(?CaListItems $type): self
    {
        $this->type = $type;

        return $this;
    }


}
