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
        // class[0] => comic, class[1] => novel, class[2] => magazine, class[3] => biography
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
                    find_comic();
                    break;
                case 1:
                    find_novel();
                    break;
                case 2:
                    find_magazine();
                    break;
                case 3:
                    find_biography();
                    break;
                default:
                    break;
            }
            function find_comic(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在書籍分類中推薦您閱讀漫畫。如以下這一款漫畫';
                $rand_index = rand(1,6);
                switch ($rand_index) {
                    case 1:
                        $result_name = '航海王';
                        $result_url = 'http://www.comicbus.com/html/103.html';
                        $result_img = './image/Comics1.jpg';
                        break;
                    case 2:
                        $result_name = '火影忍者';
                        $result_url = 'http://8maple.ru/82711/';
                        $result_img = './image/Comics2.jpg';
                        break;
                    case 3:
                        $result_name = '進擊的巨人';
                        $result_url = 'http://8maple.ru/84271/';
                        $result_img = './image/Comics3.jpg';
                        break;
                    case 4:
                        $result_name = '多啦A夢';
                        $result_url = 'https://tw.manhuagui.com/comic/1639/';
                        $result_img = './image/Comics4.jpg';
                        break;
                    case 5:
                        $result_name = '七原罪';
                        $result_url = 'https://tw.manhuagui.com/comic/7708/';
                        $result_img = './image/Comics5.jpg';
                        break;
                    case 6:
                        $result_name = '新世紀福音戰士';
                        $result_url = 'http://www.99kubo.tv/vod-read-id-7806.html';
                        $result_img = './image/Action6.jpg';
                        break;
                    default:
                        break;
                }
            }
            function find_novel(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在書籍分類中推薦您閱讀小說。如以下這一款小說';
                $rand_index = rand(1,7);
                switch ($rand_index) {
                    case 1:
                        $result_name = '解憂雜貨店';
                        $result_url = 'http://www.books.com.tw/products/0010594847';
                        $result_img = './image/Book1.jpg';
                        break;
                    case 2:
                        $result_name = '打噴嚏';
                        $result_url = 'http://www.books.com.tw/products/0010336891';
                        $result_img = './image/Book2.jpg';
                        break;
                    case 3:
                        $result_name = '等一個人咖啡';
                        $result_url = 'http://www.books.com.tw/products/0010458828';
                        $result_img = './image/Book3.jpg';
                        break;
                    case 4:
                        $result_name = '你說，寮國到底有甚麼';
                        $result_url = 'http://www.books.com.tw/products/0010740194';
                        $result_img = './image/Book4.jpg';
                        break;
                    case 5:
                        $result_name = '麥田捕手';
                        $result_url = 'http://www.books.com.tw/products/0010518839';
                        $result_img = './image/Book5.jpg';
                        break;
                    case 6:
                        $result_name = '在咖啡冷掉之前';
                        $result_url = 'http://www.books.com.tw/products/0010751153';
                        $result_img = './image/Book6.jpg';
                        break;
                    case 7:
                        $result_name = '絕地救援電影：火星任務';
                        $result_url = 'http://www.books.com.tw/products/0010637846';
                        $result_img = './image/Book7.jpg';
                        break;
                    default:
                        break;
                }
            }
            function find_magazine(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在書籍分類中推薦您閱讀雜誌。如以下這一款雜誌';
                $rand_index = rand(1,6);
                switch ($rand_index) {
                    case 1:
                        $result_name = '商業週刊';
                        $result_url = 'https://www.businessweekly.com.tw/';
                        $result_img = './image/Magazines1.jpg';
                        break;
                    case 2:
                        $result_name = '遠見雜誌';
                        $result_url = 'https://www.gvm.com.tw/';
                        $result_img = './image/Magazines2.jpg';
                        break;
                    case 3:
                        $result_name = '數位時代';
                        $result_url = 'https://www.bnext.com.tw/';
                        $result_img = './image/Magazines3.jpg';
                        break;
                    case 4:
                        $result_name = '今周刊';
                        $result_url = 'https://www.businesstoday.com.tw/';
                        $result_img = './image/Magazines4.jpg';
                        break;
                    case 5:
                        $result_name = 'BBC Knowledge';
                        $result_url = 'http://www.books.com.tw/products/E060002800';
                        $result_img = './image/Magazines5.jpg';
                        break;
                    case 6:
                        $result_name = '經理人';
                        $result_url = 'https://www.managertoday.com.tw/';
                        $result_img = './image/Magazines6.jpg';
                        break;
                    default:
                        break;
                }
            }
            function find_biography(){
                global $result_name, $result_url, $result_img, $result_dis;
                $result_dis = '根據您的測驗結果，我們在書籍分類中推薦您閱讀傳記。如以下這一款傳記';
                $rand_index = rand(1,7);
                switch ($rand_index) {
                    case 1:
                        $result_name = '賈伯斯傳';
                        $result_url = 'http://www.books.com.tw/products/0010766995';
                        $result_img = './image/Autobiography1.jpg';
                        break;
                    case 2:
                        $result_name = '貝佐斯傳';
                        $result_url = 'http://www.books.com.tw/products/0010736508';
                        $result_img = './image/Autobiography2.jpg';
                        break;
                    case 3:
                        $result_name = '抉擇:希拉蕊傳記';
                        $result_url = 'http://www.books.com.tw/products/0010636219';
                        $result_img = './image/Autobiography3.jpg';
                        break;
                    case 4:
                        $result_name = '鋼鐵人馬斯克';
                        $result_url = 'http://www.books.com.tw/products/0010753556';
                        $result_img = './image/Autobiography4.jpg';
                        break;
                    case 5:
                        $result_name = '旁觀者：管理大師杜拉克回憶錄';
                        $result_url = 'http://www.books.com.tw/products/0010715134';
                        $result_img = './image/Autobiography5.jpg';
                        break;
                    case 6:
                        $result_name = '梅克爾傳記';
                        $result_url = 'http://www.books.com.tw/products/0010636221';
                        $result_img = './image/Autobiography6.jpg';
                        break;
                    case 7:
                        $result_name = '懺悔錄:盧梭傳記';
                        $result_url = 'http://www.books.com.tw/products/CN11356261';
                        $result_img = './image/Autobiography7.jpg';
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