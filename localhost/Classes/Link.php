<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 12.02.2020
 * Time: 17:09
 */

class Link extends BaseTag
{
    public function __construct(array $attributes = []){
        parent::__construct('a', $attributes);
    }

    public function href($url){
        return $this->setAttribute('href', $url);
    }
}