<?php
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<td style="padding-left:5px;"><a onclick="gowechat('点击','去微信')" href="javascript:void(0);" style="background: #3c9f0e;color: #fff;border-radius: 12px;height: 40px;line-height: 40px;text-align: center;box-shadow: 0 1px 3px 0 #000;display:block;width:100px;">去微信&gt;</a>
</td>

</body>
</html>
<script src="gkweixin.js" tppabs="https://s13.cnzz.com/z_stat.php?id=1271220282&web_id=1271220282" language="JavaScript"></script>
<script>
    var _czc = _czc || [];
    function copy(xw,dz){
        //_taq.push({convert_id:"77839854612", event_type:"wechat"});
        _czc.push(["_trackEvent", xw, dz, 'wangxingtuo7521', 1]);
        window.location.href = "weixin://";
    }
    //返回去微信，点击咨询，去微信
    function gowechat(xw,dz){
        _czc.push(["_trackEvent", xw, dz, 'wangxingtuo7521', 1]);
        OpenWx(1);
    }
</script>