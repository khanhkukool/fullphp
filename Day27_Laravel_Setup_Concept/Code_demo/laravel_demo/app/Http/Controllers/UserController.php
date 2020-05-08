<?php
namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController {
    public function show(Request $request) {
        //xử lý validate cho form sử dụng class Request
        $arr_validate = [
          'username' => 'required|max:8',
          'password' => 'required'
        ];
//        var_dump($request->validate($arr_validate));die;
//        $request->validate($arr_validate);
//        return "Hello show";
//        echo "<pre>";
//        print_r($request->all());
//        echo "</pre>";
        $users = $request->all();
        //lấy ra giá trị của username
//        $username = $users['username'];
        $username = $request->input('username');
        $password = $request->input('password');
//        echo $username;
//        echo $password;
        $arr = [
            'name' => 'Mạnh',
            'age' => 29
        ];
        //cách truyền biến ra view
        return view('list-product', [
            'arr' => $arr
        ]);
    }
}
?>