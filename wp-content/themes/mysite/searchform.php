				<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
					<div class="input-group m-0">
                      <input type="text" class="form-control border border-primary ubuntu" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2" name="s" id="s">
                      
                      
                      
                      	<div class="input-group-append">
                      	<!-- <button type="submit" id="searchsubmit" class="btn-search btn-primary" style=""> -->
                        	<a class="btn-search btn-primary" onclick="document.getElementById('searchform').submit()" id="search_form_submit" href="#"><i class="material-icons">search</i></a>
						<!-- </button> -->
                      </div>
                      
                      <!-- <input type="submit" id="searchsubmit" value="Search" > -->
                    </div>
                </form>