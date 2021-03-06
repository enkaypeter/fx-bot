location / {
	index  index.php index.html index.htm;
	try_files $uri $uri/ /index.php?$query_string;

}

# for people with app root as doc root, restrict access to a few things
location ~ ^/(composer\.(json|lock|phar)$|Procfile$|<?=getenv('COMPOSER_VENDOR_DIR')?>/|<?=getenv('COMPOSER_BIN_DIR')?>/) {
	index  index.php index.html index.htm;
	try_files $uri $uri/ /index.php?$query_string;

	#deny all;
}
