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
   
        $data = [
            'text' => "Dieser Text wird ans Template übergeben, yay 1234 <div>hallo</div>"
        ];

        return $twig->render('HelloWorld::content.hello', $data);
    }

    public function sayBye(Twig $twig):string
    {
        return $twig->render('HelloWorld::content.goodbye');
    }
}
