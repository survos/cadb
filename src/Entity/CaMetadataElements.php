<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaMetadataElements
 *
 * @ORM\Table(name="ca_metadata_elements", uniqueConstraints={@ORM\UniqueConstraint(name="u_name_short", columns={"element_code"})}, indexes={@ORM\Index(name="i_parent_id", columns={"parent_id"}), @ORM\Index(name="i_list_id", columns={"list_id"}), @ORM\Index(name="i_hier_left", columns={"hier_left"}), @ORM\Index(name="i_hier_element_id", columns={"hier_element_id"}), @ORM\Index(name="i_hier_right", columns={"hier_right"})})
 * @ORM\Entity
 */
class CaMetadataElements
{
    /**
     * @var int
     *
     * @ORM\Column(name="element_id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $elementId;

    /**
     * @var string
     *
     * @ORM\Column(name="element_code", type="string", length=30, nullable=false)
     */
    private $elementCode;

    /**
     * @var string
     *
     * @ORM\Column(name="documentation_url", type="string", length=255, nullable=false)
     */
    private $documentationUrl;

    /**
     * @var bool
     *
     * @ORM\Column(name="datatype", type="boolean", nullable=false)
     */
    private $datatype;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=0, nullable=false)
     */
    private $settings;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

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
     * @var int|null
     *
     * @ORM\Column(name="hier_element_id", type="smallint", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $hierElementId = 'NULL';

    /**
     * @var \CaLists
     *
     * @ORM\ManyToOne(targetEntity="CaLists")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="list_id", referencedColumnName="list_id")
     * })
     */
    private $list;

    /**
     * @var \CaMetadataElements
     *
     * @ORM\ManyToOne(targetEntity="CaMetadataElements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="element_id")
     * })
     */
    private $parent;

    public function getElementId(): ?int
    {
        return $this->elementId;
    }

    public function getElementCode(): ?string
    {
        return $this->elementCode;
    }

    public function setElementCode(string $elementCode): self
    {
        $this->elementCode = $elementCode;

        return $this;
    }

    public function getDocumentationUrl(): ?string
    {
        return $this->documentationUrl;
    }

    public function setDocumentationUrl(string $documentationUrl): self
    {
        $this->documentationUrl = $documentationUrl;

        return $this;
    }

    public function getDatatype(): ?bool
    {
        return $this->datatype;
    }

    public function setDatatype(bool $datatype): self
    {
        $this->datatype = $datatype;

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

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

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

    public function getHierElementId(): ?int
    {
        return $this->hierElementId;
    }

    public function setHierElementId(?int $hierElementId): self
    {
        $this->hierElementId = $hierElementId;

        return $this;
    }

    public function getList(): ?CaLists
    {
        return $this->list;
    }

    public function setList(?CaLists $list): self
    {
        $this->list = $list;

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
