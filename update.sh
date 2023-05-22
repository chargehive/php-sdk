#!/usr/bin/env bash

curl -o api.proto https://api.chargehive.com/api.proto

protodep up

rm -rf generated && mkdir -p generated
protoc \
  -I ./protodep \
  -I ./ \
  --php_out=generated \
  --grpc_out=generated \
  --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin \
  ./api.proto