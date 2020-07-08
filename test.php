<?php
/**
 * test.php
 *
 * @package  ${NAMESPACE}
 * @link     Super
 * @datetime 2020/7/8 10:27
 */
// 手动创建超人
$superModule = new XPower();
$superMan = new SuperMan($superModule);

// 手动创建另外一种超人
$superModule2 = new UltraBomb();
$superMan2 = new SuperMan($superModule2);

// 创建一个容器 （超级工厂）
$container = new Container();

// 向该 超级工厂 添加 超人 的生成脚本
$container->bind('superman', function ($container, $moduleName) {
    return new SuperMan($container->make($moduleName));
});

// 向该 超级工厂 添加 超能力模组 的生成脚本
$container->bind('xpower', function ($container) {
   return new XPower();
});

// 同上
$container->bind('ultrabomb', function ($container) {
    return new UltraBomb();
});

// ============ 分割线 =============
// 开始启动生产
$superman_1 = $container->make('superman', 'xpower');
$superman_2 = $container->make('superman', 'ultrabomb');
$superman_3 = $container->make('superman', 'xpower');
// ....
