<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaGroupsXRoles
 *
 * @ORM\Table(name="ca_groups_x_roles", indexes={@ORM\Index(name="u_all", columns={"group_id", "role_id"}), @ORM\Index(name="i_group_id", columns={"group_id"}), @ORM\Index(name="i_role_id", columns={"role_id"})})
 * @ORM\Entity
 */
class CaGroupsXRoles
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
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var \CaUserGroups
     *
     * @ORM\ManyToOne(targetEntity="CaUserGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="group_id")
     * })
     */
    private $group;

    /**
     * @var \CaUserRoles
     *
     * @ORM\ManyToOne(targetEntity="CaUserRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="role_id")
     * })
     */
    private $role;

    public function getRelationId(): ?int
    {
        return $this->relationId;
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

    public function getGroup(): ?CaUserGroups
    {
        return $this->group;
    }

    public function setGroup(?CaUserGroups $group): self
    {
        $this->group = $group;

        return $this;
    }

    public function getRole(): ?CaUserRoles
    {
        return $this->role;
    }

    public function setRole(?CaUserRoles $role): self
    {
        $this->role = $role;

        return $this;
    }


}
