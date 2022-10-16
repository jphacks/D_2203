# Install Guide

## Environment 

<div style="display: flex;">
<img height="30" src="https://img.shields.io/badge/-PHP%208.0.23-black.svg?logo=php&style=plastic">
<img height="30" src="https://img.shields.io/badge/-Laravel%208.33.1-black.svg?logo=laravel&style=plastic">
<img height="30" src="https://img.shields.io/badge/-Docker%2020.10.17-black.svg?logo=docker&style=plastic">
<img height="30" src="https://img.shields.io/badge/-Mysql%20%208.0.30-black.svg?logo=mysql&style=plastic">
<img height="30" src="https://img.shields.io/badge/-Apache%202.4.54-black.svg?logo=apache&style=plastic">
</div>

---

ディレクトリ構成図

```
php_docker        
├─┬ apache/
│    └── default.conf
├─┬ php/
│    └── Dockerfile
├── mysql/
├── src/...
└── docker-compose.yml
```

---

## Build Environment

任意シェルにて以下を実行
 
```bash

# clone
git clone https://github.com/jphacks/D_2203.git laravel

# change dir
cd laravel

# docker-compose and start
docker-compose up -d --build
```

## DB接続

.env.exampleをコピーして.envファイルを作成する

DBの設定を以下の通りに変更する
```
DB_CONNECTION=mysql
DB_HOST=database
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=secret
```
## laravelのセッティング

任意のシェルにて以下を実行

```
# login apache bash
docker-compose exec php-apache /bin/bash

# package install
composer install

# key setting
php artisan key:generate

# storage setting
chmod -R 666 storage
php artisan storage:link

# DB migration with factory
php artisan migrate
```

# Ports

|  Port  |  使用  |
| ---- | ---- |
|  tcp:80  |  8080  |
|  mysql:3606  |  4306  |
