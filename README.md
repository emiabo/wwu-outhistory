# OutHistory (beta)
This is the admin & developer documentation for OutHistory, a MediaWiki-based site for LGBTQ+ history research developed at WWU in collaboration with [OutHistory.org](https://outhistory.org). 

Our initial plan is to host a MediaWiki instance internally so our content team can begin working with the site while we continue to work on the design and features, then eventually launch a public-facing version that will replace the old OutHistory.org.

# Installing MediaWiki
- [MediaWiki download](https://www.mediawiki.org/wiki/Download) - **Get the long term support (LTS) release, currently 1.35!**
- Follow the [installation instructions](https://www.mediawiki.org/wiki/Manual:Installation_guide) for your server platform. Note: I've been working the past few months from a localhost instance on XAMPP.
## Additional dependencies
- An SMTP mail server for sending the account creation emails
# Configuration
Once you go through the install wizard, there's several things to configure. Look through and update the included `LocalSettings.php` as necessary (file paths, database settings, etc.).

## Skin
[Citizen](https://github.com/StarCitizenTools/mediawiki-skins-Citizen) - Check their README for skin config options that might be helpful for theming, also [this page](https://github.com/StarCitizenTools/mediawiki-skins-Citizen/wiki/Adapting-Citizen-styles) for CSS variables
## Custom icons
In `resources/assets`:
- icon.png
- icon.svg
- favicon.ico
- apple-touch-icon.png
- FundCityofNY.png
## Extensions
Here are all the extensions and what they do. Items in **bold** are not included with MediaWiki, download these from the links commented in `LocalSettings.php`.
- Cite: for citations
- MultimediaViewer: full-screen media view
- Poem: text formatting for poems
- WikiEditor: main editing toolbar for Wikitext markup format
- **MsUpload** (beta): drag and drop file uploaded for WikiEditor
- TextExtracts: produces page excerpts for Popups
- PageImages: produces page thumbnails for Popups
- **Popups**: page previews in little cards on link hover
- **RelatedArticles**: links to other articles at end of page
- **TabberNeue**: 'tabs' in article sections
- TemplateData: allows Template pages to include JSON metadata, used by TemplateWizard
- **TemplateWizard**: an easy interface for editors to insert Templates
- InputBox: allows HTML forms like "create article" text boxes
- **TemplateStyles**: allows Templates to have their own CSS stylesheets
- **TemplateStylesExtender**: adds advanced CSS features like variables to TemplateStyles
- CodeEditor: a nicer editor for writing CSS/JS/Lua
- Scribunto: enables Lua-based "modules" for custom wiki features
- **CustomSubtitle**: allows pages to have custom text below the title
- **UniversalLanguageSelector**: needed for web fonts
- ParserFunctions: provides functions for Templates
- **TimedMediaHandler**: enables video/audio uploads
- Widgets: enables iframes for designated sites (e.g. YouTube)
- CategoryTree: displays categories and pages within them in a tree
- **WikiCategoryTagCloud**: displays most popular categories across the site in a word cloud
- **ConfirmAccount**: creates a "request account" form and approval queue for sysops
- **Lockdown**: allows restricting namespaces and special pages to certain user groups.
## User rights
For the site, users will have the following permissions:
|                                   | * (Anonymous/logged out) | user | contributor | bureaucrat | sysop + interface-admin |
|-----------------------------------|--------------------------|------|-------------|------------|-------------------------|
| Read/view files                   | yes                      | yes  | yes         | yes        | yes                     |
| Read in Private namespace         | no                       | no   | yes         | yes        | yes                     |
| Create/edit/upload                | no                       | no   | yes         | yes        | yes                     |
| Manage users                      | no                       | no   | no          | yes        | yes                     |
| Edit sitewide content like CSS/JS | no                       | no   | no          | no         | yes                     |
| Create new accounts               | no                       | no   | no          | yes        | yes                     |
- Visitors may use the "Request account" form to submit their email address and optionally a short bio for their userpage. An confirmation email will be sent, and if completed they will be added to an approval queue for sysops at Special:ConfirmAccounts. Once a user is approved, they receive a temporary password and their account is created. (Sysops and bureaucrats can create new accounts directly, bypassing this). For more info see [Extension:ConfirmAccounts](https://www.mediawiki.org/wiki/Extension:ConfirmAccount#Usage).
- If editing access is needed, bureaucrats/sysops must also add the Contributor role to each user with Special:UserRights.
- **Private** namespace is used for work-in-progress pieces, viewable only by contributors and above. *Uploaded files are always public, but the file list page is blocked as a workaround.*
## System messages
Most of the interface text can be edited (if you are a sysop or have the interface-admin permission) by finding its system message page. On the wiki, head to **Special:AllMessages** where you can search for these. Additionally, the Citizen skin has several of its own interface messages to edit, such as:

- MediaWiki:Citizen-footer-desc - the explanatory text that appears in site footer above the legal page links, e.g. "A collaborative wiki for LGBTQ+ history...it's about time!"
- MediaWiki:Citizen-footer-tagline - the short message at the very bottom of the page next to license logos, e.g. "Made with <3 in Bellingham"

[More info on writing system messages](https://www.mediawiki.org/wiki/Help:System_message)
## Installing widgets
Extension:Widgets enables a new template system for users to embed pages, essentially an <iframe>, without most of the security risks of allowing this tag freeform. The largest repository of freely-usable widgets is at [MediaWikiWidgets.org](https://www.mediawikiwidgets.org/Widgets_Catalog), but note that currently they require creating a (free) account to download any.

Currently video widgets like YouTube and Vimeo are what we are prioritizing, but it is possible to create one for any interactive site that allows embedding. [See the extension page](https://www.mediawiki.org/wiki/Extension:Widgets#Widget_page_syntax) for documentation on writing custom widgets.