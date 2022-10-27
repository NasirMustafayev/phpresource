                    <div class="tab-pane fade" id="Password">
                    	<h2 class="title-section">Password</h2>
                    	<div class="personal-info inner-page-padding">
                    		<div class="form-group">
                    			<label class="col-sm-3 control-label">Current password</label>
                                   <div class="col-sm-4">
                                        <input class="form-control" required="" name="lastpassword" id="lastpassword" type="password">
                                        <input type="hidden" name="justpassword" id="justpassword" value="<?php echo $showuser['user_password']; ?>">
                                   </div>
                              </div>
                              <div class="form-group">
                               <label class="col-sm-3 control-label">New password</label>
                               <div class="col-sm-4">
                                   <input class="form-control" required="" name="password" id="password" type="password">
                              </div>
                         </div>
                         <div class="form-group">
                          <label class="col-sm-3 control-label">Retype new password</label>
                          <div class="col-sm-4">
                              <input class="form-control" required="" name="rpassword" id="rpassword" type="password">
                         </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-7" style="float: right;">
                          <button class="update-btn" name="updatepass" id="updatepass">Yenilə</button>
                     </div>
                </div>
           </div> 
      </div> 