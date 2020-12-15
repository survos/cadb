<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaUserRepresentationAnnotations
 *
 * @ORM\Table(name="ca_user_representation_annotations", indexes={@ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_representation_id", columns={"representation_id"}), @ORM\Index(name="i_locale_id", columns={"locale_id"})})
 * @ORM\Entity
 */
class CaUserRepresentationAnnotations
{
    /**
     * @var int
     *
     * @ORM\Column(name="annotation_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $annotationId;

    /**
     * @var string
     *
     * @ORM\Column(name="type_code", type="string", length=30, nullable=false)
     */
    private $typeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="props", type="text", length=0, nullable=false)
     */
    private $props;

    /**
     * @var string
     *
     * @ORM\Column(name="preview", type="blob", length=0, nullable=false)
     */
    private $preview;

    /**
     * @var string
     *
     * @ORM\Column(name="source_info", type="text", length=0, nullable=false)
     */
    private $sourceInfo;

    /**
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var \CaLocales
     *
     * @ORM\ManyToOne(targetEntity="CaLocales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locale_id", referencedColumnName="locale_id")
     * })
     */
    private $locale;

    /**
     * @var \CaObjectRepresentations
     *
     * @ORM\ManyToOne(targetEntity="CaObjectRepresentations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="representation_id", referencedColumnName="representation_id")
     * })
     */
    private $representation;

    /**
     * @var \CaUsers
     *
     * @ORM\ManyToOne(targetEntity="CaUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function getAnnotationId(): ?int
    {
        return $this->annotationId;
    }

    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    public function setTypeCode(string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    public function getProps(): ?string
    {
        return $this->props;
    }

    public function setProps(string $props): self
    {
        $this->props = $props;

        return $this;
    }

    public function getPreview()
    {
        return $this->preview;
    }

    public function setPreview($preview): self
    {
        $this->preview = $preview;

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

    public function getAccess(): ?bool
    {
        return $this->access;
    }

    public function setAccess(bool $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

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

    public function getRepresentation(): ?CaObjectRepresentations
    {
        return $this->representation;
    }

    public function setRepresentation(?CaObjectRepresentations $representation): self
    {
        $this->representation = $representation;

        return $this;
    }

    public function getUser(): ?CaUsers
    {
        return $this->user;
    }

    public function setUser(?CaUsers $user): self
    {
        $this->user = $user;

        return $this;
    }


}
