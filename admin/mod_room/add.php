
<form class="form-horizontal well span6" action="controller.php?action=add" enctype="multipart/form-data" method="POST">

	<fieldset>
		<legend>Dhoma e Re</legend>
											
          
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "name">Emri:</label>

              <div class="col-md-8">
              	<input name="" type="hidden" value="">
                 <input class="form-control input-sm" id="name" name="name" placeholder=
									  "Room Name" type="text" value="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "rmtype">Lloji i Dhomës:</label>

              <div class="col-md-8">
              <select class="form-control input-sm" name="rmtype" id="rmtype"> 
                  	<option value="None">Asgjë</option>
                  	<?php
                  	$rm = new Roomtype();
                  	$cur= $rm->listOfroomtype();
                  	foreach ($cur  as $rmtype) {
                  		echo '<option value='.$rmtype->typeID.'>'.$rmtype->typename.'</OPTION>';
                  	}

                  	?>
                  </select>	
              </div>
            </div>
          </div>

           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "price">Cmimi:</label>

              <div class="col-md-8"> 
                <input class="form-control input-sm" id="price" name="price" placeholder=
									  "Price" type="text" value="" onkeyup="javascript:checkNumber(this);">
              </div>
            </div>
          </div>

           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "adult">Të Ritur:</label>

              <div class="col-md-8">
                <input class="form-control input-sm" id="adult" name="adult" placeholder=
									  "Adult" type="text" value="" onkeyup="javascript:checkNumber(this);">
              </div>
            </div>
          </div>

           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "children">Fëmijë:</label>

              <div class="col-md-8">
                <input class="form-control input-sm" id="children" name="children" placeholder=
									  "Children" type="text" value="" onkeyup="javascript:checkNumber(this);">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "image">Upload Foto:</label>

              <div class="col-md-8">
              <input type="file" name="image" value="" id="image">
              </div>
            </div>
          </div>

		
		 <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "idno"></label>

              <div class="col-md-8">
                <button class="btn btn-primary" name="save" type="submit" >Ruaj</button>
              </div>
            </div>
          </div>

			
	</fieldset>	
	
</form>


</div><!--End of container-->
			
