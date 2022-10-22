# index

- [プロダクト名](#サンプル（プロダクト名）)
  - [Section 1](#section-1)
- [Development Rules](#development-rules)
- [Installation Guide](#installation-guide)

# サンプル（プロダクト名）

<div style="display: flex;">
<img height="20" src="https://img.shields.io/badge/-PHP%208.0.23-black.svg?logo=php&style=plastic">
<img height="20" src="https://img.shields.io/badge/-Laravel%208.33.1-black.svg?logo=laravel&style=plastic">
<img height="20" src="https://img.shields.io/badge/-Docker%2020.10.17-black.svg?logo=docker&style=plastic">
<img height="20" src="https://img.shields.io/badge/-Mysql%20%208.0.30-black.svg?logo=mysql&style=plastic">
<img height="20" src="https://img.shields.io/badge/-Apache%202.4.54-black.svg?logo=apache&style=plastic">
</div>


[![IMAGE ALT TEXT HERE](https://jphacks.com/wp-content/uploads/2022/08/JPHACKS2022_ogp.jpg)](https://www.youtube.com/watch?v=LUPQFB4QyVo)

## 製品概要
### 背景(製品開発のきっかけ、課題等）
近年、セキュリティエンジニアの人手不足がささやかれる中で、初学者向けのセキュリティ学習サイトは難しい課題の一つである。
セキュリティに関するリファレンスは英語での記述がほとんであり、特に多くの専門用語を扱うこの分野において、初心者にはハードルが高い。
一方で日本語による書籍媒体の情報は分厚く、何より情報が最新でない恐れもある。加えて知識の習得には環境構築を余儀なくされる。
情報技術の初学者にもかかわらずセキュリティに興味を抱く方、専門分野はセキュリティとは異なるものの基礎知識を身に着けたいと考える方。
このような方々はセキュリティ界隈では非常に貴重な人材であり、学習環境の不足を理由に学習を断念してしまうのでは非常に勿体のない事態である。
そこで私たちRiSTことRitsumeikan univercity Security Teamは、
・ウェブブラウザ上で誰でも気軽に、
・実際に手を動かして学べる
・おまけにセキュアである
ような実践型のセキュリティ学習サイトの開発に至った。

### 製品説明（具体的な製品の説明）
### 特長
#### 1. 実践型のセキュリティ学習サイト
#### 2. 日本語による丁寧な解説＆環境構築不要で初心者でも気軽に学習できる
#### 3. ブラウザ上で完結するため安全に学習可能である

### 解決出来ること
### 今後の展望
よりスケーラビリティの高いクラウドへのデプロイによって、一般への普及を可能とすること。
最終目的はセキュリティ学習の易化であり、より多くの人へセキュリティの知識を広めること。
### 注力したこと（こだわり等）
* その性質上、ユーザーが他サイトへの攻撃を行わないように徹底した注意事項の用意
→これは「できるようになること」が明確になることで学習意欲を高める効果もあると考えている
* 視覚的に挙動が確認でき、かつ安全な演習環境の実装

## 開発技術
### 活用した技術
#### 開発環境
* Docker, Docker-compose
* MySQL
* XServer

#### フレームワーク・ライブラリ・モジュール
* Laravel
* jQuery
* Celenium


### 独自技術
#### ハッカソンで開発した独自機能・技術
* CeleniumによるXSSの自動正誤判定

## Development Rules

Commit Rules : コミットルールは [Commit Rules](/COMMIT.md) を参照してください

Task management : タスクを管理する場合は [Task Manage](/TASK.md) に記載してください

## Installation Guide

---

インストールはドキュメント :  [Install guide](/INSTALL.md) にしたがってください

---

## Usage

コンテナ起動後ブラウザにて「 http://localhost:8080 」 を開く


