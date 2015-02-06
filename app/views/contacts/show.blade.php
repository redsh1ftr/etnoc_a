
<div id="newContact" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

                            {{View::make('contacts.create')}}


<a class="close-reveal-modal">&#215;</a>



</div>






<div id="findContact" class="reveal-modal" style="max-width:400px;height:200px;max-height:80%;background-color:#000000;" data-reveal> 

                            {{View::make('contacts.contact_search')}}


<a class="close-reveal-modal">&#215;</a>



</div>



<hr>

@foreach($contacts as $contact)


  <div id="editContact" class="reveal-modal" style="max-width:80%;height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

                              {{View::make('contacts.edit')->with('contact', $contact)}}

  <a class="close-reveal-modal">&#215;</a>



  </div>


<div id="infoContact" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000" data-reveal> 




</div>



<a href="#" data-reveal-id="Modal_{{$contact->id}}" style="color:#700000;background-color:#000000;font-size:20px"></u>{{$contact->f_name}} <i>{{$contact->nickname}}</i> {{$contact->l_name}}</a><br>

  





<div id="Modal_{{$contact->id}}" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000" data-reveal> 









  <div class="content active" style="height:700px" id="panel1" style="background-color:#000000;color:#ffffff">
    



      <div class="row">

          <div class="large-12 columns">

              
                <table width="100%" style="border-color:#000000;background-color:#700000">
                  <td> <a href="{{$contact->facebook}}" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-social-facebook"></i></a>
                  <td> <a href="{{$contact->twitter}}" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-social-twitter"></i></a>
                  <td> <a href="{{$contact->instagram}}" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-social-instagram"></i></a>
                  <td> <a href="{{$contact->website}}" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-link"></i></a>
                  <td><a href="mailto:{{$contact->email}}" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-mail"></i></a>
                  <td><a href="#" data-reveal-id="editContact" style="color:#000000;background-color:#700000;font-size:30px" data-reveal><i class="fi-wrench"></i></a>


                  
                    
                  <ul class="tabs" data-tab >
                  <td> <a href="#panel3" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-camera"></i></a>
                  </ul>
                  <td>{{$contact->f_name}} <i>{{$contact->nickname}}</i> {{$contact->l_name}}

              <td>{{$contact->street1}} {{$contact->street2}}<br>
              {{$contact->city}} {{$contact->state}} {{$contact->zip}}<br>
                </table>
          
        <img style="max-height:400px;" src="http://www.eternallynocturnal.com/images/beanie_1.jpg"><br>
            
              


          </div>


      </div>





  </div>

  <div class="content" id="panel2" style="background-color:#000000;color:#ffffff;">
  




  {{Form::model($contact, array('method' => 'put', 'route' => array('contacts.update', $contact->id)))}}

  

<div class="row">
  
    <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Contact Type</label><div style="color:#000000">
      <select name="type">
      <option value="{{$contact->type}}"><span style="color:#000000">{{Str::title($contact->type)}}</option>
      <option value="ARTIST">Artist</option>
      <option value="PHOTOGRAPHER">Photographer</option>
      </select>

      </div>
    </div>
  <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Nickname</label>{{Form::text('nickname')}}</div>
</div>


{{Form::hidden('state', 'MI')}}


<div class="row">
  <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">First Name</label>{{Form::text('f_name')}}</div>
  <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Last Name</label>{{Form::text('l_name')}}</div>
</div>




<div class="row">
  <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Street Address</label>{{Form::text('street1')}}</div>
  <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Street Address 2</label>{{Form::text('street2')}}</div>
</div>


<div class="row">   
  <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">City</label>{{Form::text('city')}}</div>
  
  <div class="large-3 columns"><label style="background-color:#000000;color:#ffffff;">State</label>{{Form::text('state')}}</div>
  <div class="large-3 columns"><label style="background-color:#000000;color:#ffffff;">Zip Code</label>{{Form::text('zip')}}</div>
</div>


<div class="row">
  <div class="large-1 columns"><a href="#" class="icon-phone"></a></div>
    <div class="large-5 columns">{{Form::text('phone')}}</div>
  <div class="large-1 columns"><a href="#" class="icon-envelope"></a></div>
    <div class="large-5 columns">{{Form::text('email')}}</div>
</div>


<div class="row">
  
  <div class="large-1 columns"><a href="{{$contact->facebook}}" class="icon-facebook"></a></div>
    <div class="large-5 columns">{{Form::text('facebook')}}</div>
  
  <div class="large-1 columns"><a href="#" class="icon-twitter"></a></div>
    <div class="large-5 columns">{{Form::text('twitter')}}</div>
</div>

<div class="row"> 
  <div class="large-1 columns"><a href="#" class="icon-instagram"></a></div>  
    <div class="large-5 columns">{{Form::text('instagram')}}</div>
  <div class="large-1 columns"><a href="#" class="icon-globe"></a></div>    
    <div class="large-5 columns">{{Form::text('website')}}</div>


</div>

<div class="row" style=" width:80%;">
  <center style="color:#000000;">
  {{Form::textarea('notes')}}
  </center>
</div>
<br>


<button type="submit" style="color:#700000;background-color:#000000;font-size:20px"><i class="fi-play-circle"></i> Update {{$contact->f_name}} {{$contact->l_name}}</button>

{{Form::close()}}

</div>

<div class="content" id="panel3">

  fff
  </div>


<a class="close-reveal-modal">&#215;</a>



</div>
@endforeach