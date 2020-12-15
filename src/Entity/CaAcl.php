<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaAcl
 *
 * @ORM\Table(name="ca_acl", indexes={@ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_inherited_from_row_id", columns={"inherited_from_row_id"}), @ORM\Index(name="i_row_id", columns={"row_id", "table_num"}), @ORM\Index(name="i_group_id", columns={"group_id"}), @ORM\Index(name="i_inherited_from_table_num", columns={"inherited_from_table_num"})})
 * @ORM\Entity
 */
class CaAcl
{
    /**
     * @var int
     *
     * @ORM\Column(name="acl_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aclId;

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var int
     *
     * @ORM\Column(name="row_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rowId;

    /**
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $notes;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="inherited_from_table_num", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $inheritedFromTableNum = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="inherited_from_row_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $inheritedFromRowId = 'NULL';

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

    public function getAclId(): ?int
    {
        return $this->aclId;
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

    public function getRowId(): ?int
    {
        return $this->rowId;
    }

    public function setRowId(int $rowId): self
    {
        $this->rowId = $rowId;

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

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getInheritedFromTableNum(): ?bool
    {
        return $this->inheritedFromTableNum;
    }

    public function setInheritedFromTableNum(?bool $inheritedFromTableNum): self
    {
        $this->inheritedFromTableNum = $inheritedFromTableNum;

        return $this;
    }

    public function getInheritedFromRowId(): ?int
    {
        return $this->inheritedFromRowId;
    }

    public function setInheritedFromRowId(?int $inheritedFromRowId): self
    {
        $this->inheritedFromRowId = $inheritedFromRowId;

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
