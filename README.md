## laravel-appkey

Dockerized Laravel key generator.

## Usage

```
docker run --rm desmart/laravel-appkey
```

For weaker ciphers (eg. `AES-128-CBC`) length can be specified:

```
docker run --rm desmart/laravel-appkey 16
```
