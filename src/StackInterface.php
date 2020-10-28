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

use GraphAware\Common\Cypher\Statement;

/**
 * Interface StackInterface.
 */
interface StackInterface
{
    /**
     * @param null|string $tag
     * @param null|string $connectionAlias
     *
     * @return Stack
     */
    public static function create($tag = null, $connectionAlias = null);













    /**
     * @return Statement[]
     */
    public function statements();

    /**
     * @return null|string
     */
    public function getTag();

    /**
     * @return null|string
     */
    public function getConnectionAlias();

    /**
     * @return bool
     */
    public function hasWrites();
}
