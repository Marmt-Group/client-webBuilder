set -e

# Cleanup, because not all commands play well with already existing directories
rm -rf $LANDO_WEBROOT
rm -rf $WP_TESTS_DIR
echo Y | mysqladmin -u$DB_USER -p$DB_PASS -h$DB_HOST drop $DB_NAME
mysqladmin -u$DB_USER -p$DB_PASS -h$DB_HOST create $DB_NAME

# Install and configure WordPress
WP_VERSION=`curl -L http://api.wordpress.org/core/version-check/1.7/ | perl -ne '/"version":\s*"([\d\.]+)"/; print $1;'`
cd $LANDO_MOUNT
wp core download --path=$LANDO_WEBROOT --version=$WP_VERSION
wp config create \
	--path=$LANDO_WEBROOT \
	--dbname=$DB_NAME \
	--dbuser=$DB_USER \
	--dbpass=$DB_PASS \
	--dbhost=$DB_HOST
wp config set \
	--path=$LANDO_WEBROOT \
	--type=constant \
	--raw \
	WP_DEBUG true
wp core install \
	--path=$LANDO_WEBROOT \
	--url="http://$APP_NAME.lndo.site" \
	--title=$APP_DESCRIPTION \
	--admin_user=$ADMIN_USER \
	--admin_password=$ADMIN_PASS \
	--admin_email=$ADMIN_EMAIL \
	--skip-email
