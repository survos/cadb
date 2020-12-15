<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaEditorUiScreens
 *
 * @ORM\Table(name="ca_editor_ui_screens", indexes={@ORM\Index(name="i_hier_left", columns={"hier_left"}), @ORM\Index(name="i_ui_id", columns={"ui_id"}), @ORM\Index(name="i_hier_right", columns={"hier_right"}), @ORM\Index(name="i_parent_id", columns={"parent_id"})})
 * @ORM\Entity
 */
class CaEditorUiScreens
{
    /**
     * @var int
     *
     * @ORM\Column(name="screen_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $screenId;

    /**
     * @var int
     *
     * @ORM\Column(name="ui_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $uiId;

    /**
     * @var string
     *
     * @ORM\Column(name="idno", type="string", length=255, nullable=false)
     */
    private $idno;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault;

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
     * @var string
     *
     * @ORM\Column(name="hier_left", type="decimal", precision=30, scale=20, nullable=false)
     */
    private $hierLeft;

    /**
     * @var string
     *
     * @ORM\Column(name="hier_right", type="decimal", precision=30, scale=20, nullable=false)
     */
    private $hierRight;

    /**
     * @var \CaEditorUiScreens
     *
     * @ORM\ManyToOne(targetEntity="CaEditorUiScreens")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="screen_id")
     * })
     */
    private $parent;

    public function getScreenId(): ?int
    {
        return $this->screenId;
    }

    public function getUiId(): ?int
    {
        return $this->uiId;
    }

    public function setUiId(int $uiId): self
    {
        $this->uiId = $uiId;

        return $this;
    }

    public function getIdno(): ?string
    {
        return $this->idno;
    }

    public function setIdno(string $idno): self
    {
        $this->idno = $idno;

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

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): self
    {
        $this->isDefault = $isDefault;

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

    public function getHierLeft(): ?string
    {
        return $this->hierLeft;
    }

    public function setHierLeft(string $hierLeft): self
    {
        $this->hierLeft = $hierLeft;

        return $this;
    }

    public function getHierRight(): ?string
    {
        return $this->hierRight;
    }

    public function setHierRight(string $hierRight): self
    {
        $this->hierRight = $hierRight;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }


}
