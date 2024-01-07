<?php include (__DIR__."/../conf.php");?>
<?php
$salt="\u2315";
header('Content-Type: application/json');
//**//forgot password
//**//contact us

//return arr['code']['message']
if (isset($_GET['api']) && $_GET['api'] !== "") {
	
$counter=db::stmt("SELECT 
            COUNT(id) AS totalusers,
            COUNT(CASE WHEN `premiunm` = '1' THEN id END) AS numuserspremiumchk,
			
            COUNT(CASE WHEN `premuimType` = 'weekly' THEN id END) AS weeklysub,
            COUNT(CASE WHEN `premuimType` = 'monthly' THEN id END) AS monthlysub,
            COUNT(CASE WHEN `premuimType` = 'yearly' THEN id END) AS yearlysub,
            COUNT(CASE WHEN `premuimType` = 'onetime' THEN id END) AS onetimesub,
            COUNT(CASE WHEN `premuimType` = 'free' THEN id END) AS freesub,
			
			
    (SELECT `countt` FROM traffic WHERE `fromwhichwebsite` = 'fb') AS trafficfromfacebook ,
    (SELECT `countt` FROM traffic WHERE `fromwhichwebsite` = 'ig') AS trafficfrominstagram ,
    (SELECT `countt` FROM traffic WHERE `fromwhichwebsite` = 'pin') AS trafficfrompinterest ,
    (SELECT `countt` FROM traffic WHERE `fromwhichwebsite` = 'tw') AS trafficfromtwitter ,
    (SELECT `countt` FROM traffic WHERE `fromwhichwebsite` = 'ggl') AS trafficfromgoogle ,
    (SELECT `countt` FROM traffic WHERE `fromwhichwebsite` = 'dis') AS trafficfromtwitterdiscord 
			
			
        FROM users");

$arrjson=[];
$countArray=mysqli_fetch_assoc($counter);


$arrjson['numusers']=$countArray['totalusers'];
$arrjson['numuserspremium']=$countArray['numuserspremiumchk'];

$arrjson['activeweekelysub']=$countArray['weeklysub'];
$arrjson['activemonthlysub']=$countArray['monthlysub'];
$arrjson['activeyearlysub']=$countArray['yearlysub'];
$arrjson['activeonetimesub']=$countArray['onetimesub'];
$arrjson['activefreesub']=$countArray['freesub'];


$arrjson['activeweekelysub']=$countArray['weeklysub'];
$arrjson['activemonthlysub']=$countArray['monthlysub'];
$arrjson['activeyearlysub']=$countArray['yearlysub'];
$arrjson['activeonetimesub']=$countArray['onetimesub'];
$arrjson['activefreesub']=$countArray['freesub'];


$arrjson['trafficfromfacebook']=$countArray['trafficfromfacebook'];
$arrjson['trafficfrominstagram']=$countArray['trafficfrominstagram'];
$arrjson['trafficfromtwitter']=$countArray['trafficfromtwitter'];
$arrjson['trafficfrompinterest']=$countArray['trafficfrompinterest'];
$arrjson['trafficfromgoogle']=$countArray['trafficfromgoogle'];
$arrjson['trafficfromtwitterdiscord']=$countArray['trafficfromtwitterdiscord'];
//while($aj=mysqli_fetch_assoc($acv)){
//	$arrjson[]=$aj;
//}
print_r( json_encode($arrjson) );





}