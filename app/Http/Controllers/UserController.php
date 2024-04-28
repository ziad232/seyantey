<?php

namespace App\Http\Controllers;
use App\Models\Address;
use App\Models\User;
use App\Models\Advertisment;
use App\Models\Category;
use App\Models\Problem;
use App\Models\Worker;
use App\Models\Device;
use App\Models\Contact;
use App\Models\Notification;
use App\Models\Rating;
use App\Models\Request as R;
use App\Models\Review;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data1=User::all();
        $data2=R::all();
        $data3=contact::all();
        $data4=Problem::all();
        $data5=Advertisment::all();
        $data6=Address::all();
        $data7=Worker::all();
        $data8=Device::all();
        $data9=Category::all();
        $data10=Notification::all();
        $data11=Review::all();
        $data12=Rating::all();
        return view("index",compact('data1','data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data8','data9','data10','data11', 'data12'));
    }
    public function index2()
    {
        $data1 = User::find(1);
        $data2 = R::find(1);
        $data3 = contact::all();
        $data4 = Problem::all();
        $data5 = Advertisment::all();
        $data6 = Address::all();
        $data7 = Worker::find(1);
        $data8 = Device::all();
        $data9 = Category::find(1);
        $data10 = Notification::all();
        $data11 = Review::all();
        $data12 = Rating::all();
        return view("index2", compact('data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data8', 'data9', 'data10', 'data11', 'data12'));
    }
}
