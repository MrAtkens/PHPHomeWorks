<?php
/**
 * Created by PhpStorm.
 * User: ����������
 * Date: 14.02.2020
 * Time: 18:41
 */

trait CanTermalVision{
    private  $termalVisionDistance;

    public function termalVision(int $termalVisionDistance){
        $this->termalVisionDistance = $termalVisionDistance;
        echo "��������� ��������� ������: $this->termalVisionDistance" . PHP_EOL;
    }
}