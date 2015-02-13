{{--BEGIN LINKS--}}
  
  <aside class="right-off-canvas-menu">
        <ul class="off-canvas-list">

          <li><img src="http://www.eternallynocturnal.com/images/witeskull.png"></li>

                  <li class="has-submenu"><a href="#">Contacts</a>
                      <ul class="right-submenu">
                          <li><img src="http://www.eternallynocturnal.com/images/witeskull.png"></li>
                            <li class="back"><a href="#">Back</a></li>
                            <li>{{link_to_route('contacts.index', 'Contacts')}}</li>     

                            {{View::make('contacts.contact_search')}}  
                      </ul>

                  </li>

                  <li class="has-submenu"><a href="#">Shop</a>
                      <ul class="right-submenu">
                          <li><img src="http://www.eternallynocturnal.com/images/witeskull.png"></li>
                            <li class="back"><a href="#">Back</a></li>
                              <li>{{link_to_route('product_list', 'View/Edit Shop')}}</li>
                              <li>{{link_to_route('products.create', 'Add New Product')}}</li>
            
                      </ul>
                  </li>


                  <li class="has-submenu"><a href="#">Shows</a>
                      <ul class="right-submenu">
                        
                          <li><img src="http://www.eternallynocturnal.com/images/witeskull.png"></li>
                            <li class="back"><a href="#">Back</a></li>
                          
                                <li><a href="#" data-reveal-id="showShows" style="color:#ffffff">Shows</a></li>


                                <li><a href="#" data-reveal-id="newEvent" style="color:#ffffff">New Show</a></li>
                                <li><a href="#" data-reveal-id="newVenue" style="color:#ffffff">New Venue</a></li>





                                <li><a href="#">Venues</a></li>
                                <li><a href="#">Media</a></li> 
                      </ul>





              <li class="has-submenu"><a href="#">Artists</a>
                      <ul class="right-submenu">
                        
                          <li><img src="http://www.eternallynocturnal.com/images/witeskull.png"></li>
                            <li class="back"><a href="#">Back</a></li>
                              <dl class="tabs" data-tab >

                        </dl>
                      </ul>


 


      </dl>
    </ul>
  </aside>


{{--END LINKS--}}




{{--BEGIN MODAL CODE--}}



    {{--NEW EVENT--}}
        <div id="newEvent" class="reveal-modal" style="y-overflow:scroll;max-width:700px;height:auto;max-height:80%;background-color:#000000;" data-reveal> 

          {{--CONTENT HERE--}}

            {{View::make('events.create')}}


          {{--END CONTENT--}}


          <a class="close-reveal-modal">&#215;</a>

        </div>
    {{--NEW EVENT END--}}


    {{-- NEW CONTACT--}}


      <div id="newContact" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 
          {{--CONTENT HERE--}}

                                  {{View::make('contacts.create')}}
                                  
          {{--END CONTENT--}}

      <a class="close-reveal-modal">&#215;</a>


      </div>

  
  {{--NEW CONTACT END--}}


  {{-- NEW VENUE--}}


      <div id="newVenue" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 
          {{--CONTENT HERE--}}

                                  {{View::make('event_locations.create')}}
                                  
          {{--END CONTENT--}}

      <a class="close-reveal-modal">&#215;</a>


      </div>

  
  {{--NEW VENUE END--}}


  {{--VENUES--}}


      <div id="showShows" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 
          {{--CONTENT HERE--}}

                                  {{View::make('events.index')}}
                                  
          {{--END CONTENT--}}

      <a class="close-reveal-modal">&#215;</a>


      </div>

  
  {{--VENUES END--}}

{{--END MODAL CODE--}}