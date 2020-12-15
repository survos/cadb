<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSiteTemplates
 *
 * @ORM\Table(name="ca_site_templates", uniqueConstraints={@ORM\UniqueConstraint(name="u_title", columns={"title"})})
 * @ORM\Entity
 */
class CaSiteTemplates
{
    /**
     * @var int
     *
     * @ORM\Column(name="template_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="text", length=0, nullable=false)
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="text", length=0, nullable=false)
     */
    private $tags;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="template_code", type="string", length=100, nullable=false)
     */
    private $templateCode;

    public function getTemplateId(): ?int
    {
        return $this->templateId;
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

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(string $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(string $tags): self
    {
        $this->tags = $tags;

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

    public function getTemplateCode(): ?string
    {
        return $this->templateCode;
    }

    public function setTemplateCode(string $templateCode): self
    {
        $this->templateCode = $templateCode;

        return $this;
    }


}
