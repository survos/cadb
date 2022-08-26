<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaDataImporterLog
 *
 * @ORM\Table(name="ca_data_importer_log", indexes={@ORM\Index(name="i_log_datetime", columns={"log_datetime"}), @ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_importer_id", columns={"importer_id"})})
 * @ORM\Entity
 */
class CaDataImporterLog
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
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=false)
     */
    private $notes;

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var string
     *
     * @ORM\Column(name="datafile", type="blob", length=0, nullable=false)
     */
    private $datafile;

    /**
     * @var \CaUsers
     *
     * @ORM\ManyToOne(targetEntity="CaUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    /**
     * @var \CaDataImporters
     *
     * @ORM\ManyToOne(targetEntity="CaDataImporters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="importer_id", referencedColumnName="importer_id")
     * })
     */
    private $importer;

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

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

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

    public function getDatafile()
    {
        return $this->datafile;
    }

    public function setDatafile($datafile): self
    {
        $this->datafile = $datafile;

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

    public function getImporter(): ?CaDataImporters
    {
        return $this->importer;
    }

    public function setImporter(?CaDataImporters $importer): self
    {
        $this->importer = $importer;

        return $this;
    }


}
