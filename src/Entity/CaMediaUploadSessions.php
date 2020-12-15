<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaMediaUploadSessions
 *
 * @ORM\Table(name="ca_media_upload_sessions", uniqueConstraints={@ORM\UniqueConstraint(name="i_session_key", columns={"session_key"})}, indexes={@ORM\Index(name="i_created_on", columns={"created_on"}), @ORM\Index(name="i_cancelled", columns={"cancelled"}), @ORM\Index(name="i_completed_on", columns={"completed_on"}), @ORM\Index(name="i_error_code", columns={"error_code"}), @ORM\Index(name="i_session_id", columns={"session_id"}), @ORM\Index(name="i_last_activity_on", columns={"last_activity_on"})})
 * @ORM\Entity
 */
class CaMediaUploadSessions
{
    /**
     * @var int
     *
     * @ORM\Column(name="session_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="session_key", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $sessionKey;

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
     * @ORM\Column(name="last_activity_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $lastActivityOn = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="cancelled", type="boolean", nullable=false)
     */
    private $cancelled = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="num_files", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $numFiles;

    /**
     * @var int
     *
     * @ORM\Column(name="total_bytes", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $totalBytes = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="error_code", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $errorCode = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="progress", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $progress = 'NULL';

    public function getSessionId(): ?int
    {
        return $this->sessionId;
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

    public function getSessionKey(): ?string
    {
        return $this->sessionKey;
    }

    public function setSessionKey(string $sessionKey): self
    {
        $this->sessionKey = $sessionKey;

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

    public function getLastActivityOn(): ?int
    {
        return $this->lastActivityOn;
    }

    public function setLastActivityOn(?int $lastActivityOn): self
    {
        $this->lastActivityOn = $lastActivityOn;

        return $this;
    }

    public function getCancelled(): ?bool
    {
        return $this->cancelled;
    }

    public function setCancelled(bool $cancelled): self
    {
        $this->cancelled = $cancelled;

        return $this;
    }

    public function getNumFiles(): ?int
    {
        return $this->numFiles;
    }

    public function setNumFiles(int $numFiles): self
    {
        $this->numFiles = $numFiles;

        return $this;
    }

    public function getTotalBytes(): ?string
    {
        return $this->totalBytes;
    }

    public function setTotalBytes(string $totalBytes): self
    {
        $this->totalBytes = $totalBytes;

        return $this;
    }

    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    public function setErrorCode(int $errorCode): self
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getProgress(): ?string
    {
        return $this->progress;
    }

    public function setProgress(?string $progress): self
    {
        $this->progress = $progress;

        return $this;
    }


}
