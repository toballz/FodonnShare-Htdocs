<?php include("./conf.php");
$lengthGenerateRandomString = 8;
function generateRandomString() {
    global $lengthGenerateRandomString;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $lengthGenerateRandomString; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}
function enco($str){ 
    $randStr=generateRandomString();
    $str1=base64_encode($str);
    $str2= str_rot13($str1);
    $str3=base64_encode($str2);
    $str4=str_rot13($str3);
    return $randStr.$str4;
}
function deco($str){
    global $lengthGenerateRandomString;
    $removeFirstrandStrCharacters=substr($str, $lengthGenerateRandomString);
    $str1=str_rot13($removeFirstrandStrCharacters );
    $str2= base64_decode($str1);
    $str3=str_rot13($str2);
    $str4=base64_decode($str3);
    return $str4;
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Fodonn | Reset Your Password.</title>
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Nunito&display=swap');

    body,
    html,
    .mainbody,
    *,
    :after,
    :before {
        box-sizing: border-box;
    }

    body {
        background-color: #0b2c4c;
        font-family: 'Comfortaa', sans-serif;
    }

    .mainbody {
        max-width: 590px;
        background: #f6f9fc;
        margin: auto;
        padding: 42px;
    }

    .resetbuttonhref {
        text-align: center;
        padding: 12px;
        text-decoration: none;
        border-radius: 12px;
        display: block;
        background: blue;
        color: #fff;
        margin-top: 12px;
        margin-bottom: 12px;
        font-family: 'Nunito', sans-serif;
    }
    </style>
</head>

<body>




    <?php  
if(isset($_GET['resetp']) && $_GET['resetp'] != ""){
    $resetpId=mysqli_real_escape_string(db::conn(),$_GET['resetp']);
    $removeSpoiler4rmBase64deco="";
    $stmtDBresult=db::stmt("SELECT `username`,`password` FROM `users` WHERE `id`='$resetpId' LIMIT 1");
    
    if(mysqli_num_rows($stmtDBresult)<1){exit("not_valid_user-num");}

    $DBFetchAssoc= mysqli_fetch_assoc($stmtDBresult);
    $fetchUsername=$DBFetchAssoc['username'];
    $fetchPassword=$DBFetchAssoc['password'];
    
    $currentDateTimeAdd2Hrs = new DateTime();
    $currentDateTimeAdd2Hrs->add(new DateInterval('PT2H'));// Add 2 hours
    //
    $vanl=[];
    $vanl["arovak"]=$currentDateTimeAdd2Hrs->format('U');
    $vanl["passtk"]=$fetchPassword;
    $passwordResetLink= enco(json_encode($vanl));
    //exit(header("Refresh:0; url=?")); 
?>
    <main class="mainbody">
        <header>
        </header>

        <section>
            <h3> <?php echo site::name;?> - Share , <u>Password Reset</u>.</h3>
            <hr>
            <h1>You requested to change your password?</h1>
            <div>Hello <b><?php echo $fetchUsername;?>,</b>
                <br>
                <br>
                We have sent you this email to reset your password.
            </div>
            <br>
            <div>You can reset your password by clicking the button below!</div>
            <a href="<?php echo site::url("domain")."/resetpow.php?resetpr=".$passwordResetLink;?>"
                class="resetbuttonhref">Reset your password</a>
            <h5>Note; this reset link will expire in 2 hours. After 2 hours, you must submit a new password reset
                request.
            </h5>
            <br>
            <div>If you did not request a new password, please let us know immediately by <a
                    href="<?php echo site::url("domain");?>/blogdiscuss/845345/Contact-Us">contacting us. Click here</a>
            </div>
            <br>
            <br>
            <hr>
            <br>
            <h6><i>--- <?php echo site::name;?></i></h6>
        </section>


        <footer>
        </footer>
    </main>
    <?php }elseif(isset($_GET['resetpr']) && $_GET['resetpr'] != ""){
        $resetpri=$_GET['resetpr'];
        $resetpriDeco=json_decode(deco($resetpri));
        $currentDateTime = new DateTime();
        $currentDateTime=$currentDateTime->format("U");
    ?>
    <style>
    .mainbody input {
        display: block;
        width: 100%;
        margin-bottom: 12px;
        padding: 12px;
    }

    [name="cp"] {
        max-width: 422px;
        margin: auto;
        padding: 21px !important;
        cursor: pointer;
        background: #39396e;
        color: #fff
    }
    </style>
    <main class="mainbody">
        <section>

            <?php
            $pwrGet=$resetpriDeco->passtk;
            function taha($stringg, $bgcolor){return '<div
                style="background:'.$bgcolor.';padding:20px;color:#fff"><b>'.$stringg.'</b></div>';}
            if($currentDateTime >= $resetpriDeco->arovak){
                exit(taha("Reset Link Expired not_valid_user-time", "red"));
            }
            $stmtDBresult=db::stmt("SELECT `username`,`password` FROM `users` WHERE `password`='$pwrGet' LIMIT 1");
            if(mysqli_num_rows($stmtDBresult)<1){exit(taha("Link Expired not_valid_user-pop","red"));}

            if(isset($_POST['pw']) && strlen($_POST['pw']) > 6 
            && isset($_POST['cp']) && $_POST['cp'] != ""){
                $pwr2set=md5($_POST['pw'].tools::passwordsalt);
                $stmtDBresul1t=db::stmt("UPDATE `users` SET `password` = '".$pwr2set."' WHERE `users`.`password` = '$pwrGet';");
                if($stmtDBresul1t){
                    exit(taha("Password updated","green"));
                }else{
                    echo taha("password not updated. Try again or contact us","red");
                }  
            }?>
            <h1>Reset your password - <?php echo mysqli_fetch_assoc($stmtDBresult)['username'];?></h1>
            <h4><?php echo site::name;?> - Share</h4>
            <form onsubmit="handleiSubmit(event)" action="<?php echo site::url("full");?>" method="POST">
                <label>Type your new password.</label>
                <input type="password" placeholder="Type your new password." minlength="6" name="pw" />
                <br>
                <label>Re-type your password.</label>
                <input type="password" placeholder="Type your password again." minlength="6" name="pwv" />
                <br>
                <input type="submit" value="SUBMIT" name="cp" />
            </form>
        </section>
    </main>

    <?php }else{
        exit("not_valid_user-geg");
    }?>
    <script>function handleiSubmit(event){event.preventDefault();var passwordInput = document.querySelector('input[name="pw"]'),passwordInputv = document.querySelector('input[name="pwv"]');if(passwordInput.value.length < 5){alert("Your passwords cannot be empty");} else if (passwordInput != passwordInputv) {alert("Your passwords are not the same!");}else{event.submit();}}</script>

</body>

</html>