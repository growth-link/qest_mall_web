# qest_mall_web
Qest Mall Web 開発用

PHP 8.1.9
Laravel 9

## Composerインストール
```Shell
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

## 起動手順
```shell
##起動手順
1. $ composer update
2. ライブラリインストール　$ composer install
3. DBを作成　DB名：qest_mall
4. DBテーブル作成　$ php artisan migrate:fresh
5. テストデータ入れ込み　$ php artisan db:seed　
6. サーバー起動　$ php artisan serve　
```

## GCLOUDプロジェクト切り替え
```shell
$ gcloud config configurations list
$ gcloud config configurations activate qest-mall-web
```

## DBドキュメント作成
```
1. brew install graphviz
2. java -jar schemaspy-6.1.0.jar
```
日本語対応する場合：https://dev.classmethod.jp/articles/schemaspy-docker-localize-jp/

## プロジェクト構成外観
コントローラ：app/Http/Controllers/
バリデーション：app/Http/Requests/
大量テストデータ作成：database/factories/
DBテーブル定義：migrations/
テストデータ入れ込み：database/seeders/
テンプレート：resources/views/
ルーティング（WEB）：routes/web.php
ルーティング（API）：routes/api.php

## DB定義更新手順
```shell
# Sequel Aceにてテーブル定義を更新

# マイグレーションファイルをすべて削除
$ cd qest_mall_web
$ rm database/migrations/*

# マイグレーションファイルをDBから生成
$ php artisan migrate:generate

# DBに紐づくモデルを更新
$ php artisan code:models

```


## 参考資料
Firebase Auth SDK　リファレンス
https://firebase-php.readthedocs.io/en/3.9.3/user-management.html
