~/app
- commands: 命令行工具的控制器
- controllers: WEB应用控制器
- helpers: 帮助工具类
- models: 数据库模型 -- 扩展 \Phalcon\Mvc\Model
- services: 业务服务抽象
- validators: 验证程序 -- 扩展 \Phalcon\Validator
- workers: 后台服务
- views: 视图文件（非PHP代码）

~/bin

~/config
- application.php 应用初始化程序
- database.yml 数据库配置

~/db
- migrations: 数据库迁移文件
- seeds: seeds文件,初始化数据

~/lib
- 第三方类库

~/log
- 营业程序日志存放

~/public
- WEB应用的主目录

~/test
- 单元测试

~/tmp
- cache: 缓存类文件
  - volt: volt引擎编译缓存
- pids: 后台程序的pid文件位置（如有）
- sockets: 后台程序的socket文件位置（如有）

~/vendor
- composer的安装位置
