<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaEditorUis
 *
 * @ORM\Table(name="ca_editor_uis", uniqueConstraints={@ORM\UniqueConstraint(name="u_code", columns={"editor_code"})}, indexes={@ORM\Index(name="i_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class CaEditorUis
{
    /**
     * @var int
     *
     * @ORM\Column(name="ui_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uiId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_system_ui", type="boolean", nullable=false)
     */
    private $isSystemUi;

    /**
     * @var bool
     *
     * @ORM\Column(name="editor_type", type="boolean", nullable=false)
     */
    private $editorType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="editor_code", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $editorCode = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=6, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $color = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="blob", length=0, nullable=false)
     */
    private $icon;

    public function getUiId(): ?int
    {
        return $this->uiId;
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

    public function getIsSystemUi(): ?bool
    {
        return $this->isSystemUi;
    }

    public function setIsSystemUi(bool $isSystemUi): self
    {
        $this->isSystemUi = $isSystemUi;

        return $this;
    }

    public function getEditorType(): ?bool
    {
        return $this->editorType;
    }

    public function setEditorType(bool $editorType): self
    {
        $this->editorType = $editorType;

        return $this;
    }

    public function getEditorCode(): ?string
    {
        return $this->editorCode;
    }

    public function setEditorCode(?string $editorCode): self
    {
        $this->editorCode = $editorCode;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon): self
    {
        $this->icon = $icon;

        return $this;
    }


}
