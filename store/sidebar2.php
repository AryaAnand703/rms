<?php
$query = mysqli_query($connect, "SELECT * FROM reasult");
while ($row = mysqli_fetch_array($query)) {
    $id = $row["id"];
    $name = $row['name'];
    $roll = $row['roll'];

    ?>

    <body>
        </div class="flex justify-center items-center ">
        <table>
            <td>
                <a href="detailview.php?id=<?php echo $row['id'] ?>"
                    class=" flex items-center justify-center"><?php echo $name; ?></a>
            </td>
            <td>
                <a href="detailview.php?id=<?php echo $row['id'] ?>"
                    class="  flex items-center justify-center"><?php echo $roll; ?></a>
            </td>
        </table><?php
}
?>
    </div>
</body>