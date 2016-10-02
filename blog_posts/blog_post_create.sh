datetimenow="$(date "+%Y-%m-%d_%T_%z_%Z")"
if [ $# -eq 1 ]
then echo -e $datetimenow"\n# $@ [working title]" > $datetimenow"_$@"".txt"
else
    echo "please provide exactly one argument (post title)"
fi
