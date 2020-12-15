<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaSearchFormsXUserGroups
 *
 * @ORM\Table(name="ca_search_forms_x_user_groups", indexes={@ORM\Index(name="i_form_id", columns={"form_id"}), @ORM\Index(name="i_group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class CaSearchFormsXUserGroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="relation_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $relationId;

    /**
     * @var int
     *
     * @ORM\Column(name="form_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $formId;

    /**
     * @var int
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $groupId;

    /**
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    public function getRelationId(): ?int
    {
        return $this->relationId;
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

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    public function setGroupId(int $groupId): self
    {
        $this->groupId = $groupId;

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


}
