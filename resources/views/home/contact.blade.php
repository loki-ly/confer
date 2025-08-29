<div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" action="{{url('contact')}}" method="Post">
                  @csrf

                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="email" name="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="number" name="phone">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" name = "message">Message</textarea>
                        </div>
                        <div>
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif


                        </div>
                        <div class="col-md-12">
                           <button type="submit" class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1562.0116499385192!2d90.42543346160288!3d23.772798893454826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1756498179934!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>