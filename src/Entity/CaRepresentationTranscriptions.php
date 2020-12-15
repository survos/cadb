<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaRepresentationTranscriptions
 *
 * @ORM\Table(name="ca_representation_transcriptions", uniqueConstraints={@ORM\UniqueConstraint(name="i_user_id", columns={"user_id", "representation_id"})}, indexes={@ORM\Index(name="i_created_on", columns={"created_on"}), @ORM\Index(name="i_validated_on", columns={"validated_on"}), @ORM\Index(name="i_completed_on", columns={"completed_on", "is_primary"}), @ORM\Index(name="i_ip_addr", columns={"ip_addr"}), @ORM\Index(name="i_representation_id", columns={"representation_id"})})
 * @ORM\Entity
 */
class CaRepresentationTranscriptions
{
    /**
     * @var int
     *
     * @ORM\Column(name="transcription_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $transcriptionId;

    /**
     * @var int
     *
     * @ORM\Column(name="representation_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $representationId;

    /**
     * @var string
     *
     * @ORM\Column(name="transcription", type="text", length=0, nullable=false)
     */
    private $transcription;

    /**
     * @var int
     *
     * @ORM\Column(name="created_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdOn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="completed_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $completedOn = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="validated_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $validatedOn = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_primary", type="boolean", nullable=false)
     */
    private $isPrimary = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_addr", type="string", length=39, nullable=false)
     */
    private $ipAddr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId = 'NULL';

    public function getTranscriptionId(): ?int
    {
        return $this->transcriptionId;
    }

    public function getRepresentationId(): ?int
    {
        return $this->representationId;
    }

    public function setRepresentationId(int $representationId): self
    {
        $this->representationId = $representationId;

        return $this;
    }

    public function getTranscription(): ?string
    {
        return $this->transcription;
    }

    public function setTranscription(string $transcription): self
    {
        $this->transcription = $transcription;

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

    public function getCompletedOn(): ?int
    {
        return $this->completedOn;
    }

    public function setCompletedOn(?int $completedOn): self
    {
        $this->completedOn = $completedOn;

        return $this;
    }

    public function getValidatedOn(): ?int
    {
        return $this->validatedOn;
    }

    public function setValidatedOn(?int $validatedOn): self
    {
        $this->validatedOn = $validatedOn;

        return $this;
    }

    public function getIsPrimary(): ?bool
    {
        return $this->isPrimary;
    }

    public function setIsPrimary(bool $isPrimary): self
    {
        $this->isPrimary = $isPrimary;

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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }


}
