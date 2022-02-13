## DEV

### PHP

php:7.4-fpm-buster

composer:1.10

### nginx

nginx:1.18-alpine

### mysql

mysql:5.7

### node

node:14.15.3-alpine

## laravelのdocker-imageに入ってプラグインを追加するとき
```
docker-compose exec app /bin/sh
#が出てきたらcomposer require hoge/hoge:X.X.Xをする。
インストールしたらLineもしくは誰かに報告しよう
グループメンバーはcomposer installをしてください
```
## Nuxtのdocker-imageに入ってプラグインを追加するとき
```
docker-compose exec front /bin/sh
#が出てきたらをnpm install @nuxt-hoge/hogeする。
インストールしたらLineもしくは誰かに報告しよう
グループメンバーはnpm installをしてください。
```

## データベース入り方

```
docker-compose exec front /bin/sh
```

## Usage

```
git clone git@github.com:zbraa/walkoh.git

frontendフォルダにあるpackage-lock.jsonを消す

frontendフォルダに移動

npm install

エラーがでたらnpm install --legacy-peer-deps
（エラーメッセージが--force or --legacy-peer-depsをつけてねみたいなやつだった場合）

walkohフォルダに戻って.env.exampleを.envという名前でコピー

docker-compose up -d --build

docker-compose exec front touch .env

docker-compose exec app composer install
docker-compose exec app cp .env.example .env
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate
docker-compose exec app composer self-update --2
```

## frontend/.envの修正

```
API_URL=http://localhost:18080/api
```

### nuxt

http://127.0.0.1:3000/

### api

http://127.0.0.1:18080/

### phpmyadmin

http://127.0.0.1:13000/