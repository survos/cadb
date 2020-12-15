<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaDataExporterItems
 *
 * @ORM\Table(name="ca_data_exporter_items", indexes={@ORM\Index(name="i_hier_left", columns={"hier_left"}), @ORM\Index(name="i_parent_id", columns={"parent_id"}), @ORM\Index(name="i_hier_right", columns={"hier_right"}), @ORM\Index(name="i_exporter_id", columns={"exporter_id"}), @ORM\Index(name="i_hier_item_id", columns={"hier_item_id"})})
 * @ORM\Entity
 */
class CaDataExporterItems
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
     * @ORM\Column(name="element", type="string", length=1024, nullable=false)
     */
    private $element;

    /**
     * @var string|null
     *
     * @ORM\Column(name="context", type="string", length=1024, nullable=true, options={"default"="NULL"})
     */
    private $context = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="source", type="string", length=1024, nullable=true, options={"default"="NULL"})
     */
    private $source = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=0, nullable=false)
     */
    private $settings;

    /**
     * @var int
     *
     * @ORM\Column(name="hier_item_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $hierItemId;

    /**
     * @var string
     *
     * @ORM\Column(name="hier_left", type="decimal", precision=30, scale=20, nullable=false)
     */
    private $hierLeft;

    /**
     * @var string
     *
     * @ORM\Column(name="hier_right", type="decimal", precision=30, scale=20, nullable=false)
     */
    private $hierRight;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var \CaDataExporters
     *
     * @ORM\ManyToOne(targetEntity="CaDataExporters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exporter_id", referencedColumnName="exporter_id")
     * })
     */
    private $exporter;

    /**
     * @var \CaDataExporterItems
     *
     * @ORM\ManyToOne(targetEntity="CaDataExporterItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="item_id")
     * })
     */
    private $parent;

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function getElement(): ?string
    {
        return $this->element;
    }

    public function setElement(string $element): self
    {
        $this->element = $element;

        return $this;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }

    public function setContext(?string $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

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

    public function getHierItemId(): ?int
    {
        return $this->hierItemId;
    }

    public function setHierItemId(int $hierItemId): self
    {
        $this->hierItemId = $hierItemId;

        return $this;
    }

    public function getHierLeft(): ?string
    {
        return $this->hierLeft;
    }

    public function setHierLeft(string $hierLeft): self
    {
        $this->hierLeft = $hierLeft;

        return $this;
    }

    public function getHierRight(): ?string
    {
        return $this->hierRight;
    }

    public function setHierRight(string $hierRight): self
    {
        $this->hierRight = $hierRight;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getExporter(): ?CaDataExporters
    {
        return $this->exporter;
    }

    public function setExporter(?CaDataExporters $exporter): self
    {
        $this->exporter = $exporter;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }


}
