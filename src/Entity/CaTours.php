<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaTours
 *
 * @ORM\Table(name="ca_tours", indexes={@ORM\Index(name="i_tour_code", columns={"tour_code"}), @ORM\Index(name="i_type_id", columns={"type_id"}), @ORM\Index(name="i_source_id", columns={"source_id"}), @ORM\Index(name="i_user_id", columns={"user_id"}), @ORM\Index(name="i_view_count", columns={"view_count"})})
 * @ORM\Entity
 */
class CaTours
{
    /**
     * @var int
     *
     * @ORM\Column(name="tour_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tourId;

    /**
     * @var string
     *
     * @ORM\Column(name="tour_code", type="string", length=100, nullable=false)
     */
    private $tourCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $typeId = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=6, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $color = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="blob", length=0, nullable=false)
     */
    private $icon;

    /**
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="view_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $viewCount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="source_info", type="text", length=0, nullable=false)
     */
    private $sourceInfo;

    /**
     * @var \CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="source_id", referencedColumnName="item_id")
     * })
     */
    private $source;

    /**
     * @var \CaUsers
     *
     * @ORM\ManyToOne(targetEntity="CaUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function getTourId(): ?int
    {
        return $this->tourId;
    }

    public function getTourCode(): ?string
    {
        return $this->tourCode;
    }

    public function setTourCode(string $tourCode): self
    {
        $this->tourCode = $tourCode;

        return $this;
    }

    public function getTypeId(): ?int
    {
        return $this->typeId;
    }

    public function setTypeId(?int $typeId): self
    {
        $this->typeId = $typeId;

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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getAccess(): ?bool
    {
        return $this->access;
    }

    public function setAccess(bool $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getViewCount(): ?int
    {
        return $this->viewCount;
    }

    public function setViewCount(int $viewCount): self
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    public function getSourceInfo(): ?string
    {
        return $this->sourceInfo;
    }

    public function setSourceInfo(string $sourceInfo): self
    {
        $this->sourceInfo = $sourceInfo;

        return $this;
    }

    public function getSource(): ?CaListItems
    {
        return $this->source;
    }

    public function setSource(?CaListItems $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getUser(): ?CaUsers
    {
        return $this->user;
    }

    public function setUser(?CaUsers $user): self
    {
        $this->user = $user;

        return $this;
    }


}
