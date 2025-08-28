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
         @include('researcher.header')
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      @include('researcher.slider')
      <!-- end banner -->
      <!-- about -->
      @include('researcher.about')
      <!-- end about -->
      <!-- our_room -->
       <!-- @include('home.room') -->
      <!-- end our_room -->
      <!-- gallery -->
      <!-- @include('home.gallery') -->
      <!-- end gallery -->
      <!-- blog -->
     
      <!-- end blog -->
      <!--  contact -->
      @include('researcher.contact')
      <!-- end contact -->
      <!--  footer -->
      @include('researcher.footer')
   </body>
</html>