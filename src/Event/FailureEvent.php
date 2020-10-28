<?php

/*
 * This file is part of the GraphAware Neo4j Client package.
 *
 * (c) GraphAware Limited <http://graphaware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GraphAware\Neo4j\Client\Event;

use GraphAware\Neo4j\Client\Exception\Neo4jExceptionInterface;
use Symfony\Component\EventDispatcher\Event;

class FailureEvent extends Event
{




    /**
     * @param Neo4jExceptionInterface $exception
     */
    public function __construct(Neo4jExceptionInterface $exception)
    {
        $this->exception = $exception;
    }





    /**
     * @return bool
     */
    public function shouldThrowException()
    {
        return $this->shouldThrowException;
    }
}
