# OutHistory (beta)
This is the admin documentation for OutHistory, a MediaWiki-based site for LGBTQ+ history research being developed here at WWU in collaboration with [OutHistory.org](https://outhistory.org). Our initial plan is to host a MediaWiki instance internally so our content team can begin working with the site while we continue to work on the design and features, then eventually launch a public-facing version that will replace the old OutHistory.org.

# Installing MediaWiki
- [MediaWiki 1.37 download](https://www.mediawiki.org/wiki/Download)
- Follow the [installation instructions](https://www.mediawiki.org/wiki/Manual:Installation_guide) for your platform. Note: I've been working the past few months from a localhost instance on XAMPP.
# Configuration
Once you go through the install wizard, there's several things to configure. Look through and update the included `LocalSettings.php` as necessary (file paths, database settings, etc.).

## Skin
[Citizen](https://github.com/StarCitizenTools/mediawiki-skins-Citizen)
## Custom icons
In `resources/assets`:
- icon.png
- icon.svg
- favicon.ico
- apple-touch-icon.png
- FundCityofNY.png
## Extensions
Here are all the extensions and what they do. Items in **bold** are not included with MediaWiki.
- Cite: for citations
- MultimediaViewer: full-screen media view
- Poem: text formatting for poems
- WikiEditor: main editing toolbar for Wikitext markup format
- VisualEditor: WYSIWYG editor for wiki content. NOTE: This has never worked on my machine, it always gives "Error contacting the Parsoid/RESTBase server (HTTP 500)" and falls back to WikiEditor.
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
- Widgets: enables iframes
- CategoryTree: displays categories and pages within them in a tree
- **WikiCategoryTagCloud**: displays most popular categories across the site in a word cloud
## User rights

## Other options

# Shared database table
