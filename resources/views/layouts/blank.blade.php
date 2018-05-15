<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('bootstrap-toggle/css/bootstrap-toggle.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
        <!-- Optional theme -->
        <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
         <!-- Custom Fonts -->
        <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
         

    </head>
<body>
    <div id="app">
        @yield('content')
        
    </div>


    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/peticion.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/forms.js') }}"></script>
     @yield('scripts')
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="{{ asset('bootstrap-toggle/js/bootstrap-toggle.js') }}"></script>
    {{-- Include this after the sweet alert js file --}}
    @include('sweet::alert')
    <script type="https://unpkg.com/sweetalert/dist/main.js"></script>
    {{-- ¿Por qué usamos JQUERY 2.2.2 Y 3.2.1?--}}
     <script type="https://unpkg.com/sweetalert/dist/jquery-3.2.1.min"></script>

   
<script>
        
        $(document).ready(function(){
            
             $("#precio").keyup(function(){
                
                var precio=document.getElementById("precio").value;
                var cambio=document.getElementById("cambio").value;
                var ajuste=Number(precio)*Number(cambio);
                
                document.getElementById('ajuste').value = ajuste;
             });
//----------------------------------------------


//-------------------------------------------------------------------------------------------------
       $("#nombre_proteccion").keyup(function(){
                 
                var nombre_proteccion=document.getElementById("nombre_proteccion").value;
                var color_proteccion=document.getElementById("color_proteccion").value;
                var espesor_proteccion=document.getElementById("espesor_proteccion").value;
                var clave_proteccion=nombre_proteccion+color_proteccion+espesor_proteccion;
                document.getElementById('clave_proteccion').value = clave_proteccion.toUpperCase();
                 
             });
        $("#color_proteccion").keyup(function(){
                var nombre_proteccion=document.getElementById("nombre_proteccion").value;
                var color_proteccion=document.getElementById("color_proteccion").value;
                var espesor_proteccion=document.getElementById("espesor_proteccion").value;
                var clave_proteccion=nombre_proteccion+color_proteccion+espesor_proteccion;
                document.getElementById('clave_proteccion').value = clave_proteccion.toUpperCase();
        });
         $("#espesor_proteccion").keyup(function(){
            
                var nombre_proteccion=document.getElementById("nombre_proteccion").value;
                var color_proteccion=document.getElementById("color_proteccion").value;
                var espesor_proteccion=document.getElementById("espesor_proteccion").value;
                var clave_proteccion=nombre_proteccion+color_proteccion+espesor_proteccion;
                document.getElementById('clave_proteccion').value = clave_proteccion.toUpperCase();
        });
//---------------------------------------------------------------------------------------------
$("#atributo_1").change(function(){
      document.getElementById('descripcion_div').style.display = 'block';
      document.getElementById('medidas_div').style.display = 'none';
      document.getElementById('espesor_div').style.display = 'none';
      document.getElementById('color_div').style.display = 'none';
});
$("#atributo_2").change(function(){
      document.getElementById('descripcion_div').style.display = 'none';
      document.getElementById('medidas_div').style.display = 'block';
      document.getElementById('espesor_div').style.display = 'none';
      document.getElementById('color_div').style.display = 'none';
});
$("#atributo_3").change(function(){
      document.getElementById('descripcion_div').style.display = 'none';
      document.getElementById('medidas_div').style.display = 'none';
      document.getElementById('espesor_div').style.display = 'block';
      document.getElementById('color_div').style.display = 'none';
});
$("#atributo_4").change(function(){
      document.getElementById('descripcion_div').style.display = 'none';
      document.getElementById('medidas_div').style.display = 'none';
      document.getElementById('espesor_div').style.display = 'none';
      document.getElementById('color_div').style.display = 'block';
});
//-----------------------------------------------------------------------------------------------
$("#chk_montaje").change(function(){
 document.getElementById('montajes_div').style.display = 'block';
 document.getElementById('protecciones_div').style.display = 'none';
 document.getElementById('marcos_div').style.display = 'none';
 document.getElementById('maria_div').style.display = 'none';
 document.getElementById('generales_div').style.display = 'none';
});
$("#chk_proteccion").change(function(){
 document.getElementById('montajes_div').style.display = 'none';
 document.getElementById('protecciones_div').style.display = 'block';
 document.getElementById('marcos_div').style.display = 'none';
 document.getElementById('maria_div').style.display = 'none';
 document.getElementById('generales_div').style.display = 'none';
});
$("#chk_marcos").change(function(){
 document.getElementById('montajes_div').style.display = 'none';
 document.getElementById('protecciones_div').style.display = 'none';
 document.getElementById('marcos_div').style.display = 'block';
 document.getElementById('maria_div').style.display = 'none';
 document.getElementById('generales_div').style.display = 'none';
});
$("#chk_maria").change(function(){
 document.getElementById('montajes_div').style.display = 'none';
 document.getElementById('protecciones_div').style.display = 'none';
 document.getElementById('marcos_div').style.display = 'none';
 document.getElementById('maria_div').style.display = 'block';
 document.getElementById('generales_div').style.display = 'none';
});
$("#chk_generales").change(function(){
 document.getElementById('montajes_div').style.display = 'none';
 document.getElementById('protecciones_div').style.display = 'none';
 document.getElementById('marcos_div').style.display = 'none';
 document.getElementById('maria_div').style.display = 'none';
 document.getElementById('generales_div').style.display = 'block';
});
//----------------------------------------------------------------

//-----------------------------------------------------
 $(":text").keyup(function(){
   var lowe=$(this).val();
   $(this).val(lowe.toUpperCase());
    }); 
//*********************************************************************************************
});
function montaje(valor){
   $(document).ready(function(){
//----------------------------------------------------------
var producto='precio_'+valor+'_sel';
var prod='precio_'+valor;
var clave=valor+'_sel';
var clav='clave_'+valor;
document.getElementById(producto).value='$'+document.getElementById(prod).value;
document.getElementById(clave).value=document.getElementById(clav).value;
   });
  
}

$( ":input" ).keyup(function() {
  $("#clave_montaje").val(
    ($("#montaje_descripcion").val()+
    $("#color_montaje").val()+
    $("#espesor_montaje").val()+
    $("#ancho_montaje").val()+"x"+
    $("#alto_montaje").val()).toUpperCase()
  );
});
  /*
  Descripción
  Color
  Espesor
  ancho
  x
  alto
  *
  */

 //    var option=$("#descripcion_sel").val();
//    document.getElementById('nombreh').innerHTML=option;
//    document.getElementById('montaje_descripcion').value =option;
   

    $('#descripcion_sel').change(function(){
        $("#montaje_descripcion").val($("#descripcion_sel").val());
        $("#nombreh").text($("#descripcion_sel").val());
    });
///****************************************************************


    </script>
</body>
</html>
