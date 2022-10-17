# qest_mall_web
Qest Mall Web開発用

PHP 8.1.9
Laravel 9

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

##起動手順
1. $ composer update
2. ライブラリインストール　$ composer install
3. DBを作成　DB名：qest_mall
4. DBテーブル作成　$ php artisan migrate:fresh　
5. テストデータ入れ込み　$ php artisan db:seed　
6. サーバー起動　$ php artisan serve　

コントローラ：app/Http/Controllers/
バリデーション：app/Http/Requests/
大量テストデータ作成：database/factories/
DBテーブル定義：migrations/
テストデータ入れ込み：database/seeders/
テンプレート：resources/views/
ルーティング（WEB）：routes/web.php
ルーティング（API）：routes/api.php
