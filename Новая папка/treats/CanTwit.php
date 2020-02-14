<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 18:40
 */

trait CanTwit{
    private $twitsCount;

    public function twit(int $twitCount){
        $this->twitsCount = $twitCount;
        echo "Количество чириканей $this->twitCount" . PHP_EOL;
    }
}