<?php

// MySQL Ragnarok Database Information
$config = array(
'port'				=>'3306',					// Port that MySQL runs on if unsure leave this alone
'host'				=>'127.0.0.1',				// MySQL host, get this from your hosting providor
'db'				=>'ragnarok',				// MySQL ragnarok database name
'user'				=>'empathyro',				// MySQL ragnarok database username (This should NEVER be your root username!)
'pass'				=>'1679420drk',				// MySQL ragnarok database password

// MySQL Log Database Information
'lport'				=>'3306',					// Port that MySQL runs on if unsure leave this alone
'lhost'				=>'127.0.0.1',				// MySQL host, get this from your hosting providor
'ldb'				=>'ragnarok',					// MySQL log database name
'luser'				=>'ragnarok',				// MySQL log database username (This should NEVER be your root username!)
'lpass'				=>'ragnarok',					// MySQL log database password

// Server addresses for status display
'loginaddress'		=>'127.0.0.1',				// Login servers address
'charaddress'		=>'127.0.0.1',				// Character servers address
'mapaddress'		=>'127.0.0.1',				// Map servers address

'lPort'				=>'6900',					// Login servers address
'cport'				=>'6121',					// Character servers address
'mport'				=>'5121'					// Map servers address
);

// Server Information
$config = array(
'sname'				=>'EmRO',					// Server Name e.g EmRO
'brate'				=>'500x',					// Base Leveling Rate
'jrate'				=>'500x',					// Job Leveling Rate
'mvpcdrop'			=>'1%',
'cdrop'				=>'10%'
);

?>