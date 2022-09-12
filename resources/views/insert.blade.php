<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>
    
 <div class="container p-5">
  

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Roll</label>
                    <input type="text" name="roll" id="roll"  class="form-control" id="exampleInputPassword1">
                </div>

                 <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Class</label>
                    <input type="text" name="class" id="myclass"  class="form-control" id="exampleInputPassword1">
                </div>
       
                <button type="submit" class="btn btn-primary" onclick="sendData()">Submit</button>
    
    </div>


<script src="{{asset('js/axios.min.js')}}"></script>
<script src="{{asset('js/custome.js')}}"></script>
</body>
</html>