<div class="container">
<h3>Paneli i Administratorëve :Mirësevjen  <?php echo $_SESSION['admin_ACCOUNT_NAME'];?></h3>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Dhomat
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
      Shtëpia ka dhoma të ndryshme që janë të kategorizuara sipas llojeve.
      Çdo dhomë është e një kategorie të veçantë dhe ka një numër maksimal të të rriturve dhe fëmijëve që mund të akomodohen. Kliko<a href="mod_room/index.php"> KëTU.</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Llojet e Dhomave
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Kjo përbëhet nga kategoritë e dhomave në këtë Shtëpi. Çdo kategori dhomash ka karakteristika unike të ndryshme nga tjetra. Për të parë të gjitha kategoritë e të gjitha llojeve të dhomave Kliko <a href="mod_roomtype/index.php">KëTU.</a>  </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Rezervime
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
       Në këtë zonë, ju mund të shikoni të gjitha transaksionet e të gjitha rezervimeve. Dhe kjo zonë lejon që recepsionisti të konfirmojë kërkesën e mysafirit ose të anulojë rezervimin. Klikoni <a href="mod_reservation/index.php">KëTU.</a>
       </div>
    </div>
  </div>
<!--   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
          Amenities
        </a>
      </h4>
    </div>
    <div id="collapsefour" class="panel-collapse collapse">
      <div class="panel-body">
      This includes the list of of all facilities within the Guest house. They include the parking area for the guests that come in vehicles, the swimming pool, the kitchen including others.View all Amenities click <a href="mod_amenities/index.php">HERE. </a>     </div>
    </div>
  </div> -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
          Komente
        </a>
      </h4>
    </div>
    <div id="collapsefive" class="panel-collapse collapse">
      <div class="panel-body">
      Këtu shfaqen të gjitha komentet nga vizitorët e faqes së internetit pasi të kenë parë të gjitha dhomat si dhe tarifat atje dhe gjithashtu komoditetet e Shtëpisë e të tjera. Klikoni <a href="mod_comments/index.php">Këtu</a> për të parë të gjitha komentet.
      </div>
    </div>
  </div>
   <?php if($_SESSION['admin_ACCOUNT_TYPE']=="Administrator"){ ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix">
          Përdoruesit
        </a>
      </h4>
    </div>
    <div id="collapsesix" class="panel-collapse collapse">
      <div class="panel-body">
		Sistemi shfaq listën e të gjithë njerëzve që janë regjistruar në sistem. Nëse një përdorues i caktuar është regjistruar në sistem, siç është regjistrimi i përdoruesve nuk shfaqet në listën e të dhënave. Për të parë të gjithë të regjistruarit, përveç përdoruesit të regjistruar, Klikoni <a href="mod_users/index.php">KëTU.</a>
      </div>
    </div>
  </div>
 <?php } ?>
</div>
</div>