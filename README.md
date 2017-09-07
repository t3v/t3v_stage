[T3v Stage]
===========

[![Travis CI Status][Travis CI Status]][Travis CI]

**The stage extension of TYPO3Voila.**

Dependencies
------------

* TYPO3 CMS 7.6 or greater
* T3v Core extension
* T3v Content extension

Installation
------------

1. Add T3v Stage as dependency to the [Composer] configuration
2. Run `composer install` or `composer update` to install all dependencies with Composer
3. Include the TypoScript for T3v Stage

Content Elements
----------------

* Slider Content Element

Development
-----------

### Setup

```
$ ./Scripts/Setup.sh
```

### Run Unit Tests

```
$ ./Scripts/Tests/Unit.sh
```

### Run Functional Tests

```
$ ./Scripts/Tests/Functional.sh
```

Bug Reports
-----------

GitHub Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues
and submit new problems [here].

Versioning
----------

This library aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs.
Specifically, if a minor or patch version is released that breaks backward compatibility, that version should be
immediately yanked and / or a new version should be immediately released that restores compatibility.

Credits
-------

### Icons

* [Browser free icon]
* [Picture free icon]

Icons made by [Smashicons] from [Flaticon] is licensed by [CC 3.0 BY].

License
-------

T3v Stage is released under the [MIT License (MIT)], see [LICENSE].

[Acceptance testing TYPO3]: https://wiki.typo3.org/Acceptance_testing "Acceptance testing TYPO3"
[Automated testing TYPO3]: https://wiki.typo3.org/Automated_testing "Automated testing TYPO3"
[Browser free icon]: https://www.flaticon.com/free-icon/browser_140807 "Browser free icon"
[CC 3.0 BY]: http://creativecommons.org/licenses/by/3.0/ "Creative Commons BY 3.0"
[Composer]: https://getcomposer.org "Dependency Manager for PHP"
[Flaticon]: http://www.flaticon.com "Flaticon"
[Functional testing TYPO3]: https://wiki.typo3.org/Functional_testing "Functional testing TYPO3"
[here]: https://github.com/t3v/t3v_stage/issues "GitHub Issue Tracker"
[LICENSE]: https://raw.githubusercontent.com/t3v/t3v_stage/master/LICENSE "License"
[MIT License (MIT)]: http://opensource.org/licenses/MIT "The MIT License (MIT)"
[Picture free icon]: https://www.flaticon.com/free-icon/picture_148711 "Picture free icon"
[Semantic Versioning 2.0.0]: http://semver.org "Semantic Versioning 2.0.0"
[Smashicons]: https://www.flaticon.com/authors/smashicons "Smashicons"
[T3v Stage]: https://t3v.github.io/t3v_stage/ "The stage extension of TYPO3Voila."
[Travis CI Status]: https://img.shields.io/travis/t3v/t3v_stage.svg?style=flat "Travis CI Status"
[Travis CI]: https://travis-ci.org/t3v/t3v_stage "T3v Stage at Travis CI"
[TYPO3voila]: https://github.com/t3v "“UH LÁLÁ, TYPO3!”"
[Unit Testing TYPO3]: https://wiki.typo3.org/Unit_Testing_TYPO3 "Unit testing TYPO3"