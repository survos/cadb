<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaBatchLogItems
 *
 * @ORM\Table(name="ca_batch_log_items", indexes={@ORM\Index(name="i_row_id", columns={"row_id"}), @ORM\Index(name="i_batch_row_id", columns={"batch_id", "row_id"}), @ORM\Index(name="IDX_832C67ADF39EBE7A", columns={"batch_id"})})
 * @ORM\Entity
 */
class CaBatchLogItems
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
     * @var int
     *
     * @ORM\Column(name="row_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rowId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="errors", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $errors = 'NULL';

    /**
     * @var \CaBatchLog
     *
     * @ORM\ManyToOne(targetEntity="CaBatchLog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="batch_id", referencedColumnName="batch_id")
     * })
     */
    private $batch;

    public function getItemId(): ?int
    {
        return $this->itemId;
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

    public function getErrors(): ?string
    {
        return $this->errors;
    }

    public function setErrors(?string $errors): self
    {
        $this->errors = $errors;

        return $this;
    }

    public function getBatch(): ?CaBatchLog
    {
        return $this->batch;
    }

    public function setBatch(?CaBatchLog $batch): self
    {
        $this->batch = $batch;

        return $this;
    }


}
