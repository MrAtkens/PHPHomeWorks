<?php
/**
 * Created by PhpStorm.
 * User: ����������
 * Date: 14.02.2020
 * Time: 18:41
 */

trait CanRoarIntimidate{
    private $roarIntimidatePoints;

    public function  roarIntimidate(int $roarIntimidatePoints){
        $this->roarIntimidatePoints = $roarIntimidatePoints;
        echo "������� �����������: $this->roarIntimidatePoints" . PHP_EOL;
    }
}