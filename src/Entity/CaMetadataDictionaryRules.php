<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaMetadataDictionaryRules
 *
 * @ORM\Table(name="ca_metadata_dictionary_rules", uniqueConstraints={@ORM\UniqueConstraint(name="u_rule_code", columns={"entry_id", "rule_code"})}, indexes={@ORM\Index(name="i_entry_id", columns={"entry_id"}), @ORM\Index(name="i_rule_code", columns={"rule_level"})})
 * @ORM\Entity
 */
class CaMetadataDictionaryRules
{
    /**
     * @var int
     *
     * @ORM\Column(name="rule_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ruleId;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_code", type="string", length=100, nullable=false)
     */
    private $ruleCode;

    /**
     * @var string
     *
     * @ORM\Column(name="expression", type="text", length=65535, nullable=false)
     */
    private $expression;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_level", type="string", length=4, nullable=false, options={"fixed"=true})
     */
    private $ruleLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=0, nullable=false)
     */
    private $settings;

    /**
     * @var \CaMetadataDictionaryEntries
     *
     * @ORM\ManyToOne(targetEntity="CaMetadataDictionaryEntries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entry_id", referencedColumnName="entry_id")
     * })
     */
    private $entry;

    public function getRuleId(): ?int
    {
        return $this->ruleId;
    }

    public function getRuleCode(): ?string
    {
        return $this->ruleCode;
    }

    public function setRuleCode(string $ruleCode): self
    {
        $this->ruleCode = $ruleCode;

        return $this;
    }

    public function getExpression(): ?string
    {
        return $this->expression;
    }

    public function setExpression(string $expression): self
    {
        $this->expression = $expression;

        return $this;
    }

    public function getRuleLevel(): ?string
    {
        return $this->ruleLevel;
    }

    public function setRuleLevel(string $ruleLevel): self
    {
        $this->ruleLevel = $ruleLevel;

        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(string $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function getEntry(): ?CaMetadataDictionaryEntries
    {
        return $this->entry;
    }

    public function setEntry(?CaMetadataDictionaryEntries $entry): self
    {
        $this->entry = $entry;

        return $this;
    }


}
