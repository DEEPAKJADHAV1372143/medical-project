<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="">
        <style>
        #IN_FORM{
           padding:20px;
           background: linear-gradient(to top right, #33ccff 0%, #ccff33 76%);
        }
        #UP_FORM{
           padding:20px; 
           background: linear-gradient(to top right, #ff0066 0%, #00ffff 87%);
           
        }
        #nodis{
            display:none;
        }
        </style>
    </head>
    <body>
    <!--
        *Name : Deepak Jadhav
        *Database:first
        *Table:first_tbl
        *Autolaod: url form database First_Model
        *Url configartion
    -->
    <div class="container">
    <div class="row">
        <div class="col-md-4">
        <h4 class="text-success" id="nodis">
        <?php if($this->uri->segment(2) =="inserted"){
            echo "Your Email and Password Has been inserted successfully...!";
        } ?>

        <?php if($this->uri->segment(2) =="Updated"){
            echo "Your Email and Password Has been Updated successfully...!";
        } ?>
        </h4>
        
            <form action="<?php echo base_url();?>index.php/Welcome/insert" method="post">
                <?php
                    if(isset($single)){
                        foreach($single->result() as $row) {
                    
                    ?>
                    <div id="UP_FORM">
                    <h2>Now Update Your Data </h2>
                <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" value="<?php echo $row->email;?>">
                <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password" value="<?php echo $row->password;?>">
                <span class="text-danger"><?php echo form_error('password'); ?></span>
                </div>
                <input type="hidden" name="id" value="<?php echo $row->id;?>">
                    <button type="submit" class="btn btn-primary" name="Update" value="Update">Update</button >
                </div>
                        <?php }
                    }
                    else{
                        ?>
                    
                        <div id="IN_FORM">
                        <h2>Submit  Your Data </h2>
                        <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">
                <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password">
                <span class="text-danger"><?php echo form_error('password'); ?></span>
                </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                  </div>
                        <?php
                    }
                ?>
                
              </form>
                </div>

                <div class="col-md-6">
                    <h3 class="text-center text-success">Details</h3>
                ​ <table class="table table-bordered">
                    <thead>
                    <tr class="bg-info">
                        <th>Email ID</th>
                        <th>Password</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($all_data->num_rows() > 0){
                        foreach($all_data->result() as $row){
                            ?>
                             <tr>
                                <td><?php echo $row->email;?></td>
                                <td><?php echo $row->password;?></td>
                                <td><a href="<?php echo base_url(); ?>index.php/Welcome/delete_data/<?php echo $row->id;?>" class="btn btn-danger">Delete</a></td>
                                <td><a href="<?php echo base_url(); ?>index.php/Welcome/update_data/<?php echo $row->id;?>" class="btn btn-warning">Edit</a></td>
                            </tr>
                            <?php
                        }
                    } 
                    else{
                        ?>
                         <tr>
                            <td colspan="4">No Data Found... </td>
                        </tr>
                        <?php
                    }
                    ?>
                   <tr class="bg-success">
                    <td colspan="4">Table No 234 ..</td>
                   </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <script>
         var msg=document.getElementById("nodis").innerText;
         alert(msg);
        </script>
    </body>
</html>