<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;
class AccountsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index');
    }
    public function index(){
        $accounts = Account::all();
        return view('accounts.index', ['accounts' => $accounts]);
    }
    public function create(){
        return view('accounts.create');
    }


    public function store(Request $request){
    
        $content = $request->validate([
            'acc' => 'required',
            'accName' => 'required',
            'accSex' => 'required',
            'accBirthday' => 'required',
            'accMail' => 'required',
            'accNote' => 'required'
        ]);
        
        auth()->user()->accounts()->create($content);
        return redirect()->route('root')->with('notice', '新增 帳號 成功');
    }

    public function edit($id){
        $account = auth()->user()->accounts->find($id);
        // $task = Task::find($id);
        return view('accounts.edit',['account' => $account]);
    }

    public function update(Request $request, $id){
        $account = auth()->user()->accounts()->find($id);
        $content = $request->validate([
            'acc' => 'required',
            'accName' => 'required',
            'accSex' => 'required',
            'accBirthday' => 'required',
            'accMail' => 'required',
            'accNote' => 'required'
        ]);

        $account->update($content);
        return redirect()->route('root')->with('notice', '修改 帳號 成功');
    }

    public function destroy($id){
        $account = auth()->user()->accounts->find($id);
        $account->delete();
        return redirect()->route('root')->with('notice','帳號已刪除！');
    }

}
