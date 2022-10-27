                    <div class="tab-pane fade" id="Recourse">
                    	<h2 class="title-section">Become a seller</h2>
                    	<div class="personal-info inner-page-padding">
                    		<div class="form-group">
                    			<label class="col-sm-3 control-label">Account type</label>
                    			<div class="col-sm-9">
                    				<div class="custom-select">
                    					<select id="accounttype" name="accounttype" class='select2' style="height: 35px;border-radius:4px">
                    						<option value="0">Select account type</option>
                    						<option value="PERSONAL" <?php if($showuser['user_type']=="PERSONAL"){?> selected <?php } ?>>Personal</option>
                    						<option value="PRIVATE_COMPANY" <?php if($showuser['user_type']=="PRIVATE_COMPANY"){?> selected <?php } ?>>Company</option>
                    					</select>
                    				</div>
                    			</div>
                    		</div>
                        <div id='warningselect'></div>
                        <div id="cdetail">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Company name</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="company_name" value="<?php echo $showuser['user_companyname'] ?>" id="company_name" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                           <label class="col-sm-3 control-label">Company address</label>
                           <div class="col-sm-9">
                             <input class="form-control" name="company_address" value="<?php echo $showuser['user_companyaddress'] ?>" id="company_address" type="text">
                           </div>
                         </div>
                       </div>
                       <div id="pdetail">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Heşzad</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="heszad" id="heszad" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                       <div class="col-sm-2" style="float: right;">
                         <button class="update-btn" name="updatedetail" id="updatedetail">Yenilə</button>
                       </div>
                     </div>
                   </div> 
                 </div> 