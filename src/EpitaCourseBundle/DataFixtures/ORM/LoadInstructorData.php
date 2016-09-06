<?php

namespace EpitaCourseBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use EpitaCourseBundle\Entity\Instructor;

class LoadInstructorData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {
//        $username = ['hadi.elkhoury', DOne
//                     'erik',Done 
//                     'geraud.dedrouas',Done
//                      'apdepeyronnet',Done
//                      'rabih.haddad',Done
//                      'athienot',Done
//                      'marwan.burelle',Done
//                      'stephane.descaves',Done
//                      'neil',Done
//                      'rembowskijan',Done
//                      'olivierberthet',
//                      'abdelfattah.rochdi',
//                      'axe.ullern',
//                      'jeansebastien.prost',
//                      'chrysolin.brabant',
//                      'sylvieappriou',
//                      'alice.million',
//                      'laurent.trebulle',
//                      'sylvie',
//                      'celia.fernandez',
//                      'bonjf',
//                      'thomas.broussard',
//                      'osman.salem',
//                      'y.gal.fr',
//                      'eunika',
//                      'Thierry.JOUBERT',
//                      'david.menager',
//                      'jjuzcateguir',
//                      'anne-sophie.pachet',
//                      'robert.erra',
//                      'mohammadsalmannadeem'                      
//            ];
//        $email = ['hadi.elkhoury@oservice2.com', 
//                  'erik@infrageeks.com', 
//                  'geraud.dedrouas@gmail.com',
//                  'apdepeyronnet@gmail.com',
//                  'rabih.haddad@epita.fr',
//                  'athienot@gmail.com',
//                  'marwan.burelle@lse.epita.fr',
//                  'stephane.descaves@laposte.net',
//                  'neil@minkley.fr',
//                  'rembowskijan@gmail.com',
//                  'olivierberthet@outlook.com',
//                  'abdelfattah.rochdi@yahoo.fr',
//                  'axe.ullern@gmail.com',
//                  'jeansebastien.prost@free.fr',
//                  'chrysolin.brabant@ehoconseil.com',
//                  'sylvieappriou@gmail.com',
//                  'alice.million@epita.fr',
//                  'laurent.trebulle@epita.net',
//                  'sylvie@cross-roads-communication.com',
//                  'celia.fernandez@epita.fr',
//                  'bonjf@math-info.univ-paris5.fr',
//                  'thomas.broussard@gmail.com',
//                  'osman.salem@parisdescartes.fr',
//                  'y.gal.fr@gmail.com',
//                  'eunika@innovation3d.fr',
//                  'Thierry.JOUBERT@theoris.fr',
//                  'david.menager@3ie.fr',
//                  'jjuzcateguir@gmail.com',
//                  'anne-sophie.pachet@epita.fr',
//                  'robert.erra@epita.fr',
//                  'mohammadsalmannadeem@gmail.com'
//                ];
//        $phonenumber = '';
//        $salutation = [2, 2,2,1,2,2,2,1,2,2,2,2,2,2,1,1,1,2,1,1,2,2,2,2,1,2,2,2,1,2,2];
//        $firstname = ['Hadi', 
//                      'Erik', 
//                      'Geraud',
//                      'Anne-Pierre',
//                      'Rabih',
//                      'Alain',
//                      'Marwan',
//                      'Stephane',
//                      'Neil',
//                      'Jan',
//                      'Olivier',
//                      'Abdelfattah',
//                      'Axel',
//                      'Jean-Sebastien',
//                      'Chrysoline',
//                      'Sylvie',
//                      'Alice',
//                      'Laurent',
//                      'Sylvie',
//                      'Celia',
//                      'Jean-Francois',
//                      'Thomas',
//                      'Osman',
//                      'Yossi',
//                      'Eunika',
//                      'Thierry',
//                      'David',
//                      'Juan',
//                      'Anne-Sophie',
//                      'Robert',
//                      'Mohammad-Salman'                      
//                     ];
//        $lastname = [ 'EL-KHOURY', 
//                      'ABLESON', 
//                      'DE-DROUAS',
//                      'De-PEYRONNET',
//                      'HADDAD',
//                      'THIENOT',
//                      'BURELLE',
//                      'DESCAVES',
//                      'MINKLEY',
//                      'REMBOWSKI',
//                      'BERTHET',
//                      'ROCHDI',
//                      'ULLERN',
//                      'PROST',
//                      'BRABANT',
//                      'APPRIOU',
//                      'MILLION',
//                      'TREBULLE',
//                      'TOURNIER',
//                      'FERNANDEZ',
//                      'BONNET',
//                      'BROUSSARD',
//                      'SALEM',
//                      'GAL',
//                      'MERCIER-LAURENT',
//                      'JOUBERT',
//                      'MENAGER',
//                      'UZCATEGUI',
//                      'PACHET',
//                      'ERRA',
//                      'NADEEM'                      
//                     ];
//        
//        $addressline1 = '';
//        $addressline2 = '';
//        $city = '';
//        $zipcode = '';
//        $country = 'FRANCE' 
//                ;
//
//        for ($i = 0; $i < count($username); $i++) {
//            $instructorAdmin = new Instructor();
//
//            $instructorAdmin->setUsername($username[$i]);
//            
//            $encoder = $this->container->get('security.password_encoder');
//            $password = $encoder->encodePassword($instructorAdmin, 'epitacourse');
//            $instructorAdmin->setPassword($password);
//            
//            $instructorAdmin->setEmail($email[$i]);
//            $instructorAdmin->setPhonenumber($phonenumber);
//            $instructorAdmin->setSalutation($salutation[$i]);
//            $instructorAdmin->setFirstname($firstname[$i]);
//            $instructorAdmin->setLastname($lastname[$i]);
//            $instructorAdmin->setAddressline1($addressline1);
//            $instructorAdmin->setAddressline2($addressline2);
//            $instructorAdmin->setCity($city);
//            $instructorAdmin->setZipcode($zipcode);
//            $instructorAdmin->setCountry($country);
//            $instructorAdmin->setEnabled(true);
//            
//            $manager->persist($instructorAdmin);
//            $manager->flush();
//
//            $this->addReference('admin-instructor'.$i, $instructorAdmin);
//        }
    }

    public function getOrder() {
        return 3;
    }
}
