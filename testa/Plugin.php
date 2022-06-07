<?php namespace Test\TestA;

use Backend;
use System\Classes\PluginBase;

/**
 * TestA Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'TestA',
            'description' => 'No description provided yet...',
            'author'      => 'Test',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Test\TestA\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'test.testa.some_permission' => [
                'tab' => 'TestA',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'testa' => [
                'label'       => 'TestA',
                'url'         => Backend::url('test/testa/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['test.testa.*'],
                'order'       => 500,
            ],
        ];
    }
}
