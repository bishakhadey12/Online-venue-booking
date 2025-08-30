<?php include("header.php");
session_start();

?>
<div class="container text-success text-center">
<?php
if(isset($_SESSION['sms'])){
    echo "<h3 class='text-danger'>".$_SESSION['sms']."</h3>";
    unset($_SESSION['sms']); // clear message
}
?>
</div>

    <h1 class="text-success text-center"> </h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <form action="backend/ownerdetails.php" method="post">
                            <div class="form-group">
                                <label for="name">OWNER NAME </label>
                                <input type="text" 
                                       class="form-control" 
                                       id="name" 
                                       name="name"
                                       placeholder="owner name" required />
                        
        
                                <label for="number"> Ph no </label>
                                <input type="number" 
                                       class="form-control" 
                                       id="phno" 
                                       name="number"
                                       placeholder="ph no" required />
                            
                                <label for="email">EMAIL_ID </label>
                                <input type="email" 
                                       class="form-control" 
                                       id="email" 
                                       name="email"
                                       placeholder="EMAIL_ID" required />
                           
                                <label for="password">
                                    PASSWORD
                                </label>
                                <input type="password" 
                                       class="form-control" 
                                       id="password" 
                                       name="password"
                                       placeholder="Password"
                                    required />
                            
                                <label for="password">
                                    CONFORM PASSWORD
                                </label>
                                <input type="password" 
                                       class="form-control" 
                                       id="conform password"
                                       name="cpassword" 
                                       placeholder="conform Password"
                                    required />
                            </div><br>
                            <button class="btn btn-outline-success" type="submit">Register</button>
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php include("footer.php");?>