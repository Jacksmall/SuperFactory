<?php
/**
 * Container.php
 * 工厂模式的升华IOC容器
 *
 * @package  ${NAMESPACE}
 * @link     Super
 * @datetime 2020/7/8 10:33
 */

class Container
{
    protected $binds;

    protected $instances;

    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof Closure) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }

    }

    public function make($abstract, $parameters = [])
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }
        // 将该对象$this 放到参数开头
        array_unshift($parameters, $this);
        return call_user_func_array($this->binds[$abstract], $parameters);
    }
}
