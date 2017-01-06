$(function(){
    
    $('#vuesConnexion #btnconnexion').bind("click", function(e) {
            e.preventDefault();
            var mdp = $("#vuesConnexion #mdp").val(); 
            var login = $("#vuesConnexion #login").val();
            window.login = login;
            $.post("ajax/traiterconnexion.php",{
                        "mdp" : mdp,        
                        "login" : login },
                        foncRetourConnexion,"json" );
    });

    
     function foncRetourConnexion(data){
            if(data !== false){
                $.mobile.changePage("#vuesAccueil");
                $("#vuesAccueil #compte").html("Vous êtes connecté en tant que " + window.login);
                var typeCompte = "";
                if (data['level'] == "2") {
                    typeCompte = "administrateur";
                }
                else if (data['level'] == "1") {
                    typeCompte = "utilisateur";
                }
                else {
                    typeCompte = "sans droits";
                }
                $("#vuesAccueil #level").html("Votre compte est de type " + typeCompte);
             }
             else{
                $("#vuesConnexion #message").css({color:'red'});
                $("#vuesConnexion #message").html("erreur de login et/ou mdp");
             }
             
    $('#vuesAccueil #listesalles').load("ajax/traiterSalles.php", function(){
        $( this ).listview( "refresh" );
    });
    }  
    
    $('#vuesAccueil').on("click", "li", function(e) {
            e.preventDefault();
            var idSalle = $(this).attr("id");
            window.idSalle = idSalle;
            $.post("ajax/traiterChoixSalle.php",{
                        "idSalle" : idSalle },
                        foncRetourChoixSalle,"json" );
    });
    
    function foncRetourChoixSalle(data){
         $.mobile.changePage("#vuesJour");
         /*var motif = data['motif'];
         var bilan = data['bilan'];
         $("#pagerapportamodifier #nomMedecin").html("Médecin : "+window.medecin);
         $("#pagerapportamodifier #motif").text(motif);
         $("#pagerapportamodifier #bilan").text(bilan);*/
    }
});