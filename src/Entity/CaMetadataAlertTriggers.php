<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaMetadataAlertTriggers
 *
 * @ORM\Table(name="ca_metadata_alert_triggers", indexes={@ORM\Index(name="fk_alert_rules_rule_id", columns={"rule_id"}), @ORM\Index(name="fk_ca_metadata_alert_triggers_element_id", columns={"element_id"})})
 * @ORM\Entity
 */
class CaMetadataAlertTriggers
{
    /**
     * @var int
     *
     * @ORM\Column(name="trigger_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $triggerId;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=0, nullable=false)
     */
    private $settings;

    /**
     * @var string
     *
     * @ORM\Column(name="trigger_type", type="string", length=30, nullable=false)
     */
    private $triggerType;

    /**
     * @var string
     *
     * @ORM\Column(name="element_filters", type="text", nullable=false)
     */
    private $elementFilters;

    /**
     * @var \CaMetadataAlertRules
     *
     * @ORM\ManyToOne(targetEntity="CaMetadataAlertRules")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rule_id", referencedColumnName="rule_id")
     * })
     */
    private $rule;

    /**
     * @var \CaMetadataElements
     *
     * @ORM\ManyToOne(targetEntity="CaMetadataElements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="element_id", referencedColumnName="element_id")
     * })
     */
    private $element;

    public function getTriggerId(): ?int
    {
        return $this->triggerId;
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

    public function getTriggerType(): ?string
    {
        return $this->triggerType;
    }

    public function setTriggerType(string $triggerType): self
    {
        $this->triggerType = $triggerType;

        return $this;
    }

    public function getElementFilters(): ?string
    {
        return $this->elementFilters;
    }

    public function setElementFilters(string $elementFilters): self
    {
        $this->elementFilters = $elementFilters;

        return $this;
    }

    public function getRule(): ?CaMetadataAlertRules
    {
        return $this->rule;
    }

    public function setRule(?CaMetadataAlertRules $rule): self
    {
        $this->rule = $rule;

        return $this;
    }

    public function getElement(): ?CaMetadataElements
    {
        return $this->element;
    }

    public function setElement(?CaMetadataElements $element): self
    {
        $this->element = $element;

        return $this;
    }


}
