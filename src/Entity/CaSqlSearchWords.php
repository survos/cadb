<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSqlSearchWords
 *
 * @ORM\Table(name="ca_sql_search_words", uniqueConstraints={@ORM\UniqueConstraint(name="u_word", columns={"word"})}, indexes={@ORM\Index(name="i_locale_id", columns={"locale_id"}), @ORM\Index(name="i_stem", columns={"stem"})})
 * @ORM\Entity
 */
class CaSqlSearchWords
{
    /**
     * @var int
     *
     * @ORM\Column(name="word_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wordId;

    /**
     * @var string
     *
     * @ORM\Column(name="word", type="string", length=255, nullable=false)
     */
    private $word;

    /**
     * @var string
     *
     * @ORM\Column(name="stem", type="string", length=255, nullable=false)
     */
    private $stem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="locale_id", type="smallint", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $localeId = 'NULL';

    public function getWordId(): ?int
    {
        return $this->wordId;
    }

    public function getWord(): ?string
    {
        return $this->word;
    }

    public function setWord(string $word): self
    {
        $this->word = $word;

        return $this;
    }

    public function getStem(): ?string
    {
        return $this->stem;
    }

    public function setStem(string $stem): self
    {
        $this->stem = $stem;

        return $this;
    }

    public function getLocaleId(): ?int
    {
        return $this->localeId;
    }

    public function setLocaleId(?int $localeId): self
    {
        $this->localeId = $localeId;

        return $this;
    }


}
