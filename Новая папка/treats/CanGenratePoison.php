<?php
/**
 * Created by PhpStorm.
 * User: ����������
 * Date: 14.02.2020
 * Time: 18:40
 */

trait CanGeneratePoison{
    private  $poisonDamagePoints;

    public function  generatePoison(int $poisonDamagePoints){
        $this->$poisonDamagePoints = $poisonDamagePoints;
        echo "���� ���: $this->poisonDamagePoints" . PHP_EOL;
    }
}