<?php

include_once("../../Raku/config/bootstrap.php");

$raku = new \Raku\SimpleCoding\SimpleCoding();


$title = "Raku";

$json_string = '{"user_id":1516,"organization_id":550,"user_id":"1","user_name":"\u30ca\u30e0\u30c6\u30b9\u30c8","user_kana_name":"\u306a\u3080\u3066\u3059\u3068","last_date":null,"type":"2","size_id":"17","exec_numbers":"3","exec_date":"2018\/12\/06","other_note":"\u30ca\u30e0\u30c6\u30b9\u30c8"}';

$data = [
	"title" => $title,
	"p1" => "\\'paragraph\"",
	"p2" => "Line 1<br>\n
Line 2
Line 3",
	"link1" => "<a href=\"https://coxanh.net\" target=\"_blank\">https://coxanh.net</a>",
	"arr" 		=> array("1" => "A", "2" => "B"),
	"json_string" 		=> $json_string,
];

// true: debug purpose. In production, should be false
// Default values was set in Class already.
// $raku->isClearCache = AUTO_CLEAR_CACHED;

$raku->view('sub1/test1', $data);

