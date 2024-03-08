<?php

include "../../php/database/connection.php";

$query = "SELECT * FROM users WHERE USER_ID = '" . $_SESSION['USER_ID'] . "'";
$result = mysqli_query($connection, $query);
$currrnt_user = mysqli_fetch_assoc($result);

$info = ["Username", "Phone Number", "Email", "Password"];

echo "<div class='user-profile'>";
echo "<p>" . $info[0] . "</p>";
echo "<p>" . $currrnt_user["USER_NAME"] . "</p>";
echo "<p>" . $info[1] . "</p>";
echo "<p>" . $currrnt_user["USER_PHONE_NUMBER"] . "</p>";
echo "<p>" . $info[2] . "</p>";
echo "<p>" . $currrnt_user["USER_EMAIL"] . "</p>";
echo "<p>" . $info[3] . "</p>";
echo "<p>" . $currrnt_user["USER_PASSWORD"] . "</p>";
echo "</div>";
