<p align="center"><img src="https://apps.ascoos.com/phpbcl8/images/phpBCL_256px.png" height=256 /></p>

# PHP 8 Backwards Compatibility Library

![GitHub Downloads (all assets, all releases)](https://img.shields.io/github/downloads/ascoos/phpbcl8/total?color=%230E80C0) 
![GitHub Release](https://img.shields.io/github/v/release/ascoos/phpbcl8) 
![GitHub Release Date](https://img.shields.io/github/release-date/ascoos/phpbcl8?color=%230E80C0)
![GitHub repo size](https://img.shields.io/github/repo-size/ascoos/phpbcl8) 
[![PHP 8 Backwards Compatibility Library - total lines](https://tokei.rs/b1/github/ascoos/phpbcl8?category=lines)](https://github.com/ascoos/phpbcl8)
[![PHP 8 Backwards Compatibility Library - source code lines](https://tokei.rs/b1/github/ascoos/phpbcl8?category=code)](https://github.com/ascoos/phpbcl8) 
[![PHP 8 Backwards Compatibility Library - files in repository](https://tokei.rs/b1/github/ascoos/phpbcl8?category=files)](https://github.com/ascoos/phpbcl8)



## Description

This package provides functions of newer PHP 8 versions.

It provides scripts that implement functions only available in newer PHP versions as functions built-in in the PHP core engine. The parts work in older PHP versions.

A main script checks the current PHP version and loads that implement the functions of newer PHP versions.

***

### SOURCEFORGE
[![Download phpbcl8](https://img.shields.io/sourceforge/dt/phpbcl8.svg)](https://sourceforge.net/projects/phpbcl8/files/latest/download)
[![Download phpbcl8](https://img.shields.io/sourceforge/dm/phpbcl8.svg)](https://sourceforge.net/projects/phpbcl8/files/latest/download)
[![Download phpbcl8](https://img.shields.io/sourceforge/dw/phpbcl8.svg)](https://sourceforge.net/projects/phpbcl8/files/latest/download)
[![Download phpbcl8](https://img.shields.io/sourceforge/dd/phpbcl8.svg)](https://sourceforge.net/projects/phpbcl8/files/latest/download)

***

## Contributing

This is an open source project, open to anyone. 

Contributions are welcome [github](https://github.com/ascoos/phpbcl8)


## Feedback

Please send any feedback or suggestions to [@ascoos](https://twitter.com/ascoos) (Twitter) or [create an issue](https://issues.ascoos.com).

## License

[![AGL-F](https://img.shields.io/badge/License-AGLF-blue.svg)](http://docs.ascoos.com/lics/ascoos/AGL-F.html)

***

## Download

[![OFFICIAL ASCOOS DOWNLOAD SITE](https://img.shields.io/website?url=https://dl.ascoos.com/pub/phpbcl8)](https://dl.ascoos.com/pub/phpbcl8/phpbcl8-latest.zip) 
[![PHP Classes](https://img.shields.io/badge/GitHub-phpbcl8-blue.svg)](https://github.com/ascoos/phpbcl8/releases) 
[![PHP Classes](https://img.shields.io/badge/php-classes-blue.svg)](https://www.phpclasses.org/package/12926.html) 
[![Sourceforge phpbcl8](https://img.shields.io/badge/SourceForge-phpbcl8-blue.svg)](https://sourceforge.net/projects/phpbcl8/files/latest/download)


***

# Installation and use this library

1. Download latest release
1. Unzip package in your working directory
1. Add in index.php or master php file the below code :

```php
$path = '[YOUR SITE PATH]';
include $path . '/phpbcl8/autoload.php';
```

<br>

***

<br>

- [!] = FIXED
- [+] = Added
- [^] = Updated
- [-] = Removed


## Error FILE  [compat_error.php]

This file contains support code for the remaining functions of the phpbcl8 library.


| A |    PHP    | phpbcl8 |   TYPE    |          NAME           |                DESCRIPTION
|---|-----------|--------|-----------|-------------------------|-----------------------------------------
| + | ALL       | 1.0.8  | FILE      | `compat_error.php`      | To support errors




## phpbcl8 FILE  [phpbcl.php]

This file contains support code for the remaining functions of the phpbcl8 library.


| A |    PHP    | phpbcl8 |   TYPE    |          NAME           |                DESCRIPTION
|---|-----------|--------|-----------|-------------------------|-----------------------------------------
| + | ALL       | 1.0.5  | FILE      | `phpbcl.php`            | To support other functions in this php library




## DEPRECATED FILE  [compat_deprecated.php]

The use of the contents of the deprecated-removed code file is the reverse of the use of other files versioning-based on the php version. 

This means that from the PHP version that refers and to newer versions, without the use of phpbcl8 and specifically the file `compat_deprecated.php`, you will not be able to use this code.


| A |    PHP    | phpbcl8 |   TYPE    |          NAME           |                DESCRIPTION
|---|-----------|--------|-----------|-------------------------|-----------------------------------------
| + | ALL       | 1.0.0  | FILE      | `compat_deprecated.php` | for deprecated-removed php functions
| + | >= 8.1.0  | 1.0.0  | CONST     | `ENT_COMPAT`            | ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401
| + | >= 8.0.0  | 1.0.0  | CONST     | `MB_OVERLOAD_MAIL`      | = 1
| + | >= 8.0.0  | 1.0.0  | CONST     | `MB_OVERLOAD_STRING`    | = 2
| + | >= 8.0.0  | 1.0.0  | CONST     | `MB_OVERLOAD_REGEX`     | = 4
| + | >= 8.0.0  | 1.0.0  | Function  | `each`                  | Return the current key and value pair from an array and advance the array cursor.

---

## VERSIONING FILES  [compat_php81x.php - compat_php85x.php]

The contents of version-based files mean that since added to a specific PHP version, without using `phpbcl8`, you will not be able to use them in older versions.

>"All functions in the below table were tested on [`PHP 8 Backwards Compatibility Library`](https://sourceforge.net/projects/ascoos-web-extended-studio/) with PHP 8.0 and 8.2"

| A |    PHP   | phpbcl8 |   TYPE    |          NAME           |                DESCRIPTION
|---|----------|--------|-----------|-------------------------|-----------------------------------------
| + | < 8.5.0  | 2.0.0  | Constant  | `PHP_BUILD_DATE`        | that is assigned the time and date the PHP binary is built.
| + | < 8.4.0  | 1.1.4  | Function  | `intltz_get_iana_id`    | Get the IANA identifier from a given timezone
| + | < 8.4.0  | 1.1.2  | Function  | `bcdivmod`              | Returns an array with the quotient (whole values) as a string, and the remainder as a string containing $scale number of decimal values.
| + | < 8.4.0  | 1.1.1  | Function  | `grapheme_str_split`    | Splits a string into an array of individual or chunks of graphemes.
| + | < 8.4.0  | 1.1.1  | Function  | `array_find`            | Returns the VALUE of the first element from $array for which the $callback returns true. Returns NULL if no matching element is found.
| + | < 8.4.0  | 1.1.1  | Function  | `array_find_key`        | Returns the KEY of the first element from $array for which the $callback returns TRUE. If no matching element is found the function returns NULL.
| + | < 8.4.0  | 1.1.1  | Function  | `array_all`             | Checks whether the $callback returns TRUE for ALL the array elements.
| + | < 8.4.0  | 1.1.1  | Function  | `array_any`             | Checks whether the $callback returns TRUE for ANY of the array elements.
| + | < 8.4.0  | 1.1.0  | Function  | `http_get_last_response_headers` | Get Last Response Headers
| + | < 8.4.0  | 1.1.0  | Function  | `http_clear_last_response_headers` | Clear Last Response Headers
| ^ | < 8.4.0  | 1.0.7  | Function  | `mb_ltrim`              | Multi-byte safely strip white-spaces (or other characters) from the beginning of a string. 
| ^ | < 8.4.0  | 1.0.7  | Function  | `mb_rtrim`              | Multi-byte safely strip white-spaces (or other characters) from the end of a string. 
| ^ | < 8.4.0  | 1.0.7  | Function  | `mb_trim`               | Multi-byte safely strip white-spaces (or other characters) from the beginning and end of a string.  
| ^ | < 8.4.0  | 1.0.5  | Function  | `mb_ucfirst`            | Make a multibyte string's first character uppercase.
| ^ | < 8.4.0  | 1.0.5  | Function  | `mb_lcfirst`            | Make a multibyte string's first character lowercase.
| + | < 8.3.0  | 1.0.2  | Function  | `mb_str_pad`            | The str_pad() function lacks multibyte character support, causing issues when working with languages that utilize multibyte encodings like UTF-8.
| + | < 8.3.0  | 1.0.9  | Function  | `stream_context_set_options` | Sets options on the specified context.
| + | < 8.3.0  | 1.0.0  | Function  | `json_validate`         | Validate an string if contains a valid json.
| + | < 8.2.0  | 1.0.9  | Function  | `openssl_cipher_key_length` | Gets the cipher key length.
| + | < 8.2.0  | 1.0.8  | Function  | `ini_parse_quantity`    | Returns the interpreted size in bytes on success from an ini shorthand.
| ^ | < 8.2.0  | 1.0.8  | Function  | `mysqli_execute_query`  | Prepares, binds parameters, and executes SQL statement
| + | < 8.1.0  | 1.0.2  | Function  | `array_is_list`         | Checks whether a given array is a list




## SIMILAR FILE  [compat_similar.php]

This file implements functions that resemble the original php functions that have not been removed, but have undergone changes and cannot run on all versions.

> "All similar functions start with prefix `alf_`"

| A |    PHP   | phpbcl8 |   TYPE    |          NAME           |                DESCRIPTION
|---|----------|--------|-----------|-------------------------|-----------------------------------------
| + | >= 8.3.0 | 1.0.9  | FILE      | `alf_get_class`         | Fixed E_DEPRECATED warning
| + | ALL      | 1.0.1  | FILE      | `compat_similar.php`    | for similar functions
| + | ALL      | 1.0.2  | Function  | `alf_mb_convert_case`   | ASCOOS LIBRARY FUNCTION : For full compatible similar mb_convert_case.
