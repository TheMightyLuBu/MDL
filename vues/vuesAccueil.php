<div data-role="page" id="vuesAccueil">
    <?php 
    include "vues/entetepageconnect.php"
    ?>
        <div data-role="content"> 
            <div class="ui-field-contain">
                <center>
                    <p id="compte"></p>
                    <p id="level"></p>
                </center>
            </div>          
            <div class="ui-field-contain">
                <center>
                    <p>Veuillez sélectionner une salle :</p>
                    <ul data-role="listview" id="listesalles" class="ui-listview"></ul>
                </center>
            </div> 
        </div>
           
</div>
