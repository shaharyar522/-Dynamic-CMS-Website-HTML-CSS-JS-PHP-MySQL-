<?php require_once("connection.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css botstarp -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- data table css -->
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <!-- jquey -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- uay form ki css hian -->
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        form input[type="text"],
        form input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        form input[type="text"]:focus,
        form input[type="file"]:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        form button[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
        }

        form button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <!-- modal start when click the edit button the data will updated -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edits Slider List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="text" name="sliderTitleEdit" id="sliderTitleEdit" placeholder="Enter title" required>
                        <input type="file" name="sliderImageEdit" id="sliderImageEdit" accept="image/*" required>
                        <button type="submit" name="submit" value="sub">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Update Slider List</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal  -->


    <!-- start table container  -->
    <div class="container my-4">
        <h1 class="text-center fw-bold" style="color: white;">Slider List</h1>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $query = "SELECT * FROM slider";
                $result = mysqli_query($conn, $query);
                $sno = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sno = $sno + 1;
                    echo "<tr>
                         <th>" . $sno . "</th>
                          <td>" . $row['slider_title'] . "</td>
                          <td>" . $row['slider_image'] . "</td>
                          <td><button class='edit btn btn-sm btn-primary'>Edit</button><a href='/delete'>Delete</a></td>
                         </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- End  table container -->

    <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>



    <script>
      edits = document.getElementsByClassName('edit');
      Array.from(edits).forEach((element)=>{
        element.addEventListener("click", (e)=>{
            console.log("edit", );
            //ab parent ka parent main chala gya hn ab tr mill gya hian ab dono td ko laain lo ga
            tr = e.target.parentNode.parentNode;
            slider_title = tr.getElementsByTagName("td")[0].innerText;
            slider_image = tr.getElementsByTagName("td")[1].innerText;
             console.log(slider_title, slider_image);
             //ab main ny form main id or name dia hian or class di hian us ko us ko innerText kia  hian
             sliderTitleEdit = slider_title;
             sliderImageEdit = slider_image;
             $('#editModal').modal('toggle');
        });
      });
    </script>
</body>

</html>