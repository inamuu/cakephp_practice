# :cake: cakephp_practice :running:

:whale: docker-compose
- app Nginx :ng:
- php php-fpm 7.X :elephant:
- db MySQL5.7 :dolphin:

### Setup

下記手順を参考にやっていきます。
https://book.cakephp.org/2.0/ja/tutorials-and-examples/blog/blog.html

1. git clone -b 2.x git://github.com/cakephp/cakephp.git
2. 下記SQLを流す

```sh
docker exec -ti cakephp_db mysql -u root -p
```

```sql
/* まず、posts テーブルを作成します: */
CREATE TABLE posts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50),
    body TEXT,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);

/* それから、テスト用に記事をいくつか入れておきます: */
INSERT INTO posts (title,body,created)
    VALUES ('タイトル', 'これは、記事の本文です。', NOW());
INSERT INTO posts (title,body,created)
    VALUES ('またタイトル', 'そこに本文が続きます。', NOW());
INSERT INTO posts (title,body,created)
    VALUES ('タイトルの逆襲', 'こりゃ本当にわくわくする！うそ。', NOW());
```

3. core.phpの `Security.salt` と `Security.cipherSeed` をランダム文字列に書き換える
4. 以上でOK
