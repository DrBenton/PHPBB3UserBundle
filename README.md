PHPBB3UserBundle
================

User Class and Encoder for PHPBB3 User Table

# Warning
This Bundle need Symfony 2.2 (DEV) !

# Current Features

* Simple login with PHPBB3 User


# TODO Features

* Dynamic table name
* Registration
* PW Reminder
* PHPBB3 Accounttypes to SF2 Roles (User, Admin, Mod)
* Correct Mapping (Default Values)


# Install

## composer.json

```json
.....
"require": {
....
    "seyon/phpbb3-user-bundle": "dev-master"
....
},
.....

```

## AppKernel.php

```php
$bundles = array(
.....
            new \Seyon\PHPBB3\UserBundle\SeyonPHPBB3UserBundle()
.....
        );
```

## routing.yml
```yaml
_phpbb3:
    resource: "@SeyonPHPBB3UserBundle/Resources/config/routing.yml"
    prefix:   /
```

## security.yml
```yaml

security:
    encoders:
        Seyon\PHPBB3\UserBundle\Entity\User:
          id: phpbb3_encoder
          
    providers:
        main:
            entity: { class: Seyon\PHPBB3\UserBundle\Entity\User, property: username }

    role_hierarchy:
        ROLE_MOD:         ROLE_USER
        ROLE_ADMIN:       ROLE_MOD
        ROLE_SUPER_ADMIN: [ROLE_USER, ROLE_MOD, ROLE_ADMIN, ROLE_ALLOWED_TO_SWITCH]

    firewalls:
        dev:
            pattern:  ^/(_(profiler|wdt)|css|images|js)/
            security: false

        login:
            pattern:  ^/login$
            security: false

        secured_area:
            pattern:    ^/
            form_login:
                check_path: /login_check
                login_path: /login
            logout:
                path:   /logout
                target: /
            anonymous: ~ 

```
