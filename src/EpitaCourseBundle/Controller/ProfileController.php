<?php

namespace EpitaCourseBundle\Controller;

use FOS\UserBundle\Controller\ProfileController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EpitaCourseBundle\Form\CourseType;
use EpitaCourseBundle\Entity\Course;

/**
 * Controller managing the user profile
 */
class ProfileController extends BaseController {

    /**
     * Show the user Home page
     */
    public function showAction() {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('EpitaCourseBundle:Profile:homepage.html.twig', array(
                    'user' => $user
        ));
    }

    /**
     * Edit user profile
     */
    public function editAction(Request $request) {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $event = new GetResponseUserEvent($user, $request);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('my_profile');
                $response = new RedirectResponse($url);
            }

            return $response;
        }

        return $this->render('EpitaCourseBundle:Profile:editprofile.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * Show user profile (MyProfile)
     * 
     * @Route("/myprofile", name="my_profile")
     */
    public function myProfileAction(Request $request) {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('EpitaCourseBundle:Profile:myprofile.html.twig', array(
                    'user' => $user
        ));
    }

    /**
     * Show list of user's courses (MyCourses)
     * 
     * @Route("/mycourse", name="my_courses")
     */
    public function showCourseAction(Request $request) {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $courses = $user->getCourses();

        return $this->render('EpitaCourseBundle:Course:showcourse.html.twig', array(
                    'user' => $user,
                    'courses' => $courses
        ));
    }

    /**
     * Add Course
     * 
     * @Route("/mycourse/add", name="add_course")
     */
    public function addCourseAction(Request $request) {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $course = new Course();

        $form = $this->createForm(CourseType::class, $course);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $course->addInstructor($user);

            $programId = $course->getProgram()->getId();
            $specializationId = $course->getSpecialization()->getId();

            $course->setProgram($programId);
            $course->setSpecialization($specializationId);

            $em = $this->getDoctrine()->getManager();
            $em->persist($course);
            $em->flush();

            $url = $this->generateUrl('my_courses');
            return $response = new RedirectResponse($url);
        }

        return $this->render('EpitaCourseBundle:Course:addcourse.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * Edit Course
     * 
     * @Route("/{id}/mycourse/edit", requirements={"id" = "\d+"}, name="edit_course")
     */
    public function editCourseAction(Request $request, $id) {

        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $em = $this->getDoctrine()->getManager();

        $selectedcourse = $em->getRepository('EpitaCourseBundle:Course')->findOneBy(array('id' => $id));

        $form = $this->createForm(CourseType::class, $selectedcourse);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $programId = $selectedcourse->getProgram()->getId();
            $specializationId = $selectedcourse->getSpecialization()->getId();

            $selectedcourse->setProgram($programId);
            $selectedcourse->setSpecialization($specializationId);

            $em->persist($selectedcourse);
            $em->flush();

            $url = $this->generateUrl('my_courses');
            return $response = new RedirectResponse($url);
        }

        return $this->render('EpitaCourseBundle:Course:editcourse.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * Delete Course
     * 
     * @Route("/{id}/mycourse/delete", requirements={"id" = "\d+"}, name="delete_course")
     */
    public function deleteCourseAction(Request $request, $id) {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $em = $this->getDoctrine()->getManager();

        $selectedcourse = $em->getRepository('EpitaCourseBundle:Course')->findOneBy(array('id' => $id));

//        $selectedcourse->removeInstructor($user);
        $user->removeCourse($selectedcourse);
        
        $courses = $user->getCourses();
        $em->persist($selectedcourse);
        $em->persist($user);
        $em->flush();

        return $this->render('EpitaCourseBundle:Course:showcourse.html.twig', array(
                    'user' => $user,
                    'courses' => $courses
        ));
    }

}
