<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaListLabels
 *
 * @ORM\Table(name="ca_list_labels", uniqueConstraints={@ORM\UniqueConstraint(name="u_locale_id", columns={"list_id", "locale_id"})}, indexes={@ORM\Index(name="fk_ca_list_labels_locale_id", columns={"locale_id"}), @ORM\Index(name="i_list_id", columns={"list_id"}), @ORM\Index(name="i_name", columns={"name"})})
 * @ORM\Entity
 */
class CaListLabels
{
    /**
     * @var int
     *
     * @ORM\Column(name="label_id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $labelId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \CaLists
     *
     * @ORM\ManyToOne(targetEntity="CaLists")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="list_id", referencedColumnName="list_id")
     * })
     */
    private $list;

    /**
     * @var \CaLocales
     *
     * @ORM\ManyToOne(targetEntity="CaLocales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locale_id", referencedColumnName="locale_id")
     * })
     */
    private $locale;

    public function getLabelId(): ?int
    {
        return $this->labelId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getList(): ?CaLists
    {
        return $this->list;
    }

    public function setList(?CaLists $list): self
    {
        $this->list = $list;

        return $this;
    }

    public function getLocale(): ?CaLocales
    {
        return $this->locale;
    }

    public function setLocale(?CaLocales $locale): self
    {
        $this->locale = $locale;

        return $this;
    }


}
