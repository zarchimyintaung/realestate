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
            <h4 class="card-title">UPDATED ADMIN PROFILE</h4>
            <form class="forms-sample" method="POST" action="{{route('admin.profile.store')}}" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputUsername1" value="{{$profileData->username}}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$profileData->name}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email"  name="email"  class="form-control" id="exampleInputEmail1" value="{{$profileData->email}}">
              </div>
              <div class="form-group">
                <label for="exampleInputPhone1">Phone</label>
                <input type="phone" name="phone" class="form-control" id="exampleInputPhone1" value="{{$profileData->phone}}">
              </div>
              <div class="form-group">
                <label for="exampleInputAddress1">Address</label>
                <input type="address" name="address" class="form-control" id="exampleInputAddress1" value="{{$profileData->address}}">
              </div>
              <div class="form-group">
                <label for="exampleInputFile1 " class="form-label">Photo</label>
                <input class="form-control" type="file" name="photo" class="form-control" id="image">
              </div>
              <div class="form-group">
                <label for="exampleInputFile1 " class="form-label"></label>
                <img  class="rounded-circle " style="width: 80px;height:80px" id="showImage" src="{{(!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) :  url( '/upload/face26.jpg')}}" alt="profile">
              </div>

              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"> Remember me </label>
              </div>
              <button type="submit" class="btn btn-gradient-primary me-2">Save Changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

  <script>

    document.getElementById('image').addEventListener('change', function() {
    var file = this.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('showImage').src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
    });

  </script>


@endsection
