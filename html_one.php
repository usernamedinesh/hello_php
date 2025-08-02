<!-- for serving html just just  -->
<!-- php -S localhsot:8000 -->

<html>
    <head> 
        <title>php static </title>
    </head> 
    <body>
        <?php
            /* $arr = ["HTML","C++","PHP","RUST","LUA","GO"]; */
            $arr = array("HTML","C++","PHP","RUST","LUA","GO");
        $user = [
            "name" => "Ram",
            "age" => 24,
            "gender" => "male",
            "country" => "india"
        ]
        ?>
        <h1> Programing languages </h1>
        <ul>
                <?php
                for( $i = 0; $i<count($arr); $i++) 
                {
                    echo "<li>".$arr[$i]."</li>";
                }
                ?>
        </ul>
        <h1>User Details : </h1>
        <ul>
            <?php
            foreach($user as $key => $value) 
            {
            echo "<li>" . $key . " : " . $value ."</li>";
            }
            ?>
        </ul>
        <body>
</html>
