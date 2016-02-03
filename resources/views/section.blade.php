@extends('layouts.menuAdmin')
  @section('content')
       <!---contact-->

    <div class="main-contact">
           <h3 class="head">Types</h3>
            <p></p>
        <div class="contact-form">
          <form>
               <!---CheckBox-->
            <div class="priChec"> <label> Private</label>
            
                <div class="material-switch pull-right">
                  <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox"/>
                  <label for="someSwitchOptionSuccess" class="label-success"></label>
                </div>           
            </div>
         <!--checkFin-->
         <select class="form-control"> 
         <option>pagina</option>
         <option>Form</option>
         </select>
         <div class="col-md-12 contact-left">
            <label> Title</label>
            <input type="text" placeholder="Title" required/>
            <label> Body</label>   
        
           <textarea   id = "editor"   ></textarea> 


             <input type="submit" value="SEND"/>
         </div>

                <div class="clearfix"></div>
           </form>
    </div>
</div>
  @stop

