<?php
require_once('connection.php'); // Database Connection
// Delete News
if (isset($_GET['news_delete'])) {
    $delete_news = $_GET['news_delete'];
    $query = "DELETE FROM news WHERE news_id='$delete_news'";
    $result =    mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
        window.location.href = 'index.php?show=news';
    </script>";
        exit();
    }
}
// Fetch News Data
$query = "SELECT * FROM news";
$result = mysqli_query($conn, $query);
$news_items = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News List</title>
    <!-- jQuery پہلے لوڈ کریں -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables کا CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">

    <!-- DataTables کا JavaScript -->
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
</head>

<body>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edits This Notes</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="titleEdit" id="titleEdit" placeholder="Enter Your Title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="descriptionEdit" id="descriptionEdit" placeholder="Enter Your Descripiton" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="sub">Updatd</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>





    <div class="container mt-5">
        <h1 class="text-center fw-bold">News List</h1>
        <table id="myTable" class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>News Title</th>
                    <th>News Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($news_items as $news): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($news['news_title']); ?></td>
                        <td><?php echo htmlspecialchars($news['news_description']); ?></td>
                        <td class="text-center">
                            <button class="edit btn btn-sm btn-primary">Edit</button>
                            <a href="?news_delete=<?php echo $news['news_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this news?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- edit button js -->
    <script>
        edits = document.getElementsByClassName("edit");
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit", );
                tr = e.target.parentNode.parentNode;
                news_title = tr.getElementsByTagName("td")[0].innerText;
                news_description = tr.getElementsByTagName("td")[1].innerText;
                console.log(news_title, news_description);
                newsTitleEdit.value = news_title;
                newsDescriptionEdit.value = news_description;
                var myModal = new bootstrap.Modal(document.getElementById('editModal'));
                myModal.show();
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>

</body>

</html>