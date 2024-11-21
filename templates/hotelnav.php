<?php
// Ensure no output is sent before session start
if (!headers_sent() && session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <!-- There is style used in the  me means margin end fw means font weight finall addingt he class to change the font style -->
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="desktop.php">Untravel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!-- Changing the margin end to 2  -->
                    <a class="nav-link active me-2" aria-current="page" href="hotel.php">Home</a>
                </li>
                <li class="nav-item">
                    <!-- Changing the margin end to 2  -->
                    <a class="nav-link me-2" href="blogpage.php">About us</a>
                </li>
                <li class="nav-item">
                    <!-- Changing the margin end to 2  -->
                    <a class="nav-link me-2" href="rooms.php">Book Rooms</a>
                </li>

                <li class="nav-item">
                    <!-- Changing the margin end to 2  -->
                    <a class="nav-link me-2" href="your_rooms.php">Your Rooms</a>
                </li>

                <li class="nav-item">
                    <!-- Changing the margin end to 2  -->
                    <a class="nav-link me-2" href="Contactus.php">Contact us</a>
                </li>
            </ul>
            <!-- this is used for the login functionality  -->
            <?php
            // Check if the user is logged in
            if (isset($_SESSION['user_name'])) {
                // If logged in, display the user's name and a sign-out button
                echo '<a href="profile.php" class="profile-link">';
                echo '<img src="boy.png" class="profile-img" alt="Profile Image">'; // Added alt attribute for accessibility
                echo '<span class="profile-name">' . $_SESSION['user_name'] . '</span></a>';
                echo '<a href="logout.php">Sign Out</a>'; // Link to log out
            } else {
                // If not logged in, display the sign-in button
                echo '<a href="login.php">Sign In</a>';
            }
            ?>
        </div>
    </div>
</nav>
