<?php
/**
 * Created by PhpStorm.
 * User: annikawolff
 * Date: 18.02.19
 * Time: 15:01
 */

namespace HelloWorld\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        print_r($twig);
      

        return $twig->render('HelloWorld::content.hello');
    }
}
