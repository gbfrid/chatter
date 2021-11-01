@extends('layouts.app')

@section('sidebar')

    <div>
        <div>
            <a class="nav-link mb-2 border border-primary" id="convo-user-tab" href="/">
                All</a>
        </div>
        @if ($users->count())

            @foreach($users as $user)
                <div>
                    <a class="nav-link mb-2 border border-primary {{ (string)$user->id === $id ? 'active' : '' }}"
                       id="convo-user-tab" href="/{{ $user->id }}">{{ $user->name }}</a>
                </div>
            @endforeach
        @endif

    </div>

@endsection

@section('content')
    <div class="flex-column">
        <div class="navbar-nav-scroll">
            @if ($messages->count())
                @foreach($messages as $message)
                    @if((string)$message->user_id === $id || $user->id === $message->target_id)
                        <div class="mb-2 p-2 bg-info rounded">
                            <div>
                                <div>
                                    {{ $message->target_id }}
                                </div>
                                {{ $message->text }}
                            </div>
                            <div class="small text-right">
                                {{ $message->user->name }}
                            </div>
                        </div>
                    @endif

                @endforeach
            @else
                <p>No message!</p>
            @endif
        </div>

        <div>
        </div>

        <form action="" method="post">
            @csrf
            <div class="form-group">
                <input name="text" id="text" cols="30" rows="4" placeholder="Send a message!"/>
                <button type="submit" class="btn bg-primary text-white">Send!</button>


            </div>

        </form>
    </div>
@endsection
