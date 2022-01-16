<!DOCTYPE html>
<html>
<head>
    <title>Nearby Affiliates finder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
  
<body>
<div class="container">
   
    <div class="panel panel-primary">
      <div class="panel-heading"><h2>Nearby Affiliates finder</h2></div>
      <div class="panel-body">
   
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
  
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  
        <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
  
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
   
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
   
            </div>
        </form>
        <br>
        @if ($affiliates = Session::get('affiliates'))
        <div class="alert alert-info alert-block">
            <h6>Affiliates within 100km</h6>
            <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach (json_decode($affiliates) as $affiliate)
                        <li>{{ $affiliate->name }} - id:{{$affiliate->affiliate_id}}</li>
                    @endforeach
                </ul>
        </div>
        @endif
  
      </div>
    </div>
</div>
</body>
  
</html>