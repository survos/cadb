<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaDataExporters
 *
 * @ORM\Table(name="ca_data_exporters", uniqueConstraints={@ORM\UniqueConstraint(name="u_exporter_code", columns={"exporter_code"})}, indexes={@ORM\Index(name="i_table_num", columns={"table_num"})})
 * @ORM\Entity
 */
class CaDataExporters
{
    /**
     * @var int
     *
     * @ORM\Column(name="exporter_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $exporterId;

    /**
     * @var string
     *
     * @ORM\Column(name="exporter_code", type="string", length=100, nullable=false)
     */
    private $exporterCode;

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=0, nullable=false)
     */
    private $settings;

    public function getExporterId(): ?int
    {
        return $this->exporterId;
    }

    public function getExporterCode(): ?string
    {
        return $this->exporterCode;
    }

    public function setExporterCode(string $exporterCode): self
    {
        $this->exporterCode = $exporterCode;

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

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(string $settings): self
    {
        $this->settings = $settings;

        return $this;
    }


}
