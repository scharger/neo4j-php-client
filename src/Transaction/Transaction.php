<?php

/*
 * This file is part of the GraphAware Neo4j Client package.
 *
 * (c) GraphAware Limited <http://graphaware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GraphAware\Neo4j\Client\Transaction;

use GraphAware\Bolt\Exception\MessageFailureException;
use GraphAware\Common\Cypher\Statement;
use GraphAware\Common\Result\Result;
use GraphAware\Common\Transaction\TransactionInterface;
use GraphAware\Neo4j\Client\Event\FailureEvent;
use GraphAware\Neo4j\Client\Event\PostRunEvent;
use GraphAware\Neo4j\Client\Event\PreRunEvent;
use GraphAware\Neo4j\Client\Exception\Neo4jException;
use GraphAware\Neo4j\Client\Neo4jClientEvents;
use GraphAware\Neo4j\Client\Result\ResultCollection;
use GraphAware\Neo4j\Client\StackInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class Transaction
{
    /**
     * @var TransactionInterface
     */
    private $driverTransaction;



    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @param TransactionInterface $driverTransaction
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(TransactionInterface $driverTransaction, EventDispatcherInterface $eventDispatcher)
    {
        $this->driverTransaction = $driverTransaction;
        $this->eventDispatcher = $eventDispatcher;
    }






















}
