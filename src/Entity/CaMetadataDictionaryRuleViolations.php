<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaMetadataDictionaryRuleViolations
 *
 * @ORM\Table(name="ca_metadata_dictionary_rule_violations", indexes={@ORM\Index(name="i_rule_id", columns={"rule_id"}), @ORM\Index(name="i_created_on", columns={"created_on"}), @ORM\Index(name="i_row_id", columns={"row_id", "table_num"}), @ORM\Index(name="i_last_checked_on", columns={"last_checked_on"})})
 * @ORM\Entity
 */
class CaMetadataDictionaryRuleViolations
{
    /**
     * @var int
     *
     * @ORM\Column(name="violation_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $violationId;

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var int
     *
     * @ORM\Column(name="row_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rowId;

    /**
     * @var int
     *
     * @ORM\Column(name="created_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdOn;

    /**
     * @var int
     *
     * @ORM\Column(name="last_checked_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastCheckedOn;

    /**
     * @var \CaMetadataDictionaryRules
     *
     * @ORM\ManyToOne(targetEntity="CaMetadataDictionaryRules")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rule_id", referencedColumnName="rule_id")
     * })
     */
    private $rule;

    public function getViolationId(): ?int
    {
        return $this->violationId;
    }

    public function getTableNum(): ?bool
    {
        return $this->tableNum;
    }

    public function setTableNum(bool $tableNum): self
    {
        $this->tableNum = $tableNum;

        return $this;
    }

    public function getRowId(): ?int
    {
        return $this->rowId;
    }

    public function setRowId(int $rowId): self
    {
        $this->rowId = $rowId;

        return $this;
    }

    public function getCreatedOn(): ?int
    {
        return $this->createdOn;
    }

    public function setCreatedOn(int $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    public function getLastCheckedOn(): ?int
    {
        return $this->lastCheckedOn;
    }

    public function setLastCheckedOn(int $lastCheckedOn): self
    {
        $this->lastCheckedOn = $lastCheckedOn;

        return $this;
    }

    public function getRule(): ?CaMetadataDictionaryRules
    {
        return $this->rule;
    }

    public function setRule(?CaMetadataDictionaryRules $rule): self
    {
        $this->rule = $rule;

        return $this;
    }


}
