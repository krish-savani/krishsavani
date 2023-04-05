<?php
    include("partials/_config.php");
        session_start();
        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: admin-login.php");
        exit;
    }
    // create query
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["create"])) {
            $image = $_POST["image"];
            $date = $_POST["date"];
            $title = $_POST["title"];
            $description = $_POST["description"];
            $link = $_POST["link"];
            if(!empty($image) && !empty($title) && !empty($description) && !empty($link) && !empty($date)) {
            $sql = "INSERT INTO `blog` (`blog_img`, `blog_date`, `blog_title`, `blog_description`, `blog_link`) VALUES ('$image', '$date' '$title', '$description', '$link')";
            $result = mysqli_query($conn, $sql);
            $insert = true;
            }
            else {
                echo '<script>alert("Enter required fields")</script>';
            }
        }
    }

    // update query 
    if (isset($_POST["update"])) {
        $id = $_POST["idEdit"];
        $image = $_POST["imageEdit"];
        $date = $_POST["dateEdit"];
        $title = $_POST["titleEdit"];
        $description = $_POST["descriptionEdit"];
        $link = $_POST["linkEdit"];

        $sql = "UPDATE `blog` SET `blog_img` = '$image', `blog_date` = '$date', `blog_title` = '$title', `blog_description` = '$description', `blog_link` = '$link' WHERE `blog`.`blog_id` = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $update = true;
        } else {
            echo "couldn't update the record successfully";
        }
    } 

    // delete query 
    if (isset($_GET["delete"])) {
        $sno = $_GET["delete"];
        $delete = true;
        $sql = "DELETE FROM `blog` WHERE `blog_id` = $sno";
        $result = mysqli_query($conn, $sql);
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-sca le=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>admin-blog</title>
    <?php
        include("partials/_common-link.php");
    ?>
</head>

<body>
    <?php
        include("admin-nav.php");
    ?>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content section-bg">
                <div class="modal-header">
                    <h5 class="text-white m-0" id="exampleModalLabel">Update Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="admin-blog.php" method="POST" class="admin-form">
                        <div class="modal-body">
                            <input type="hidden" name="idEdit" id="idEdit" value="1">
                            <div class="col-sm-12 shadow-hover border-radius-10">
                                <div class="outer-shadow border-radius-10 mb-3">
                                    <input class="inner-shadow h-100 section-bg form-control border-0 py-2 px-3 w-100 border-radius-10" type="text" placeholder="Image-name" id="imageEdit" name="imageEdit">
                                </div>
                            </div>
                            <div class="col-sm-12 shadow-hover border-radius-10">
                                <div class="outer-shadow border-radius-30 mb-3">
                                    <input class="inner-shadow h-100 section-bg form-control border-0 py-2 px-3 w-100 border-radius-10" type="text" placeholder="Title" id="titleEdit" name="titleEdit">
                                </div>
                            </div>
                            <div class="col-sm-12 shadow-hover border-radius-10">
                                <div class="outer-shadow border-radius-30 mb-3">
                                    <input class="inner-shadow h-100 section-bg form-control border-0 py-2 px-3 w-100 border-radius-10" type="text" placeholder="Description" id="descriptionEdit" name="descriptionEdit">
                                </div>
                            </div>
                            <div class="col-sm-12 shadow-hover border-radius-10">
                                <div class="outer-shadow border-radius-30 mb-3">
                                    <input class="inner-shadow h-100 section-bg form-control border-0 py-2 px-3 w-100 border-radius-10" type="text" placeholder="Link" id="linkEdit" name="linkEdit">
                                </div>
                            </div>
                            <div class="col-sm-12 shadow-hover border-radius-10">
                                <div class="outer-shadow border-radius-30 mb-3">
                                    <input class="inner-shadow h-100 section-bg form-control border-0 py-2 px-3 w-100 border-radius-10" type="text" placeholder="Date" id="dateEdit" name="dateEdit">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-block mr-auto">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="update" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="admin-blog section-bg py-5">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-6 mb-4">
                    <form action="admin-blog.php" method="POST" class="admin-form">
                        <div class="col-sm-12 shadow-hover border-radius-10 my-3">
                            <div class="outer-shadow border-radius-10">
                                <input class="inner-shadow h-100 section-bg form-control border-0 py-2 px-3 w-100 border-radius-10" type="text" placeholder="Image-name" id="image" name="image">
                            </div>
                        </div>
                        <div class="col-sm-12 shadow-hover border-radius-10 my-3">
                            <div class="outer-shadow border-radius-10">
                                <input class="inner-shadow h-100 section-bg form-control border-0 py-2 px-3 w-100 border-radius-10" type="text" placeholder="Date" id="date" name="date">
                            </div>
                        </div>
                        <div class="col-sm-12 shadow-hover border-radius-10 my-3">
                            <div class="outer-shadow border-radius-10">
                                <input class="inner-shadow h-100 section-bg form-control border-0 py-2 px-3 w-100 border-radius-10" type="text" placeholder="Title" id="title" name="title">
                            </div>
                        </div>
                        <div class="col-sm-12 shadow-hover border-radius-10 my-3">
                            <div class="outer-shadow border-radius-10">
                                <input class="inner-shadow h-100 section-bg form-control border-0 py-2 px-3 w-100 border-radius-10" type="text" placeholder="Description" id="description" name="description">
                            </div>
                        </div>
                        <div class="col-sm-12 shadow-hover border-radius-10 my-3">
                            <div class="outer-shadow border-radius-10">
                                <input class="inner-shadow h-100 section-bg form-control border-0 py-2 px-3 w-100 border-radius-10" type="text" placeholder="Link" id="link" name="link">
                            </div>
                        </div>
                        <div class="shadow-hover col-2">
                            <div class="outer-shadow border-radius-10">
                                <button type="submit" name="create" class='inner-shadow add-new px-4 py-3 section-bg border-radius-10 border-0 text-primary'>Add New</button> 
                            </div>
                        </div>
                    </form>
                        
                    </div>
                    <div class="col-12">
                        <table class="table text-white" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 $sql = "SELECT * FROM `blog`";
                                 $blog_result = mysqli_query($conn, $sql);
                                 $sno = 0;
                                    while ($row = mysqli_fetch_assoc($blog_result)) {
                                        $sno = $sno + 1;
                                        echo "<tr>
                                                <td>" . $sno . "</td> 
                                                <td>" . $row["blog_img"] . "</td>
                                                <td>" . $row["blog_date"] . "</td>
                                                <td>" . $row["blog_title"] . "</td> 
                                                <td>" . $row["blog_description"] . "</td>
                                                <td>" . $row["blog_link"] . "</td>
                                                <td>
                                                <button class='edit btn btn-sm btn-primary my-1' id=" . $row["blog_id"] . ">Edit</button> 
                                                <button class='delete btn btn-sm btn-primary' id=d" . $row["blog_id"] . ">Delete</button>  
                                                </td>
                                            </tr>";}
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="assets/Js/main.js"></script>
    <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
            tr = e.target.parentNode.parentNode;
            blog_id = tr.getElementsByTagName("td")[0].innerText;
            blog_img = tr.getElementsByTagName("td")[1].innerText;
            blog_date = tr.getElementsByTagName("td")[2].innerText;
            blog_title = tr.getElementsByTagName("td")[3].innerText;
            blog_description = tr.getElementsByTagName("td")[4].innerText;
            blog_link = tr.getElementsByTagName("td")[5].innerText;
            imageEdit.value = blog_img;
            dateEdit.value = blog_date;
            titleEdit.value = blog_title;
            descriptionEdit.value = blog_description;
            linkEdit.value = blog_link;
            idEdit.value = blog_id;
            console.log(blog_id)
            $('#editModal').modal('toggle');
        });
    });

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit ");
            sno = e.target.id.substr(1);

            if (confirm("Are you sure you want to delete this note!")) {
                console.log("yes");
                window.location = `admin-blog.php?delete=${sno}`;
            } else {
                console.log("no");
            }
        })
    })
    </script>
</body>

</html>