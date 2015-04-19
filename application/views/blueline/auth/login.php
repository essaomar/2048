<?php $attributes = array('class' => 'form-signin', 'role'=> 'form', 'id' => 'login'); ?>
<?=form_open('login', $attributes)?>
        <div class="logo"><img src="<?=base_url()?><?=$core_settings->invoice_logo;?>" alt="<?=$core_settings->company;?>"></div>
        <?php if($error == "true") { $message = explode(':', $message)?>
            <div id="error">
              <?=$message[1]?>
            </div>
        <?php } ?>
        
          <div class="form-group">
            <label for="username"><?=$this->lang->line('application_username');?></label>
            <input type="username" class="form-control" id="username" name="username" <?php if(isset($username)) { echo 'value="'.$username.'"'; } ?> />
          </div>
          <div class="form-group">
            <label for="password"><?=$this->lang->line('application_password');?></label>
            <input type="password" class="form-control" id="password" name="password" />
          </div>

          <input type="submit" class="btn btn-primary" value="<?=$this->lang->line('application_login');?>" />
          <div class="forgotpassword"><a href="<?=site_url("forgotpass");?>"><?=$this->lang->line('application_forgot_password');?></a><br>
		  <a href="asdasd"   data-toggle="mainmodal"> Register an Account</a>
		  </div>
		   
		  Demo Login  <br>
		  Username: <b>essa</b><br>
		  Password: <b>123456</b>
<?=form_close()?>

