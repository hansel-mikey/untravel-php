<?php 
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: ../login.php");
}
include 'header.php';
include '../database.php';
// print_r($_POST);
if(isset($_POST['title']) && isset($_POST['content'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "INSERT INTO blog (title, content) VALUES ('$title', '$content')";
    $data = $mysqli->query($sql);
    if ($data) {
        header("Location: blog.php");
    }else{
        echo "Error:".$mysqli->error;
    }
}
?>
<style>
   
</style>
<h2 class="text-center mb-1">Create a blog</h2>
<div class="text-center box shadow p-3 bg-body rounded d-flex justify-content-center">

    <form style="width: 26rem;" method="post" action="">
  
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form4Example1" name="title" class="form-control" />
    <label class="form-label" for="form4Example1">Title for the post</label>
  </div>

  

  <!-- Message input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <textarea class="form-control" name="content" id="form4Example3" rows="4"></textarea>
    <label class="form-label"  for="form4Example3">Post Content</label>
  </div>

   
  

 
  <button data-mdb-ripple-init type="button submit" class="btn btn-secondary btn-block mb-4">Create Post</button>
</form>
</div>