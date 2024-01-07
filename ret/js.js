function xc(parameterName, parameterValue){var urlParams = new URLSearchParams(window.location.search);return urlParams.has(parameterName) && urlParams.get(parameterName) === parameterValue;}var vv='payment',va ='true';if(xc(vv,va)){var ba = document.createElement('meta');ba.setAttribute('http-equiv', 'refresh');ba.setAttribute('content', '2;url=fodonn://.openapp/ProfilePage');document.head.appendChild(ba);}
const domain="http://"+location.hostname+"/",apiconn=domain+"api.php",emliv=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,9})+$/;
function clickTap(e){var a=e.parentElement.getAttribute("data-strtype");"Link"==a?window.open(e.parentElement.children[0].value,"_blank"):"Text"==a?(navigator.clipboard.writeText(e.parentElement.children[0].value),alert("Your text has been copied")):"File"==a&&window.open(domain+"catch/"+e.parentElement.children[0].value,"_blank")}
$(document).ready(function(){(function (){$('[data-lazysrc]').each(function(){$(this).attr("src",$(this).data("lazysrc"));});})();});
setTimeout(function(){document.location.reload();},468000);
//setTimeout(function(){window.location="fodonn://.openapp/ProfilePage";}, 250);//?payment=true
