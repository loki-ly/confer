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
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <table class ="table_deg">
            <tr>
                <th class = "th_deg">Room_id</th>
                <!-- <th class = "th_deg">Customer name</th>
                <th class = "th_deg">Price</th>
                <th class = "th_deg">AC</th>
                <th class = "th_deg">Room type</th> -->
                <th class = "th_deg">Seat</th>
                <!-- <th class = "th_deg">Image</th>
                <th class = "th_deg">Delete</th>
                <th class = "th_deg">Update</th> -->
                
                
            </tr>
           

            <tr>
                <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
                

            </tr>
            
          </table>


       </div>
        </div>
      </div>

       @include('admin.footer')
  </body>
</html>