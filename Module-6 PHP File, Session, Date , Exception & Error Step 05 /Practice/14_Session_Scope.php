<?php

/**
 * Accessing session data from all domain. When we want to access the domain data from subdomain or the subdomain data from domain we face an issue.
 * Now to prevent the issue we need to identify the Session data in every domain. Lets try to solve the issue with an example:
 * 
 * 1st      : Create an Domain. (Name: 14_Session_Scope)
 *            Create 2 file (Name: session.php, sd.php)
 * 2nd      : Create 2 Subdomain (Name: t1, t2) 
 *            In t1 create 2 file (Name: session.php, sd.php)
 *            In t2 create 1 file (Name: session.php)
 * 3rd      : Start a session in Main domain session file. 
 *            EX: session_name('myapp');
 *                session_start([
 *                    'cookie_domain'=>'st.com',
 *                    'cookie_path'=>'/'
 *                ]);
 *                $_SESSION['data']='Hello World';
 *                echo $_SESSION['data']; 
 *            And echo the session in main domain sd file:
 *            EX: session_name('myapp');
 *                session_start([
 *                    'cookie_domain'=>'st.com',
 *                    'cookie_path'=>'/'
 *                ]);
 *                echo $_SESSION['data'];
 * 4th      : Check it in browser if its working or not.
 * 
 * 
 * 
 */

echo "14 (Session) Discussion of the scope of the session: \n";

?>