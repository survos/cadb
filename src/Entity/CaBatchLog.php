<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaBatchLog
 *
 * @ORM\Table(name="ca_batch_log", indexes={@ORM\Index(name="i_log_datetime", columns={"log_datetime"}), @ORM\Index(name="i_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class CaBatchLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="batch_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $batchId;

    /**
     * @var int
     *
     * @ORM\Column(name="log_datetime", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $logDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=false)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="batch_type", type="string", length=2, nullable=false, options={"fixed"=true})
     */
    private $batchType;

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var int
     *
     * @ORM\Column(name="elapsed_time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $elapsedTime = '0';

    /**
     * @var \CaUsers
     *
     * @ORM\ManyToOne(targetEntity="CaUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function getBatchId(): ?int
    {
        return $this->batchId;
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

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getBatchType(): ?string
    {
        return $this->batchType;
    }

    public function setBatchType(string $batchType): self
    {
        $this->batchType = $batchType;

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

    public function getElapsedTime(): ?int
    {
        return $this->elapsedTime;
    }

    public function setElapsedTime(int $elapsedTime): self
    {
        $this->elapsedTime = $elapsedTime;

        return $this;
    }

    public function getUser(): ?CaUsers
    {
        return $this->user;
    }

    public function setUser(?CaUsers $user): self
    {
        $this->user = $user;

        return $this;
    }


}
