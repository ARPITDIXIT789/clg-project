<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
    header("Location: ../admin-login.html");
}
?>

<h2>Admin Dashboard</h2>

<a href="../index.html">Home</a> |
<a href="logout.php">Logout</a>

<h3>All Submitted Papers</h3>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Title</th>
<th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM submissions");

while($row = mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['title']."</td>";
echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";
echo "</tr>";
}
?>
</table>