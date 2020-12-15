<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaBundleDisplays
 *
 * @ORM\Table(name="ca_bundle_displays", uniqueConstraints={@ORM\UniqueConstraint(name="u_display_code", columns={"display_code"})}, indexes={@ORM\Index(name="i_table_num", columns={"table_num"}), @ORM\Index(name="i_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class CaBundleDisplays
{
    /**
     * @var int
     *
     * @ORM\Column(name="display_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $displayId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="display_code", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $displayCode = 'NULL';

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
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=65535, nullable=false)
     */
    private $settings;

    public function getDisplayId(): ?int
    {
        return $this->displayId;
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

    public function getDisplayCode(): ?string
    {
        return $this->displayCode;
    }

    public function setDisplayCode(?string $displayCode): self
    {
        $this->displayCode = $displayCode;

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

    public function getAccess(): ?bool
    {
        return $this->access;
    }

    public function setAccess(bool $access): self
    {
        $this->access = $access;

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
