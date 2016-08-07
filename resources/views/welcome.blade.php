@extends('layouts.app')

@section('title')

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">라라벨 Todo 사이트</div>

                <div class="panel-body">
                    <p>총 가입자 수 : {{ $total ['user']}}</p>
                    <p>프로젝트 수 : {{ $total ['project']}}</p>
                    <p>Task 수 : {{ $total ['task']}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
