<?php

namespace EpitaCourseBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CourseAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('coursename', 'text', array('label' => 'Course Name'))
            ->add('teachingunit', 'text', array('label' => 'Teaching Unit'))
            ->add('coursecode', 'text', array('label' => 'Course Code'))
            ->add('atthours', 'text', array('label' => 'Hours'))
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
        ;
    }
}

