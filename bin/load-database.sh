dbname=capi

echo "create user main WITH ENCRYPTED PASSWORD 'main';" | sudo -u postgres psql
echo "drop database if exists $dbname; create database $dbname; grant all privileges on database $dbname to main; " | sudo -u postgres psql
echo "CREATE EXTENSION pg_trgm;" | sudo -u postgres psql -d $dbname
echo "CREATE EXTENSION hstore;" | sudo -u postgres psql -d $dbname
echo "database $dbname now ready for migrations or restore"
xpgloader mysql://main:main@127.0.0.1:3306/seth postgresql://main:main@127.0.0.1:5432/capi

# now add the primary key to tables missing it.


#

#bin/console doctrine:schema:update --force
bin/console doctrine:migrations:migrate -n
bin/console hautelook:fixtures:load -n
bin/console app:load-jurisdiction dc && bin/create-admins.sh

#bin/console hautelook:fixtures:load -n --env heroku
#bin/console app:load-jurisdiction dc --env heroku && bin/create-admins.sh --env-heroku

#bin/console doctrine:query:sql "select tbl.table_schema,
#       tbl.table_name
#from information_schema.tables tbl
#where table_type = 'BASE TABLE'
#  and table_schema not in ('pg_catalog', 'information_schema')
#  and not exists (select 1
#                  from information_schema.key_column_usage kcu
#                  where kcu.table_name = tbl.table_name
#                    and kcu.table_schema = tbl.table_schema)"
