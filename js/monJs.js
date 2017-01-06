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
            if(data !== false){
                $.mobile.changePage("#vuesSemaine"); //a changer
             }
             else{
                $("#vuesConnexion #message").css({color:'red'});
                $("#vuesConnexion #message").html("erreur de login et/ou mdp");
             }
    }  
    
    $('#vuesJour #tableJour' ).load(function(e){
        e.preventDefault();     
        var html = ""; 
        var h = 26;
        for(var i = 0; i !== h; i++)
        {
             html = html + "<tr><td> 9h</td><td>bonjour</td></tr>";
             
        }
        
        
        
    });
    
    
});