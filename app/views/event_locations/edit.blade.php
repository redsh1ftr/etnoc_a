{{Form::model($venue, array('method' => 'put', 'route' => array('event_locations.update', $venue->id)))}}
<?php $contact = $venue->findContact();?>

	 <div class="row">
            <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">First Name</label>{{Form::text('name')}}</div>
            <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Last Name</label>{{Form::text('facebook')}}</div>
          </div>      

 		
            

           




          <div class="row">
          	<div class="large-6 columns">
        
			   <select name="contact_id" style="color:#700000;background-color:#000000;">
			   		<option value="{{$contact->id}}">
			              {{$contact->f_name}}{{$contact->l_name}}
			        </option>
			        @foreach(Contact::all() as $contacts)
			        <option value="{{$contacts->id}}">{{$contacts->f_name}} {{$contacts->l_name}}</option>
			        @endforeach
			   </select>
			</div>
            <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Street Address</label>{{Form::text('street_1')}}</div>
            <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Street Address 2</label>{{Form::text('street_2')}}</div>
          </div>


          <div class="row">   
            <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">City</label>{{Form::text('city')}}</div>
            
            <div class="large-3 columns"><label style="background-color:#000000;color:#ffffff;">State</label>{{Form::text('state')}}</div>
            <div class="large-3 columns"><label style="background-color:#000000;color:#ffffff;">Zip Code</label>{{Form::text('zip')}}</div>
          </div>


          <div class="row">
            <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-telephone"></i></div>
              <div class="large-5 columns">{{Form::text('phone')}}</div>
            <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-mail"></i></div>
              <div class="large-5 columns">{{Form::text('email')}}</div>
          <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-trash"></i></div>
              <div class="large-5 columns">{{Form::text('fax', $venue->fax, array('placeholder' => 'Fax'))}}</div>


          <div class="row">
            
            <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-social-facebook"></i></div>
              <div class="large-5 columns">{{Form::text('facebook')}}</div>
            
            <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-social-twitter"></i></div>
              <div class="large-5 columns">{{Form::text('twitter')}}</div>
          </div>

          <div class="row"> 
            <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-social-instagram"></i></a></div>  
              <div class="large-5 columns">{{Form::text('instagram')}}</div>
            <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-link"></i></a></div>    
              <div class="large-5 columns">{{Form::text('website')}}</div>


          </div>


          <button type="submit" style="color:#700000;background-color:#000000;font-size:20px"><i class="fi-play-circle"></i> Update {{$venue->name}}</button>
</div>

{{Form::close()}}