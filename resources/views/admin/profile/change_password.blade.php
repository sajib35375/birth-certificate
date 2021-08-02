@extends('admin.admin_master')
@section('content')

    <div class="container-full">
        <section class="content">
            <div class="row">


                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">
                                <h2>Admin Change Password</h2>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('admin.update.password') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Current Password</label>
                                        <input name="current" class="form-control" type="password">
                                        @error('current')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">New Password</label>
                                        <input name="password" class="form-control" type="password">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Confirm Password</label>
                                        <input name="password_confirmation" class="form-control" type="password">
                                        @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input value="Change Password" class="btn btn-primary" type="submit">
                                    </div>
                                </form>
                            </div>

                    </div>
                </div>






            </div>
        </section>
    </div>
@endsection
