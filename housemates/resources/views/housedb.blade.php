<!DOCTYPE html>
<html>
    <head>
        <title>Housemates</title>
    </head>
    <body>
        <?php
            if(DB::connection()->getPDO()) {
                echo "Successfully connected to database => "
                    .DB::connection()->getDatabaseName();
            }
        ?>
    </body>
</html>