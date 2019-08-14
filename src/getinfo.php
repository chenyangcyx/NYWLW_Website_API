<?php
    //通过该文件，获取最近数据库信息
    $db_account="nywlw";
    $db_password="nywlwnywlwnywlwnywlw";
    $db_name="nywlw";
    $db_address="localhost";
    $con=mysqli_connect($db_address,$db_account,$db_password,$db_name);
    if (!$con) {
      die('数据库连接失败'.mysqli_connect_error());
    }
    mysqli_query($con,"set names 'utf8'");

    $info1=mysqli_query($con,"select * from datamessage order by time desc");
    $index=8;       //需要获取的消息数目
    $arr=array();
    while($row=mysqli_fetch_assoc($info1))
    {
        $arr[$index."time"]=substr($row['time'],14,5);
        $arr[$index."wendu"]=$row['wendu'];
        $arr[$index."shidu"]=$row['shidu'];
        $arr[$index."guangzhao"]=$row['guangzhao'];
        $index--;
        if($index==0) break;
    }
    mysqli_close($con);
    exit(json_encode($arr));
?>