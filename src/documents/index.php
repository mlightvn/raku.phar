<?php

if(!defined("RAKU_TEMPLATE_PATH")){
	define("RAKU_TEMPLATE_PATH", "../../view/");
}

if(!defined("RAKU_CACHE_PATH")){
	define("RAKU_CACHE_PATH", "../../storage/cache/");
}

if(!defined("RAKU_SHORTCODE_DIR")){
	define("RAKU_SHORTCODE_DIR", "../../shortcode/");
}

$raku_path = "../../build/Raku.phar";
// $raku_path = "../../lib/Raku.class.php";
if(file_exists($raku_path)){
	require_once($raku_path);
}else{
	echo "Please include Raku.phar";
	exit();
}

$raku = new Raku();

$title = "Documents";
$arr 	= [
		"author" 	=> [
			"name" 				=> "Nguyen Ngoc Nam",
			"year_old" 			=> 1,
			"published_year" 	=> 2018,
			"string_of_number" 	=> "10",
		],
	];

$list = [
	"raku"				=> "Raku",
	"sc"				=> "Simple Coding",
	"cx"				=> "https://coxanh.net",
];

$data = [
	"title" 			=> $title,
	"link1" 			=> "https://simple-coding.coxanh.net/",
	"arr" 				=> $arr,
	"list" 				=> $list,
	"json_string" 		=> json_encode($arr),
	"p1" 				=> "Line 1
Line 2
<a href='https://simple-coding.coxanh.net/'>https://simple-coding.coxanh.net/</a>
",
	"p2" 				=> "Paragraph 2:<br>
Line 2<br>
Line 3<br>
<a href='https://simple-coding.coxanh.net/'>https://simple-coding.coxanh.net/</a>
",
];

$raku->view('documents/index', $data);

