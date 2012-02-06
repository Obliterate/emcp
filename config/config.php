<?php

// Web Root Config

$webroot = array	(
	'siteroot'		=>'127.0.0.1:8000', 			// Format is HOST:PORT. Example: http://mywebsite.com || http://mywebsite.com:8000 || http://127.0.0.1
	'serverroot'	=>'',						// This is the base wep root where emcp will be. Example: /cp || /controlpanel || /home
),

// MySQL Ragnarok Database Information

$dconfig=array	(
	'port'			=> 3306,						// Port that MySQL runs on if unsure leave this alone.
	'hostname'		=> '127.0.0.1',				// MySQL host, get this from your hosting providor.
	'database'		=> 'ragnarok',				// MySQL ragnarok database name.
	'username'		=> 'ragnarok',				// MySQL ragnarok database username.
	'password'		=> 'ragnarok'				// MySQL ragnarok database password.
),

// MySQL Log Database Information

$ldconfig=array	(
	'port'			=> 3306,
	'hostname'		=> '127.0.0.1',
	'username'		=> 'ragnarok',
	'password'		=> 'ragnarok',
	'database'		=> 'ragnarok'
),

// Server addresses for status display

$sconfig= array	(
	'loginaddress'	=> '127.0.0.1',
	'charaddress'	=> '127.0.0.1',
	'mapaddress'	=> '127.0.0.1',
	'lPort'			=> 6900,
	'cport'			=> 6121,
	'mport'			=> 5121,
	'Database'		=> 'log'
),

// Server Features

$sfeature=array	(
	'',
	'',
	'',
	'',
	'',
	''
)

?>