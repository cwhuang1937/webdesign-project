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
        // class[0] => strategy, class[1] => dota, class[2] => gun, class[3] => RPG
            for ($i=0; $i < 4; $i++)
                $class[$i] = 0;
                        
            $q1_str_arr = str_split($_REQUEST['q1']);
            $q2_str_arr = str_split($_REQUEST['q2']);
            $q3_str_arr = str_split($_REQUEST['q3']);
            $q4_str_arr = str_split($_REQUEST['q4']);
            
            for ($i=0; $i < 4; $i++)
                $class[$i] = $class[$i] + $q1_str_arr[$i] + $q2_str_arr[$i] + $q3_str_arr[$i] + $q4_str_arr[$i];


            $index = 0;  //Find the most_score item
            $the_most = $class[$index];
            for ($i=1; $i <= 3; $i++){
                if($class[$i] >= $the_most){
                    $the_most = $class[$i];
                    $index = $i;
                }
            }
            switch ($index) {
                case 0:
                    find_strategy();
                    break;
                case 1:
                    find_dota();
                    break;
                case 2:
                    find_gun();
                    break;
                case 3:
                    find_RPG();
                    break;
                default:
                    break;
            }
            function find_strategy(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在遊戲分類中推薦您遊玩戰略類型遊戲。如以下這一款遊戲';
                $rand_index = rand(1,5);
                switch ($rand_index) {
                    case 1:
                        $result_name = '星海爭霸2';
                        $result_url = 'https://starcraft2.com/zh-tw/';
                        $result_img = './image/Strategy1.jpg';
                        break;
                    case 2:
                        $result_name = '世紀帝國2';
                        $result_url = 'https://acg.gamer.com.tw/acgDetail.php?s=60512';
                        $result_img = './image/Strategy2.jpg';
                        break;
                    case 3:
                        $result_name = '紅色警戒2';
                        $result_url = 'https://acg.gamer.com.tw/acgDetail.php?s=8182';
                        $result_img = './image/Strategy3.jpg';
                        break;
                    case 4:
                        $result_name = '魔獸爭霸3';
                        $result_url = 'http://tw.blizzard.com/zh-tw/games/war3/';
                        $result_img = './image/Strategy4.jpg';
                        break;
                    case 5:
                        $result_name = '三國志系列';
                        $result_url = 'https://forum.gamer.com.tw/A.php?bsn=6331';
                        $result_img = './image/Strategy5.jpg';
                        break;
                    default:
                        break;
                }
            }
            function find_dota(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在遊戲分類中推薦您遊玩鬥塔類型遊戲。如以下這一款遊戲';
                $rand_index = rand(1,4);
                switch ($rand_index) {
                    case 1:
                        $result_name = 'dota2';
                        $result_url = 'http://blog.dota2.com/';
                        $result_img = './image/Dota1.jpg';
                        break;
                    case 2:
                        $result_name = 'LOL';
                        $result_url = 'https://lol.garena.tw/';
                        $result_img = './image/Dota2.jpg';
                        break;
                    case 3:
                        $result_name = '傳說對決';
                        $result_url = 'https://moba.garena.tw/';
                        $result_img = './image/Dota3.jpg';
                        break;
                    case 4:
                        $result_name = '平安京';
                        $result_url = 'https://forum.gamer.com.tw/A.php?bsn=33068';
                        $result_img = './image/Dota4.jpg';
                        break;
                    default:
                        break;
                }
            }
            function find_gun(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在遊戲分類中推薦您遊玩槍戰類型遊戲。如以下這一款遊戲';
                $rand_index = rand(1,5);
                switch ($rand_index) {
                    case 1:
                        $result_name = 'CSGO';
                        $result_url = 'http://www.csgo.com.cn/main.html';
                        $result_img = './image/Shoot1.jpg';
                        break;
                    case 2:
                        $result_name = 'SF';
                        $result_url = 'http://www.sfonline.com.tw/#';
                        $result_img = './image/Shoot2.jpg';
                        break;
                    case 3:
                        $result_name = '鬥陣特攻';
                        $result_url = 'https://playoverwatch.com/zh-tw/';
                        $result_img = './image/Shoot3.jpg';
                        break;
                    case 4:
                        $result_name = 'PUBG';
                        $result_url = 'https://www.pubg.com/';
                        $result_img = './image/Shoot4.jpg';
                        break;
                    case 5:
                        $result_name = '達爾文計畫';
                        $result_url = 'https://store.steampowered.com/app/544920/Darwin_Project/';
                        $result_img = './image/Shoot5.jpg';
                        break;
                    default:
                        break;
                }
            }
            function find_RPG(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在遊戲分類中推薦您遊玩RPG類型遊戲。如以下這一款遊戲';
                $rand_index = rand(1,5);
                switch ($rand_index) {
                    case 1:
                        $result_name = '仙劍奇俠傳系列';
                        $result_url = 'http://mpal.softstargames.com.tw/';
                        $result_img = './image/RPG1.jpg';
                        break;
                    case 2:
                        $result_name = '流亡暗道';
                        $result_url = 'https://web.poe.garena.tw/garena-page/download';
                        $result_img = './image/RPG2.jpg';
                        break;
                    case 3:
                        $result_name = '暗黑破壞神3';
                        $result_url = 'https://tw.diablo3.com/zh/';
                        $result_img = './image/RPG3.jpg';
                        break;
                    case 4:
                        $result_name = '軒轅劍';
                        $result_url = 'http://swd.softstar.com.tw/index.aspx';
                        $result_img = './image/RPG4.jpg';
                        break;
                    case 5:
                        $result_name = 'Final Fantasy XV';
                        $result_url = 'https://acg.gamer.com.tw/acgDetail.php?s=91126';
                        $result_img = './image/RPG5.jpg';
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