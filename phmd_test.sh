#!/bin/sh
phpmd ./ text codesize,controversial,design,naming,unusedcode --exclude vendor
