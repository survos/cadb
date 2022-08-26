<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaAttributeValueMultifiles
 *
 * @ORM\Table(name="ca_attribute_value_multifiles", indexes={@ORM\Index(name="i_resource_path", columns={"resource_path"}), @ORM\Index(name="i_value_id", columns={"value_id"})})
 * @ORM\Entity
 */
class CaAttributeValueMultifiles
{
    /**
     * @var int
     *
     * @ORM\Column(name="multifile_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $multifileId;

    /**
     * @var int
     *
     * @ORM\Column(name="value_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $valueId;

    /**
     * @var string
     *
     * @ORM\Column(name="resource_path", type="text", nullable=false)
     */
    private $resourcePath;

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="blob", length=0, nullable=false)
     */
    private $media;

    /**
     * @var string
     *
     * @ORM\Column(name="media_metadata", type="blob", length=0, nullable=false)
     */
    private $mediaMetadata;

    /**
     * @var string
     *
     * @ORM\Column(name="media_content", type="text", length=0, nullable=false)
     */
    private $mediaContent;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    public function getMultifileId(): ?int
    {
        return $this->multifileId;
    }

    public function getValueId(): ?int
    {
        return $this->valueId;
    }

    public function setValueId(int $valueId): self
    {
        $this->valueId = $valueId;

        return $this;
    }

    public function getResourcePath(): ?string
    {
        return $this->resourcePath;
    }

    public function setResourcePath(string $resourcePath): self
    {
        $this->resourcePath = $resourcePath;

        return $this;
    }

    public function getMedia()
    {
        return $this->media;
    }

    public function setMedia($media): self
    {
        $this->media = $media;

        return $this;
    }

    public function getMediaMetadata()
    {
        return $this->mediaMetadata;
    }

    public function setMediaMetadata($mediaMetadata): self
    {
        $this->mediaMetadata = $mediaMetadata;

        return $this;
    }

    public function getMediaContent(): ?string
    {
        return $this->mediaContent;
    }

    public function setMediaContent(string $mediaContent): self
    {
        $this->mediaContent = $mediaContent;

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


}
