<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaUserGroups
 *
 * @ORM\Table(name="ca_user_groups", uniqueConstraints={@ORM\UniqueConstraint(name="u_name", columns={"name"}), @ORM\UniqueConstraint(name="u_code", columns={"code"})}, indexes={@ORM\Index(name="i_hier_left", columns={"hier_left"}), @ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_hier_right", columns={"hier_right"}), @ORM\Index(name="i_parent_id", columns={"parent_id"})})
 * @ORM\Entity
 */
class CaUserGroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="vars", type="text", nullable=false)
     */
    private $vars;

    /**
     * @var string
     *
     * @ORM\Column(name="hier_left", type="decimal", precision=30, scale=20, nullable=false)
     */
    private $hierLeft;

    /**
     * @var string
     *
     * @ORM\Column(name="hier_right", type="decimal", precision=30, scale=20, nullable=false)
     */
    private $hierRight;

    /**
     * @var bool
     *
     * @ORM\Column(name="for_public_use", type="boolean", nullable=false)
     */
    private $forPublicUse = '0';

    /**
     * @var \CaUserGroups
     *
     * @ORM\ManyToOne(targetEntity="CaUserGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="group_id")
     * })
     */
    private $parent;

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getVars(): ?string
    {
        return $this->vars;
    }

    public function setVars(string $vars): self
    {
        $this->vars = $vars;

        return $this;
    }

    public function getHierLeft(): ?string
    {
        return $this->hierLeft;
    }

    public function setHierLeft(string $hierLeft): self
    {
        $this->hierLeft = $hierLeft;

        return $this;
    }

    public function getHierRight(): ?string
    {
        return $this->hierRight;
    }

    public function setHierRight(string $hierRight): self
    {
        $this->hierRight = $hierRight;

        return $this;
    }

    public function getForPublicUse(): ?bool
    {
        return $this->forPublicUse;
    }

    public function setForPublicUse(bool $forPublicUse): self
    {
        $this->forPublicUse = $forPublicUse;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }


}
