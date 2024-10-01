<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GraphQLController extends AbstractController
{
    public function playground(): Response
    {
        return $this->render('graphql/playground.html.twig');
    }
}