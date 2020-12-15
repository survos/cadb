<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaEditorUiScreensXRoles
 *
 * @ORM\Table(name="ca_editor_ui_screens_x_roles", indexes={@ORM\Index(name="i_screen_id", columns={"screen_id"}), @ORM\Index(name="i_role_id", columns={"role_id"})})
 * @ORM\Entity
 */
class CaEditorUiScreensXRoles
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
     * @var int
     *
     * @ORM\Column(name="screen_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $screenId;

    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $roleId;

    /**
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    public function getRelationId(): ?int
    {
        return $this->relationId;
    }

    public function getScreenId(): ?int
    {
        return $this->screenId;
    }

    public function setScreenId(int $screenId): self
    {
        $this->screenId = $screenId;

        return $this;
    }

    public function getRoleId(): ?int
    {
        return $this->roleId;
    }

    public function setRoleId(int $roleId): self
    {
        $this->roleId = $roleId;

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


}
