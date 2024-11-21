<?php 

include 'header.php';
session_start();
$email = $_SESSION['user_email'];

include '../database.php';

$check = "SELECT levl FROM user WHERE email = '$email'";
$datas = mysqli_query($mysqli, $check);
$datad = mysqli_fetch_assoc($datas);

if($datad['levl']==true){
    
    
} else{
    header("Location: ../desktop.php");
}


$sql = "SELECT * FROM bookings";
$result = mysqli_query($mysqli, $sql);
$data = mysqli_fetch_assoc($result);

if(isset($_POST['disable'])){

    $sql = "UPDATE status SET data = false where id=2";
    $result = mysqli_query($mysqli, $sql);
    if($result){
        header("Location: ../desktop.php");
    }

}

if(isset($_POST['enable'])){

    $sql = "UPDATE status SET data = true where id=2";
    $result = mysqli_query($mysqli, $sql);
    if($result){
        header("Location: index.php");
    }
}

 
?>

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-4 mb-3">Admin Dashboard</h3>
                        <form action="" method="post">
                            <button type="submit" class="btn btn-danger" name="disable">Disable the Booking</button>
                        </form>
                        <form action="" method="post">
                            <button type="submit" class="btn btn-success" name="enable">Enable the booking</button>
                        </form>
                        <div class="row">
                            
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="highlight">
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Check-In</th>
                                            <th scope="col">Check-Out</th>
                                            <th scope="col">Rooms</th>
                                            <th scope="col">Adults</th>
                                            <th scope="col">Childrens</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         
                                        <?php foreach($result as $row): ?>
                                            <tr>
                                                 
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td><?= $row['date_in'] ?></td>
                                                <td><?= $row['date_out'] ?></td>
                                                <td><?= $row['room_type'] ?></td>
                                                <td><?= $row['adults'] ?></td>
                                                <td><?= $row['children'] ?></td>
                                            </tr>
                                        <?php endforeach ?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start ">
                            
                        </div>
                       
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>