# ZPL

## Introduction

ZPL is a PHP package for creating Zebra Programming Language (ZPL) label code. It provides a simple and intuitive API to generate ZPL code in an object-oriented way, making it easier to create complex labels.

## Installation

To install this package, you need to use Composer, a dependency manager for PHP. Before running the require command, you need to add the repository to your composer file so that the package can be found. Here are the steps:

1. Run the following command in your project directory to add the repository to your `composer.json` file:

    ```bash
    composer config repositories.smart-dato/zpl vcs git@bitbucket.org:smartdato/zpl.git
    ```

   This command will automatically create a `repositories` section in your `composer.json` if it doesn't exist and add the repository information.

2. After adding the repository, you can now run the following command in your project directory:

    ```bash
    composer require smart-dato/zpl:dev-main
    ```

## License

This package is private and its use is subject to the license agreement.
