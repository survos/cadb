<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaOccurrencesXOccurrences
 *
 * @ORM\Table(name="ca_occurrences_x_occurrences", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"occurrence_left_id", "occurrence_right_id", "type_id", "sdatetime", "edatetime"})}, indexes={@ORM\Index(name="i_occurrence_left_id", columns={"occurrence_left_id"}), @ORM\Index(name="i_label_left_id", columns={"label_left_id"}), @ORM\Index(name="i_occurrence_right_id", columns={"occurrence_right_id"}), @ORM\Index(name="i_label_right_id", columns={"label_right_id"}), @ORM\Index(name="i_type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class CaOccurrencesXOccurrences
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
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var \CaOccurrenceLabels
     *
     * @ORM\ManyToOne(targetEntity="CaOccurrenceLabels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="label_left_id", referencedColumnName="label_id")
     * })
     */
    private $labelLeft;

    /**
     * @var \CaOccurrenceLabels
     *
     * @ORM\ManyToOne(targetEntity="CaOccurrenceLabels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="label_right_id", referencedColumnName="label_id")
     * })
     */
    private $labelRight;

    /**
     * @var \CaOccurrences
     *
     * @ORM\ManyToOne(targetEntity="CaOccurrences")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="occurrence_left_id", referencedColumnName="occurrence_id")
     * })
     */
    private $occurrenceLeft;

    /**
     * @var \CaOccurrences
     *
     * @ORM\ManyToOne(targetEntity="CaOccurrences")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="occurrence_right_id", referencedColumnName="occurrence_id")
     * })
     */
    private $occurrenceRight;

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

    public function getLabelLeft(): ?CaOccurrenceLabels
    {
        return $this->labelLeft;
    }

    public function setLabelLeft(?CaOccurrenceLabels $labelLeft): self
    {
        $this->labelLeft = $labelLeft;

        return $this;
    }

    public function getLabelRight(): ?CaOccurrenceLabels
    {
        return $this->labelRight;
    }

    public function setLabelRight(?CaOccurrenceLabels $labelRight): self
    {
        $this->labelRight = $labelRight;

        return $this;
    }

    public function getOccurrenceLeft(): ?CaOccurrences
    {
        return $this->occurrenceLeft;
    }

    public function setOccurrenceLeft(?CaOccurrences $occurrenceLeft): self
    {
        $this->occurrenceLeft = $occurrenceLeft;

        return $this;
    }

    public function getOccurrenceRight(): ?CaOccurrences
    {
        return $this->occurrenceRight;
    }

    public function setOccurrenceRight(?CaOccurrences $occurrenceRight): self
    {
        $this->occurrenceRight = $occurrenceRight;

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
