<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contactus;

class ContactusController extends Controller
{
    // 要在新建一個Controller 後端每個功能都要各自獨立一個Controller
    public function admin(){
        // datatable已經自動幫我們排好了
        // 排序的方法
        // $record = Contactus::sortBy('id','asc')->get();

        return view('admin.index');
    }

    public function contactus(){
        $record = Contactus::get(); //抓出資料
        return view('admin.contactus.index' , compact('record'));
    }


    // 修改資料
    public function edit($id){
        $edit_record = Contactus::find($id);
        return view('admin.contactus.edit', compact('edit_record') );
    }

    public function update(Request $request,$id){
        $old_record = Contactus::find($id);
        // dd($old_record);
        $old_record->name = $request->name;
        $old_record->email = $request->email;
        $old_record->phone = $request->phone;
        $old_record->content = $request->content;
        // 存檔
        $old_record->save();

        return redirect('/admin/contactus/')->with('message', '修改成功');
    }

    public function delete($id){
        $old_record = Contactus::find($id);
        //  delete() 是函式
        $old_record->delete();

        // 重新導向
        return redirect('/admin/contactus/')->with('message', '刪除成功');
    }

}
