<?php

/**
 * Working with Session:
 * 
 * Use Session      : 1st. "session_start();" this function should be called in the first line of the code. 
 *                    2nd. "$_SESSION['variables_name'] = 'data';" this is how we set the session variables.
 *                    3rd. "session_destroy();" this will help us to destroy the session.
 *                    
 * Set a counter    : session_start();
 *                    $_SESSION['counter'] = $_SESSION['counter'] ?? 0;
 *                    $_SESSION['counter']++;
 *                    echo $_SESSION['counter'];
 * 
 * '??'             : null coalescing operator.
 * 
 * Naming Session   : session_name('myapp'); ->This is how we can give a name to the session.
 * 
 * Set lifetime     : session_start([
 *                        'cookie_lifetime'=>60;
 *                    ]);
 *                    $_SESSION['name'] = 'Junaid';
 *                    echo $_SESSION['name'];
 * 
 * Reusable Session : We can use the same session to other files but this have to be in same domain.
 *                    Example: session_name('myapp'); //not mendatory
 *                             session_start();
 *                             echo $_SESSION['name'];
 *  
 */

echo "10 (Session) Creating Sessions and Working with Session Data: \n";

?>