<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSearchFormPlacements
 *
 * @ORM\Table(name="ca_search_form_placements", indexes={@ORM\Index(name="i_form_id", columns={"form_id"}), @ORM\Index(name="i_bundle_name", columns={"bundle_name"}), @ORM\Index(name="i_rank", columns={"rank"})})
 * @ORM\Entity
 */
class CaSearchFormPlacements
{
    /**
     * @var int
     *
     * @ORM\Column(name="placement_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $placementId;

    /**
     * @var int
     *
     * @ORM\Column(name="form_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $formId;

    /**
     * @var string
     *
     * @ORM\Column(name="bundle_name", type="string", length=255, nullable=false)
     */
    private $bundleName;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=0, nullable=false)
     */
    private $settings;

    public function getPlacementId(): ?int
    {
        return $this->placementId;
    }

    public function getFormId(): ?int
    {
        return $this->formId;
    }

    public function setFormId(int $formId): self
    {
        $this->formId = $formId;

        return $this;
    }

    public function getBundleName(): ?string
    {
        return $this->bundleName;
    }

    public function setBundleName(string $bundleName): self
    {
        $this->bundleName = $bundleName;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(string $settings): self
    {
        $this->settings = $settings;

        return $this;
    }


}
