<?php include("./conf.php");
if(isset($_GET['blogid']) && isset($_GET['blogtitle'])
    && is_numeric($_GET['blogid'])){
    $bid=trim(mysqli_escape_string(db::conn(),$_GET['blogid']));
    $btitle=trim(mysqli_escape_string(db::conn(),$_GET['blogtitle']));
    $dbGet=db::stmt("SELECT * FROM `discuss` WHERE id='$bid' LIMIT 1");
    $fetchAss=mysqli_fetch_assoc($dbGet);
    if($_GET['blogtitle']!==tools::replaceUriNoChar($fetchAss['title'])){
        exit(header("Location: ".site::url("domain")."/blogdiscuss/".$bid."/".tools::replaceUriNoChar($fetchAss['title'])));}}else{exit("0.");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $headTitle=site::name." | Blog / Discuss";include("ret/head.php");
    if(site::url("servername") !== "localhost"){
        include("ret/ads/popads.php");
    }?>
    <style type="text/css">
        .tabr{padding:12px 14px;background:#272e52;border-radius:12px}
        ul{padding-left:12px;margin:12px 0;}
    </style>
</head>
<body style="background:#151d3d;color: #fff;">
<?php include("ret/header.php");?>

<section class="container cbodyieeoo">
    <div style="width:65%;" class="tabr">
        <h1 style="text-transform:capitalize;font-size:1.9rem"><?php echo $fetchAss['title'];?></h1>
        <div style="text-align:left;"><?php echo preg_replace('/@{\[acid: domain\]}/', site::url('servername'), $fetchAss['description']);?></div>
    </div>
    <div style="width:35%;margin-left:12px" class="tabr">
        <h2 style="margin:32px 0">Other Topics</h2>
        <div style="text-align:start;padding-left:12px;"><?php
        $gsd=db::stmt("SELECT * FROM `discuss` order by RAND() LIMIT 10");
        while($ag=mysqli_fetch_assoc($gsd)){
            if($ag['id'] !== $bid){?>
            <a href="/blogdiscuss/<?php echo $ag['id'];?>/<?php echo tools::replaceUriNoChar($ag['title']);?>" style="color:#fff;margin-top:6px;"><img alt="KeyChain Icon" data-lazysrc="/ret/img/link.svg" style="width:26px;padding-right:7px;filter:invert(0.5) sepia(11) saturate(15) hue-rotate(354deg);"/><?php echo $ag['title'];?></a>
        <?php }}?></div>
    </div>
</section>
<section class="container" style="margin-top:42px;background:#272e52;padding:21px;border-radius:12px;">
<div id="disqus_thread"></div>
<?php 
if(!in_array($_GET['blogid'], ['845345','353491234','543451235','95912345','38549545'])){?>
<script id="dsq-count-scr" src="//fodonn.disqus.com/count.js" async></script>
<script>
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://fodonn.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<?php }?>
</section>

<footer>
<?php include("ret/footer.php");?>

</footer>
</body>
</html>