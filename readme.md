1. framework & tools<br>
Laravel<br>
Yarn<br>
Mysql<br>
Atom<br>
Chrome<br>

2. front-end<br>
Bootstrap<br>
Gulp.js<br>
sass<br>
jquery<br>

功能<br>
1. 用户注册，登录，登出验证
2. 用户信息编辑，更新，搜索，删除
3. 密码重置及邮件验证
4. 创建，修改，删除微博
5. 用户相互关注，取消关注
6. 使用 Faker/factory 创建模拟数据
7. 权限管理，包括查看页面，编辑个人信息，删除微博等<br>

170606: <br>
1. 添加了头像上传功能，并使用 Intervention Image 对上传照片进行压缩<br>

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
