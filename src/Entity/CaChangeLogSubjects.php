<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaChangeLogSubjects
 *
 * @ORM\Table(name="ca_change_log_subjects", indexes={@ORM\Index(name="i_log_id", columns={"log_id"}), @ORM\Index(name="i_log_plus", columns={"log_id", "subject_table_num", "subject_row_id"}), @ORM\Index(name="i_subject", columns={"subject_row_id", "subject_table_num"})})
 * @ORM\Entity
 */
class CaChangeLogSubjects
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="subject_table_num", type="boolean", nullable=false)
     */
    private $subjectTableNum;

    /**
     * @var int
     *
     * @ORM\Column(name="subject_row_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $subjectRowId;

    /**
     * @var \CaChangeLog
     *
     * @ORM\ManyToOne(targetEntity="CaChangeLog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="log_id", referencedColumnName="log_id")
     * })
     */
    private $log;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubjectTableNum(): ?bool
    {
        return $this->subjectTableNum;
    }

    public function setSubjectTableNum(bool $subjectTableNum): self
    {
        $this->subjectTableNum = $subjectTableNum;

        return $this;
    }

    public function getSubjectRowId(): ?int
    {
        return $this->subjectRowId;
    }

    public function setSubjectRowId(int $subjectRowId): self
    {
        $this->subjectRowId = $subjectRowId;

        return $this;
    }

    public function getLog(): ?CaChangeLog
    {
        return $this->log;
    }

    public function setLog(?CaChangeLog $log): self
    {
        $this->log = $log;

        return $this;
    }


}
