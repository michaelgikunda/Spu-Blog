<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'spublog');

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// delete post if delete request submitted
if (isset($_POST['delete'])) {
  $id = $_POST['delete'];
  $sql = "DELETE FROM blog WHERE title='$id'";
  mysqli_query($conn, $sql);
}

// update post if edit request submitted
if (isset($_POST['edit'])) {
  $Title = $_POST['edit'];

  header('delete.php');
  if (isset($_POST['submit'])){
    $Titles = $_POST['titles'];
    $Contents = $_POST['contents'];
    $sql = "UPDATE blog SET title='$Titles', content='$Contents' WHERE title='$Title'";
    mysqli_query($conn, $sql);
  }

}

// get all blog posts from database
$sql = "SELECT * FROM blog";
$result = mysqli_query($conn, $sql);

?>
<link rel="stylesheet" href="../css/tables.css">

<table bordercolor="black">
<thead>
<tr bgcolor="black">
<th id="thead">Title</th>
<th id="thead">Content</th>
<th id="thead">Image</th>
<th id="thead">Action</th>
</tr>
</thead>
<tbody>
<?php while ($row = mysqli_fetch_assoc($result)) : ?>
<tr>
<td id="tbody"><?php echo $row['title']; ?></td>
<td id="tbody"><?php echo $row['content']; ?></td>
<td id="tbody"><img style="width:40px;height:40px;" src="../images/<?php echo $row['image']; ?>" alt=""></td>
<td id="tbody">
  <form method="post">
    <input type="hidden" name="edit" value="<?php echo $row['title']; ?>">
    <button type="submit">Edit</button>
  </form>
</td>
<td>
<form method="post">
    <input type="hidden" name="delete" value="<?php echo $row['title']; ?>">
    <button type="submit">Delete</button>
  </form>
</td>
</tr>
<?php endwhile; ?>
</tbody>
</table>

<?php
// close database connection
mysqli_close($conn);
?>
