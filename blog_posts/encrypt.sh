#!/bin/bash
openssl rsautl -encrypt -pubin -inkey id_rsa.pub.pem < plain.txt > cipher.txt
