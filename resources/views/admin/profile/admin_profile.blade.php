@extends('admin.admin_master')
@section('content')

    <div class="container-full">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-black" >
                        <h3 class="widget-user-username">Admin Name : {{ $data->name }}</h3>

                        <a class="btn btn-rounded btn-success" style="float:right;" href="{{ route('admin.profile.edit') }}">Edit Profile</a>

                        <h6 class="widget-user-desc">Email : {{ $data->email }}</h6>
                    </div>
                    <div class="widget-user-image">
                        <img class="rounded-circle" src="{{!empty($data->profile_photo_path )? url('profile/images/'.$data->profile_photo_path) : url('profile/avatar.jpg')}}" alt="User Avatar">
                    </div>
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">12K</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 br-1 bl-1">
                                <div class="description-block">
                                    <h5 class="description-header">550</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">158</h5>
                                    <span class="description-text">TWEETS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>


@endsection
