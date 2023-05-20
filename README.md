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
1. $ composer install
2. $ composer update
3. DBを作成　DB名：qest_mall_db
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
2. cd database
3. java -jar schemaspy-6.1.0.jar
※3でERRORになる場合はvizjsのオプションをつけてコマンド実行
java -jar schemaspy-6.1.0.jar -vizjs
4. /database/schemaspy/index.htmlをWebブラウザで開くとドキュメントが見れる
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
# 単体の場合は以下（上書きされず新規作成されるので重複に注意）
$ php artisan migrate:generate -t <テーブル名>

# DBに紐づくモデルを削除してDBから一括更新
$ rm app/models/*.php
$ php artisan code:models
# 単体の場合は以下
$ php artisan code:models -t <テーブル名>

# DBからSeederを一括作成
$ sh iseed.sh

＃単体の場合は以下
（$ php artisan iseed <テーブル名>）
```

## CloudSQLProxy
```shell

$ ./cloud-sql-proxy --credentials-file /Users/pianopia/Downloads/qest-mall-test-33ce6b52cf9c.json --address 0.0.0.0 --port 33306 qest-mall-test:asia-northeast1:wp

// 検証
$ ./cloud-sql-proxy --credentials-file /Users/pianopia/Downloads/qest-mall-test-33ce6b52cf9c.json --address 0.0.0.0 --port 13306 qest-mall-test:asia-northeast1:qest-mall-test-db

// STG
$ ./cloud-sql-proxy --credentials-file /Users/pianopia/Downloads/qest-mall-stg-9cc270a97e33.json --address 0.0.0.0 --port 13306 qest-mall-stg:asia-northeast1:qest-mall-stg-db

// 本番
$ ./cloud-sql-proxy --credentials-file /Users/pianopia/Downloads/qest-mall-prd-f19522c227ca.json --address 0.0.0.0 --port 13306 qest-mall-prd:asia-northeast1:qest-mall-db
```


## 参考資料
Firebase Auth SDK　リファレンス
https://firebase-php.readthedocs.io/en/3.9.3/user-management.html
