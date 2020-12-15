<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaAttributeValues
 *
 * @ORM\Table(name="ca_attribute_values", indexes={@ORM\Index(name="i_value_integer1", columns={"value_integer1"}), @ORM\Index(name="i_item_id", columns={"item_id"}), @ORM\Index(name="i_source_info", columns={"source_info"}), @ORM\Index(name="i_element_id", columns={"element_id"}), @ORM\Index(name="i_value_decimal1", columns={"value_decimal1"}), @ORM\Index(name="i_value_longtext1", columns={"value_longtext1"}), @ORM\Index(name="i_attr_element", columns={"attribute_id", "element_id"}), @ORM\Index(name="i_attribute_id", columns={"attribute_id"}), @ORM\Index(name="i_value_decimal2", columns={"value_decimal2"}), @ORM\Index(name="i_value_longtext2", columns={"value_longtext2"})})
 * @ORM\Entity
 */
class CaAttributeValues
{
    /**
     * @var int
     *
     * @ORM\Column(name="value_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $valueId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_longtext1", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $valueLongtext1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_longtext2", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $valueLongtext2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_blob", type="blob", length=0, nullable=true, options={"default"="NULL"})
     */
    private $valueBlob = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_decimal1", type="decimal", precision=40, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $valueDecimal1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_decimal2", type="decimal", precision=40, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $valueDecimal2 = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_integer1", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $valueInteger1 = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="source_info", type="text", length=0, nullable=false)
     */
    private $sourceInfo;

    /**
     * @var \CaAttributes
     *
     * @ORM\ManyToOne(targetEntity="CaAttributes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attribute_id", referencedColumnName="attribute_id")
     * })
     */
    private $attribute;

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
     * @var \CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="item_id")
     * })
     */
    private $item;

    public function getValueId(): ?int
    {
        return $this->valueId;
    }

    public function getValueLongtext1(): ?string
    {
        return $this->valueLongtext1;
    }

    public function setValueLongtext1(?string $valueLongtext1): self
    {
        $this->valueLongtext1 = $valueLongtext1;

        return $this;
    }

    public function getValueLongtext2(): ?string
    {
        return $this->valueLongtext2;
    }

    public function setValueLongtext2(?string $valueLongtext2): self
    {
        $this->valueLongtext2 = $valueLongtext2;

        return $this;
    }

    public function getValueBlob()
    {
        return $this->valueBlob;
    }

    public function setValueBlob($valueBlob): self
    {
        $this->valueBlob = $valueBlob;

        return $this;
    }

    public function getValueDecimal1(): ?string
    {
        return $this->valueDecimal1;
    }

    public function setValueDecimal1(?string $valueDecimal1): self
    {
        $this->valueDecimal1 = $valueDecimal1;

        return $this;
    }

    public function getValueDecimal2(): ?string
    {
        return $this->valueDecimal2;
    }

    public function setValueDecimal2(?string $valueDecimal2): self
    {
        $this->valueDecimal2 = $valueDecimal2;

        return $this;
    }

    public function getValueInteger1(): ?int
    {
        return $this->valueInteger1;
    }

    public function setValueInteger1(?int $valueInteger1): self
    {
        $this->valueInteger1 = $valueInteger1;

        return $this;
    }

    public function getSourceInfo(): ?string
    {
        return $this->sourceInfo;
    }

    public function setSourceInfo(string $sourceInfo): self
    {
        $this->sourceInfo = $sourceInfo;

        return $this;
    }

    public function getAttribute(): ?CaAttributes
    {
        return $this->attribute;
    }

    public function setAttribute(?CaAttributes $attribute): self
    {
        $this->attribute = $attribute;

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

    public function getItem(): ?CaListItems
    {
        return $this->item;
    }

    public function setItem(?CaListItems $item): self
    {
        $this->item = $item;

        return $this;
    }


}
