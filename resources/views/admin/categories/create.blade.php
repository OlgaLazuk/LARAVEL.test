@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">
{{--        @foreach($errors->all() as $error)--}}
{{--            <div class="p-3 mb-2 bg-danger text-white">{{$error}}</div>--}}
{{--        @endforeach--}}
        <div class="container-fluid">
            <form action="{{ route('admin.categories.store') }}" method="post">
                @csrf
{{--                @dump($errors->has('name'))--}}
{{--                @dump($errors)--}}
                <input type="text" name="name">

{{--                <input type="text" name="name" class="{{ $errors->has('name')? 'error': '' }}">--}}

                {{--                @dump($errors->all())--}}
                <input type="text" name="title">
                <button type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection
