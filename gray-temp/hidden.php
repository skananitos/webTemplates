<!--Hidden drop down menu -->
	<div class="row">
		
		
			<div class="col-md-6" id="ext-contact-left">
			<h4 style="color:#286583">QUICK CONTACT</h4>
			  <div class="row marg-top">
				<form class="form-inline">
				  <div class="form-group col-md-6">
					<input type="text" name="fname" class="form-control" id="uName" placeholder="Name*" style="width: 90%">
				  </div>
				  <div class="form-group col-md-6">
					<input type="text" class="form-control" id="uSurname" placeholder="Surname*" style="width: 90%">
				  </div>
				</form>
			  </div>
			  <div class="row marg-top">
				<form class="form-inline">
				  <div class="form-group col-md-6">
					<input type="text" class="form-control" id="uEmail" placeholder="Email*" style="width: 90%">
				  </div>
				  <div class="form-group col-md-6">
					<input type="text" class="form-control" id="uPhone" placeholder="Phone" style="width: 90%">
				  </div>
				</form>
			  </div>
			  <div class="row marg-top">
				<div class="form-group col-md-12" id="myNoteApp" ng-controller="NoteCtrl">
					<textarea type="text" class="form-control" rows="3" id="msg" placeholder="Message*" style="width: 95%" ng-model="message"></textarea>
					<p class="small-2">
						<button ng-click="clear()" class="btn btn-sm" type="button">Clear</button> Number of characters left: <span ng-bind="left()"></span>
					</p>
				</div>
				
			  </div>
			  <div class="row marg-top">
			  <div class="form-group col-md-12">
				<form class="form-inline">
					<div class="input-group">
					  <div class="input-group-addon" style="background-color:white">5 + 1 = *</div>
					  <input type="test" class="form-control" id="testValue" placeholder="" style="width: 20%">
					  <div><p class="small-1">(Please fill in the result)</p></div>
					</div>
				</form>  
				</div>
			  <p class="small-2">* Required fields</p>
			 </div> 
			  <input class="btn btn-default" type="submit" value="Submit">
			</div>
	
			<div class="col-md-6" id="ext-contact-right">
				<h4 style="color:#286583;padding:20px 13px">OUR OFFICES</h4>
				<div class="col-md-6">
				<address>
				  <strong>ATTICA</strong> 
				  <p>Kifisia<br><abbr title="Phone">P:</abbr> xxx xxx xxxx</p>
				  <p>Merlin<br><abbr title="Phone">P:</abbr> xxx xxx xxxx</p>
				  <p>Piraeus and South Suburbs<br><abbr title="Phone">P:</abbr> xxx xxx xxxx</p>
				  <p>Psichiko<br><abbr title="Phone">P:</abbr> xxx xxx xxxx</p>
				</address>
				</div>
				<div class="col-md-6">
					<address>
					  <strong>PREFECTURES</strong> 
					  <p>North Greece<br><abbr title="Phone">P:</abbr> xxx xxx xxxx</p>
					  <p>Central Greece<br><abbr title="Phone">P:</abbr> xxx xxx xxxx</p>
					  <p>Crete<br><abbr title="Phone">P:</abbr> xxx xxx xxxx</p>
					  <p>Peloponnese, West Greece and Ionia Islands<br><abbr title="Phone">P:</abbr> xxx xxx xxxx</p>
					</address>
				</div>
			</div>
	
		
		
	</div>