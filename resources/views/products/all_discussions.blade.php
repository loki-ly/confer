

<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
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
            <th>Name</th>
            <th>Email</th>
            <th>comment</th>
            <!-- <th>data paper id</th>
            <th>required paper id</th> -->
            



        </tr>
        @foreach($data2 as $data2)
            @if($data2->paper_id == $paperid)
        
            
                
                <tr>
                    <td>{{$data2-> name}}</td>
                    <td>{{$data2-> email}}</td>
                    <td>{{$data2-> comment}}</td>
                    <!-- <td>{{$data2-> paper_id}}</td>
                    <td>{{$paperid}}</td>
                    <td>{{$data2->userid}}</td> -->
                    
                    
                
                    

                </tr>
            @endif
       
        
        @endforeach
        <div>
        @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
        </div>
        
    </table>
    
    </div>
        </div>
      </div>
    

</html>

       @include('products.footer')
  </body>
</html>