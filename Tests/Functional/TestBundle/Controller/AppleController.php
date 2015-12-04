<?php

namespace JMS\TranslationBundle\Tests\Functional\TestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/apples")
 *
 * @author Johannes
 */
class AppleController
{
    /**
     * @Route("/view")
     * @Template
     */
    public function viewAction()
    {
        return ['nbApples' => 5];
    }
}
