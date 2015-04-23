<?php
/**
 * Created by PhpStorm.
 * User: vincentferniot
 * Date: 23/04/15
 * Time: 21:53
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/user/{id}", name="user")
     */
    public function userAction($id)
    {
        $user = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:User')
            ->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Ce camion pizza n\'existe pas');
        }

        return $this->render(
            'user.html.twig',
            array('user' => $user)
        );
    }
}
