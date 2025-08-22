<?php include("header.php");?>


<body>
    <h1 class="text-success text-center">   
    </h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="registrationForm" action="">
                            <div class="form-group">
                                <label for="email">USER ID </label>
                                <input type="number" 
                                       class="form-control" 
                                       id="number" 
                                       placeholder="PH NO" required />
                            </div>
                        
                            <div class="form-group">
                                <label for="password">
                                    PASSWORD
                                </label>
                                <input type="password" 
                                       class="form-control" 
                                       id="password" 
                                       placeholder="Password"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    CONFORM PASSWORD
                                </label>
                                <input type="conformpassword" 
                                       class="form-control" 
                                       id="conformpassword" 
                                       placeholder="conform Password"
                                    required />
                            </div>
                            <br>
                            <button class="btn btn-outline-success"> Login </button>
                        </form>
                        <p class="mt-3">
                            Not registered?
                            <a href="Register.php">Register now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
