@extends('frontend.frontend_master')

@section('content')

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img style="width: 100%;height: 100%;" src="{{ !empty($user_data->profile_photo_path) ? url('image/user/'.$user_data->profile_photo_path) : url('image/user/avatar.jpg') }}" alt="">
                    <a class="btn btn-primary btn-block" href="{{ route('dashboard') }}">Home</a>
                    <a class="btn btn-primary btn-block" href="{{ route('change.pass',Auth::user()->id) }}">Change Password</a>
                    <a class="btn btn-primary btn-block" href="">Change Profile Photo</a>
                    <a target="_blank" class="btn btn-warning btn-block" href="{{ route('pdf.download',Auth::user()->id) }}">Download</a>
                    <a class="btn btn-danger btn-block" href="{{ route('user.logout') }}">Logout</a>
                    <br><br>
                </div>

                <div style="margin-top: 90px;" class="col-md-9">
                <div class="card-body">
                    <form action="{{ route('update.pass') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Current Password</label>
                            <input name="current_pass" class="form-control" type="password">
                            @error('current_pass')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">New Password</label>
                            <input name="new_pass" class="form-control" type="password">
                            @error('new_pass')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">confirm Password</label>
                            <input name="password_confirmation" class="form-control" type="password">
                            @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input value="Change" class="btn btn-info" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>



        </div>

    </div>

@endsection
