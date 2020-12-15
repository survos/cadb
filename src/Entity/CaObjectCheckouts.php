<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaObjectCheckouts
 *
 * @ORM\Table(name="ca_object_checkouts", indexes={@ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_due_date", columns={"due_date"}), @ORM\Index(name="i_last_reservation_available_email", columns={"last_reservation_available_email"}), @ORM\Index(name="i_group_uuid", columns={"group_uuid"}), @ORM\Index(name="i_created_on", columns={"created_on"}), @ORM\Index(name="i_return_date", columns={"return_date"}), @ORM\Index(name="i_object_id", columns={"object_id"}), @ORM\Index(name="i_checkout_date", columns={"checkout_date"}), @ORM\Index(name="i_last_sent_coming_due_email", columns={"last_sent_coming_due_email"})})
 * @ORM\Entity
 */
class CaObjectCheckouts
{
    /**
     * @var int
     *
     * @ORM\Column(name="checkout_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $checkoutId;

    /**
     * @var string
     *
     * @ORM\Column(name="group_uuid", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $groupUuid;

    /**
     * @var int
     *
     * @ORM\Column(name="created_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdOn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="checkout_date", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $checkoutDate = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="due_date", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $dueDate = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="return_date", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $returnDate = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="checkout_notes", type="text", length=65535, nullable=false)
     */
    private $checkoutNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="return_notes", type="text", length=65535, nullable=false)
     */
    private $returnNotes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_sent_coming_due_email", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $lastSentComingDueEmail = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_sent_overdue_email", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $lastSentOverdueEmail = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_reservation_available_email", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $lastReservationAvailableEmail = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var \CaObjects
     *
     * @ORM\ManyToOne(targetEntity="CaObjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_id", referencedColumnName="object_id")
     * })
     */
    private $object;

    /**
     * @var \CaUsers
     *
     * @ORM\ManyToOne(targetEntity="CaUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function getCheckoutId(): ?int
    {
        return $this->checkoutId;
    }

    public function getGroupUuid(): ?string
    {
        return $this->groupUuid;
    }

    public function setGroupUuid(string $groupUuid): self
    {
        $this->groupUuid = $groupUuid;

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

    public function getCheckoutDate(): ?int
    {
        return $this->checkoutDate;
    }

    public function setCheckoutDate(?int $checkoutDate): self
    {
        $this->checkoutDate = $checkoutDate;

        return $this;
    }

    public function getDueDate(): ?int
    {
        return $this->dueDate;
    }

    public function setDueDate(?int $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    public function getReturnDate(): ?int
    {
        return $this->returnDate;
    }

    public function setReturnDate(?int $returnDate): self
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    public function getCheckoutNotes(): ?string
    {
        return $this->checkoutNotes;
    }

    public function setCheckoutNotes(string $checkoutNotes): self
    {
        $this->checkoutNotes = $checkoutNotes;

        return $this;
    }

    public function getReturnNotes(): ?string
    {
        return $this->returnNotes;
    }

    public function setReturnNotes(string $returnNotes): self
    {
        $this->returnNotes = $returnNotes;

        return $this;
    }

    public function getLastSentComingDueEmail(): ?int
    {
        return $this->lastSentComingDueEmail;
    }

    public function setLastSentComingDueEmail(?int $lastSentComingDueEmail): self
    {
        $this->lastSentComingDueEmail = $lastSentComingDueEmail;

        return $this;
    }

    public function getLastSentOverdueEmail(): ?int
    {
        return $this->lastSentOverdueEmail;
    }

    public function setLastSentOverdueEmail(?int $lastSentOverdueEmail): self
    {
        $this->lastSentOverdueEmail = $lastSentOverdueEmail;

        return $this;
    }

    public function getLastReservationAvailableEmail(): ?int
    {
        return $this->lastReservationAvailableEmail;
    }

    public function setLastReservationAvailableEmail(?int $lastReservationAvailableEmail): self
    {
        $this->lastReservationAvailableEmail = $lastReservationAvailableEmail;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getObject(): ?CaObjects
    {
        return $this->object;
    }

    public function setObject(?CaObjects $object): self
    {
        $this->object = $object;

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
