<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSearchIndexingQueue
 *
 * @ORM\Table(name="ca_search_indexing_queue", indexes={@ORM\Index(name="i_started_on", columns={"started_on"}), @ORM\Index(name="i_table_num_row_id", columns={"table_num", "row_id"})})
 * @ORM\Entity
 */
class CaSearchIndexingQueue
{
    /**
     * @var int
     *
     * @ORM\Column(name="entry_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entryId;

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
     * @var string|null
     *
     * @ORM\Column(name="field_data", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $fieldData = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="reindex", type="boolean", nullable=false)
     */
    private $reindex = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="changed_fields", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $changedFields = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="options", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $options = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_unindex", type="boolean", nullable=false)
     */
    private $isUnindex = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dependencies", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $dependencies = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="started_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $startedOn = 'NULL';

    public function getEntryId(): ?int
    {
        return $this->entryId;
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

    public function getFieldData(): ?string
    {
        return $this->fieldData;
    }

    public function setFieldData(?string $fieldData): self
    {
        $this->fieldData = $fieldData;

        return $this;
    }

    public function getReindex(): ?bool
    {
        return $this->reindex;
    }

    public function setReindex(bool $reindex): self
    {
        $this->reindex = $reindex;

        return $this;
    }

    public function getChangedFields(): ?string
    {
        return $this->changedFields;
    }

    public function setChangedFields(?string $changedFields): self
    {
        $this->changedFields = $changedFields;

        return $this;
    }

    public function getOptions(): ?string
    {
        return $this->options;
    }

    public function setOptions(?string $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getIsUnindex(): ?bool
    {
        return $this->isUnindex;
    }

    public function setIsUnindex(bool $isUnindex): self
    {
        $this->isUnindex = $isUnindex;

        return $this;
    }

    public function getDependencies(): ?string
    {
        return $this->dependencies;
    }

    public function setDependencies(?string $dependencies): self
    {
        $this->dependencies = $dependencies;

        return $this;
    }

    public function getStartedOn(): ?int
    {
        return $this->startedOn;
    }

    public function setStartedOn(?int $startedOn): self
    {
        $this->startedOn = $startedOn;

        return $this;
    }


}
