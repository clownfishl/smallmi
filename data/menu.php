<?php
include('./Medoo.php');
$config=[
    'database_type' => 'mysql',
    'database_name' => 'demo',
    'server' => '127.0.0.1',
    'username' => 'root',
    'password' => '123456',
    'charset' => 'utf8',
    'port' => 3306, 
];
$m = new Medoo\Medoo($config);

$res=$m->select('nav','*');
$data=[];
foreach($res as $k=>$v){
	if($v.['pid']==11){
		$v['child']=[];
		foreach($res $ko=>$vo){
			if($v['id']=$vo['pid']){
                $v['child']=$vo;
			}
		}
		$data[]=$v;
	}
}
echo json_encode($data);

?>