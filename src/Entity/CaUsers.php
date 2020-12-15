<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaUsers
 *
 * @ORM\Table(name="ca_users", uniqueConstraints={@ORM\UniqueConstraint(name="u_user_name", columns={"user_name"}), @ORM\UniqueConstraint(name="u_confirmation_key", columns={"confirmation_key"})}, indexes={@ORM\Index(name="i_userclass", columns={"userclass"}), @ORM\Index(name="i_entity_id", columns={"entity_id"})})
 * @ORM\Entity
 */
class CaUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=255, nullable=false)
     */
    private $userName;

    /**
     * @var bool
     *
     * @ORM\Column(name="userclass", type="boolean", nullable=false)
     */
    private $userclass;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="fname", type="string", length=255, nullable=false)
     */
    private $fname;

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=255, nullable=false)
     */
    private $lname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="sms_number", type="string", length=30, nullable=false)
     */
    private $smsNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="vars", type="text", length=0, nullable=false)
     */
    private $vars;

    /**
     * @var string
     *
     * @ORM\Column(name="volatile_vars", type="text", length=65535, nullable=false)
     */
    private $volatileVars;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var int|null
     *
     * @ORM\Column(name="confirmed_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $confirmedOn = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="confirmation_key", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $confirmationKey = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="registered_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $registeredOn = 'NULL';

    /**
     * @var \CaEntities
     *
     * @ORM\ManyToOne(targetEntity="CaEntities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entity_id", referencedColumnName="entity_id")
     * })
     */
    private $entity;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getUserclass(): ?bool
    {
        return $this->userclass;
    }

    public function setUserclass(bool $userclass): self
    {
        $this->userclass = $userclass;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getFname(): ?string
    {
        return $this->fname;
    }

    public function setFname(string $fname): self
    {
        $this->fname = $fname;

        return $this;
    }

    public function getLname(): ?string
    {
        return $this->lname;
    }

    public function setLname(string $lname): self
    {
        $this->lname = $lname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSmsNumber(): ?string
    {
        return $this->smsNumber;
    }

    public function setSmsNumber(string $smsNumber): self
    {
        $this->smsNumber = $smsNumber;

        return $this;
    }

    public function getVars(): ?string
    {
        return $this->vars;
    }

    public function setVars(string $vars): self
    {
        $this->vars = $vars;

        return $this;
    }

    public function getVolatileVars(): ?string
    {
        return $this->volatileVars;
    }

    public function setVolatileVars(string $volatileVars): self
    {
        $this->volatileVars = $volatileVars;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getConfirmedOn(): ?int
    {
        return $this->confirmedOn;
    }

    public function setConfirmedOn(?int $confirmedOn): self
    {
        $this->confirmedOn = $confirmedOn;

        return $this;
    }

    public function getConfirmationKey(): ?string
    {
        return $this->confirmationKey;
    }

    public function setConfirmationKey(?string $confirmationKey): self
    {
        $this->confirmationKey = $confirmationKey;

        return $this;
    }

    public function getRegisteredOn(): ?int
    {
        return $this->registeredOn;
    }

    public function setRegisteredOn(?int $registeredOn): self
    {
        $this->registeredOn = $registeredOn;

        return $this;
    }

    public function getEntity(): ?CaEntities
    {
        return $this->entity;
    }

    public function setEntity(?CaEntities $entity): self
    {
        $this->entity = $entity;

        return $this;
    }


}
