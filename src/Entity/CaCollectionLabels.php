<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaCollectionLabels
 *
 * @ORM\Table(name="ca_collection_labels", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"collection_id", "name", "type_id", "locale_id"})}, indexes={@ORM\Index(name="i_name", columns={"name"}), @ORM\Index(name="i_name_sort", columns={"name_sort"}), @ORM\Index(name="i_locale_id", columns={"locale_id"}), @ORM\Index(name="i_collection_id", columns={"collection_id"}), @ORM\Index(name="i_type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class CaCollectionLabels
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="name_sort", type="string", length=255, nullable=false)
     */
    private $nameSort;

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
    private $isPreferred;

    /**
     * @var \CaCollections
     *
     * @ORM\ManyToOne(targetEntity="CaCollections")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="collection_id", referencedColumnName="collection_id")
     * })
     */
    private $collection;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getCollection(): ?CaCollections
    {
        return $this->collection;
    }

    public function setCollection(?CaCollections $collection): self
    {
        $this->collection = $collection;

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
