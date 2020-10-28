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

use GraphAware\Common\Result\AbstractRecordCursor;
use GraphAware\Neo4j\Client\Connection\ConnectionManager;
use GraphAware\Neo4j\Client\Exception\Neo4jException;
use GraphAware\Neo4j\Client\Result\ResultCollection;
use GraphAware\Neo4j\Client\Schema\Label;
use GraphAware\Neo4j\Client\Transaction\Transaction;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Interface ClientInterface.
 */
interface ClientInterface
{


    /**
     * @param string      $query
     * @param null|array  $parameters
     * @param null|string $tag
     *
     * @throws Neo4jException
     *
     * @return AbstractRecordCursor
     */
    public function runWrite($query, $parameters = null, $tag = null);
















}
