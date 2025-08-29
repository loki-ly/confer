

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
           
          
 

    <h1>My file</h1>

<iframe style="height: 800px ; width :80%" src="/my_files/{{$my_file}}" frameborder="0"></iframe>

    <!-- <div class="col-md-6">
                  <form id="request" class="main_form" action="{{url('discuss_paper')}}" method="Post">
                  @csrf
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="email" name="email"> 
                        </div>
                        
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" name = "message"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button type="submit" class="btn btn-danger">Send</button>
                        </div>
                     </div>
                  </form>
               </div> -->
    </div>
        </div>
      </div>
    

</html>

       @include('products.footer')
  </body>
</html>