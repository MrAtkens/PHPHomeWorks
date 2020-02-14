<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 14.02.2020
 * Time: 16:46
 */

include_once ('./interfaces/subKinds/BearKind.php');
include_once ('./treats/CanHibernate.php');
include_once ('./treats/CanGenerateSkin.php');
include_once ('./treats/CanRoarIntimidate.php');

class Bear extends Animal implements BearKind{

    use CanHibernate, CanGenerateSkin, CanRoarIntimidate;

}