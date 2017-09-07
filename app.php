<?php
/**
 * Created by IntelliJ IDEA.
 * User: josh
 * Date: 9/7/17
 * Time: 2:50 PM
 */

include 'vendor/autoload.php';

$lolwut = \OGP\Factory\LolWutFactory::getLolWut();

echo $lolwut->getFunny();