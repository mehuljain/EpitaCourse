<?php

namespace EpitaCourseBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EpitaCourseBundle\Entity\Program;

class LoadProgramData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $program = ['ME','MSc','ME and MSc' ];

        for ($i = 0; $i < count($program); $i++) {
            $programAdmin = new Program();
            $programAdmin->setProgramname($program[$i]);

            $manager->persist($programAdmin);
            $manager->flush();

            $this->addReference('admin-program'.$i, $programAdmin);
        }
    }

    public function getOrder() {
        return 1;
    }

}
