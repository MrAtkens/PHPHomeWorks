<?php
/**
 * Created by PhpStorm.
 * User: ����������
 * Date: 14.02.2020
 * Time: 18:41
 */

trait CanGenerateSkin{
    private  $skinArmorPoints;

    public function generateSkin(int $skinArmorPoints){
        $this->skinArmorPoints = $skinArmorPoints;
        echo "���� �����: $this->skinArmorPoints" . PHP_EOL;

    }
}