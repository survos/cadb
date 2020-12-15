<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaItemsXTags
 *
 * @ORM\Table(name="ca_items_x_tags", indexes={@ORM\Index(name="i_tag_id", columns={"tag_id"}), @ORM\Index(name="i_created_on", columns={"created_on"}), @ORM\Index(name="i_row_id", columns={"row_id"}), @ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_moderated_on", columns={"moderated_on"}), @ORM\Index(name="i_table_num", columns={"table_num"}), @ORM\Index(name="i_access", columns={"access"}), @ORM\Index(name="i_rank", columns={"rank"})})
 * @ORM\Entity
 */
class CaItemsXTags
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
     * @var int
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tagId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_addr", type="string", length=39, nullable=true, options={"default"="NULL"})
     */
    private $ipAddr = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="created_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdOn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="moderated_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $moderatedOn = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="moderated_by_user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $moderatedByUserId = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    public function getRelationId(): ?int
    {
        return $this->relationId;
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

    public function getTagId(): ?int
    {
        return $this->tagId;
    }

    public function setTagId(int $tagId): self
    {
        $this->tagId = $tagId;

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

    public function getAccess(): ?bool
    {
        return $this->access;
    }

    public function setAccess(bool $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getIpAddr(): ?string
    {
        return $this->ipAddr;
    }

    public function setIpAddr(?string $ipAddr): self
    {
        $this->ipAddr = $ipAddr;

        return $this;
    }

    public function getCreatedOn(): ?int
    {
        return $this->createdOn;
    }

    public function setCreatedOn(int $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    public function getModeratedOn(): ?int
    {
        return $this->moderatedOn;
    }

    public function setModeratedOn(?int $moderatedOn): self
    {
        $this->moderatedOn = $moderatedOn;

        return $this;
    }

    public function getModeratedByUserId(): ?int
    {
        return $this->moderatedByUserId;
    }

    public function setModeratedByUserId(?int $moderatedByUserId): self
    {
        $this->moderatedByUserId = $moderatedByUserId;

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


}
