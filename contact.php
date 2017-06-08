<?php include_once 'includes/header.php'; ?>

<div id="contact" class="row">
    <div class="col-xs-12">
        <h1>Contact me</h1>        
    </div>
    <div class='col-xs-12'>
<form action="mailer/mailer.php" class="form-horizontal" method="post">
									<div class="form-group">
										<div class="col-sm-1 col-xs-1">
											<label for="name" class="control-label">Name</label>
										</div>
										<div class="col-sm-11 col-xs-11">
											<input type="text" class="form-control" id="name" name="name" required="required">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-1 col-xs-1">
											<label for="mail" class="control-label">E-mail</label>
										</div>
										<div class="col-sm-11 col-xs-11" style="padding-left: 15px !important;">
											<input type="email" class="form-control" id="mail" name="mail" required="required">
										</div>
									</div>
									<div class="form-group has-feedback">
										<div class="col-sm-1 col-xs-1">
											<label for="message" class="control-label">Message</label>
										</div>
										<div class="col-sm-10 col-xs-10" style="padding-left: 15px !important;">
											<textarea id="message" name="message" class="form-control" minlength="20" maxlength="500" required="required"></textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10 text-right">
											<button type="submit" class="btn btn-info btn-lg">Send</button>
										</div>
									</div>
								</form>
</div>
</div>

<?php include_once 'includes/footer.php'; ?>