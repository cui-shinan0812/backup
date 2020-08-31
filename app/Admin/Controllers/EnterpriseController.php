<?php

namespace App\Admin\Controllers;

use App\Enterprise;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EnterpriseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Enterprise';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Enterprise);

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('name', __('Name'));
        $grid->column('location', __('Location'));
        $grid->column('city', __('City'));
        $grid->column('country', __('Country'));
        $grid->column('zip_code', __('Zip code'));
        $grid->column('tel', __('Tel'));
        $grid->column('phone', __('Phone'));
        $grid->column('ceo', __('Ceo'));
        $grid->column('ceo_phone', __('Ceo phone'));
        $grid->column('category', __('Category'));
        $grid->column('comment', __('Comment'));
        $grid->column('employees', __('Employees'));
        $grid->column('scale', __('Scale'));
        $grid->column('video_url', __('Video url'));
        $grid->column('icon_url', __('Icon url'));
        $grid->column('image_1_url', __('Image 1 url'));
        $grid->column('image_2_url', __('Image 2 url'));
        $grid->column('status', __('Status'));
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
        $show = new Show(Enterprise::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('name', __('Name'));
        $show->field('location', __('Location'));
        $show->field('city', __('City'));
        $show->field('country', __('Country'));
        $show->field('zip_code', __('Zip code'));
        $show->field('tel', __('Tel'));
        $show->field('phone', __('Phone'));
        $show->field('ceo', __('Ceo'));
        $show->field('ceo_phone', __('Ceo phone'));
        $show->field('category', __('Category'));
        $show->field('comment', __('Comment'));
        $show->field('employees', __('Employees'));
        $show->field('scale', __('Scale'));
        $show->field('video_url', __('Video url'));
        $show->field('icon_url', __('Icon url'));
        $show->field('image_1_url', __('Image 1 url'));
        $show->field('image_2_url', __('Image 2 url'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Enterprise);

        $form->number('user_id', __('User id'));
        $form->text('name', __('Name'));
        $form->text('location', __('Location'));
        $form->text('city', __('City'));
        $form->text('country', __('Country'));
        $form->text('zip_code', __('Zip code'));
        $form->text('tel', __('Tel'));
        $form->mobile('phone', __('Phone'));
        $form->text('ceo', __('Ceo'));
        $form->text('ceo_phone', __('Ceo phone'));
        $form->text('category', __('Category'));
        $form->textarea('comment', __('Comment'));
        $form->text('employees', __('Employees'));
        $form->text('scale', __('Scale'));
        $form->text('video_url', __('Video url'));
        $form->text('icon_url', __('Icon url'));
        $form->text('image_1_url', __('Image 1 url'));
        $form->text('image_2_url', __('Image 2 url'));
        $form->text('status', __('Status'))->default('normal');

        return $form;
    }
}
