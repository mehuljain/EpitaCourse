<?php

namespace EpitaCourseBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EpitaCourseBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
