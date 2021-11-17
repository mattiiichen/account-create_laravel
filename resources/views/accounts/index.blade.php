@extends('layouts.account')

@section('main')
    <h1>帳號列表</h1>
    <a href="{{ route('accounts.create')}}">新增帳號</a>
    @foreach($accounts as $account)
        <div>
            <h2>{{ $account->title}}</h2>
            <p>
                {{ $account->created_at }} 由 {{ $account->name }} 發怖
            </p>
            <a href="{{ route('accounts.edit', $account) }}">修改</a>

            <form action="{{ route('accounts.destroy',$account) }}" method="post">
                @csRf
                @method('delete')
                <button type="submit">刪除</button>
            </form>

        </div>
        <hr>
    @endforeach
@endsection