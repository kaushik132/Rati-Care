<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Contact;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact());

        $grid->column('id', __('Id'));
        $grid->column('firstname', __('Firstname'));
        $grid->column('lastname', __('Lastname'));
        $grid->column('email', __('Email'));
        $grid->column('phonenumber', __('Phonenumber'));
        $grid->column('message', __('Message'));
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
        $show = new Show(Contact::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('firstname', __('Firstname'));
        $show->field('lastname', __('Lastname'));
        $show->field('email', __('Email'));
        $show->field('phonenumber', __('Phonenumber'));
        $show->field('message', __('Message'));
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
        $form = new Form(new Contact());

        $form->text('firstname', __('Firstname'));
        $form->text('lastname', __('Lastname'));
        $form->email('email', __('Email'));
        $form->text('phonenumber', __('Phonenumber'));
        $form->textarea('message', __('Message'));

        return $form;
    }
}
