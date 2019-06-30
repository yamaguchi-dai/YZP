<?php


namespace App\Admin\Extensions\Tools;


use Encore\Admin\Grid\Tools\BatchAction;

class CreateDeliveryBatchAction extends BatchAction {


    protected $from_file;

    public function __construct($from_file) {
        $this->from_file = $from_file;
    }

    public function script() {

        $url = route('post_api', ['api_name' => 'create_delivery_batch_action']);
        return <<<JS

$('{$this->getElementClass()}').on('click', function() {

    $.ajax({
        method: 'post',
        url: '{$url}',
        data: {
            _token:LA.token,
            ids: $.admin.grid.selected(),
            from_file: {$this->from_file}
        },
        success: function () {
//            $.pjax.reload('#pjax-container');
            toastr.success('納品書作成成功');
        }
    });
});

JS;

    }

}