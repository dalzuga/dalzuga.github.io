#!/bin/bash
# Script for starting a blog post

datetimenow="$(date "+%Y-%m-%d_%T_%z_%Z")"

if [ $# -eq 1 ]
then
    # make the file
    file="$datetimenow""_$@"".org"
    echo -e $datetimenow"\n* $@ [working title]" > "$file"
    # echo $datetimenow"_$@"".md"
    
    # convert filename spaces to underscores
    mv "$file" $(echo $file | tr ' ' '_')
		 
else
    echo "please provide exactly one argument (post title)"
fi
