<?php
       include '../inc/validtaion.php';
       include '../inc/header.php';

// CREATE (INSERT)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $price = $_POST['price'];
    $deadline = $_POST['deadline'];
    $message = $_POST['message'];
    $projectID = $_POST['projectID'];

    $sql = "INSERT INTO Job (price, deadline, message, Project_ID) VALUES ('$price', '$deadline', '$message', '$projectID')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Job added successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// READ (SELECT)
$sql = "SELECT * FROM Job";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Price: " . $row['price'] . " | Deadline: " . $row['deadline'] . " | Message: " . $row['message'] . "<br>";
    }
} else {
    echo "No jobs found.";
}

// UPDATE
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $jobID = $_POST['jobID'];
    $newPrice = $_POST['newPrice'];
    $newDeadline = $_POST['newDeadline'];
    $newMessage = $_POST['newMessage'];

    $sql = "UPDATE Job SET price='$newPrice', deadline='$newDeadline', message='$newMessage' WHERE Job_ID='$jobID'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Job updated successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// DELETE
if (isset($_GET['delete']) && $_GET['delete'] == 1) {
    $jobID = $_GET['jobID'];

    $sql = "DELETE FROM Job WHERE Job_ID='$jobID'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Job deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!-- Form HTML for creating a new Job -->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <!-- ... (input fields for creating a job) -->
    <button type="submit" name="submit">Add Job</button>
</form>

<!-- Form HTML for updating an existing Job -->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <!-- ... (input fields for updating a job) -->
    <button type="submit" name="update">Update Job</button>
</form>

<!-- Link to delete a Job -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?delete=1&jobID=1">Delete Job</a>
