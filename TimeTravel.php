<?php


class TimeTravel
{
    public $start;
    public $end;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function getTravelInfos()
    {
        $time = date_diff($this->start, $this->end);
        return 'Il y a ' . $time->y . ' années ' . $time->m . ' mois ' . $time->d . ' jours ' . $time->h . ' heures ' . $time->i . ' minutes ' . $time->s.' secondes';
    }

    public function findDate($interval)
    {
        $res = $this->start->sub($interval);
        return $res;
    }

    public function backToTheFuturStepByStep($step)
    {
        $steps = [];
        $daterange = new DatePeriod($this->start, $step, $this->end);
        foreach ($daterange as $date) {
            $steps[] = $date->format("M-d-Y A h:m") ;
        }
        return $steps;
    }
}

