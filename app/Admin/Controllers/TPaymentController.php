<?php

namespace App\Admin\Controllers;

use App\Model\MCustomer;
use App\Model\TPayment;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TPaymentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '払込書';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TPayment);

        $grid->column('id', __('messages.Id'));
        $grid->column('m_customer_id', __('messages.m_customer'));
        $grid->column('tax_included_price', __('messages.tax_included_price'));
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
        $show = new Show(TPayment::findOrFail($id));

        $show->field('id', __('messages.Id'));
        $show->field('m_customer_id', __('messages.M customer id'));
        $show->field('tax_included_price', __('messages.tax_included_price'));
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
        $form = new Form(new TPayment);

        $form->select('m_customer_id', __('messages.m_customer'))->options(function ($id) {
            $customer = MCustomer::find($id);
            if ($customer) {
                return [$customer->id => $customer->customer_name];
            }
        })->ajax(route('api', ['api_name' => 'customer']))->rules('required');
        $form->number('tax_included_price', __('messages.tax_included_price'));

        return $form;
    }
}
