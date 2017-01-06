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
                    <?php /*echo $date = strtotime("2017-01-06 0:0:0")."<br/>"; echo $date+'86400'."<br/>";
                    echo strtotime("h", 24);*/
                    ?>
                </center>
            </div> 
        </div>
           
</div>
