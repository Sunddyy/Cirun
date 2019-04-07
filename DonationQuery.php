<?php
header('ContentType=text/html charset=utf-8'); //文档声明
?>
 
<?php
//判断接受数据是否为空
    if (empty($_POST['uname']) || empty($_POST['pwd'])) {
        //重定向(若传输数据为空则返回登录页)
        header('login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
 
    <style>
    /* 简单页面布局 */
        div{
            width: 1200px;
            margin: auto;
            border: 1px solid #ccc;
            height: 50px;
            background-color: #CCC;
 
        }
        span{
            float: right;
             margin-right:50px;
            font-size: 14px;
            text-align: center;
            line-height: 50px;
        }
    </style>
</head>
<body>
    <div>
        <span>
           <?php

			$servername = "localhost";
			$username = "root";
			$password = "cnms1234";
			$dbname = "mySQL";
			 
			// 创建连接
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("连接失败: " . $conn->connect_error);
			} 
			 
			$sql = "SELECT user,adr,company,last_modifyied_time FROM account";
			$result = $conn->query($sql);
			 echo"<table>";
			if ($result->num_rows > 0) {
				// 输出数据
				while($row = $result->fetch_assoc()) {
					echo "<tr><td> User: ".$row["user"] ."</td> <td> Company: ".$row["company"] ."</td> <td> last_modifyied_time: ".$row["last_modifyied_time"] ."</td> </tr>";
				}
			} else {
				echo "0 结果";
			}
			 echo"</table>";
			$conn->close();
            ?>
        </span>
 
    </div>
</body>
</html>