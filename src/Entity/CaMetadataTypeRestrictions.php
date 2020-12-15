<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaMetadataTypeRestrictions
 *
 * @ORM\Table(name="ca_metadata_type_restrictions", indexes={@ORM\Index(name="i_element_id", columns={"element_id"}), @ORM\Index(name="i_table_num", columns={"table_num"}), @ORM\Index(name="i_include_subtypes", columns={"include_subtypes"}), @ORM\Index(name="i_type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class CaMetadataTypeRestrictions
{
    /**
     * @var int
     *
     * @ORM\Column(name="restriction_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $restrictionId;

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $typeId = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=0, nullable=false)
     */
    private $settings;

    /**
     * @var bool
     *
     * @ORM\Column(name="include_subtypes", type="boolean", nullable=false)
     */
    private $includeSubtypes = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var \CaMetadataElements
     *
     * @ORM\ManyToOne(targetEntity="CaMetadataElements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="element_id", referencedColumnName="element_id")
     * })
     */
    private $element;

    public function getRestrictionId(): ?int
    {
        return $this->restrictionId;
    }

    public function getTableNum(): ?bool
    {
        return $this->tableNum;
    }

    public function setTableNum(bool $tableNum): self
    {
        $this->tableNum = $tableNum;

        return $this;
    }

    public function getTypeId(): ?int
    {
        return $this->typeId;
    }

    public function setTypeId(?int $typeId): self
    {
        $this->typeId = $typeId;

        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(string $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function getIncludeSubtypes(): ?bool
    {
        return $this->includeSubtypes;
    }

    public function setIncludeSubtypes(bool $includeSubtypes): self
    {
        $this->includeSubtypes = $includeSubtypes;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

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


}
