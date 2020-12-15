<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaTourStopLabels
 *
 * @ORM\Table(name="ca_tour_stop_labels", uniqueConstraints={@ORM\UniqueConstraint(name="u_locale_id", columns={"stop_id", "locale_id"})}, indexes={@ORM\Index(name="fk_ca_tour_stop_labels_locale_id", columns={"locale_id"}), @ORM\Index(name="i_name_sort", columns={"name_sort"}), @ORM\Index(name="i_stop_id", columns={"stop_id"}), @ORM\Index(name="i_name", columns={"name"})})
 * @ORM\Entity
 */
class CaTourStopLabels
{
    /**
     * @var int
     *
     * @ORM\Column(name="label_id", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var string
     *
     * @ORM\Column(name="name_sort", type="string", length=255, nullable=false)
     */
    private $nameSort;

    /**
     * @var \CaLocales
     *
     * @ORM\ManyToOne(targetEntity="CaLocales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locale_id", referencedColumnName="locale_id")
     * })
     */
    private $locale;

    /**
     * @var \CaTourStops
     *
     * @ORM\ManyToOne(targetEntity="CaTourStops")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stop_id", referencedColumnName="stop_id")
     * })
     */
    private $stop;

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

    public function getNameSort(): ?string
    {
        return $this->nameSort;
    }

    public function setNameSort(string $nameSort): self
    {
        $this->nameSort = $nameSort;

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

    public function getStop(): ?CaTourStops
    {
        return $this->stop;
    }

    public function setStop(?CaTourStops $stop): self
    {
        $this->stop = $stop;

        return $this;
    }


}
