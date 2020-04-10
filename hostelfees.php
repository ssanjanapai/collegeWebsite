<?php
require_once('config.php');
    ?>

<html>
<head>
    
    
    
    <nav style="float: right;"><a href="index.html">SIGN OUT</a></nav>
    
    <title>Payment</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>    
    <body>
        <div>
        <?php
    if(isset($_POST['create'])){
        $usn=$_POST['usn'];
        $hostel_fees=$_POST['hostel_fees'];
        $mess_fees=$_POST['mess_fees'];
       
        $sql="INSERT INTO fees(usn,hostel_fees,mess_fees)VALUES(?,?,?)";
        $stmtinsert=$db->prepare($sql);
        $result=$stmtinsert->execute([$usn,$hostel_fees,$mess_fees]);
        if($result)
        {
            echo 'Successfully saved!';
        }else{
            echo 'error';            
        }
}else{
    echo'No data';
}
       
        
    ?>
        
        </div>
    <div>
        <form action="hostelfees.php"  method="post">
        
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
            <h1>PAYMENT</h1>
            <p>Fees paid or not</p>
                    <hr class="mb-3">
                      <label for="usn"><b>USN</b></label>
            <input class="form-control" id="usn" type="text" name="usn" required>
            <label for="hostel_fees"><b>Hostel Fees</b></label>
            <input class="form-control" id="hostel_fees" type="text" name="hostel_fees" required>
            <label for="mess_fees"><b>Mess Fees</b></label>
            <input  class="form-control" id="mess_fees" type="text" name="mess_fees" required>
                    <hr class="mb-3">
            <input class="btn btn-primary" id="registration" type="submit" name="create" value="Submit">
            
            
            
            
            
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
                        var hostel_fees=$('#hostel_fees').val();
                 var mess_fees=$('#mess_fees').val();
              
                        
                        e.preventDefault();
                        
                        $.ajax({
                           type:"POST" ,
                           // url:'process.php',
                            data:{usn:usn,hostel_fees:hostel_fees,mess_fees:mess_fees},
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