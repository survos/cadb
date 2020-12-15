<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaChangeLogSnapshots
 *
 * @ORM\Table(name="ca_change_log_snapshots", indexes={@ORM\Index(name="i_log_id", columns={"log_id"})})
 * @ORM\Entity
 */
class CaChangeLogSnapshots
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="snapshot", type="blob", length=0, nullable=false)
     */
    private $snapshot;

    /**
     * @var \CaChangeLog
     *
     * @ORM\ManyToOne(targetEntity="CaChangeLog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="log_id", referencedColumnName="log_id")
     * })
     */
    private $log;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSnapshot()
    {
        return $this->snapshot;
    }

    public function setSnapshot($snapshot): self
    {
        $this->snapshot = $snapshot;

        return $this;
    }

    public function getLog(): ?CaChangeLog
    {
        return $this->log;
    }

    public function setLog(?CaChangeLog $log): self
    {
        $this->log = $log;

        return $this;
    }


}
