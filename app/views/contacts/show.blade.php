
<div id="newContact" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

                            {{View::make('contacts.create')}}


<a class="close-reveal-modal">&#215;</a>



</div>






<div id="findContact" class="reveal-modal" style="max-width:400px;height:260px;max-height:80%;background-color:#000000;" data-reveal> 

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

<table align="center" border="0" style="width:50%;border-color:#000000;color:#000000;background-color:#700000;font-size:30px;">

<tr><td height="35px" style="text-align:center"><a href="#" data-reveal-id="Modal_{{$contact->id}}" style="color:#000000;background-color:#700000;font-size:30px;"></u>{{$contact->f_name}} <i>{{$contact->nickname}}</i> {{$contact->l_name}}</a><br>

</table>





<div id="Modal_{{$contact->id}}" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000" data-reveal> 









  <div class="content active" style="height:700px" id="panel1" style="background-color:#000000;color:#ffffff">
    



      <div class="row">

          <div class="large-12 columns">

              
                <table width="100%" style="border-color:#000000;background-color:#700000">
                  <td> <a href="{{$contact->facebook}}" target="blank" style="color:#000000;background-color:#700000;font-size:30px" target="ipanel1"><i class="fi-social-facebook"></i></a>
                  <td> <a href="{{$contact->twitter}}" target="blank"  style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-social-twitter"></i></a>
                  <td> <a href="{{$contact->instagram}}" target="blank"  style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-social-instagram"></i></a>
                  <td> <a href="{{$contact->website}}" target="blank"  style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-link"></i></a>
                  <td><a href="mailto:{{$contact->email}}" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-mail"></i></a>
                  <td><a href="tel:{{$contact->phone}}" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-telephone"></i></a>


                  
                    
                 
                 
                  </ul>
                  <td style="font-size:20px;">{{$contact->f_name}} <i>{{$contact->nickname}}</i> {{$contact->l_name}}

                  <td>{{$contact->street1}} {{$contact->street2}}<br>
                      {{$contact->city}} {{$contact->state}} {{$contact->zip}}<br>
                  <td> <a href="#panel3" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-camera"></i></a>
                  <td><a href="#" data-reveal-id="editContact" style="color:#000000;background-color:#700000;font-size:30px" data-reveal><i class="fi-wrench"></i></a>

                </table>
          
                  <img style="max-height:400px;" src="http://www.eternallynocturnal.com/images/beanie_1.jpg"><br>
            
              {{$contact->notes}}


          </div>


      </div>





  </div>


<a class="close-reveal-modal">&#215;</a>


</div>
@endforeach

