<div data-role="page" id="vuesJour">
    <?php 
    include "vues/entetepageconnect.php";
    $debut = strtotime("8:00"); 
    ?>             
    <div data-role = "content">
    <label id="NomSalle">yufj</label>
    <table class="table-stripe" id="tab" data-role="table"  data-mode="" >
                 <thead>
                   <tr>
                     <th>Heure</th>
                     <th>Description</th>
                   </tr>
                 </thead>
                 <tbody id="tableauJour">
                 <?php               
                        for($i == $debut ; $i <= $debut + 43200 ; $i += 1800)
                        {
                             echo "<tr><td>" . $i ."</td></tr>";
                            
                        }
                 ?>
                 </tbody>
            </table>
    </div>
</div>
