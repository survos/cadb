<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSitePageMedia
 *
 * @ORM\Table(name="ca_site_page_media", uniqueConstraints={@ORM\UniqueConstraint(name="u_idno", columns={"page_id", "idno"})}, indexes={@ORM\Index(name="page_id", columns={"page_id"}), @ORM\Index(name="idno", columns={"idno"}), @ORM\Index(name="rank", columns={"rank"}), @ORM\Index(name="idno_sort", columns={"idno_sort"}), @ORM\Index(name="md5", columns={"md5"})})
 * @ORM\Entity
 */
class CaSitePageMedia
{
    /**
     * @var int
     *
     * @ORM\Column(name="media_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mediaId;

    /**
     * @var int
     *
     * @ORM\Column(name="page_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $pageId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="idno", type="string", length=255, nullable=false)
     */
    private $idno;

    /**
     * @var string
     *
     * @ORM\Column(name="idno_sort", type="string", length=255, nullable=false)
     */
    private $idnoSort;

    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="text", length=65535, nullable=false)
     */
    private $caption;

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
     * @var string
     *
     * @ORM\Column(name="md5", type="string", length=32, nullable=false)
     */
    private $md5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mimetype", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $mimetype = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="original_filename", type="string", length=1024, nullable=false)
     */
    private $originalFilename;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    public function getMediaId(): ?int
    {
        return $this->mediaId;
    }

    public function getPageId(): ?int
    {
        return $this->pageId;
    }

    public function setPageId(int $pageId): self
    {
        $this->pageId = $pageId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getIdno(): ?string
    {
        return $this->idno;
    }

    public function setIdno(string $idno): self
    {
        $this->idno = $idno;

        return $this;
    }

    public function getIdnoSort(): ?string
    {
        return $this->idnoSort;
    }

    public function setIdnoSort(string $idnoSort): self
    {
        $this->idnoSort = $idnoSort;

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

    public function getMd5(): ?string
    {
        return $this->md5;
    }

    public function setMd5(string $md5): self
    {
        $this->md5 = $md5;

        return $this;
    }

    public function getMimetype(): ?string
    {
        return $this->mimetype;
    }

    public function setMimetype(?string $mimetype): self
    {
        $this->mimetype = $mimetype;

        return $this;
    }

    public function getOriginalFilename(): ?string
    {
        return $this->originalFilename;
    }

    public function setOriginalFilename(string $originalFilename): self
    {
        $this->originalFilename = $originalFilename;

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

    public function getAccess(): ?bool
    {
        return $this->access;
    }

    public function setAccess(bool $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }


}
