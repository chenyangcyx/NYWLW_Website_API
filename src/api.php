<?php
  function return_result($return_code,$return_string,$con)
  {
    $result=array('code' => $return_code,'reason' => $return_string);
    mysqli_close($con);
    exit (json_encode($result));
  }
?>

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

  //解析输入信息
  $user=$_GET['user'];
  $userkey=$_GET['userkey'];
  $operation=$_GET['operation'];
  $pqs_switch=$_GET['pqs_switch'];
  $zgl_switch=$_GET['zgl_switch'];
  $gg_switch=$_GET['gg_switch'];
  $bgd_switch=$_GET['bgd_switch'];
  $ip=$_GET['ip'];
  $port=$_GET['port'];
  $wendu_min=$_GET['wendu_min'];
  $wendu_max=$_GET['wendu_max'];
  $shidu_min=$_GET['shidu_min'];
  $shidu_max=$_GET['shidu_max'];
  $gz_min=$_GET['gz_min'];
  $gz_max=$_GET['gz_max'];
  $phone=$_GET['phone'];
  $if_monitor=$_GET['if_monitor'];
  //结果信息
  $return_code;
  $return_reason;
  //确认userkey是否正确
  $userkey_true=sha1(md5(sha1(md5(sha1($user)))));
  if($userkey!=$userkey_true)
  {
    $return_code=0;
    $return_reason="userkey does not match";
    return_result($return_code,$return_reason,$con);
  }
  //获取数据库信息
  $info1=mysqli_query($con,"select * from userconfig where username='{$user}'");
  $result1_num=mysqli_num_rows($info1);
  //查询不到相应的用户名
  if($result1_num==0)
  {
    $return_code=0;
    $return_reason="cannot find user";
    return_result($return_code,$return_reason,$con);
  }
  //执行对应的命令
  switch ($operation) {
    case 'setpqs':        //设置排气扇开关
      break;
    case 'setzgl':        //设置遮光帘开关
      break;
    case 'setgg':         //设置灌溉开关
      break;
    case 'setbgd':        //设置补光灯开关
      break;
    case 'setswitch':     //设置所有开关
      break;
    case 'setip':         //设置ip
      break;
    case 'setport':       //设置端口
      break;
    case 'setaddress':    //设置ip和端口
      break;
    case 'setwendumin':   //设置温度min值
      break;
    case 'setwendumax':   //设置温度max值
      break;
    case 'setshidumin':   //设置湿度min值
      break;
    case 'setshidumax':   //设置湿度max值
      break;
    case 'setgzmin':      //设置光照min值
      break;
    case 'setgzmax':      //设置光照max值
      break;
    case 'setwendu':      //设置温度min和max值
      break;
    case 'setshidu':      //设置湿度min和max值
      break;
    case 'setgz':         //设置光照min和max值
      break;
    case 'setminmax':     //设置温度、湿度、光照的min和max值
      break;
    case 'setphone':      //设置号码
      break;
    case 'setmonitorswitch':  //设置自动监控开关
      break;
    case 'setmonitor':    //设置号码、自动监控开关
      break;
    case 'setsettings':   //设置所有设置
      break;
    case 'getpqs':        //获取排气扇开关状态
      break;
    case 'getzgl':        //获取遮光帘开关状态
      break;
    case 'getgg':         //获取灌溉开关状态
      break;
    case 'getbgd':        //获取补光灯开关状态
      break;
    case 'getswitch':     //获取所有开关状态
      break;
    case 'getip':         //获取ip地址
      break;
    case 'getport':       //获取端口
      break;
    case 'getaddress':    //获取ip和端口
      break;
    case 'getwendumin':   //获取温度min值
      break;
    case 'getwendumax':   //获取温度max值
      break;
    case 'getshidumin':   //获取湿度min值
      break;
    case 'getshidumax':   //获取湿度max值
      break;
    case 'getgzmin':      //获取光照min值
      break;
    case 'getgzmax':      //获取光照max值
      break;
    case 'getwendu':      //获取温度min和max值
      break;
    case 'getshidu':      //获取湿度min和max值
      break;
    case 'getgz':         //获取光照min和max值
      break;
    case 'getminmax':     //获取温度、湿度、光照的min和max值
      break;
    case 'getphone':      //获取号码
      break;
    case 'getmonitorswitch':    //获取自动监测开关状态
      break;
    case 'getmonitor':    //获取号码和自动监测开关状态
      break;
    case 'getgettings':   //获取所有设置
      break;
    default:
      break;
  }














    $info1=mysqli_query($con,"select * from datamessage order by time desc");
    $index=16;       //需要获取的消息数目
    $arr=array();
    while($row=mysqli_fetch_assoc($info1))
    {
        $arr[$index."time"]=$row['time'];
        $arr[$index."wendu"]=$row['wendu'];
        $arr[$index."shidu"]=$row['shidu'];
        $arr[$index."guangzhao"]=$row['guangzhao'];
        $index--;
        if($index==0) break;
    }
    mysqli_close($con);
    exit(json_encode($arr));
?>