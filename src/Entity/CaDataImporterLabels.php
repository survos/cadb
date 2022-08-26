<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaDataImporterLabels
 *
 * @ORM\Table(name="ca_data_importer_labels", uniqueConstraints={@ORM\UniqueConstraint(name="u_all", columns={"importer_id", "locale_id", "name", "is_preferred"})}, indexes={@ORM\Index(name="i_locale_id", columns={"locale_id"}), @ORM\Index(name="i_name_sort", columns={"name_sort"}), @ORM\Index(name="i_importer_id", columns={"importer_id"})})
 * @ORM\Entity
 */
class CaDataImporterLabels
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
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="source_info", type="text", length=0, nullable=false)
     */
    private $sourceInfo;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_preferred", type="boolean", nullable=false)
     */
    private $isPreferred;

    /**
     * @var \CaDataImporters
     *
     * @ORM\ManyToOne(targetEntity="CaDataImporters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="importer_id", referencedColumnName="importer_id")
     * })
     */
    private $importer;

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

    public function getNameSort(): ?string
    {
        return $this->nameSort;
    }

    public function setNameSort(string $nameSort): self
    {
        $this->nameSort = $nameSort;

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

    public function getSourceInfo(): ?string
    {
        return $this->sourceInfo;
    }

    public function setSourceInfo(string $sourceInfo): self
    {
        $this->sourceInfo = $sourceInfo;

        return $this;
    }

    public function getIsPreferred(): ?bool
    {
        return $this->isPreferred;
    }

    public function setIsPreferred(bool $isPreferred): self
    {
        $this->isPreferred = $isPreferred;

        return $this;
    }

    public function getImporter(): ?CaDataImporters
    {
        return $this->importer;
    }

    public function setImporter(?CaDataImporters $importer): self
    {
        $this->importer = $importer;

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
