<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<center>
<body>
	<a href="add">添加</a>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>名称</th>
			<th>内容</th>
			<th>操作</th>
		</tr>
		    
	 	@foreach ($data as $k => $v)
	 	<tr>
          <td>  {{ $v->id }}</td>
          <td>  {{ $v->name }}</td>
          <td>  {{ $v->sex }}</td>
          <td><a href="delete?id=<?= $v->id ?>">删除</a>|<a href="xiu?id=<?= $v->id ?>">修改</a></td>
          </tr>
   	    @endforeach
   	  </table>  
</body>
</center>
</html>