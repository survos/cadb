<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaBookmarks
 *
 * @ORM\Table(name="ca_bookmarks", indexes={@ORM\Index(name="i_row_id", columns={"row_id"}), @ORM\Index(name="i_folder_id", columns={"folder_id"})})
 * @ORM\Entity
 */
class CaBookmarks
{
    /**
     * @var int
     *
     * @ORM\Column(name="bookmark_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bookmarkId;

    /**
     * @var int
     *
     * @ORM\Column(name="folder_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $folderId;

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
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=false)
     */
    private $notes;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="created_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdOn;

    public function getBookmarkId(): ?int
    {
        return $this->bookmarkId;
    }

    public function getFolderId(): ?int
    {
        return $this->folderId;
    }

    public function setFolderId(int $folderId): self
    {
        $this->folderId = $folderId;

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

    public function getRowId(): ?int
    {
        return $this->rowId;
    }

    public function setRowId(int $rowId): self
    {
        $this->rowId = $rowId;

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

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

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


}
