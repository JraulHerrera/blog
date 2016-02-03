@extends('layouts.menuAdmin')
  @section('content')


       <!---contact-->


    <div class="main-contact">


   {!!Form::open()!!}
  <div class="form-group">
    {!!Form::label('nombre','Nombre:')!!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('email','Correo:')!!}
    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('password','Contraseña:')!!}
    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
  </div>
  {!!Form::submit()!!}
  {!!Form::close()!!}

    
           <h3 class="head">Types</h3>
            <p></p>
        <div class="contact-form">

     
          <form action="" method="POST" >
     

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

