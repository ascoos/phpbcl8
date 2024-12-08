<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 *************************************************************************************
 * @ASCOOS-NAME        : ASCOOS CMS 24'                                              *
 * @ASCOOS-VERSION     : 24.0.0                                                      *
 * @ASCOOS-CATEGORY    : Kernel (Frontend and Administration Side)                   *
 * @ASCOOS-CREATOR     : Drogidis Christos                                           *
 * @ASCOOS-SITE        : www.ascoos.com                                              *
 * @ASCOOS-LICENSE     : [Commercial] http://docs.ascoos.com/lics/ascoos/AGL-F.html  *
 * @ASCOOS-COPYRIGHT   : Copyright (c) 2007 - 2023, AlexSoft Software.               *
 *************************************************************************************
 *
 * @package            : ASCOOS CMS - phpBCL
 * @subpackage         : Core Class - Compatibilities Main Handler file
 * @source             : /phpBCL/src/coreCompatibilities.php
 * @version            : 1.1.3
 * @created            : 2013-12-31 23:59:59 GMT+2
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


// Fixed phpBCL path
 $phpBCL_path = str_replace('\\', '/', __DIR__); 

/***********************************
 * Compatibility for Consts
 **********************************/
/**
 * @since 2.0.0
 */
require_once($phpBCL_path."/compat/compat_consts.php");



/***********************************
 * Compatibility for Error Classes
 **********************************/
/**
 * @since 1.0.8
 */
require_once ($phpBCL_path . "/compat/compat_error.php");


/*******************************
 * phpBCL NATIVE FUNCTIONS
 ******************************/
/**
 * @since 8 2.0.0
 */
require_once($phpBCL_path."/phpBCL.php");

/*********
 *  8.x
 ********/
if (version_compare(PHP_VERSION, '8.1.0', '<')) require_once($phpBCL_path."/compat/compat_php81x.php");
if (version_compare(PHP_VERSION, '8.2.0', '<')) require_once($phpBCL_path."/compat/compat_php82x.php");
if (version_compare(PHP_VERSION, '8.3.0', '<')) require_once($phpBCL_path."/compat/compat_php83x.php");
if (version_compare(PHP_VERSION, '8.4.0', '<')) require_once($phpBCL_path."/compat/compat_php84x.php");
if (version_compare(PHP_VERSION, '8.5.0', '<')) require_once($phpBCL_path."/compat/compat_php85x.php");


/*************************
 * DEPRECATED OR REMOVED
 ************************/
require_once($phpBCL_path."/compat/compat_deprecated.php");


/*******************************
 * SIMILAR CODE -- COMING SOON
 ******************************/
require_once($phpBCL_path."/compat/compat_similar.php");

//unset($phpBCL_path);
?>