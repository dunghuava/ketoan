<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    @define('_template','/templates/');
    @define('_source','/sources/');
    @define('_lib','/lib/');

    include "lib/config.php";
    include "lib/function.php";
    global $d;
    $d = new func_index($config['database']);


    if(isset($_POST['login'])){
        $user_hash = sha1($d->clean(addslashes($_POST['input-username'])));
        $pass_hash = sha1($d->clean(addslashes($_POST['input-password'])));

        $login = $d->o_fet("select * from #_user where user_hash = '$user_hash' and pass_hash = '$pass_hash' and quyen_han>=1");
       
        if(count($login)>0 && $pass_hash==$login[0]['pass_hash']) {
            $_SESSION['id_user'] = $login[0]['id'];
            $_SESSION['user_admin'] = $login[0]['tai_khoan'];
            $_SESSION['user_hash'] = $user_hash;
            $_SESSION['quyen'] = @$login[0]['quyen_han'];
            $_SESSION['name'] = @$login[0]['ho_ten'];
            $_SESSION['is_admin'] = $login[0]['is_admin'];
            
            $d->location("index.php");
        }else{
            $err = 'Tài khoản hoặc mật khẩu chưa đúng.';
        }
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Đăng nhập hệ thống</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="./css/style.min.css" rel="stylesheet" />
    <link href="./css/style_responsive.css" rel="stylesheet" />
    <link href="./css/style_default.css" rel="stylesheet" id="style_color" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        .login-header{
            width: 410px;
            margin: 100px auto 0;
            border-radius: 5px;
        }
        .login-header .alert-custom h3{
            font-size: 16px;
            margin-top: 0px;
        }
        .login-header .alert-custom{
            padding: 10px;
            border-radius: 5px;
        }
        .huong-dan{
            text-align: left;
            padding-left: 15px;
            font-size: 14px;
        }
        .red{ color: red; }
        #login{
            margin-top: 85px;
        }
        @media(max-width: 767px){
            .control-wrap h4{ text-align: center; }
        }
        
    </style>
</head>
<body id="login-body">
    <div class="clearfix"></div>
    <div id="login">
        <form id="loginform" class="form-vertical no-padding no-margin" action=""  method="post"/>
        <div class="lock">
            <i class="icon-lock"></i>
        </div><div class="control-wrap">
        <h4 style='margin-top:-3px'>Đăng nhập hệ thống</h4>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on">
                        <i class="icon-user"></i>
                    </span>
                    <input id="input-username" name="input-username" onchange="coockie()" type="text" placeholder="Username" /></div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on">
                            <i class="icon-key"></i>
                        </span>
                        <input id="input-password" name="input-password" type="password" placeholder="Password" />
                    </div>
                    <div>
                        <font class='err' style="color: red"><?=@$err?></font>
                    </div>
                    <div class="mtop10">
                        <div class="block-hint pull-left small">
                            <input type="checkbox" name="checkbox" id="" /> Ghi nhớ </div>
                            <div class="block-hint pull-right">
                                <a href="javascript:;" class="" id="forget-password">Quên mật khẩu?</a>
                            </div>
                        </div>
                        <div class="clearfix space5"></div>
                    </div>
                </div>
            </div>
            <input type="submit" id="login-btn" name="login" onclick="return kiem_tra_login()" class="btn btn-block login-btn" value="Login" />
        </form>
        <form id="forgotform" class="form-vertical no-padding no-margin hide" action="" />
        <p class="center">Nhập địa chỉ email đã đăng ký với user.</p>
        <div class="control-group"><div class="controls">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input id="input-email" name="quen_mat_khau" type="text" placeholder="Email" />
            </div>
        </div>
        <div class="space20"></div>
    </div>
    <input type="button" id="forget-btn" class="btn btn-block login-btn" value="Submit" />
</form>
</div>
<script src="./js/jquery-1.8.3.min.js"></script><script src="./assets/bootstrap/js/bootstrap.min.js"></script>
<script src="./js/jquery.blockui.js"></script>

</body>
</html>
<script type="text/javascript" charset="utf-8" async defer>
    function kiem_tra_login(){
        if($("#input-username").val() == ''){
            $("#input-username").focus();
            $(".err").text("Chưa nhập tên tài khoản");
            return false;
        }else if($("#input-password").val() == ''){
            $("#input-password").focus();
            $(".err").text("Chưa nhập mật khẩu");
            return false;
        }else return true;
    }
</script>

<style type="text/css">
    @media(max-width: 991px){
        #login{ margin-top: 110px !important; }
        .login-header{ width: 100%; margin-top: 40px;  }
        .login-header .alert-custom h3{ font-size: 13px; line-height: 20px; }
        .huong-dan{ padding: 0; font-size: 12px; }
    }
    @media(max-width: 320px){
        .huong-dan{ padding: 0; font-size: 11px; }
    }
</style>