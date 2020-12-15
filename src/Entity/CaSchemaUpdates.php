<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSchemaUpdates
 *
 * @ORM\Table(name="ca_schema_updates", uniqueConstraints={@ORM\UniqueConstraint(name="u_version_num", columns={"version_num"})})
 * @ORM\Entity
 */
class CaSchemaUpdates
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
     * @var int
     *
     * @ORM\Column(name="version_num", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $versionNum;

    /**
     * @var int
     *
     * @ORM\Column(name="datetime", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $datetime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVersionNum(): ?int
    {
        return $this->versionNum;
    }

    public function setVersionNum(int $versionNum): self
    {
        $this->versionNum = $versionNum;

        return $this;
    }

    public function getDatetime(): ?int
    {
        return $this->datetime;
    }

    public function setDatetime(int $datetime): self
    {
        $this->datetime = $datetime;

        return $this;
    }


}
