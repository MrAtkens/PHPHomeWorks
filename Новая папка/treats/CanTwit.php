<?php
/**
 * Created by PhpStorm.
 * User: ����������
 * Date: 14.02.2020
 * Time: 18:40
 */

trait CanTwit{
    private $twitsCount;

    public function twit(int $twitCount){
        $this->twitsCount = $twitCount;
        echo "���������� ��������� $this->twitCount" . PHP_EOL;
    }
}