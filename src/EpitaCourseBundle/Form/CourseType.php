<?php

namespace EpitaCourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourseType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
    
        $this->selectedcourse = $options['trait_choices'][0];
        $em = $options['trait_choices'][1];
        $program = $specialization = '';
        if(!empty($this->selectedcourse)){
        $programId = $this->selectedcourse->getProgram();        
        $program = $em->getRepository('EpitaCourseBundle:Program')->findOneBy(array('id' => $programId));
        
        $specializationId = $this->selectedcourse->getSpecialization();
        $specialization = $em->getRepository('EpitaCourseBundle:Specialization')->findOneBy(array('id' => $specializationId));
        }
                    
        $builder->add('coursename', 'text', array(
                        'label' => 'Course Name'
//                    'data' => $this->selectedcourse->getcoursename(),
                ))
                ->add('teachingunit', 'text', array(
                     'label' => 'Teaching Unit'
//                    'data' => $this->selectedcourse->getTeachingunit(),
                ))
                ->add('coursecode', 'text', array(
                    'label' => 'Course Code'
//                    'data' => $this->selectedcourse->getCoursecode(),
                ))
                ->add('ectscredits', 'text', array(
                        'label' => 'ECTS Credits'
//                    'data' => $this->selectedcourse->getEctscredits(),
                ))
                ->add('atthours', 'text', array(
                        'label' => 'Attributed Hours'
//                    'data' => $this->selectedcourse->getAtthours(),
                ))
                ->add('program', 'entity', array(
                    
                    'class' => 'EpitaCourseBundle:Program',
                    'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('p')
                        ->orderBy('p.id', 'ASC');
            },
                    'choice_label' => 'programname',
                    'expanded' => false,
                    'multiple' => false,
                    'label' => 'Choose Program',
                    'data' => $program,
                ))
                ->add('specialization', 'entity', array(
                    'class' => 'EpitaCourseBundle:Specialization',
                    'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('s')
                        ->orderBy('s.id', 'ASC');
            },
                    'choice_label' => 'specializationname',
                    'expanded' => false,
                    'multiple' => false,
                    'label' => 'Choose Specialization',
                    'data' => $specialization,
                ))
                ->add('prerequistes', TextareaType::class, array(
                       'label' => 'Prerequisites'
//                    'trim' => true,
//                    'data' => $this->selectedcourse->getPrerequistes(),
                ))
                ->add('learningoutcomes', TextareaType::class, array(
                       'label' => 'Learning outcomes'
//                    'trim' => true,
//                    'data' => $this->selectedcourse->getLearningoutcomes(),
                ))
                ->add('courseoverview', TextareaType::class, array(
                       'label' => 'Course Overview'
//                    'trim' => true,
//                    'data' => $this->selectedcourse->getCourseoverview(),
                ))
                ->add('listoftopics', TextareaType::class, array(
                       'label' => 'List of topics'
//                    'trim' => true,
//                    'data' => $this->selectedcourse->getListoftopics(),
                ))
                ->add('assessmentscheme', TextareaType::class, array(
                        'label' => 'Asessment Scheme'
//                    'trim' => true,
//                    'data' => $this->selectedcourse->getAssessmentscheme(),
                ))
                ->add('recommendedresources', TextareaType::class, array(
                      'label' => 'Recommended Courses'
//                    'trim' => true,
//                    'data' => $this->selectedcourse->getRecommendedresources(),
                ));
//                ->add('save', SubmitType::class, array('label' => 'Add'));
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'EpitaCourseBundle\Entity\Course',
            'trait_choices' => null,
        ));
    }

}
