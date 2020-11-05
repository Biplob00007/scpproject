<?php

include 'db.php';

$action = $_GET['action'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SCP Web App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <div class="container">
        <?php

        if ($action == "add") {
            echo "<div class=\"alert alert-success\" role=\"alert\">
            An item added successfully.
          </div>";
        } elseif ($action == "delete") {
            echo "<div class=\"alert alert-info\" role=\"alert\">
            An item deleted successfully.
          </div>";
        }

        ?>
        <div class="jumbotron">
            <h1>SCP Web App</h1>
        </div>
        <main>
            <div class="controls">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRecord">
                    Add New
                </button>
            </div>
            <?php
            $result = $conn->query("SELECT id, title FROM Articles");
            if ($result->num_rows > 0) {
                echo "<ol>";
                while ($row = $result->fetch_assoc()) {
                    echo "<li><a href=\"./article.php?id=" . $row['id'] . "\">" . $row['title'] . "</a></li>";
                }
                echo "</ol>";
            } else {
                echo "No results";
            }
            $conn->close();
            ?>
        </main>
    </div>
    <div class="modal fade" id="addRecord" tabindex="-1" role="dialog" aria-labelledby="addNewRecord" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewRecord">Add New SCP Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addnewrecordform" action="./addRecord.php" method="POST">
                        <div class="form-group">
                            <label for="id">SCP ID</label>
                            <input type="text" id="id" name="id" class="form-control" aria-describedby="SCP-ID" required aria-required>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" aria-describedby="SCP-Title" required aria-required>
                        </div>
                        <div class="form-group">
                            <label for="class">Class</label>
                            <input type="text" id="class" name="class" class="form-control" aria-describedby="SCP-Class">
                        </div>
                        <div class="form-group">
                            <label for="spc">Special Containment Procedure</label>
                            <textarea id="spc" name="spc" class="form-control" aria-describedby="SCP-ID"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea id="desc" name="desc" class="form-control" aria-describedby="SCP-ID"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./handleArticles.js"></script>
</body>

</html>