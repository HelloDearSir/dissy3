<?php require 'meta.php' ?>
                                      
										 <div id="newcontact">
                                         
                                             <p class="header">&nbsp; </p>
                                             
									 					<p class="body">
                                                            <form method="post">
                                                       <div class="col-12">
							 				<input type="text" class="minputU  form-control form-group" id="user" placeholder="user" name="user"  />
                                                    </div>
                                                      <div class="col-12">
                                                    <input type="text" class="minput form-control form-group" name="nmess" placeholder="write the message"/>
                                                      <div id = "um"></div>
                                                      </div>
									 				<br>
                                                     <?php require_once 'message.php'; ?>
                                                     <div class = "container">
                                                         <div class="row">
                                                             <div class="col-6">
                                                     <input type="submit"   class="btn btn-primary" id ="submit" name="send" value="send" />
                                                            </div>
                                                            <div class="col-6">
                                                     <input type="submit" class="cancel btn btn-primary" onclick="cancel()" name="cancel" value="cancel" />
                                                            </div>
                                                        </div>
                                                         </div>
									 			</form> </p>

									 				</div>

													
 