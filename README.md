# yupe-component-YMenu2
Компонент для модуля "Menu". Устанавливает активный пункт меню.

Применение:

$this->widget(
    'application.modules.menu.components.YMenu2',
    [
        'items' => $items,
        'activateParents' => true,
        'htmlOptions' => [
            'id' => 'top-menu',
            'class' => 'top-menu justify'
        ],
        'submenuHtmlOptions' => [
            'class' => 'top-menu__submenu',
        ],
    ]
);
