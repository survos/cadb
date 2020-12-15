<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaMediaReplicationStatusCheck
 *
 * @ORM\Table(name="ca_media_replication_status_check", indexes={@ORM\Index(name="i_row_id", columns={"row_id", "table_num"})})
 * @ORM\Entity
 */
class CaMediaReplicationStatusCheck
{
    /**
     * @var int
     *
     * @ORM\Column(name="check_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $checkId;

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
     * @ORM\Column(name="target", type="string", length=255, nullable=false)
     */
    private $target;

    /**
     * @var int
     *
     * @ORM\Column(name="created_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdOn;

    /**
     * @var int
     *
     * @ORM\Column(name="last_check", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastCheck;

    public function getCheckId(): ?int
    {
        return $this->checkId;
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

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(string $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getCreatedOn(): ?int
    {
        return $this->createdOn;
    }

    public function setCreatedOn(int $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    public function getLastCheck(): ?int
    {
        return $this->lastCheck;
    }

    public function setLastCheck(int $lastCheck): self
    {
        $this->lastCheck = $lastCheck;

        return $this;
    }


}
