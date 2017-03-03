<?php

namespace EpitaCourseBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class CourseAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper  
            ->add('coursename', 'text', array('label' => 'Course Name'))
            ->add('teachingunit', 'text', array('label' => 'Teaching Unit'))
            ->add('coursecode', 'text', array('label' => 'Course Code'))
            ->add('ectscredits','text', array('label' => 'ECTS Credits'))    
            ->add('atthours', 'text', array('label' => 'Hours'))
            ->add('program', ChoiceType::class, array(
               'choices'  => array('ME','MSc','ME and MSc',)))
            ->add('specialization', ChoiceType::class, array(
               'choices'  => array('FUND','FUND_HARMO','GITM','GITM_ISM','GITM_SDM_SNS','HARMO',
                   'ISM_SE_CS','SDM','SDM_SE','SE','SNS','SNS_CSCS_SNS','ISM',
                   'CS','ISM_CS_SE_SDM_SNS_GITM','ISM_SE',
                   'CS_SNS','GITM_SDM','SDM_SNS','SE_CS','SE_CS_SNS_SDM','GITM_ISM_SE_SDM')))       
            ->add('prerequistes','textarea', array('label' => 'Pre-requisites'))
            ->add('learningoutcomes','textarea', array('label' => 'Learning Outcomes')) 
            ->add('courseoverview','textarea', array('label' => 'Course Overview'))
            ->add('listoftopics','textarea', array('label' => 'List of topics'))
            ->add('assessmentscheme','textarea', array('label' => 'Assessment scheme'))      
            ->add('recommendedresources','textarea', array('label' => 'Recommended resources'))
//            ->add('instructors','sonata_type_model',array('multiple'=> true,'property'=>'username'))
            ->add('instructors', null, array('label' => 'Instructors', 'expanded' => false, 'by_reference' => false, 'multiple' => true))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper  
            ->add('coursename')
            ->add('coursecode')
                    
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('coursename')
            ->addIdentifier('coursecode')
            ->addIdentifier('teachingunit')  
        ;
    }
    
    public function getExportFields() {
        
          return array(
            'Coursename' => 'coursename',      
            'Teaching Unit' => 'teachingunit',
            'Course Code' => 'coursecode',
            'ECTS Credits' => 'ectscredits',
            'Program' => 'program',
            'Specialization' => 'specialization',
            'Pre-requisites'=> 'prerequistes',
            'Learning Outcomes' => 'learningoutcomes',
            'Course Overview' => 'courseoverview',
            'List of Topics' => 'listoftopics',
            'Assessment Scheme' => 'assessmentscheme',
            'Recommended Courses'=> 'recommendedresources',
            'Instructor Firstname'=> 'getExportInstructorFirstName',
            'Instructor Lastname'=> 'getExportInstructorLastName',
            'Instructor Email'=> 'getExportInstructorEmail',
        );
    }
}

