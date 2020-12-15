<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaEntityLabels
 *
 * @ORM\Table(name="ca_entity_labels", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"entity_id", "forename", "other_forenames", "middlename", "surname", "type_id", "locale_id"})}, indexes={@ORM\Index(name="i_forename", columns={"forename"}), @ORM\Index(name="i_type_id", columns={"type_id"}), @ORM\Index(name="i_surname", columns={"surname"}), @ORM\Index(name="i_name_sort", columns={"name_sort"}), @ORM\Index(name="i_entity_id", columns={"entity_id"}), @ORM\Index(name="i_locale_id", columns={"locale_id"})})
 * @ORM\Entity
 */
class CaEntityLabels
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
     * @ORM\Column(name="displayname", type="string", length=512, nullable=false)
     */
    private $displayname;

    /**
     * @var string
     *
     * @ORM\Column(name="forename", type="string", length=100, nullable=false)
     */
    private $forename;

    /**
     * @var string
     *
     * @ORM\Column(name="other_forenames", type="string", length=100, nullable=false)
     */
    private $otherForenames;

    /**
     * @var string
     *
     * @ORM\Column(name="middlename", type="string", length=100, nullable=false)
     */
    private $middlename;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=512, nullable=false, options={"default"="''"})
     */
    private $surname = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="prefix", type="string", length=100, nullable=false)
     */
    private $prefix;

    /**
     * @var string
     *
     * @ORM\Column(name="suffix", type="string", length=100, nullable=false)
     */
    private $suffix;

    /**
     * @var string
     *
     * @ORM\Column(name="name_sort", type="string", length=512, nullable=false)
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
     * @var \CaEntities
     *
     * @ORM\ManyToOne(targetEntity="CaEntities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entity_id", referencedColumnName="entity_id")
     * })
     */
    private $entity;

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

    public function getDisplayname(): ?string
    {
        return $this->displayname;
    }

    public function setDisplayname(string $displayname): self
    {
        $this->displayname = $displayname;

        return $this;
    }

    public function getForename(): ?string
    {
        return $this->forename;
    }

    public function setForename(string $forename): self
    {
        $this->forename = $forename;

        return $this;
    }

    public function getOtherForenames(): ?string
    {
        return $this->otherForenames;
    }

    public function setOtherForenames(string $otherForenames): self
    {
        $this->otherForenames = $otherForenames;

        return $this;
    }

    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }

    public function setMiddlename(string $middlename): self
    {
        $this->middlename = $middlename;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function setPrefix(string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    public function setSuffix(string $suffix): self
    {
        $this->suffix = $suffix;

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

    public function getEntity(): ?CaEntities
    {
        return $this->entity;
    }

    public function setEntity(?CaEntities $entity): self
    {
        $this->entity = $entity;

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
