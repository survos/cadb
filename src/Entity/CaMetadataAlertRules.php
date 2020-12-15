<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaMetadataAlertRules
 *
 * @ORM\Table(name="ca_metadata_alert_rules", indexes={@ORM\Index(name="i_table_num", columns={"table_num"})})
 * @ORM\Entity
 */
class CaMetadataAlertRules
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
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=0, nullable=false)
     */
    private $settings;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId = 'NULL';

    public function getRuleId(): ?int
    {
        return $this->ruleId;
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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }


}
