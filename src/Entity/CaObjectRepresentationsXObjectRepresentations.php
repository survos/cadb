<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaObjectRepresentationsXObjectRepresentations
 *
 * @ORM\Table(name="ca_object_representations_x_object_representations", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"representation_left_id", "representation_right_id", "type_id", "sdatetime", "edatetime"})}, indexes={@ORM\Index(name="i_representation_left_id", columns={"representation_left_id"}), @ORM\Index(name="i_label_left_id", columns={"label_left_id"}), @ORM\Index(name="i_representation_right_id", columns={"representation_right_id"}), @ORM\Index(name="i_label_right_id", columns={"label_right_id"}), @ORM\Index(name="i_type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class CaObjectRepresentationsXObjectRepresentations
{
    /**
     * @var int
     *
     * @ORM\Column(name="relation_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $relationId;

    /**
     * @var string
     *
     * @ORM\Column(name="source_info", type="text", nullable=false)
     */
    private $sourceInfo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sdatetime", type="decimal", precision=30, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $sdatetime = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="edatetime", type="decimal", precision=30, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $edatetime = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var \CaObjectLabels
     *
     * @ORM\ManyToOne(targetEntity="CaObjectLabels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="label_left_id", referencedColumnName="label_id")
     * })
     */
    private $labelLeft;

    /**
     * @var \CaObjectLabels
     *
     * @ORM\ManyToOne(targetEntity="CaObjectLabels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="label_right_id", referencedColumnName="label_id")
     * })
     */
    private $labelRight;

    /**
     * @var \CaObjectRepresentations
     *
     * @ORM\ManyToOne(targetEntity="CaObjectRepresentations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="representation_left_id", referencedColumnName="representation_id")
     * })
     */
    private $representationLeft;

    /**
     * @var \CaObjectRepresentations
     *
     * @ORM\ManyToOne(targetEntity="CaObjectRepresentations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="representation_right_id", referencedColumnName="representation_id")
     * })
     */
    private $representationRight;

    /**
     * @var \CaRelationshipTypes
     *
     * @ORM\ManyToOne(targetEntity="CaRelationshipTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="type_id")
     * })
     */
    private $type;

    public function getRelationId(): ?int
    {
        return $this->relationId;
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

    public function getSdatetime(): ?string
    {
        return $this->sdatetime;
    }

    public function setSdatetime(?string $sdatetime): self
    {
        $this->sdatetime = $sdatetime;

        return $this;
    }

    public function getEdatetime(): ?string
    {
        return $this->edatetime;
    }

    public function setEdatetime(?string $edatetime): self
    {
        $this->edatetime = $edatetime;

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

    public function getLabelLeft(): ?CaObjectLabels
    {
        return $this->labelLeft;
    }

    public function setLabelLeft(?CaObjectLabels $labelLeft): self
    {
        $this->labelLeft = $labelLeft;

        return $this;
    }

    public function getLabelRight(): ?CaObjectLabels
    {
        return $this->labelRight;
    }

    public function setLabelRight(?CaObjectLabels $labelRight): self
    {
        $this->labelRight = $labelRight;

        return $this;
    }

    public function getRepresentationLeft(): ?CaObjectRepresentations
    {
        return $this->representationLeft;
    }

    public function setRepresentationLeft(?CaObjectRepresentations $representationLeft): self
    {
        $this->representationLeft = $representationLeft;

        return $this;
    }

    public function getRepresentationRight(): ?CaObjectRepresentations
    {
        return $this->representationRight;
    }

    public function setRepresentationRight(?CaObjectRepresentations $representationRight): self
    {
        $this->representationRight = $representationRight;

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
