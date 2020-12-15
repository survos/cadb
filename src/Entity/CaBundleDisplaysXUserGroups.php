<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaBundleDisplaysXUserGroups
 *
 * @ORM\Table(name="ca_bundle_displays_x_user_groups", indexes={@ORM\Index(name="i_display_id", columns={"display_id"}), @ORM\Index(name="i_group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class CaBundleDisplaysXUserGroups
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
     * @ORM\Column(name="display_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayId;

    /**
     * @var int
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $groupId;

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

    public function getDisplayId(): ?int
    {
        return $this->displayId;
    }

    public function setDisplayId(int $displayId): self
    {
        $this->displayId = $displayId;

        return $this;
    }

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    public function setGroupId(int $groupId): self
    {
        $this->groupId = $groupId;

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
