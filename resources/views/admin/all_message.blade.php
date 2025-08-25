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
                <th class = "th_deg">Name</th>
                <th class = "th_deg"> Email</th>
                <th class = "th_deg">Phone</th>
                <th class = "th_deg">Message</th>
                <!-- <th class = "th_deg">Room type</th>
                <th class = "th_deg">Seat</th>
                <th class = "th_deg">Image</th>
                <th class = "th_deg">Delete</th>
                <th class = "th_deg">Update</th> -->
                
                
            </tr>
            @foreach($data as $data)

            <tr>
                <td>{{$data-> name}}</td>
            <td>{{$data-> email}}</td>
            <td>{{$data-> phone}}</td>
            <td>{{$data-> message}}</td>
            <!-- <td>{{$data-> room_type}}</td>
            <td>{{$data-> seat}}</td> -->
            
               
            </tr>
            @endforeach
          </table>



          </div>
        </div>
       </div>

       @include('admin.footer')
  </body>
</html>