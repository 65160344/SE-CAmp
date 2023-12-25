<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <p>
    <h1>
        <?php 
        $multiply_x = 2;
        echo "ตารางแม่สตรคูณ $multiply_x ";
        ?>
    </h1>
        <div>
            <?php
            for($i = 1; $i <= 24 ;$i++){
                ?>
                <?php echo "$multiply_x X $i =";?>
                <?php echo $i*$multiply_x;?>
                <?php echo "<br>";
            }?>
        </div>
    </p>
        <style>
            h1{
                margin-top: 0px;
                margin-bottom: 10px;
                text-align: center;
                background: linear-gradient(#e66465, #9198e5);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            div{
                background: linear-gradient(#e66465, #9198e5);
                background-color: light;
                width: 200px;
                height: 430px;
                border: 1px solid black;
                overflow-y: auto;
                text-align: center;
                margin: 0 auto;
                margin-top: 50px;
            }
        </style>
</body>

</html>