<html>
    <head>
        <meta charset="utf-8">
    </head>
<body>
    <p>
        <?php$multiply_x = 2;
        echo"<h1>ตารางสูตรคูณแม่ $multiply_x </h1>";?>
            <div>
                <?php
                $i = 1;

                while ($i <= 24){
                    echo "$multiply_x X $i =";
                    echo $i*$multiply_x;
                    echo "br"
                    $i++;
                }?>
            </div>
    </p>
    <style>
        h1{
            margin-top: 0px;
            margin-bottom: 10px;
            font-family: sans-serif;
            background: linear-gradient(to right, #ef5350,#f48fb1, #7e57c2, #2196f3, #26c6da, #43a047, #eeff41, #f9a825, #ff5722);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    
</body>

</html>
