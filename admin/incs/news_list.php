<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap JS (including Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
</head>

<body>
    <!-- Connection add -->
    <?php require_once("connection.php"); ?>
    <!-- ab main chatahn k agar koe eidt par click kara to data update hn jana chayen us k leuy hidden input dallon ga -->








    <!-- start modal  when click the edit button  -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eidt_newsModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="eidt_newsModal" tabindex="-1" aria-labelledby="ediit_newsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ediit_newsModalLabel">Edits News List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./index.php" method="POST">
                        <input type="text" name="newsTitleEdit"  id="newsTitleEdit"  placeholder="Enter news title" required>
                        <textarea name="newsDescriptionEdit" id="newsDescriptionEdit"   placeholder="Enter news description" required></textarea>
                        <button type="submit" name="submit" value="sub">Update News List</button>
                        <input type="hidden" name="su">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class=" btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal  -->















    <!-- Start table -->
    <div class="container my-4">
        <h1 class="text-center fw-bold" style="color: white;">News List</h1>
        <table class="table" id="myTable_news">
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>News_title</th>
                    <th>News_description</th>
                    <th>Action</th> <!-- Column 3 -->
                </tr>
            </thead>
            <tbody>
                <?php
                $select_query = "SELECT * FROM news";
                $result = mysqli_query($conn, $select_query);
                $news_id = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $news_id++;
                    echo "
                    <tr> 
                       <td>" . $row['news_id'] . "</td>
                       <td>" . $row['news_title'] . "</td>
                       <td>" . $row['news_description'] . "</td>
                        <td>
                         <button class='edit_news_button  btn btn-sm btn-primary' id=" . $row['news_id'] . ">Edit</button> 
                       <button class='delete btn btn-sm btn-danger' id=" . $row['news_id'] . ">Delete</button>
                        </td> 
                    </tr>";
                }
                ?>
                <!-- es main hum ny edit button ko class di hian edit_news_button k name say  -->
            </tbody>
        </table>
    </div>
    <!-- End Table -->

    <!-- Initialize DataTable -->
    <script>
        $(document).ready(function () {
            $('#myTable_news').DataTable();
        });
    </script>




    <!-- es mian bhei hamray pas both js hian 
     1.click karnay par wo hamay show hnt hai button 
     2. ab main button ka parent main jao ga or us ka bhei parent main jao ga to mohjy td td mill jian guy or un ki values ko lain loga 
     3.jasay hi mohjay dono td millay guy main un dono ko lain lo ga mtlab news_title or news_description 
     4.jashay hi mohjy dono td mill jian guy to main un ko modal main dall dun gaa -->

    <script>
        edits_button = document.getElementsByClassName('edit_news_button');
        Array.from(edits_button).forEach((element) => {
            element.addEventListener("click" , (e)=>{
                console.log("Edit_button ",);
                tr =  e.target.parentNode.parentNode;
                title = tr.getElementsByTagName("td")[1].innerText;
                description = tr.getElementsByTagName("td")[2].innerText;
                console.log(title, description);
                //jo maray pass titile or description ki td value i hian ab main us ko form main id dian kay jo mara modal hian
                // us main dall dain guy tu wo us kay baraber hn jian gaa jab modal open hnga ab wo console.log ki bjain modal main 
                //open hnga
                newsTitleEdit.value  = title;
                newsDescriptionEdit.value =  description;
               // ab hum modal ko js kay throw or  jo modal m id di hngo wohi uahe lehkay guy
               //
               $('#eidt_newsModal').modal('toggle');
            })
        })


    </script>
</body>

</html>