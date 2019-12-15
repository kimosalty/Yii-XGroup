### **News页面代码说明**
**主要网站页面：views/news/group-news.php(新闻总页面）, views/news/one-news.php(单个新闻页面)**

group-news.php: 所有新闻全部陈列，新闻标题和阅读原文链接跳转到单个新闻页面，右侧是关键词搜索某个新闻，搜索结果返回单个新闻界面
首页导航栏上点击news进入该页面，路径为../index.php?r=news/group-news

one-news.php：单个新闻页面，包含新闻全部内容，右侧搜索同group-news
点击或搜索单个新闻进入该页面，路径为../index.php?r=news/one-news&id=..

**后台页面：views/news/index.php(后台控制总页面) , create.php , update.php等**

index.php：登录admin账户后在导航栏上点击Management/Group News 进入总页面，路径为../?r=news

**Model: models/News.php**

**Controller: controllers/NewsController**