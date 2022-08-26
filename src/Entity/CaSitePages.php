<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSitePages
 *
 * @ORM\Table(name="ca_site_pages", indexes={@ORM\Index(name="template_id", columns={"template_id"}), @ORM\Index(name="i_path", columns={"path"})})
 * @ORM\Entity
 */
class CaSitePages
{
    /**
     * @var int
     *
     * @ORM\Column(name="page_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pageId;

    /**
     * @var int
     *
     * @ORM\Column(name="template_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $templateId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=0, nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="text", nullable=false)
     */
    private $keywords;

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

    /**
     * @var int
     *
     * @ORM\Column(name="view_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $viewCount = '0';

    public function getPageId(): ?int
    {
        return $this->pageId;
    }

    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    public function setTemplateId(int $templateId): self
    {
        $this->templateId = $templateId;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;

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

    public function getViewCount(): ?int
    {
        return $this->viewCount;
    }

    public function setViewCount(int $viewCount): self
    {
        $this->viewCount = $viewCount;

        return $this;
    }


}
