<?php

namespace EpitaCourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="course")
 */
class Course {
    
    public static $specia = array(1=>"FUND",2=>"FUND_HARMO",3=>"GITM",4=>"GITM_ISM",5=>"GITM_SDM_SNS",
        6=>"HARMO",7=>"ISM_SE_CS",8=>"SDM",9=>"SDM_SE",10=>"SE",11=>"SNS",12=>"SNS_CSCS_SNS",13=>"ISM",
        14=>"CS",15=>"ISM_CS_SE_SDM_SNS_GITM",16=>"ISM_SE",17=>"CS_SNS",18=>"GITM_SDM",19=>"SDM_SNS",
        20=>"SE_CS",21=>"SE_CS_SNS_SDM",22=>"GITM_ISM_SE_SDM"
        );
    public static $prog = array(0=> 'None',1=>"ME",2=>"MSc",3=>"ME and MSc");

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
     * @ORM\Column(name="specialization", type="string") 
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
     * 
     * @return string Speicalization string
     */
   public function getSpecializationstring(){

     $spe = $this->specialization;
     $test = self::$specia[$spe];
        return $test;
    }
    
    /**
     * 
     * @return string Speicalization string
     */
   public function getProgramname(){

     $spe = $this->program;
     $test = self::$prog[$spe];
        return $test;
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
    
    
    /**
     * Get instructors first name
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExportInstructorFirstName()
    {
        $firstname = $this->instructors->map(function ($entity){return $entity->getFirstname();})->current();                
        return $firstname;
    }
    
    /**
     * Get instructors last name
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExportInstructorLastName()
    {
        $lastname = $this->instructors->map(function ($entity){return $entity->getLastname();})->current();
        return $lastname;
    }
    
    /**
     * Get instructors email
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExportInstructorEmail()
    {
        $email = $this->instructors->map(function ($entity){return $entity->getEmailCanonical();})->current();
        return $email;
    }
}
