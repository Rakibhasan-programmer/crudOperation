<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css
    ">
</head>
<body>


    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fw-bold" id="exampleModalLabel">New user</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="completename" placeholder="Enter your name" name="name">
                    <label for="completename">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="completemail" placeholder="Enter your email" name="email">
                    <label for="completemail">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="completemobile" placeholder="Enter your number" name="mobile">
                    <label for="completemobile">Mobile</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="completeplace" placeholder="Enter your Place" name="password">
                    <label for="completeplace">Place</label>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-dark" data-bs-dismiss="modal">Submit</button>
            <button type="button" class="btn btn-danger">Close</button>
        </div>
        </div>
    </div>
    </div>

    <div class="container">
        <h1 class="fw-bold text-center py-5">PHP CRUD OPERATION USING MODAL</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completeModal">
         Add new user
        </button>
   </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js
    "></script>
    
</body>
</html>