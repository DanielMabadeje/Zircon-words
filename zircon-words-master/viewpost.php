<?php
include 'header.php';

$id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id=$id ";
$result = $conn->query($sql);
$student = $result->fetchAll(PDO::FETCH_ASSOC);
foreach ($student as $key => $row) {
    $key = $key + 1;
    $title = $row['title'];
    $content = $row['content'];
    $user = $row['username'];
    $image = $row['image'];
    $id = $row['id']; ?>
<div class="col-md-12 card" style="width:100%;" >
<img src="<?php echo $image; ?>" style="width: 100px; height:100px; border-radius:50%;"  class="card-img-top " alt="...">
<div class="card-body">
<h1><?php echo $title; ?></h1>
<p><?php echo $content; ?></p>
</div>
</div>
<?php
}
?>