<?php
namespace olivestudio\olivemenus\events;

use yii\base\Event;

class BeforeMenuItemEvent extends Event
{

    const BEFORE_MENU_ITEM = 'beforeMenuItem';

    /**
     * @var array
     */
    public $menu_item;

    /**
     * @return array
     */
    public function getMenuItem(): array
    {
        return $this->menu_item;
    }

    /**
     * @param array $menu_item
     */
    public function setMenuItem(array $menu_item)
    {
        $this->menu_item = $menu_item;
    }

}
