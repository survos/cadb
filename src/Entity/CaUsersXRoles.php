<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaUsersXRoles
 *
 * @ORM\Table(name="ca_users_x_roles", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"user_id", "role_id"})}, indexes={@ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_role_id", columns={"role_id"})})
 * @ORM\Entity
 */
class CaUsersXRoles
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
     * @var \CaUserRoles
     *
     * @ORM\ManyToOne(targetEntity="CaUserRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="role_id")
     * })
     */
    private $role;

    /**
     * @var \CaUsers
     *
     * @ORM\ManyToOne(targetEntity="CaUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

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

    public function getRole(): ?CaUserRoles
    {
        return $this->role;
    }

    public function setRole(?CaUserRoles $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getUser(): ?CaUsers
    {
        return $this->user;
    }

    public function setUser(?CaUsers $user): self
    {
        $this->user = $user;

        return $this;
    }


}
