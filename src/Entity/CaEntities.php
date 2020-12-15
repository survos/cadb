<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaEntities
 *
 * @ORM\Table(name="ca_entities", indexes={@ORM\Index(name="i_idno", columns={"idno"}), @ORM\Index(name="i_locale_id", columns={"locale_id"}), @ORM\Index(name="i_hier_right", columns={"hier_right"}), @ORM\Index(name="i_view_count", columns={"view_count"}), @ORM\Index(name="i_submission_status_id", columns={"submission_status_id"}), @ORM\Index(name="i_source_id", columns={"source_id"}), @ORM\Index(name="i_idno_sort", columns={"idno_sort"}), @ORM\Index(name="i_parent_id", columns={"parent_id"}), @ORM\Index(name="i_life_sdatetime", columns={"life_sdatetime"}), @ORM\Index(name="i_entity_filter", columns={"entity_id", "deleted", "access"}), @ORM\Index(name="i_submission_user_id", columns={"submission_user_id"}), @ORM\Index(name="i_submission_via_form", columns={"submission_via_form"}), @ORM\Index(name="i_type_id", columns={"type_id"}), @ORM\Index(name="i_hier_entity_id", columns={"hier_entity_id"}), @ORM\Index(name="i_hier_left", columns={"hier_left"}), @ORM\Index(name="i_life_edatetime", columns={"life_edatetime"}), @ORM\Index(name="i_submission_group_id", columns={"submission_group_id"})})
 * @ORM\Entity
 */
class CaEntities
{
    /**
     * @var int
     *
     * @ORM\Column(name="entity_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entityId;

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
     * @var bool
     *
     * @ORM\Column(name="commenting_status", type="boolean", nullable=false)
     */
    private $commentingStatus = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="tagging_status", type="boolean", nullable=false)
     */
    private $taggingStatus = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="rating_status", type="boolean", nullable=false)
     */
    private $ratingStatus = '0';

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
     * @var string|null
     *
     * @ORM\Column(name="life_sdatetime", type="decimal", precision=30, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $lifeSdatetime = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="life_edatetime", type="decimal", precision=30, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $lifeEdatetime = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="hier_entity_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $hierEntityId;

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
     * @var \CaEntities
     *
     * @ORM\ManyToOne(targetEntity="CaEntities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="entity_id")
     * })
     */
    private $parent;

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

    public function getEntityId(): ?int
    {
        return $this->entityId;
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

    public function getCommentingStatus(): ?bool
    {
        return $this->commentingStatus;
    }

    public function setCommentingStatus(bool $commentingStatus): self
    {
        $this->commentingStatus = $commentingStatus;

        return $this;
    }

    public function getTaggingStatus(): ?bool
    {
        return $this->taggingStatus;
    }

    public function setTaggingStatus(bool $taggingStatus): self
    {
        $this->taggingStatus = $taggingStatus;

        return $this;
    }

    public function getRatingStatus(): ?bool
    {
        return $this->ratingStatus;
    }

    public function setRatingStatus(bool $ratingStatus): self
    {
        $this->ratingStatus = $ratingStatus;

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

    public function getLifeSdatetime(): ?string
    {
        return $this->lifeSdatetime;
    }

    public function setLifeSdatetime(?string $lifeSdatetime): self
    {
        $this->lifeSdatetime = $lifeSdatetime;

        return $this;
    }

    public function getLifeEdatetime(): ?string
    {
        return $this->lifeEdatetime;
    }

    public function setLifeEdatetime(?string $lifeEdatetime): self
    {
        $this->lifeEdatetime = $lifeEdatetime;

        return $this;
    }

    public function getHierEntityId(): ?int
    {
        return $this->hierEntityId;
    }

    public function setHierEntityId(int $hierEntityId): self
    {
        $this->hierEntityId = $hierEntityId;

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

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

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
