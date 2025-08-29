<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type = 'text/css'>
        .table_deg
        {
            border: 2px solid white;
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 40px;
        }
        .th_deg
        {
            background-color: skyblue;
        }
        tr
        {
            border: 3px solid wheat;
        }
    </style>
  </head>
  <body>
   @include('admin.header') 

      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
       <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">




          <table class ="table_deg">
            <tr>
                <th class = "th_deg">Room title</th>
                <th class = "th_deg"> Description</th>
                <th class = "th_deg">Price</th>
                <th class = "th_deg">AC</th>
                <th class = "th_deg">Room type</th>
                <th class = "th_deg">Seat</th>
                <th class = "th_deg">Image</th>
                <th class = "th_deg">Delete</th>
                <th class = "th_deg">Update</th>
                
                
            </tr>
            @foreach($data as $data)

            <tr>
                <td>{{$data-> room_title}}</td>
            <td>{{$data-> description}}</td>
            <td>{{$data-> price}}</td>
            <td>{{$data-> AC}}</td>
            <td>{{$data-> room_type}}</td>
            <td>{{$data-> seat}}</td>
            <td>
                <img width="100" src="room/{{$data-> image}}" alt="">
            </td>
                <td>
                    <a class="btn btn-danger" href="{{url('room_delete',$data->id)}}"> Delete</a>
                </td>

                 <td>
                    <a class="btn btn-warning" href="{{url('room_update',$data->id)}}"> Update</a>
                </td>

            </tr>
            @endforeach
          </table>
          <div>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
          </div>
    
         </div>
    </div>
</div>
       @include('admin.footer')
  </body>
</html>