<?php

 
$setting = new Setting();
$result = $setting->single_setting($_GET['id']);

?>
<form class="form-horizontal well span6" action="controller.php?action=edit" method="POST">

					<fieldset>
		<legend>Setting i Ri</legend> 
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "DESCRIPTION">Përshkrim:</label>

              <div class="col-md-8"> 
              <input type="hidden" id="ID" name="ID" type="text" value="<?php Echo $result->ID;?>">
                 <textarea rows="6" class="form-control input-sm" id="DESCRIPTION" name="DESCRIPTION" placeholder=
									  "Description" type="textarea">   <?php Echo $result->DESCRIPTION;?></textarea>
              </div>
            </div>
          </div>  
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "type">Tipi:</label>

              <div class="col-md-8">
                <select class="form-control input-sm" name="type" id="type">
                <option value="<?php Echo $result->TYPE;?>"> <?php Echo $result->TYPE;?></option>
                  <option value="About Us">Property</option>
                  <option value="Contact Us">Contact Us</option>
                    <option value="Mission">Gallery</option>
                  <option value="Vision">Contact</option>
                </select> 
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
			
