
edi config

```yaml

doctrine:
    dbal:
        default_connection:   default
        connections:
            default:
# default connections info...
                dbname:               "%database_name%"
                host:                 "%database_host%"
                port:                 "%database_port%"
                user:                 "%database_user%"
                password:             "%database_password%"
            seyon_phpbb3:
# forum connections info...
                dbname:               "phpbb"
                host:                 "%database_host%"
                port:                 "%database_port%"
                user:                 "%database_user%"
                password:             "%database_password%"
    orm:
        auto_generate_proxy_classes: "%kernel.debug%"
        default_entity_manager:   default
        entity_managers:
            default:
                connection: default
            seyon_phpbb3:
                connection:       seyon_phpbb3
                mappings:
                    SeyonPHPBB3UserBundle: ~

```
