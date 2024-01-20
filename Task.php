<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div id="timer-content">
        Осталось времени <span id="seconds">120</span> секунд
    </div>

    <?php
    $var1 = 10;
    $var2 = 1;
    $var3 = 2;
    $var4 = 3;
    $var5 = 4;
    $var6 = 5;



    function random($min, $max)
    {
        return mt_rand($min, $max);
    }



    function get2SS($len)
    {
        $str = "";
        for ($i = 0; $i < $len; $i++) {
            if ($i == 0) $str .= 1;
            else $str .= random(0, 1);
        }
        return $str;
    }

    function imgSize($len1)
    {
        for ($i = 1; $i <= 2; $i++) {
            if ($i == 1) return $len1;
            else return $len1;
        }
    }

    $randomElementsArray = array('16', '128', '256');

    function randColor($randomElementsArray)
    {
        return $randomElementsArray[array_rand($randomElementsArray)];
    }

    $poem = [
        '<pre>Я вас любил: любовь еще, быть может,
В душе моей угасла не совсем;
Но пусть она вас больше не тревожит;
Я не хочу печалить вас ничем.
Я вас любил безмолвно, безнадежно,
То робостью, то ревностью томим;
Я вас любил так искренно, так нежно,
Как дай вам Бог любимой быть другим.</pre>',

        '<pre>Сижу за решеткой в темнице сырой.
Вскормленный в неволе орел молодой,
Мой грустный товарищ, махая крылом,
Кровавую пищу клюет под окном,
Клюет, и бросает, и смотрит в окно,
Как будто со мною задумал одно.
Зовет меня взглядом и криком своим
И вымолвить хочет: «Давай улетим!
Мы вольные птицы; пора, брат, пора!
Туда, где за тучей белеет гора,
Туда, где синеют морские края,
Туда, где гуляем лишь ветер… да я!..»</pre>',

        '<pre>Уж небо осенью дышало,
Уж реже солнышко блистало,
Короче становился день,
Лесов таинственная сень
С печальным шумом обнажалась,
Ложился на поля туман,
Гусей крикливых караван
Тянулся к югу: приближалась
Довольно скучная пора;
Стоял ноябрь уж у двора.</pre>',

        '<pre>В тот год осенняя погода
Стояла долго на дворе,
Зимы ждала, ждала природа.
Снег выпал только в январе
На третье в ночь. Проснувшись рано,
В окно увидела Татьяна
Поутру побелевший двор,
Куртины, кровли и забор,
На стеклах легкие узоры,
Деревья в зимнем серебре,
Сорок веселых на дворе
И мягко устланные горы
Зимы блистательным ковром.
Все ярко, все бело кругом.</pre>'
    ];

    function randPoem($poem)
    {
        return $poem[array_rand($poem)];
    }

    $letter = array(
        'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р',
        'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'
    );

    function randletter($letter)
    {
        return $letter[array_rand($letter)];
    }
    $tasks = [
        "Необходимо перевести значение $var1 из двоичной в десятичную систему исчисления. В качестве ответа указать число.",
        "Какой минимальный объем памяти нужно зарезервировать, чтобы можно было сохранить любое растроое изображение размером $var2 x $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов?",
        "Напишите колличество вхождений символа $var5 в следующем тексте <pre>
    Я вас любил: любовь еще, быть может,
    В душе моей угасла не совсем;
    Но пусть она вас больше не тревожит;
    Я не хочу печалить вас ничем.
    Я вас любил безмолвно, безнадежно,
    То робостью, то ревностью томим;
    Я вас любил так искренно, так нежно,
    Как дай вам Бог любимой быть другим.
    </pre> Записать число вхождений $var6"
    ];

    $colors = ['16', '128', '256'];
    $key = array_rand($colors);


    function logNum($var2, $var3, $var4)
    {

        $logI = log($var4, 2);
        $bit = $var2 * $var3 * $logI;
        return $kbite = floor($bit / (8 * 1024));
    };

    function letterInPoem($var5, $var6)
    {
        $randomLetter = mb_strtolower(strval($var5));
        $lettersArray = mb_str_split(mb_strtolower($var6));
        $count = 0;

        foreach ($lettersArray as $letter) {
            if ($letter === $randomLetter) {
                $count++;
            }
        }
        return $count;
    }

    ?>
    <form method="get">
        <?php



        for ($i = 0; $i < 4; $i++) {
            switch ($_GET['task']) {

                case 0:
                    $var1 = get2SS(random(2, 5));
                    echo "<p>Необходимо перевести значение $var1 из двоичной в десятичную систему исчисления    . В качестве ответа указать число.</p>";
                    $result = base_convert(strval($var1), 2, 10);
                    // echo $result;
                    echo "<label>Ответ:</label><input type='number' id='ans_user$i' name='ans_user$i'> <br>";
                    echo "<input type='hidden' id='ans$i' value='$result'>";
                    echo "<p id='val$i'></p>";
                    break;

                case 1:
                    $var2 = imgSize(random(128, 256));
                    $var3 = imgSize(random(128, 256));
                    $var4 = randColor($randomElementsArray);

                    echo "<p>Какой минимальный объем памяти нужно зарезервировать, чтобы можно было сохранить любое растроое изображение размером $var2 x $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов?</p>";
                    echo "<label>Ответ:</label><input type='number' id='ans_user$i' name='ans_user$i'> <br>";
                    echo "<input type='hidden' id='ans$i' value= '" . logNum($var2, $var3, $var4) . "'>";

                    echo "<p id='val$i'></p>";

                    break;


                case 2:
                    $var5 = randletter($letter);
                    $var6 = randPoem($poem);
                    echo "<p>Напишите колличество вхождений символа $var5 в следующем тексте <pre> 
                    $var6 
                    </pre> Записать число вхождений $var5</p>";
                    echo "<label>Ответ:</label><input type='number' id='ans_user$i' name='ans_user$i'>   <br>";
                    echo "<input type='hidden' id='ans$i' value= '" . letterInPoem($var5, $var6) . "'>";
                    echo "<p id='val$i'></p>";
                    break;
            }
        }

        // echo "<button>Отправить</button>"; 
        echo "<input type='button' value='Отправить' id='btn'> ";
        ?>

    </form>





    <script>
        var seconds = 120;
        var intervalId = setInterval(function() {
            document.getElementById("seconds").innerHTML = seconds;
            if (seconds == 0) {
                clearInterval(intervalId);
                alert("время вышло");
            } else {
                seconds--;
            }
        }, 1000);


        let btn = document.getElementById("btn");

        btn.addEventListener("click", () => {
            clearInterval(intervalId);

            for (let i = 0; i < 4; i++) {
                let ans = document.getElementById(`ans${i}`).value;
                let ans_user = document.getElementById(`ans_user${i}`).value;
                console.log(ans);
                console.log(ans_user);
                document.getElementById(`val${i}`).innerText = `Правильный ответ: ${ans}`;

                if (ans == ans_user) {
                    document.getElementById(`ans_user${i}`).style.color = 'green';
                } else {
                    document.getElementById(`ans_user${i}`).style.color = 'red';
                }
            }
        })
    </script>



</body>

</html>