{{-- layouts/profile.blade.phpを読み込む--}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'Myプロフィール')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                <form action="{{ route('admin.profile.create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">氏名(name)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別(gender)</label>
                        <div class="col-md-10">
                          　<label>男性</label><input class="form-control-radio" type="radio" name="gender" value="男性">
                          　<label>女性</label><input class="form-control-radio" type="radio" name="gender" value="女性">
                          　<label>その他</label><input class="form-control-radio" type="radio" name="gender" value="その他">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味(hobby)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介欄(introduction)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection  