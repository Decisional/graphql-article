# decisional/graphql-article

[![Build Status](https://img.shields.io/travis/com/decisional/graphql-article/master.svg?style=for-the-badge&logo=travis)](https://travis-ci.com/decisional/graphql-article) [![PHP Version](https://img.shields.io/packagist/php-v/decisional/graphql-article.svg?style=for-the-badge)](https://github.com/decisional/graphql-article) [![Stable Version](https://img.shields.io/packagist/v/decisional/graphql-article.svg?style=for-the-badge&label=latest)](https://packagist.org/packages/decisional/graphql-article)

## Usage

This assumes you have the OXID eShop up and running and installed and activated the `oxid-esales/graphql-base` module.

### Install

```bash
$ composer require decisional/graphql-article
```

After requiring the module, you need to head over to the OXID eShop admin and
activate the module.

### How to use

TBD

## Testing

### Linting, syntax, static analysis and unit tests

```bash
$ composer test
```

### Integration tests

- install this module into a running OXID eShop
- change the `test_config.yml`
  - add module to the `partial_module_paths`
  - set `activate_all_modules` to `true`

```bash
$ ./vendor/bin/runtests
```

## License

TBD
