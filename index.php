<?php
/**
 * Created by PhpStorm.
 * User: hu
 * Date: 2017/7/8
 * Time: 下午9:01
 */
$info=['name'=>'hubing','lover'=>'mzs'];
$callback=$_GET['callback'];
echo $callback."(".json_encode($info).")";