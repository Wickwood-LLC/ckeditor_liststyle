# List Style Plugin

## Description
This plugin adds numbered list and ordered list properties dialogs (available
in context menu).

They allow setting:

* list type (e.g. circle, square, dot for bulleted list or decimal, lower/upper
  roman, lower/upper alpha for numbered list)
* start number (for numbered list).

## Known issue
Any text format with `Limit allowed HTML tags and correct faulty HTML` filter enabled will strip the `style` attribute from ANY tags. See [FilterHtml](https://api.drupal.org/api/drupal/core%21modules%21filter%21src%21Plugin%21Filter%21FilterHtml.php/class/FilterHtml) class:

> The 'style' and 'on*' ('onClick' etc.) attributes are always forbidden, and are removed by Xss::filter()

However, the [CKEditor 4 List Style](https://ckeditor.com/cke4/addon/liststyle) plugin sets the list properties via inline styles.

That limits this add-on's usage only to text-formats NOT using `Limit allowed HTML tags and correct faulty HTML` filter. i.e. *Full HTML*

## Usage
Right click on any numbered or ordered list in CKEditor to open the context
menu.

## Installation
This module requires:

- `drupal/ckeditor`: Drupal core module _CKEditor_.

- [CKEditor 4 List Style](https://ckeditor.com/cke4/addon/liststyle): A CKEditor4 plugin that adds numbered list and ordered list properties dialogs (available in context menu).

### Install using Composer (recommended)

There are at least couple different ways to install the CKEditor List Style module and the plugin via Composer.

- Previous recommendation requires adding following package definition to the "repositories" section of `composer.json`:

``` json
"repositories": {
    ...
    {
        "type": "package",
        "package": {
            "name": "ckeditor/liststyle",
            "version": "4.14.1",
            "type": "drupal-library",
            "extra": {
                "installer-name": "ckeditor/plugins/liststyle"
            },
            "dist": {
                "url": "https://download.ckeditor.com/liststyle/releases/liststyle_4.14.1.zip",
                "type": "zip"
            }
        }
    }
    ...
}
```

- Update the `composer.lock` file: `composer update --lock`

- Install plugin and the module: `composer require ckeditor/liststyle drupal/ckeditor_liststyle`

Alternatively, you can merge the provided `composer.libraries.json` file to the project `composer.json` file:

- Install [Composer Merge Plugin](https://github.com/wikimedia/composer-merge-plugin):
  `composer require wikimedia/composer-merge-plugin`

- Add the following to the `extra` section of the `composer.json` file:

```json
"extra": {
    ...
    "merge-plugin": {
        "include": [
            "web/modules/contrib/ckeditor_liststyle/composer.libraries.json"
        ]
    }
    ...
}
```

- Update the `composer.lock` file: `composer update --lock`

- Install the module: `composer require drupal/ckeditor_liststyle`

As the plugin is defined as a dependency, it would be installed to `/libraries/ckeditor/plugins/liststyle/plugin.js`.

### Install manually
- Open https://ckeditor.com/cke4/addon/liststyle and download the *[version: 4.14.1](https://download.ckeditor.com/liststyle/releases/liststyle_4.14.1.zip)*.

- Extract the content and copy to *libraries* folder. i.e. `/libraries/liststyle/plugin.js`

- Download [CKEditor List Style](https://www.drupal.org/project/ckeditor_liststyle) (this module) and then extract files into `/modules/contrib/ckeditor_liststyle`

## Resources
[Other contributed modules and plug-ins available for CKEditor](https://www.drupal.org/documentation/modules/ckeditor/contrib)

## Maintainers
Osman Gormus - https://www.drupal.org/u/osman
