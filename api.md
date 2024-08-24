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
POST /api/signup
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
POST /api/signin
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

### 寄せ書きの作成

```
POST /api/envelopes
```

##### リクエストボディ

```json
{
    "title": "test"
}
```

##### レスポンス

```json
{
    "id": 1,
    "code": "82d76e1c-1df2-4e0d-a4a2-a89ce6d70791",
    "title": "ccc",
    "sender_id": 1,
    "holder_id": 1,
    "state": "IN_PROGRESS",
    "created_at": "2024-08-24T17:27:32.000000Z",
    "updated_at": "2024-08-24T17:27:32.000000Z"
}
```

### 寄せ書きの存在確認

```
POST /api/envelopes/{id}/verify
```

##### リクエストボディ

```json
-
```

##### レスポンス

```json
{
    "exist_envelope": true,
}
```
