<?php

namespace BrieucThomas\ErgastClient\Model;

class SprintStart
{
    private $date;
    private $time;

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
}