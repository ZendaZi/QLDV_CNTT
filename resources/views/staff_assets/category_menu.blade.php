
<li><a href=""> Tất cả </a></li>
 @foreach ($Category as $key =>$data)
     <li><a href="dashboard/{{$data->IDCategory}}"> {{$data->CategoryName}} </a></li>
@endforeach
              






