<?php

namespace Level\AppBundle\Controller;

use Level\AppBundle\Form\Type\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(): Response
    {
        $form = $this->createForm(CalculatorType::class);
        return $this->render(
            '@LevelApp\Default\index.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }
}
