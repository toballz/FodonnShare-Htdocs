<?php include("./conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $headTitle=site::name." | Home"; include("ret/head.php");?>
</head>
<body>
<header style="background-image: radial-gradient(circle,#fff,red,red,red,rgb(255 0 0 / 55%),#1c23495e,#1c23499e,rgb(28 35 73 / 67%),rgb(28 35 73 / 64%),#ff3535,red,#f58286);z-index:12;">
    <div style="display:flex;position:sticky;top:1px;justify-content:space-between;padding:1rem;z-index:121;">
       <img data-lazysrc="ret/img/logo.png" alt="<?php echo site::name;?> Logo" style="width:96px" />
       <div style="display:flex;">
           <!--<a href="#upgrade" class="getpremiumhome">Get Premium</a>-->
           <a href="#upgrade" class="getpremiumhome">Get Premium - unlimited</a>
       </div>
    </div>
    <div class="container" id="download">
        <div style="overflow: hidden;"><h1 class="bignameinheader"><span><?php echo site::name;?></span><span>APP</span></h1>
            <div class="subtitlehome">A bookmark for files & text on all devices.<br/></div>
        </div>

        <div class="downbtnc">
            <div style="display: inline-flex;width:100%;justify-content: center"><a target="_blank" href="<?php echo site::url("domain").tools::windowsDesktopLink;?>" class="getpremiumhome" style="display:inline-flex;background: rgb(0 0 0 / 44%);"><img alt="Windows Computer Icon" class="downloadb2bhome" data-lazysrc="ret/img/windows.svg" style="filter:invert(0.5) sepia(11) saturate(15) hue-rotate(191deg);"/><span>Download for Windows</span></a></div>
            <div style=" display: inline-flex;width:100%;justify-content: center"><a href="<?php echo tools::googlePlayAndroidLink;?>" target="_blank" class="getpremiumhome" style="display:inline-flex;background: rgb(0 82 255 / 55%);"><img alt="Android Icon" class="downloadb2bhome" data-lazysrc="ret/img/android.svg" style="filter: invert(0.5) sepia(11) saturate(15) hue-rotate(122deg);" /><span>Download for Android</span></a></div><br/><br/>
        </div>
       <div style="display:inline-flex;width:100%;justify-content: center"><a href="/userpanel.php#ttileUL" class="getpremiumhome" style="max-width:287px; display: inline-flex; "><img alt="Web World Icon" class="downloadb2bhome" data-lazysrc="ret/img/web.svg"/><span>Use Online</span></a></div><br/><br/><br/><br/><br/>  
    </div>
</header>
<br><br><br>

<div class="homeheader">
    <div class="container">
    <div style="background:#272e52;color:#fff;">    
        <div class="ahdsd42" style="box-shadow:1px 2px 3px 1px #1c2349;">
            <div style="width:50%"><img alt="Animated man with multiple hands with devices" data-lazysrc="ret/img/productivity.png"/></div>
            <div style="width:50%"><h3>For both developers and everyday users</h3><div>offering a convenient solution for transferring files, data, code, images, and links between devices.</div></div>
        </div>
        <div class="ahdsd42" style="flex-flow: row-reverse;">
            <div style="width:50%"><img alt="Different devices" data-lazysrc="ret/img/pcd.png"/></div><div style="width:50%"><h3>You can effortlessly pick up where you left off on one device</h3><div>and seamlessly continue your work on another device. Improve your productivity across all your devices.</div></div>
            </div>
        </div>
    </div>
</div>



<section class="container" id="upgrade"> 

<h1 style="text-align:center;color:#fff;font-size:26px;">Select a Plan. Get Full Access </h1>
<div class="priceinner">

<?php
    $vemail=isset($_SESSION['email'])?"&prefilled_email=".$_SESSION['email']:null;
    $vid=isset($_SESSION['userid'])?"&client_reference_id=".$_SESSION['userid']:null;

    $Pdon_weekly="https://buy.stripe.com/eVaaF54CV3s8b728wx?a=a".$vemail.$vid;
    $Pdon_monthly="https://buy.stripe.com/00g6oP0mF3s87UQfZ0?a=a".$vemail.$vid;
    $Pdon_yearly="https://buy.stripe.com/00gfZp5GZ2o48YU8wz?a=a".$vemail.$vid;
    $Pdon_onetime="https://buy.stripe.com/9AQ9B1c5n2o4dfa9AE?a=a".$vemail.$vid;
foreach (array(
    ["Weekely","Week","1.99","",$Pdon_weekly],
    ["Monthly","Month","4.99","2.97",$Pdon_monthly],
    ["Yearly","year","69.99","10.11",$Pdon_yearly],
    ["One Time","Once","299.99","",$Pdon_onetime],

) as $k => $h){?>
<div><ul><li class="header" style="<?php if($k==1){echo "background-color:#04AA6D;color:#fff";}?>"><?php echo $h[0];?></li><li class="grey">$<?php echo $h[2];?> <?php echo ($k==3)?"-":"/";?> <?php echo $h[1];?></li><?php echo ($k==1 || $k==2)?"<li style='color:#04AA6D'>Save - $".$h[3]."</li>":"";?><li>Upload unlimited text / link</li><li>Ads Free</li><li>Upload Photos</li><li>Upload Files</li><li>Unlock all features</li><li class="grey"><a target="blank" href="<?php echo isset($vid)?$h[4]:'/userpanel.php?auttype=signup';?>" class="button">Get Now</a></li></ul></div>
<?php }?>
</div>
<br><br/><br><br/><br><br/>
</section>


<footer>
<?php include("ret/footer.php");?>
</footer>


</body>
</html>