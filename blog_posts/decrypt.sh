#!/bin/bash
openssl rsautl -decrypt -inkey ~/mac/id_rsa < cipher.txt
