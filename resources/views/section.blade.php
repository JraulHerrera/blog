@extends('layouts.menuAdmin')
  @section('content')
       <!---contact-->

    <div class="main-contact">
           <h3 class="head">SECCION</h3>
            <p>PAGINA PARA LA SECCION</p>
  <div class="contact-form">
      <form>

         <div class="col-md-12 contact-left"> 
                <div class="row">
      
              <div class="col-md-3">
              <label>Tipo</label>
               <select class="form-control"> 
                  <option>pagina</option>
                  <option>Form</option>
               </select>
              </div>
              <div class="col-md-5"></div>
                 <!---CheckBox-->
              <div class="col-md-3">
                <div class="priChec"> <label> Privado</label>
                  <div class="material-switch pull-right">
                  <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox"/>
                  <label for="someSwitchOptionSuccess" class="label-success"></label>
                </div>           
                </div>
              </div>
         <!--checkFin-->
        </div>
              <br>
              <br>

            <label> Titulo</label>
            <input type="text" placeholder="Title" required/>
            <label> Resumen</label>           
            <textarea   id = "editor"   ></textarea> 
            <label> Contenido</label>           
            <textarea   id = "editor"   ></textarea> 
            <input type="submit" value="SEND"/>
         </div>

         <div class="clearfix"></div>
      </form>
    </div>
</div>
  @stop

