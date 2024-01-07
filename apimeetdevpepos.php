<?php class db{
    const servername = "localhost"; 
    const username = "root";//u723978224_Fodonnshare
    const password = "";//f!0MjP@aVH
    const dbname = "meetdevelopers";//u723978224_FodonnShareApp
    // Create a connection
    static function conn(){
        $rr= new mysqli(self::servername, self::username, self::password, self::dbname);
        if($rr->connect_error){
            die("Connection err: ");
        }else{return $rr;}
    }
    static function stmt($stm){
        return mysqli_query(self::conn(), $stm);
    }
}?>
<?php
$salt="\u2315";
 header('Content-Type: application/json');
 header('Access-Control-Allow-Origin: *'); 

$randUid=rand(99,999999);



//return arr['code']['message']
if (isset($_POST['api'])) {

    //signup
   if(isset($_POST['t']) && ($_POST['t']=="create:signup")){
       $emaili=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['emaili'])));
       $usernamei=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['usernamei'])));
       $passwordRaw=$_POST['passwordRaw'];
       $hashedpassword=md5($passwordRaw.$salt);

       if(db::stmt("INSERT INTO `userinfo` 
        (`id`,`username`, `email`, `password`, `datetime`) VALUES
         ('$randUid','$usernamei' ,'$emaili', '$hashedpassword', current_timestamp());")){
        $Jarr['code']=200;
        $Jarr['userid']="".$randUid;
        $Jarr['message']="User created successfully";

       }else{$Jarr['code']=500; $Jarr['message']="Account not created"; }
   }
    //login
   if(isset($_POST['t']) && ($_POST['t']=="access:login")){
       $emaili=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['emaili'])));
       $passwordRaw=$_POST['passwordRaw'];
       $hashedpassword=md5($passwordRaw.$salt);

       $dbm=db::stmt("SELECT * FROM `userinfo` WHERE `email`='$emaili' AND `password`='$hashedpassword' LIMIT 1;");
       if($dbm && mysqli_num_rows($dbm)>0){
        $dbmFetch=mysqli_fetch_assoc($dbm);
        $Jarr['code']=200;
        $Jarr['userid']="".$dbmFetch['id'];
        $Jarr['message']=$dbmFetch['email']." logged in!";

       }else{$Jarr['code']=500; $Jarr['message']="Wrong username or password!"; }
   }

 //update location
   if(isset($_POST['t']) && ($_POST['t']=="update:location")){
       $userIdi=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['userIdi'])));
       $lati=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['lati'])));
       $longi=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['longi'])));
       $dbm=db::stmt("UPDATE `userinfo` SET `location` = '$longi, $lati' WHERE `id` = '$userIdi';");
       if($dbm){
        exit("ok!");
       }else{
       exit("@null");}
   }



   //get message list
if(isset($_POST['t']) && ($_POST['t']=="get:messagelist")){
       $useridi=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['useridi'])));

       $dbm=db::stmt("SELECT `outgoing_msg_id`,`incoming_msg_id` FROM `usermessages` WHERE `outgoing_msg_id`='$useridi' OR `incoming_msg_id`='$useridi'");
       if($dbm && mysqli_num_rows($dbm)>0){
        $chats = array();
        while($ta=mysqli_fetch_assoc($dbm)){
            $chats[]=$ta;
        }

        $res=[];
        foreach ($chats as $isew) { 
                if($isew['incoming_msg_id'] !== $useridi && !in_array($isew['incoming_msg_id'],$res)){
                    $res[]=$isew['incoming_msg_id'];
                 }
                if($isew['outgoing_msg_id'] !== $useridi && !in_array($isew['outgoing_msg_id'],$res)){
                    $res[]=$isew['outgoing_msg_id'];
                } 
        }

        $dbm1=db::stmt("SELECT `id`,`username`,`location`,`image` FROM `userinfo` WHERE `id` IN (".implode(",", $res).")");
        if($dbm1 && mysqli_num_rows($dbm1) > 0){
            $chats1 = array();
            while($ta1=mysqli_fetch_assoc($dbm1)){
                $chats1[]=$ta1;
            }
            $Jarr['code']=200;
            $Jarr['userid']="".$useridi;
            $Jarr['message']=json_encode($chats1);
        }else{
            $Jarr['code']=404;
            $Jarr['message']="no user found!";
        }
       }else{
            $Jarr['code']=500;
            $Jarr['message']="No user list.";}
   }

//get chat chain
if(isset($_POST['t']) && ($_POST['t']=="get:chatmessage")){
       $mehouti=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['mehout'])));
       $yuhini=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['yuhin']))); 

       $dbm=db::stmt("SELECT `id`,`outgoing_msg_id`,`incoming_msg_id`,`messgae` FROM `usermessages` WHERE (`outgoing_msg_id`='$mehouti' AND `incoming_msg_id`='$yuhini') OR (`outgoing_msg_id`='$yuhini' AND `incoming_msg_id`='$mehouti') ORDER BY `id` DESC");

       if($dbm && mysqli_num_rows($dbm)>0){
            $chatMessage = array();
            while($ta=mysqli_fetch_assoc($dbm)){
                $chatMessage[]=$ta;
            }

            $Jarr['code']=200;
            $Jarr['message']=json_encode($chatMessage);
        }else{

            $Jarr['code']=404;
            $Jarr['message']="Message not found";
        }

   }
//send message
if(isset($_POST['t']) && ($_POST['t']=="upload:chatmessage")){
       $mehouti=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['messageFromi'])));
       $yuhini=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['messageToi']))); 
       $mesageChati=mysqli_real_escape_string(db::conn(),trim($_POST['messageChat'])); 

       $dbm=db::stmt("INSERT INTO `usermessages` (`incoming_msg_id`, `outgoing_msg_id`, `messgae`) VALUES ('$mehouti','$yuhini','$mesageChati');");

       if($dbm){
            $Jarr['code']=200;
            $Jarr['message']=1;
        }else{
            $Jarr['code']=500;
            $Jarr['message']="Message not uploaded";
        }

   }
//my user profile message
if(isset($_POST['t']) && ($_POST['t']=="get:myuserprofile")){
       $myuidi=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['myuid'])));

       $dbm=db::stmt("SELECT * FROM `userinfo` WHERE `id`='$myuidi';");

       if($dbm){
            $userP = array();
            while($ta=mysqli_fetch_assoc($dbm)){
                $userP[]=$ta;
            }

            $Jarr['code']=200;
            $Jarr['message']=json_encode($userP);
        }else{
            $Jarr['code']=500;
            $Jarr['message']="No user profile not uploaded";
        }

   }
//search      
if(isset($_POST['t']) && ($_POST['t']=="get:search")){
       $searchi=mysqli_real_escape_string(db::conn(),trim(strtolower($_POST['searchi']))).",";

       $dbm=db::stmt("SELECT * FROM `userinfo` WHERE `programingLanguage` LIKE '%$searchi%' ORDER BY `merit` DESC;");

       if($dbm){
            $userP = array();
            while($ta=mysqli_fetch_assoc($dbm)){
                $userP[]=$ta;
            }

            $Jarr['code']=200;
            $Jarr['message']=json_encode($userP);
        }else{
            $Jarr['code']=500;
            $Jarr['message']="No search.";
        }

   }



}else{
    echo 10;
}


//eventusakllluty 00000000000000000000
if(isset($Jarr)){echo json_encode($Jarr);}else{echo "{\"code\":500,\"message\":\"Internal Error! No response\"}";}


