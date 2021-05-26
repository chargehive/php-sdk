#!/usr/bin/env bash
rm -rf ./generated
vendor/bin/jane-openapi generate
git add ./generated/*