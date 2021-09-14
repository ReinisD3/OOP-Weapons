<?php

class StoreDisplay extends Store
{
    public function showGuns():void
    {

        foreach ($this->storedGuns as $index => $gun)
        {
            echo $index . ' '.$gun->getName() . ' | license - '. $gun->getLicense() . ' | Bullet Trajectory : ' . $gun->bulletTrajectory(). ' | Sound : '. $gun->sound(). PHP_EOL;
        }
    }
}