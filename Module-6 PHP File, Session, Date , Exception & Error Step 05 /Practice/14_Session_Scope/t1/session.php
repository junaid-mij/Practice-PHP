<?php

session_name('myapp');
session_start([
    'cookie_domain'=>'st.com',
    'cookie_path'=>'/'
]);
$_SESSION['data2']='Hello earth';
echo $_SESSION['data2']; 

?>