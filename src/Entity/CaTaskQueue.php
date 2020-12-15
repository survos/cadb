<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaTaskQueue
 *
 * @ORM\Table(name="ca_task_queue", indexes={@ORM\Index(name="i_completed_on", columns={"completed_on"}), @ORM\Index(name="i_error_code", columns={"error_code"}), @ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_entity_key", columns={"entity_key"}), @ORM\Index(name="i_started_on", columns={"started_on"}), @ORM\Index(name="i_row_key", columns={"row_key"})})
 * @ORM\Entity
 */
class CaTaskQueue
{
    /**
     * @var int
     *
     * @ORM\Column(name="task_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taskId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="row_key", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $rowKey = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="entity_key", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $entityKey = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="created_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdOn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="started_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $startedOn = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="completed_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $completedOn = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $priority = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="handler", type="string", length=20, nullable=false)
     */
    private $handler;

    /**
     * @var string
     *
     * @ORM\Column(name="parameters", type="text", length=65535, nullable=false)
     */
    private $parameters;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=false)
     */
    private $notes;

    /**
     * @var int
     *
     * @ORM\Column(name="error_code", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $errorCode = '0';

    public function getTaskId(): ?int
    {
        return $this->taskId;
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

    public function getRowKey(): ?string
    {
        return $this->rowKey;
    }

    public function setRowKey(?string $rowKey): self
    {
        $this->rowKey = $rowKey;

        return $this;
    }

    public function getEntityKey(): ?string
    {
        return $this->entityKey;
    }

    public function setEntityKey(?string $entityKey): self
    {
        $this->entityKey = $entityKey;

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

    public function getStartedOn(): ?int
    {
        return $this->startedOn;
    }

    public function setStartedOn(?int $startedOn): self
    {
        $this->startedOn = $startedOn;

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

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getHandler(): ?string
    {
        return $this->handler;
    }

    public function setHandler(string $handler): self
    {
        $this->handler = $handler;

        return $this;
    }

    public function getParameters(): ?string
    {
        return $this->parameters;
    }

    public function setParameters(string $parameters): self
    {
        $this->parameters = $parameters;

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

    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    public function setErrorCode(int $errorCode): self
    {
        $this->errorCode = $errorCode;

        return $this;
    }


}
