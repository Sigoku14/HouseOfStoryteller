#かきつづり
##House of Storyteller

Laravel のインストール

```
composer create-project --prefer-dist laravel/laravel HouseOfStoryteller
```

そのあと、Git pull して merge でいいはず。
試行錯誤でよろしく w

##Laravel の DB 関連のファイル生成方法

###Migration ファイルの生成

```
php artisan make:migration create_xxxxxx_table
```

###Seeder ファイルの生成

```
php artisan make:seeder XxxxxxTableSeeder
```

書き方等は既にある Migration、Seeder 等を参考にして！

###生成 → 記述のあと〜

標準マイグレーション実行方法

```
php artisan migrate
```

標準の確認が面倒な場合はこっち

```
php artisan migrate --force
```
