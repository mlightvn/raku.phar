<?php

if(!defined("RAKU_TEMPLATE_PATH")){
	define("RAKU_TEMPLATE_PATH", "../view/");
}

if(!defined("RAKU_CACHE_PATH")){
	define("RAKU_CACHE_PATH", "../storage/cache/");
}


$raku_path = "../build/Raku.phar";
// $raku_path = "../lib/Raku.class.php";
if(file_exists($raku_path)){
	require_once($raku_path);
}else{
	echo "Please include Raku.phar";
	exit();
}

$raku = new Raku();
$raku->setClearCache(true);

$title = null;

$data = ["title" => $title];

$raku->view('landing_page', $data);

