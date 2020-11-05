# Perfom unit conversion in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mohammad19khodaei/unit-conversion.svg?style=flat-square)](https://packagist.org/packages/mohammad19khodaei/unit-conversion)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mohammad19khodaei/unit-conversion/run-tests?label=tests)](https://github.com/mohammad19khodaei/unit-conversion/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/mohammad19khodaei/unit-conversion.svg?style=flat-square)](https://packagist.org/packages/mohammad19khodaei/unit-conversion)


This package can perform various unit conversions.Right now only kg to lbs is supported.


## Installation

You can install the package via composer:

```bash
composer require mohammad19khodaei/unit-conversion
```

## Usage

``` php
use Mohammad19khodaei\UnitConversion\Weight;

Weight::fromKilogerams(100)->toLbs(); // return 440.92
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.


## Credits

- [Mohammad Khodaei](https://github.com/mohammad19khodaei)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
