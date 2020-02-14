<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 18:29
 */
interface BearKind{
    public function generateSkin(int $skinArmorPoints);
    public function hibernation(int $hibernateDaysCount);
    public function roarIntimidate(int $roarIntimidatePoints);
}