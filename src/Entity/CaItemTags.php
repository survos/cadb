<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaItemTags
 *
 * @ORM\Table(name="ca_item_tags", indexes={@ORM\Index(name="u_tag", columns={"tag", "locale_id"})})
 * @ORM\Entity
 */
class CaItemTags
{
    /**
     * @var int
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagId;

    /**
     * @var int
     *
     * @ORM\Column(name="locale_id", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $localeId;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255, nullable=false)
     */
    private $tag;

    public function getTagId(): ?int
    {
        return $this->tagId;
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

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }


}
