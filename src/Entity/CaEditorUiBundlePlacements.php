<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaEditorUiBundlePlacements
 *
 * @ORM\Table(name="ca_editor_ui_bundle_placements", uniqueConstraints={@ORM\UniqueConstraint(name="u_bundle_name", columns={"bundle_name", "screen_id", "placement_code"})}, indexes={@ORM\Index(name="i_screen_id", columns={"screen_id"})})
 * @ORM\Entity
 */
class CaEditorUiBundlePlacements
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
     * @ORM\Column(name="screen_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $screenId;

    /**
     * @var string
     *
     * @ORM\Column(name="placement_code", type="string", length=255, nullable=false)
     */
    private $placementCode;

    /**
     * @var string
     *
     * @ORM\Column(name="bundle_name", type="string", length=255, nullable=false)
     */
    private $bundleName;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false, options={"unsigned"=true})
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

    public function getScreenId(): ?int
    {
        return $this->screenId;
    }

    public function setScreenId(int $screenId): self
    {
        $this->screenId = $screenId;

        return $this;
    }

    public function getPlacementCode(): ?string
    {
        return $this->placementCode;
    }

    public function setPlacementCode(string $placementCode): self
    {
        $this->placementCode = $placementCode;

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
