<!DOCTYPE html>
<html>
  <head> 
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
                <h1 style="font-size: 30px" ; font-weight : bold> Add Rooms</h1>
                <form action="{{url('add_room')}}" method="Post" enctype="multipart/form-data">
                    @csrf 
                    <div class >
                        <label for=""> Room Title</label>
                        <input type="text" name = "title">
                    </div>
                    <div>
                        <label for=""> Description</label>
                        <textarea name = 'description'></textarea>
                    </div>

                    <div>
                        <label for=""> Price</label>
                        <input type="number" name = price>
                    </div>

                    <div>
                        <label for=""> Seat </label>
                        <input type="number" name = seat>
                    </div>

                    <div>
                        <label for=""> Room Type</label>
                        <select name="type" id="">
                            <option selected value="small" > Small</option>
                            <option value="medium" > Medium</option>
                            <option value="large" > Large</option>
                        </select>
                    </div>

                    <div>
                        <label for=""> AC </label>
                        <select name="ac" id="">
                            <option selected value="yes" > yes</option>
                            <option value="no" > no</option>
                            
                        </select>
                    </div>
                    <div>
                        <label for=""> Upload Image</label>
                        <input type="file" name = "image">
                    </div>

                    <div>
                        <input class ="btn btn-primary" type="submit" value = "Add Room">
                    </div>


                </form>





            </div>



        </div>
    </div>
</div>
       @include('admin.footer')
  </body>
</html>