<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaChangeLog
 *
 * @ORM\Table(name="ca_change_log", indexes={@ORM\Index(name="i_logged", columns={"logged_row_id", "logged_table_num"}), @ORM\Index(name="i_table_num", columns={"logged_table_num"}), @ORM\Index(name="i_datetime", columns={"log_datetime"}), @ORM\Index(name="i_batch_id", columns={"batch_id"}), @ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_unit_id", columns={"unit_id"}), @ORM\Index(name="i_date_unit", columns={"log_datetime", "unit_id"})})
 * @ORM\Entity
 */
class CaChangeLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="log_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logId;

    /**
     * @var int
     *
     * @ORM\Column(name="log_datetime", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $logDatetime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="changetype", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $changetype;

    /**
     * @var bool
     *
     * @ORM\Column(name="logged_table_num", type="boolean", nullable=false)
     */
    private $loggedTableNum;

    /**
     * @var int
     *
     * @ORM\Column(name="logged_row_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $loggedRowId;

    /**
     * @var bool
     *
     * @ORM\Column(name="rolledback", type="boolean", nullable=false)
     */
    private $rolledback = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_id", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $unitId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="batch_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $batchId = 'NULL';

    public function getLogId(): ?string
    {
        return $this->logId;
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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getChangetype(): ?string
    {
        return $this->changetype;
    }

    public function setChangetype(string $changetype): self
    {
        $this->changetype = $changetype;

        return $this;
    }

    public function getLoggedTableNum(): ?bool
    {
        return $this->loggedTableNum;
    }

    public function setLoggedTableNum(bool $loggedTableNum): self
    {
        $this->loggedTableNum = $loggedTableNum;

        return $this;
    }

    public function getLoggedRowId(): ?int
    {
        return $this->loggedRowId;
    }

    public function setLoggedRowId(int $loggedRowId): self
    {
        $this->loggedRowId = $loggedRowId;

        return $this;
    }

    public function getRolledback(): ?bool
    {
        return $this->rolledback;
    }

    public function setRolledback(bool $rolledback): self
    {
        $this->rolledback = $rolledback;

        return $this;
    }

    public function getUnitId(): ?string
    {
        return $this->unitId;
    }

    public function setUnitId(?string $unitId): self
    {
        $this->unitId = $unitId;

        return $this;
    }

    public function getBatchId(): ?int
    {
        return $this->batchId;
    }

    public function setBatchId(?int $batchId): self
    {
        $this->batchId = $batchId;

        return $this;
    }


}
