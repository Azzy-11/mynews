@extends('layouts.profilefront')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($newuser))
            <div class="row">
                <div class="newuser col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="name p-2">
                                    <h1>{{ Str::limit($newuser->name . $newuser->gender, 15) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="introduction mx-auto">{{ Str::limit($newuser->hobby, 10) }}</p>
                            <p class="introduction mx-auto">{{ Str::limit($newuser->introduction, 100) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="users col-md-8 mx-auto mt-3">
                @foreach($users as $user)
                    <div class="user">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $user->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ Str::limit($user->name . $newuser->gender, 15) }}
                                </div>
                                <div class="introduction mt-3">
                                    {{ Str::limit($user->hoby, 10) }}<br>{{ Str::limit($user->introduction, 1000) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection