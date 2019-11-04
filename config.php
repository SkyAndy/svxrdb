<?php

date_default_timezone_set('Europe/Berlin'); // http://php.net/manual/de/timezones.europe.php

// set to SHOW and the last LOGLINECOUNT lines from logfile is showing in HTML
define("LOGFILETABLE", "SHOW" );

// ammount of line to show
define("LOGLINECOUNT", "20");

// full path to logfile with read access for http deamon, 'file1', 'file2', 'file3', 'file4' ....
$LOGFILES = array( '../svxlinkreflector.log', '', '' ); 

// set to SHOWSHORT and the IP (only 10 letters) address is showing in HTML
// set SHOW and the IP address is showing in HTML
define("IPLIST", "SHOWNO");

// set to SHOW for see refreshtime statusline
define("REFRESHSTATUS", "SHOW");

// You own style
define("STYLECSS", "style_normal.css");

/* set to YES for save client data an recover it after logrotate for SDCard User not recommended
recover data stored in base directory from ...www/svxrdb/recover_data_xxxxxx */
define("RECOVER", "NO");

/* use "EAR" to mark with the icon of the last transmission.
use "TOP" as a keyword to see the last transmission in the first place in the list (EAR is no longer seen automatically) change it on runntime with click on "Callsign client" or "state" table header */
$LASTHEARD = "TOP"; // EAR or TOP

/* set to DE Deutsch to EN for English languange
set NO legend not showing */
define("LEGEND", "EN");

// set showing monitoring talkgroup yes(SHOW) or not(SHOWNO)
define("MON", "SHOW");

// set showing talkgroup yes(SHOW) or not (SHOWNO)
define("TG", "SHOW");

//do not change this values
define("CLIENTLIST", "CALL");
define("DBVERSION", "20190411.1830" );
$lastheard_call = "CALL";
$clients[] = array();
// ----
?>
