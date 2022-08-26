<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSearchForms
 *
 * @ORM\Table(name="ca_search_forms", uniqueConstraints={@ORM\UniqueConstraint(name="u_form_code", columns={"form_code"})}, indexes={@ORM\Index(name="i_table_num", columns={"table_num"}), @ORM\Index(name="i_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class CaSearchForms
{
    /**
     * @var int
     *
     * @ORM\Column(name="form_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $formId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_code", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $formCode = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_system", type="boolean", nullable=false)
     */
    private $isSystem;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", nullable=false)
     */
    private $settings;

    public function getFormId(): ?int
    {
        return $this->formId;
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

    public function getFormCode(): ?string
    {
        return $this->formCode;
    }

    public function setFormCode(?string $formCode): self
    {
        $this->formCode = $formCode;

        return $this;
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

    public function getIsSystem(): ?bool
    {
        return $this->isSystem;
    }

    public function setIsSystem(bool $isSystem): self
    {
        $this->isSystem = $isSystem;

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


}
