<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
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
     * @var Company
     *
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="company")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $company;

    /**
     * @var ProductCategory
     *
     * @ORM\ManyToOne(targetEntity="ProductCategory", inversedBy="product_category")
     * @ORM\JoinColumn(name="product_category_id", referencedColumnName="id")
     */
    private $productCatgeory;

    /**
     * @var ProductTag
     * @ORM\OneToMany(targetEntity="ProductTag", mappedBy="product")
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

    /**
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return Product
     */
    public function setCompany(\AppBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \AppBundle\Entity\Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set productCatgeory
     *
     * @param \AppBundle\Entity\ProductCategory $productCatgeory
     *
     * @return Product
     */
    public function setProductCatgeory(\AppBundle\Entity\ProductCategory $productCatgeory = null)
    {
        $this->productCatgeory = $productCatgeory;

        return $this;
    }

    /**
     * Get productCatgeory
     *
     * @return \AppBundle\Entity\ProductCategory
     */
    public function getProductCatgeory()
    {
        return $this->productCatgeory;
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
     * @return Product
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
