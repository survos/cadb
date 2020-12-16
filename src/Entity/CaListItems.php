<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaListItems
 *
 * @ORM\Table(name="ca_list_items", indexes={@ORM\Index(name="i_idno", columns={"idno"}), @ORM\Index(name="i_hier_right", columns={"hier_right"}), @ORM\Index(name="i_source_id", columns={"source_id"}), @ORM\Index(name="i_list_id", columns={"list_id"}), @ORM\Index(name="i_idno_sort", columns={"idno_sort"}), @ORM\Index(name="i_value_text", columns={"item_value"}), @ORM\Index(name="i_item_filter", columns={"item_id", "deleted", "access"}), @ORM\Index(name="i_parent_id", columns={"parent_id"}), @ORM\Index(name="i_hier_left", columns={"hier_left"}), @ORM\Index(name="i_type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class CaListItems extends CaBaseEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemId;

    /**
     * @var string
     *
     * @ORM\Column(name="idno", type="string", length=255, nullable=false)
     */
    private $idno;

    /**
     * @var string
     *
     * @ORM\Column(name="idno_sort", type="string", length=255, nullable=false)
     */
    private $idnoSort;

    /**
     * @var string
     *
     * @ORM\Column(name="item_value", type="string", length=255, nullable=false)
     */
    private $itemValue;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="hier_left", type="decimal", precision=30, scale=20, nullable=false)
     */
    private $hierLeft;

    /**
     * @var string
     *
     * @ORM\Column(name="hier_right", type="decimal", precision=30, scale=20, nullable=false)
     */
    private $hierRight;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean", nullable=false)
     */
    private $isEnabled = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="validation_format", type="string", length=255, nullable=false)
     */
    private $validationFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=0, nullable=false)
     */
    private $settings;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=6, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $color = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="blob", length=0, nullable=false)
     */
    private $icon;

    /**
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="source_info", type="text", length=0, nullable=false)
     */
    private $sourceInfo;

    /**
     * @var \CaLists
     *
     * @ORM\ManyToOne(targetEntity="CaLists")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="list_id", referencedColumnName="list_id")
     * })
     */
    private $list;

    /**
     * @var \CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="item_id")
     * })
     */
    private $parent;

    /**
     * @var \CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="source_id", referencedColumnName="item_id")
     * })
     */
    private $source;

    /**
     * @var \CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="item_id")
     * })
     */
    private $type;

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function getIdno(): ?string
    {
        return $this->idno;
    }

    public function setIdno(string $idno): self
    {
        $this->idno = $idno;

        return $this;
    }

    public function getIdnoSort(): ?string
    {
        return $this->idnoSort;
    }

    public function setIdnoSort(string $idnoSort): self
    {
        $this->idnoSort = $idnoSort;

        return $this;
    }

    public function getItemValue(): ?string
    {
        return $this->itemValue;
    }

    public function setItemValue(string $itemValue): self
    {
        $this->itemValue = $itemValue;

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

    public function getHierLeft(): ?string
    {
        return $this->hierLeft;
    }

    public function setHierLeft(string $hierLeft): self
    {
        $this->hierLeft = $hierLeft;

        return $this;
    }

    public function getHierRight(): ?string
    {
        return $this->hierRight;
    }

    public function setHierRight(string $hierRight): self
    {
        $this->hierRight = $hierRight;

        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    public function getValidationFormat(): ?string
    {
        return $this->validationFormat;
    }

    public function setValidationFormat(string $validationFormat): self
    {
        $this->validationFormat = $validationFormat;

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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getAccess(): ?bool
    {
        return $this->access;
    }

    public function setAccess(bool $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

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

    public function getList(): ?CaLists
    {
        return $this->list;
    }

    public function setList(?CaLists $list): self
    {
        $this->list = $list;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getSource(): ?self
    {
        return $this->source;
    }

    public function setSource(?self $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getType(): ?self
    {
        return $this->type;
    }

    public function setType(?self $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function __toString()
    {
        return $this->getIdno();
    }


}
