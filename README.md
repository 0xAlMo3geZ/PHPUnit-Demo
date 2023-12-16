# PHPUnit-Demo

PHP Unit testing using PHPUnit.

# Setup

1- Use the composer config generator to generate the composer.json file

```
composer init
composer dump-autoload
```

2- create a new file in your project directory called “phpunit.xml”. This file will contain the configuration settings for PHPUnit.

```php
<phpunit colors="true" bootstrap="vendor/autoload.php">
    <testsuites>
        <testsuite name="My Project Tests">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

3- Create a bootstrap.php file in the src folder with the following content:

```php
<?php

require_once __DIR__ . '/../vendor/autoload.php';
```

With these steps, you should now have a PHP project set up with PHPUnit installed and configured. In the next section, we’ll cover how to write and run basic tests using PHPUnit.
