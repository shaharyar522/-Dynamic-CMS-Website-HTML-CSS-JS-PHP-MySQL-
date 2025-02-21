<?php 
require_once('connection.php'); // Database Connection

// Delete Marquee
if(isset($_GET['marquee_delete'])) {
    $delete_marquee = $_GET['marquee_delete'];
    $query = "DELETE FROM marquee WHERE marquee_id='$delete_marquee'";
    mysqli_query($conn, $query);
    header("Location:marquee_list.php"); 
    exit();
}

// Fetch Marquee Data
$query = "SELECT * FROM marquee";
$result = mysqli_query($conn, $query);
$marquee_items = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marquee List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    

    <div class="container mt-5">
        <h1 class="text-center fw-bold">Marquee List</h1>
        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th class="w-50">Marquee Text</th>
                    <th class="w-25">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marquee_items as $marquee): ?>
                <tr>
                    <td><?php echo htmlspecialchars($marquee['marquee_text']); ?></td>
                    <td class="text-center">
                        <a href="marquee_edit.php?marquee_id=<?php echo $marquee['marquee_id']; ?>" class="btn btn-success">Edit</a>
                        <a href="?marquee_delete=<?php echo $marquee['marquee_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this marquee?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


</body>
</html>
