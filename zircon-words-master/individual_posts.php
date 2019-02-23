
<?php
include 'header.php';
?>

<head>

    <title>Individual Posts</title>
</head>

<body>

<div class="container justify-content-center row">
    <?php 

$sql = 'SELECT * FROM posts';
$result = $conn->query($sql);
$student = $result->fetchAll(PDO::FETCH_ASSOC);
foreach ($student as $key => $row) {
    $key = $key + 1;
    $title = $row['title'];
    $content = $row['content'];
    $user = $row['username'];
    $image = $row['image'];
    $id = $row['id']; ?>

        <div class="card  pl-3 pr-3 mr-3  col-md-5">
            <img src="<?php echo $image; ?>" style="width: 100px; height:100px; border-radius:50%;"  class="card-img-top " alt="...">
            <div class="card-body col-md-6">
                <h5 class=" text-left cT card-title"><?php echo $title; ?></h5>
                <p><?php echo $content; ?></p>
                <a href="viewpost.php?id=<?php echo $id; ?>" class="btn btn-outline-primary">View More</a>
                <br>
                <a>By <?php echo $user; ?></a>
          </div>
        </div>

        <?php
}
?>
    </div>


    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>