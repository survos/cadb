<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaMultipartIdnoSequences
 *
 * @ORM\Table(name="ca_multipart_idno_sequences")
 * @ORM\Entity
 */
class CaMultipartIdnoSequences
{
    /**
     * @var string
     *
     * @ORM\Column(name="idno_stub", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idnoStub;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $format;

    /**
     * @var string
     *
     * @ORM\Column(name="element", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $element;

    /**
     * @var int
     *
     * @ORM\Column(name="seq", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $seq;

    public function getIdnoStub(): ?string
    {
        return $this->idnoStub;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function getElement(): ?string
    {
        return $this->element;
    }

    public function getSeq(): ?int
    {
        return $this->seq;
    }

    public function setSeq(int $seq): self
    {
        $this->seq = $seq;

        return $this;
    }


}
