<?php

namespace App\Admin\Controllers;

use App\Model\MItem;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '商品';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MItem);

        $grid->column('id', __('messages.Id'));
        $grid->column('item_name', __('messages.Item name'));
        $grid->column('default_price', __('messages.Default price'));
        $grid->column('created_at', __('messages.Created at'));
        $grid->column('updated_at', __('messages.Updated at'));

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
        $show = new Show(MItem::findOrFail($id));

        $show->field('id', __('messages.Id'));
        $show->field('item_name', __('messages.Item name'));
        $show->field('default_price', __('messages.Default price'));
        $show->field('created_at', __('messages.Created at'));
        $show->field('updated_at', __('messages.Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new MItem);

        $form->text('item_name', __('messages.Item name'));
        $form->number('default_price', __('messages.Default price'));

        return $form;
    }
}
