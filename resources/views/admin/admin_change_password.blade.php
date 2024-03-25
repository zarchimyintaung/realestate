@extends('admin.admin_dashboard')
@section('admin')

<div class="content-wrapper">
    <div class="row">
      <div class="col-md-4 grid-margin stretch-card d-none d-md-block col-xl-4 left-wrapper">
        <div class="card rounded">
          <div class="card-body p-12">
            <div class="flex flex-row align-items-center justify-content-between mb-2 gap-5">
                <div>
                    <img src="{{(!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) :  url( '/upload/face26.jpg')}}" class="wd-100 rounded-circle" style="width: 100px;height:100px" alt="profile">
                    <span class="h4 ms-3 ">{{$profileData->name}}</span>
                </div>
                <div class="mt-3">
                    <label for="" class="tx-11 fw-bolder mb-0 ">Name:</label>
                    <p class="text-muted ">{{$profileData->name}}</p>
                </div>
                <div class="mt-3">
                    <label for="" class="tx-11 fw-bolder mb-0 ">Email:</label>
                    <p class="text-muted ">{{$profileData->email}}</p>
                </div>
                <div class="mt-3">
                    <label for="" class="tx-11 fw-bolder mb-0 ">Phone:</label>
                    <p class="text-muted ">{{$profileData->phone}}</p>
                </div>
                <div class="mt-3">
                    <label for="" class="tx-11 fw-bolder mb-0 ">Address:</label>
                    <p class="text-muted ">{{$profileData->address}}</p>
                </div>
            </div>
            <div class="template-demo">
                <button type="button" class="btn btn-social-icon btn-facebook"><i class="mdi mdi-facebook"></i></button>
                <button type="button" class="btn btn-social-icon btn-twitter"><i class="mdi mdi-twitter"></i></button>
                <button type="button" class="btn btn-social-icon btn-linkedin"><i class="mdi mdi-linkedin"></i></button>
            </div>
          </div>

        </div>
      </div>
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">ADMIN CHANGE PASSWORD</h4>
            <form class="forms-sample" method="POST" action="{{route('admin.profile.store')}}" enctype="multipart/form-data">
                @csrf

              <div class="form-group">
                <label for="exampleInputName1">Old Password</label>
                <input type="text" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="old_password">
                @error('old_password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="exampleInputName1">New Password</label>
                <input type="text" name="new_password" class="form-control  @error('new_password') is-invalid @enderror" id="new_password">
                @error('new_password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Confirm New Password</label>
                <input type="text" name="confirm_new_password" class="form-control  @error('new_confirm_password') is-invalid @enderror" id="confirm_new_password">
                @error('confirm_new_password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <button type="submit" class="btn btn-gradient-primary me-2">Save Changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection

