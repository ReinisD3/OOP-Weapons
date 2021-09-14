<?php

class StoreDisplay extends Store
{
    public function open()
    {
        echo '--------------------------Welcome to gun Store---------------------------' . PHP_EOL;
        $this->showGuns();
    }
    public function showGuns():void
    {
        echo '~~~~~~~~~~~ In store available are ===>>> ' . PHP_EOL;
        foreach ($this->storedGuns as $index => $gun)
        {
            echo '('.$index . ')'.$gun->getName() . ' | license('. $gun->getLicense() . ') | Bullet Trajectory : ' . $gun->bulletTrajectory(). ' | Sound : '. $gun->sound(). PHP_EOL;
        }
    }
}