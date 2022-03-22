<?php

/*
 * (c) Brieuc Thomas <tbrieuc@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrieucThomas\ErgastClient\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @author Brieuc Thomas <tbrieuc@gmail.com>
 */
class Race
{

    private $season;
    private $round;
    private $name;
    private $circuit;
    private $date;
    private $time;
    private $url;
    private $firstPractice;
    private $secondPractice;
    private $thirdPractice;
    private $qualifyingStart;
    private $sprintRaceStart;
    private $qualifyingResults;
    private $sprintResults;
    private $results;
    private $laps;
    private $pitStops;

    /**
     * Returns the season year on 4 digits.
     *
     * @return int
     */
    public function getSeason(): int
    {
        return $this->season;
    }

    public function getRound(): int
    {
        return $this->round;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCircuit(): Circuit
    {
        return $this->circuit;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @return \DateTime|null
     */
    public function getTime()
    {
        return $this->time;
    }

    public function getStartDate(): \DateTime
    {
        $startDate = clone $this->date;
        $time = $this->getTime();

        if ($time instanceof \DateTime) {
            $startDate->setTime($time->format('H'), $time->format('i'), $time->format('s'));
        }

        return $startDate;
    }

    /**
     * Returns the race Wikipedia page url.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    public function getQualifyingResults(): ArrayCollection
    {
        return $this->qualifyingResults;
    }

    public function getResults(): ArrayCollection
    {
        return $this->results;
    }

    public function getLaps(): ArrayCollection
    {
        return $this->laps;
    }

    public function getPitStops(): ArrayCollection
    {
        return $this->pitStops;
    }

    public function getFirstPractice(): FirstPractice
    {
        return $this->firstPractice;
    }

    public function getSecondPractice(): SecondPractice
    {
        return $this->secondPractice;
    }

    public function getThirdPractice(): ?ThirdPractice
    {
        return $this->thirdPractice;
    }

    public function getQualifyingStart(): QualifyingStart
    {
        return $this->qualifyingStart;
    }

    public function getSprintStart(): ?SprintStart
    {
        return $this->sprintRaceStart;
    }

    public function getSprintResults(): ArrayCollection
    {
        return $this->sprintResults;
    }

}
