
<div id="newContact" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

                            {{View::make('contacts.create')}}


<a class="close-reveal-modal">&#215;</a>


</div>






<div id="findContact" class="reveal-modal" style="max-width:400px;height:260px;max-height:80%;background-color:#000000;" data-reveal> 

                            {{View::make('contacts.contact_search')}}


<a class="close-reveal-modal">&#215;</a>



</div>



<hr>
 <table align="center" border="0" style="border:1px solid;width:50%;border-color:#ffffff;color:#000000;background-color:transparent;border-between:always;font-size:30px;">
@foreach($contacts as $contact)


  {{--BEGIN MODAL LINKS --}}
     <div style="background-color:#700000">

        
            <td style="background-color:#700000"> <a href="{{$contact->facebook}}" target="blank" style="color:#000000;background-color:#700000;font-size:30px" target="ipanel1"><i class="fi-social-facebook"></i></a>
            <td style="background-color:#700000"> <a href="{{$contact->twitter}}" target="blank"  style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-social-twitter"></i></a>
            <td style="background-color:#700000"> <a href="{{$contact->instagram}}" target="blank"  style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-social-instagram"></i></a>
            <td style="background-color:#700000"> <a href="{{$contact->website}}" target="blank"  style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-link"></i></a>
            <td style="background-color:#700000"><a href="mailto:{{$contact->email}}" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-mail"></i></a>
            <td style="background-color:#700000"><a href="tel:{{$contact->phone}}" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-telephone"></i></a>
            <td style="font-size:20px;background-color:#700000">{{$contact->f_name}} <i>{{$contact->nickname}}</i> {{$contact->l_name}}
            <td style="background-color:#700000">{{$contact->street1}} {{$contact->street2}}<br>
                      {{$contact->city}} {{$contact->state}} {{$contact->zip}}<br>
            <td style="background-color:#700000"> <a href="#panel3" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-camera"></i></a>
            <td style="background-color:#700000"><a href="#" data-reveal-id="editContact_{{$contact->id}}" style="color:#000000;background-color:#700000;font-size:30px" data-reveal><i class="fi-wrench"></i></a></tr>
</div>
      


  {{--END MODAL LINKS --}}




  {{-- BEGIN MODAL CODE --}}

      <div id="editContact_{{$contact->id}}" class="reveal-modal" style="max-width:80%;height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

                              {{View::make('contacts.edit')->with('contact', $contact)}}

        <a class="close-reveal-modal">&#215;</a>


      </div>

      <div id="Modal_{{$contact->id}}" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000" data-reveal> 

        <a class="close-reveal-modal">&#215;</a>

      </div>
      
      <div id="infoContact" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000" data-reveal> 
        
        <a class="close-reveal-modal">&#215;</a>

        </div>





  {{-- END MODAL CODE --}}







                 


                  
                    
    
            

@endforeach

</table>