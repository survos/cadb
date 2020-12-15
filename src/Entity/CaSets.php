<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSets
 *
 * @ORM\Table(name="ca_sets", uniqueConstraints={@ORM\UniqueConstraint(name="u_set_code", columns={"set_code"})}, indexes={@ORM\Index(name="i_type_id", columns={"type_id"}), @ORM\Index(name="i_parent_id", columns={"parent_id"}), @ORM\Index(name="i_set_filter", columns={"set_id", "deleted", "access"}), @ORM\Index(name="i_hier_left", columns={"hier_left"}), @ORM\Index(name="i_hier_set_id", columns={"hier_set_id"}), @ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_hier_right", columns={"hier_right"}), @ORM\Index(name="i_table_num", columns={"table_num"})})
 * @ORM\Entity
 */
class CaSets
{
    /**
     * @var int
     *
     * @ORM\Column(name="set_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $setId;

    /**
     * @var int
     *
     * @ORM\Column(name="hier_set_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $hierSetId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="type_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $typeId;

    /**
     * @var bool
     *
     * @ORM\Column(name="commenting_status", type="boolean", nullable=false)
     */
    private $commentingStatus = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="tagging_status", type="boolean", nullable=false)
     */
    private $taggingStatus = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="rating_status", type="boolean", nullable=false)
     */
    private $ratingStatus = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="set_code", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $setCode = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

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
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var \CaSets
     *
     * @ORM\ManyToOne(targetEntity="CaSets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="set_id")
     * })
     */
    private $parent;

    public function getSetId(): ?int
    {
        return $this->setId;
    }

    public function getHierSetId(): ?int
    {
        return $this->hierSetId;
    }

    public function setHierSetId(int $hierSetId): self
    {
        $this->hierSetId = $hierSetId;

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

    public function getTypeId(): ?int
    {
        return $this->typeId;
    }

    public function setTypeId(int $typeId): self
    {
        $this->typeId = $typeId;

        return $this;
    }

    public function getCommentingStatus(): ?bool
    {
        return $this->commentingStatus;
    }

    public function setCommentingStatus(bool $commentingStatus): self
    {
        $this->commentingStatus = $commentingStatus;

        return $this;
    }

    public function getTaggingStatus(): ?bool
    {
        return $this->taggingStatus;
    }

    public function setTaggingStatus(bool $taggingStatus): self
    {
        $this->taggingStatus = $taggingStatus;

        return $this;
    }

    public function getRatingStatus(): ?bool
    {
        return $this->ratingStatus;
    }

    public function setRatingStatus(bool $ratingStatus): self
    {
        $this->ratingStatus = $ratingStatus;

        return $this;
    }

    public function getSetCode(): ?string
    {
        return $this->setCode;
    }

    public function setSetCode(?string $setCode): self
    {
        $this->setCode = $setCode;

        return $this;
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

    public function getAccess(): ?bool
    {
        return $this->access;
    }

    public function setAccess(bool $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

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

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

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
