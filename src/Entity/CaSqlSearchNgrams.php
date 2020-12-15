<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSqlSearchNgrams
 *
 * @ORM\Table(name="ca_sql_search_ngrams", indexes={@ORM\Index(name="i_ngram", columns={"ngram"}), @ORM\Index(name="i_word_id", columns={"word_id"})})
 * @ORM\Entity
 */
class CaSqlSearchNgrams
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
     * @ORM\Column(name="word_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $wordId;

    /**
     * @var string
     *
     * @ORM\Column(name="ngram", type="string", length=4, nullable=false, options={"fixed"=true})
     */
    private $ngram;

    /**
     * @var bool
     *
     * @ORM\Column(name="seq", type="boolean", nullable=false)
     */
    private $seq;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWordId(): ?int
    {
        return $this->wordId;
    }

    public function setWordId(int $wordId): self
    {
        $this->wordId = $wordId;

        return $this;
    }

    public function getNgram(): ?string
    {
        return $this->ngram;
    }

    public function setNgram(string $ngram): self
    {
        $this->ngram = $ngram;

        return $this;
    }

    public function getSeq(): ?bool
    {
        return $this->seq;
    }

    public function setSeq(bool $seq): self
    {
        $this->seq = $seq;

        return $this;
    }


}
