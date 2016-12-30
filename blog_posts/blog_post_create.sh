#!/bin/bash
# Script for starting a blog post

datetimenow="$(date "+%Y-%m-%d_%T_%z_%Z")"

if [ $# -eq 1 ]
then
    # make the file
    file="$datetimenow""_$@"".org"
    echo -e "#+STARTUP: showall" >> "$file"
    echo -e $datetimenow"\n* $@ [working title]" >> "$file"
    # echo $datetimenow"_$@"".md"
    
    # convert filename spaces to underscores
    underscored_filename=$(echo $file | tr ' ' '_')

    mv "$file" $(echo $file | tr ' ' '_')
    echo "Created:"
    echo "$underscored_filename"
		 
else
    echo "please provide exactly one argument (post title)"
fi
