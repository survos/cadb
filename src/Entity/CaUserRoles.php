<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaUserRoles
 *
 * @ORM\Table(name="ca_user_roles", uniqueConstraints={@ORM\UniqueConstraint(name="u_name", columns={"name"}), @ORM\UniqueConstraint(name="u_code", columns={"code"})})
 * @ORM\Entity
 */
class CaUserRoles
{
    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleId;

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
     * @var int
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="vars", type="text", length=0, nullable=false)
     */
    private $vars;

    /**
     * @var string
     *
     * @ORM\Column(name="field_access", type="text", length=0, nullable=false)
     */
    private $fieldAccess;

    public function getRoleId(): ?int
    {
        return $this->roleId;
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

    public function getFieldAccess(): ?string
    {
        return $this->fieldAccess;
    }

    public function setFieldAccess(string $fieldAccess): self
    {
        $this->fieldAccess = $fieldAccess;

        return $this;
    }


}
