# 🐳

## 環境構築

### 1. ローカルに clone する

### 2. Docker のインストール

### 3. 「Docker の起動」と「PHP を使う準備」

```
./docker-compose-local.sh up
```

## その他コマンド

### Docker 環境に変更があった時

```
./docker-compose-local.sh up --build
```

## ページ紹介

php

[localhost:8080](http://localhost:8080)

PHPMyAdmin

[localhost:3306](http://localhost:3306)

## 設定を変更したい

```
localhost:8080をhtmlが表示されるようにしたい -> nginx/default.conf 4行目を index index.htmlにする。
```
