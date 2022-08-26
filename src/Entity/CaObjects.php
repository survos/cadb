<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Survos\BaseBundle\Entity\SurvosBaseEntity;

/**
 * CaObjects
 *
 * @ORM\Table(name="ca_objects", indexes={@ORM\Index(name="i_parent_id", columns={"parent_id"}), @ORM\Index(name="i_submission_group_id", columns={"submission_group_id"}), @ORM\Index(name="i_type_id", columns={"type_id"}), @ORM\Index(name="i_lot_id", columns={"lot_id"}), @ORM\Index(name="i_acqusition_type_id", columns={"source_id", "acquisition_type_id"}), @ORM\Index(name="i_item_status_id", columns={"item_status_id"}), @ORM\Index(name="i_home_location_id", columns={"home_location_id"}), @ORM\Index(name="i_deaccession_sdatetime", columns={"deaccession_sdatetime"}), @ORM\Index(name="i_is_deaccessioned", columns={"is_deaccessioned"}), @ORM\Index(name="i_current_loc_id", columns={"current_loc_id"}), @ORM\Index(name="fk_ca_objects_acquisition_type_id", columns={"acquisition_type_id"}), @ORM\Index(name="i_deaccession_disposal_edatetime", columns={"deaccession_disposal_edatetime"}), @ORM\Index(name="i_idno", columns={"idno"}), @ORM\Index(name="i_submission_status_id", columns={"submission_status_id"}), @ORM\Index(name="i_hier_left", columns={"hier_left"}), @ORM\Index(name="i_locale_id", columns={"locale_id"}), @ORM\Index(name="i_acl_inherit_from_parent", columns={"acl_inherit_from_parent"}), @ORM\Index(name="i_accession_sdatetime", columns={"accession_sdatetime"}), @ORM\Index(name="i_deaccession_edatetime", columns={"deaccession_edatetime"}), @ORM\Index(name="i_current_loc_class", columns={"current_loc_class"}), @ORM\Index(name="i_view_count", columns={"view_count"}), @ORM\Index(name="fk_ca_objects_circulation_status_id", columns={"circulation_status_id"}), @ORM\Index(name="i_submission_user_id", columns={"submission_user_id"}), @ORM\Index(name="i_idno_sort", columns={"idno_sort"}), @ORM\Index(name="i_submission_via_form", columns={"submission_via_form"}), @ORM\Index(name="i_hier_right", columns={"hier_right"}), @ORM\Index(name="i_hier_object_id", columns={"hier_object_id"}), @ORM\Index(name="i_source_id", columns={"source_id"}), @ORM\Index(name="i_acl_inherit_from_ca_collections", columns={"acl_inherit_from_ca_collections"}), @ORM\Index(name="i_accession_edatetime", columns={"accession_edatetime"}), @ORM\Index(name="i_deaccession_type_id", columns={"deaccession_type_id"}), @ORM\Index(name="i_current_loc_subclass", columns={"current_loc_subclass"}), @ORM\Index(name="i_obj_filter", columns={"object_id", "deleted", "access"}), @ORM\Index(name="i_deaccession_disposal_sdatetime", columns={"deaccession_disposal_sdatetime"})})
 * @ORM\Entity
 * @ApiResource()
 *
 */
