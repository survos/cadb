<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaWatchList
 *
 * @ORM\Table(name="ca_watch_list", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"row_id", "table_num", "user_id"})}, indexes={@ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_row_id", columns={"row_id", "table_num"})})
 * @ORM\Entity
 */
class CaWatchList
{
    /**
     * @var int
     *
     * @ORM\Column(name="watch_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $watchId;

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
     * @var \CaUsers
     *
     * @ORM\ManyToOne(targetEntity="CaUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function getWatchId(): ?int
    {
        return $this->watchId;
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
