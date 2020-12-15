<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSetsXUsers
 *
 * @ORM\Table(name="ca_sets_x_users", indexes={@ORM\Index(name="i_set_id", columns={"set_id"}), @ORM\Index(name="i_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class CaSetsXUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="relation_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $relationId;

    /**
     * @var int
     *
     * @ORM\Column(name="set_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $setId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sdatetime", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $sdatetime = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="edatetime", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $edatetime = 'NULL';

    public function getRelationId(): ?int
    {
        return $this->relationId;
    }

    public function getSetId(): ?int
    {
        return $this->setId;
    }

    public function setSetId(int $setId): self
    {
        $this->setId = $setId;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getAccess(): ?bool
    {
        return $this->access;
    }

    public function setAccess(bool $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getSdatetime(): ?int
    {
        return $this->sdatetime;
    }

    public function setSdatetime(?int $sdatetime): self
    {
        $this->sdatetime = $sdatetime;

        return $this;
    }

    public function getEdatetime(): ?int
    {
        return $this->edatetime;
    }

    public function setEdatetime(?int $edatetime): self
    {
        $this->edatetime = $edatetime;

        return $this;
    }


}
