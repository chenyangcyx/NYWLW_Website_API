<?php
  function return_result($return_code,$return_string,$con)
  {
    $result=array('code' => $return_code,'details' => $return_string);
    mysqli_close($con);
    exit (json_encode($result));
  }

  function CheckIfExsit($data,$con)
  {
    if(is_null($data))
    {
      //不存在
      $return_code=0;
      $return_reason="no corresponding amount of inputs";
      return_result($return_code,$return_reason,$con);
    }
  }

  function SendSetSuccessInfo($con)
  {
    $return_code=1;
    $return_reason="success";
    return_result($return_code,$return_reason,$con);
  }

  //设置排气扇开关
  function SetPQSSwitch($user,$pqs_switch,$con)
  {
    CheckIfExsit($pqs_switch,$con);
    mysqli_query($con,"update `userconfig` set `pqs_switch`='{$pqs_switch}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置遮光帘开关
  function SetZGLSwitch($user,$zgl_switch,$con)
  {
    CheckIfExsit($zgl_switch,$con);
    mysqli_query($con,"update `userconfig` set `zgl_switch`='{$zgl_switch}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置灌溉开关
  function SetGGSwitch($user,$gg_switch,$con)
  {
    CheckIfExsit($gg_switch,$con);
    mysqli_query($con,"update `userconfig` set `gg_switch`='{$gg_switch}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置补光灯开关
  function SetBGDSwitch($user,$bgd_switch,$con)
  {
    CheckIfExsit($bgd_switch,$con);
    mysqli_query($con,"update `userconfig` set `bgd_switch`='{$bgd_switch}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置所有开关
  function SetAllSwitch($user,$pqs_switch,$zgl_switch,$gg_switch,$bgd_switch,$con)
  {
    CheckIfExsit($pqs_switch,$con);
    CheckIfExsit($zgl_switch,$con);
    CheckIfExsit($gg_switch,$con);
    CheckIfExsit($bgd_switch,$con);
    mysqli_query($con,"update `userconfig` set `pqs_switch`='{$pqs_switch}',`zgl_switch`='{$zgl_switch}',`gg_switch`='{$gg_switch}',`bgd_switch`='{$bgd_switch}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置ip
  function SetIP($user,$ip,$con)
  {
    CheckIfExsit($ip,$con);
    mysqli_query($con,"update `userconfig` set `ip`='{$ip}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置端口
  function SetPort($user,$port,$con)
  {
    CheckIfExsit($port,$con);
    mysqli_query($con,"update `userconfig` set `port`='{$port}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置ip和端口
  function SetIPAndPort($user,$ip,$port,$con)
  {
    CheckIfExsit($ip,$con);
    CheckIfExsit($port,$con);
    mysqli_query($con,"update `userconfig` set `ip`='{$ip}',`port`='{$port}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置温度min值
  function SetWenduMin($user,$wendu_min,$con)
  {
    CheckIfExsit($wendu_min,$con);
    mysqli_query($con,"update `userconfig` set `wendu_min`='{$wendu_min}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置温度max值
  function SetWenduMax($user,$wendu_max,$con)
  {
    CheckIfExsit($wendu_max,$con);
    mysqli_query($con,"update `userconfig` set `wendu_max`='{$wendu_max}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置湿度min值
  function SetShiduMin($user,$shidu_min,$con)
  {
    CheckIfExsit($shidu_min,$con);
    mysqli_query($con,"update `userconfig` set `shidu_min`='{$shidu_min}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置湿度max值
  function SetShiduMax($user,$shidu_max,$con)
  {
    CheckIfExsit($shidu_max,$con);
    mysqli_query($con,"update `userconfig` set `shidu_max`='{$shidu_max}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置光照min值
  function SetGZMin($user,$gz_min,$con)
  {
    CheckIfExsit($gz_min,$con);
    mysqli_query($con,"update `userconfig` set `gz_min`='{$gz_min}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置光照max值
  function SetGZMax($user,$gz_max,$con)
  {
    CheckIfExsit($gz_max,$con);
    mysqli_query($con,"update `userconfig` set `gz_max`='{$gz_max}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置温度min和max值
  function SetWenduMinAndMax($user,$wendu_min,$wendu_max,$con)
  {
    CheckIfExsit($wendu_min,$con);
    CheckIfExsit($wendu_max,$con);
    mysqli_query($con,"update `userconfig` set `wendu_min`='{$wendu_min}',`wendu_max`='{$wendu_max}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置湿度min和max值
  function SetShiduMinAndMax($user,$shidu_min,$shidu_max,$con)
  {
    CheckIfExsit($shidu_min,$con);
    CheckIfExsit($shidu_max,$con);
    mysqli_query($con,"update `userconfig` set `shidu_min`='{$shidu_min}',`shidu_max`='{$shidu_max}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置光照min和max值
  function SetGZMinAndMax($user,$gz_min,$gz_max,$con)
  {
    CheckIfExsit($gz_min,$con);
    CheckIfExsit($gz_max,$con);
    mysqli_query($con,"update `userconfig` set `gz_min`='{$gz_min}',`gz_max`='{$gz_max}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置温度、湿度、光照的min和max值
  function SetWenduShiduGZMinAndMax($user,$wendu_min,$wendu_max,$shidu_min,$shidu_max,$gz_min,$gz_max,$con)
  {
    CheckIfExsit($wendu_min,$con);
    CheckIfExsit($wendu_max,$con);
    CheckIfExsit($shidu_min,$con);
    CheckIfExsit($shidu_max,$con);
    CheckIfExsit($gz_min,$con);
    CheckIfExsit($gz_max,$con);
    mysqli_query($con,"update `userconfig` set `wendu_min`='{$wendu_min}',`wendu_max`='{$wendu_max}',`shidu_min`='{$shidu_min}',`shidu_max`='{$shidu_max}',`gz_min`='{$gz_min}',`gz_max`='{$gz_max}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置号码
  function SetPhone($user,$phone,$con)
  {
    CheckIfExsit($phone,$con);
    mysqli_query($con,"update `userconfig` set `phone`='{$phone}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置自动监控开关
  function SetMonitorSwitch($user,$monitor_switch,$con)
  {
    CheckIfExsit($phone,$con);
    mysqli_query($con,"update `userconfig` set `monitor_switch`='{$monitor_switch}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置号码、自动监控开关
  function SetPhoneAndMonitorSwitch($user,$phone,$monitor_switch,$con)
  {
    CheckIfExsit($phone,$con);
    CheckIfExsit($monitor_switch,$con);
    mysqli_query($con,"update `userconfig` set `phone`='{$phone}',`monitor_switch`='{$monitor_switch}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //设置所有设置
  function SetAllSettings($user,$ip,$port,$wendu_min,$wendu_max,$shidu_min,$shidu_max,$gz_min,$gz_max,$phone,$monitor_switch,$con)
  {
    CheckIfExsit($ip,$con);
    CheckIfExsit($port,$con);
    CheckIfExsit($wendu_min,$con);
    CheckIfExsit($wendu_max,$con);
    CheckIfExsit($shidu_min,$con);
    CheckIfExsit($shidu_max,$con);
    CheckIfExsit($gz_min,$con);
    CheckIfExsit($gz_max,$con);
    CheckIfExsit($phone,$con);
    CheckIfExsit($monitor_switch,$con);
    mysqli_query($con,"update `userconfig` set `ip`='{$ip}',`port`='{$port}',`wendu_max`='{$wendu_max}',`wendu_max`='{$wendu_max}',`shidu_min`='{$shidu_min}',`shidu_max`='{$shidu_max}',`gz_min`='{$gz_min}',`gz_max`='{$gz_max}',`phone`='{$phone}',`monitor_switch`='{$monitor_switch}' where `userconfig`.`username`='{$user}'");
    SendSetSuccessInfo($con);
  }

  //获取排气扇开关状态
  function GetPQSSwitch($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('pqs_switch' => $result['pqs_switch']);
    return_result($return_code,$result_array,$con);
  }

  //获取遮光帘开关状态
  function GetZGLSwitch($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('zgl_switch' => $result['zgl_switch']);
    return_result($return_code,$result_array,$con);
  }

  //获取灌溉开关状态
  function GetGGSwitch($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('gg_switch' => $result['gg_switch']);
    return_result($return_code,$result_array,$con);
  }

  //获取补光灯开关状态
  function GetBGDSwitch($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('bgd_switch' => $result['bgd_switch']);
    return_result($return_code,$result_array,$con);
  }

  //获取所有开关状态
  function GetAllSwitch($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('pqs_switch' => $result['pqs_switch'],
                        'zgl_switch' => $result['zgl_switch'],
                        'gg_switch' => $result['gg_switch'],
                        'bgd_switch' => $result['bgd_switch']);
    return_result($return_code,$result_array,$con);
  }

  //获取ip地址
  function GetIP($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('ip' => $result['ip']);
    return_result($return_code,$result_array,$con);
  }

  //获取端口
  function GetPort($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('port' => $result['port']);
    return_result($return_code,$result_array,$con);
  }

  //获取ip和端口
  function GetIPAndPort($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('ip' => $result['ip'],
                        'port' => $result['result']);
    return_result($return_code,$result_array,$con);
  }

  //获取温度min值
  function GetWenduMin($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('wendu_min' => $result['wendu_min']);
    return_result($return_code,$result_array,$con);
  }

  //获取温度max值
  function GetWenduMax($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('wendu_max' => $result['wendu_max']);
    return_result($return_code,$result_array,$con);
  }

  //获取湿度min值
  function GetShiduMin($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('shidu_min' => $result['shidu_min']);
    return_result($return_code,$result_array,$con);
  }

  //获取湿度max值
  function GetShiduMax($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('shidu_max' => $result['shidu_max']);
    return_result($return_code,$result_array,$con);
  }

  //获取光照min值
  function GetGZMin($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('gz_min' => $result['gz_min']);
    return_result($return_code,$result_array,$con);
  }

  //获取光照max值
  function GetGZMax($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('gz_max' => $result['gz_max']);
    return_result($return_code,$result_array,$con);
  }

  //获取温度min和max值
  function GetWenduMinAndMax($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('wendu_min' => $result['wendu_min'],
                        'wendu_max' => $result['wendu_max']);
    return_result($return_code,$result_array,$con);
  }

  //获取湿度min和max值
  function GetShiduMinAndMax($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('shidu_min' => $result['shidu_min'],
                        'shidu_max' => $result['shidu_max']);
    return_result($return_code,$result_array,$con);
  }

  //获取光照min和max值
  function GetGZMinAndMax($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('gz_min' => $result['gz_min'],
                        'gz_max' => $result['gz_max']);
    return_result($return_code,$result_array,$con);
  }

  //获取温度、湿度、光照的min和max值
  function GetWenduShiduGZMinAndMax($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('wendu_min' => $result['wendu_min'],
                        'wendu_max' => $result['wendu_max'],
                        'shidu_min' => $result['shidu_min'],
                        'shidu_max' => $result['shidu_max'],
                        'gz_min' => $result['gz_min'],
                        'gz_max' => $result['gz_max']);
    return_result($return_code,$result_array,$con);
  }

  //获取号码
  function GetPhone($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('phone' => $result['phone']);
    return_result($return_code,$result_array,$con);
  }

  //获取自动监测开关状态
  function GetMonitorSwitch($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('monitor_switch' => $result['monitor_switch']);
    return_result($return_code,$result_array,$con);
  }

  //获取号码和自动监测开关状态
  function GetPhoneAndMonitorSwitch($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('phone' => $result['phone'],
                        'monitor_switch' => $result['monitor_switch']);
    return_result($return_code,$result_array,$con);
  }

  //获取所有设置
  function GetAllSettings($user,$con)
  {
    $info=mysqli_query($con,"select * from `userconfig`");
    if(mysqli_num_rows($info)==0)
    {
      $return_code=0;
      $return_reason="cannot find and result";
      return_result($return_code,$return_reason,$con);
    }
    $return_code=1;
    $result=mysqli_fetch_array($info);
    $result_array=array('ip' => $result['ip'],
                        'port' => $result['port'],
                        'wendu_min' => $result['wendu_min'],
                        'wendu_max' => $result['wendu_max'],
                        'shidu_min' => $result['shidu_min'],
                        'shidu_max' => $result['shidu_max'],
                        'gz_min' => $result['gz_min'],
                        'gz_max' => $result['gz_max'],
                        'phone' => $result['phone'],
                        'monitor_switch' => $result['monitor_switch']);
    return_result($return_code,$result_array,$con);
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
  $monitor_switch=$_GET['monitor_switch'];
  //确认userkey是否正确
  $userkey_true=sha1(md5(sha1(md5(sha1($user)))));
  if($userkey!=$userkey_true)
  {
    $return_code=0;
    $return_reason="userkey does not match";
    return_result($return_code,$return_reason,$con);
  }
  //获取数据库信息
  $info=mysqli_query($con,"select * from userconfig where username='{$user}'");
  //查询不到相应的用户名
  if(mysqli_num_rows($info)==0)
  {
    $return_code=0;
    $return_reason="cannot find user";
    return_result($return_code,$return_reason,$con);
  }
  //执行对应的命令
  switch ($operation) {
    case 'setpqs':        //设置排气扇开关
      SetPQSSwitch($user,$pqs_switch,$con);
      break;
    case 'setzgl':        //设置遮光帘开关
      SetZGLSwitch($user,$zgl_switch,$con);
      break;
    case 'setgg':         //设置灌溉开关
      SetGGSwitch($user,$gg_switch,$con);
      break;
    case 'setbgd':        //设置补光灯开关
      SetBGDSwitch($user,$bgd_switch,$con);
      break;
    case 'setswitch':     //设置所有开关
      SetAllSwitch($user,$pqs_switch,$zgl_switch,$gg_switch,$bgd_switch,$con);
      break;
    case 'setip':         //设置ip
      SetIP($user,$ip,$con);
      break;
    case 'setport':       //设置端口
      SetPort($user,$port,$con);
      break;
    case 'setipandport':    //设置ip和端口
      SetIPAndPort($user,$ip,$port,$con);
      break;
    case 'setwendumin':   //设置温度min值
      SetWenduMin($user,$wendu_min,$con);
      break;
    case 'setwendumax':   //设置温度max值
      SetWenduMax($user,$wendu_max,$con);
      break;
    case 'setshidumin':   //设置湿度min值
      SetShiduMin($user,$shidu_min,$con);
      break;
    case 'setshidumax':   //设置湿度max值
      SetShiduMax($user,$shidu_max,$con);
      break;
    case 'setgzmin':      //设置光照min值
      SetGZMin($user,$gz_min,$con);
      break;
    case 'setgzmax':      //设置光照max值
      SetGZMax($user,$gz_max,$con);
      break;
    case 'setwenduminandmax':      //设置温度min和max值
      SetWenduMinAndMax($user,$wendu_min,$wendu_max,$con);
      break;
    case 'setshiduminandmax':      //设置湿度min和max值
      SetShiduMinAndMax($user,$shidu_min,$shidu_max,$con);
      break;
    case 'setgzminandmax':         //设置光照min和max值
      SetGZMinAndMax($user,$gz_min,$gz_max,$con);
      break;
    case 'setwendushidugzminandmax':     //设置温度、湿度、光照的min和max值
      SetWenduShiduGZMinAndMax($user,$wendu_min,$wendu_max,$shidu_min,$shidu_max,$gz_min,$gz_max,$con);
      break;
    case 'setphone':      //设置号码
      SetPhone($user,$phone,$con);
      break;
    case 'setmonitorswitch':  //设置自动监控开关
      SetMonitorSwitch($user,$monitor_switch,$con);
      break;
    case 'setphoneandmonitorswitch':    //设置号码、自动监控开关
      SetPhoneAndMonitorSwitch($user,$phone,$monitor_switch,$con);
      break;
    case 'setallsettings':   //设置所有设置
      SetAllSettings($user,$ip,$port,$wendu_min,$wendu_max,$shidu_min,$shidu_max,$gz_min,$gz_max,$phone,$monitor_switch,$con);
      break;
    case 'getpqs':        //获取排气扇开关状态
      GetPQSSwitch($user,$con);
      break;
    case 'getzgl':        //获取遮光帘开关状态
      GetZGLSwitch($user,$con);
      break;
    case 'getgg':         //获取灌溉开关状态
      GetGGSwitch($user,$con);
      break;
    case 'getbgd':        //获取补光灯开关状态
      GetBGDSwitch($user,$con);
      break;
    case 'getallswitch':     //获取所有开关状态
      GetAllSwitch($user,$con);
      break;
    case 'getip':         //获取ip地址
      GetIP($user,$con);
      break;
    case 'getport':       //获取端口
      GetPort($user,$con);
      break;
    case 'getipandport':    //获取ip和端口
      GetIPAndPort($user,$con);
      break;
    case 'getwendumin':   //获取温度min值
      GetWenduMin($user,$con);
      break;
    case 'getwendumax':   //获取温度max值
      GetWenduMax($user,$con);
      break;
    case 'getshidumin':   //获取湿度min值
      GetShiduMin($user,$con);
      break;
    case 'getshidumax':   //获取湿度max值
      GetShiduMax($user,$con);
      break;
    case 'getgzmin':      //获取光照min值
      GetGZMin($user,$con);
      break;
    case 'getgzmax':      //获取光照max值
      GetGZMax($user,$con);
      break;
    case 'getwenduminandmax':      //获取温度min和max值
      GetWenduMinAndMax($user,$con);
      break;
    case 'getshiduminandmax':      //获取湿度min和max值
      GetShiduMinAndMax($user,$con);
      break;
    case 'getgzminandmax':         //获取光照min和max值
      GetGZMinAndMax($user,$con);
      break;
    case 'getwendushidugzminandmax':     //获取温度、湿度、光照的min和max值
      GetWenduShiduGZMinAndMax($user,$con);
      break;
    case 'getphone':      //获取号码
      GetPhone($user,$con);
      break;
    case 'getmonitorswitch':    //获取自动监测开关状态
      GetMonitorSwitch($user,$con);
      break;
    case 'getphoneandmonitorswitch':    //获取号码和自动监测开关状态
      GetPhoneAndMonitorSwitch($user,$con);
      break;
    case 'getallsettings':   //获取所有设置
      GetAllSettings($user,$con);
      break;
    default:
      $return_code=0;
      $return_reason="error operation type";
      return_result($return_code,$return_reason,$con);
      break;
  }
  mysqli_close($con);
?>