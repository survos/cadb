<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaDownloadLog
 *
 * @ORM\Table(name="ca_download_log", indexes={@ORM\Index(name="i_table_num_row_id", columns={"table_num", "row_id"}), @ORM\Index(name="fk_ca_download_log_user_id", columns={"user_id"}), @ORM\Index(name="fk_ca_download_log_representation_id", columns={"representation_id"}), @ORM\Index(name="i_log_datetime", columns={"log_datetime"})})
 * @ORM\Entity
 */
class CaDownloadLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="log_id", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var string|null
     *
     * @ORM\Column(name="ip_addr", type="string", length=39, nullable=true, options={"default"="NULL"})
     */
    private $ipAddr = 'NULL';

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
     * @ORM\Column(name="download_source", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $downloadSource = 'NULL';

    /**
     * @var \CaObjectRepresentations
     *
     * @ORM\ManyToOne(targetEntity="CaObjectRepresentations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="representation_id", referencedColumnName="representation_id")
     * })
     */
    private $representation;

    /**
     * @var \CaUsers
     *
     * @ORM\ManyToOne(targetEntity="CaUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function getLogId(): ?int
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

    public function getIpAddr(): ?string
    {
        return $this->ipAddr;
    }

    public function setIpAddr(?string $ipAddr): self
    {
        $this->ipAddr = $ipAddr;

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

    public function getDownloadSource(): ?string
    {
        return $this->downloadSource;
    }

    public function setDownloadSource(?string $downloadSource): self
    {
        $this->downloadSource = $downloadSource;

        return $this;
    }

    public function getRepresentation(): ?CaObjectRepresentations
    {
        return $this->representation;
    }

    public function setRepresentation(?CaObjectRepresentations $representation): self
    {
        $this->representation = $representation;

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
