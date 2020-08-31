#グループのメンバーシップを検証
groups

#グループ所有権をapacheグループに変更
sudo chown -R ec2-user:apache /var/www

#グループの書き込み許可追加
sudo chmod 2775 /var/www

#サブディレクトにグループ ID を設定するには、/var/www とサブディレクトのディレクトリ許可
find /var/www -type d -exec sudo chmod 2775 {} \;

#グループ書き込み許可を追加するには、/var/www とサブディレクトリのファイル許可を再帰的に変更します。
find /var/www -type f -exec sudo chmod 0664 {} \;


#インストール
sudo curl -sS https://getcomposer.org/installer | php

#パスを通す
sudo mv composer.phar /usr/local/bin/composer



# app permission

cd /var/www/html/
git clone https://github.com/cui-shinan0812/kusunoki.git
sudo chmod 777 storage -R
sudo chmod 777 bootstrap/cache -R
php artisan key:generate
php artisan config:clear


# apacheのドキュメントルート設定

sudo cp ./apache/httpd.conf /etc/httpd/conf/httpd.conf

#サービス再起動
sudo service httpd restart