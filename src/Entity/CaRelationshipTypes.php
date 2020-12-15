<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaRelationshipTypes
 *
 * @ORM\Table(name="ca_relationship_types", uniqueConstraints={@ORM\UniqueConstraint(name="u_type_code", columns={"type_code", "table_num"})}, indexes={@ORM\Index(name="i_table_num", columns={"table_num"}), @ORM\Index(name="i_parent_id", columns={"parent_id"}), @ORM\Index(name="i_hier_right", columns={"hier_right"}), @ORM\Index(name="i_sub_type_left_id", columns={"sub_type_left_id"}), @ORM\Index(name="i_hier_type_id", columns={"hier_type_id"}), @ORM\Index(name="i_sub_type_right_id", columns={"sub_type_right_id"}), @ORM\Index(name="i_hier_left", columns={"hier_left"})})
 * @ORM\Entity
 */
class CaRelationshipTypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="type_id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sub_type_left_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $subTypeLeftId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sub_type_right_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $subTypeRightId = 'NULL';

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
     * @var int|null
     *
     * @ORM\Column(name="hier_type_id", type="smallint", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $hierTypeId = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var string
     *
     * @ORM\Column(name="type_code", type="string", length=30, nullable=false)
     */
    private $typeCode;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault;

    /**
     * @var bool
     *
     * @ORM\Column(name="include_subtypes_left", type="boolean", nullable=false)
     */
    private $includeSubtypesLeft = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="include_subtypes_right", type="boolean", nullable=false)
     */
    private $includeSubtypesRight = '0';

    /**
     * @var \CaRelationshipTypes
     *
     * @ORM\ManyToOne(targetEntity="CaRelationshipTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="type_id")
     * })
     */
    private $parent;

    public function getTypeId(): ?int
    {
        return $this->typeId;
    }

    public function getSubTypeLeftId(): ?int
    {
        return $this->subTypeLeftId;
    }

    public function setSubTypeLeftId(?int $subTypeLeftId): self
    {
        $this->subTypeLeftId = $subTypeLeftId;

        return $this;
    }

    public function getSubTypeRightId(): ?int
    {
        return $this->subTypeRightId;
    }

    public function setSubTypeRightId(?int $subTypeRightId): self
    {
        $this->subTypeRightId = $subTypeRightId;

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

    public function getHierTypeId(): ?int
    {
        return $this->hierTypeId;
    }

    public function setHierTypeId(?int $hierTypeId): self
    {
        $this->hierTypeId = $hierTypeId;

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

    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    public function setTypeCode(string $typeCode): self
    {
        $this->typeCode = $typeCode;

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

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    public function getIncludeSubtypesLeft(): ?bool
    {
        return $this->includeSubtypesLeft;
    }

    public function setIncludeSubtypesLeft(bool $includeSubtypesLeft): self
    {
        $this->includeSubtypesLeft = $includeSubtypesLeft;

        return $this;
    }

    public function getIncludeSubtypesRight(): ?bool
    {
        return $this->includeSubtypesRight;
    }

    public function setIncludeSubtypesRight(bool $includeSubtypesRight): self
    {
        $this->includeSubtypesRight = $includeSubtypesRight;

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


}
