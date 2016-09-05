<?php

namespace EpitaCourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
//use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourseType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
    
//        $this->selectedcourse = $options['trait_choices'];
        
//        $this->programrepository = $options['program_repository'];
//        $this->specializationrepository = $options['specialization_repository'];
//        
//        $programId = $this->selectedcourse->getProgram();
//        $program = $this->programrepository->findOneBy(array('id' => $programId));
//        
//        $specializationId = $this->selectedcourse->getSpecialization();
//        $specialization = $this->specializationrepository->findOneBy(array('id' => $specializationId));
//        var_dump($this->selectedcourse->getProgram());
        
//        exit;
                    
        $builder->add('coursename', 'text', array(
//                    'data' => $this->selectedcourse->getcoursename(),
                ))
                ->add('teachingunit', 'text', array(
//                    'data' => $this->selectedcourse->getTeachingunit(),
                ))
                ->add('coursecode', 'text', array(
//                    'data' => $this->selectedcourse->getCoursecode(),
                ))
                ->add('ectscredits', 'text', array(
//                    'data' => $this->selectedcourse->getEctscredits(),
                ))
                ->add('atthours', 'text', array(
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
//                    'data' => $this->selectedcourse->getProgram(),
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
//                    'data' => $specialization,
                ))
                ->add('prerequistes', TextareaType::class, array(
//                    'trim' => true,
//                    'data' => $this->selectedcourse->getPrerequistes(),
                ))
                ->add('learningoutcomes', TextareaType::class, array(
//                    'trim' => true,
//                    'data' => $this->selectedcourse->getLearningoutcomes(),
                ))
                ->add('courseoverview', TextareaType::class, array(
//                    'trim' => true,
//                    'data' => $this->selectedcourse->getCourseoverview(),
                ))
                ->add('listoftopics', TextareaType::class, array(
//                    'trim' => true,
//                    'data' => $this->selectedcourse->getListoftopics(),
                ))
                ->add('assessmentscheme', TextareaType::class, array(
//                    'trim' => true,
//                    'data' => $this->selectedcourse->getAssessmentscheme(),
                ))
                ->add('recommendedresources', TextareaType::class, array(
//                    'trim' => true,
//                    'data' => $this->selectedcourse->getRecommendedresources(),
                ));
//                ->add('save', SubmitType::class, array('label' => 'Add'));
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'EpitaCourseBundle\Entity\Course',
//            'trait_choices' => null,
        ));
    }

}
