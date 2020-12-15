<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaMovements
 *
 * @ORM\Table(name="ca_movements", indexes={@ORM\Index(name="i_locale_id", columns={"locale_id"}), @ORM\Index(name="i_view_count", columns={"view_count"}), @ORM\Index(name="i_submission_status_id", columns={"submission_status_id"}), @ORM\Index(name="i_type_id", columns={"type_id"}), @ORM\Index(name="idno", columns={"idno"}), @ORM\Index(name="i_movement_filter", columns={"movement_id", "deleted", "access"}), @ORM\Index(name="i_submission_user_id", columns={"submission_user_id"}), @ORM\Index(name="i_submission_via_form", columns={"submission_via_form"}), @ORM\Index(name="i_source_id", columns={"source_id"}), @ORM\Index(name="idno_sort", columns={"idno_sort"}), @ORM\Index(name="i_submission_group_id", columns={"submission_group_id"})})
 * @ORM\Entity
 */
class CaMovements
{
    /**
     * @var int
     *
     * @ORM\Column(name="movement_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $movementId;

    /**
     * @var string
     *
     * @ORM\Column(name="idno", type="string", length=255, nullable=false)
     */
    private $idno;

    /**
     * @var string
     *
     * @ORM\Column(name="idno_sort", type="string", length=255, nullable=false)
     */
    private $idnoSort;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_template", type="boolean", nullable=false)
     */
    private $isTemplate = '0';

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
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="submission_user_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $submissionUserId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="submission_group_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $submissionGroupId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="submission_status_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $submissionStatusId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="submission_via_form", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $submissionViaForm = 'NULL';

    /**
     * @var \CaLocales
     *
     * @ORM\ManyToOne(targetEntity="CaLocales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locale_id", referencedColumnName="locale_id")
     * })
     */
    private $locale;

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
     * @var \CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="item_id")
     * })
     */
    private $type;

    public function getMovementId(): ?int
    {
        return $this->movementId;
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

    public function getIdnoSort(): ?string
    {
        return $this->idnoSort;
    }

    public function setIdnoSort(string $idnoSort): self
    {
        $this->idnoSort = $idnoSort;

        return $this;
    }

    public function getIsTemplate(): ?bool
    {
        return $this->isTemplate;
    }

    public function setIsTemplate(bool $isTemplate): self
    {
        $this->isTemplate = $isTemplate;

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

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

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

    public function getSubmissionUserId(): ?int
    {
        return $this->submissionUserId;
    }

    public function setSubmissionUserId(?int $submissionUserId): self
    {
        $this->submissionUserId = $submissionUserId;

        return $this;
    }

    public function getSubmissionGroupId(): ?int
    {
        return $this->submissionGroupId;
    }

    public function setSubmissionGroupId(?int $submissionGroupId): self
    {
        $this->submissionGroupId = $submissionGroupId;

        return $this;
    }

    public function getSubmissionStatusId(): ?int
    {
        return $this->submissionStatusId;
    }

    public function setSubmissionStatusId(?int $submissionStatusId): self
    {
        $this->submissionStatusId = $submissionStatusId;

        return $this;
    }

    public function getSubmissionViaForm(): ?string
    {
        return $this->submissionViaForm;
    }

    public function setSubmissionViaForm(?string $submissionViaForm): self
    {
        $this->submissionViaForm = $submissionViaForm;

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

    public function getSource(): ?CaListItems
    {
        return $this->source;
    }

    public function setSource(?CaListItems $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getType(): ?CaListItems
    {
        return $this->type;
    }

    public function setType(?CaListItems $type): self
    {
        $this->type = $type;

        return $this;
    }


}
