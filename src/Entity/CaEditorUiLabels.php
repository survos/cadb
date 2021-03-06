<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaEditorUiLabels
 *
 * @ORM\Table(name="ca_editor_ui_labels", indexes={@ORM\Index(name="i_ui_id", columns={"ui_id"}), @ORM\Index(name="i_locale_id", columns={"locale_id"})})
 * @ORM\Entity
 */
class CaEditorUiLabels
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
     * @var int
     *
     * @ORM\Column(name="ui_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $uiId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="locale_id", type="smallint", nullable=false)
     */
    private $localeId;

    public function getLabelId(): ?int
    {
        return $this->labelId;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLocaleId(): ?int
    {
        return $this->localeId;
    }

    public function setLocaleId(int $localeId): self
    {
        $this->localeId = $localeId;

        return $this;
    }


}
