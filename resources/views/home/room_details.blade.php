<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
      @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         @include('home.header')
      </header>
      <div  class="our_">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Conferences</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>
            





            <div class="row">
               
               <div class="col-md-6">
                  <div id="serv_hover"  class="room">
                     <div style="padding: 20px;" class="room_img">
                        <figure><img style="height: 300px; width:800px" src="/room/{{$room->image}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h2>{{$room->room_title}}</h2>
                        <p style="padding: 12px;">{{$room->description}} </p>
                        
                         <h4 style="padding: 12px;"> AC : {{$room->AC}}</h4>
                         <h4 style="padding: 12px;"> roomtype : {{$room->room_type}}</h4>
                         <h3 style="padding: 12px;">Price: {{$room->price - 200}}</h3>
                         <h4 style="padding: 12px;">Seat: {{$room->seat}}</h4>
                     
                    
                    </div>
                  </div>
               </div>

               <div class="col-md-4">
                  <h1 style="font-size: 40px!important;"> Book Conference</h1>
                  <form action="{{url('add_booking',$room->id)}}" method = "POST">
                    @csrf
                
                
                  <div>
                    <label for="">Name</label>
                    <input style="color: black;" type="text" placeholder="Enter your name" name = "name">
                </div>

                <div>
                    <label for="">Email </label>
                    <input  type="email"  name = "email">
                </div>

                <div>
                    <label for="">Phone</label>
                    <input  type="number"  name = "phone">
                </div>
                <div></div>

                <!-- <div>
                    <label for="">Start Date</label>
                    <input  type="date"  name = "startDate" id = "startDate"> >
                </div>

                <div>
                    <label for="">End date</label>
                    <input  type="date"  name = "endDate" id = "endDate">
                </div> -->

                <div style="padding-top: 20px;">
                   
                    <input  type="submit" class="btn btn-primary" value="Book Room">
                </div>

                  </form>

               </div>
              
              







            </div>
         </div>
      </div>
      
      @include('home.footer')
   </body>
</html>