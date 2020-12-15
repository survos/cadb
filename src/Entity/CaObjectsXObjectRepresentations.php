<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaObjectsXObjectRepresentations
 *
 * @ORM\Table(name="ca_objects_x_object_representations", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"object_id", "representation_id"})}, indexes={@ORM\Index(name="i_object_id", columns={"object_id"}), @ORM\Index(name="i_representation_id", columns={"representation_id"})})
 * @ORM\Entity
 */
class CaObjectsXObjectRepresentations
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
     * @var bool
     *
     * @ORM\Column(name="is_primary", type="boolean", nullable=false)
     */
    private $isPrimary;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var \CaObjects
     *
     * @ORM\ManyToOne(targetEntity="CaObjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_id", referencedColumnName="object_id")
     * })
     */
    private $object;

    /**
     * @var \CaObjectRepresentations
     *
     * @ORM\ManyToOne(targetEntity="CaObjectRepresentations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="representation_id", referencedColumnName="representation_id")
     * })
     */
    private $representation;

    public function getRelationId(): ?int
    {
        return $this->relationId;
    }

    public function getIsPrimary(): ?bool
    {
        return $this->isPrimary;
    }

    public function setIsPrimary(bool $isPrimary): self
    {
        $this->isPrimary = $isPrimary;

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

    public function getObject(): ?CaObjects
    {
        return $this->object;
    }

    public function setObject(?CaObjects $object): self
    {
        $this->object = $object;

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


}
