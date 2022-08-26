<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaDataImportItems
 *
 * @ORM\Table(name="ca_data_import_items", indexes={@ORM\Index(name="i_event_id", columns={"event_id"}), @ORM\Index(name="i_row_id", columns={"table_num", "row_id"})})
 * @ORM\Entity
 */
class CaDataImportItems
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
     * @ORM\Column(name="source_ref", type="string", length=255, nullable=false)
     */
    private $sourceRef;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $tableNum = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="row_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $rowId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_code", type="string", length=1, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $typeCode = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="started_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $startedOn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="completed_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $completedOn = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="elapsed_time", type="decimal", precision=8, scale=4, nullable=true, options={"default"="NULL"})
     */
    private $elapsedTime = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="success", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $success = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var \CaDataImportEvents
     *
     * @ORM\ManyToOne(targetEntity="CaDataImportEvents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="event_id")
     * })
     */
    private $event;

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function getSourceRef(): ?string
    {
        return $this->sourceRef;
    }

    public function setSourceRef(string $sourceRef): self
    {
        $this->sourceRef = $sourceRef;

        return $this;
    }

    public function getTableNum(): ?bool
    {
        return $this->tableNum;
    }

    public function setTableNum(?bool $tableNum): self
    {
        $this->tableNum = $tableNum;

        return $this;
    }

    public function getRowId(): ?int
    {
        return $this->rowId;
    }

    public function setRowId(?int $rowId): self
    {
        $this->rowId = $rowId;

        return $this;
    }

    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    public function getStartedOn(): ?int
    {
        return $this->startedOn;
    }

    public function setStartedOn(int $startedOn): self
    {
        $this->startedOn = $startedOn;

        return $this;
    }

    public function getCompletedOn(): ?int
    {
        return $this->completedOn;
    }

    public function setCompletedOn(?int $completedOn): self
    {
        $this->completedOn = $completedOn;

        return $this;
    }

    public function getElapsedTime(): ?string
    {
        return $this->elapsedTime;
    }

    public function setElapsedTime(?string $elapsedTime): self
    {
        $this->elapsedTime = $elapsedTime;

        return $this;
    }

    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    public function setSuccess(?bool $success): self
    {
        $this->success = $success;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getEvent(): ?CaDataImportEvents
    {
        return $this->event;
    }

    public function setEvent(?CaDataImportEvents $event): self
    {
        $this->event = $event;

        return $this;
    }


}
