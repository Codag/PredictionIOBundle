<?php

namespace PredictionIO\PredictionIOBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/predictionio/example")
     * @Template()
     */
    public function indexAction()
    {
        $client = $this->get('predictionio')->getClient();
        var_dump($client);

        return array();
    }
}
