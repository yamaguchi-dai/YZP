<?php


namespace App\Admin\Controllers;


use App\Http\Controllers\Controller;
use App\Model\MCustomer;
use App\Model\MItem;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

}