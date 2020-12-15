<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaLists
 *
 * @ORM\Table(name="ca_lists", uniqueConstraints={@ORM\UniqueConstraint(name="u_code", columns={"list_code"})})
 * @ORM\Entity
 */
class CaLists
{
    /**
     * @var int
     *
     * @ORM\Column(name="list_id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $listId;

    /**
     * @var string
     *
     * @ORM\Column(name="list_code", type="string", length=100, nullable=false)
     */
    private $listCode;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_system_list", type="boolean", nullable=false)
     */
    private $isSystemList = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_hierarchical", type="boolean", nullable=false)
     */
    private $isHierarchical = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="use_as_vocabulary", type="boolean", nullable=false)
     */
    private $useAsVocabulary = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="default_sort", type="boolean", nullable=false)
     */
    private $defaultSort = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    public function getListId(): ?int
    {
        return $this->listId;
    }

    public function getListCode(): ?string
    {
        return $this->listCode;
    }

    public function setListCode(string $listCode): self
    {
        $this->listCode = $listCode;

        return $this;
    }

    public function getIsSystemList(): ?bool
    {
        return $this->isSystemList;
    }

    public function setIsSystemList(bool $isSystemList): self
    {
        $this->isSystemList = $isSystemList;

        return $this;
    }

    public function getIsHierarchical(): ?bool
    {
        return $this->isHierarchical;
    }

    public function setIsHierarchical(bool $isHierarchical): self
    {
        $this->isHierarchical = $isHierarchical;

        return $this;
    }

    public function getUseAsVocabulary(): ?bool
    {
        return $this->useAsVocabulary;
    }

    public function setUseAsVocabulary(bool $useAsVocabulary): self
    {
        $this->useAsVocabulary = $useAsVocabulary;

        return $this;
    }

    public function getDefaultSort(): ?bool
    {
        return $this->defaultSort;
    }

    public function setDefaultSort(bool $defaultSort): self
    {
        $this->defaultSort = $defaultSort;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }


}
