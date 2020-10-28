<?php

/*
 * This file is part of the GraphAware Neo4j Client package.
 *
 * (c) GraphAware Limited <http://graphaware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GraphAware\Neo4j\Client\Formatter\Type;

use GraphAware\Common\Type\MapAccessor;

class MapAccess implements MapAccessor
{
    /**
     * @var array
     */
    protected $properties = [];















    /**
     * {@inheritdoc}
     */
    public function __get($name)
    {
        return $this->get($name);
    }
}
