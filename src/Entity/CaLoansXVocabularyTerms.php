<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaLoansXVocabularyTerms
 *
 * @ORM\Table(name="ca_loans_x_vocabulary_terms", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"loan_id", "item_id", "type_id", "sdatetime", "edatetime"})}, indexes={@ORM\Index(name="i_loan_id", columns={"loan_id"}), @ORM\Index(name="i_label_left_id", columns={"label_left_id"}), @ORM\Index(name="i_item_id", columns={"item_id"}), @ORM\Index(name="i_label_right_id", columns={"label_right_id"}), @ORM\Index(name="i_type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class CaLoansXVocabularyTerms
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
     * @var \CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="item_id")
     * })
     */
    private $item;

    /**
     * @var \CaLoanLabels
     *
     * @ORM\ManyToOne(targetEntity="CaLoanLabels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="label_left_id", referencedColumnName="label_id")
     * })
     */
    private $labelLeft;

    /**
     * @var \CaListItemLabels
     *
     * @ORM\ManyToOne(targetEntity="CaListItemLabels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="label_right_id", referencedColumnName="label_id")
     * })
     */
    private $labelRight;

    /**
     * @var \CaLoans
     *
     * @ORM\ManyToOne(targetEntity="CaLoans")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loan_id", referencedColumnName="loan_id")
     * })
     */
    private $loan;

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

    public function getItem(): ?CaListItems
    {
        return $this->item;
    }

    public function setItem(?CaListItems $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getLabelLeft(): ?CaLoanLabels
    {
        return $this->labelLeft;
    }

    public function setLabelLeft(?CaLoanLabels $labelLeft): self
    {
        $this->labelLeft = $labelLeft;

        return $this;
    }

    public function getLabelRight(): ?CaListItemLabels
    {
        return $this->labelRight;
    }

    public function setLabelRight(?CaListItemLabels $labelRight): self
    {
        $this->labelRight = $labelRight;

        return $this;
    }

    public function getLoan(): ?CaLoans
    {
        return $this->loan;
    }

    public function setLoan(?CaLoans $loan): self
    {
        $this->loan = $loan;

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
