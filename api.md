# API設計

### 動作確認用のエンドポイント

```
GET /api/hello
```

##### リクエストボディ

```json
-
```

##### レスポンス

```json
{
    "message": "hello, world!"
}
```

### 動作確認用のエンドポイント(認証必須)

```
GET /api/user
```

##### リクエストヘッダ

```
Authorization: Bearer XXXXXXXXXX
```

##### リクエストボディ

```json
-
```

##### レスポンス

```json
{
    "id": 1,
    "user_id": "test",
    "created_at": "2024-01-01T00:00:00.000000Z",
    "updated_at": "2024-01-01T00:00:00.000000Z"
}
```

### サインアップ

```
GET /api/signup
```

##### リクエストボディ

```json
{
    "user_id": "test",
    "password": "password"
}
```

##### レスポンス

```json
{
    "token": "XXXXXXXXXX"
}
```

### サインイン

```
GET /api/signin
```

##### リクエストボディ

```json
{
    "user_id": "test",
    "password": "password"
}
```

##### レスポンス

```json
{
    "token": "XXXXXXXXXX"
}
```
