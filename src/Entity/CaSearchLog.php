<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSearchLog
 *
 * @ORM\Table(name="ca_search_log", indexes={@ORM\Index(name="i_form_id", columns={"form_id"}), @ORM\Index(name="i_log_datetime", columns={"log_datetime"}), @ORM\Index(name="i_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class CaSearchLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="search_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $searchId;

    /**
     * @var int
     *
     * @ORM\Column(name="log_datetime", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $logDatetime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var string
     *
     * @ORM\Column(name="search_expression", type="string", length=1024, nullable=false)
     */
    private $searchExpression;

    /**
     * @var int
     *
     * @ORM\Column(name="num_hits", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $numHits;

    /**
     * @var int|null
     *
     * @ORM\Column(name="form_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $formId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_addr", type="string", length=39, nullable=true, options={"default"="NULL"})
     */
    private $ipAddr = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text", length=65535, nullable=false)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="execution_time", type="decimal", precision=7, scale=3, nullable=false)
     */
    private $executionTime;

    /**
     * @var string
     *
     * @ORM\Column(name="search_source", type="string", length=40, nullable=false)
     */
    private $searchSource;

    public function getSearchId(): ?int
    {
        return $this->searchId;
    }

    public function getLogDatetime(): ?int
    {
        return $this->logDatetime;
    }

    public function setLogDatetime(int $logDatetime): self
    {
        $this->logDatetime = $logDatetime;

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

    public function getTableNum(): ?bool
    {
        return $this->tableNum;
    }

    public function setTableNum(bool $tableNum): self
    {
        $this->tableNum = $tableNum;

        return $this;
    }

    public function getSearchExpression(): ?string
    {
        return $this->searchExpression;
    }

    public function setSearchExpression(string $searchExpression): self
    {
        $this->searchExpression = $searchExpression;

        return $this;
    }

    public function getNumHits(): ?int
    {
        return $this->numHits;
    }

    public function setNumHits(int $numHits): self
    {
        $this->numHits = $numHits;

        return $this;
    }

    public function getFormId(): ?int
    {
        return $this->formId;
    }

    public function setFormId(?int $formId): self
    {
        $this->formId = $formId;

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

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(string $details): self
    {
        $this->details = $details;

        return $this;
    }

    public function getExecutionTime(): ?string
    {
        return $this->executionTime;
    }

    public function setExecutionTime(string $executionTime): self
    {
        $this->executionTime = $executionTime;

        return $this;
    }

    public function getSearchSource(): ?string
    {
        return $this->searchSource;
    }

    public function setSearchSource(string $searchSource): self
    {
        $this->searchSource = $searchSource;

        return $this;
    }


}
