

# install docker-compose

sudo curl -L https://github.com/docker/compose/releases/download/1.21.0/docker-compose-`uname -s`-`uname -m` | sudo tee /usr/local/bin/docker-compose > /dev/null
sudo chmod +x /usr/local/bin/docker-compose
sudo ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose
docker-compose --version

# install docker

sudo yum update -y
sudo yum install docker -y
sudo service docker start
sudo usermod -a -G docker ec2-user

# インストールできるリスト確認
sudo yum list available | grep php72

# インストール
sudo yum install -y \
  php72 php72-devel php72-fpm php72-gd php72-mbstring \
  php72-mysqlnd php72-pdo \
  php72-xml php72-json

#インストール済みを確認
sudo yum list installed | grep php72

#バージョン確認
php -v

# apacheインストール
sudo yum install -y httpd24

#webサーバの起動
sudo service httpd start

#システムがブートするたびにapacheが起動するよう設定
sudo chkconfig httpd on

#有効か確認
chkconfig --list httpd

#ユーザをapacheグループに追加
sudo usermod -a -G apache ec2-user

#一旦ログアウト
exit
