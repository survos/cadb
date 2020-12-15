<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSetItemLabels
 *
 * @ORM\Table(name="ca_set_item_labels", indexes={@ORM\Index(name="i_set_id", columns={"item_id"}), @ORM\Index(name="i_locale_id", columns={"locale_id"})})
 * @ORM\Entity
 */
class CaSetItemLabels
{
    /**
     * @var int
     *
     * @ORM\Column(name="label_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $labelId;

    /**
     * @var int
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $itemId;

    /**
     * @var int
     *
     * @ORM\Column(name="locale_id", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $localeId;

    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="text", length=65535, nullable=false)
     */
    private $caption;

    public function getLabelId(): ?int
    {
        return $this->labelId;
    }

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function setItemId(int $itemId): self
    {
        $this->itemId = $itemId;

        return $this;
    }

    public function getLocaleId(): ?int
    {
        return $this->localeId;
    }

    public function setLocaleId(int $localeId): self
    {
        $this->localeId = $localeId;

        return $this;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function setCaption(string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }


}
