<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaDataImporterLogItems
 *
 * @ORM\Table(name="ca_data_importer_log_items", indexes={@ORM\Index(name="i_log_datetime", columns={"log_datetime"}), @ORM\Index(name="i_log_id", columns={"log_id"}), @ORM\Index(name="i_row_id", columns={"row_id"})})
 * @ORM\Entity
 */
class CaDataImporterLogItems
{
    /**
     * @var int
     *
     * @ORM\Column(name="log_item_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logItemId;

    /**
     * @var int
     *
     * @ORM\Column(name="log_datetime", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $logDatetime;

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
     * @ORM\Column(name="type_code", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $typeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=false)
     */
    private $notes;

    /**
     * @var \CaDataImporterLog
     *
     * @ORM\ManyToOne(targetEntity="CaDataImporterLog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="log_id", referencedColumnName="log_id")
     * })
     */
    private $log;

    public function getLogItemId(): ?int
    {
        return $this->logItemId;
    }

    public function getLogDatetime(): ?int
    {
        return $this->logDatetime;
    }

    public function setLogDatetime(int $logDatetime): self
    {
        $this->logDatetime = $logDatetime;

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

    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    public function setTypeCode(string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getLog(): ?CaDataImporterLog
    {
        return $this->log;
    }

    public function setLog(?CaDataImporterLog $log): self
    {
        $this->log = $log;

        return $this;
    }


}
