<?php
/**
 * User: dje_O
 * Date: 18/05/2020.
 */

namespace Sheeptizent\LicornesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    public function index()
    {
        $data = $this->render('base.html.twig');
        return new Response($data);
    }
}
