<?php

/*
 * This file is part of the GraphAware Neo4j Client package.
 *
 * (c) GraphAware Limited <http://graphaware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GraphAware\Neo4j\Client\HttpDriver;

use GraphAware\Common\Driver\ConfigInterface;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Message\RequestFactory;
use GraphAware\Common\Connection\BaseConfiguration;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class Configuration extends BaseConfiguration implements ConfigInterface
{
    /**
     * @var int
     * @deprecated Will be removed in 5.0
     */
    protected $timeout;

    /**
     * @var string
     * @deprecated Will be removed in 5.0
     */
    protected $curlInterface;

    /**
     * @return Configuration
     */
    public static function create(HttpClient $httpClient = null, RequestFactory $requestFactory = null)
    {
        return new self([
            'http_client' => $httpClient ?: HttpClientDiscovery::find(),
            'request_factory' => $requestFactory ?: MessageFactoryDiscovery::find(),
        ]);
    }





    /**
     * @param int $timeout
     *
     * @return Configuration
     * @deprecated Will be removed in 5.0. The Timeout option will disappear.
     */
    public function withTimeout($timeout)
    {
        return $this->setValue('timeout', $timeout);
    }






}
