<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-15 09:30:17
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-15 10:15:39
 */
header("content-type:text/html;charset=utf8");

include('Data.php');
$page = isset($_GET['page']) ? $_GET['page'] : 1;

$Data = new Data($page);
$data = $Data->GetData();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h3>展示</h3>
		<table border="1" width="500">
			<tr>
				<th>编号</th>
				<th>昵称</th>
				<th>添加时间</th>
			</tr>
			<?php foreach($data['data'] as $k => $v){?>
				<tr>
					<td><?php echo $v['user_id']?></td>
					<td><?php echo $v['nickname']?></td>
					<td><?php echo $v['addtime']?></td>
				</tr>
			<?php }?>
		</table>
		<?php for($i=1;$i<=$data['page_sum'];$i++){?>
			<a href="index.php?page=<?php echo $i?>"><?php echo $i;?></a>
		<?php }?>
	</center>
</body>
</html>