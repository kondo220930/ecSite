# ecサイト

laravelとdockerを使い衣服などを販売することを想定したecサイトを作りました。
ユーザー画面ははbootstrapの機能を使って実装しました。
dockerの環境は以前学校の授業で使った環境を転用したものです。
入力フォームはすべてlaravelのバリデーション機能で制御されており既に登録済みのメールアドレスなど対象外の入力がされた場合はリダイレクトされエラーメッセージが表示されます。
ログイン完了後のメッセージやユーザー削除後のメッセージなども表示されます。


---
## 管理者画面で実施可能な機能
- 管理者情報の登録・削除
- 管理者画面へのログイン
- 管理者画面での商品の登録・削除
- 管理者画面での登録ユーザーの削除
- 全ユーザーの購入履歴の閲覧
- 
## ユーザー画面で実施可能な機能
- ユーザー情報の登録・削除
- ユーザー画面へのログイン
- ユーザー情報の編集（名前・パスワードの変更）
- 商品の絞り込み検索
- 商品の購入

---
## 起動方法
1. 下記コマンドを実行してください
~~~sh
docker compose up -d 
~~~

2. 下記コマンドを実行してDockerプロセスが起動していることを確認して下さい。
~~~sh
docker compose ps
~~~
| 対象プロセス |
| :---: |
| Nginx |
| PHP 8.1.0 |
| MySQL |
| Redis |

---
### 初期データ投入方法
1. 下記コマンドを実行してください
~~~sh
docker compose exec php-fpm php artisan migrate
~~~
2. 下記の設定が完了していることを確認して下さい。

| 対象設定 |
| :---: |
| create_users_table　|
| create_admin_table　|
| create_product_table　|
| create_user_archive　|


3. 下記コマンドを実行してください
~~~sh
docker compose exec php-fpm php artisan db:seed 
~~~
4. 下記の初期データが投入されていることを確認して下さい。

| 対象初期データ |
| :---: |
| adminTableSeeder |
| usersTableSeeder |
| productTableSeeder |

### ログイン方法

```
管理者画面URL: http://localhost:8080/admin
ログイン
管理者ID: 1234
パスワード: password
```

```
ユーザ画面URL: http://localhost:8080
新規登録を行った後、登録した情報を使ってログインしてください
```

---
## 制作期間
- 制作期間：1ヵ月
- 作成人数：1人
