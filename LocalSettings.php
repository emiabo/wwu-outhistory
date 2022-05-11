<?php
# This file was automatically generated by the MediaWiki 1.37.1
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

$wgSitename = "OutHistory";
$wgMetaNamespace = "OutHistory";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "/wwuouthistory";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://localhost";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [ '1x' => "$wgResourceBasePath/resources/assets/icon.png",
			'icon' => "$wgResourceBasePath/resources/assets/icon.svg" ];

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@🌻.invalid";
$wgPasswordSender = "apache@🌻.invalid";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "OHdata";
$wgDBuser = "OHadmin";
$wgDBpassword = "dwey8klay.weep";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true; # Supposed to generate image thumbnails
$wgImageMagickConvertCommand = "C:\\Program Files\\ImageMagick-7.1.0-Q16-HDRI\\magick.exe";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale. This should ideally be set to an English
## language locale so that the behaviour of C library functions will
## be consistent with typical installations. Use $wgLanguageCode to
## localise the wiki.
$wgShellLocale = "C.UTF-8";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

# Time zone
$wgLocaltimezone = "America/Los_Angeles";
//$wgLocaltimezone = "Europe/Berlin";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

$wgSecretKey = "f270703b1873350e58f9fa5595466559aec06af2fd4958adad430b32d6e75ed9";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "ba5186737162559f";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "";

## Default skin: you can change the default skin. Use the internal symbolic
## names, e.g. 'vector' or 'monobook':
$wgDefaultSkin = "citizen";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'Citizen' ); # Download https://github.com/StarCitizenTools/mediawiki-skins-Citizen
wfLoadSkin( 'Vector' );


# End of automatically generated settings.
# Add more configuration options below.
# RESOURCES/SITE BRANDING
$wgFavicon = "$wgResourceBasePath/resources/assets/favicon.ico";
$wgAppleTouchIcon = "$wgResourceBasePath/resources/assets/apple-touch-icon.png";
$wgFooterIcons['copyright']['cc-by-sa'] = [
	"src" => "$wgResourceBasePath/resources/assets/licenses/cc-by-sa.png",
	"url" => "https://creativecommons.org/licenses/by-sa/4.0/",
	"alt" => "Creative Commons Attribution-ShareAlike",
];
$wgFooterIcons['poweredby']['fundny'] = [
	"src" => "$wgResourceBasePath/resources/assets/FundCityofNY.png",
	"url" => "https://www.fcny.org/fcny/",
	"alt" => "Support provided by the Fund for the City of New York, through a grant from its Partner Project OutHistory.org.",
];

#SKIN OPTIONS
$wgCitizenShowPageTools = 'login'; # Hides edit buttons for logged out users

#EXTENSIONS
wfLoadExtension( 'Cite' );
wfLoadExtension( 'MultimediaViewer');
wfLoadExtension( 'Poem' );
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'MsUpload' ); # BETA https://www.mediawiki.org/wiki/Extension:MsUpload
wfLoadExtension( 'TextExtracts' );
wfLoadExtension( 'PageImages' );
wfLoadExtension( 'Popups' ); # https://www.mediawiki.org/wiki/Extension:Popups
wfLoadExtension( 'RelatedArticles' ); # https://www.mediawiki.org/wiki/Extension:RelatedArticles
wfLoadExtension( 'TabberNeue' ); # https://www.mediawiki.org/wiki/Extension:TabberNeue
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TemplateWizard' ); # https://www.mediawiki.org/wiki/Extension:TemplateWizard
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'TemplateStyles' ); # https://www.mediawiki.org/wiki/Extension:TemplateStyles
wfLoadExtension( 'TemplateStylesExtender' ); # https://www.mediawiki.org/wiki/Extension:TemplateStylesExtender
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'CustomSubtitle' ); # BETA https://www.mediawiki.org/wiki/Extension:CustomSubtitle
wfLoadExtension( 'UniversalLanguageSelector' ); # https://www.mediawiki.org/wiki/Extension:UniversalLanguageSelector
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'TimedMediaHandler' ); # https://www.mediawiki.org/wiki/Extension:TimedMediaHandler
wfLoadExtension( 'Widgets' );
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'WikiCategoryTagCloud' ); # https://www.mediawiki.org/wiki/Extension:WikiCategoryTagCloud
wfLoadExtension( 'ConfirmAccount' ); # https://www.mediawiki.org/wiki/Extension:ConfirmAccount
wfLoadExtension( 'Lockdown' ); # https://www.mediawiki.org/wiki/Extension:Lockdown
wfLoadExtension( 'Cargo' ); # EXPERIMENTAL https://www.mediawiki.org/wiki/Extension:Cargo
wfLoadExtension( 'PageForms' ); # EXPERIMENTAL https://www.mediawiki.org/wiki/Extension:Page_Forms
# CARGO CONFIG
## Separate database table for Cargo metadata (to protect integrity of main wiki data)
$wgCargoDBtype = "mysql";
$wgCargoDBserver = "localhost";
$wgCargoDBname = "ohcargodata";
$wgCargoDBuser = "OHadmin";
$wgCargoDBpassword = "dwey8klay.weep";

# USER MANAGEMENT
## Hides entire wiki except for specified pages (comment out once Lockdown is installed)
//$wgGroupPermissions['*']['read'] = false;
//$wgWhitelistRead = [ "OutHistory", "Special:RequestAccount", "Special:CreateAccount" ];

## Restrict account creation process
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['sysop']['createaccount'] = true;
$wgGroupPermissions['bureaucrat']['createaccount'] = true;
$wgConfirmAccountRequestFormItems = [
	'UserName'        => [ 'enabled' => true ],
	'RealName'        => [ 'enabled' => false ],
	'Biography'       => [ 'enabled' => true, 'minWords' => 0 ],
	'AreasOfInterest' => [ 'enabled' => true ],
	'CV'              => [ 'enabled' => false ],
	'Notes'           => [ 'enabled' => true ],
	'Links'           => [ 'enabled' => false ],
	'TermsOfService'  => [ 'enabled' => false ],
];
## Editing rights
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['contributor']['edit'] = true;
## Private namespace creation
// define constants for your custom namespaces, for a more readable configuration
define('NS_PRIVATE', 100);
define('NS_PRIVATE_TALK', 101);

// define custom namespaces
$wgExtraNamespaces[NS_PRIVATE] = 'Private';
$wgExtraNamespaces[NS_PRIVATE_TALK] = 'Private_talk';

// restrict "read" permission to contributors
$wgNamespacePermissionLockdown[NS_PRIVATE]['read'] = [ 'contributor' ];
$wgNamespacePermissionLockdown[NS_PRIVATE_TALK]['read'] = [ 'contributor' ];

// prevent inclusion of pages from that namespace
$wgNonincludableNamespaces[] = NS_PRIVATE;
$wgNonincludableNamespaces[] = NS_PRIVATE_TALK;

// restrict special pages that circumvent lockdown (file list), update as needed
// See $specialPageAliases here for proper names https://gerrit.wikimedia.org/g/mediawiki/core/+/HEAD/languages/messages/MessagesEn.php
$wgSpecialPageLockdown['Listfiles'] = [ 'contributor' ];

# MISC CONFIG
$wgFileExtensions = array_merge( $wgFileExtensions, [ 'pdf', 'txt', 'doc', 'docx', 'ppt', 'pptx' ] );
$wgExternalLinkTarget = '_blank';
$wgRestrictDisplayTitle = false;
$wgUploadSizeWarning = 2147483647;
$wgMaxUploadSize = 2147483647;
$wgTmhEnableMp4Uploads = true;