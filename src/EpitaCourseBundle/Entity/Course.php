<?php

namespace EpitaCourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="course")
 */
class Course {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="coursename", type="string", length=400)
     */
    protected $coursename;

    /**
     * @ORM\ManyToMany(targetEntity="Instructor", cascade={"persist", "remove"}, inversedBy="courses")
     */
    protected $instructors;

    public function __construct() {
        $this->instructors = new ArrayCollection();
    }

    /**
     * @var string
     * 
     * @ORM\Column(name="teachingunit", type="string", length=400) 
     */
    protected $teachingunit;

    /**
     * @var string
     * 
     * @ORM\Column(name="coursecode", type="string", length=80) 
     */
    protected $coursecode;

    /**
     * @var float
     * 
     * @ORM\Column(name="atthours", type="float") 
     */
    protected $atthours;

    /**
     * @var integer
     * 
     * @ORM\Column(name="program", type="integer")
     */
    protected $program;

    /**
     * @var float
     * 
     * @ORM\Column(name="ectscredits", type="float")
     */
    protected $ectscredits;

    /**
     * @var integer
     * 
     * @ORM\Column(name="specialization", type="integer") 
     */
    protected $specialization;

    /**
     * @var text
     * 
     * @ORM\Column(name="prerequistes", type="text") 
     */
    protected $prerequistes;

    /**
     * @var text
     * 
     * @ORM\Column(name="learningoutcomes", type="text") 
     */
    protected $learningoutcomes;

    /**
     * @var text
     * 
     * @ORM\Column(name="courseoverview", type="text") 
     */
    protected $courseoverview;

    /**
     * @var text
     * 
     * @ORM\Column(name="listoftopics", type="text") 
     */
    protected $listoftopics;

    /**
     * @var text
     * 
     * @ORM\Column(name="assessmentscheme", type="text") 
     */
    protected $assessmentscheme;

    /**
     * @var text
     * 
     * @ORM\Column(name="recommendedlearningresources", type="text") 
     */
    protected $recommendedresources;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coursename
     *
     * @param string $coursename
     *
     * @return Course
     */
    public function setCoursename($coursename)
    {
        $this->coursename = $coursename;

        return $this;
    }

    /**
     * Get coursename
     *
     * @return string
     */
    public function getCoursename()
    {
        return $this->coursename;
    }

    /**
     * Set teachingunit
     *
     * @param string $teachingunit
     *
     * @return Course
     */
    public function setTeachingunit($teachingunit)
    {
        $this->teachingunit = $teachingunit;

        return $this;
    }

    /**
     * Get teachingunit
     *
     * @return string
     */
    public function getTeachingunit()
    {
        return $this->teachingunit;
    }

    /**
     * Set coursecode
     *
     * @param string $coursecode
     *
     * @return Course
     */
    public function setCoursecode($coursecode)
    {
        $this->coursecode = $coursecode;

        return $this;
    }

    /**
     * Get coursecode
     *
     * @return string
     */
    public function getCoursecode()
    {
        return $this->coursecode;
    }

    /**
     * Set atthours
     *
     * @param float $atthours
     *
     * @return Course
     */
    public function setAtthours($atthours)
    {
        $this->atthours = $atthours;

        return $this;
    }

    /**
     * Get atthours
     *
     * @return float
     */
    public function getAtthours()
    {
        return $this->atthours;
    }

    /**
     * Set program
     *
     * @param integer $program
     *
     * @return Course
     */
    public function setProgram($program)
    {
        $this->program = $program;

        return $this;
    }

    /**
     * Get program
     *
     * @return integer
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Set ectscredits
     *
     * @param float $ectscredits
     *
     * @return Course
     */
    public function setEctscredits($ectscredits)
    {
        $this->ectscredits = $ectscredits;

        return $this;
    }

    /**
     * Get ectscredits
     *
     * @return float
     */
    public function getEctscredits()
    {
        return $this->ectscredits;
    }

    /**
     * Set specialization
     *
     * @param integer $specialization
     *
     * @return Course
     */
    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;

        return $this;
    }

    /**
     * Get specialization
     *
     * @return integer
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }

    /**
     * Set prerequistes
     *
     * @param string $prerequistes
     *
     * @return Course
     */
    public function setPrerequistes($prerequistes)
    {
        $this->prerequistes = $prerequistes;

        return $this;
    }

    /**
     * Get prerequistes
     *
     * @return string
     */
    public function getPrerequistes()
    {
        return $this->prerequistes;
    }

    /**
     * Set learningoutcomes
     *
     * @param string $learningoutcomes
     *
     * @return Course
     */
    public function setLearningoutcomes($learningoutcomes)
    {
        $this->learningoutcomes = $learningoutcomes;

        return $this;
    }

    /**
     * Get learningoutcomes
     *
     * @return string
     */
    public function getLearningoutcomes()
    {
        return $this->learningoutcomes;
    }

    /**
     * Set courseoverview
     *
     * @param string $courseoverview
     *
     * @return Course
     */
    public function setCourseoverview($courseoverview)
    {
        $this->courseoverview = $courseoverview;

        return $this;
    }

    /**
     * Get courseoverview
     *
     * @return string
     */
    public function getCourseoverview()
    {
        return $this->courseoverview;
    }

    /**
     * Set listoftopics
     *
     * @param string $listoftopics
     *
     * @return Course
     */
    public function setListoftopics($listoftopics)
    {
        $this->listoftopics = $listoftopics;

        return $this;
    }

    /**
     * Get listoftopics
     *
     * @return string
     */
    public function getListoftopics()
    {
        return $this->listoftopics;
    }

    /**
     * Set assessmentscheme
     *
     * @param string $assessmentscheme
     *
     * @return Course
     */
    public function setAssessmentscheme($assessmentscheme)
    {
        $this->assessmentscheme = $assessmentscheme;

        return $this;
    }

    /**
     * Get assessmentscheme
     *
     * @return string
     */
    public function getAssessmentscheme()
    {
        return $this->assessmentscheme;
    }

    /**
     * Add instructor
     *
     * @param \EpitaCourseBundle\Entity\Instructor $instructor
     *
     * @return Course
     */
    public function addInstructor(\EpitaCourseBundle\Entity\Instructor $instructor)
    {
        $this->instructors[] = $instructor;

        return $this;
    }

    /**
     * Remove instructor
     *
     * @param \EpitaCourseBundle\Entity\Instructor $instructor
     */
    public function removeInstructor(\EpitaCourseBundle\Entity\Instructor $instructor)
    {
        $this->instructors->removeElement($instructor);
    }

    /**
     * Get instructors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInstructors()
    {
        return $this->instructors;
    }

    /**
     * Set recommendedresources
     *
     * @param string $recommendedresources
     *
     * @return Course
     */
    public function setRecommendedresources($recommendedresources)
    {
        $this->recommendedresources = $recommendedresources;

        return $this;
    }

    /**
     * Get recommendedresources
     *
     * @return string
     */
    public function getRecommendedresources()
    {
        return $this->recommendedresources;
    }
}
