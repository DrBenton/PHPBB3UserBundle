PHPBB3UserBundle
================

User Class and Encoder for PHPBB3 User Table


# Current Features

* Simple login with PHPBB3 User


# TODO Features

* Dynamic table name
* Registration
* PW Reminder
* PHPBB3 Accounttypes to SF2 Roles (User, Admin, Mod)


# Install

## AppKernel.php

```php
$bundles = array(
.....
            new \Seyon\PHPBB3\UserBundle\SeyonPHPBB3UserBundle()
.....
        );
```

## config.yml
```yaml
imports:
    - { resource: "@SeyonPHPBB3UserBundle/Resources/config/services.yml" }
```

## routing.yml
```yaml
_phpbb3:
    resource: "@SeyonPHPBB3UserBundle/Resources/config/routing.yml"
    prefix:   /
```
