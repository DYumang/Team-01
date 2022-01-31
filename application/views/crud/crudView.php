<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add
        </button>
    <br>
    <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('CrudController/create')?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" name="lastName" aria-describedby="emailHelp" placeholder="Enter last name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp" placeholder="Enter first name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">username</label>
                        <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Birthdate</label>
                        <input type="date" class="form-control" name="birthdate" aria-describedby="emailHelp" placeholder="Enter birthdate">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact No</label>
                        <input type="text" class="form-control" name="contactNo" aria-describedby="emailHelp" placeholder="Enter contact no">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="text" class="form-control" name="password" aria-describedby="emailHelp" placeholder="Enter Password">
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">username</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Password</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id; ?></th>
                <td><?php echo $row->lastName; ?></td>
                <td><?php echo $row->firstName; ?></td>
                <td><?php echo $row->username; ?></td>
                <td><?php echo $row->birthdate; ?></td>
                <td><?php echo $row->password; ?></td>
                <td> <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>">Edit</a>  | 
                   <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?>">Delete</a> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

  </body>
</html>