@extends('layouts.menuAdmin')
  @section('content')
       <!---contact-->

    <div class="main-contact">
           <h3 class="head">Types</h3>
            <p></p>
        <div class="contact-form">
          <form>
     

         <div class="col-md-12 contact-left">
            <label> Title</label>
            <input name="titulo" type="text" placeholder="Title" required/>
            <label> Descripción:</label>   
        
           <textarea  name="description" id = "editor"   ></textarea> 


             <input type="submit" value="SEND"/>
         </div>

                <div class="clearfix"></div>
           </form>
    </div>
</div>
  @stop

