<?php

namespace Philippe\UserWidgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as EXT;

class UserWidgetController extends Controller
{
    /**
     * @EXT\Route("/index", name="philippe_userwidget_index")
     * @EXT\Template
     *
     * @return Response
     */
    public function indexAction()
    {
        throw new \Exception('hello');
    }
}
