1. user signup, login and logout
2. user edit, update, index and destroy
3. send email activation
4. password resets & email configuration
5. create, destroy and show posts
6. use Faker\Factory to create users & posts

迁移项目:
1. 从github克隆项目代码：
git clone git@github.com:bunnkou/sample.git

2. 添加新的contribute：
git remote add upstream git@github.com:bunnkou/

3. 安装composer.json中的相关依赖：
composer install

4. 迁移数据表：
php artisan migrate

5. 生成新的key：
php artisan key:generate
