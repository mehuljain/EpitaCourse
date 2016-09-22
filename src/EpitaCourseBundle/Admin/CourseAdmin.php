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
            ->add('ectscredits','text', array('label' => 'ectscredits'))    
            ->add('atthours', 'text', array('label' => 'Hours'))
            ->add('program', ChoiceType::class, array(
               'choices'  => array('ME','MSc','ME and MSc',)))
            ->add('specialization', ChoiceType::class, array(
               'choices'  => array('FUND','FUND_HARMO','GITM','GITM_ISM','GITM_SDM_SNS','HARMO',
                   'ISM_SE_CS','SDM','SDM_SE','SE','SNS','SNS_CSCS_SNS')))       
            ->add('prerequistes','textarea', array('label' => 'prerequistes'))
            ->add('learningoutcomes','textarea', array('label' => 'learningoutcomes')) 
            ->add('courseoverview','textarea', array('label' => 'courseoverview'))
            ->add('listoftopics','textarea', array('label' => 'listoftopics'))
            ->add('assessmentscheme','textarea', array('label' => 'assessmentscheme'))      
            ->add('recommendedresources','textarea', array('label' => 'recommendedresources'))
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
}

