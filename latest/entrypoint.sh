#!/usr/bin/env sh

echo -n "base64:"
openssl rand -base64 ${1:-32}
