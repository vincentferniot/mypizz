<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="price_simple", type="decimal")
     */
    private $priceSimple;

    /**
     * @var string
     *
     * @ORM\Column(name="price_double", type="decimal")
     */
    private $priceDouble;

    /**
     * @var string
     *
     * @ORM\Column(name="image_path", type="string", length=500)
     */
    private $imagePath;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set priceSimple
     *
     * @param string $priceSimple
     * @return Product
     */
    public function setPriceSimple($priceSimple)
    {
        $this->priceSimple = $priceSimple;

        return $this;
    }

    /**
     * Get priceSimple
     *
     * @return string 
     */
    public function getPriceSimple()
    {
        return $this->priceSimple;
    }

    /**
     * Set priceDouble
     *
     * @param string $priceDouble
     * @return Product
     */
    public function setPriceDouble($priceDouble)
    {
        $this->priceDouble = $priceDouble;

        return $this;
    }

    /**
     * Get priceDouble
     *
     * @return string 
     */
    public function getPriceDouble()
    {
        return $this->priceDouble;
    }

    /**
     * Set imagePath
     *
     * @param string $imagePath
     * @return Product
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    /**
     * Get imagePath
     *
     * @return string 
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }
}