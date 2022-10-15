# Rules

```bash
# ===== Commit Message Rules =====
# 🎉  :tada: イニシャライズ（Initial Commit）
# ✨  :sparkles: 新機能（New Feature）
# ➕  :add: 追加(Add)
# 🐛  :bug: バグ修正（Bugfix）
# ♻️  :change: 機能変更(Change)
# 🎨  :art: デザインUI/UX(Design change)
# 🗑️  :wastebasket: 削除（Remove）
# 😶  :no_mouth: 無（No commit message）
```
# Environment 

<div style="display: flex;">
<img height="30" src="https://img.shields.io/badge/-PHP%208.0.23-black.svg?logo=php&style=plastic">
<img height="30" src="https://img.shields.io/badge/-Laravel%208.33.1-black.svg?logo=laravel&style=plastic">
<img height="30" src="https://img.shields.io/badge/-Docker%2020.10.17-black.svg?logo=docker&style=plastic">
<img height="30" src="https://img.shields.io/badge/-Mysql%20%208.0.30-black.svg?logo=mysql&style=plastic">
<img height="30" src="https://img.shields.io/badge/-Apache%202.4.54-black.svg?logo=apache&style=plastic">
</div>


ディレクトリ構成図

```
php_docker        
├─┬ apache/
│    └── default.conf
├─┬ php/
│    └── Dockerfile
├── mysql/
├── src/
└── docker-compose.yml
```

# Build Environment

任意シェルにて以下を実行
 
```bash

# clone
git clone https://github.com/lion-rion/laravel_blog.git

# change dir
cd laravel_blog

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
DB_DATABASE=php_docker
DB_USERNAME=root
DB_PASSWORD=secret
```
## laravelのセッティング

任意のシェルにて以下を実行

```
# login apache bash
docker-compose exec apache /bin/bash

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

# Usage

ブラウザにて「 http://localhost:8080 」 を開く


# サンプル（プロダクト名）



[![IMAGE ALT TEXT HERE](https://jphacks.com/wp-content/uploads/2022/08/JPHACKS2022_ogp.jpg)](https://www.youtube.com/watch?v=LUPQFB4QyVo)

## 製品概要
### 背景(製品開発のきっかけ、課題等）
### 製品説明（具体的な製品の説明）
### 特長
#### 1. 特長1
#### 2. 特長2
#### 3. 特長3

### 解決出来ること
### 今後の展望
### 注力したこと（こだわり等）
* 
* 

## 開発技術
### 活用した技術
#### API・データ
* 
* 

#### フレームワーク・ライブラリ・モジュール
* 
* 

#### デバイス
* 
* 

### 独自技術
#### ハッカソンで開発した独自機能・技術
* 独自で開発したものの内容をこちらに記載してください
* 特に力を入れた部分をファイルリンク、またはcommit_idを記載してください。

#### 製品に取り入れた研究内容（データ・ソフトウェアなど）（※アカデミック部門の場合のみ提出必須）
* 
* 
