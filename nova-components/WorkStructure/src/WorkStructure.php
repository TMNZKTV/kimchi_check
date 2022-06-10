<?php

namespace Acme\WorkStructure;

use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class WorkStructure extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('work-structure', __DIR__.'/../dist/js/tool.js');
        Nova::style('work-structure', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param  \Illuminate\Http\Request $request
     * @return mixed
     */
    public function menu(Request $request)
    {
        // 10.06. Изменил название и икону в сайдбаре
        return MenuSection::make('Орг. структура')
            ->path('/work-structure')
            ->icon('briefcase');
    }
}
