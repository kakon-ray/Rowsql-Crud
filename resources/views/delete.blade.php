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
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input type="text" name="id" id="id" class="form-control"  aria-describedby="emailHelp">
                </div>
       
                <button type="submit" class="btn btn-primary" onclick="onDelete()">Submit</button>
    
    </div>


<script src="{{asset('js/axios.min.js')}}"></script>
<script src="{{asset('js/custome.js')}}"></script>
</body>
</html>