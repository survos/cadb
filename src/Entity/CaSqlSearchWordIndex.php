<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSqlSearchWordIndex
 *
 * @ORM\Table(name="ca_sql_search_word_index", indexes={@ORM\Index(name="i_word_id", columns={"word_id", "access"}), @ORM\Index(name="i_field_num", columns={"field_num"}), @ORM\Index(name="i_index_field_num", columns={"word_id", "table_num", "field_table_num", "field_num", "row_id", "access", "boost"}), @ORM\Index(name="i_row_id", columns={"row_id", "table_num"}), @ORM\Index(name="i_rel_type_id", columns={"rel_type_id"}), @ORM\Index(name="i_index_table_num", columns={"word_id", "table_num", "row_id"}), @ORM\Index(name="i_index_field_table_num", columns={"word_id", "table_num", "field_table_num", "row_id"}), @ORM\Index(name="i_index_field_num_container", columns={"word_id", "table_num", "field_table_num", "field_num", "field_container_id", "row_id", "access", "boost"}), @ORM\Index(name="i_field_row_id", columns={"field_row_id", "field_table_num"}), @ORM\Index(name="i_field_table_num", columns={"field_table_num"}), @ORM\Index(name="i_index_delete", columns={"table_num", "row_id", "field_table_num", "field_num"})})
 * @ORM\Entity
 */
class CaSqlSearchWordIndex
{
    /**
     * @var int
     *
     * @ORM\Column(name="index_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $indexId;

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
     * @var bool
     *
     * @ORM\Column(name="field_table_num", type="boolean", nullable=false)
     */
    private $fieldTableNum;

    /**
     * @var string
     *
     * @ORM\Column(name="field_num", type="string", length=100, nullable=false)
     */
    private $fieldNum;

    /**
     * @var int
     *
     * @ORM\Column(name="field_row_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fieldRowId;

    /**
     * @var int
     *
     * @ORM\Column(name="rel_type_id", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $relTypeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="word_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $wordId;

    /**
     * @var bool
     *
     * @ORM\Column(name="boost", type="boolean", nullable=false, options={"default"="1"})
     */
    private $boost = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false, options={"default"="1"})
     */
    private $access = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="field_container_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $fieldContainerId = 'NULL';

    public function getIndexId(): ?int
    {
        return $this->indexId;
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

    public function getFieldTableNum(): ?bool
    {
        return $this->fieldTableNum;
    }

    public function setFieldTableNum(bool $fieldTableNum): self
    {
        $this->fieldTableNum = $fieldTableNum;

        return $this;
    }

    public function getFieldNum(): ?string
    {
        return $this->fieldNum;
    }

    public function setFieldNum(string $fieldNum): self
    {
        $this->fieldNum = $fieldNum;

        return $this;
    }

    public function getFieldRowId(): ?int
    {
        return $this->fieldRowId;
    }

    public function setFieldRowId(int $fieldRowId): self
    {
        $this->fieldRowId = $fieldRowId;

        return $this;
    }

    public function getRelTypeId(): ?int
    {
        return $this->relTypeId;
    }

    public function setRelTypeId(int $relTypeId): self
    {
        $this->relTypeId = $relTypeId;

        return $this;
    }

    public function getWordId(): ?int
    {
        return $this->wordId;
    }

    public function setWordId(int $wordId): self
    {
        $this->wordId = $wordId;

        return $this;
    }

    public function getBoost(): ?bool
    {
        return $this->boost;
    }

    public function setBoost(bool $boost): self
    {
        $this->boost = $boost;

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

    public function getFieldContainerId(): ?int
    {
        return $this->fieldContainerId;
    }

    public function setFieldContainerId(?int $fieldContainerId): self
    {
        $this->fieldContainerId = $fieldContainerId;

        return $this;
    }


}
