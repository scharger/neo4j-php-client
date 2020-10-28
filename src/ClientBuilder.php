<?php

/*
 * This file is part of the GraphAware Neo4j Client package.
 *
 * (c) GraphAware Limited <http://graphaware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GraphAware\Neo4j\Client;

use GraphAware\Common\Connection\BaseConfiguration;
use GraphAware\Common\Driver\ConfigInterface;
use GraphAware\Neo4j\Client\Connection\ConnectionManager;
use GraphAware\Neo4j\Client\HttpDriver\Configuration;
use Symfony\Component\EventDispatcher\EventDispatcher;

class ClientBuilder
{
    const PREFLIGHT_ENV_DEFAULT = 'NEO4J_DB_VERSION';

    const DEFAULT_TIMEOUT = 5;

    const TIMEOUT_CONFIG_KEY = 'timeout';

    /**
     * @var array
     */
    protected $config = [];

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config['connection_manager']['preflight_env'] = self::PREFLIGHT_ENV_DEFAULT;
        $this->config['client_class'] = Client::class;

        if (!empty($config)) {
            $this->config = array_merge($this->config, $config);
        }
    }















    /**
     * @return int
     */
    private function getDefaultTimeout()
    {
        return array_key_exists(static::TIMEOUT_CONFIG_KEY, $this->config) ? $this->config[static::TIMEOUT_CONFIG_KEY] : self::DEFAULT_TIMEOUT;
    }
}
