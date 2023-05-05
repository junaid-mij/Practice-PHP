<?php

/**
 * Cookies: In PHP, cookies are small text files stored on the user's computer by the web server to save and 
 * retrieve data for maintaining stateful information or tracking user preferences throughout a website visit.
 * 
 * Set a Cookie   : setcookie('name','data_name');
 * Add Time       : setcookie('name','data_name',time()+100);
 * Set Path       : setcookie('name','data_name','/path/name); 
 * Show Cookie    : echo $_COOKIE['name'];
 * 
 * Set Cookie using javascript : Go to this site-https://github.com/js-cookie/js-cookie in this site everything is written down how to use cookiew with javascript.
 * Example                     : <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
 *                               <script>
 *                                   alert(Cookies.get('cookiename'));
 *                               </script>
 * Store array data            : setcookie("array['id']",1,time()+60);
 *                               setcookie("array['name']",'Junaid',time()+60);
 * Now to show the data        : foreach($_COOKIE['array'] as $key=>$value){
 *                                   echo $key."=".$value."<br/>";
 *                               }
 * We can also store array data using Serialize & Unserialize method.
 */

echo "16 (Session) Details on cookies: \n";

?>