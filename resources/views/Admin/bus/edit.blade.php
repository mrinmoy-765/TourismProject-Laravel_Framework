<!doctype html>
<html lang="en">
  <head>


<style>

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

</style>


    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



     


<div class="row">
  <div class="col-2 col-s-3 menu">
  
</div>



<div class="col-6 col-s-9">


  <h1>Edit Bus Information</h1>
  <br>
 <form   method="post"   action="{{ url('update-bus/'.$bus->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif


    <input type="hidden" name="id" value="{{$bus->id}}">

<div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Operator</span>
  </div>
  <input type="text" class="form-control" name="operator" value="{{($bus->operator)}}" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
  <p class="error-text text-danger">@error('operator'){{$message}}@enderror</p>
</div>


<div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Coach No</span>
  </div>
  <input type="text" class="form-control"name="coach_no"  value="{{($bus->coach_no)}}" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
  <p class="error-text text-danger">@error('coach_no'){{$message}}@enderror</p>
</div>


<div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Type</span>
  </div>
  <input type="text" class="form-control"name="type"  value="{{($bus->type)}}" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
  <p class="error-text text-danger">@error('type'){{$message}}@enderror</p>
</div>


<div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Brand</span>
  </div>
  <input type="text" class="form-control"name="brand"  value="{{($bus->brand)}}" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
  <p class="error-text text-danger">@error('brand'){{$message}}@enderror</p>
</div>


<div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Chesis</span>
  </div>
  <input type="text" class="form-control"name="chesis"  value="{{($bus->chesis)}}" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
  <p class="error-text text-danger">@error('chesis'){{$message}}@enderror</p>
</div>


 <div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Seat No</span>
  </div>
  <input type="text" class="form-control"name="seat" value="{{($bus->seat)}}" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
  <p class="error-text text-danger">@error('seat'){{$message}}@enderror</p>
 </div>

 <div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Bodyrent</span>
  </div>
  <input type="text" class="form-control"name="bodyrent"  value="{{($bus->bodyrent)}}" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
  <p class="error-text text-danger">@error('bodyrent'){{$message}}@enderror</p>
</div> 

  <h5>Image</h5>
  <div class="input-group flex-nowrap">
  




 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Edit Image</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input"  name="image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
 </div>
   <div class="text-danger">
        @error('image')
          {{ $message }}
        @enderror
   </div>

   <div class="button">
        <input type="submit" class="btn btn-success btn-sm mx-1" name="update" value="Update">
     </div>
     
   

</form>

<br>
<div class="box">
   <span>
   <a href="{{ url('bus-list') }}" class="btn btn-info btn-sm mx-1">Go Back</a>
   </span>
   
</div>
</div>

  </div>


  <div class="row">
    <div class="col-9 col-s-12">
        <!-- Content for the first 9 columns -->
     </div> 
    <div class="col-4 col-s-12">
        <br>
        <img src="{{ asset($bus->image) }}" style="width: 400px; height: 250px;">
    </div>
</div> 


  </body>
</html>

