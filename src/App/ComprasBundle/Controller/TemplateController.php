<?php


namespace App\ComprasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TemplateController extends Controller
{
    public function showAction()
    {
        return $this->render('AppComprasBundle:Template:index.html.twig');
    }
}