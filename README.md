# Open

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)

Open a file or url in the user's default app.

Open will use `start` on Windows, `open` on OSX, and `xdg-open` everywhere else.

## Install

Via Composer

``` bash
$ composer require yuloh/open
```

## Usage

``` php
Yuloh\Open\open('http://www.google.com');
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/yuloh/open.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/yuloh/open
