-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-10-03 16:39:18
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `shop`
--

-- --------------------------------------------------------

--
-- 資料表結構 `elements`
--

CREATE TABLE `elements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_txt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `isShowTitle` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `elements`
--

INSERT INTO `elements` (`id`, `page`, `title`, `position`, `icon`, `subtitle`, `content`, `url`, `url_txt`, `pic`, `video`, `alt`, `sort`, `enabled`, `isShowTitle`, `created_at`, `updated_at`) VALUES
(1, 'index', '看到你喜歡的風格?', 'main_title', NULL, NULL, '不如快點進來看看吧', 'products/2.png', NULL, 'https://via.placeholder.com/640x480.png/00ff22?text=laudantium', NULL, NULL, 1, 1, 1, '2021-09-27 20:03:21', '2021-09-27 20:03:21'),
(2, 'index', '想看更多酷炫產品?', 'main_title', NULL, NULL, '詳情請點入按鈕進去看', 'products/3.jpg', NULL, 'https://via.placeholder.com/640x480.png/00dd44?text=molestiae', NULL, NULL, 2, 1, 1, '2021-09-27 20:03:21', '2021-09-27 20:03:21'),
(3, 'index', '想看其他東西?', 'main_title', NULL, '', '歡迎看看Blog或IG更多訊息', 'products/4.png', NULL, 'https://via.placeholder.com/640x480.png/00aa55?text=non', NULL, NULL, 3, 1, 0, '2021-09-27 20:03:21', '2021-09-27 20:03:21'),
(4, 'index', '國便永遠是這類東西。', 'gallery', NULL, '將你打！……」 。', NULL, NULL, NULL, 'https://via.placeholder.com/640x480.png/00dd77?text=optio', NULL, NULL, 0, 0, 1, '2021-09-27 20:03:21', '2021-09-27 20:03:21'),
(5, 'index', '安全了；只是走到桌。', 'gallery', NULL, '國做了軍事上的新的。', NULL, NULL, NULL, 'https://via.placeholder.com/640x480.png/001100?text=sit', NULL, NULL, 0, 1, 0, '2021-09-27 20:03:21', '2021-09-27 20:03:21'),
(6, 'index', '氣，是該罵的，但這。', 'gallery', NULL, '和公公鹽柴事件的糾。', NULL, NULL, NULL, 'https://via.placeholder.com/640x480.png/00eeff?text=fugiat', NULL, NULL, 0, 0, 0, '2021-09-27 20:03:21', '2021-09-27 20:03:21'),
(7, 'index', '跌，跌，跌到頭破血。', 'gallery', NULL, '來，而未莊人都叫他。', NULL, NULL, NULL, 'https://via.placeholder.com/640x480.png/004444?text=delectus', NULL, NULL, 0, 1, 1, '2021-09-27 20:03:21', '2021-09-27 20:03:21'),
(8, 'index', '八蛇矛，就一聲，所。', 'gallery', NULL, '愾了。——否則不如。', NULL, NULL, NULL, 'https://via.placeholder.com/640x480.png/00ccdd?text=ipsum', NULL, NULL, 0, 0, 1, '2021-09-27 20:03:21', '2021-09-27 20:03:21'),
(9, 'index', '抱著伊的祖宗是巨富。', 'gallery', NULL, '”老尼姑的臉說。 。', NULL, NULL, NULL, 'https://via.placeholder.com/640x480.png/00dd55?text=eum', NULL, NULL, 0, 1, 0, '2021-09-27 20:03:21', '2021-09-27 20:03:21'),
(10, 'index', '衣兜裏落下一員天將。', 'gallery', NULL, '虛，不再掘那牆角發。', NULL, NULL, NULL, 'https://via.placeholder.com/640x480.png/0000dd?text=explicabo', NULL, NULL, 0, 0, 1, '2021-09-27 20:03:21', '2021-09-27 20:03:21');

-- --------------------------------------------------------

--
-- 資料表結構 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_27_055710_create_stores_table', 1),
(6, '2021_09_27_061019_alter_stores_table', 1),
(7, '2021_09_28_031651_create_elements_table', 1),
(8, '2021_09_28_032106_create_orders_table', 1),
(9, '2021_10_02_065136_create_shopping_carts_table', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rowid` int(11) DEFAULT NULL,
  `serial` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'TBC',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'B',
  `schedule_at` timestamp NULL DEFAULT NULL,
  `table_serial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paided` tinyint(1) NOT NULL DEFAULT 0,
  `remark` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `paid_serial` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_remark` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `remark` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spec` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `price_avgcost` int(11) NOT NULL DEFAULT 0,
  `price` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `qty` int(11) NOT NULL DEFAULT 1,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browse_count` bigint(20) NOT NULL DEFAULT 0,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `hoted` tinyint(1) NOT NULL DEFAULT 0,
  `remark` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`id`, `name`, `spec`, `category_id`, `price_avgcost`, `price`, `qty`, `pic`, `desc`, `browse_count`, `enabled`, `hoted`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'IWC萬國錶', NULL, 8, 0, 1687, 58, 'products/popular1.png', '<p>爲對得起他們有事都去了。 \"有胡叉呢。於是舉人老爺和趙家的用馬鞭打起皺來，按着胸膛，又軟軟的來由。 沒有同來，本是每逢節根或年關的事，不答應你麽？我不知道是真沒有做到夜深沒有什麼問題了，從粉板說，&ldquo;名不正則言不順&rdquo;。這小東西，輕輕地走了，這回因為後來呢？」「我的故鄉？ &ldquo;發財，你知道阿Q於是往來的離了我的兒子了。 有鬼似的，但我沒有來。 他起得很遲，但可惜，在錢家粉牆上的偵探，正在廚房裡，我們看。</p>', 478840, 1, 0, 'Fugit delectus totam hic laudantium sunt non eum id. Eius aspernatur sint quisquam porro excepturi aut. Dolores iste nihil maiores est veritatis eligendi voluptatem. Tempora tenetur facilis saepe et.', '2021-07-01 19:20:36', '2021-07-01 19:44:06'),
(2, 'Tag Heuer 泰格豪雅', NULL, 3, 0, 2649, 83, 'products/popular2.png', '<p>誰耐煩，嬾嬾的答道，「究竟是做工的分子了。尋聲走出後門，回來，死掉了，那兩個鉗捧著一望，不能再見了。不知道他的一聲，這豆腐店裡出來吩咐道： &ldquo;好！這不是本村人裏面的黑狗卻並不再現。至於假，就去問，仍然是沒有提起了他的靈魂賣給趙白眼的母親也說不出等候什麽似的說出來；車夫麼？&rdquo; &ldquo;窮朋友們的六角錢。其次是&ldquo;咸與維新的衣裙；提一個圓形的大腿，幸而尋到趙太爺，因為沒有見，便給他兩個大竹杠又向外走，兩塊肩。</p>', 213120, 0, 0, 'Cumque enim error sequi error. Est dolor exercitationem dolorem. Quia est debitis sed voluptas expedita.', '2021-07-01 19:20:36', '2021-07-01 19:22:55'),
(3, 'Richard Mille', NULL, 4, 0, 1877, 75, 'products/popular3.png', '<p>錢，都趕緊退開，使他有一條縫，並S也不知什麼意味，要洋紗衫，不但能說是無改革嘛，武不像&hellip;&hellip;下回還清，從單四嫂子知道了日本文的帖子：寫作阿貴呢？&rdquo;老頭子，然而我們這裏，廟簷下站住。他興高采烈的對人說話： \"老爺要追贓，他有這一條細路，自己不知道？&hellip;&hellip;你你又來迂。不知什麼事。他再三再四的請我上湖北水災捐而譚叫天出臺是遲的，都進去了。場邊靠河的烏桕葉，兜在大門，阿Q便也不說什麼大區別&hellip;&hellip;我便要他捕鳥。</p>', 258220, 1, 0, 'Aperiam accusamus eos ipsam autem et. Ut aut sed perferendis sit velit atque aperiam ut. Minus quibusdam non cumque sit qui. Veniam expedita ut non voluptas.', '2021-07-01 19:20:36', '2021-07-01 19:44:23'),
(4, 'Audemars Piguet（AP）愛彼', '——你來多嘴！你看我做在那裏徘徊；定睛，原來有一個深洞。大家左索右索，總是偏要幫忙。要是他的眼光，都埋着死刑和瘐斃的人們見面。 「這是在他頭上著了。 「先去吃晚飯本可以使用到現在，還時常留心到那裏？工讀麼，然而也偶有想到趙太爺、錢太爺大受居民的尊敬，自己的思想卻也並不憤懣，因為我想要。他家裏去了。這結果，是趙太爺卻又沒有讀者，原來有時連自己頭上很相混，也沒有了兒孫時，不願意和烏篷船到了前幾天，卻。', 19, 0, 1377, 91, 'products/popular4.png', '<p>著一個同鄉去查阿Q更其詫異了：叫他鈔書的要薪水是卑鄙哩。」他兩頰都鼓起來，卻還沒有？&mdash;&mdash;聽到了勝利的無聊，是一頂小氈帽，布衫是大船，大家都高興，然而未莊人都靠他養活他自從出世以來，那就能買一個講堂。&rdquo;鄒七嫂得意的事；這位老兄或令弟叫阿Q沒有辮子？究竟覺得淒涼，寂靜里奔波；另有幾個還是太公，其時正當日自己知道這是因為他竟在畫片自然也就不少。 自此以後，門外是冷清清的也打起哈欠來。」橫肉塊塊飽綻，越。</p>', 335939, 1, 0, 'Dolorem aperiam recusandae assumenda repudiandae. Reprehenderit quas nobis nemo vel. Sint quae iure rerum consequatur.', '2021-07-01 19:20:36', '2021-07-01 19:44:38'),
(5, 'Audemars Piguet（AP）愛彼', NULL, 18, 0, 9908, 42, 'products/popular5.png', '<p>服前後的連進兩回戲園去，扯著何首烏藤，但是我的豆種是粒粒挑選過的仙境，就在我們雖然不散，眼裏閃出一點沒有辮子好呢，辮子，這阿Q的錢便在講堂中，也喝道，怕還是煽動。 「喂」字的可怕的事情似乎有許多新端緒來，滿眼是新聞。七斤，又使他不上二三十家，早忘卻了假辮子，扶那老女人，從此不准踏進趙府上去的，他日裡到海邊不遠的對我說，那是殘油已經一掃而空了。這車立刻都贊成，和老官僚的。然而我的父親一樣的賠本，結。</p>', 844995, 1, 0, 'Qui necessitatibus ducimus quam sunt. Earum accusamus aut quos minus deserunt. Eum quidem perferendis ex officia est.', '2021-07-01 19:20:36', '2021-07-01 19:24:25'),
(6, 'Patek Philippe（PP）百達翡麗', '衫，七爺一見便知道因為春天時節一樣，笑着說，「不妨事麽？」我暗想我和母親說著「一代！」我想，直到他家裏去。 有一個學生在那裏來偷蘿蔔，擰下青葉，看見趙七爺的威風，因為他的腳也索索的從小巷口轉出，只有一回是初次。他翻身便走，一直使用的道，「打了，我自己的話，便不再說。 他決計出門，走到桌邊，都種著一塊空地呢……到山裏去了。仿佛氣惱這答案正和他的手段；老栓，老栓嚷道： 「皇帝已經投降了革命黨剪了辮子。', 3, 0, 3572, 73, 'products/card1.png', '<p>個紅紅白白橫著幾個人都願意出門。 「可是銀的和銅的，有送行的；便覺得淒涼，使我省誤到這裏，狠命一般的前程又只能爛掉&hellip;&hellip;&rdquo;於是一個花白鬍子恍然大悟了，但也沒有見他又有近處的月亮的一錯愕；老實說：那時是孩子，正像一個包，正在窸窸窣窣的響了之後，便是他的風景或時事的案卷裏並無殺頭的老屋，此後每逢節根或年關也沒有什麼話，便只好用了曲筆，惶恐而且路也愈走愈亮了，因為趙太爺一見阿Q說，&ldquo;士別三日，我卻還不配。</p>', 654695, 1, 0, 'Unde mollitia molestiae deserunt qui fugiat vitae ut et. Ut illum dolorem eos maiores cumque sit. Rem vel animi nisi iure ut.', '2021-07-01 19:20:36', '2021-07-01 19:44:47'),
(7, 'Longines 浪琴', NULL, 1, 0, 6359, 34, 'products/popular1.png', '<p>己，未莊的一大碗煮熟的，跨過小路，是&ldquo;斯亦不足畏也矣&rdquo;。這院子裏，廟簷下站住了我的母親卻竭力陪笑道，&ldquo;士別三日便當罷了。這一篇《狂人日記》。 土穀祠，照著他的寶兒，弄得不耐煩，氣憤模樣了。我說你有些暢快。剛近S門，一眨眼，仍然慢慢起來。 土坑深到二尺五寸多長的仍然下了雪，我也是半白頭髮披在肩上掛住；許多人，從腰間伸出手來，闖到烏桕樹下，是在冷淡的空氣中愈顫愈細，細看時，東西：兩條長凳，然而不知道。</p>', 212736, 1, 0, 'Repudiandae dicta reprehenderit ab. Est maiores voluptatem sit explicabo. Neque qui et sunt similique ullam dolore. Numquam et suscipit harum est natus et.', '2021-07-01 19:20:36', '2021-07-01 19:44:59'),
(8, 'Cartier 卡地亞', NULL, 2, 0, 1549, 82, 'products/popular5.png', '<p>白鬍子的夢很美滿，預備去告官，但他都走過稻香村，卻緩緩的出色人等的「差不多久，又因爲怕狗，也正是一頂破氈帽，布衫是大敲，大聲的說，他剛到自己的靈魂了。他這回又完了碗碟，也趕熱鬧似乎就要喫飯的太太說。「炒米。因為他確鑿曾在院子裏走出了，他便罵，沒有了怎樣，向著他走。一出門求食&rdquo;，城裏可聽到蒼蠅的悠長的仍然慢慢的放下小桌子矮凳回家，夏間便大抵也就進了叉港，於是架起兩支櫓，一直拖到腳跟；王爺是黃緞子。</p>', 839882, 1, 1, 'Nesciunt voluptatem in impedit quos soluta reprehenderit. In ea provident pariatur earum. Autem dolores sint suscipit cumque.', '2021-07-01 19:20:36', '2021-07-01 19:45:09'),
(9, 'Omega 歐米茄', '手脫衣服，都站著看；還是記起的便都擠出人叢後面，燈火如此，可是全是先前鄙薄城裏人，會罵的，所謂「沁人心日見其安靜了。 我這次回鄉，本來是我自己也說不闊？嚇，跑出去了。 從此便住在臨時主人的聲音大概是“本傳”，但因為正氣忿，因為這一羣孩子之間，夜夜和他的。什麼「者乎」之類。王九媽在街上走著說「孔乙己長久沒有風，而其實我們的頭髮是我決定的想交給巡警走近伊身旁，接着又逃走了。 這時候，給這些破爛的便被。', 14, 0, 2598, 30, 'products/popular5.png', '<h3 style=\"box-sizing: border-box; color: #1c1c1c; margin: 10px 0px 7px; padding: 0px; letter-spacing: 2px; font-size: 20px; line-height: 1.8em; font-family: \'Frank Ruhl Libre\', \'Noto Sans TC\', \'Microsoft JhengHei\', sans-serif, serif;\">Constellation星座系列手錶，售價約NT195,000起</h3>\r\n<p class=\"content\" style=\"box-sizing: border-box; color: #1c1c1c; margin: 10px 0px; padding: 0px; letter-spacing: 1px; font-size: 18px; line-height: 36px; font-family: \'Frank Ruhl Libre\', \'Noto Sans TC\', \'Microsoft JhengHei\', sans-serif, serif;\">最早在1952年問世，星座系列手錶概念源自1948年歐米茄為慶祝品牌100週年，推出了首款配備自動機芯的天文台認證錶，當時多款錶款底蓋裝飾「星辰之下天文台」徽章圖案，背後故事更有重要意義： 1933年Omega在英國天文台 (Kew-Teddington Observatory) 創下計時精準性世界紀錄，而這項成就迄今依然未被打破。到了1982年，<a class=\"inside_article\" style=\"box-sizing: border-box; color: #ed1b23; text-decoration-line: none; display: initial; word-break: break-all;\" href=\"https://www.omegawatches.com.tw/tw/watches/constellation/constellation/ladies-collection/product\" target=\"_blank\" rel=\"noopener\">Omega星座系列的女錶</a>引進了「曼哈頓」設計，如採用別具一格的錶殼左右兩側「扣爪」設計，6時位置的星形圖案等等，時至今日仍是最受市場歡迎的經典女錶系列之一。</p>', 202005, 1, 1, 'Praesentium molestias veritatis maiores facilis tenetur. Voluptatibus aut consequatur culpa eum ut voluptas.', '2021-07-01 19:20:36', '2021-07-01 22:13:15'),
(10, 'Rolex 勞力士', '身便走盡了心，延宕到九點多到十二分的困難了。 老人男人；一閑空，箭也似的，獨自發完議論之後，果然大悟似的飛去了，疏疏朗朗的站著。他心裏便都流汗，阿Q看見這屋還沒有規定……” 這時大概是“行狀”上的逐漸增多，祭器很講究，拜的人也恍然大叫，大抵很快意。 一日很忙碌的時候，這兩個，一聲，似乎伊一向是“引車賣漿者流”所用的小的終於被他抓住了，活夠了。我同時卻也並不見世人的眼光便到了年關也沒有聽到他們往往。', 10, 0, 8525, 17, 'products/popular3.png', '<h3 style=\"box-sizing: border-box; color: #1c1c1c; margin: 10px 0px 7px; padding: 0px; letter-spacing: 2px; font-size: 20px; line-height: 1.8em; font-family: \'Frank Ruhl Libre\', \'Noto Sans TC\', \'Microsoft JhengHei\', sans-serif, serif;\">Oyster perpetual 蠔式恆動系列手錶，售價約NT185,000起</h3>\r\n<p class=\"content\" style=\"box-sizing: border-box; color: #1c1c1c; margin: 10px 0px; padding: 0px; letter-spacing: 1px; font-size: 18px; line-height: 36px; font-family: \'Frank Ruhl Libre\', \'Noto Sans TC\', \'Microsoft JhengHei\', sans-serif, serif;\">與1926年問世的首款防水蠔式腕錶一脈相承，<a class=\"inside_article\" style=\"box-sizing: border-box; color: #ed1b23; text-decoration-line: none; display: initial; word-break: break-all;\" href=\"https://www.rolex.com/zh-hant/watches/oyster-perpetual.html\" target=\"_blank\" rel=\"noopener\">Rolex Oyster Perpetual</a>可說集品牌經典設計、實用性、實戴性於一身，微微復古的簡約造型讓它在各種場合、穿搭風格都毫無違和感；2020年最新一代的Oyster Perpetual更推出兩種錶殼尺寸&mdash;41與36mm，尤其36mm加碼推出寶寶藍、粉、珊瑚橘紅、鵝黃、勞力士綠五種彩色面盤，且售價並非高不可攀！</p>', 86975, 1, 1, 'Deserunt placeat exercitationem quam. Laborum nihil occaecati molestiae tenetur et qui quia. Esse consequuntur enim modi doloremque officia natus. Ea expedita non modi perferendis dolor.', '2021-07-01 19:20:36', '2021-07-01 22:04:05');

-- --------------------------------------------------------

--
-- 資料表結構 `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `qty` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `shopping_carts`
--

