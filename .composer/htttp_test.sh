#!/bin/bash
url=`curl inet-ip.info`
curl -LI "http://$url"/wordpress -o /dev/null -w '%{http_code}\n' -s