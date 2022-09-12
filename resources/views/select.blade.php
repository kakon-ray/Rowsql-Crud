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
 <div class="container">
       <table class="w-100">
@foreach($selectKey as $item)


    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->class}}</td>
        <td>{{$item->roll}}</td>
        <td>
       
    
        </td>
    </tr>


@endforeach

</table>
 </div>
<script src="{{asset('js/axios.min.js')}}"></script>
<script src="{{asset('js/custome.js')}}"></script>
</body>
</html>