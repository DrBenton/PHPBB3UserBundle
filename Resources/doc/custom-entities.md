(only the differences)

create your custom Entities in Acme/DemoBudle/Entity

edit config
```yaml
# app/config/config.yml

doctrine:
    dbal:
        default_connection:   default
        connections:
            default:
#...
            seyon_phpbb3:
                dbname:               "phpbb"
                host:                 "%database_host%"
                port:                 "%database_port%"
                user:                 "%database_user%"
                password:             "%database_password%"
    orm:
        default_entity_manager:   default
        entity_managers:
            default:
                connection: default
            seyon_phpbb3:
                connection:       seyon_phpbb3
                mappings:
                    SeyonPHPBB3UserBundle: ~
                    AcmeDemoBundle: ~
                    
# ...
seyon_phpbb3_user:
    template: "SeyonPHPBB3UserBundle::layout.html.twig"
    table_prefix: "phpbb_" 
    user_class: Acme\DemoBundle\Entity\User
    group_class: Acme\DemoBundle\Entity\Group 
  
```

security
```yaml
# app/config/security.yml

security:
    encoders:
        Acme\DemoBundle\Entity\User:
          id: phpbb3_encoder

    providers:
        main:
            id: seyon_phpbb3_custom_user_provider
#...

```


services
```yaml
# Acme/DemoBundle/Resources/config/services.yml
services:
     seyon_phpbb3_custom_user_provider:
         class: Seyon\PHPBB3\UserBundle\Security\Provider
         arguments: ["@doctrine", 'Acme\DemoBundle\Entity\User', 'username']
```
