<?php
# This file was automatically generated by the MediaWiki 1.30.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "charlesreid1";
$wgMetaNamespace = "Charlesreid1";

# from http://www.mediawiki.org/wiki/Manual:Short_URL#Recommended_how-to_guide_.28setup_used_on_Wikipedia.29
$wgScriptPath = "/w";      # Path to the actual files. This should already be there
$wgArticlePath = "/wiki/$1";  # Virtual path. This directory MUST be different from the one used in $wgScriptPath
$wgUsePathInfo = true;        # Enable use of pretty URLs


## The protocol and server name to use in fully-qualified URLs
//$wgServer = "http://45.56.87.232";
$wgServer = 'https://charlesreid1.com';
$wgCanonicalServer = 'https://charlesreid1.com';

## The URL path to static resources (images, scripts, etc.)
$wgStylePath = "$wgScriptPath/skins";
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/wiki.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "charles@charlesreid1.com";
$wgPasswordSender = "charles@charlesreid1.com";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = getenv('MYSQL_HOST');
$wgDBname = getenv('MYSQL_DATABASE');
$wgDBuser = getenv('MYSQL_USER');
$wgDBpassword = getenv('MYSQL_PASSWORD');

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false; // new version
$wgDBmysql5 = true; // charlesreid1.com current

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgMaxUploadSize = 1024*1024*100; # 100 MB
# also set in php.ini

$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Allow specific file extensions
$wgStrictFileExtensions = false;
$wgFileExtensions[] = 'pdf';
$wgFileExtensions[] = 'svg';
$wgFileExtensions[] = 'mm';
$wgFileExtensions[] = 'png';
$wgFileExtensions[] = 'jpg';
$wgFileExtensions[] = 'JPG';
$wgFileExtensions[] = 'jpeg';
$wgFileExtensions[] = 'py';

# Allow any file extensions, 
# but print a warning if its not 
# in $wgFileExtensions[]
$wgCheckFileExtensions = false;

# do not send pingback to https://www.mediawiki.org
$wgPingback = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
//$wgShellLocale = "C.UTF-8"; // modern 
$wgShellLocale = "en_US.utf8"; // charlesreid1.com version

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = true;
$wgTexvc = "$IP/extensions/Math/math/texvc";
//$wgTexvc = '/usr/bin/texvc';

$wgDefaultUserOptions['math'] = 0; //Always render eqns as .pngs

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

$wgSecretKey = "45444e05f16d997d61be11eba4d6f8739dc632a6af4829f5b8fb88f3eac5e0fb";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "984c1d9858dabc27";

## no license info
$wgRightsPage = "";
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

## Enabled skins.
## The following skins were automatically enabled:
#wfLoadSkin( 'CologneBlue' );
#wfLoadSkin( 'Modern' );
#wfLoadSkin( 'MonoBook' );
#wfLoadSkin( 'Vector' );



# Boostrap2 skin:
wfLoadSkin( 'Bootstrap2' );
require_once "$IP/skins/Bootstrap2/Bootstrap2.php";
$wgDefaultSkin = 'Bootstrap2';

$wgValidSkinNames['bootstrap2'] = 'Bootstrap2';


//$wgShowExceptionDetails=false;
$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;
$wgShowSQLErrors = true;




############################################################
############# Charles-Modified Settings ####################


# Allow external images:
$wgAllowExternalImages = true;
# to do this, simply insert the image's URL:
#http://url.for/some/image.png
# But these cannot be resized. It's better to just put your own version into the wiki

# Use ImageMagick
$wgUseImageMagic=true;

# $wgAllowDisplayTitle - Allow the magic word {{DISPLAYTITLE:}} to override the title of a page.
$wgAllowdisplayTitle=true;

# $wgPutIPinRC - Log IP addresses in the recentchanges table.
$wgPutIPinRC=true;

# Getting some weird "Error creating thumbnail: Invalid thumbnail parameters" messages w/ thumbnail
# http://www.gossamer-threads.com/lists/wiki/mediawiki/169439
$wgMaxImageArea=64000000;
$wgMaxShellMemory=0;
# Also:
# http://www.ipbwiki.com/forums/index.php?showtopic=812

$wgFavicon="$wgScriptPath/favicon.ico";



######################
# Edit permissions

# only admin can edit
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['sysop']['edit'] = true;

# only admin can register new accounts
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['user']['createaccount'] = false;
$wgGroupPermissions['sysop']['createaccount'] = true;

# only admin can upload
$wgGroupPermissions['*']['upload'] = false;
$wgGroupPermissions['user']['upload'] = false;
$wgGroupPermissions['sysop']['upload'] = true;

$wgGroupPermissions['*']['reupload'] = false;
$wgGroupPermissions['user']['reupload'] = false;
$wgGroupPermissions['sysop']['reupload'] = true;






###############################
## GeSHi syntax highlighting/code extension
#
# https://github.com/wikimedia/mediawiki-extensions-SyntaxHighlight_GeSHi.git
#
require_once("$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php");
$wgSyntaxHighlightDefaultLang = "text";



##############################
# Parser functions
#
# http://www.mediawiki.org/wiki/Extension:ParserFunctions
# http://en.wikipedia.org/wiki/Template_talk:Navbox
# # 
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );




##############################################
# Embed videos extension
#
# https://github.com/HydraWiki/mediawiki-embedvideo/
#require_once("$IP/extensions/EmbedVideo/EmbedVideo.php");
wfLoadExtension( 'EmbedVideo' );



###########################################
## Math extension
#
# https://github.com/wikimedia/mediawiki-extensions-Math.git
#
require_once "$IP/extensions/Math/Math.php";



#############################################
## Fix cookies crap
session_save_path("/tmp");

##############################################
#### secure login
//$wgServer = "https://45.56.87.232";
//$wgServer = "https://charlesreid1.com";
//$wgSecureLogin = true;

###################################
##### raw html
$wgRawHtml = true;

# but also keep things locked down

$wgUseRCPatrol=true;
$wgNewUserLog=true;





##############################################
## Because adding a new extension for every dumb little thing you want to do is dumb

$wgRawHtml = true;





$wgUploadPath = "$wgScriptPath/images";
$wgUploadDirectory = "$IP/images";
$wgMathPath = "$wgUploadPath/math";
$wgMathDirectory = "$wgUploadDirectory/math";
$wgTmpDirectory = "$wgUploadDirectory/tmp";
$wgLatexCommand = "/usr/bin/latex"; 
#$wgUploadBaseUrl = false; #not sure about why this one too...


# log
$wgDebugLogFile = "/var/log/apache2/wiki.log";


