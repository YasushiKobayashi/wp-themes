#!/bin/bash
url=`curl inet-ip.info`
curl -LI "$url"/wordpress -o /dev/null -w '%{http_code}\n' -s