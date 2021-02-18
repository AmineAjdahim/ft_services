#!/bin/bash
docker system prune
docker build -t d .
docker run -it -p 80:80 d
