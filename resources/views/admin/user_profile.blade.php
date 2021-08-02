@extends('admin.admin_master')
@section('content')



    <div class="container-full">

        <!-- Main content -->
        <section class="content">
            <div class="row">

              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h2>User Information</h2>
                      </div>
                      <div class="card-body">
                          <div class="col-12">
                              <div class="box">
                                  <div class="box-header with-border">
                                      <h4 class="box-title">Birth Certificate Process here</h4>
                                      <div class="box-controls pull-right">
                                          <div class="lookup lookup-circle lookup-right">
                                              <input type="text" name="s">
                                          </div>
                                      </div>
                                  </div>
                                  <!-- /.box-header -->
                                  <div class="box-body no-padding">
                                      <div class="table-responsive">
                                          <table class="table table-hover">
                                              <tbody>
                                              <tr>
                                                  <th>#</th>
                                                  <th>Name</th>
                                                  <th>Fathers Name</th>
                                                  <th>Mothers Name</th>
                                                  <th>Date of Birth</th>
                                                  <th>Address</th>
                                                  <th>Birth Place</th>
                                                  <th>Status</th>
                                                  <th width="20%">Action</th>
                                              </tr>

                                              @foreach( $all_data as $data )

                                              <tr>
                                                  <td>{{ $loop->index+1 }}</td>
                                                  <td>{{ $data->name }}</td>
                                                  <td>{{ $data->father_name }}</td>
                                                  <td>{{ $data->mother_name }}</td>
                                                  <td>{{ $data->date }}/{{ $data->month }}/{{ $data->year }}</td>
                                                  <td>{{ $data->address }}</td>
                                                  <td>{{ $data->birth_place }}</td>
                                                  <td>
                                                  @if( $data->status==true )
                                                          <span class="badge badge-success" >approve</span>
                                                      @else
                                                          <span class="badge badge-danger" >pending</span>
                                                      @endif
                                                  </td>
                                                  <td>
                                                      <a class="btn btn-success btn-sm" href="{{ route('show.form',$data->id) }}">Action</a>

                                                        @foreach( $all_app as $app )
                                                            @if( $data->id==$app->form_id )
                                                          <a class="btn btn-sm btn-success" href="{{ route('app.edit',$app->id) }}">edit</a>
                                                          @endif
                                                      @endforeach
                                                      @if( $data->status==true )
                                                      <a class="btn btn-sm btn-primary" href="{{ route('birth',$data->id) }}">view</a>
                                                      @else
                                                          @endif
                                                      @if( $data->status==true )
                                                      <a class="btn btn-sm btn-danger" href="{{ route('status.active',$data->id) }}"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                                                      @else
                                                      <a class="btn btn-sm btn-success" href="{{ route('status.inactive',$data->id) }}"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                                          @endif
                                                  </td>
                                              </tr>
                                              @endforeach
                                          </table>
                                      </div>
                                  </div>
                                  <!-- /.box-body -->
                              </div>
                              <!-- /.box -->
                          </div>
                      </div>
                  </div>
              </div>








            </div>
        </section>
    </div>

@endsection
