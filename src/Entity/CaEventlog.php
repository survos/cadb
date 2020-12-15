<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaEventlog
 *
 * @ORM\Table(name="ca_eventlog", indexes={@ORM\Index(name="i_when", columns={"date_time"}), @ORM\Index(name="i_source", columns={"source"})})
 * @ORM\Entity
 */
class CaEventlog
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
     * @ORM\Column(name="date_time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=4, nullable=false, options={"fixed"=true})
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=false)
     */
    private $source;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

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


}
