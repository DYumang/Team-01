<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control" name="lastName" value="<?php echo $row->lastName; ?>" aria-describedby="emailHelp" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" class="form-control" name="firstName" value="<?php echo $row->firstName; ?>" aria-describedby="emailHelp" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $row->usertName; ?>" aria-describedby="emailHelp" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Birthdate</label>
                <input type="date" class="form-control" name="birthdate" value="<?php echo $row->birthdate; ?>" aria-describedby="emailHelp" placeholder="Enter birthdate">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password:</label>
                <input type="text" class="form-control" name="password" value="<?php echo $row->password; ?>" aria-describedby="emailHelp" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
            <a href="<?php echo site_url('CrudController')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>  
    </div>


  </body>
</html>