@include('layouts.app', [

    'script_header' => '$(document).ready(function(){
          $("button").click(function(){
            $("p").hide();
          });
        });',

    'slot' =>
           ''
])
