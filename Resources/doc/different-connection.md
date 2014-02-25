edi config

```yaml

doctrine:
    dbal:
        default_connection:   default
        connections:
            default:
# default connection info...
                dbname:               "%database_name%"
                host:                 "%database_host%"
                port:                 "%database_port%"
                user:                 "%database_user%"
                password:             "%database_password%"
            seyon_phpbb3:
# forum connection info...
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

```
