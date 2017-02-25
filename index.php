<?php
ini_set('display_errors', 1);

require_once 'lib/db_connect.php';

?>


<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Desc</th>
        <th>Reference</th>
    </thead>
    <tbody>
    <?php
        $query = mysqli_query($connect, "SELECT * FROM posts");

        while ($post = mysqli_fetch_object($query)){
            echo '<tr>';
                echo '<td>', $post->id,'</td>';
                echo '<td>', $post->title,'</td>';
                echo '<td>', $post->description,'</td>';
                'echo '<td>', "<a href='/show.php?id=$post'>Read...,</a>",'</td>';
            echo '</tr>';
        }
    ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </tbody>

</table>
</body>
</html>





