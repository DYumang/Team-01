Welcome


<?php
    if($this->session->userdata('UserLoginSession'))
    {
        $udata = $this->session->userdata('UserLoginSession');
        echo 'Merry Christmas'.' '.$udata['$username'];
    }
    else
    {
        redirect(base_url('welcome/Login'));
    }

?>  