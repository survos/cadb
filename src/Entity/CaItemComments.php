<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaItemComments
 *
 * @ORM\Table(name="ca_item_comments", indexes={@ORM\Index(name="i_email", columns={"email"}), @ORM\Index(name="i_access", columns={"access"}), @ORM\Index(name="i_row_id", columns={"row_id"}), @ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_moderated_on", columns={"moderated_on"}), @ORM\Index(name="i_table_num", columns={"table_num"}), @ORM\Index(name="i_created_on", columns={"created_on"})})
 * @ORM\Entity
 */
class CaItemComments
{
    /**
     * @var int
     *
     * @ORM\Column(name="comment_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;

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
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="locale_id", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $localeId;

    /**
     * @var string
     *
     * @ORM\Column(name="media1", type="blob", length=0, nullable=false)
     */
    private $media1;

    /**
     * @var string
     *
     * @ORM\Column(name="media2", type="blob", length=0, nullable=false)
     */
    private $media2;

    /**
     * @var string
     *
     * @ORM\Column(name="media3", type="blob", length=0, nullable=false)
     */
    private $media3;

    /**
     * @var string
     *
     * @ORM\Column(name="media4", type="blob", length=0, nullable=false)
     */
    private $media4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $comment = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="rating", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $rating = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $email = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $location = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="created_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdOn;

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

    public function getCommentId(): ?int
    {
        return $this->commentId;
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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getLocaleId(): ?int
    {
        return $this->localeId;
    }

    public function setLocaleId(int $localeId): self
    {
        $this->localeId = $localeId;

        return $this;
    }

    public function getMedia1()
    {
        return $this->media1;
    }

    public function setMedia1($media1): self
    {
        $this->media1 = $media1;

        return $this;
    }

    public function getMedia2()
    {
        return $this->media2;
    }

    public function setMedia2($media2): self
    {
        $this->media2 = $media2;

        return $this;
    }

    public function getMedia3()
    {
        return $this->media3;
    }

    public function setMedia3($media3): self
    {
        $this->media3 = $media3;

        return $this;
    }

    public function getMedia4()
    {
        return $this->media4;
    }

    public function setMedia4($media4): self
    {
        $this->media4 = $media4;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getRating(): ?bool
    {
        return $this->rating;
    }

    public function setRating(?bool $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

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


}
