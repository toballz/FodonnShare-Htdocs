<?php
include("./conf.php");
if(isset($_GET['auttype']) && $_GET['auttype'] == "logout"){
    $_SESSION['username']=[];
    session_destroy();
    exit(header("Refresh:0; url=?"));
}?>
<!DOCTYPE html>
<html lang="en" style="height:100%;">
<head>
    <?php $headTitle=site::name." | Share Files and Data";include("ret/head.php");
    if(site::url("servername") !== "localhost"){include("ret/ads/popads.php");}
    ?>
</head>
<body style="background:#151d3d;color:#fff;height:100%;">
    <?php include("ret/header.php");?>

<ul id="ttileUL"><?php foreach(str_split(strtoupper(site::name)) as $o=>$a){echo '<li><input type="checkbox" '.(($o==2||$o==3)?'checked':'').'/><div>'.$a.'</div></li>';}?></ul>

<section style="width:100%;max-width:750px;margin: auto;height:100%;">
    <iframe src="/userpanel/" id="usserpannel" scrolling='yes'>
    </iframe>

</section>


 

    <footer>
    <?php include("ret/footer.php");?>
    </footer>
</body>
</html>