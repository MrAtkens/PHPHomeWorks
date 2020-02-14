<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 18:42
 */

trait CanHibernate{
    private $hibernateDaysCount;

    public function hibernation(int $hibernateDaysCount){
        $this->hibernateDaysCount = $hibernateDaysCount;
        echo "Количество дней в спячке: $this->hibernateDaysCount" . PHP_EOL;
    }
}
