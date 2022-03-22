<?php

namespace BrieucThomas\ErgastClient\Model;

class SprintResult
{
    private $driver;
    private $number;
    private $constructor;
    private $position;
    private $positionText;
    private $points;
    private $grid;
    private $laps;
    private $status;
    private $time;
    private $fastestLap;

    public function getDriver(): Driver
    {
        return $this->driver;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getConstructor(): Constructor
    {
        return $this->constructor;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function getPositionText(): string
    {
        return $this->positionText;
    }

    public function getPoints(): float
    {
        return $this->points;
    }

    public function getGrid(): int
    {
        return $this->grid;
    }

    public function getLaps(): int
    {
        return $this->laps;
    }

    public function getStatus(): FinishingStatus
    {
        return $this->status;
    }

    public function getTime(): Time
    {
        return $this->time;
    }

    public function getFastestLap(): FastestLap
    {
        return $this->fastestLap;
    }
}