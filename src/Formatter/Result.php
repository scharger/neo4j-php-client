<?php

/*
 * This file is part of the GraphAware Neo4j Client package.
 *
 * (c) GraphAware Limited <http://graphaware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GraphAware\Neo4j\Client\Formatter;

use GraphAware\Common\Cypher\StatementInterface;
use GraphAware\Common\Result\AbstractRecordCursor;
use GraphAware\Common\Result\Record;
use GraphAware\Neo4j\Client\Formatter\Type\Node;
use GraphAware\Neo4j\Client\Formatter\Type\Path;
use GraphAware\Neo4j\Client\Formatter\Type\Relationship;
use GraphAware\Neo4j\Client\HttpDriver\Result\ResultSummary;
use GraphAware\Neo4j\Client\HttpDriver\Result\StatementStatistics;

class Result extends AbstractRecordCursor
{








    /**
     * {@inheritdoc}
     */
    public function __construct(StatementInterface $statement)
    {
        $this->resultSummary = new ResultSummary($statement);

        parent::__construct($statement);
    }







    /**
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }



    /**
     * @param $data
     * @param $graph
     */
    public function pushRecord($data, $graph)
    {
        $mapped = $this->array_map_deep($data, $graph);
        $this->records[] = new RecordView($this->fields, $mapped);
    }

    /**
     * @param array $stats
     */
    public function setStats(array $stats)
    {
        $this->resultSummary->setStatistics(new StatementStatistics($stats));
    }














}
