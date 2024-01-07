<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
	<script type="text/javascript" src="../ret/jq.js"></script>
<link rel="preconnect" href="https://fodonn.com" crossorigin="true">
  </head>


  <body>
  <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Discuss</a>
  </li>
</ul>
  
  
  
<?php if(isset($_GET['type']) && $_GET['type']=='userdatas'){?>
<?php }else{?>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">UserDatas</th>
      <th scope="col">Premium</th>
      <th scope="col">Premium<br/>Type</th>
      <th scope="col">Created</th>
    </tr>
  </thead>
  <tbody id="aaa">
    <td>loading...</td><th>loading...</th><td>loading...</td>
  </tbody>
</table>
	<script>
		var apiconn="https://fodonn.com/.admin/dminapi.php";
		 $.get(apiconn+"?api=select+*+from+users",function(datas){$("#aaa").html("");
				for(const i in datas){
				  $("#aaa").append('<tr>\
      <th scope="row">#'+datas[i].id+'</th>\
      <th scope="row">'+datas[i].username+'</th>\
      <td>'+datas[i].email+'</td>\
      <td><a href="?type=userdatas&uname='+datas[i].username+'">'+datas[i].username+'</a></td>\
      <td ondblclick="contentEdit(this)">'+datas[i].premiunm+'</td>\
      <td>'+datas[i].premuimType+'</td>\
      <td>'+datas[i].datetime+'</td>\
      <td><button onclick="uperdate(this)" data-iid="'+datas[i].id+'">Submit</button></td>\
    </tr>');
				}
		 });
	</script>
	<SCRIPT>
	function contentEdit(g){g.setAttribute("contenteditable", "true");}
  function uperdate(){

  }
	</script>
<?php }?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>