<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<center>
	<h3>添加信息</h3>
<body>
	<form action="tian_do" method="post">
	<table>
		<tr>
			<td>名称<input type="text" name="name" ></td>
		</tr>
		<tr>
			<td>内容<input type="text" name="content"></td>
		</tr>
		<tr>
			<td>时间<input type="text" name="time" id="calen2"/></td>
		</tr>
		<tr>
			<td><input type="submit" value="添加"></td>
		</tr>
	
	</table>
	</form>
	
</body>
</center>
</html>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/GooCalendar.css') }}"/>
<script  type="text/javascript" src="{{ URL::asset('/jquery-1.3.2.min.js') }}"></script>
<script  type="text/javascript" src="{{ URL::asset('/GooFunc.js') }}"></script>
<script  type="text/javascript" src="{{ URL::asset('/GooCalendar.js') }}"></script>
<script  type="text/javascript">
var property2={
	divId:"demo2",//日历控件最外层DIV的ID
	needTime:true,//是否需要显示精确到秒的时间选择器，即输出时间中是否需要精确到小时：分：秒 默认为FALSE可不填
	yearRange:[1970,2030],//可选年份的范围,数组第一个为开始年份，第二个为结束年份,如[1970,2030],可不填
	week:['日','一','二','三','四','五','六'],//数组，设定了周日至周六的显示格式,可不填
	month:['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],//数组，设定了12个月份的显示格式,可不填
	format:"yyyy-MM-dd hh:mm:ss"
	/*设定日期的输出格式,可不填*/
};

$(document).ready(function(){

	canva2=$.createGooCalendar("calen2",property2);
	
});
</script>
