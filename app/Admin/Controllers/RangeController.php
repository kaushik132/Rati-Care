<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Range;

class RangeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Range';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Range());

        $grid->column('id', __('Id'));
        $grid->column('starting_price', __('Starting price'));
        $grid->column('ending_price', __('Ending price'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Range::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('starting_price', __('Starting price'));
        $show->field('ending_price', __('Ending price'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Range());

        $form->text('starting_price', __('Starting price'));
        $form->text('ending_price', __('Ending price'));

        return $form;
    }
}
