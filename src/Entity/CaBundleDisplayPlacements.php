<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaBundleDisplayPlacements
 *
 * @ORM\Table(name="ca_bundle_display_placements", indexes={@ORM\Index(name="i_display_id", columns={"display_id"}), @ORM\Index(name="i_bundle_name", columns={"bundle_name"}), @ORM\Index(name="i_rank", columns={"rank"})})
 * @ORM\Entity
 */
class CaBundleDisplayPlacements
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
     * @ORM\Column(name="display_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $displayId;

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

    public function getDisplayId(): ?int
    {
        return $this->displayId;
    }

    public function setDisplayId(int $displayId): self
    {
        $this->displayId = $displayId;

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
