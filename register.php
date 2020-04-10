<?php
require_once('config.php');
    ?>

<html>
<head>
    
    
    
    <nav style="float: right;"><a href="index.html">SIGN OUT</a></nav>
    
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>    
    <body>
        <div>
        <?php
    if(isset($_POST['create'])){
        $usn=$_POST['usn'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=($_POST['password']);
       
        $sql="INSERT INTO user(usn,firstname,lastname,email,phone,password)VALUES(?,?,?,?,?,?)";
        $stmtinsert=$db->prepare($sql);
        $result=$stmtinsert->execute([$usn,$firstname,$lastname,$email,$phone,$password]);
        if($result)
        {
            echo 'Successfully saved!';
        }else{
            echo'There were errors while saving data';
            
        }
}else{
    echo'No data';
}
       
        
    ?>
        
        </div>
    <div>
        <form action="register.php"  method="post">
        
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
            <h1>Register</h1>
            <p>Fill form with correct credentials</p>
                    <hr class="mb-3">
                      <label for="usn"><b>USN</b></label>
            <input class="form-control" id="usn" type="text" name="usn" required>
            <label for="firstname"><b>First Name</b></label>
            <input class="form-control" id="firstname" type="text" name="firstname" required>
            <label for="lastname"><b>Last Name</b></label>
            <input  class="form-control" id="lastname" type="text" name="lastname" required>
            <label for="email"><b>Email</b></label>
            <input  class="form-control" id="email" type="email" name="email" required>
            <label for="phone"><b>Phone no.</b></label>
            <input  class="form-control" id="phone" type="text" name="phone" required>
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" required>
                    <hr class="mb-3">
            <input class="btn btn-primary" id="registration" type="submit" name="create" value="Sign Up">
            
            
            
            
            
            </div>
            </div>
            </div>
        </form>
        
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript">
        $(function(){
            $('#registration').click(function(){
                
                var valid=this.form.checkValidity();
                if(valid)
                    {  var usn=$('#usn').val();
                        var firstname=$('#firstname').val();
                 var lastname=$('#lastname').val();
                 var email=$('#email').val();
                 var phone=$('#phone').val();
                 var password=$('#password').val();
                        
                        e.preventDefault();
                        
                        $.ajax({
                           type:"POST" ,
                           // url:'process.php',
                            data:{usn:usn,firstname:firstname,lastname:lastname,email:email,phone:phone,password:password},
                            success:function(data){
                                  Swal.fire({
            'title':'Successful!',
            'text':data,
            'type': 'success'
        })
                            },
                             error:function(data){
                                Swal.fire({
            'title':'Error.',
            'text':'Error while registering.',
            'type': 'err.'
        })
                            }
                        });
                
                    }
                else{
                   
                }
               
                
            });
      
        });
            </script>
    </body>
    

</html>