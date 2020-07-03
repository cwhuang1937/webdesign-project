<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Here is your result</title>
        <style>
            #head_img {
                position: absolute;
                width: 85%;
                left: 12%;
                top: 30px;
                z-index: -1;
            }
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
        // class[0] => action, class[1] => love, class[2] => plot, 
        // class[3] => fantacy, class[4] => horror, class[5] => comedy
            for ($i=0; $i < 6; $i++)
                $class[$i] = 0;
                        
            $q1_str_arr = str_split($_REQUEST['q1']);
            $q2_str_arr = str_split($_REQUEST['q2']);
            $q3_str_arr = str_split($_REQUEST['q3']);
            $q4_str_arr = str_split($_REQUEST['q4']);
            
            for ($i=0; $i < 6; $i++)
                $class[$i] = $class[$i] + $q1_str_arr[$i] + $q2_str_arr[$i] + $q3_str_arr[$i] + $q4_str_arr[$i];


            $index = 0;  //Find the most_score item
            $the_most = $class[$index];
            for ($i=1; $i <= 5; $i++){
                if($class[$i] >= $the_most){
                    $the_most = $class[$i];
                    $index = $i;
                }
            }
            switch ($index) {
                case 0:
                    find_action();
                    break;
                case 1:
                    find_love();
                    break;
                case 2:
                    find_plot();
                    break;
                case 3:
                    find_fantacy();
                    break;
                case 4:
                    find_horror();
                    break;
                case 5:
                    find_comedy();
                    break;
                default:
                    break;
            }
            function find_action(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在電影分類中推薦您觀看動作片。如以下這一部電影';
                $rand_index = rand(1,6);
                switch ($rand_index) {
                    case 1:
                        $result_name = '復仇者聯盟3';
                        $result_url = 'https://www.imdb.com/title/tt4154756/';
                        $result_img = './image/Action1.jpg';
                        break;
                    case 2:
                        $result_name = '凌凌漆';
                        $result_url = 'https://www.imdb.com/title/tt0109962/';
                        $result_img = './image/Action2.jpg';
                        break;
                    case 3:
                        $result_name = '玩命關頭7';
                        $result_url = 'https://www.imdb.com/title/tt2820852/';
                        $result_img = './image/Action3.jpg';
                        break;
                    case 4:
                        $result_name = '死侍2';
                        $result_url = 'https://www.imdb.com/title/tt5463162/';
                        $result_img = './image/Action4.jpg';
                        break;
                    case 5:
                        $result_name = '鷹眼';
                        $result_url = 'https://www.imdb.com/title/tt1059786/';
                        $result_img = './image/Action5.jpg';
                        break;
                    case 6:
                        $result_name = '駭客任務';
                        $result_url = 'https://www.imdb.com/title/tt0234215/';
                        $result_img = './image/Action6.jpg';
                        break;
                    default:
                        break;
                }
            }
            function find_love(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在電影分類中推薦您觀看愛情片。如以下這一部電影';
                $rand_index = rand(1,9);
                switch ($rand_index) {
                    case 1:
                        $result_name = '格雷的50道陰影';
                        $result_url = 'https://www.imdb.com/title/tt4465564/?ref_=fn_al_tt_1';
                        $result_img = './image/Love1.jpg';
                        break;
                    case 2:
                        $result_name = '時空旅人之妻';
                        $result_url = 'https://www.imdb.com/title/tt0452694/';
                        $result_img = './image/Love2.jpg';
                        break;
                    case 3:
                        $result_name = '真愛挑日子';
                        $result_url = 'https://www.imdb.com/title/tt1563738/';
                        $result_img = './image/Love3.jpg';
                        break;
                    case 4:
                        $result_name = '六弄咖啡館';
                        $result_url = 'https://www.imdb.com/title/tt5827496/';
                        $result_img = './image/Love4.jpg';
                        break;
                    case 5:
                        $result_name = '那些年';
                        $result_url = 'https://www.imdb.com/title/tt2036416/';
                        $result_img = './image/Love5.jpg';
                        break;
                    case 6:
                        $result_name = '我就要你好好的';
                        $result_url = 'https://www.imdb.com/title/tt2674426/';
                        $result_img = './image/Love6.jpg';
                        break;
                    case 7:
                        $result_name = '時空永恆的愛戀';
                        $result_url = 'https://www.imdb.com/title/tt1655441/';
                        $result_img = './image/Love7.jpg';
                        break;
                    case 8:
                        $result_name = '你的名字';
                        $result_url = 'https://www.imdb.com/title/tt5311514/';
                        $result_img = './image/Love8.jpg';
                        break;
                    case 9:
                        $result_name = '不能說的秘密';
                        $result_url = 'https://www.imdb.com/title/tt1037850/';
                        $result_img = './image/Love9.jpg';
                        break;
                    default:
                        break;
                }
            }
            function find_plot(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在電影分類中推薦您觀看劇情片。如以下這一部電影';
                $rand_index = rand(1,9);
                switch ($rand_index) {
                    case 1:
                        $result_name = '模仿遊戲';
                        $result_url = 'https://www.imdb.com/title/tt2084970/?ref_=fn_al_tt_1';
                        $result_img = './image/Plot1.jpg';
                        break;
                    case 2:
                        $result_name = '與神同行';
                        $result_url = 'https://www.imdb.com/title/tt7160070/';
                        $result_img = './image/Plot2.jpg';
                        break;
                    case 3:
                        $result_name = '屍速列車';
                        $result_url = 'https://www.imdb.com/title/tt5700672/';
                        $result_img = './image/Plot3.jpg';
                        break;
                    case 4:
                        $result_name = '哈利波特';
                        $result_url = 'https://www.imdb.com/list/ls051335377/';
                        $result_img = './image/Plot4.jpg';
                        break;
                    case 5:
                        $result_name = '星際效應';
                        $result_url = 'https://www.imdb.com/title/tt0816692/';
                        $result_img = './image/Plot5.jpg';
                        break;
                    case 6:
                        $result_name = '真愛每一天';
                        $result_url = 'https://www.imdb.com/title/tt2194499/';
                        $result_img = './image/Plot6.jpg';
                        break;
                    case 7:
                        $result_name = '解憂雜貨店';
                        $result_url = 'https://www.imdb.com/title/tt6298600/';
                        $result_img = './image/Plot7.jpg';
                        break;
                    case 8:
                        $result_name = '臥虎藏龍';
                        $result_url = 'https://www.imdb.com/title/tt0190332/';
                        $result_img = './image/Plot8.jpg';
                        break;
                    case 9:
                        $result_name = '無極';
                        $result_url = 'https://www.imdb.com/title/tt0417976/';
                        $result_img = './image/Plot9.jpg';
                        break;
                    default:
                        break;
                }
            }
            function find_fantacy(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在電影分類中推薦您觀看奇幻片。如以下這一部電影';
                $rand_index = rand(1,5);
                switch ($rand_index) {
                    case 1:
                        $result_name = '神隱少女';
                        $result_url = 'https://www.imdb.com/title/tt0245429/';
                        $result_img = './image/Fantasy1.jpg';
                        break;
                    case 2:
                        $result_name = '霍爾的移動城堡';
                        $result_url = 'https://www.imdb.com/title/tt0347149/';
                        $result_img = './image/Fantasy2.jpg';
                        break;
                    case 3:
                        $result_name = '風之谷';
                        $result_url = 'https://www.imdb.com/title/tt2013293/';
                        $result_img = './image/Fantasy3.jpg';
                        break;
                    case 4:
                        $result_name = '星際大戰 最後的絕地武士';
                        $result_url = 'https://www.imdb.com/title/tt2527336/?ref_=fn_al_tt_5';
                        $result_img = './image/Fantasy4.jpg';
                        break;
                    case 5:
                        $result_name = '暮光之城';
                        $result_url = 'https://www.imdb.com/title/tt1099212/';
                        $result_img = './image/Fantasy5.jpg';
                        break;
                    default:
                        break;
                }
            }
            function find_horror(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在電影分類中推薦您觀看恐怖片。如以下這一部電影';
                $rand_index = rand(1,9);
                switch ($rand_index) {
                    case 1:
                        $result_name = '惡靈古堡7';
                        $result_url = 'https://www.imdb.com/title/tt2592614/';
                        $result_img = './image/Scare1.jpg';
                        break;
                    case 2:
                        $result_name = '厲陰宅2';
                        $result_url = 'https://www.imdb.com/title/tt3065204/';
                        $result_img = './image/Scare2.jpg';
                        break;
                    case 3:
                        $result_name = '鬼關燈';
                        $result_url = 'https://www.imdb.com/title/tt4786282/';
                        $result_img = './image/Scare3.jpg';
                        break;
                    case 4:
                        $result_name = '殭屍';
                        $result_url = 'https://www.imdb.com/title/tt2771800/';
                        $result_img = './image/Scare4.jpg';
                        break;
                    case 5:
                        $result_name = '紅衣小女孩';
                        $result_url = 'https://www.imdb.com/title/tt0816692/';
                        $result_img = './image/Scare5.jpg';
                        break;
                    case 6:
                        $result_name = '閃靈';
                        $result_url = 'https://www.imdb.com/title/tt0081505/';
                        $result_img = './image/Scare6.jpg';
                        break;
                    case 7:
                        $result_name = '驅魔';
                        $result_url = 'https://www.imdb.com/title/tt0404032/';
                        $result_img = './image/Scare7.jpg';
                        break;
                    case 8:
                        $result_name = '逃出絕命鎮';
                        $result_url = 'https://www.imdb.com/title/tt5052448/';
                        $result_img = './image/Scare8.jpg';
                        break;
                    case 9:
                        $result_name = '康斯坦丁:驅魔神探';
                        $result_url = 'https://www.imdb.com/title/tt0360486/';
                        $result_img = './image/Scare9.jpg';
                        break;
                    default:
                        break;
                }
            }
            function find_comedy(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在電影分類中推薦您觀看搞笑片。如以下這一部電影';
                $rand_index = rand(1,8);
                switch ($rand_index) {
                    case 1:
                        $result_name = '摩登時代';
                        $result_url = 'https://www.imdb.com/title/tt0027977/';
                        $result_img = './image/Laugh1.jpg';
                        break;
                    case 2:
                        $result_name = '九品芝麻官';
                        $result_url = 'https://www.imdb.com/title/tt0110201/';
                        $result_img = './image/Laugh2.jpg';
                        break;
                    case 3:
                        $result_name = '唐伯虎點秋香';
                        $result_url = 'https://www.imdb.com/title/tt0108289/';
                        $result_img = './image/Laugh3.jpg';
                        break;
                    case 4:
                        $result_name = '逃學威龍';
                        $result_url = 'https://www.imdb.com/title/tt0103045/';
                        $result_img = './image/Laugh4.jpg';
                        break;
                    case 5:
                        $result_name = '少林足球';
                        $result_url = 'https://www.imdb.com/title/tt0286112/';
                        $result_img = './image/Laugh5.jpg';
                        break;
                    case 6:
                        $result_name = '功夫';
                        $result_url = 'https://www.imdb.com/title/tt0373074/';
                        $result_img = './image/Laugh6.jpg';
                        break;
                    case 7:
                        $result_name = '命運好好玩';
                        $result_url = 'https://www.imdb.com/title/tt0389860/';
                        $result_img = './image/Laugh7.jpg';
                        break;
                    case 8:
                        $result_name = '動物方程式';
                        $result_url = 'https://www.imdb.com/title/tt2948356/';
                        $result_img = './image/Laugh8.jpg';
                        break;
                    default:
                        break;
                }
            }      
            echo "<br><br><br><br><br><h3>電影名稱: ".$result_name."</h3>";
            echo "<h3>說明: ".$result_dis."</h3>";
            echo "<a target='_blank' href='$result_url'><img style='width:200px; height: 270px' src='$result_img'></a><br>";
            echo "<img id='head_img' src='./img/robot_bulb.png'>";    
        ?>
    </body>
</html>