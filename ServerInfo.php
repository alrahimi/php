<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['PHP_SELF']	; 
echo " :  the filename of the currently executing script";
echo "<br>";


echo $_SERVER['GATEWAY_INTERFACE']	; 
echo " :  the version of the Common Gateway Interface (CGI) the server is using";
echo "<br>";

echo $_SERVER['SERVER_ADDR']	; 
echo " :  the IP address of the host server";
echo "<br>";

echo $_SERVER['SERVER_NAME']	; 
echo " :  the name of the host server (such as www.w3schools.com)";
echo "<br>";

echo $_SERVER['SERVER_SOFTWARE']	; 
echo " :  the server identification string (such as Apache/2.2.24)";
echo "<br>";

echo $_SERVER['SERVER_PROTOCOL']	; 
echo " :  the name and revision of the information protocol (such as HTTP/1.1)";
echo "<br>";

echo $_SERVER['REQUEST_METHOD']	; 
echo " :  the request method used to access the page (such as POST)";
echo "<br>";

echo $_SERVER['REQUEST_TIME']	; 
echo " :  the timestamp of the start of the request (such as 1377687496)";
echo "<br>";


echo $_SERVER['QUERY_STRING']	; 
echo " :  the query string if the page is accessed via a query string";
echo "<br>";

echo $_SERVER['HTTP_ACCEPT']	; 
echo " :  the Accept header from the current request";
echo "<br>";

echo $_SERVER['HTTP_ACCEPT_CHARSET']	; 
echo " :  the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)";
echo "<br>";

echo $_SERVER['HTTP_HOST']	; 
echo " :  the Host header from the current request";
echo "<br>";

echo $_SERVER['HTTP_REFERER']	; 
echo " :  the complete URL of the current page (not reliable because not all user-agents support it)";
echo "<br>";

echo $_SERVER['HTTPS']; 
echo "Is the script queried through a secure HTTP protocol";
echo "<br>";

echo $_SERVER['REMOTE_ADDR']	; 
echo " :  the IP address from where the user is viewing the current page";
echo "<br>";

echo $_SERVER['REMOTE_HOST']	; 
echo " :  the Host name from where the user is viewing the current page";
echo "<br>";

echo $_SERVER['REMOTE_PORT']	; 
echo " :  the port being used on the users machine to communicate with the web server";
echo "<br>";

echo $_SERVER['SCRIPT_FILENAME']	; 
echo " :  the absolute pathname of the currently executing script";
echo "<br>";

echo $_SERVER['SERVER_ADMIN']	; 
echo " :  the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs";
echo " on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)";
echo "<br>";

echo $_SERVER['SERVER_PORT']	; 
echo " :  the port on the server machine being used by the web server for communication (such as 80)";
echo "<br>";

echo $_SERVER['SERVER_SIGNATURE']	; 
echo " :  the server version and virtual host name which are added to server-generated pages";
echo "<br>";

echo $_SERVER['PATH_TRANSLATED']	; 
echo " :  the file system based path to the current script";
echo "<br>";

echo $_SERVER['SCRIPT_NAME']	; 
echo " :  the path of the current script";
echo "<br>";

echo $_SERVER['SCRIPT_URI']	; 
echo " :  the URI of the current page";
echo "<br>";
?>