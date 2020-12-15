<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaIpBans
 *
 * @ORM\Table(name="ca_ip_bans", indexes={@ORM\Index(name="i_ip_addr", columns={"ip_addr"}), @ORM\Index(name="i_created_on", columns={"created_on"}), @ORM\Index(name="i_expires_on", columns={"expires_on"})})
 * @ORM\Entity
 */
class CaIpBans
{
    /**
     * @var int
     *
     * @ORM\Column(name="ban_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $banId;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=255, nullable=false)
     */
    private $reason;

    /**
     * @var int
     *
     * @ORM\Column(name="created_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdOn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="expires_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $expiresOn = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_addr", type="string", length=39, nullable=false)
     */
    private $ipAddr;

    public function getBanId(): ?int
    {
        return $this->banId;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->reason = $reason;

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

    public function getExpiresOn(): ?int
    {
        return $this->expiresOn;
    }

    public function setExpiresOn(?int $expiresOn): self
    {
        $this->expiresOn = $expiresOn;

        return $this;
    }

    public function getIpAddr(): ?string
    {
        return $this->ipAddr;
    }

    public function setIpAddr(string $ipAddr): self
    {
        $this->ipAddr = $ipAddr;

        return $this;
    }


}
