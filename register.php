<?php
    include 'db.php';

    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $password=password_hash($_POST['password'],PASSWORD_BCRYPT);

        $sql=$conn->prepare('insert into user_cred(name,age,address,email,password) values(?,?,?,?,?)');
        $sql->bind_param('sisss',$name,$age,$address,$email,$password);
        if($sql->execute()){
            header('Location:login.php');
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div
                class="container col-4 shadow rounded p-5 my-5"
            >
                <h1 class="text-center">Register User!</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Age</label>
                        <input
                            type="number"
                            class="form-control"
                            name="age"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Address</label>
                        <input
                            type="text"
                            class="form-control"
                            name="address"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="text"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>


                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    
                </form>   

            </div>

            
            
            
            

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
