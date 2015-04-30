<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
<title>Random image script useage example</title>
<style type="text/css">
body, td, p, input {
        color : #000000;
        font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
        font-size : 12px;
}
</style>
</head>

<body>
<?php
/*******************************************************************************
*  Title: Random image script (RandIm)
*  Version: 1.0 @ January 3, 2009
*  Author: Klemen Stirn
*  Website: http://www.phpjunkyard.com
********************************************************************************
*  COPYRIGHT NOTICE
*  Copyright 2009 Klemen Stirn. All Rights Reserved.
*
*  This script may be used and modified free of charge by anyone
*  AS LONG AS COPYRIGHT NOTICES AND ALL THE COMMENTS REMAIN INTACT.
*  By using this code you agree to indemnify Klemen Stirn from any
*  liability that might arise from it's use.
*
*  If you are using this script you are required to place a link
*  to PHPJunkyard on your website. You will find some link suggestions here:
*  http://www.phpjunkyard.com/link2us.php
*
*  Selling the code for this program, in part or full, without prior
*  written consent is expressly forbidden.
*
*  Obtain permission before redistributing this software over the Internet
*  or in any other medium. In all cases copyright and header must remain
*  intact. This Copyright is in full effect in any country that has
*  International Trade Agreements with the United States of America or
*  with the European Union.
*******************************************************************************/

/*******************************************************************************
*  SETTINGS
*
*  See readme.htm file for further instructions!
*******************************************************************************/

/* The default folder with images */
$settings['img_folder'] = 'images/';

/* File types (extensions) to display */
$settings['img_ext'] = array('.jpg','.gif','.png');

/*
   How to display the images?
   0 = print just the image path (for includes), like: images/test.jpg
   1 = redirect to the image, when using: <img src="randim.php" />
*/
$settings['display_type'] = 1;

/* Allow on-the-fly settings override? 0 = NO, 1 = YES */
$settings['allow_otf'] = 1;


/*******************************************************************************
*  DO NOT EDIT BELOW...
*
*  ...or at least make a backup before you do!
*******************************************************************************/

/* Override type? */
if ($settings['allow_otf'] && isset($_GET['type']))
{
	$type = intval($_GET['type']);
}
else
{
	$type = $settings['display_type'];
}

/* Override images folder? */
if ($settings['allow_otf'] && isset($_GET['folder']))
{
	$folder = htmlspecialchars(trim($_GET['folder']));
    if (!is_dir($folder))
    {
    	$folder = $settings['img_folder'];
    }
}
else
{
	$folder = $settings['img_folder'];
}

/* Make sure images fodler ends with an '/' */
if (substr($folder,-1) != '/')
{
	$folder.='/';
}

/* Get a list of all the image files */
$flist = array();
foreach($settings['img_ext'] as $ext)
{
    $tmp = glob($folder.'*'.$ext);
    if (is_array($tmp))
    {
    	$flist = array_merge($flist,$tmp);
    }
}

/* If we have any images choose a random one, otherwise select the "noimg.gif" image */
if (count($flist))
{
	$src = $flist[array_rand($flist)];
}
else
{
	$src = 'noimg.gif';
}

/* Output the image according to the selected type */
if ($type)
{
	header('Location:'.$src);
    exit();
}
else
{
	echo $src;
}
?>


<p><b>Random image script usage example</b><br />
For further information on how to use the Random Image PHP script see <a href="readme.htm">Readme file</a></p>

<ol>

<li>
<p>Type 1, default images folder:<br />
<img src="randim.php?type=1"></p>
</li>

<li>
<p>Type 2, default images folder:<br />
<img src="<?php $_GET['type']=0; include 'randim.php'; ?>"></p>
</li>

<li>
<p>Type 1, folder <i>images2</i>:<br />
<img src="randim.php?type=1&folder=images></p>
</li>

<li>
<p>Type 2, folder <i>images2</i>:<br />
<img src="<?php $_GET['type']=0; $_GET['folder']='images'; include 'randim.php'; ?>"></p>
</li>

</ol>

<p>&nbsp;</p>

<p><a href="http://www.phpjunkyard.com/random-image.php" target="_blank">Random image</a> script by <a href="http://www.phpjunkyard.com" target="_blank">PHPJunkyard</a>.</p>

</body>

</html>
