<?php

if(!defined('mnminclude')){header('Location: ../error_404.php');die();}

	include_once(dirname(__FILE__).'/ez_sql_core.php');
	include_once(dirname(__FILE__).'/dbconnect.php');

	/**********************************************************************
	*  Author: Justin Vincent (justin@visunet.ie)
	*  Web...: http://php.justinvincent.com
	*  Name..: ezSQL_mysql
	*  Desc..: mySQL component (part of ezSQL databse abstraction library)
	*
	*/

	/**********************************************************************
	*  ezSQL error strings - mySQL
	*/

	$ezsql_mysql_str = array
	(
		1 => '<!DOCTYPE html>
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
			<head>
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/bootstrap.no-icons.min.css" media="screen" />
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/style.css" media="screen" />
				<style type="text/css">
				body {
					padding-top: 40px;
					position: relative;
					background-color: #fff;
					background-image: url(./templates/admin/img/grid-18px-masked.png);
					background-repeat: repeat-x;
				}
				.navbar-fixed-top, .navbar-fixed-bottom {
					position:absolute;
				}
				.navbar .nav > li > a {
					padding-top:11px;
				}
				</style>
				<title>Error!</title>
			</head>
			<body>
				<div class="container">
					<section id="maincontent">
						<div class="row">
							<div class="col-md-12">
								<legend>Error establishing a database connection!</legend>
								<ol>
									<li>Have you run the <a href = "./install/install.php">Pligg Installer</a> yet?</li>
									<li>Does the file /libs/dbconnect.php exist?</li>
									<li>Does the above file have the correct database username and password combination?</li>
									<li>Are you sure that you have typed the correct hostname? Typically this value is set to "localhost".</li>
									<li>Are you sure that the database server is running?</li>
								</ol>
							</div>
						</div><!--/.row-->
					</section><!--/#maincontent-->
				</div><!--/.container-->
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
				<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css" media="all" rel="stylesheet" type="text/css" />
				<!--[if lt IE 7]>
				<script type="text/javascript" src="./templates/admin/js/jquery/jquery.dropdown.js"></script>
				<![endif]-->
				<script type="text/javascript" src="./templates/admin/js/bootstrap.min.js"></script>
			</body>
			</html>',
		2 => '<!DOCTYPE html>
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
			<head>
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/bootstrap.no-icons.min.css" media="screen" />
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/style.css" media="screen" />
				<style type="text/css">
				body {
					padding-top: 40px;
					position: relative;
					background-color: #fff;
					background-image: url(./templates/admin/img/grid-18px-masked.png);
					background-repeat: repeat-x;
				}
				.navbar-fixed-top, .navbar-fixed-bottom {
					position:absolute;
				}
				.navbar .nav > li > a {
					padding-top:11px;
				}
				</style>
				<title>Error!</title>
			</head>
			<body>
				<div class="container">
					<section id="maincontent">
						<div class="row">
							<div class="col-md-12">
								<legend>Error establishing mySQL database connection!</legend>
								<ol>
									<li>Does the file /libs/dbconnect.php exist?</li>
									<li>Does the above file have the correct database username and password combination?</li>
									<li>Are you sure that you have typed the correct hostname? Typically this value is set to "localhost".</li>
									<li>Are you sure that the database server is running?</li>
									<li>Have you run the <a href = "./install/install.php">Pligg Installer</a> yet?</li>
								</ol>
							</div>
						</div><!--/.row-->
					</section><!--/#maincontent-->
				</div><!--/.container-->
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
				<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css" media="all" rel="stylesheet" type="text/css" />
				<!--[if lt IE 7]>
				<script type="text/javascript" src="./templates/admin/js/jquery/jquery.dropdown.js"></script>
				<![endif]-->
				<script type="text/javascript" src="./templates/admin/js/bootstrap.min.js"></script>
			</body>
			</html>',
		3 => '<!DOCTYPE html>
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
			<head>
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/bootstrap.no-icons.min.css" media="screen" />
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/style.css" media="screen" />
				<style type="text/css">
				body {
					padding-top: 40px;
					position: relative;
					background-color: #fff;
					background-image: url(./templates/admin/img/grid-18px-masked.png);
					background-repeat: repeat-x;
				}
				.navbar-fixed-top, .navbar-fixed-bottom {
					position:absolute;
				}
				.navbar .nav > li > a {
					padding-top:11px;
				}
				</style>
				<title>Error!</title>
			</head>
			<body>
				<div class="container">
					<section id="maincontent">
						<div class="row">
							<div class="col-md-12">
								<legend>Error establishing mySQL database connection!</legend>
								<p>Require a $dbname to select a database.</p>
							</div>
						</div><!--/.row-->
					</section><!--/#maincontent-->
				</div><!--/.container-->
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
				<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css" media="all" rel="stylesheet" type="text/css" />
				<!--[if lt IE 7]>
				<script type="text/javascript" src="./templates/admin/js/jquery/jquery.dropdown.js"></script>
				<![endif]-->
				<script type="text/javascript" src="./templates/admin/js/bootstrap.min.js"></script>
			</body>
			</html>',
		4 => '<!DOCTYPE html>
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
			<head>
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/bootstrap.no-icons.min.css" media="screen" />
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/style.css" media="screen" />
				<style type="text/css">
				body {
					padding-top: 40px;
					position: relative;
					background-color: #fff;
					background-image: url(./templates/admin/img/grid-18px-masked.png);
					background-repeat: repeat-x;
				}
				.navbar-fixed-top, .navbar-fixed-bottom {
					position:absolute;
				}
				.navbar .nav > li > a {
					padding-top:11px;
				}
				</style>
				<title>Error!</title>
			</head>
			<body>
				<div class="container">
					<section id="maincontent">
						<div class="row">
							<div class="col-md-12">
								<legend>Error establishing mySQL database connection!</legend>
								<p>MySQL database connection is not active.</p>
							</div>
						</div><!--/.row-->
					</section><!--/#maincontent-->
				</div><!--/.container-->
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
				<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css" media="all" rel="stylesheet" type="text/css" />
				<!--[if lt IE 7]>
				<script type="text/javascript" src="./templates/admin/js/jquery/jquery.dropdown.js"></script>
				<![endif]-->
				<script type="text/javascript" src="./templates/admin/js/bootstrap.min.js"></script>
			</body>
			</html>',
		5 => '<!DOCTYPE html>
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
			<head>
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/bootstrap.no-icons.min.css" media="screen" />
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="./templates/admin/css/style.css" media="screen" />
				<style type="text/css">
				body {
					padding-top: 40px;
					position: relative;
					background-color: #fff;
					background-image: url(./templates/admin/img/grid-18px-masked.png);
					background-repeat: repeat-x;
				}
				.navbar-fixed-top, .navbar-fixed-bottom {
					position:absolute;
				}
				.navbar .nav > li > a {
					padding-top:11px;
				}
				</style>
				<title>Error!</title>
			</head>
			<body>
				<div class="container">
					<section id="maincontent">
						<div class="row">
							<div class="col-md-12">
								<legend>Error establishing mySQL database connection!</legend>
								<p>Unexpected error while trying to select database.</p>
							</div>
						</div><!--/.row-->
					</section><!--/#maincontent-->
				</div><!--/.container-->
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
				<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css" media="all" rel="stylesheet" type="text/css" />
				<!--[if lt IE 7]>
				<script type="text/javascript" src="./templates/admin/js/jquery/jquery.dropdown.js"></script>
				<![endif]-->
				<script type="text/javascript" src="./templates/admin/js/bootstrap.min.js"></script>
			</body>
			</html>',
	);

	/**********************************************************************
	*  ezSQL Database specific class - mySQL
	*/

	if ( ! function_exists ('mysql_connect') ) die('<b>Fatal Error:</b> ezSQL_mysql requires mySQL Lib to be compiled and or linked in to the PHP engine');
	if ( ! class_exists ('ezSQLcore') ) die('<b>Fatal Error:</b> ezSQL_mysql requires ezSQLcore (ez_sql_core.php) to be included/loaded before it can be used');

	class ezSQL_mysql extends ezSQLcore
	{

		var $dbuser = false;
		var $dbpassword = false;
		var $dbname = false;
		var $dbhost = false;

		/**********************************************************************
		*  Constructor - allow the user to perform a qucik connect at the
		*  same time as initialising the ezSQL_mysql class
		*/

		function ezSQL_mysql($dbuser='', $dbpassword='', $dbname='', $dbhost='localhost')
		{
			$this->dbuser = $dbuser;
			$this->dbpassword = $dbpassword;
			$this->dbname = $dbname;
			$this->dbhost = $dbhost;
		}

		/**********************************************************************
		*  Short hand way to connect to mySQL database server
		*  and select a mySQL database at the same time
		*/

		function quick_connect($dbuser='', $dbpassword='', $dbname='', $dbhost='localhost')
			{
			$return_val = false;
			if ( ! $this->connect($dbuser, $dbpassword, $dbhost,true) ) ;
			else if ( ! $this->select($dbname) ) ;
			else $return_val = true;
			return $return_val;
			}

		/**********************************************************************
		*  Try to connect to mySQL database server
		*/

		function connect($dbuser='', $dbpassword='', $dbhost='localhost')
		{
			global $ezsql_mysql_str; $return_val = false;

			// Must have a user and a password
			if ( ! $dbuser )
			{
				$this->register_error($ezsql_mysql_str[1]);
				//$this->show_errors ? trigger_error($ezsql_mysql_str[1],E_USER_WARNING) : null;
				die($ezsql_mysql_str[1]);
			}
			// Try to establish the server database handle
			else if ( ! $this->dbh = @mysql_connect($dbhost,$dbuser,$dbpassword,true) )
			{
				$this->register_error($ezsql_mysql_str[2].' in '.__FILE__.' on line '.__LINE__);
				$this->show_errors ? trigger_error($ezsql_mysql_str[2],E_USER_WARNING) : null;
			}
			else
			{
				if($this->log_to_file){
					$fh=fopen($this->logfile,"a");
					fwrite($fh,"Connect - " . date("Y-m-d H:i:s", time()) . " - " . $_SERVER['REQUEST_URI'] ."\n");
					fclose($fh);
				}

				mysql_query ("SET time_zone = '".date("P")."'");
				mysql_query( 'set names utf8' );
				mysql_query ("set character_set_client='utf8'");
				mysql_query ("set character_set_results='utf8'");
				mysql_query ("set collation_connection='utf8_general_ci'");
				
				$this->dbuser = $dbuser;
				$this->dbpassword = $dbpassword;
				$this->dbhost = $dbhost;
				$return_val = true;
			}

			return $return_val;
		}

		/**********************************************************************
		*  Try to select a mySQL database
		*/

		function select($dbname='')
		{
			global $ezsql_mysql_str; $return_val = false;

			// Must have a database name
			if ( ! $dbname )
		{
				$this->register_error($ezsql_mysql_str[3].' in '.__FILE__.' on line '.__LINE__);
				$this->show_errors ? trigger_error($ezsql_mysql_str[3],E_USER_WARNING) : null;
			}

			// Must have an active database connection
			else if ( ! $this->dbh )
			{
				$this->register_error($ezsql_mysql_str[4].' in '.__FILE__.' on line '.__LINE__);
				$this->show_errors ? trigger_error($ezsql_mysql_str[4],E_USER_WARNING) : null;
			}

			// Try to connect to the database
			else if ( !@mysql_select_db($dbname,$this->dbh) )
			{
				// Try to get error supplied by mysql if not use our own
				if ( !$str = @mysql_error($this->dbh))
					  $str = $ezsql_mysql_str[5];

				$this->register_error($str.' in '.__FILE__.' on line '.__LINE__);
				$this->show_errors ? trigger_error($str,E_USER_WARNING) : null;
			}
			else
			{
				$this->dbname = $dbname;
				$return_val = true;
			}

			return $return_val;
		}

		/**********************************************************************
		*  Format a mySQL string correctly for safe mySQL insert
		*  (no mater if magic quotes are on or not)
		*/

		function escape($str)
		{
			if ( ! isset($this->dbh) || ! $this->dbh )
			{
				$this->connect($this->dbuser, $this->dbpassword, $this->dbhost);
				$this->select($this->dbname);
			}
			return mysql_real_escape_string($str, $this->dbh);
		}

		/**********************************************************************
		*  Return mySQL specific system date syntax
		*  i.e. Oracle: SYSDATE Mysql: NOW()
		*/

		function sysdate()
		{
			return 'NOW()';
		}

		/**********************************************************************
		*  Perform mySQL query and try to detirmin result value
		*/

		function query($query)
		{

			// Initialise return
			$return_val = 0;

			// Flush cached values..
			$this->flush();

			// For reg expressions
			$query = trim($query);

			// Log how the function was called
			$this->func_call = "\$db->query(\"$query\")";

			// Keep track of the last query for debug..
			$this->last_query = $query;

			// Count how many queries there have been
			$this->num_queries++;

			// Use core file cache function
			if ( $cache = $this->get_cache($query) )
			{
				return $cache;
			}

			// If there is no existing database connection then try to connect
			if ( ! isset($this->dbh) || ! $this->dbh )
			{
				$this->connect($this->dbuser, $this->dbpassword, $this->dbhost);
				$this->select($this->dbname);
			}

			if($this->log_to_file){
				$mtime = microtime(); 
				$mtime = explode(' ', $mtime); 
				$mtime = $mtime[1] + $mtime[0]; 
				$starttime = $mtime;
			}
      
			// Perform the query via std mysql_query function..
			$this->result = @mysql_query($query,$this->dbh);

			if($this->log_to_file){
				$mtime = microtime(); 
				$mtime = explode(" ", $mtime); 
				$mtime = $mtime[1] + $mtime[0]; 
				$endtime = $mtime; 
				$totaltime = ($endtime - $starttime); 
				//if($totaltime > 0.001) {echo '<hr />' . $totaltime . ' - ' . $query . '<hr />';}
				
				$fh=fopen($this->logpath,"a");
				fwrite($fh,$totaltime . ' - ' . $query . "\n");
				fclose($fh);
			}
			
			// If there is an error then take note of it..
			if ( $str = @mysql_error($this->dbh) )
			{
				$is_insert = true;
				$this->register_error($str);
				$this->show_errors ? trigger_error($str,E_USER_WARNING) : null;
				return false;
			}

			// Query was an insert, delete, update, replace
			$is_insert = false;
			if ( preg_match("/^(insert|delete|update|replace)\s+/i",$query) )
			{
				$this->rows_affected = @mysql_affected_rows();

				// Take note of the insert_id
				if ( preg_match("/^(insert|replace)\s+/i",$query) )
				{
					$this->insert_id = @mysql_insert_id($this->dbh);
				}

				// Return number fo rows affected
				$return_val = $this->rows_affected;
			}
			// Query was a select
			else
			{

				// Take note of column info
				$i=0;
				while ($i < @mysql_num_fields($this->result))
				{
					$this->col_info[$i] = @mysql_fetch_field($this->result);
					$i++;
				}

				// Store Query Results
				$num_rows=0;
				while ( $row = @mysql_fetch_object($this->result) )
				{
					// Store relults as an objects within main array
					$this->last_result[$num_rows] = $row;
					$num_rows++;
				}

				@mysql_free_result($this->result);

				// Log number of rows the query returned
				$this->num_rows = $num_rows;

				// Return number of rows selected
				$return_val = $this->num_rows;
			}

			// disk caching of queries
			$this->store_cache($query,$is_insert);

			// If debug ALL queries
			$this->trace || $this->debug_all ? $this->debug() : null ;

			return $return_val;

		}

	}
	
	$db = new ezSQL_mysql(EZSQL_DB_USER, EZSQL_DB_PASSWORD, EZSQL_DB_NAME, EZSQL_DB_HOST);
	/*
	$db->show_errors = false;
	$db->quick_connect(EZSQL_DB_USER, EZSQL_DB_PASSWORD, EZSQL_DB_NAME, EZSQL_DB_HOST);
	if(count($db->captured_errors) > 0){
		global $main_smarty, $the_template;
	
		if(isset($main_smarty)){
			$main_smarty->compile_dir = "cache/";
			$main_smarty->template_dir = "templates/";
			$main_smarty->cache_dir = "cache/";
			$main_smarty->config_dir = "";
			$main_smarty->force_compile = false; // has to be off to use cache
			$main_smarty->display($the_template . '/no_database.tpl');
			die();
		}
	} else {
		die('Error connection to the database.');
	}
	$db->show_errors = true;
	*/
	
?>