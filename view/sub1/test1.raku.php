<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sub1 &gt; djson</title>

	<link rel="icon" href="/img/favicon.ico" type="image/x-icon">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
	<h1>Sub1 &gt; djson</h1>

	<table>
		<thead>
			<tr>
				<th>Variable/function</th>
				<th>Value</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>$title</td>
				<td>{{(isset($title) ? $title : 'NULL/Undefined')}}</td>
			</tr>
			<tr>
				<td>@json</td>
				<td>@djson{($json_string)}</td>
			</tr>
			<tr>
				<td>@{{djson}}</td>
				<td>{{ djson($json_string) }}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>