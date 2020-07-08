<?php
/**
 * Flight.php
 *
 * @package  ${NAMESPACE}
 * @link     Super
 * @datetime 2020/7/8 10:02
 */

class Flight
{
    protected $speed;
    protected $holdtime;

    public function __construct($speed, $holdtime)
    {
        $this->speed = $speed;
        $this->holdtime = $holdtime;
    }
}