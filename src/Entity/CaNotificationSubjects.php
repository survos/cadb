<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaNotificationSubjects
 *
 * @ORM\Table(name="ca_notification_subjects", indexes={@ORM\Index(name="i_notification_id", columns={"notification_id"}), @ORM\Index(name="i_delivery_inbox", columns={"delivery_inbox"}), @ORM\Index(name="i_table_num_row_id", columns={"table_num", "row_id", "read_on"}), @ORM\Index(name="i_delivery_email", columns={"delivery_email", "delivery_email_sent_on"})})
 * @ORM\Entity
 */
class CaNotificationSubjects
{
    /**
     * @var int
     *
     * @ORM\Column(name="subject_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $subjectId;

    /**
     * @var int
     *
     * @ORM\Column(name="notification_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $notificationId;

    /**
     * @var bool
     *
     * @ORM\Column(name="was_read", type="boolean", nullable=false)
     */
    private $wasRead = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="table_num", type="boolean", nullable=false)
     */
    private $tableNum;

    /**
     * @var int
     *
     * @ORM\Column(name="row_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rowId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="read_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $readOn = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="delivery_email", type="boolean", nullable=false)
     */
    private $deliveryEmail = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="delivery_email_sent_on", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $deliveryEmailSentOn = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="delivery_inbox", type="boolean", nullable=false, options={"default"="1"})
     */
    private $deliveryInbox = true;

    public function getSubjectId(): ?int
    {
        return $this->subjectId;
    }

    public function getNotificationId(): ?int
    {
        return $this->notificationId;
    }

    public function setNotificationId(int $notificationId): self
    {
        $this->notificationId = $notificationId;

        return $this;
    }

    public function getWasRead(): ?bool
    {
        return $this->wasRead;
    }

    public function setWasRead(bool $wasRead): self
    {
        $this->wasRead = $wasRead;

        return $this;
    }

    public function getTableNum(): ?bool
    {
        return $this->tableNum;
    }

    public function setTableNum(bool $tableNum): self
    {
        $this->tableNum = $tableNum;

        return $this;
    }

    public function getRowId(): ?int
    {
        return $this->rowId;
    }

    public function setRowId(int $rowId): self
    {
        $this->rowId = $rowId;

        return $this;
    }

    public function getReadOn(): ?int
    {
        return $this->readOn;
    }

    public function setReadOn(?int $readOn): self
    {
        $this->readOn = $readOn;

        return $this;
    }

    public function getDeliveryEmail(): ?bool
    {
        return $this->deliveryEmail;
    }

    public function setDeliveryEmail(bool $deliveryEmail): self
    {
        $this->deliveryEmail = $deliveryEmail;

        return $this;
    }

    public function getDeliveryEmailSentOn(): ?int
    {
        return $this->deliveryEmailSentOn;
    }

    public function setDeliveryEmailSentOn(?int $deliveryEmailSentOn): self
    {
        $this->deliveryEmailSentOn = $deliveryEmailSentOn;

        return $this;
    }

    public function getDeliveryInbox(): ?bool
    {
        return $this->deliveryInbox;
    }

    public function setDeliveryInbox(bool $deliveryInbox): self
    {
        $this->deliveryInbox = $deliveryInbox;

        return $this;
    }


}
