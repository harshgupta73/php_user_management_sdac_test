<?php
    include 'db.php';
    $result=$conn->query('select * from user_emp');

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql=$conn->prepare('select * from user_emp where id=?');
        $sql->bind_param('i',$id);
        $sql->execute();
        $edit=$sql->get_result()->fetch_assoc();


    }

    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name=$_POST['name'];
        $salary=$_POST['salary'];
        $designation=$_POST['designation'];
        $email=$_POST['email'];
        $yearsofexp=$_POST['exp'];

        $sql=$conn->prepare('update user_emp set name=?,salary=?,designation=?,email=?,yearsofexp=? where id=?');
        $sql->bind_param('sdssii',$name,$salary,$designation,$email,$yearsofexp,$id);
        
        if($sql->execute()){
            header('Location:home.php');
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
             <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
             >
                <div class="container">
                    <a class="navbar-brand" href="#">Hello <?php 
                        echo $_SESSION['name'];
                    ?></a>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                
                           
                        </ul>
                        <form class="d-flex my-2 my-lg-0" action="logout.php">
                            
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
             </nav>
             
        </header>
        <main>
            <div
                class="container col-4 shadow rounded p-5 my-5"
            >
                <h1 class="text-center">Add Employee!</h1>
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
                            value="<?= $edit['name'];?>"
                        />
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Salary</label>
                        <input
                            type="number"
                            class="form-control"
                            name="salary"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $edit['salary'];?>"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Designation</label>
                        <input
                            type="text"
                            class="form-control"
                            name="designation"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $edit['designation'];?>"
                        />
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $edit['email'];?>"
                        />
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Years of Exp</label>
                        <input
                            type="number"
                            class="form-control"
                            name="exp"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $edit['yearsofexp'];?>"
                            
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

            <div
                class="container shadow rounded p-5"
            >
                <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Email</th>
                            <th scope="col">Exp</th>
                            <th scope="col">Exp</th>
                            <th scope="col">Exp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row=$result->fetch_assoc()) {?>
                        <tr class="">
                            <td scope="row"> <?= $row['id'];?> </td>
                            <td><?= $row['name'];?></td>
                            <td><?= $row['salary'];?></td>
                            <td><?= $row['designation'];?></td>
                            <td><?= $row['email'];?></td>
                            <td><?= $row['yearsofexp'];?></td>
                            <td><a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="edit.php?id=<?= $row['id'];?>"
                                role="button"
                                >Edit</a
                            >
                            </td>
                            <td>
                                <a
                                    name=""
                                    id=""
                                    class="btn btn-primary"
                                    href="delete.php"
                                    role="button"
                                    >Delete</a
                                >
                                
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
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
