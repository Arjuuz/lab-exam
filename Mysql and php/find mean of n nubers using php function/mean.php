<html>
    <body>
        <form method="post">
            Enter the number (seperated by commas):<input type="text" name="num" placeholder="eg:23,34,45,45"><br><br>
            <input type="submit" name="btn" value="submit">
        </form>
    </body>
</html>
<?php
    if(isset($_REQUEST['btn']))
    {
        $num=$_REQUEST['num'];
        function calculate_Mean($num){
            $ar=explode(',',$num);
            $sum=0;
            $len=count($ar);
            foreach ($ar as $numbers)
            {
                $sum+=(float)$numbers;
    
            }
            $mean=$sum/$len;
            return $mean;

        }
        $final=calculate_Mean($num);
        echo "mean of the numbers = $final";

    }

?>