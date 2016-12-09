$(function(){
    
    $('#vuesConnexion #btnconnexion').bind("click", function(e) {
            e.preventDefault();
            var mdp = $("#vuesConnexion #mdp").val(); 
            var login = $("#vuesConnexion #login").val();
            $.post("ajax/traiterconnexion.php",{
                        "mdp" : mdp,        
                        "login" : login },
                        foncRetourConnexion,"json" );
    });

    
     function foncRetourConnexion(data){
            if(data != null){
                $.mobile.changePage("#vuesAccueil");
             }
             else{
                $("#vuesConnexion #message").css({color:'red'});
                $("#vuesConnexion #message").html("erreur de login et/ou mdp");
             }
    }
    
    
    
    
    
    
});