@extends('layouts.shop')
@section('content')


    <!-- SECTION -->
    <div class="section">

        <div class="container">

            <div class="row">
@dump($errors->all())
                <div class="col-md-12">
                    <form action="{{ route('registration')}}" method="post">


                        @csrf
                        <div class="form-group">
                            <label>name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input name="email" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input name="password" type="password" class="form-control">
                        </div>

                        <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-info">Register</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>

    </div>




@endsection
