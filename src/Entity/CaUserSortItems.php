<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaUserSortItems
 *
 * @ORM\Table(name="ca_user_sort_items", indexes={@ORM\Index(name="fk_ca_user_sort_items_sort_id", columns={"sort_id"})})
 * @ORM\Entity
 */
class CaUserSortItems
{
    /**
     * @var int
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemId;

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
     * @var \CaUserSorts
     *
     * @ORM\ManyToOne(targetEntity="CaUserSorts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sort_id", referencedColumnName="sort_id")
     * })
     */
    private $sort;

    public function getItemId(): ?int
    {
        return $this->itemId;
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

    public function getSort(): ?CaUserSorts
    {
        return $this->sort;
    }

    public function setSort(?CaUserSorts $sort): self
    {
        $this->sort = $sort;

        return $this;
    }


}
