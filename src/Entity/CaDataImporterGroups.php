<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaDataImporterGroups
 *
 * @ORM\Table(name="ca_data_importer_groups", uniqueConstraints={@ORM\UniqueConstraint(name="u_group_code", columns={"importer_id", "group_code"})}, indexes={@ORM\Index(name="i_importer_id", columns={"importer_id"})})
 * @ORM\Entity
 */
class CaDataImporterGroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="group_code", type="string", length=100, nullable=false)
     */
    private $groupCode;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=1024, nullable=false)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=0, nullable=false)
     */
    private $settings;

    /**
     * @var \CaDataImporters
     *
     * @ORM\ManyToOne(targetEntity="CaDataImporters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="importer_id", referencedColumnName="importer_id")
     * })
     */
    private $importer;

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    public function getGroupCode(): ?string
    {
        return $this->groupCode;
    }

    public function setGroupCode(string $groupCode): self
    {
        $this->groupCode = $groupCode;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

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
