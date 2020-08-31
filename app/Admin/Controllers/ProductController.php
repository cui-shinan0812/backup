<?php

namespace App\Admin\Controllers;

use App\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->column('id', __('Id'));
        $grid->column('enterprise_id', __('Enterprise id'));
        $grid->column('name', __('Name'));
        $grid->column('category', __('Category'));
        $grid->column('price', __('Price'));
        $grid->column('build_at', __('Build at'));
        $grid->column('minimum_order_quantity', __('Minimum order quantity'));
        $grid->column('minimum_build_days', __('Minimum build days'));
        $grid->column('icon_url', __('Icon url'));
        $grid->column('comment', __('Comment'));
        $grid->column('three_d_url', __('Three d url'));
        $grid->column('video_url', __('Video url'));
        $grid->column('image_1_url', __('Image 1 url'));
        $grid->column('image_2_url', __('Image 2 url'));
        $grid->column('image_3_url', __('Image 3 url'));
        $grid->column('image_4_url', __('Image 4 url'));
        $grid->column('image_5_url', __('Image 5 url'));
        $grid->column('image_6_url', __('Image 6 url'));
        $grid->column('image_7_url', __('Image 7 url'));
        $grid->column('image_8_url', __('Image 8 url'));
        $grid->column('image_9_url', __('Image 9 url'));
        $grid->column('image_10_url', __('Image 10 url'));
        $grid->column('image_11_url', __('Image 11 url'));
        $grid->column('other', __('Other'));
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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('enterprise_id', __('Enterprise id'));
        $show->field('name', __('Name'));
        $show->field('category', __('Category'));
        $show->field('price', __('Price'));
        $show->field('build_at', __('Build at'));
        $show->field('minimum_order_quantity', __('Minimum order quantity'));
        $show->field('minimum_build_days', __('Minimum build days'));
        $show->field('icon_url', __('Icon url'));
        $show->field('comment', __('Comment'));
        $show->field('three_d_url', __('Three d url'));
        $show->field('video_url', __('Video url'));
        $show->field('image_1_url', __('Image 1 url'));
        $show->field('image_2_url', __('Image 2 url'));
        $show->field('image_3_url', __('Image 3 url'));
        $show->field('image_4_url', __('Image 4 url'));
        $show->field('image_5_url', __('Image 5 url'));
        $show->field('image_6_url', __('Image 6 url'));
        $show->field('image_7_url', __('Image 7 url'));
        $show->field('image_8_url', __('Image 8 url'));
        $show->field('image_9_url', __('Image 9 url'));
        $show->field('image_10_url', __('Image 10 url'));
        $show->field('image_11_url', __('Image 11 url'));
        $show->field('other', __('Other'));
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
        $form = new Form(new Product);

        $form->number('enterprise_id', __('Enterprise id'));
        $form->text('name', __('Name'));
        $form->text('category', __('Category'));
        $form->text('price', __('Price'));
        $form->text('build_at', __('Build at'));
        $form->number('minimum_order_quantity', __('Minimum order quantity'));
        $form->text('minimum_build_days', __('Minimum build days'));
        $form->text('icon_url', __('Icon url'));
        $form->textarea('comment', __('Comment'));
        $form->text('three_d_url', __('Three d url'));
        $form->text('video_url', __('Video url'));
        $form->text('image_1_url', __('Image 1 url'));
        $form->text('image_2_url', __('Image 2 url'));
        $form->text('image_3_url', __('Image 3 url'));
        $form->text('image_4_url', __('Image 4 url'));
        $form->text('image_5_url', __('Image 5 url'));
        $form->text('image_6_url', __('Image 6 url'));
        $form->text('image_7_url', __('Image 7 url'));
        $form->text('image_8_url', __('Image 8 url'));
        $form->text('image_9_url', __('Image 9 url'));
        $form->text('image_10_url', __('Image 10 url'));
        $form->text('image_11_url', __('Image 11 url'));
        $form->text('other', __('Other'));
        $form->text('status', __('Status'))->default('in_review');

        return $form;
    }
}
