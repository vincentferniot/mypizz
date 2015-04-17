<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity
 */
class Tag
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
     * @ORM\Column(name="image_path", type="string", length=500)
     */
    private $imagePath;

    /**
     * @var ProductTag
     * @ORM\OneToMany(targetEntity="ProductTag", mappedBy="tag")
     */
    private $productTag;


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
     * @return Tag
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
     * @return Tag
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
     * Set imagePath
     *
     * @param string $imagePath
     * @return Tag
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productTag = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add productTag
     *
     * @param \AppBundle\Entity\ProductTag $productTag
     *
     * @return Tag
     */
    public function addProductTag(\AppBundle\Entity\ProductTag $productTag)
    {
        $this->productTag[] = $productTag;

        return $this;
    }

    /**
     * Remove productTag
     *
     * @param \AppBundle\Entity\ProductTag $productTag
     */
    public function removeProductTag(\AppBundle\Entity\ProductTag $productTag)
    {
        $this->productTag->removeElement($productTag);
    }

    /**
     * Get productTag
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductTag()
    {
        return $this->productTag;
    }
}
