<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaObjectRepresentationCaptions
 *
 * @ORM\Table(name="ca_object_representation_captions", indexes={@ORM\Index(name="i_representation_id", columns={"representation_id"}), @ORM\Index(name="i_locale_id", columns={"locale_id"})})
 * @ORM\Entity
 */
class CaObjectRepresentationCaptions
{
    /**
     * @var int
     *
     * @ORM\Column(name="caption_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $captionId;

    /**
     * @var int
     *
     * @ORM\Column(name="representation_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $representationId;

    /**
     * @var string
     *
     * @ORM\Column(name="caption_file", type="blob", length=0, nullable=false)
     */
    private $captionFile;

    /**
     * @var string
     *
     * @ORM\Column(name="caption_content", type="text", length=0, nullable=false)
     */
    private $captionContent;

    /**
     * @var \CaLocales
     *
     * @ORM\ManyToOne(targetEntity="CaLocales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locale_id", referencedColumnName="locale_id")
     * })
     */
    private $locale;

    public function getCaptionId(): ?int
    {
        return $this->captionId;
    }

    public function getRepresentationId(): ?int
    {
        return $this->representationId;
    }

    public function setRepresentationId(int $representationId): self
    {
        $this->representationId = $representationId;

        return $this;
    }

    public function getCaptionFile()
    {
        return $this->captionFile;
    }

    public function setCaptionFile($captionFile): self
    {
        $this->captionFile = $captionFile;

        return $this;
    }

    public function getCaptionContent(): ?string
    {
        return $this->captionContent;
    }

    public function setCaptionContent(string $captionContent): self
    {
        $this->captionContent = $captionContent;

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
