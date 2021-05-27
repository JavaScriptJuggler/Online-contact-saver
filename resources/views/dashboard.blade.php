<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="/css/app.css">
    <title>Dashboard</title>
</head>
<body>



{{-- Insert form --}}
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Contacts</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="/save">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contact Name</label>
                <input type="text" name="conname" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contact Number(by Country Code)</label>
                <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" value="Save Contact" class="btn btn-primary">
        </div>
    </form>
      </div>
    </div>
  </div>

{{-- Insert Form end --}}
{{-- Update form --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/update">
                @csrf
            <div class="modal-body">
                <input type="hidden" name="hiddenid" id="hiddenid">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contact Name</label>
                    <input type="text" name="upconname" class="form-control" id="upconname">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contact Number(by Country Code)</label>
                    <input type="text" name="upphone" class="form-control" id="upphone">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" value="Save Changes" class="btn btn-primary">
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
{{-- Update form end --}}

<div class="card">
    <div class="card-header row">
        <div class="col-md-6 h4">Welcome, {{session('username')}}</div>
        <div class="col-md-6"><button type="button" class="btn btn-success addcontactbtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Contacts +</button></div>
    </div>
    <div class="card-body">
        <table class="table text-center">
        <th>Name</th><th>Mobile Number</th><th>Actions</th>
        @foreach ($contactdata as $contacts )
<tr>
    <td>{{$contacts->conatctname}}</td>
    <td>{{$contacts->phone}}</td>
    <td class="btntd">
        <button type="button" id="{{$contacts->id}}" class="btn btn-primary dashboardbtn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="update(this.id)">Update</button>
        <button class="btn btn-danger dashboardbtn" id="{{$contacts->id}}"   onclick="dlt(this.id)">Delete</button>
     </td>
</tr>
        @endforeach
        </table>
    </div>
</div>
<script src="/js/app.js"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
