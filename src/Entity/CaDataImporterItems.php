<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaDataImporterItems
 *
 * @ORM\Table(name="ca_data_importer_items", indexes={@ORM\Index(name="i_importer_id", columns={"importer_id"}), @ORM\Index(name="i_group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class CaDataImporterItems
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
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=1024, nullable=false)
     */
    private $source;

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
     * @var \CaDataImporterGroups
     *
     * @ORM\ManyToOne(targetEntity="CaDataImporterGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="group_id")
     * })
     */
    private $group;

    /**
     * @var \CaDataImporters
     *
     * @ORM\ManyToOne(targetEntity="CaDataImporters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="importer_id", referencedColumnName="importer_id")
     * })
     */
    private $importer;

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;

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

    public function getGroup(): ?CaDataImporterGroups
    {
        return $this->group;
    }

    public function setGroup(?CaDataImporterGroups $group): self
    {
        $this->group = $group;

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
