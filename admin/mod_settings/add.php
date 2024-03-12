
<form class="form-horizontal well span6" action="controller.php?action=add" method="POST">

	<fieldset>
		<legend> Setting i Ri</legend> 
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "DESCRIPTION">Përshkrimi:</label>

              <div class="col-md-8"> 
                <textarea class="form-control input-sm" id="DESCRIPTION" name="DESCRIPTION" placeholder=
                    "Description" type="text" rows="6">  </textarea> 
              </div>
            </div>
          </div>  
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "type">Tipi:</label>

              <div class="col-md-8">
                <select class="form-control input-sm" name="type" id="type">
                  <option value="About Us">Property</option>
                  <option value="Contact Us">Contact Us</option>
                    <option value="Mission">Contact</option>
                  <option value="Vision">Gallery</option>
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


</div><!--End of container-->
			
