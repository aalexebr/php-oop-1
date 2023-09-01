<?php
require_once __DIR__ . './createMovies.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP OOP 1</title>
</head>
<body>
    <header></header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>
                        title
                    </th>
                    <th>
                        director
                    </th>
                    <th>
                        year
                    </th>
                    <th>
                        genres
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($newMovies as $movie){
                ?>
                    <tr>
                        <?php
                            foreach($movie as $key => $value){
                        ?>
                            <td>
                                <?php
                                if(is_array($value)){
                                    // var_dump($value);
                                    foreach($value as $x){
                                        echo $x, '<br>';
                                    }
                                }
                                else{
                                  echo $value;
                                }
                                ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>
</html>
