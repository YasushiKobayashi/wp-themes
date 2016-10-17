#!/bin/bash
url=`curl inet-ip.info`
echo $url
curl -I -s "http://$url"/wordpress
