<?php require_once("connection.php");
// start edit backend code
if (isset($_POST['snoEdit'])) {
    $slider_id_update = $_POST["snoEdit"];
    $slider_title_update = isset($_POST["sliderTitleEdit"]) ? $_POST["sliderTitleEdit"] : "";
    $slider_image_update = isset($_POST["sliderImageEdit"]) ? $_POST["sliderImageEdit"] : "";

    // Correct SQL syntax
    $update_query = "UPDATE slider SET slider_title='$slider_title_update', slider_image='$slider_image_update' WHERE slider_id='$slider_id_update'";

    $result = mysqli_query($conn, $update_query);

    if ($result) {
        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Your Slider List data has been updated successfully!',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                });
              </script>";
    } else {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Update query failed!',
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'OK'
                });
              </script>";
    }
}
// End edit backend code 





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashbord.css">
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
                    <form action="./index.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="sliderTitleEdit" id="sliderTitleEdit" placeholder="Enter title" required>
                        <input type="file" name="sliderImageEdit" id="sliderImageEdit" accept="image/*">
                        <button type="submit" class="btn btn-primary">Update Slider List</button>
                        <!-- ab main ekd input hidden daalon ga us ka name name snoedit rahkon ga -->
                        <input type="hidden" name="snoEdit" value="sub" id="snoEdit">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM slider";
                $result = mysqli_query($conn, $query);
                $slider_id  = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $slider_id++;
                    echo "<tr>
                         <th>" . $slider_id  . "</th>
                          <td>" . $row['slider_title'] . "</td>
                          <td>" . $row['slider_image']  . "</td>
                          <td><button class='edit btn btn-sm btn-primary' id=".$row['slider_id'] .">Edit</button> <button class='delete btn btn-sm btn-primary' id=td".$row['slider_id'] .">Delete</button>";
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
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit", );
                //ab parent ka parent main chala gya hn ab tr mill gya hian ab dono td ko laain lo ga
                tr = e.target.parentNode.parentNode;
                console.log(e.target.id);
                slider_title = tr.getElementsByTagName("td")[0].innerText;
                slider_image = tr.getElementsByTagName("td")[1].innerText;
                console.log(slider_title, slider_image);
                //ab main ny form main id or name dia hian or class di hian us ko us ko innerText kia  hian
                document.getElementById("sliderTitleEdit").value = slider_title;

                //jo main hidden sno id pass kya hian us ko main jo manual id set ki hain us ka barbar kar dunga 
                // mtalb ka jo parentnode ka ander id hian us  kay uay id baraber hn jian gi snoEdit = slider_id kar barbar hngian gi
                // mtalb kay  jo manul ki or dtabase main wo equal hn jain gi
                document.getElementById("snoEdit").value = e.target.id;
                $('#editModal').modal('toggle');
            });
        });


        //delete code 


         deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("delete", );
                //ab parent ka parent main chala gya hn ab tr mill gya hian ab dono td ko laain lo ga
                tr = e.target.parentNode.parentNode;
                console.log(e.target.id);
                snoEdit = e.target.id.substr(1,)

                if(confirm("Press a Button")){
                    window.location = "/p2/admin/index.php?delete=snoEdit";
                }else
                {
                    console.log("no");
                }
            });
        });
    </script>
</body>

</html>