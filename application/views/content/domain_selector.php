<div id="content">
	<form action="<?php echo $baseURL;?>user/setInformation" id="defaultForm">
	<div class="container form domain-selector">

		<div class="title">Select your domain</div>
			<div class="heading">Name</div>
			<div class="input-group field">
				<input class="form-control" name="name" id="name" maxlength="80" value="<?php echo $name?>" required>
		</div>

		<div class="heading">Email</div>
		<div class="input-group field">
			<input class="form-control" name="email" id="email" value="<?php echo $email?>" required>
		</div>

		<div class="heading">Domain Extension</div>
		<div class="input-group field">
			<input class="form-control" name="domain" id="domain" required>
		</div>
		<div>
			<span class="small-text">You'll be able to access your site at onespace.io/yourextension</span>
		</div>

		<button type="submit" value="Continue" id="register-info-button" class="btn btn-filled btn-form domain-selector">Continue</button>

	</div>
	</form>
</div>
