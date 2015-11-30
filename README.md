## contemplate

[![Build Status](https://secure.travis-ci.org/ehough/contemplate.png)](http://travis-ci.org/ehough/contemplate)
[![Project Status: Unsupported - The project has reached a stable, usable state but the author(s) have ceased all work on it. A new maintainer may be desired.](http://www.repostatus.org/badges/latest/unsupported.svg)](http://www.repostatus.org/#unsupported)
[![Latest Stable Version](https://poser.pugx.org/ehough/contemplate/v/stable)](https://packagist.org/packages/ehough/contemplate)
[![License](https://poser.pugx.org/ehough/contemplate/license)](https://packagist.org/packages/ehough/contemplate)

**This library is no longer maintained.** Template library that uses pure PHP syntax. Nothing new to learn, blazingly fast, and compatible with PHP 5.2+.

```php
$template = new ehough_contemplate_impl_SimpleTemplate();  //implements ehough_contemplate_api_Template
$template->setPath('/some/path/to/template.html.php');

$template->setVariable('foo', 'bar');
$template->setVariable('baz', array('one' => 'two'));

echo $template->toString();
```
