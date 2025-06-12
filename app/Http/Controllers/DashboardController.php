<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
       public function indexShow(){
        return view('index');
    }

       public function addressShow(){
        return view('address');
    }

       public function addAddressShow(){
        return view('add-address');
    }

       public function editAddressShow(){
        return view('edit-address');
    }

       public function orderShow(){
        return view('orders');
    }

       public function supportShow(){
        return view('support');
    }
}
