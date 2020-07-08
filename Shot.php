<?php
/**
 * Shot.php
 *
 * @package  ${NAMESPACE}
 * @link     Super
 * @datetime 2020/7/8 10:03
 */

class Shot
{
    protected $atk;
    protected $range;
    protected $limit;

    public function __construct($atk, $range, $limit)
    {

        $this->atk = $atk;
        $this->range = $range;
        $this->limit = $limit;
    }
}