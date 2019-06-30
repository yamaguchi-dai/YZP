<?php


namespace App\Admin\Controllers;


use App\Http\Controllers\Controller;
use App\Model\MCustomer;
use App\Model\MItem;
use App\Model\TDelivery;
use App\Model\TEstimate;
use Illuminate\Http\Request;

class ApiController extends Controller {

    function index($api_name, Request $request) {
        return $this->$api_name($request);
    }

    function customer(Request $request) {
        $q = $request->get('q');
        return MCustomer::where('customer_name', 'like', "%" . $q . "%")->paginate(NULL, ['id', 'customer_name as text']);
    }

    function item(Request $request) {
        $q = $request->get('q');
        return MItem::where('item_name', 'like', "%" . $q . "%")->paginate(NULL, ['id', 'item_name as text']);
    }

    /**
     * 納品書作成
     * @param Request $request
     */
    function create_delivery_batch_action(Request $request) {
        $ids = $request->get('ids');
        $from_file_type = $request->get('from_file');

        foreach ($ids as $id) {
            switch ($from_file_type) {
                //見積書
                case config('kbn.file_type.estimate');
                    $estimate = TEstimate::find($id);
                    $delivery = new TDelivery();
                    $delivery->kbn_cd = $estimate->kbn_cd;
                    $delivery->m_customer_id = $estimate->m_customer_id;
                    $delivery->issue_date = $estimate->issue_date;
                    $delivery->save();
                    break;
            }
        }


    }

}