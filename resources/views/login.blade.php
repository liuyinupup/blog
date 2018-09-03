@extends('layouts.default')
@section('content')

    <form action="{{route('login')}}" method="post">
        @csrf

        <div class="card" style="width: 18rem; margin: 0 auto;">
            <div class="card-header">
                用户登录
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="">邮箱</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="">密码</label>
                    <input type="password" class="form-control" name="password">
                </div>



            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-success">登录</button>
            </div>
        </div>
    </form>
@endsection