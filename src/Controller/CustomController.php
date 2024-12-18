<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\TwigFunction;
use Twig\Environment;

abstract class CustomController extends AbstractController
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;

        $this->twig->addFunction(new TwigFunction('file_get_contents', function ($filename) {
            return file_get_contents($filename);
        }));
    }
}

