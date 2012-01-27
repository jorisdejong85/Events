<?php

namespace Ez\EventsBundle\Controller;

use Ez\ToolsBundle\Controller\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("")
 */
class EventsController extends BaseController
{
    
    /**
     * @Route("/{_locale}/", defaults={"_locale"=""}, requirements={"_locale"="en|nl"})
     * @Route("/", defaults={"_locale"=""})
     * @Template()
     */
    public function indexAction()
    {
        $events = $this->getRepo('Event','EventsBundle')->findAll();
        return get_defined_vars();
    }
    
}