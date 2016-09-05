<?php

namespace EpitaCourseBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="instructor")
 */
class Instructor extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var integer
     * 
     * @ORM\Column(name="salutation", type="integer",nullable=true)
     */
    protected $salutation;
    
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string",nullable=true)
     */
    protected $firstname;
    
    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string",nullable=true)
     */
    protected $lastname;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="phonenumber", type="string", nullable=true)
     */
    protected $phonenumber;
    
    /**
     * @var string
     *
     * @ORM\Column(name="addressline1", type="string", length=255, nullable=true)
     */
    protected $addressline1;
    
    /**
     * @var string
     *
     * @ORM\Column(name="addressline2", type="string", length=255, nullable=true)
     */
    protected $addressline2;
    
    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", nullable=true)
     */
    protected $city;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="zipcode", type="string", nullable=true)
     */
    protected $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", nullable=true)
     */
    protected $country;
    
    /**
     * @ORM\ManyToMany(targetEntity="Course", mappedBy="instructors")
     */
    protected $courses;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->courses = new ArrayCollection();
    }


    /**
     * Add course
     *
     * @param \EpitaCourseBundle\Entity\Course $course
     *
     * @return Instructor
     */
    public function addCourse(\EpitaCourseBundle\Entity\Course $course)
    {
        $this->courses[] = $course;

        return $this;
    }

    /**
     * Remove course
     *
     * @param \EpitaCourseBundle\Entity\Course $course
     */
    public function removeCourse(\EpitaCourseBundle\Entity\Course $course)
    {
        $this->courses->removeElement($course);
    }

    /**
     * Get courses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCourses()
    {
        return $this->courses;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     *
     * @return Instructor
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set salutation
     *
     * @param integer $salutation
     *
     * @return Instructor
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * Get salutation
     *
     * @return integer
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Instructor
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Instructor
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set addressline1
     *
     * @param string $addressline1
     *
     * @return Instructor
     */
    public function setAddressline1($addressline1)
    {
        $this->addressline1 = $addressline1;

        return $this;
    }

    /**
     * Get addressline1
     *
     * @return string
     */
    public function getAddressline1()
    {
        return $this->addressline1;
    }

    /**
     * Set addressline2
     *
     * @param string $addressline2
     *
     * @return Instructor
     */
    public function setAddressline2($addressline2)
    {
        $this->addressline2 = $addressline2;

        return $this;
    }

    /**
     * Get addressline2
     *
     * @return string
     */
    public function getAddressline2()
    {
        return $this->addressline2;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Instructor
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Instructor
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Instructor
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
}
