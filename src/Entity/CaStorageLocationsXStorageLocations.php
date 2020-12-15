<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaStorageLocationsXStorageLocations
 *
 * @ORM\Table(name="ca_storage_locations_x_storage_locations", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"location_left_id", "location_right_id", "type_id", "sdatetime", "edatetime"})}, indexes={@ORM\Index(name="i_location_left_id", columns={"location_left_id"}), @ORM\Index(name="i_label_left_id", columns={"label_left_id"}), @ORM\Index(name="i_location_right_id", columns={"location_right_id"}), @ORM\Index(name="i_label_right_id", columns={"label_right_id"}), @ORM\Index(name="i_type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class CaStorageLocationsXStorageLocations
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
     * @var \CaStorageLocationLabels
     *
     * @ORM\ManyToOne(targetEntity="CaStorageLocationLabels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="label_left_id", referencedColumnName="label_id")
     * })
     */
    private $labelLeft;

    /**
     * @var \CaStorageLocationLabels
     *
     * @ORM\ManyToOne(targetEntity="CaStorageLocationLabels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="label_right_id", referencedColumnName="label_id")
     * })
     */
    private $labelRight;

    /**
     * @var \CaStorageLocations
     *
     * @ORM\ManyToOne(targetEntity="CaStorageLocations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_left_id", referencedColumnName="location_id")
     * })
     */
    private $locationLeft;

    /**
     * @var \CaStorageLocations
     *
     * @ORM\ManyToOne(targetEntity="CaStorageLocations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_right_id", referencedColumnName="location_id")
     * })
     */
    private $locationRight;

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

    public function getLabelLeft(): ?CaStorageLocationLabels
    {
        return $this->labelLeft;
    }

    public function setLabelLeft(?CaStorageLocationLabels $labelLeft): self
    {
        $this->labelLeft = $labelLeft;

        return $this;
    }

    public function getLabelRight(): ?CaStorageLocationLabels
    {
        return $this->labelRight;
    }

    public function setLabelRight(?CaStorageLocationLabels $labelRight): self
    {
        $this->labelRight = $labelRight;

        return $this;
    }

    public function getLocationLeft(): ?CaStorageLocations
    {
        return $this->locationLeft;
    }

    public function setLocationLeft(?CaStorageLocations $locationLeft): self
    {
        $this->locationLeft = $locationLeft;

        return $this;
    }

    public function getLocationRight(): ?CaStorageLocations
    {
        return $this->locationRight;
    }

    public function setLocationRight(?CaStorageLocations $locationRight): self
    {
        $this->locationRight = $locationRight;

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