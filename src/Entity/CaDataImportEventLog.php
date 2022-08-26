<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaDataImportEventLog
 *
 * @ORM\Table(name="ca_data_import_event_log", indexes={@ORM\Index(name="i_event_id", columns={"event_id"}), @ORM\Index(name="i_item_id", columns={"item_id"})})
 * @ORM\Entity
 */
class CaDataImportEventLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="log_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logId;

    /**
     * @var string
     *
     * @ORM\Column(name="type_code", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $typeCode;

    /**
     * @var int
     *
     * @ORM\Column(name="date_time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=false)
     */
    private $source;

    /**
     * @var \CaDataImportEvents
     *
     * @ORM\ManyToOne(targetEntity="CaDataImportEvents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="event_id")
     * })
     */
    private $event;

    /**
     * @var \CaDataImportItems
     *
     * @ORM\ManyToOne(targetEntity="CaDataImportItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="item_id")
     * })
     */
    private $item;

    public function getLogId(): ?int
    {
        return $this->logId;
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

    public function getDateTime(): ?int
    {
        return $this->dateTime;
    }

    public function setDateTime(int $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

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

    public function getEvent(): ?CaDataImportEvents
    {
        return $this->event;
    }

    public function setEvent(?CaDataImportEvents $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getItem(): ?CaDataImportItems
    {
        return $this->item;
    }

    public function setItem(?CaDataImportItems $item): self
    {
        $this->item = $item;

        return $this;
    }


}
