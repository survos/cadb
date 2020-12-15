<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaUsersXGroups
 *
 * @ORM\Table(name="ca_users_x_groups", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"user_id", "group_id"})}, indexes={@ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class CaUsersXGroups
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
     * @var \CaUserGroups
     *
     * @ORM\ManyToOne(targetEntity="CaUserGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="group_id")
     * })
     */
    private $group;

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

    public function getGroup(): ?CaUserGroups
    {
        return $this->group;
    }

    public function setGroup(?CaUserGroups $group): self
    {
        $this->group = $group;

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
