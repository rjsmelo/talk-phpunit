#!/bin/bash

find ./src/ ./tests/ ./sample_commands ./outputs -name "*.php" -or -name "*.sh" -or -name '*.txt' | 
  xargs highlight -d code_images/ -s edit-gedit -O rtf phpunit.xml 
