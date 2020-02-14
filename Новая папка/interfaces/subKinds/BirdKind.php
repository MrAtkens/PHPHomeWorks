<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 18:30
 */

interface BirdKind{
    public function fly();
    public function eggPlant();
    public function twit(int $twitCount);
}