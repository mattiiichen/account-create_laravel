@extends('layouts.account')

@section('main')
 
    <h1>新增 帳號</h1>
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('accounts.store') }}" method="post">
        {{ csrf_field() }}
        <div class="field">
            <div class="label">
                請輸入帳號：
            </div>
            <input type="text" name="acc" value="{{ old('acc') }}">
        </div>
        <div class="field">
            <div class="label">
                請輸入姓名：
            </div>
            <input type="text" name="accName" value="{{ old('accName') }}"></input>
        </div>
        <div class="field">
            <div class="label">
                請輸入性別：
            </div>
            <input type="text" name="accSex" value="{{ old('accSex') }}"></input>
        </div>
        <div class="field">
            <div class="label">
                請輸入生日：
            </div>
            <input type="text" name="accBirthday" value="{{ old('accBirthday') }}"></input>
        </div>
        <div class="field">
            <div class="label">
                請輸入信箱：
            </div>
            <input type="text" name="accMail" value="{{ old('accMail') }}"></input>
        </div>
        <div class="field">
            <div class="label">
                備註：
            </div>
            <textarea type="text" name="accNote" cols="60" rows="20" value="{{ old('accNote') }}"></textarea>
        </div>
        <button type="submit">新增帳號</button>
        
    </form>
@endsection


