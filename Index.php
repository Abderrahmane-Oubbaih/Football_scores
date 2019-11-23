<?php include "head.php" ?> 

 <!-- Les Buutons demain hier aujourdHui -->
 <section class="banner">
       <div class="table-responsive container" id="tab">  
        <!--      <table class="table" border=10 >
              <tr>
                <th id="changeth" class="tailleTr"><a id="changea" href="hier.php">Hier</a></th>
                <th id="changeth" class="tailleTr"><a id="changea" href="aujourdhui.php">Ajourd'hui</a></th>
                <th id="changeth" class="tailleTr"><a id="changea" href="demain.php">Demain</a></th>
              </tr>
        </table> -->
 <ul class="nav nav-pills mb-3 font-weight-bold nav-justified" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Hier</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">aujourd'Hui</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Demain</a>
  </li>
</ul>
</div>


<!-- Pour hier -->
<div class="tab-content" id="pills-tabContent">

  <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  
  <img src="/Images/Logos/Laligue.png"  class="mx-auto d-block" id="imgLogoligue">

<table class="table" border=10>
<tr>
  <th colspan=3> <h4 class="etat">Etat de matche</h4> </th>
 </tr>
 <tr>
     <th><img class="imgLogo" src="../Images/Logos/bordeaux.png"></th>
     <th> <h2 class="vs">Vs</h2></th>
     <th><img class="imgLogo"  src="../Images/Logos/bordeaux.png"></th>
 </tr>

 <tr>
     <th> <h2 class="lesequipes">Equipe 1</h2></th>
     <th></th>
     <th> <h2 class="lesequipes">Equipe 2</h2></th>
 </tr>

 <tr>
     <th> <h2 class="resu">0</h2></th>
     <th class="twop">:</th>
     <th> <h2 class="resu">0</h2></th>
 </tr>


 </table>
  </div>




<!-- Pour ajourd'hui -->

  <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

  <img src="/Images/Logos/Laligue.png"  class="mx-auto d-block" id="imgLogoligue">
<div>
<table class="table" border=10 id="centre">
<tr>
  <th colspan=3> <h4 class="etat">Etat de matche</h4> </th>
 </tr>
 <tr style="padding: 0;">
     <th><img class="imgLogo" src="../Images/Logos/bordeaux.png"></th>
     <th> <h2 class="vs">Vs</h2></th>
     <th><img class="imgLogo"  src="../Images/Logos/bordeaux.png"></th>
 </tr>

 <tr>
     <th> <h2 class="lesequipes">Equipe 1</h2></th>
     <th></th>
     <th> <h2 class="lesequipes">Equipe 2</h2></th>
 </tr>

 <tr>
     <th> <h2 class="resu">0</h2></th>
     <th class="twop">:</th>
     <th> <h2 class="resu">0</h2></th>
 </tr>


 </table>
 </div>
</div>




<!-- Pour demain -->
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <img src="/Images/Logos/Laligue.png"  class="mx-auto d-block" id="imgLogoligue">

<table class="table" border=10>
<tr>
  <th colspan=3> <h4 class="etat">Etat de matche</h4> </th>
 </tr>
 <tr>
<th colspan=3> <h3 class="etat1"> hh:min jj/mm/aaaa </h3>  </th>

 </tr>
 <tr>
     <th><img class="imgLogo" src="../Images/Logos/bordeaux.png"></th>
     <th> 
         
         
              <h2 class="vs">Vs</h2></th>
        
   
     <th><img class="imgLogo"  src="../Images/Logos/bordeaux.png"></th>
 </tr>

 <tr>
     <th> <h2 class="lesequipes">Equipe 1</h2></th>
     <th></th>
     <th> <h2 class="lesequipes">Equipe 2</h2></th>
 </tr>

 <tr>
     <th> <h2 class="resu">0</h2></th>
     <th class="twop">:</th>
     <th> <h2 class="resu">0</h2></th>
 </tr>


 </table>
  
  </div>



</div>
      

<?php include "footer.php" ?> 
          
