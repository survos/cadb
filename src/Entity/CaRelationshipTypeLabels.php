<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaRelationshipTypeLabels
 *
 * @ORM\Table(name="ca_relationship_type_labels", uniqueConstraints={@ORM\UniqueConstraint(name="u_typename", columns={"type_id", "locale_id", "typename"}), @ORM\UniqueConstraint(name="u_typename_reverse", columns={"typename_reverse", "type_id", "locale_id"})}, indexes={@ORM\Index(name="i_type_id", columns={"type_id"}), @ORM\Index(name="i_locale_id", columns={"locale_id"})})
 * @ORM\Entity
 */
class CaRelationshipTypeLabels
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
     * @var string
     *
     * @ORM\Column(name="typename", type="string", length=255, nullable=false)
     */
    private $typename;

    /**
     * @var string
     *
     * @ORM\Column(name="typename_reverse", type="string", length=255, nullable=false)
     */
    private $typenameReverse;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="description_reverse", type="text", nullable=false)
     */
    private $descriptionReverse;

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
     * @var \CaRelationshipTypes
     *
     * @ORM\ManyToOne(targetEntity="CaRelationshipTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="type_id")
     * })
     */
    private $type;

    public function getLabelId(): ?int
    {
        return $this->labelId;
    }

    public function getTypename(): ?string
    {
        return $this->typename;
    }

    public function setTypename(string $typename): self
    {
        $this->typename = $typename;

        return $this;
    }

    public function getTypenameReverse(): ?string
    {
        return $this->typenameReverse;
    }

    public function setTypenameReverse(string $typenameReverse): self
    {
        $this->typenameReverse = $typenameReverse;

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

    public function getDescriptionReverse(): ?string
    {
        return $this->descriptionReverse;
    }

    public function setDescriptionReverse(string $descriptionReverse): self
    {
        $this->descriptionReverse = $descriptionReverse;

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

    public function getType(): ?CaRelationshipTypes
    {
        return $this->type;
    }

    public function setType(?CaRelationshipTypes $type): self
    {
        $this->type = $type;

        return $this;
    }


}
