<?php

namespace EpitaCourseBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EpitaCourseBundle\Entity\Specialization;

class LoadSpecializationData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
//        $specialization = ['FUND', 'FUND_HARMO', 'GITM', 'GITM_ISM', 'GITM_SDM_SNS', 
//                           'HARMO', 'ISM_SE_CS', 'SDM', 'SDM_SE', 'SE', 'SNS', 'SNS_CSCS_SNS'];
          $specialization = ['FUND', 'FUND_HARMO', 'GITM'];
        
        for ($i = 0; $i < count($specialization); $i++) {
            $specializationAdmin = new Specialization();
            $specializationAdmin->setSpecializationname($specialization[$i]);

            $manager->persist($specializationAdmin);
            $manager->flush();

            $this->addReference('admin-specialization'.$i, $specializationAdmin);
        }
    }

    public function getOrder() {
        return 2;
    }

}
