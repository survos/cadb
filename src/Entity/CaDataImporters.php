<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaDataImporters
 *
 * @ORM\Table(name="ca_data_importers", uniqueConstraints={@ORM\UniqueConstraint(name="u_importer_code", columns={"importer_code"})}, indexes={@ORM\Index(name="i_table_num", columns={"table_num"})})
 * @ORM\Entity
 */
class CaDataImporters
{
    /**
     * @var int
     *
     * @ORM\Column(name="importer_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $importerId;

    /**
     * @var string
     *
     * @ORM\Column(name="importer_code", type="string", length=100, nullable=false)
     */
    private $importerCode;

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

    /**
     * @var string
     *
     * @ORM\Column(name="rules", type="text", length=0, nullable=false)
     */
    private $rules;

    /**
     * @var string
     *
     * @ORM\Column(name="worksheet", type="blob", length=0, nullable=false)
     */
    private $worksheet;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    public function getImporterId(): ?int
    {
        return $this->importerId;
    }

    public function getImporterCode(): ?string
    {
        return $this->importerCode;
    }

    public function setImporterCode(string $importerCode): self
    {
        $this->importerCode = $importerCode;

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

    public function getRules(): ?string
    {
        return $this->rules;
    }

    public function setRules(string $rules): self
    {
        $this->rules = $rules;

        return $this;
    }

    public function getWorksheet()
    {
        return $this->worksheet;
    }

    public function setWorksheet($worksheet): self
    {
        $this->worksheet = $worksheet;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }


}
