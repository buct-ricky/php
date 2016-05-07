<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>选课系统登录页面</title>
</head>
<body >
<div id="header"> </div>
    <div style="float:left;width: 960PX;height: 619PX;padding-top: 50PX;text-align:center;position:relative;background-image:url(image/login.gif);">
        <img src="image/logo.png"/><br><br />
        <form  method="post" action="connect.php" name="form-n" id="form-id">
            <label>账号 : <input type="text" name="name"></label><br><br />
            <label>密码 : <input type="password" name="password"></label><br><br />
            <label><input type="radio" name="status" value="student" checked="checked">学生 &nbsp;
            <input type="radio" name="status" value="teacher" checked="checked">教师 &nbsp;
            <input type="radio" name="status" value="manager">管理员</label><br><br />
            <input type="submit" name="login" value="登录">
            <a href="register.php" target="rgt">注册</a><br><br />
        </form>
        <div style="color: #13d0ff;font-size: 12PX;" class="copyrights">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;© 版权所有 计科1302徐阳小组</div>
    </div>
</body>
</html>
