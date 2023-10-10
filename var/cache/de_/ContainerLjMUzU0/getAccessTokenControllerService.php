<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] ?? ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] = new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository())), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDSrSthtxP5A1oC'."\n".'vGBIHPO+b9TFJwrhK8xL/pwmBa+R7lkLoYwZm0hMziFwYp/2+ELAh2AEPlvy82la'."\n".'/m+ewTlR0AcP4NEPHnd5esqIb4VwSV4Jcvh8e0Qo8PCVoXy5AVKqE5SpRwAruwXU'."\n".'Qc1R6CrcVYEUEAS6m7PfeUGOBQfmlNQmJGGlstpW1vSP/gjtK1MRZeaf3hliQ1QS'."\n".'vVPKoWesD1IDUYVCFCx2feB4Z0K12A7aDQoNrfLHvhRsR82wKQqPCiwdDLe5Mv2j'."\n".'QFwxZyoB0WjxAQ4dSfq3N9M9rruVb6MzFJgnpIR9ahjS/7Jogu1CHIlttU9J7K6P'."\n".'xyZnPnzdAgMBAAECggEAE+h7TfuP7psLeXC1pHrf6aIFuC+tToPmBVRlCw7EfYTJ'."\n".'c1jrtUvANEnSTR10wlDJdgoU37HI3Jd14Dxk7dqSgRGoaS60crpNTfR1iRkIwgic'."\n".'00XDB3hag4fpJCqjb5QZbKr3BFwKPxeoQFuLfG71BecqkGvHFp86CycZM8Nz8Kz5'."\n".'qkceSgZw7si/uOl2m7MbOy2HnESYBLPrYArLOXy7XK5hDyO53TCQU2J0Hxvt57uL'."\n".'/IpzcZ7L3RxXK/DiGk5RibZkbdwddkekUxHpYjMNVRhYVbqXTan/I87ZG18v57d9'."\n".'OrSNPwnKcH5DP23lZzsksfpacfi5lOHw00vuUouFgQKBgQD7yjtieIyj6SHmQUnK'."\n".'ICGBv0CdE3uUHFa/2DAs3VH71bhCjc3YeWBdPk/KUC48zxmvcQwcl0ewqQLx1DqI'."\n".'9E/TrYZUUzMANfwIeEMBcqXJ+HQV6DyJaiDOGDssU4xitcVRAXF0QkxlKM42LYn9'."\n".'VNF0v3zEzT+2qGVTWKJmMKQAvQKBgQDWMvRCIuip35qUS25IGFMnAC8s85hJxuXr'."\n".'qHWeyutu66OrJ3AKKvFWw/2o9n4DjyHCKR6w3AmE9z7n4j/c+FkzPfKJnBv3fGPI'."\n".'iS/ZetIYOmdPZL7almtSVBW0q7QB3QDiCeFQJLZZ2hkwP6QNkv0UQ1XMd6cYVlCt'."\n".'9lZUYwF+oQKBgADJoCftsprspsN+nsl4EkLCo2QaZH+RGyBcf8IUKyZ7g6kJooQz'."\n".'1P5VrJA4cfyUtULcOqp4OqwtyymQfWJiSUGjQFFRNU6h3Jj2L1d40VXxZgOPh2jy'."\n".'oQmj/8Niu4Svht96/qzbbDvAxexbdhwJwOH5m11OOw3KNw7srw1cx5aNAoGBAJuW'."\n".'X346xS2/UhUtxWlw4dWOeLX6K0BLzW6j6uvxEZp8Z2JHP0bjcnJH4tT8VwRWz3qt'."\n".'S7HD4tZGkdb1rNXhP0nNUYNLdbULEZ/0pmEeqcUXhztQPqGgaUxf73RQ1GwWEDIg'."\n".'Yx1HzXzuwyUc1RlXD6XMU2I195Xh/LCgIo0hbVCBAoGALEVdPQB6wj1TP62ZSN8R'."\n".'niLhmd7NN1qx6kAHKDQpwqzpmtvGWKJDndFY2nIyqXbE/B26xrVBpuAaHuKbNf9S'."\n".'CekpMWNpcgK5qCo+2WBaCdNFSriyTI4Q9d4K5CCtj2G29DitOI4GcTYBClKiJvKm'."\n".'S0VdNT+4oj2z9LNu1W8hoLY='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000659a2e4706826d4b6d1e26b6d15d8d73ca52f372a91785bd19c755ad45a4d592cb9c38fd968c03f6c416278c161002130d42478aca7b86fca57ca870cc20ac65');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, ($this->privates['Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory'] ?? $this->load('getPsrHttpFactoryService.php')), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), ($this->privates['Nyholm\\Psr7\\Factory\\Psr17Factory'] ?? ($this->privates['Nyholm\\Psr7\\Factory\\Psr17Factory'] = new \Nyholm\Psr7\Factory\Psr17Factory())));
