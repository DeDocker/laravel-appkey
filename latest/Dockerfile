FROM alpine:edge

RUN apk add --no-cache php7 \
    && ln -s `which php7` /usr/bin/php

COPY key.php .

ENTRYPOINT ["php", "key.php"]
