#echo "[$DATABASE table]"
for TABLE in `mysql -uroot -N -s -e"show tables in qest_mall_db"`; do
    #echo $TABLE
    php artisan iseed --force $TABLE
done;
