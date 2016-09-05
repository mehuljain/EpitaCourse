<?php

namespace EpitaCourseBundle\Controller;

use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RegistrationController extends BaseController {

    public function registerAction(Request $request) {
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');

        $user = $userManager->createUser();
        $user->setEnabled(true);
        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $userManager->updateUser($user);
            $url = $this->generateUrl('fos_user_security_login');
            $response = new RedirectResponse($url);
            return $response;
        }

        return $this->render('EpitaCourseBundle:Registration:register.html.twig', array(
                    'form' => $form->createView(),
        ));
    }
}
