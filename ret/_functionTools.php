<?php class site{
    const name="Fodonn";
    static function isSecure(){if((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443){return "https:";}else{return "http:";}}
    public static function url($vrvi){
        if ($vrvi=="domain"){
            return self::isSecure()."//".$_SERVER['SERVER_NAME'];
        }else if ($vrvi=="servername"){
            return $_SERVER['SERVER_NAME'];
        }else if($vrvi=="uri"){
            return $_SERVER['REQUEST_URI'];
        }else if($vrvi=="full"){
            return self::isSecure()."//".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        }else{
            die("url Erreor!!!!");
        }
    }
}
class tools{
    static function replaceUriNoChar($gsa){
        $ta=preg_replace('/[^a-zA-Z0-9_. -]/s','',$gsa);
        return str_replace(" ","-",$ta);
    }
    const googlePlayAndroidLink="https://play.google.com/store/apps/details?id=com.Fodonnapp.shares&hl=en_US&gl=US";
    const windowsDesktopLink="blogdiscuss/92365832/How-to-install-on-desktop---windows-781011";
}