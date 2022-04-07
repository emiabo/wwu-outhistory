# OutHistory (beta)
This is the admin documentation for OutHistory, a MediaWiki-based site for LGBTQ+ history research being developed here at WWU in collaboration with [OutHistory.org](https://outhistory.org). Our initial plan is to host a MediaWiki instance internally so our content team can begin working with the site while we continue to work on the design and features, then eventually launch a public-facing version that will replace the old OutHistory.org.

# Installing MediaWiki
- [MediaWiki 1.37 download](https://www.mediawiki.org/wiki/Download)
- Follow the [installation instructions](https://www.mediawiki.org/wiki/Manual:Installation_guide) for your platform. Note: I've been working the past few months from a localhost instance on XAMPP.

# LocalSettings.php
Once you go through the install wizard, there's several things to configure.

- Skin: Citizen
- Custom icons to be placed in `resources/assets`
- Extensions
- User rights and page privacy
- The shared database table (for when we go public)