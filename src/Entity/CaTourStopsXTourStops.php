<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaTourStopsXTourStops
 *
 * @ORM\Table(name="ca_tour_stops_x_tour_stops", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"stop_left_id", "stop_right_id", "type_id", "sdatetime", "edatetime"})}, indexes={@ORM\Index(name="i_stop_left_id", columns={"stop_left_id"}), @ORM\Index(name="i_label_left_id", columns={"label_left_id"}), @ORM\Index(name="i_stop_right_id", columns={"stop_right_id"}), @ORM\Index(name="i_label_right_id", columns={"label_right_id"}), @ORM\Index(name="i_type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class CaTourStopsXTourStops
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
     * @var \CaTourStopLabels
     *
     * @ORM\ManyToOne(targetEntity="CaTourStopLabels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="label_left_id", referencedColumnName="label_id")
     * })
     */
    private $labelLeft;

    /**
     * @var \CaTourStopLabels
     *
     * @ORM\ManyToOne(targetEntity="CaTourStopLabels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="label_right_id", referencedColumnName="label_id")
     * })
     */
    private $labelRight;

    /**
     * @var \CaTourStops
     *
     * @ORM\ManyToOne(targetEntity="CaTourStops")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stop_left_id", referencedColumnName="stop_id")
     * })
     */
    private $stopLeft;

    /**
     * @var \CaTourStops
     *
     * @ORM\ManyToOne(targetEntity="CaTourStops")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stop_right_id", referencedColumnName="stop_id")
     * })
     */
    private $stopRight;

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

    public function getLabelLeft(): ?CaTourStopLabels
    {
        return $this->labelLeft;
    }

    public function setLabelLeft(?CaTourStopLabels $labelLeft): self
    {
        $this->labelLeft = $labelLeft;

        return $this;
    }

    public function getLabelRight(): ?CaTourStopLabels
    {
        return $this->labelRight;
    }

    public function setLabelRight(?CaTourStopLabels $labelRight): self
    {
        $this->labelRight = $labelRight;

        return $this;
    }

    public function getStopLeft(): ?CaTourStops
    {
        return $this->stopLeft;
    }

    public function setStopLeft(?CaTourStops $stopLeft): self
    {
        $this->stopLeft = $stopLeft;

        return $this;
    }

    public function getStopRight(): ?CaTourStops
    {
        return $this->stopRight;
    }

    public function setStopRight(?CaTourStops $stopRight): self
    {
        $this->stopRight = $stopRight;

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
