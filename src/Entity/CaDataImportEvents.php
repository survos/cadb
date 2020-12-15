<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaDataImportEvents
 *
 * @ORM\Table(name="ca_data_import_events", indexes={@ORM\Index(name="i_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class CaDataImportEvents
{
    /**
     * @var int
     *
     * @ORM\Column(name="event_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;

    /**
     * @var int
     *
     * @ORM\Column(name="occurred_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $occurredOn;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type_code", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $typeCode = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="text", length=65535, nullable=false)
     */
    private $source;

    /**
     * @var \CaUsers
     *
     * @ORM\ManyToOne(targetEntity="CaUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    public function getOccurredOn(): ?int
    {
        return $this->occurredOn;
    }

    public function setOccurredOn(int $occurredOn): self
    {
        $this->occurredOn = $occurredOn;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    public function setTypeCode(string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;

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
