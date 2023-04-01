# ee7-env
Sample ExpressionEngine v7 configs for production and local development with DDEV.

## Usage
1. Copy the `.env.x.php` files into your ExpressionEngine v7 site within the same directory as your `system/` directory.

Note: If you have moved your `system/` directory outside of the webroot you must also move your `.env.{env}.php` files to that location.

2. Rename the `.env.x.php` you would like to use to `.env.php`.

3. Copy any necessary values from your existing `config.php` file to the `.env.php` file

4. Copy the included `config.php` to `system/user/config/`.

Note: Be sure to replace the `app_version` to match the version of your ExpressionEngine install. `.env.php` will not work for ExpressionEngine 6 and below.
