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
            <p>
                <?php
                    file_put_contents("./log.txt", "\r\n", FILE_APPEND | LOCK_EX);
                    file_put_contents("./log.txt", print_r($_FILES,true), FILE_APPEND | LOCK_EX);
                    if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
                      $filepath = mb_convert_encoding("up_files/" . $_FILES["upfile"]["name"],"SJIS","AUTO");
                      if (move_uploaded_file($_FILES["upfile"]["tmp_name"], $filepath)) {
                        chmod($filepath, 0644);
                        echo $_FILES["upfile"]["name"] . "をアップロードしました。";
                      } else {
                        echo "ファイルをアップロードできません。";
                      }
                    } else {
                      echo "ファイルが選択されていません。";
                    }
                ?>
            </p>
        </div>
    </body>
</html>