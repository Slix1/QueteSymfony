<?php

namespace WCS\CoavBundle\Entity;

/**
 * Flight
 */
class Flight
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $departure;

    /**
     * @var string
     */
    private $arrival;

    /**
     * @var string
     */
    private $pilot;

    /**
     * @var int
     */
    private $freeSeats;

    /**
     * @var \DateTime
     */
    private $tokeofTime;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set departure
     *
     * @param string $departure
     *
     * @return Flight
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     *
     * @return Flight
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     *
     * @return Flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set freeSeats
     *
     * @param integer $freeSeats
     *
     * @return Flight
     */
    public function setFreeSeats($freeSeats)
    {
        $this->freeSeats = $freeSeats;

        return $this;
    }

    /**
     * Get freeSeats
     *
     * @return int
     */
    public function getFreeSeats()
    {
        return $this->freeSeats;
    }

    /**
     * Set tokeofTime
     *
     * @param \DateTime $tokeofTime
     *
     * @return Flight
     */
    public function setTokeofTime($tokeofTime)
    {
        $this->tokeofTime = $tokeofTime;

        return $this;
    }

    /**
     * Get tokeofTime
     *
     * @return \DateTime
     */
    public function getTokeofTime()
    {
        return $this->tokeofTime;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $vols;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vols = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add vol
     *
     * @param \WCS\CoavBundle\Entity\Reservation $vol
     *
     * @return Flight
     */
    public function addVol(\WCS\CoavBundle\Entity\Reservation $vol)
    {
        $this->vols[] = $vol;

        return $this;
    }

    /**
     * Remove vol
     *
     * @param \WCS\CoavBundle\Entity\Reservation $vol
     */
    public function removeVol(\WCS\CoavBundle\Entity\Reservation $vol)
    {
        $this->vols->removeElement($vol);
    }

    /**
     * Get vols
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVols()
    {
        return $this->vols;
    }
}
