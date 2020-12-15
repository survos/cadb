<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaCollectionsXStorageLocations
 *
 * @ORM\Table(name="ca_collections_x_storage_locations", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"collection_id", "location_id", "type_id", "sdatetime", "edatetime"})}, indexes={@ORM\Index(name="i_collection_id", columns={"collection_id"}), @ORM\Index(name="i_label_left_id", columns={"label_left_id"}), @ORM\Index(name="i_location_id", columns={"location_id"}), @ORM\Index(name="i_label_right_id", columns={"label_right_id"}), @ORM\Index(name="i_type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class CaCollectionsXStorageLocations
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
     * @var int
     *
     * @ORM\Column(name="collection_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $collectionId;

    /**
     * @var int
     *
     * @ORM\Column(name="type_id", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $typeId;

    /**
     * @var int
     *
     * @ORM\Column(name="location_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $locationId;

    /**
     * @var string
     *
     * @ORM\Column(name="source_info", type="text", length=0, nullable=false)
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
     * @var int|null
     *
     * @ORM\Column(name="label_left_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $labelLeftId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="label_right_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $labelRightId = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    public function getRelationId(): ?int
    {
        return $this->relationId;
    }

    public function getCollectionId(): ?int
    {
        return $this->collectionId;
    }

    public function setCollectionId(int $collectionId): self
    {
        $this->collectionId = $collectionId;

        return $this;
    }

    public function getTypeId(): ?int
    {
        return $this->typeId;
    }

    public function setTypeId(int $typeId): self
    {
        $this->typeId = $typeId;

        return $this;
    }

    public function getLocationId(): ?int
    {
        return $this->locationId;
    }

    public function setLocationId(int $locationId): self
    {
        $this->locationId = $locationId;

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

    public function getLabelLeftId(): ?int
    {
        return $this->labelLeftId;
    }

    public function setLabelLeftId(?int $labelLeftId): self
    {
        $this->labelLeftId = $labelLeftId;

        return $this;
    }

    public function getLabelRightId(): ?int
    {
        return $this->labelRightId;
    }

    public function setLabelRightId(?int $labelRightId): self
    {
        $this->labelRightId = $labelRightId;

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