INSERT INTO `shopping_carts` (`id`, `product_id`, `user_id`, `name`, `price`, `qty`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Tag Heuer 泰格豪雅', 2649, 1, '2021-10-02 20:40:07', '2021-10-02 20:40:07'),
(2, 2, 2, 'Tag Heuer 泰格豪雅', 2649, 1, '2021-10-02 20:45:47', '2021-10-02 20:45:47'),
(3, 2, 2, 'Tag Heuer 泰格豪雅', 2649, 1, '2021-10-02 20:46:26', '2021-10-02 20:46:26'),
(4, 4, 2, 'Audemars Piguet（AP）愛彼', 1377, 2, '2021-10-02 22:10:13', '2021-10-02 22:10:13');

-- --------------------------------------------------------

--
-- 資料表結構 `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `pic_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sell_at` timestamp NULL DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `username`) VALUES
(1, 'test', 'test@mail.com', NULL, '$2y$10$wpomTpiEUfkI8uEd.Fu2uuJa2dFaTawD4BsxXdF5OuR6yh.H5PzFu', NULL, NULL, NULL, '2021-10-01 20:16:23', '2021-10-01 20:16:23', 'test'),
(2, 'admin', 'admin@admin.com', NULL, '$2y$10$xF7q.iVjUx991pTcSb26.ejcjvd0D3OiJl/mO6SDKtA64ee8ZC5lm', NULL, NULL, NULL, '2021-10-02 20:11:48', '2021-10-02 20:11:48', 'admin');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- 資料表索引 `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`);

--
-- 資料表索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 資料表索引 `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_carts_product_id_foreign` (`product_id`),
  ADD KEY `shopping_carts_user_id_foreign` (`user_id`);

--
-- 資料表索引 `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `elements`
--
ALTER TABLE `elements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- 資料表的限制式 `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- 資料表的限制式 `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD CONSTRAINT `shopping_carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `shopping_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
