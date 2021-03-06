<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) : Response
    {
        return $this->render('index.html.twig', [
            'title' => 'test',
        ]);
    }
}
