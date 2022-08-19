<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> UBX Assignment Upload and View Data to MySQL Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            UBX Assignment Upload and View Data to MySQL Database
        </h2>
        <br><br>
        <form action="{{ route('data-import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
            <div class="row">  
            <!-- <div class="input-group form-group col-md-8">
            <input class="form-control py-2 border-right-0 border" type="search" value="Select your excel file">
            <span class="input-group-append">
                <div class="input-group-text bg-primary"><i class="fe fe-search"></i><input type="file"></input></div>
            </span>
        </div> -->
            <div class="form-group col-md-8">
                    <input type="file" name="file" class="custom-file-input" id="customFile" >
                    <label class="custom-file-label" for="customFile">Select your excel file<i class="fa fa-search"></i></label>
                    @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                <button class="btn btn-success">UPLOAD</button>
                </div>
                </div> 
            </div>
            <a class="btn btn-success" href="{{ route('data-view') }}">View Data</a>
        </form>
    </div>
</body>
</html>
