<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity
 */
class Company
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
     * @var integer
     *
     * @ORM\Column(name="siret", type="integer")
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="logo_path", type="string", length=500)
     */
    private $logoPath;

    /**
     * @var string
     *
     * @ORM\Column(name="image_path", type="string", length=500)
     */
    private $imagePath;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User", inversedBy="user")
     */
    private $user;

    /**
     * @var Vacation
     * @ORM\OneToMany(targetEntity="Vacation", mappedBy="company")
     */
    private $vacation;

    /**
     * @var Product
     * @ORM\OneToMany(targetEntity="Product", mappedBy="company")
     */
    private $product;

    /**
     * @var Period
     * @ORM\OneToMany(targetEntity="Period", mappedBy="company")
     */
    private $period;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $address;


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
     * @return Company
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
     * Set siret
     *
     * @param integer $siret
     * @return Company
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return integer 
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set logoPath
     *
     * @param string $logoPath
     * @return Company
     */
    public function setLogoPath($logoPath)
    {
        $this->logoPath = $logoPath;

        return $this;
    }

    /**
     * Get logoPath
     *
     * @return string 
     */
    public function getLogoPath()
    {
        return $this->logoPath;
    }

    /**
     * Set imagePath
     *
     * @param string $imagePath
     * @return Company
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
     * Set description
     *
     * @param string $description
     * @return Company
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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return $this
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vacation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add vacation
     *
     * @param \AppBundle\Entity\Vacation $vacation
     *
     * @return Company
     */
    public function addVacation(\AppBundle\Entity\Vacation $vacation)
    {
        $this->vacation[] = $vacation;

        return $this;
    }

    /**
     * Remove vacation
     *
     * @param \AppBundle\Entity\Vacation $vacation
     */
    public function removeVacation(\AppBundle\Entity\Vacation $vacation)
    {
        $this->vacation->removeElement($vacation);
    }

    /**
     * Get vacation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVacation()
    {
        return $this->vacation;
    }

    /**
     * Add product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return Company
     */
    public function addProduct(\AppBundle\Entity\Product $product)
    {
        $this->product[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \AppBundle\Entity\Product $product
     */
    public function removeProduct(\AppBundle\Entity\Product $product)
    {
        $this->product->removeElement($product);
    }

    /**
     * Get product
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Add period
     *
     * @param \AppBundle\Entity\Period $period
     *
     * @return Company
     */
    public function addPeriod(\AppBundle\Entity\Period $period)
    {
        $this->period[] = $period;

        return $this;
    }

    /**
     * Remove period
     *
     * @param \AppBundle\Entity\Period $period
     */
    public function removePeriod(\AppBundle\Entity\Period $period)
    {
        $this->period->removeElement($period);
    }

    /**
     * Get period
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set address
     *
     * @param \AppBundle\Entity\Address $address
     *
     * @return Company
     */
    public function setAddress(\AppBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AppBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
}
