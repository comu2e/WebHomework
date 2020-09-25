<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FizzBuzz</title>
</head>
<body>

<div >

    </form>

    <form action="index.php" method="post">
        <p><?php  echo "FizzNum:"?> <input type="text" name="fizznum"placeholder="整数値を入力してください"></p>
        <p><?php  echo "BuzzNum:"?> <input type="text" name="buzznum"placeholder="整数値を入力してください"></p>

        <button type="submit" name="execute">実行</button>

    </form>
    <p>【出力】</p>
    <p> <?php
        #fizznum、bizznumformに値が入力されているときの処理
        #メインの処理
        if (isset($_POST['fizznum'])&& isset($_POST['buzznum']))
        {
            #formの値を入れておく
            $fizzNum = $_POST['fizznum'];
            $buzzNum = $_POST['buzznum'];
            #formに入力された値は数字(integer)か、それ以外かを判別する。

            #正規表現で数字を抜き出す。
            if (preg_match('/^[0-9]+$/',$fizzNum)&&preg_match('/^[0-9]+$/',$buzzNum)){
                #FizzBuzzの実装
                for ($i=1;$i<100;$i++){
                #iがfizzNumの倍数のとき
                    if ($i%$fizzNum==0){
                        echo 'Fizz';
                        echo $i;
                        echo "<br>";
                        }
                    #iがbuzzNumの倍数のとき
                    else if ($i%$buzzNum==0){
                        echo 'Buzz';
                        echo $i;
                        echo "<br>";
                    }
                    #iがfizznum*buzzNumの倍数のとき
                    else if ($i%$fizzNum*$buzzNum==0){
                        echo 'FizzBuzz';
                        echo $i;
                        echo "<br>";
                    }
                }
            }
            #formに整数値が入力されなかったとき
            else{
                echo '整数値を入力して下さい';
            }

        }
        #fizznum,bizznumに値が入力されていないときの処理
        #入力されていないときは何もしない
        else{
        }
            ?></p>
</div>


</body>
</html>