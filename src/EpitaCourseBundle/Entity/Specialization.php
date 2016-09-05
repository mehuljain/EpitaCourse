<?php

namespace EpitaCourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="specialization")
 */
class Specialization {
    
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="specializationname", type="string", length=80)
     */
    protected $specializationname;
    

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
     * Set specializationname
     *
     * @param string $specializationname
     *
     * @return Specialization
     */
    public function setSpecializationname($specializationname)
    {
        $this->specializationname = $specializationname;

        return $this;
    }

    /**
     * Get specializationname
     *
     * @return string
     */
    public function getSpecializationname()
    {
        return $this->specializationname;
    }
}