class CaObjects extends SurvosBaseEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="object_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $objectId;

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
     * @ORM\Column(name="source_info", type="text", length=0, nullable=false)
     */
    private $sourceInfo;

    /**
     * @var int
     *
     * @ORM\Column(name="hier_object_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $hierObjectId;

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
     * @var int
     *
     * @ORM\Column(name="extent", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $extent;

    /**
     * @var string
     *
     * @ORM\Column(name="extent_units", type="string", length=255, nullable=false)
     */
    private $extentUnits;

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
     * @var bool
     *
     * @ORM\Column(name="acl_inherit_from_ca_collections", type="boolean", nullable=false)
     */
    private $aclInheritFromCaCollections = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="acl_inherit_from_parent", type="boolean", nullable=false)
     */
    private $aclInheritFromParent = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="access_inherit_from_parent", type="boolean", nullable=false)
     */
    private $accessInheritFromParent = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="accession_sdatetime", type="decimal", precision=30, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $accessionSdatetime = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="accession_edatetime", type="decimal", precision=30, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $accessionEdatetime = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="deaccession_sdatetime", type="decimal", precision=30, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $deaccessionSdatetime = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="deaccession_edatetime", type="decimal", precision=30, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $deaccessionEdatetime = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_deaccessioned", type="boolean", nullable=false)
     */
    private $isDeaccessioned = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="deaccession_notes", type="text", nullable=false)
     */
    private $deaccessionNotes;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="current_loc_class", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $currentLocClass = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="current_loc_subclass", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $currentLocSubclass = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="current_loc_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $currentLocId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="deaccession_disposal_sdatetime", type="decimal", precision=30, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $deaccessionDisposalSdatetime = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="deaccession_disposal_edatetime", type="decimal", precision=30, scale=20, nullable=true, options={"default"="NULL"})
     */
    private $deaccessionDisposalEdatetime = 'NULL';

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
     * @var CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="acquisition_type_id", referencedColumnName="item_id")
     * })
     */
    private $acquisitionType;

    /**
     * @var CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="circulation_status_id", referencedColumnName="item_id")
     * })
     */
    private CaListItems $circulationStatus;

    /**
     * @var \CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deaccession_type_id", referencedColumnName="item_id")
     * })
     */
    private $deaccessionType;

    /**
     * @var \CaStorageLocations
     *
     * @ORM\ManyToOne(targetEntity="CaStorageLocations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="home_location_id", referencedColumnName="location_id")
     * })
     */
    private $homeLocation;

    /**
     * @var \CaListItems
     *
     * @ORM\ManyToOne(targetEntity="CaListItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_status_id", referencedColumnName="item_id")
     * })
     */
    private $itemStatus;

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
     * @var \CaObjectLots
     *
     * @ORM\ManyToOne(targetEntity="CaObjectLots")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lot_id", referencedColumnName="lot_id")
     * })
     */
    private $lot;

    /**
     * @var \CaObjects
     *
     * @ORM\ManyToOne(targetEntity="CaObjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="object_id")
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

    /**
     * @ORM\OneToMany(targetEntity=CaObjectLabels::class, mappedBy="object", orphanRemoval=true)
     */
    private $objectLabels;

    public function __construct()
    {
        $this->objectLabels = new ArrayCollection();
    }

    public function getObjectId(): ?int
    {
        return $this->objectId;
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

    public function getSourceInfo(): ?string
    {
        return $this->sourceInfo;
    }

    public function setSourceInfo(string $sourceInfo): self
    {
        $this->sourceInfo = $sourceInfo;

        return $this;
    }

    public function getHierObjectId(): ?int
    {
        return $this->hierObjectId;
    }

    public function setHierObjectId(int $hierObjectId): self
    {
        $this->hierObjectId = $hierObjectId;

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

    public function getExtent(): ?int
    {
        return $this->extent;
    }

    public function setExtent(int $extent): self
    {
        $this->extent = $extent;

        return $this;
    }

    public function getExtentUnits(): ?string
    {
        return $this->extentUnits;
    }

    public function setExtentUnits(string $extentUnits): self
    {
        $this->extentUnits = $extentUnits;

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

    public function getAclInheritFromCaCollections(): ?bool
    {
        return $this->aclInheritFromCaCollections;
    }

    public function setAclInheritFromCaCollections(bool $aclInheritFromCaCollections): self
    {
        $this->aclInheritFromCaCollections = $aclInheritFromCaCollections;

        return $this;
    }

    public function getAclInheritFromParent(): ?bool
    {
        return $this->aclInheritFromParent;
    }

    public function setAclInheritFromParent(bool $aclInheritFromParent): self
    {
        $this->aclInheritFromParent = $aclInheritFromParent;

        return $this;
    }

    public function getAccessInheritFromParent(): ?bool
    {
        return $this->accessInheritFromParent;
    }

    public function setAccessInheritFromParent(bool $accessInheritFromParent): self
    {
        $this->accessInheritFromParent = $accessInheritFromParent;

        return $this;
    }

    public function getAccessionSdatetime(): ?string
    {
        return $this->accessionSdatetime;
    }

    public function setAccessionSdatetime(?string $accessionSdatetime): self
    {
        $this->accessionSdatetime = $accessionSdatetime;

        return $this;
    }

    public function getAccessionEdatetime(): ?string
    {
        return $this->accessionEdatetime;
    }

    public function setAccessionEdatetime(?string $accessionEdatetime): self
    {
        $this->accessionEdatetime = $accessionEdatetime;

        return $this;
    }

    public function getDeaccessionSdatetime(): ?string
    {
        return $this->deaccessionSdatetime;
    }

    public function setDeaccessionSdatetime(?string $deaccessionSdatetime): self
    {
        $this->deaccessionSdatetime = $deaccessionSdatetime;

        return $this;
    }

    public function getDeaccessionEdatetime(): ?string
    {
        return $this->deaccessionEdatetime;
    }

    public function setDeaccessionEdatetime(?string $deaccessionEdatetime): self
    {
        $this->deaccessionEdatetime = $deaccessionEdatetime;

        return $this;
    }

    public function getIsDeaccessioned(): ?bool
    {
        return $this->isDeaccessioned;
    }

    public function setIsDeaccessioned(bool $isDeaccessioned): self
    {
        $this->isDeaccessioned = $isDeaccessioned;

        return $this;
    }

    public function getDeaccessionNotes(): ?string
    {
        return $this->deaccessionNotes;
    }

    public function setDeaccessionNotes(string $deaccessionNotes): self
    {
        $this->deaccessionNotes = $deaccessionNotes;

        return $this;
    }

    public function getCurrentLocClass(): ?bool
    {
        return $this->currentLocClass;
    }

    public function setCurrentLocClass(?bool $currentLocClass): self
    {
        $this->currentLocClass = $currentLocClass;

        return $this;
    }

    public function getCurrentLocSubclass(): ?int
    {
        return $this->currentLocSubclass;
    }

    public function setCurrentLocSubclass(?int $currentLocSubclass): self
    {
        $this->currentLocSubclass = $currentLocSubclass;

        return $this;
    }

    public function getCurrentLocId(): ?int
    {
        return $this->currentLocId;
    }

    public function setCurrentLocId(?int $currentLocId): self
    {
        $this->currentLocId = $currentLocId;

        return $this;
    }

    public function getDeaccessionDisposalSdatetime(): ?string
    {
        return $this->deaccessionDisposalSdatetime;
    }

    public function setDeaccessionDisposalSdatetime(?string $deaccessionDisposalSdatetime): self
    {
        $this->deaccessionDisposalSdatetime = $deaccessionDisposalSdatetime;

        return $this;
    }

    public function getDeaccessionDisposalEdatetime(): ?string
    {
        return $this->deaccessionDisposalEdatetime;
    }

    public function setDeaccessionDisposalEdatetime(?string $deaccessionDisposalEdatetime): self
    {
        $this->deaccessionDisposalEdatetime = $deaccessionDisposalEdatetime;

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

    public function getAcquisitionType(): ?CaListItems
    {
        return $this->acquisitionType;
    }

    public function setAcquisitionType(?CaListItems $acquisitionType): self
    {
        $this->acquisitionType = $acquisitionType;

        return $this;
    }

    public function getCirculationStatus(): ?CaListItems
    {
        return $this->circulationStatus;
    }

    public function setCirculationStatus(?CaListItems $circulationStatus): self
    {
        $this->circulationStatus = $circulationStatus;

        return $this;
    }

    public function getDeaccessionType(): ?CaListItems
    {
        return $this->deaccessionType;
    }

    public function setDeaccessionType(?CaListItems $deaccessionType): self
    {
        $this->deaccessionType = $deaccessionType;

        return $this;
    }

    public function getHomeLocation(): ?CaStorageLocations
    {
        return $this->homeLocation;
    }

    public function setHomeLocation(?CaStorageLocations $homeLocation): self
    {
        $this->homeLocation = $homeLocation;

        return $this;
    }

    public function getItemStatus(): ?CaListItems
    {
        return $this->itemStatus;
    }

    public function setItemStatus(?CaListItems $itemStatus): self
    {
        $this->itemStatus = $itemStatus;

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

    public function getLot(): ?CaObjectLots
    {
        return $this->lot;
    }

    public function setLot(?CaObjectLots $lot): self
    {
        $this->lot = $lot;

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

    /**
     * @return Collection|CaObjectLabels[]
     */
    public function getObjectLabels(): Collection
    {
        return $this->objectLabels;
    }

    public function addObjectLabel(CaObjectLabels $objectLabel): self
    {
        if (!$this->objectLabels->contains($objectLabel)) {
            $this->objectLabels[] = $objectLabel;
            $objectLabel->setObject($this);
        }

        return $this;
    }

    public function removeObjectLabel(CaObjectLabels $objectLabel): self
    {
        if ($this->objectLabels->removeElement($objectLabel)) {
            // set the owning side to null (unless already changed)
            if ($objectLabel->getObject() === $this) {
                $objectLabel->setObject(null);
            }
        }

        return $this;
    }


    function getUniqueIdentifiers()
    {
        return ['caObjectId' => $this->getObjectId()];
    }
}
