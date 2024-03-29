@php
    $title = __('Edit') . ':' . $user->name;
@endphp

@extends('../layouts/mylayout')

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>

        <form action="{{ url('users/' . $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">{{__('Name')}}</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                <label for="email">{{__('Email')}}</label>
                <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}" required autofocus>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">{{__('Submit')}}</button>
        </form>
    </div>
@endsection
