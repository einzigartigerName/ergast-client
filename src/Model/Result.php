<?php

/*
 * (c) Brieuc Thomas <tbrieuc@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ergast\Model;

/**
 * @author Brieuc Thomas <tbrieuc@gmail.com>
 */
class Result
{
    private $driver;
    private $constructor;
    private $number;
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

    public function getConstructor(): Constructor
    {
        return $this->constructor;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function getTime(): Time
    {
        return $this->time;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function getPositionText(): string
    {
        return $this->positionText;
    }

    public function getPoints(): float
    {
        return $this->points;
    }

    public function getLaps(): int
    {
        return $this->laps;
    }

    public function getGrid(): int
    {
        return $this->grid;
    }

    public function getFastestLap(): FastestLap
    {
        return $this->fastestLap;
    }
}
