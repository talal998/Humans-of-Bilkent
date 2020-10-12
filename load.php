

<?php 

require "db.php";


if ($_SESSION['related']){
    $searchTerms = explode(' ', $_SESSION['related']);
    $searchTermBits = "";
    foreach ($searchTerms as $term) {
        if (!empty($term)) {
            $searchTermBits .=   " +$term";
        }
    }
    $sql = "SELECT * FROM story WHERE Match(tags) Against ('". $searchTermBits. " IN BOOLEAN MODE') 
    AND (id <>". $_SESSION['id']. ") LIMIT 6";
    // var_dump($sql);
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    $data = [];
    while ($row = $result->fetch_assoc()) {
    $data[] = $row;
    }
    $result = $data; 
    //$result = mysqli_fetch_all($result,MYSQLI_ASSOC);


}
else{
    $sql = "SELECT * FROM story ORDER BY created DESC" ;  // fixed query

    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    $data = [];
    while ($row = $result->fetch_assoc()) {
    $data[] = $row;
    }
    $result = $data; 
    //$result = mysqli_fetch_all($result,MYSQLI_ASSOC);
}
    ?>


<div id="stories">
    <tr>
        <?php
            foreach ($result as $res){
        ?>
        <td>
            <img class="ys" src=<?=$res['picture']  ?> onclick="window.open('story.php?id=<?=$res['id']?>')" style="cursor: pointer;" alt="">
        </td>
        <?php
            }
        ?>
    </tr>



</div>
