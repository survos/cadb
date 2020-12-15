<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaMetadataDictionaryEntries
 *
 * @ORM\Table(name="ca_metadata_dictionary_entries", indexes={@ORM\Index(name="i_table_num", columns={"table_num"}), @ORM\Index(name="i_name", columns={"bundle_name"})})
 * @ORM\Entity
 */
class CaMetadataDictionaryEntries
{
    /**
     * @var int
     *
     * @ORM\Column(name="entry_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entryId;

    /**
     * @var string
     *
     * @ORM\Column(name="bundle_name", type="string", length=255, nullable=false)
     */
    private $bundleName;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=0, nullable=false)
     */
    private $settings;

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum = '0';

    public function getEntryId(): ?int
    {
        return $this->entryId;
    }

    public function getBundleName(): ?string
    {
        return $this->bundleName;
    }

    public function setBundleName(string $bundleName): self
    {
        $this->bundleName = $bundleName;

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

    public function getTableNum(): ?bool
    {
        return $this->tableNum;
    }

    public function setTableNum(bool $tableNum): self
    {
        $this->tableNum = $tableNum;

        return $this;
    }


}
