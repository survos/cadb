<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaReplicationLog
 *
 * @ORM\Table(name="ca_replication_log", indexes={@ORM\Index(name="i_source_log", columns={"source_system_guid", "log_id"})})
 * @ORM\Entity
 */
class CaReplicationLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="entry_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entryId;

    /**
     * @var string
     *
     * @ORM\Column(name="source_system_guid", type="string", length=36, nullable=false)
     */
    private $sourceSystemGuid;

    /**
     * @var int
     *
     * @ORM\Column(name="log_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $logId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vars", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $vars = 'NULL';

    public function getEntryId(): ?int
    {
        return $this->entryId;
    }

    public function getSourceSystemGuid(): ?string
    {
        return $this->sourceSystemGuid;
    }

    public function setSourceSystemGuid(string $sourceSystemGuid): self
    {
        $this->sourceSystemGuid = $sourceSystemGuid;

        return $this;
    }

    public function getLogId(): ?int
    {
        return $this->logId;
    }

    public function setLogId(int $logId): self
    {
        $this->logId = $logId;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getVars(): ?string
    {
        return $this->vars;
    }

    public function setVars(?string $vars): self
    {
        $this->vars = $vars;

        return $this;
    }


}
