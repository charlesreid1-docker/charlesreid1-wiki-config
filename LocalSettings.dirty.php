<?php



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
//$wgMetaNamespace = "CharlesMartinReid";
$wgMetaNamespace = "Charlesreid1";

# from http://www.mediawiki.org/wiki/Manual:Short_URL#Recommended_how-to_guide_.28setup_used_on_Wikipedia.29
$wgScriptPath = "/w";      # Path to the actual files. This should already be there
$wgArticlePath = "/wiki/$1";  # Virtual path. This directory MUST be different from the one used in $wgScriptPath
$wgUsePathInfo = true;        # Enable use of pretty URLs


## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptExtension  = ".php";


## The protocol and server name to use in fully-qualified URLs
#$wgServer = "http://charlesreid1.com/wiki/";
#$wgServer = "http://charlesreid1.com/";


## The relative URL path to the skins directory
$wgStylePath = "$wgScriptPath/skins";
$wgResourceBasePath = $wgScriptPath;

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "$wgStylePath/common/images/wiki.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "";
$wgPasswordSender = "charles@charlesreid1.com";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "wikidb";
$wgDBuser = "root";
include("root.password.php");

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = true;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgMaxUploadSize = 1024*1024*100; # 100 MB
# also set in php.ini

$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";


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


# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";




## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
# $wgShellLocale = "en_US.UTF-8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
# $wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = true;
$wgTexvc = '/usr/bin/texvc';

$wgDefaultUserOptions['math'] = 0; //Always render eqns as .pngs





# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "en";

$wgSecretKey = "88a9bcb26f06ddb1644d25b21b681556412b0dae889843a66ceed55b78c20016";
#$wgSecretKey = "99c687661d67f674ed17f1ab6ee9d54e6a799bcf428e42fa71975ebba244b01c";




###	# Site upgrade key. Must be set to a string (default provided) to turn on the
###	# web installer while LocalSettings.php is in place
### 	$wgUpgradeKey = "";


# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':

# Enabled skins.
#
#wfLoadSkin( 'Vector' );
#require_once "$IP/skins/Vector/Vector.php";
#$wgDefaultSkin = 'Vector';


wfLoadSkin( 'Bootstrap2' );
require_once "$IP/skins/Bootstrap2/Bootstrap2.php";
$wgDefaultSkin = 'Bootstrap2';

$wgValidSkinNames['bootstrap2'] = 'Bootstrap2';


$wgShowExceptionDetails=false;









## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "http://creativecommons.org/licenses/by-nc-nd/3.0/us/";
$wgRightsText = "Attribution-NonCommercial-NoDerivs 3.0 United States";
$wgRightsIcon = "/w/skins/charlesmartinreid/cc.png";
# $wgRightsCode = "[license_code]"; # Not yet used
#


$wgDiff3 = "/usr/bin/diff3";

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
session_save_path("tmp");
$wgCacheEpoch = max( $wgCacheEpoch, gmdate( 'YmdHis', @filemtime( __FILE__ ) ) );








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
## http://www.mediawiki.org/wiki/Extension:SyntaxHighlight_GeSHi
#
require_once("$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php");
##require_once("$IP/extensions/Geshi/SyntaxHighlight_GeSHi.php");
## Set default language, e.g. C:
$wgSyntaxHighlightDefaultLang = "text";



##############################
# Parser functions
# http://www.mediawiki.org/wiki/Extension:ParserFunctions
# http://en.wikipedia.org/wiki/Template_talk:Navbox
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );





/*
###################################
# change permissions for parts of wiki
#
# Limiting access to parts of your wiki:
#http://www.cs.umd.edu/faq/wiki/

# 1. add custom namespaces
$wgExtraNamespaces = array(100=>"Journal");
$wgExtraNamespaces = array(200=>"Writing");
$wgExtraNamespaces = array(300=>"Matplotlib");
$wgExtraNamespaces = array(400=>"Siluria");

# 2. modify includes/Title.php code for custom namespaces

# 3. create new group with read_* permissions
$wgGroupPermissions['journal']['read_journal'] = true;
$wgGroupPermissions['writing']['read_writing'] = true;
$wgGroupPermissions['matplotlib']['read_matplotlib'] = true;
$wgGroupPermissions['siluria']['read_siluria'] = true;

# 4. visit Special:Userrights to add user to new group
 */

$wgExtraNamespaces = array(102=>"MP");
$wgGroupPermissions['mp']['read_mp'] = true;



##############################################
# Extensions from Github user Whiteknight

# Embed videos extension
# https://github.com/Whiteknight/mediawiki-embedvideo
#require_once("$IP/extensions/EmbedVideo/EmbedVideo.php");
wfLoadExtension( 'EmbedVideo' );




###########################################
## Math extension
require_once "$IP/extensions/Math/Math.php";


#############################################
## Fix cookies crap
session_save_path("/tmp");

##############################################
#### secure login
$wgServer = "https://charlesreid1.com";
$wgSecureLogin = true;

###################################
##### raw html
$wgRawHtml = true;

# but also keep things locked down

$wgUseRCPatrol=true;
$wgNewUserLog=true;





##############################################
## Because adding a new extension for every dumb little thing you want to do is dumb

$wgRawHtml = true;

