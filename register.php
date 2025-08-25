<?php include("header.php");?>

<body>
    <h1 class="text-success text-center"> </h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="registrationForm" action="post">
                            <div class="form-group">
                                <label for="email">OWNER NAME </label>
                                <input type="text" 
                                       class="form-control" 
                                       id="name" 
                                       placeholder="owner name" required />
                        
                            
                                <label for="number"> Ph no </label>
                                <input type="number" 
                                       class="form-control" 
                                       id="phno" 
                                       placeholder="ph no" required />
                            
                                <label for="email">EMAIL_ID </label>
                                <input type="email" 
                                       class="form-control" 
                                       id="email" 
                                       placeholder="EMAIL_ID" required />
                           
                                <label for="password">
                                    PASSWORD
                                </label>
                                <input type="password" 
                                       class="form-control" 
                                       id="password" 
                                       placeholder="Password"
                                    required />
                            
                                <label for="password">
                                    CONFORM PASSWORD
                                </label>
                                <input type="password" 
                                       class="form-control" 
                                       id="conform password" 
                                       placeholder="conform Password"
                                    required />
                            </div><br>
                            <a href="venue.php" class="btn btn-outline-success">Register</a>
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
 <?php include("footer.php");?>