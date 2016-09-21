~/app
- Commands: 命令行工具的控制器
- Controllers: WEB应用控制器
- Models: 数据库模型 -- 扩展 \Phalcon\Mvc\Model
- Helpers: 帮助工具类
  - 建议从Phalcon\User\Plugin继承
- Services: 业务服务抽象
  - 建议从Phalcon\User\Component继承
- Listeners: 监听器,也算是插件的一种
- Validators: 验证程序 -- 扩展 \Phalcon\Validator
- Workers: 后台服务
- views: 视图文件（非PHP代码）

~/bin
- composer 包管理工具
- deploy 部署管理工具

~/config
- database.yml 数据库配置

~/db
- migrations: 数据库迁移文件
- seeds: seeds文件,初始化数据

~/lib
- 非composer管理的第三方类库

~/log
- 应用程序内日志存放

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
