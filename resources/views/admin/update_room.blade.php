<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')
    <style type = 'text/css'>
        label

        {
            display: inline-block ;
            width: 200px;
        }
    </style>
  </head>
  <body>
   @include('admin.header') 

      @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div>
                <h1 style="font-size: 30px" ; font-weight : bold> Update Conference Details</h1>
                <form action="{{url('edit_room',$data->id)}}" method="Post" enctype="multipart/form-data">
                    @csrf 
                    <div class >
                        <label for=""> Room Title</label>
                        <input type="text" name = "title" value="{{$data->room_title}}" required>
                    </div>
                    <div>
                        <label for=""> Description</label>
                        <textarea name = 'description'>{{$data->description}}</textarea>
                    </div>

                    <div>
                        <label for=""> Price</label>
                        <input type="number" name = price value="{{$data->price}}" >
                    </div>

                    <div>
                        <label for=""> Seat </label value="{{$data->seat}}">
                        <input type="number" name = seat>
                    </div>

                    <div>
                        <label for=""> Room Type</label>
                        <select name="type" id="">

                            <option selected value="$data->room_type" > {{$data->room_type}}</option>

                            <option value="small" > Small</option>
                            <option value="medium" > Medium</option>
                            <option value="large" > Large</option>
                        </select>
                    </div>

                    <div>
                        <label for=""> AC </label>
                       <select name="ac" id="">

                            <option selected value="$data->ac" > {{$data->AC}}</option>

                            
                            <option value="yes" > Yes</option>
                            <option value="no" > No</option>
                        </select>
                    </div>

                     <div>
                        <label for=""> current Image</label>
                       <img style="margin:left" width="200" src="/room/{{$data->image}}" alt="">
                    </div>

                    <div>
                        <label for=""> Upload Image</label>
                        <input type="file" name = "image">
                    </div>

                    <div>
                        <input class ="btn btn-primary" type="submit" value = "Update Room">
                    </div>
                    <div>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif


                </form>





            </div>



        </div>
    </div>
</div>
       @include('admin.footer')
  </body>
</html>