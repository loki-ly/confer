

<!DOCTYPE html>
<html>
  <head> 
    @include('products.css')
    <style>
        table,th,td
        {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
        th
        {
            background-color: skyblue;
        }   
    </style>
  </head>
  <body>
   @include('products.header') 

      @include('products.sidebar')
      <!-- Sidebar Navigation end-->
         <!-- @include('products.body') -->
            <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
           
          
 

    <h1> Paper details</h1>
    <table border="1px solit black ">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>File</th>
            <th>Price</th>
            <th>Download</th>
            <th>View</th>



        </tr>
        @foreach($data as $data)
        <tr>
            <td>{{$data-> title}}</td>
            <td>{{$data-> description}}</td>
            <td>{{$data-> file}}</td>
            <td>{{$data-> price}}</td>
            <td>
                <a href="{{url('my_download',$data-> file)}}">Download</a>
            </td>
            <td>
                <a href="{{url('view_file',$data-> file)}}">View</a>
            </td>

        </tr>
        
        @endforeach
    </table>
    
    </div>
        </div>
      </div>
    

</html>

       @include('products.footer')
  </body>
</html>