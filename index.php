<html>
<title>谷歌验证码V3 Demo(Google reCaptcha V3 Demo)</title>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
<script src="https://www.recaptcha.net/recaptcha/api.js?render=6LdZe6gUAAAAAG0-fEdJssbUeRaNfVY14UgYA6ia"></script>
<script src="recaptcha.js"></script></head><header><center><font size="25px">谷歌验证码V3 Demo(Google reCaptcha V3 Demo)</font></center></header><body>
<form method="post" action="">
<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"/>
<center><br><br><input type="submit" name="checker" value="提交(submit)"></input></center></form></body>
<?php
if ($_POST['checker']) {
    $captcha = $_POST["g-recaptcha-response"];
    if (!$captcha) {
        echo "<center><div><center><font color=\"red\" size=\"1\">⚠️验证码未调起，请稍候重试。(⚠️No token posted)</font></center></div></center><script>var consoletext1 = {status:\"谷歌验证码运行异常。(reCAPTCHA is not running)\",errorcodes:\"no token posted.\"};console.log(consoletext1)</script>";
    } else {
        $secret = '你的谷歌验证码V3密钥放在这里(PUT YOUR SECRET HERE)';
        $response = file_get_contents("https://www.recaptcha.net/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['HTTP_X_FORWARDED_FOR']);
        $decoder = json_decode($response);
        $decoderscore = $decoder->score;
        $decodererrorcode = $decoder->error - codes;
    }
    if ($decoder->success == true) {
        echo '<script>var consoletext2 = {status:"谷歌验证码运行正常。(Google reCAPTCHA is running)",success:"' . $decoder->success . '"};console.log(consoletext2)</script>';
        if ($decoder->score > "0.5") {
					echo "<center>".$response."</center>";
			echo '<script>var consoletext5 = {status:"谷歌验证码通过。(Pass reCAPTCHA successfully)",score:"'.$decoderscore.'"};console.log(consoletext5)</script>';
        } else {
            if ($captcha) {
						echo "<center>".$response."</center>";
                echo '<center><div><center><font color="red" size="1">⚠️谷歌验证得分太低。(⚠️Score too low)</font></center></div></center><script>var consoletext3 = {status:"谷歌验证码未通过。(Failed to pass reCAPTCHA)",score:"' . $decoderscore . '<=0.5",reason:"min score to access it is 0.50001"};console.log(consoletext3)</script>';
            }
        }
    } else {
				echo "<center>".$response."</center>";
        echo '<center><div style="top:-10px" ><center><font color="red" size="1">⚠️谷歌验证失败，请重试。(⚠️Please try again later)</font></center></div></center><script>var consoletext3 = {status:"谷歌验证码未通过。(Failed to pass reCAPTCHA)",success:"' . $decoder->success . '",errorcodes:"' . $decodererrorcode . '"};console.log(consoletext3)</script>';
    }
}?>
<br><br><br><br><br><br><footer><center>可以查看浏览器Console获取验证情况(Check the Console of browser for detail)</center>
<br><br><br><br><center><a href="https://blog.niuzhaohang.top">My Blog</a>&nbsp;&nbsp;&nbsp;  <a href="https://github.com/Koukotsukan/Google-reCAPTCHA-v3-PHP-Demo">Github</a></center></footer>
</footer>
</html>
 
