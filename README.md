
# 小白購物車網站

# 使用提示

1. 裡面所需要的圖片皆為網站上抓取做為測試網站使用，若有疑慮請聯絡將會立刻把圖片進行撤換。
2. 此附檔下有個.sql檔為測試用的，可直接匯入做使用
3. 此版本為PHP 8.0.10 Laravel 9.52.4

# 初始化

將本專案clone到本地端
專案網址： https://github.com/littlebai/

1. 先安裝所有使用的套件指令
於終端機下達:composer install

2. 設定.env檔
可將.env.example直接修改檔名
請將以下進行修改
APP_NAME=專案名稱
APP_URL=http://localhost/shop/public 專案設的網址對外公用資料夾

DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=資料庫名稱
DB_USERNAME=資料庫帳號
DB_PASSWORD=資料庫密碼

MAIL_MAILER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME=郵件帳號
MAIL_PASSWORD=郵件密碼，若為Google需至「應用程式密碼」生成密碼放於這
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS="郵件信箱"
MAIL_FROM_NAME="${APP_NAME}"

3. 設定好資料庫.env之後，在資料庫生成所有表格
若直接將資料表的.sql檔直接匯入可略過此步驟
生成表格指令，於終端機下達:php artisan migrate

4. 若採用.sql檔有預設測試帳號密碼
帳號test
密碼test1234