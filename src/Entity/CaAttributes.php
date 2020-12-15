<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaAttributes
 *
 * @ORM\Table(name="ca_attributes", indexes={@ORM\Index(name="i_table_num", columns={"table_num"}), @ORM\Index(name="i_locale_id", columns={"locale_id"}), @ORM\Index(name="i_element_id", columns={"element_id"}), @ORM\Index(name="i_prefetch", columns={"row_id", "element_id", "table_num"}), @ORM\Index(name="i_row_id", columns={"row_id"}), @ORM\Index(name="i_row_table_num", columns={"row_id", "table_num"})})
 * @ORM\Entity
 */
class CaAttributes
{
    /**
     * @var int
     *
     * @ORM\Column(name="attribute_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attributeId;

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
     * @var \CaMetadataElements
     *
     * @ORM\ManyToOne(targetEntity="CaMetadataElements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="element_id", referencedColumnName="element_id")
     * })
     */
    private $element;

    /**
     * @var \CaLocales
     *
     * @ORM\ManyToOne(targetEntity="CaLocales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locale_id", referencedColumnName="locale_id")
     * })
     */
    private $locale;

    public function getAttributeId(): ?int
    {
        return $this->attributeId;
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

    public function getElement(): ?CaMetadataElements
    {
        return $this->element;
    }

    public function setElement(?CaMetadataElements $element): self
    {
        $this->element = $element;

        return $this;
    }

    public function getLocale(): ?CaLocales
    {
        return $this->locale;
    }

    public function setLocale(?CaLocales $locale): self
    {
        $this->locale = $locale;

        return $this;
    }


}
