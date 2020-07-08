<?php
/**
 * SuperModuleFactory.php
 *
 * 创建这个超能力模组满足超人所需
 * 外部负责超人的依赖需求，IOC
 *
 * @package  ${NAMESPACE}
 * @link     Super
 * @datetime 2020/7/8 10:09
 */

class SuperModuleFactory
{
    public function makeModule($moduleName, $options)
    {
        switch ($moduleName) {
            case 'Flight': return new Flight($options[0], $options[1]);
            case 'Force': return new Force($options[0]);
            case 'Shot': return new Shot($options[0], $options[1], $options[2]);
        }
    }
}