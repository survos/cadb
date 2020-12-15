<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaBundleDisplayTypeRestrictions
 *
 * @ORM\Table(name="ca_bundle_display_type_restrictions", indexes={@ORM\Index(name="i_display_id", columns={"display_id"}), @ORM\Index(name="i_type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class CaBundleDisplayTypeRestrictions
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
     * @var int|null
     *
     * @ORM\Column(name="type_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $typeId = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var bool
     *
     * @ORM\Column(name="include_subtypes", type="boolean", nullable=false)
     */
    private $includeSubtypes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=0, nullable=false)
     */
    private $settings;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var \CaBundleDisplays
     *
     * @ORM\ManyToOne(targetEntity="CaBundleDisplays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="display_id", referencedColumnName="display_id")
     * })
     */
    private $display;

    public function getRestrictionId(): ?int
    {
        return $this->restrictionId;
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

    public function getTableNum(): ?bool
    {
        return $this->tableNum;
    }

    public function setTableNum(bool $tableNum): self
    {
        $this->tableNum = $tableNum;

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

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(string $settings): self
    {
        $this->settings = $settings;

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

    public function getDisplay(): ?CaBundleDisplays
    {
        return $this->display;
    }

    public function setDisplay(?CaBundleDisplays $display): self
    {
        $this->display = $display;

        return $this;
    }


}
