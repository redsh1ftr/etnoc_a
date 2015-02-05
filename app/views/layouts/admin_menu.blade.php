
  
  <aside class="right-off-canvas-menu">
        <ul class="off-canvas-list">

          <li><img src="http://www.eternallynocturnal.com/images/witeskull.png"></li>

                  <li class="has-submenu"><a href="#">Contacts</a>
                      <ul class="right-submenu">
                          <li><img src="http://www.eternallynocturnal.com/images/witeskull.png"></li>
                            <li class="back"><a href="#">Back</a></li>
                            <li>{{link_to_route('contacts.index', 'Contacts')}}</li>           
<div class="row">
  <div class="large-12 columns" style="color:#000000">
      
      {{Form::open(array('route' => 'contactSearch', 'method' => 'post'))}}

      <select name="type"> 
        <option value="f_name">First Name</option>
        <option value="nickname">Alias</option>
        <option value="l_name">Last Name</option>

      </select>

      {{Form::text('search')}}
      {{Form::submit('Find Contact...')}}
      {{Form::close()}}
  </div>

  
</div>      
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
                                <li><a href="#events">View/Edit Shows</a></li>
                                <li><a href="#newevent">New Show</a></li>
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
