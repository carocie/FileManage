<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document DL</title>
</head>
    <body>
        <div>
            <ul>
                <?php 
                    foreach(glob('dl_files/*') as $file){
                        if(is_file($file)){
                            echo "<li><a href='./";
                            echo htmlspecialchars($file);
                            echo "'>";
                            echo preg_replace ("/^.*\//","",htmlspecialchars($file));
                            echo "</a></li>";
                        }
                    }
                ?>
            </ul>
        </div>
    </body>
</html>