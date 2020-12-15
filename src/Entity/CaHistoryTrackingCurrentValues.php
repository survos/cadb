<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaHistoryTrackingCurrentValues
 *
 * @ORM\Table(name="ca_history_tracking_current_values", indexes={@ORM\Index(name="i_current", columns={"current_row_id", "current_table_num", "current_type_id"}), @ORM\Index(name="i_tracked", columns={"tracked_row_id", "tracked_table_num", "tracked_type_id"}), @ORM\Index(name="i_is_future", columns={"is_future"}), @ORM\Index(name="i_policy", columns={"policy"}), @ORM\Index(name="u_all", columns={"row_id", "table_num", "policy", "type_id", "is_future"}), @ORM\Index(name="i_row_id", columns={"row_id"})})
 * @ORM\Entity
 */
class CaHistoryTrackingCurrentValues
{
    /**
     * @var int
     *
     * @ORM\Column(name="tracking_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trackingId;

    /**
     * @var string
     *
     * @ORM\Column(name="policy", type="string", length=50, nullable=false)
     */
    private $policy;

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $typeId = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="row_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rowId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="current_table_num", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $currentTableNum = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="current_type_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $currentTypeId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="current_row_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $currentRowId = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tracked_table_num", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $trackedTableNum = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="tracked_type_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $trackedTypeId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="tracked_row_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $trackedRowId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_future", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $isFuture = 'NULL';

    public function getTrackingId(): ?int
    {
        return $this->trackingId;
    }

    public function getPolicy(): ?string
    {
        return $this->policy;
    }

    public function setPolicy(string $policy): self
    {
        $this->policy = $policy;

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

    public function getTypeId(): ?int
    {
        return $this->typeId;
    }

    public function setTypeId(?int $typeId): self
    {
        $this->typeId = $typeId;

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

    public function getCurrentTableNum(): ?bool
    {
        return $this->currentTableNum;
    }

    public function setCurrentTableNum(?bool $currentTableNum): self
    {
        $this->currentTableNum = $currentTableNum;

        return $this;
    }

    public function getCurrentTypeId(): ?int
    {
        return $this->currentTypeId;
    }

    public function setCurrentTypeId(?int $currentTypeId): self
    {
        $this->currentTypeId = $currentTypeId;

        return $this;
    }

    public function getCurrentRowId(): ?int
    {
        return $this->currentRowId;
    }

    public function setCurrentRowId(?int $currentRowId): self
    {
        $this->currentRowId = $currentRowId;

        return $this;
    }

    public function getTrackedTableNum(): ?bool
    {
        return $this->trackedTableNum;
    }

    public function setTrackedTableNum(?bool $trackedTableNum): self
    {
        $this->trackedTableNum = $trackedTableNum;

        return $this;
    }

    public function getTrackedTypeId(): ?int
    {
        return $this->trackedTypeId;
    }

    public function setTrackedTypeId(?int $trackedTypeId): self
    {
        $this->trackedTypeId = $trackedTypeId;

        return $this;
    }

    public function getTrackedRowId(): ?int
    {
        return $this->trackedRowId;
    }

    public function setTrackedRowId(?int $trackedRowId): self
    {
        $this->trackedRowId = $trackedRowId;

        return $this;
    }

    public function getIsFuture(): ?int
    {
        return $this->isFuture;
    }

    public function setIsFuture(?int $isFuture): self
    {
        $this->isFuture = $isFuture;

        return $this;
    }


}
