<?php
/**
 * Created by PhpStorm.
 * User: liyong
 * Date: 2017-02-21
 * Time: 16:52
 */

require '../vendor/autoload.php';

$smarty=new Smarty();

$data=array(
    0=>array('id'=>8,'name'=>'name1'),
    1=>array('id'=>10,'name'=>'name2'),
    2=>array('id'=>15,'name'=>'name3')
);

$smarty->assign('data',$data);
$smarty->display('../views/test.tpl');


