<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\Tools\CreateDeliveryBatchAction;
use App\Helper\Option;
use App\Model\MCustomer;
use App\Model\MItem;
use App\Model\TEstimate;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Laravel\Pdf\Pdf;

class TEstimateController extends AdminController {

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '見積書';

    function pdf($id) {
        $pdf = new Pdf();
        $path = $pdf->create();
        return response()->download($path, '見積書_' . $id . '.pdf')->deleteFileAfterSend(TRUE);
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid() {

        $pdf = new Pdf();
        $pdf->create();

        $grid = new Grid(new TEstimate);

        $grid->column('id', __('messages.Id'));
        $grid->column('kbn_cd', __('messages.Kbn cd'))->using(config('kbn.kbn_type'));
        $grid->column('m_customer_id', __('messages.m_customer'))->display(function ($customer_id) {
            return MCustomer::find($customer_id)->customer_name;
        });
        $grid->column('issue_date', __('messages.Issue date'));
        $grid->column('created_at', __('messages.Created at'));
        $grid->column('updated_at', __('messages.Updated at'));
        $grid->actions(function (Grid\Displayers\Actions $actions) {
            $actions->disableDelete();
            if ($this->row->is_fixed) {
                $actions->append('<a target="_blank" href="' . route('estimate_pdf', ['id' => $this->row->id]) . '"><i class="fa fa-download"></i><span></span></a>');
            }
        });

        $grid->tools(function (Grid\Tools $tools) {
            $tools->batch(function (Grid\Tools\BatchActions $batch) {
                $batch->add('納品書一括作成', new CreateDeliveryBatchAction(config('kbn.file_type.estimate')));
            });
        });


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id) {
        $show = new Show(TEstimate::findOrFail($id));

        $show->field('id', __('messages.Id'));
        $show->field('kbn_cd', __('messages.Kbn cd'));
        $show->field('m_customer_id', __('messages.M customer id'));
        $show->field('issue_date', __('messages.Issue date'));
        $show->field('created_at', __('messages.Created at'));
        $show->field('updated_at', __('messages.Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form() {

        $form = new Form(new TEstimate);
        $form->tab(__('messages.slip'), function ($form) {
            //伝票
            $form->radio('kbn_cd', __('messages.Kbn cd'))->options(config('kbn.kbn_type'))->rules('required');
            $form->select('m_customer_id', __('messages.m_customer'))->options(function ($id) {
                $customer = MCustomer::find($id);
                if ($customer) {
                    return [$customer->id => $customer->customer_name];
                }
            })->ajax(route('api', ['api_name' => 'customer']))->rules('required');
            $form->date('issue_date', __('messages.Issue date'))->default(date('Y-m-d'))->rules('required');
        })->tab(__('messages.detail'), function ($form) {
            //明細
            $form->hasMany('detail', NULL, function (Form\NestedForm $detail_form) {
                $detail_form->select('m_item_id', __('messages.m_item'))->options(function ($item_id) {
                    $item = MItem::find($item_id);
                    if ($item) {
                        return [$item->id, $item->item_name];
                    }
                })->ajax(route('api', ['api_name' => 'item']))->rules('required');
                $detail_form->number('item_count', __('messages.item count'))->rules('required');
                $detail_form->number('item_price', __('messages.item price'))->rules('required');
                $detail_form->select('m_tax_id', __('messages.m_tax'))->options(Option::tax())->rules('required');
                $detail_form->text('remark', __('messages.remark'));
            });
        });
        return $form;
    }
}
