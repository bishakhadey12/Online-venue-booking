<?php include("header.php");
session_start();
?>
<br>
    <?php if(isset($_SESSION['sms'])): ?>
    <div class="alert alert-success">
        <?php echo $_SESSION['sms']; unset($_SESSION['sms']); ?>
    </div>
<?php endif; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="container">

                        <form action="backend/login_process.php" method="POST">
                            <div class="form-group">
                                <label for="number">USER ID </label>
                                <input type="number" 
                                       class="form-control" 
                                       id="number" 
                                       name="number"
                                       placeholder="PH NO" required />
                            </div>
                        
                            <div class="form-group">
                                <label for="password">
                                    PASSWORD
                                </label>
                                <input type="password" 
                                       class="form-control" 
                                       id="password" 
                                       name="password"
                                       placeholder="Password"
                                    required />
                            </div>
                            
                            <br>
                            <button class="btn btn-outline-success" type="submit"> Login </button>
                        </form>
                        <p class="mt-3">
                            Not registered?
                            <a href="register.php">Register now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
 <?php include("footer.php");?>
