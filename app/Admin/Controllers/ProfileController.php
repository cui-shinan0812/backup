<?php

namespace App\Admin\Controllers;

use App\Profile;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProfileController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Profile';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Profile);

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('icon_url', __('Icon url'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('location', __('Location'));
        $grid->column('city', __('City'));
        $grid->column('country', __('Country'));
        $grid->column('zip_code', __('Zip code'));
        $grid->column('tel', __('Tel'));
        $grid->column('wechat_account', __('Wechat account'));
        $grid->column('vip_type', __('Vip type'));
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
        $show = new Show(Profile::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('icon_url', __('Icon url'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('location', __('Location'));
        $show->field('city', __('City'));
        $show->field('country', __('Country'));
        $show->field('zip_code', __('Zip code'));
        $show->field('tel', __('Tel'));
        $show->field('wechat_account', __('Wechat account'));
        $show->field('vip_type', __('Vip type'));
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
        $form = new Form(new Profile);

        $vips = [
            1 => 'free',
            2 => 'stanard',
            3 => 'enterprise',
            4 => 'partner'
        ];

        $form->number('user_id', __('User id'));
        $form->text('icon_url', __('Icon url'));
        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->text('location', __('Location'));
        $form->text('city', __('City'));
        $form->text('country', __('Country'));
        $form->text('zip_code', __('Zip code'));
        $form->mobile('tel', __('Tel'));
        $form->text('wechat_account', __('Wechat account'));
        $form->select('vip_type', __('Vip type'))->options($vips);

        return $form;
    }
}
