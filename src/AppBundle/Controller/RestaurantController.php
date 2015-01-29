<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Restaurant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class RestaurantController extends FOSRestController
{
    /**
     * @Route("/restaurants", name="restaurants")
     */
    public function indexAction()
    {
        return $this->render('restaurants.html.twig');
    }

    /**
     * Collection get action
     * @var Request $request
     * @return array
     *
     * @ApiDoc(
     *  resource=true,
     *  description="Retroune la liste de tous les restaurants",
     *  filters={
     *      {"name"="a-filter", "dataType"="integer"},
     *      {"name"="another-filter", "dataType"="string", "pattern"="(foo|bar) ASC|DESC"}
     *  }
     * )
     */
    public function getRestaurantsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Restaurant')->findAll();

        return array(
            'restaurants' => $entities,
        );
    }

    /**
     * Get entity instance
     * @var integer $id Id of the entity
     * @return Restaurant
     *
     * @ApiDoc(
     *  resource=true,
     *  description="This is a description of your API method",
     *  filters={
     *      {"name"="a-filter", "dataType"="integer"},
     *      {"name"="another-filter", "dataType"="string", "pattern"="(foo|bar) ASC|DESC"}
     *  },
     * requirements={
     *      {
     *          "name"="limit",
     *          "dataType"="integer",
     *          "requirement"="\d+",
     *          "description"="how many objects to return"
     *      }
     *  },
     *  parameters={
     *      {"name"="categoryId", "dataType"="integer", "required"=true, "description"="category id"}
     *  }
     * )
     *
     * @Route("/restaurants/{id}", name="restaurant")
     */
    public function getRestaurantAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Restaurant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find restaurant entity');
        }

        return $entity;
    }
}
