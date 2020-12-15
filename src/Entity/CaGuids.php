<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaGuids
 *
 * @ORM\Table(name="ca_guids", uniqueConstraints={@ORM\UniqueConstraint(name="u_guid", columns={"guid"})}, indexes={@ORM\Index(name="i_table_num_row_id", columns={"table_num", "row_id"})})
 * @ORM\Entity
 */
class CaGuids
{
    /**
     * @var int
     *
     * @ORM\Column(name="guid_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guidId;

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
     * @ORM\Column(name="guid", type="string", length=36, nullable=false)
     */
    private $guid;

    public function getGuidId(): ?int
    {
        return $this->guidId;
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

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): self
    {
        $this->guid = $guid;

        return $this;
    }


}
