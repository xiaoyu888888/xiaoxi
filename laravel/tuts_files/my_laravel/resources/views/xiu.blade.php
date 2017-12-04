<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<center>
<body>
	<form action="xiu_do" method="post">
		<input type="hidden" name="id" value="<?= $data->id?>">
	 <table>
		<tr>
			<td>名称:<input type="text" name="name" value="<?= $data->name ?>"></td>
		</tr>
		<tr>
			<td>内容:<input type="text" name="sex" value="<?= $data->sex ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" value="修改"></td>
		</tr>
	 </table>
	 </form>
</body>
</center>
</html>