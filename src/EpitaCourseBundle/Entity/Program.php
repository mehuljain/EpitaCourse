<?php

namespace EpitaCourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="program")
 */
class Program {
    
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="programname", type="string", length=80)
     */
    protected $programname;
    

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
     * Set programname
     *
     * @param string $programname
     *
     * @return Program
     */
    public function setProgramname($programname)
    {
        $this->programname = $programname;

        return $this;
    }

    /**
     * Get programname
     *
     * @return string
     */
    public function getProgramname()
    {
        return $this->programname;
    }
}
