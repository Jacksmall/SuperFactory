<?php
/**
 * SuperModuleInterface.php
 *
 * 契约
 * 无论是谁来创造模组，都要符合该接口
 *
 * @package  ${NAMESPACE}
 * @link     Super
 * @datetime 2020/7/8 10:20
 */
interface SuperModuleInterface
{
    /**
     * 超能力激活方法
     * 任何一个超能力都得有该方法，并拥有一个参数
     * @param array $target 针对目标，可以是一个或多个，自己或他人
     */
    public function active(array $target);
}