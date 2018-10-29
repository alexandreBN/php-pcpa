# PHP-PCPA
PHP PCPA (Phar Client Provider Autoload) is a "simple/workaround" way to using generated phar from provider (with Autoload) in client.

## Projects composition
### phar-provider: resources creator
#### Files:
     - ./Autoload.php: internal files loader (phar-provider project)
     - ./Model/User.php: class used by phar-client

### phar-client: resources user
#### Files:
     - ./phar-provider.phar: phar file generated from phar-provider
     - ./Autoload.php: internal files loader (phar-client project)
     - ./AutoloadProvider.php: external files loader (to use php-provider resources)
     - ./Client.php: internal use class
     - ./index.php: sample to use internal class (Client.php) and external class (./Model/User.php) from phar-provider
