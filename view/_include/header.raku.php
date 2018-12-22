<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{((isset($title)) ? ($title . ' | ') : '')}}RAKU</title>
	<link rel="icon" href="/img/favicon.ico" type="image/x-icon">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<link rel="stylesheet" href="/css/common/styles.css">
	@if{(isset($css) && (!empty($css)))}
	<link rel="stylesheet" href="/css/{{$css}}.css">
	@endif

	@assign{($description, "Code PHP single page, similar to Laravel blade format by include only one file (Raku.phar).")}

	<meta name="description" content="{{$description}}">
	<meta name="copyright" content="Raku.phar is owned by Nguyen Ngoc Nam.">
	<meta name="robots" content="index,follow">
	<meta name="DC.title" content="Instead of using Smarty, but Laravel blade format">

	<meta name="og:title" property="og:title" content="{{((isset($title)) ? ($title . ' | ') : '')}}RAKU">
	<meta name="og:description" property="og:description" content="{{$description}}">
	<meta name="og:image" property="og:image" content="/img/logo.png">
	<meta property="og:type" content="website" />

</head>
<body>

@include{('_include/menu_bar', ["title" => $title])}
