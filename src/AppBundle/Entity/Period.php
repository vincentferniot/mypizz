<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Period
 *
 * @ORM\Table(name="period")
 * @ORM\Entity
 */
class Period
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
     * @var \DateTime
     *
     * @ORM\Column(name="from_date", type="date")
     */
    private $fromDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="to_date", type="date")
     */
    private $toDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mon_lunch_from", type="time")
     */
    private $monLunchFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mon_lunch_to", type="time")
     */
    private $monLunchTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $monLunchAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mon_dinner_from", type="time")
     */
    private $monDinnerFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mon_dinner_to", type="time")
     */
    private $monDinnerTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $monDinnerAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tue_lunch_from", type="time")
     */
    private $tueLunchFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tue_lunch_to", type="time")
     */
    private $tueLunchTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $tueLunchAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tue_dinner_from", type="time")
     */
    private $tueDinnerFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tue_dinner_to", type="time")
     */
    private $tueDinnerTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $tueDinnerAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wed_lunch_from", type="time")
     */
    private $wedLunchFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wed_lunch_to", type="time")
     */
    private $wedLunchTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $wedLunchAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wed_dinner_from", type="time")
     */
    private $wedDinnerFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wed_dinner_to", type="time")
     */
    private $wedDinnerTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $wedDinnerAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thu_lunch_from", type="time")
     */
    private $thuLunchFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thu_lunch_to", type="time")
     */
    private $thuLunchTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $thuLunchAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thu_dinner_from", type="time")
     */
    private $thuDinnerFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thu_dinner_to", type="time")
     */
    private $thuDinnerTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $thuDinnerAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fri_lunch_from", type="time")
     */
    private $friLunchFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fri_lunch_to", type="time")
     */
    private $friLunchTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $friLunchAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fri_dinner_from", type="time")
     */
    private $friDinnerFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fri_dinner_to", type="time")
     */
    private $friDinnerTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $friDinnerAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sat_lunch_from", type="time")
     */
    private $satLunchFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sat_lunch_to", type="time")
     */
    private $satLunchTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $satLunchAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sat_dinner_from", type="time")
     */
    private $satDinnerFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sat_dinner_to", type="time")
     */
    private $satDinnerTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $satDinnerAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sun_lunch_from", type="time")
     */
    private $sunLunchFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sun_lunch_to", type="time")
     */
    private $sunLunchTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $sunLunchAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sun_dinner_from", type="time")
     */
    private $sunDinnerFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sun_dinner_to", type="time")
     */
    private $sunDinnerTo;

    /**
     * @var Address
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $sunDinnerAddress;

    /**
     * @var Company
     *
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="company")
     */
    private $company;


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
     * Set fromDate
     *
     * @param \DateTime $fromDate
     * @return Period
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * Get fromDate
     *
     * @return \DateTime 
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Set toDate
     *
     * @param \DateTime $toDate
     * @return Period
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;

        return $this;
    }

    /**
     * Get toDate
     *
     * @return \DateTime 
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Set monLunchFrom
     *
     * @param \DateTime $monLunchFrom
     * @return Period
     */
    public function setMonLunchFrom($monLunchFrom)
    {
        $this->monLunchFrom = $monLunchFrom;

        return $this;
    }

    /**
     * Get monLunchFrom
     *
     * @return \DateTime 
     */
    public function getMonLunchFrom()
    {
        return $this->monLunchFrom;
    }

    /**
     * Set monLunchTo
     *
     * @param \DateTime $monLunchTo
     * @return Period
     */
    public function setMonLunchTo($monLunchTo)
    {
        $this->monLunchTo = $monLunchTo;

        return $this;
    }

    /**
     * Get monLunchTo
     *
     * @return \DateTime 
     */
    public function getMonLunchTo()
    {
        return $this->monLunchTo;
    }

    /**
     * Set monDinnerFrom
     *
     * @param \DateTime $monDinnerFrom
     * @return Period
     */
    public function setMonDinnerFrom($monDinnerFrom)
    {
        $this->monDinnerFrom = $monDinnerFrom;

        return $this;
    }

    /**
     * Get monDinnerFrom
     *
     * @return \DateTime 
     */
    public function getMonDinnerFrom()
    {
        return $this->monDinnerFrom;
    }

    /**
     * Set monDinnerTo
     *
     * @param \DateTime $monDinnerTo
     * @return Period
     */
    public function setMonDinnerTo($monDinnerTo)
    {
        $this->monDinnerTo = $monDinnerTo;

        return $this;
    }

    /**
     * Get monDinnerTo
     *
     * @return \DateTime 
     */
    public function getMonDinnerTo()
    {
        return $this->monDinnerTo;
    }

    /**
     * Set tueLunchFrom
     *
     * @param \DateTime $tueLunchFrom
     * @return Period
     */
    public function setTueLunchFrom($tueLunchFrom)
    {
        $this->tueLunchFrom = $tueLunchFrom;

        return $this;
    }

    /**
     * Get tueLunchFrom
     *
     * @return \DateTime 
     */
    public function getTueLunchFrom()
    {
        return $this->tueLunchFrom;
    }

    /**
     * Set tueLunchTo
     *
     * @param \DateTime $tueLunchTo
     * @return Period
     */
    public function setTueLunchTo($tueLunchTo)
    {
        $this->tueLunchTo = $tueLunchTo;

        return $this;
    }

    /**
     * Get tueLunchTo
     *
     * @return \DateTime 
     */
    public function getTueLunchTo()
    {
        return $this->tueLunchTo;
    }

    /**
     * Set tueDinnerFrom
     *
     * @param \DateTime $tueDinnerFrom
     * @return Period
     */
    public function setTueDinnerFrom($tueDinnerFrom)
    {
        $this->tueDinnerFrom = $tueDinnerFrom;

        return $this;
    }

    /**
     * Get tueDinnerFrom
     *
     * @return \DateTime 
     */
    public function getTueDinnerFrom()
    {
        return $this->tueDinnerFrom;
    }

    /**
     * Set tueDinnerTo
     *
     * @param \DateTime $tueDinnerTo
     * @return Period
     */
    public function setTueDinnerTo($tueDinnerTo)
    {
        $this->tueDinnerTo = $tueDinnerTo;

        return $this;
    }

    /**
     * Get tueDinnerTo
     *
     * @return \DateTime 
     */
    public function getTueDinnerTo()
    {
        return $this->tueDinnerTo;
    }

    /**
     * Set wedLunchFrom
     *
     * @param \DateTime $wedLunchFrom
     * @return Period
     */
    public function setWedLunchFrom($wedLunchFrom)
    {
        $this->wedLunchFrom = $wedLunchFrom;

        return $this;
    }

    /**
     * Get wedLunchFrom
     *
     * @return \DateTime 
     */
    public function getWedLunchFrom()
    {
        return $this->wedLunchFrom;
    }

    /**
     * Set wedLunchTo
     *
     * @param \DateTime $wedLunchTo
     * @return Period
     */
    public function setWedLunchTo($wedLunchTo)
    {
        $this->wedLunchTo = $wedLunchTo;

        return $this;
    }

    /**
     * Get wedLunchTo
     *
     * @return \DateTime 
     */
    public function getWedLunchTo()
    {
        return $this->wedLunchTo;
    }

    /**
     * Set wedDinnerFrom
     *
     * @param \DateTime $wedDinnerFrom
     * @return Period
     */
    public function setWedDinnerFrom($wedDinnerFrom)
    {
        $this->wedDinnerFrom = $wedDinnerFrom;

        return $this;
    }

    /**
     * Get wedDinnerFrom
     *
     * @return \DateTime 
     */
    public function getWedDinnerFrom()
    {
        return $this->wedDinnerFrom;
    }

    /**
     * Set wedDinnerTo
     *
     * @param \DateTime $wedDinnerTo
     * @return Period
     */
    public function setWedDinnerTo($wedDinnerTo)
    {
        $this->wedDinnerTo = $wedDinnerTo;

        return $this;
    }

    /**
     * Get wedDinnerTo
     *
     * @return \DateTime 
     */
    public function getWedDinnerTo()
    {
        return $this->wedDinnerTo;
    }

    /**
     * Set thuLunchFrom
     *
     * @param \DateTime $thuLunchFrom
     * @return Period
     */
    public function setThuLunchFrom($thuLunchFrom)
    {
        $this->thuLunchFrom = $thuLunchFrom;

        return $this;
    }

    /**
     * Get thuLunchFrom
     *
     * @return \DateTime 
     */
    public function getThuLunchFrom()
    {
        return $this->thuLunchFrom;
    }

    /**
     * Set thuLunchTo
     *
     * @param \DateTime $thuLunchTo
     * @return Period
     */
    public function setThuLunchTo($thuLunchTo)
    {
        $this->thuLunchTo = $thuLunchTo;

        return $this;
    }

    /**
     * Get thuLunchTo
     *
     * @return \DateTime 
     */
    public function getThuLunchTo()
    {
        return $this->thuLunchTo;
    }

    /**
     * Set thuDinnerFrom
     *
     * @param \DateTime $thuDinnerFrom
     * @return Period
     */
    public function setThuDinnerFrom($thuDinnerFrom)
    {
        $this->thuDinnerFrom = $thuDinnerFrom;

        return $this;
    }

    /**
     * Get thuDinnerFrom
     *
     * @return \DateTime 
     */
    public function getThuDinnerFrom()
    {
        return $this->thuDinnerFrom;
    }

    /**
     * Set thuDinnerTo
     *
     * @param \DateTime $thuDinnerTo
     * @return Period
     */
    public function setThuDinnerTo($thuDinnerTo)
    {
        $this->thuDinnerTo = $thuDinnerTo;

        return $this;
    }

    /**
     * Get thuDinnerTo
     *
     * @return \DateTime 
     */
    public function getThuDinnerTo()
    {
        return $this->thuDinnerTo;
    }

    /**
     * Set friLunchFrom
     *
     * @param \DateTime $friLunchFrom
     * @return Period
     */
    public function setFriLunchFrom($friLunchFrom)
    {
        $this->friLunchFrom = $friLunchFrom;

        return $this;
    }

    /**
     * Get friLunchFrom
     *
     * @return \DateTime 
     */
    public function getFriLunchFrom()
    {
        return $this->friLunchFrom;
    }

    /**
     * Set friLunchTo
     *
     * @param \DateTime $friLunchTo
     * @return Period
     */
    public function setFriLunchTo($friLunchTo)
    {
        $this->friLunchTo = $friLunchTo;

        return $this;
    }

    /**
     * Get friLunchTo
     *
     * @return \DateTime 
     */
    public function getFriLunchTo()
    {
        return $this->friLunchTo;
    }

    /**
     * Set friDinnerFrom
     *
     * @param \DateTime $friDinnerFrom
     * @return Period
     */
    public function setFriDinnerFrom($friDinnerFrom)
    {
        $this->friDinnerFrom = $friDinnerFrom;

        return $this;
    }

    /**
     * Get friDinnerFrom
     *
     * @return \DateTime 
     */
    public function getFriDinnerFrom()
    {
        return $this->friDinnerFrom;
    }

    /**
     * Set friDinnerTo
     *
     * @param \DateTime $friDinnerTo
     * @return Period
     */
    public function setFriDinnerTo($friDinnerTo)
    {
        $this->friDinnerTo = $friDinnerTo;

        return $this;
    }

    /**
     * Get friDinnerTo
     *
     * @return \DateTime 
     */
    public function getFriDinnerTo()
    {
        return $this->friDinnerTo;
    }

    /**
     * Set satLunchFrom
     *
     * @param \DateTime $satLunchFrom
     * @return Period
     */
    public function setSatLunchFrom($satLunchFrom)
    {
        $this->satLunchFrom = $satLunchFrom;

        return $this;
    }

    /**
     * Get satLunchFrom
     *
     * @return \DateTime 
     */
    public function getSatLunchFrom()
    {
        return $this->satLunchFrom;
    }

    /**
     * Set satLunchTo
     *
     * @param \DateTime $satLunchTo
     * @return Period
     */
    public function setSatLunchTo($satLunchTo)
    {
        $this->satLunchTo = $satLunchTo;

        return $this;
    }

    /**
     * Get satLunchTo
     *
     * @return \DateTime 
     */
    public function getSatLunchTo()
    {
        return $this->satLunchTo;
    }

    /**
     * Set satDinnerFrom
     *
     * @param \DateTime $satDinnerFrom
     * @return Period
     */
    public function setSatDinnerFrom($satDinnerFrom)
    {
        $this->satDinnerFrom = $satDinnerFrom;

        return $this;
    }

    /**
     * Get satDinnerFrom
     *
     * @return \DateTime 
     */
    public function getSatDinnerFrom()
    {
        return $this->satDinnerFrom;
    }

    /**
     * Set satDinnerTo
     *
     * @param \DateTime $satDinnerTo
     * @return Period
     */
    public function setSatDinnerTo($satDinnerTo)
    {
        $this->satDinnerTo = $satDinnerTo;

        return $this;
    }

    /**
     * Get satDinnerTo
     *
     * @return \DateTime 
     */
    public function getSatDinnerTo()
    {
        return $this->satDinnerTo;
    }

    /**
     * Set sunLunchFrom
     *
     * @param \DateTime $sunLunchFrom
     * @return Period
     */
    public function setSunLunchFrom($sunLunchFrom)
    {
        $this->sunLunchFrom = $sunLunchFrom;

        return $this;
    }

    /**
     * Get sunLunchFrom
     *
     * @return \DateTime 
     */
    public function getSunLunchFrom()
    {
        return $this->sunLunchFrom;
    }

    /**
     * Set sunLunchTo
     *
     * @param \DateTime $sunLunchTo
     * @return Period
     */
    public function setSunLunchTo($sunLunchTo)
    {
        $this->sunLunchTo = $sunLunchTo;

        return $this;
    }

    /**
     * Get sunLunchTo
     *
     * @return \DateTime 
     */
    public function getSunLunchTo()
    {
        return $this->sunLunchTo;
    }

    /**
     * Set sunDinnerFrom
     *
     * @param \DateTime $sunDinnerFrom
     * @return Period
     */
    public function setSunDinnerFrom($sunDinnerFrom)
    {
        $this->sunDinnerFrom = $sunDinnerFrom;

        return $this;
    }

    /**
     * Get sunDinnerFrom
     *
     * @return \DateTime 
     */
    public function getSunDinnerFrom()
    {
        return $this->sunDinnerFrom;
    }

    /**
     * Set sunDinnerTo
     *
     * @param \DateTime $sunDinnerTo
     * @return Period
     */
    public function setSunDinnerTo($sunDinnerTo)
    {
        $this->sunDinnerTo = $sunDinnerTo;

        return $this;
    }

    /**
     * Get sunDinnerTo
     *
     * @return \DateTime 
     */
    public function getSunDinnerTo()
    {
        return $this->sunDinnerTo;
    }

    /**
     * Set monLunchAddress
     *
     * @param \AppBundle\Entity\Address $monLunchAddress
     *
     * @return Period
     */
    public function setMonLunchAddress(\AppBundle\Entity\Address $monLunchAddress = null)
    {
        $this->monLunchAddress = $monLunchAddress;

        return $this;
    }

    /**
     * Get monLunchAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getMonLunchAddress()
    {
        return $this->monLunchAddress;
    }

    /**
     * Set monDinnerAddress
     *
     * @param \AppBundle\Entity\Address $monDinnerAddress
     *
     * @return Period
     */
    public function setMonDinnerAddress(\AppBundle\Entity\Address $monDinnerAddress = null)
    {
        $this->monDinnerAddress = $monDinnerAddress;

        return $this;
    }

    /**
     * Get monDinnerAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getMonDinnerAddress()
    {
        return $this->monDinnerAddress;
    }

    /**
     * Set tueLunchAddress
     *
     * @param \AppBundle\Entity\Address $tueLunchAddress
     *
     * @return Period
     */
    public function setTueLunchAddress(\AppBundle\Entity\Address $tueLunchAddress = null)
    {
        $this->tueLunchAddress = $tueLunchAddress;

        return $this;
    }

    /**
     * Get tueLunchAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getTueLunchAddress()
    {
        return $this->tueLunchAddress;
    }

    /**
     * Set tueDinnerAddress
     *
     * @param \AppBundle\Entity\Address $tueDinnerAddress
     *
     * @return Period
     */
    public function setTueDinnerAddress(\AppBundle\Entity\Address $tueDinnerAddress = null)
    {
        $this->tueDinnerAddress = $tueDinnerAddress;

        return $this;
    }

    /**
     * Get tueDinnerAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getTueDinnerAddress()
    {
        return $this->tueDinnerAddress;
    }

    /**
     * Set wedLunchAddress
     *
     * @param \AppBundle\Entity\Address $wedLunchAddress
     *
     * @return Period
     */
    public function setWedLunchAddress(\AppBundle\Entity\Address $wedLunchAddress = null)
    {
        $this->wedLunchAddress = $wedLunchAddress;

        return $this;
    }

    /**
     * Get wedLunchAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getWedLunchAddress()
    {
        return $this->wedLunchAddress;
    }

    /**
     * Set wedDinnerAddress
     *
     * @param \AppBundle\Entity\Address $wedDinnerAddress
     *
     * @return Period
     */
    public function setWedDinnerAddress(\AppBundle\Entity\Address $wedDinnerAddress = null)
    {
        $this->wedDinnerAddress = $wedDinnerAddress;

        return $this;
    }

    /**
     * Get wedDinnerAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getWedDinnerAddress()
    {
        return $this->wedDinnerAddress;
    }

    /**
     * Set thuLunchAddress
     *
     * @param \AppBundle\Entity\Address $thuLunchAddress
     *
     * @return Period
     */
    public function setThuLunchAddress(\AppBundle\Entity\Address $thuLunchAddress = null)
    {
        $this->thuLunchAddress = $thuLunchAddress;

        return $this;
    }

    /**
     * Get thuLunchAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getThuLunchAddress()
    {
        return $this->thuLunchAddress;
    }

    /**
     * Set thuDinnerAddress
     *
     * @param \AppBundle\Entity\Address $thuDinnerAddress
     *
     * @return Period
     */
    public function setThuDinnerAddress(\AppBundle\Entity\Address $thuDinnerAddress = null)
    {
        $this->thuDinnerAddress = $thuDinnerAddress;

        return $this;
    }

    /**
     * Get thuDinnerAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getThuDinnerAddress()
    {
        return $this->thuDinnerAddress;
    }

    /**
     * Set friLunchAddress
     *
     * @param \AppBundle\Entity\Address $friLunchAddress
     *
     * @return Period
     */
    public function setFriLunchAddress(\AppBundle\Entity\Address $friLunchAddress = null)
    {
        $this->friLunchAddress = $friLunchAddress;

        return $this;
    }

    /**
     * Get friLunchAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getFriLunchAddress()
    {
        return $this->friLunchAddress;
    }

    /**
     * Set friDinnerAddress
     *
     * @param \AppBundle\Entity\Address $friDinnerAddress
     *
     * @return Period
     */
    public function setFriDinnerAddress(\AppBundle\Entity\Address $friDinnerAddress = null)
    {
        $this->friDinnerAddress = $friDinnerAddress;

        return $this;
    }

    /**
     * Get friDinnerAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getFriDinnerAddress()
    {
        return $this->friDinnerAddress;
    }

    /**
     * Set satLunchAddress
     *
     * @param \AppBundle\Entity\Address $satLunchAddress
     *
     * @return Period
     */
    public function setSatLunchAddress(\AppBundle\Entity\Address $satLunchAddress = null)
    {
        $this->satLunchAddress = $satLunchAddress;

        return $this;
    }

    /**
     * Get satLunchAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getSatLunchAddress()
    {
        return $this->satLunchAddress;
    }

    /**
     * Set satDinnerAddress
     *
     * @param \AppBundle\Entity\Address $satDinnerAddress
     *
     * @return Period
     */
    public function setSatDinnerAddress(\AppBundle\Entity\Address $satDinnerAddress = null)
    {
        $this->satDinnerAddress = $satDinnerAddress;

        return $this;
    }

    /**
     * Get satDinnerAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getSatDinnerAddress()
    {
        return $this->satDinnerAddress;
    }

    /**
     * Set sunLunchAddress
     *
     * @param \AppBundle\Entity\Address $sunLunchAddress
     *
     * @return Period
     */
    public function setSunLunchAddress(\AppBundle\Entity\Address $sunLunchAddress = null)
    {
        $this->sunLunchAddress = $sunLunchAddress;

        return $this;
    }

    /**
     * Get sunLunchAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getSunLunchAddress()
    {
        return $this->sunLunchAddress;
    }

    /**
     * Set sunDinnerAddress
     *
     * @param \AppBundle\Entity\Address $sunDinnerAddress
     *
     * @return Period
     */
    public function setSunDinnerAddress(\AppBundle\Entity\Address $sunDinnerAddress = null)
    {
        $this->sunDinnerAddress = $sunDinnerAddress;

        return $this;
    }

    /**
     * Get sunDinnerAddress
     *
     * @return \AppBundle\Entity\Address
     */
    public function getSunDinnerAddress()
    {
        return $this->sunDinnerAddress;
    }

    /**
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return Period
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
}
