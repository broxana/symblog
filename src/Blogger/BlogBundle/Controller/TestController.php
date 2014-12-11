<?php
/**
 * Created by PhpStorm.
 * User: danvbe
 * Date: 12/9/14
 * Time: 4:34 PM
 */

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller {

    public function action1Action(){
        //...
        return $this->render('BloggerBlogBundle:Test:action1.html.twig');
    }
} 