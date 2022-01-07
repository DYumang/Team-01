Welcome to Dashboard

<?php 
if($this->session->userdata('UserLoginSession'))
{
    $udata = $this->session->userdata('UserLoginSession');
    echo 'Welcome'.' '.$udata['username'];
}
else
{
    redirect(base_url('login'));
}



 ?>
 <br>
 <a href="<?=base_url('/update')?>">Update</a>
 <br>
 <a href="<?=base_url('login')?>">Logout</a>
