$( document ).ready(function() {
    $("#next").click(function(){
        $(".send").css("display","block"); 
        $(".next").css("display","none");
        $(".second-page").css("display","grid");
        $(".first-page").css("display","none");
        // Manage parent form 
       /* */
      });

      $("#previous").click(function(){
        $(".send").css("display","none"); 
        $(".next").css("display","block");
        $(".second-page").css("display","none");
        $(".first-page").css("display","grid");
      });

      $('input[type=radio][name=adult]').change(function() {
          console.log(this.value);
          if(this.value=="راشد"){
            $(".parent-section").css("display" ,"none");
            $("#adresse").prop( "disabled", false );
            $("#adresse").prop( "required", true );
            /* required / not required elements elemnts */ 
            $( ".parent input" ).each(function() {
              $(this).prop( "required", false );
            });

             }
            else{
              $(".parent-section").css("display" ,"grid");
              $("#adresse").prop( "disabled", true );
              $("#adresse").prop( "required", false );
              $( ".parent input" ).each(function() {
                $(this).prop( "required", true );
  
              });
            }
        });

});