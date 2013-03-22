contemplate [![Build Status](https://secure.travis-ci.org/ehough/contemplate.png)](http://travis-ci.org/ehough/contemplate)
=====

Template library that uses pure PHP syntax. Nothing new to learn, and blazingly fast.

```php
$template = new ehough_contemplate_impl_SimpleTemplate();  //implements ehough_contemplate_api_Template
$template->setPath('/some/path/to/template.html.php');

$template->setVariable('foo', 'bar');
$template->setVariable('baz', array('one' => 'two'));

echo $template->toString();
```
