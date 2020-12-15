<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaNotifications
 *
 * @ORM\Table(name="ca_notifications", indexes={@ORM\Index(name="i_notification_key", columns={"notification_key"}), @ORM\Index(name="i_datetime", columns={"datetime"}), @ORM\Index(name="i_notification_type", columns={"notification_type"})})
 * @ORM\Entity
 */
class CaNotifications
{
    /**
     * @var int
     *
     * @ORM\Column(name="notification_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notificationId;

    /**
     * @var bool
     *
     * @ORM\Column(name="notification_type", type="boolean", nullable=false)
     */
    private $notificationType = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="datetime", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $datetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $message = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_system", type="boolean", nullable=false)
     */
    private $isSystem = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="notification_key", type="string", length=32, nullable=false, options={"default"="''","fixed"=true})
     */
    private $notificationKey = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="extra_data", type="text", length=0, nullable=false)
     */
    private $extraData;

    public function getNotificationId(): ?int
    {
        return $this->notificationId;
    }

    public function getNotificationType(): ?bool
    {
        return $this->notificationType;
    }

    public function setNotificationType(bool $notificationType): self
    {
        $this->notificationType = $notificationType;

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

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getIsSystem(): ?bool
    {
        return $this->isSystem;
    }

    public function setIsSystem(bool $isSystem): self
    {
        $this->isSystem = $isSystem;

        return $this;
    }

    public function getNotificationKey(): ?string
    {
        return $this->notificationKey;
    }

    public function setNotificationKey(string $notificationKey): self
    {
        $this->notificationKey = $notificationKey;

        return $this;
    }

    public function getExtraData(): ?string
    {
        return $this->extraData;
    }

    public function setExtraData(string $extraData): self
    {
        $this->extraData = $extraData;

        return $this;
    }


}
