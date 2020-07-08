<?php
class SuperMan
{
    /*public function __construct()
    {
        $factory = new SuperModuleFactory();
        $this->power = $factory->makeModule('Flight', [9, 100]);
        $this->power = $factory->makeModule('Force', [45]);
        $this->power = $factory->makeModule('Shot', [99, 50, 2]);
    }*/
    /**
     * @var SuperModuleInterface
     */
    protected $module;

    public function __construct(SuperModuleInterface $module)
    {
        $this->module = $module;
    }
}

// 创建超人
/*$superman = new SuperMan([
    'Flight' => [9, 100],
    'Shot' => [99, 50, 2]
]);*/
