@extends('layouts.app')

@section('sidebar')

    <div>
        @if ($users->count())

            @foreach($users as $user)
                @if($user->id !== $current_user)
                    <div>
                        <a class="nav-link mb-2 border border-primary"
                           id="convo-user-tab" href="/{{ $user->id }}">{{ $user->name }}</a>
                    </div>
                @endif
            @endforeach
        @endif

    </div>

@endsection

@section('content')
    <div>
        HELLO WELCOME HOME
    </div>
@endsection
