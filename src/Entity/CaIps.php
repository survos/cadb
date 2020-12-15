<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaIps
 *
 * @ORM\Table(name="ca_ips", uniqueConstraints={@ORM\UniqueConstraint(name="u_ip", columns={"ip1", "ip2", "ip3", "ip4s", "ip4e"})}, indexes={@ORM\Index(name="i_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class CaIps
{
    /**
     * @var int
     *
     * @ORM\Column(name="ip_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ipId;

    /**
     * @var bool
     *
     * @ORM\Column(name="ip1", type="boolean", nullable=false)
     */
    private $ip1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ip2", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $ip2 = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ip3", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $ip3 = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ip4s", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $ip4s = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ip4e", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $ip4e = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=false)
     */
    private $notes;

    /**
     * @var \CaUsers
     *
     * @ORM\ManyToOne(targetEntity="CaUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function getIpId(): ?int
    {
        return $this->ipId;
    }

    public function getIp1(): ?bool
    {
        return $this->ip1;
    }

    public function setIp1(bool $ip1): self
    {
        $this->ip1 = $ip1;

        return $this;
    }

    public function getIp2(): ?bool
    {
        return $this->ip2;
    }

    public function setIp2(?bool $ip2): self
    {
        $this->ip2 = $ip2;

        return $this;
    }

    public function getIp3(): ?bool
    {
        return $this->ip3;
    }

    public function setIp3(?bool $ip3): self
    {
        $this->ip3 = $ip3;

        return $this;
    }

    public function getIp4s(): ?bool
    {
        return $this->ip4s;
    }

    public function setIp4s(?bool $ip4s): self
    {
        $this->ip4s = $ip4s;

        return $this;
    }

    public function getIp4e(): ?bool
    {
        return $this->ip4e;
    }

    public function setIp4e(?bool $ip4e): self
    {
        $this->ip4e = $ip4e;

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
