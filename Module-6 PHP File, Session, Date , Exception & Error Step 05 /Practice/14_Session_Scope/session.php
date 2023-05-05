<?php

session_name('myapp');
session_start([
    'cookie_domain'=>'st.com',
    'cookie_path'=>'/'
]);
$_SESSION['data']='Hello World';
echo $_SESSION['data']; 

?>