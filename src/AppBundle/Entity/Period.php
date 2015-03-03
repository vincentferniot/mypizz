<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Period
 *
 * @ORM\Table()
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
}
