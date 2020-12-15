<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaObjectsXObjects
 *
 * @ORM\Table(name="ca_objects_x_objects", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"object_left_id", "object_right_id", "type_id", "sdatetime", "edatetime"})}, indexes={@ORM\Index(name="i_object_left_id", columns={"object_left_id"}), @ORM\Index(name="i_label_left_id", columns={"label_left_id"}), @ORM\Index(name="i_object_right_id", columns={"object_right_id"}), @ORM\Index(name="i_label_right_id", columns={"label_right_id"}), @ORM\Index(name="i_type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class CaObjectsXObjects
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
     * @ORM\Column(name="source_info", type="text", length=65535, nullable=false)
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
     * @var \CaObjects
     *
     * @ORM\ManyToOne(targetEntity="CaObjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_left_id", referencedColumnName="object_id")
     * })
     */
    private $objectLeft;

    /**
     * @var \CaObjects
     *
     * @ORM\ManyToOne(targetEntity="CaObjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_right_id", referencedColumnName="object_id")
     * })
     */
    private $objectRight;

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

    public function getObjectLeft(): ?CaObjects
    {
        return $this->objectLeft;
    }

    public function setObjectLeft(?CaObjects $objectLeft): self
    {
        $this->objectLeft = $objectLeft;

        return $this;
    }

    public function getObjectRight(): ?CaObjects
    {
        return $this->objectRight;
    }

    public function setObjectRight(?CaObjects $objectRight): self
    {
        $this->objectRight = $objectRight;

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
