@extends('layouts.account')

@section('main')
 
    <h1>修改帳號</h1>
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('accounts.update', $account) }}" method="post">
        {{ csrf_field() }}
        @method('patch')
        <div class="field">
            <div class="label">
                請輸入帳號：
            </div>
            <input type="text" name="acc" value="{{ $account->acc }}">
        </div>
        <div class="field">
            <div class="label">
                請輸入姓名：
            </div>
            <input type="text" name="accName" value="{{ $account->accName }}"></input>
        </div>
        <div class="field">
            <div class="label">
                請輸入性別：
            </div>
            <input type="text" name="accSex" value="{{ $account->accSex }}"></input>
        </div>
        <div class="field">
            <div class="label">
                請輸入生日：
            </div>
            <input type="text" name="accBirthday" value="{{ $account->accBirthday }}"></input>
        </div>
        <div class="field">
            <div class="label">
                請輸入信箱：
            </div>
            <input type="text" name="accMail" value="{{ $account->accMail }}"></input>
        </div>
        <div class="field">
            <div class="label">
                備註：
            </div>
            <textarea type="text" name="accNote" cols="60" rows="20" >{{ $account->accNote }}</textarea>
        </div>
        <button type="submit">更新帳號</button>
        
    </form>
@endsection


