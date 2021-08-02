@extends('admin.admin_master')
@section('content')

    <div class="container-full">
        <section class="content">
            <div class="row">

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Update Admin Profile</h2>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" name="name" value="{{ $data->name }}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" name="email" value="{{ $data->email }}" type="text">
                    </div>
                    <div class="form-group">
                        <img style="width: 100px;height: 100px;margin-right: 30px;" src="{{!empty($data->profile_photo_path )? url('profile/images/'.$data->profile_photo_path) : url('profile/avatar.jpg')}}" alt="">
                        <label for="">photo</label>
                        <input name="old_photo" value="{{ $data->profile_photo_path }}" type="hidden">
                        <input name="photo" class="form-control-file"   type="file">
                    </div>
                    <div class="form-group">
                        <input value="Update" class="btn btn-success"  type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>




            </div>
        </section>
    </div>

@endsection
