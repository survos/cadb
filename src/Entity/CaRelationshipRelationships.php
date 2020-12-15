<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaRelationshipRelationships
 *
 * @ORM\Table(name="ca_relationship_relationships", indexes={@ORM\Index(name="i_type_id", columns={"type_id"}), @ORM\Index(name="i_target_row", columns={"row_id", "table_num"}), @ORM\Index(name="i_relation_row", columns={"relation_id", "relationship_table_num"})})
 * @ORM\Entity
 */
class CaRelationshipRelationships
{
    /**
     * @var int
     *
     * @ORM\Column(name="reification_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reificationId;

    /**
     * @var bool
     *
     * @ORM\Column(name="relationship_table_num", type="boolean", nullable=false)
     */
    private $relationshipTableNum;

    /**
     * @var int
     *
     * @ORM\Column(name="relation_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $relationId;

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var int
     *
     * @ORM\Column(name="row_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rowId;

    /**
     * @var string
     *
     * @ORM\Column(name="source_info", type="text", length=0, nullable=false)
     */
    private $sourceInfo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sdatetime", type="decimal", precision=30, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $sdatetime = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="edatetime", type="decimal", precision=30, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $edatetime = 'NULL';

    /**
     * @var \CaRelationshipTypes
     *
     * @ORM\ManyToOne(targetEntity="CaRelationshipTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="type_id")
     * })
     */
    private $type;

    public function getReificationId(): ?int
    {
        return $this->reificationId;
    }

    public function getRelationshipTableNum(): ?bool
    {
        return $this->relationshipTableNum;
    }

    public function setRelationshipTableNum(bool $relationshipTableNum): self
    {
        $this->relationshipTableNum = $relationshipTableNum;

        return $this;
    }

    public function getRelationId(): ?int
    {
        return $this->relationId;
    }

    public function setRelationId(int $relationId): self
    {
        $this->relationId = $relationId;

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

    public function getRowId(): ?int
    {
        return $this->rowId;
    }

    public function setRowId(int $rowId): self
    {
        $this->rowId = $rowId;

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

    public function getSdatetime(): ?string
    {
        return $this->sdatetime;
    }

    public function setSdatetime(?string $sdatetime): self
    {
        $this->sdatetime = $sdatetime;

        return $this;
    }

    public function getEdatetime(): ?string
    {
        return $this->edatetime;
    }

    public function setEdatetime(?string $edatetime): self
    {
        $this->edatetime = $edatetime;

        return $this;
    }

    public function getType(): ?CaRelationshipTypes
    {
        return $this->type;
    }

    public function setType(?CaRelationshipTypes $type): self
    {
        $this->type = $type;

        return $this;
    }


}
