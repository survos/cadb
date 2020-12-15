<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaTourLabels
 *
 * @ORM\Table(name="ca_tour_labels", uniqueConstraints={@ORM\UniqueConstraint(name="u_locale_id", columns={"tour_id", "locale_id"})}, indexes={@ORM\Index(name="fk_ca_tour_labels_locale_id", columns={"locale_id"}), @ORM\Index(name="i_name_sort", columns={"name_sort"}), @ORM\Index(name="i_tour_id", columns={"tour_id"}), @ORM\Index(name="i_name", columns={"name"})})
 * @ORM\Entity
 */
class CaTourLabels
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
     * @ORM\Column(name="name_sort", type="string", length=255, nullable=false)
     */
    private $nameSort;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

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
     * @var \CaTours
     *
     * @ORM\ManyToOne(targetEntity="CaTours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tour_id", referencedColumnName="tour_id")
     * })
     */
    private $tour;

    public function getLabelId(): ?int
    {
        return $this->labelId;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getTour(): ?CaTours
    {
        return $this->tour;
    }

    public function setTour(?CaTours $tour): self
    {
        $this->tour = $tour;

        return $this;
    }


}
