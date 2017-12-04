<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<center>
<h3>欢迎<?= $data[0]->name?>光临</h3>
<body>
	<table>
	@foreach ($data as $k => $v)
	
	<tr>
		<td> {{ $v->content }}</td>
		<td> {{ $v->time }} </td>
	</tr>

	 @endforeach

	</table>
</body>
</center>
</html>