<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaObjectRepresentations
 *
 * @ORM\Table(name="ca_object_representations", indexes={@ORM\Index(name="i_idno", columns={"idno"}), @ORM\Index(name="i_mimetype", columns={"mimetype"}), @ORM\Index(name="i_source_id", columns={"source_id"}), @ORM\Index(name="i_submission_group_id", columns={"submission_group_id"}), @ORM\Index(name="i_is_transcribable", columns={"is_transcribable"}), @ORM\Index(name="i_locale_id", columns={"locale_id"}), @ORM\Index(name="i_idno_sort", columns={"idno_sort"}), @ORM\Index(name="i_original_filename", columns={"original_filename"}), @ORM\Index(name="i_view_count", columns={"view_count"}), @ORM\Index(name="i_submission_status_id", columns={"submission_status_id"}), @ORM\Index(name="i_type_id", columns={"type_id"}), @ORM\Index(name="i_md5", columns={"md5"}), @ORM\Index(name="i_rank", columns={"rank"}), @ORM\Index(name="i_rep_filter", columns={"representation_id", "deleted", "access"}), @ORM\Index(name="i_submission_user_id", columns={"submission_user_id"}), @ORM\Index(name="i_submission_via_form", columns={"submission_via_form"})})
 * @ORM\Entity
 */
class CaObjectRepresentations
{
    /**
     * @var int
     *
     * @ORM\Column(name="representation_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $representationId;

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
     * @var string
     *
     * @ORM\Column(name="md5", type="string", length=32, nullable=false)
     */
    private $md5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mimetype", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $mimetype = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="original_filename", type="string", length=1024, nullable=false)
     */
    private $originalFilename;

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="blob", length=0, nullable=false)
     */
    private $media;

    /**
     * @var string|null
     *
     * @ORM\Column(name="media_metadata", type="blob", length=0, nullable=true, options={"default"="NULL"})
     */
    private $mediaMetadata = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="media_content", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $mediaContent = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

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
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="source_info", type="text", length=0, nullable=false)
     */
    private $sourceInfo;

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
     * @var bool
     *
     * @ORM\Column(name="is_transcribable", type="boolean", nullable=false)
     */
    private $isTranscribable = '0';

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

    public function getRepresentationId(): ?int
    {
        return $this->representationId;
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

    public function getMd5(): ?string
    {
        return $this->md5;
    }

    public function setMd5(string $md5): self
    {
        $this->md5 = $md5;

        return $this;
    }

    public function getMimetype(): ?string
    {
        return $this->mimetype;
    }

    public function setMimetype(?string $mimetype): self
    {
        $this->mimetype = $mimetype;

        return $this;
    }

    public function getOriginalFilename(): ?string
    {
        return $this->originalFilename;
    }

    public function setOriginalFilename(string $originalFilename): self
    {
        $this->originalFilename = $originalFilename;

        return $this;
    }

    public function getMedia()
    {
        return $this->media;
    }

    public function setMedia($media): self
    {
        $this->media = $media;

        return $this;
    }

    public function getMediaMetadata()
    {
        return $this->mediaMetadata;
    }

    public function setMediaMetadata($mediaMetadata): self
    {
        $this->mediaMetadata = $mediaMetadata;

        return $this;
    }

    public function getMediaContent(): ?string
    {
        return $this->mediaContent;
    }

    public function setMediaContent(?string $mediaContent): self
    {
        $this->mediaContent = $mediaContent;

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

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

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

    public function getIsTranscribable(): ?bool
    {
        return $this->isTranscribable;
    }

    public function setIsTranscribable(bool $isTranscribable): self
    {
        $this->isTranscribable = $isTranscribable;

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
