# Frosty's WordPress Utilities

![WP Utilities](.github/wp-utilities.jpg?raw=true "Frosty's WordPress Utilities")

[![PHP from Packagist](https://img.shields.io/packagist/php-v/thefrosty/wp-utilities.svg)]()
[![Latest Stable Version](https://img.shields.io/packagist/v/thefrosty/wp-utilities.svg)](https://packagist.org/packages/thefrosty/wp-utilities)
[![Total Downloads](https://img.shields.io/packagist/dt/thefrosty/wp-utilities.svg)](https://packagist.org/packages/thefrosty/wp-utilities)
[![License](https://img.shields.io/packagist/l/thefrosty/wp-utilities.svg)](https://packagist.org/packages/thefrosty/wp-utilities)
[![Build Status](https://travis-ci.com/thefrosty/wp-utilities.svg?branch=master)](https://travis-ci.com/github/thefrosty/wp-utilities)
[![Donate with $DOGE](https://img.shields.io/static/v1?style=&logo=dogecoin&label=Donation&message=DFMbUjdxuQNJnbA622e7TNSJ3yxAdAWZEW&color=ba9f33)](#)  

A library containing my standard development resources to build high quality WordPress plugins.

### Requirements

```
PHP >= 7.4 OR >= 8.0
WordPress >= 5.6
```

| PHP version | WordPress Utilities |
| ----------- | ------------------- |
| < 7.1 | 1.3.x |
| \>= 7.1 && < 7.3 | 1.9.x |
| 7.3 | 2.0.0 |
| \>= 7.4 | 2.1.0 |

The required WordPress version will always be the most recent point release of
the previous major release branch.

For both PHP and WordPress requirements, although this library may work with a
version below the required versions, they will not be supported and any
compatibility is entirely coincidental.

### Installation

To install this library, use Composer:

```
composer require thefrosty/wp-utilities:^2.1
```

Then follow examples in the [Plugin README](./src/Plugin/README.md)
