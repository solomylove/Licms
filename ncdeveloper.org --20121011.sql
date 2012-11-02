-- phpMyAdmin SQL Dump
-- version 3.5.0-rc2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 10 月 11 日 21:23
-- 服务器版本: 5.5.24-0ubuntu0.12.04.1-log
-- PHP 版本: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test1`
--

-- --------------------------------------------------------

--
-- 表的结构 `licms_access`
--

CREATE TABLE IF NOT EXISTS `licms_access` (
  `access_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `access_title` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `access_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`access_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=100 ;

--
-- 转存表中的数据 `licms_access`
--

INSERT INTO `licms_access` (`access_name`, `access_title`, `access_id`, `p_id`) VALUES
('article', '文章', 5, 0),
('filemanager', '文件管理', 6, 0),
('publish', '发表', 19, 5),
('del', '删除', 20, 5),
('manage', '管理', 21, 5),
('user', '前台用户', 22, 0),
('manage', '管理', 23, 22),
('rbac', '角色管理', 24, 0),
('edit', '编辑', 27, 5),
('del', '删除', 31, 28),
('ajaxUserMoneyHistory', '充值记录-<数据库', 77, 22),
('edit', '编辑', 41, 28),
('add', '添加', 42, 28),
('system', '系统', 49, 0),
('analyze', '网站统计', 50, 0),
('profile', '查看资料', 51, 22),
('repassword', '修改密码->数据库', 52, 22),
('del', '删除', 53, 22),
('money', '充值', 54, 22),
('userMoneyHistory', '充值记录', 55, 22),
('userPayHistory', '支付记录', 56, 22),
('checklogin', '检查登陆', 60, 33),
('add', '发表->数据库', 63, 5),
('ajaxManageContent', '数据库->管理', 64, 5),
('update', '编辑->数据库', 65, 5),
('ajaxManageContent', '管理<-数据库', 66, 22),
('role', '角色', 67, 24),
('access', '权限', 68, 24),
('menu', '菜单', 70, 24),
('hospital', '医院', 71, 0),
('manage', '管理', 72, 71),
('ajaxManageContent', '管理<-数据库', 73, 71),
('publish', '添加', 75, 71),
('add', '添加->数据库', 76, 71),
('ajaxUserPayHistory', '支付记录<-数据库', 78, 22),
('category', '分类', 79, 0),
('publish', '添加', 80, 79),
('add', '添加->数据库', 81, 79),
('del', '删除', 82, 79),
('edit', '编辑', 83, 79),
('update', '编辑->数据库', 84, 79),
('filecache', '更新缓存', 85, 0),
('password', '更改密码', 86, 0),
('index', '显示', 87, 86),
('update', '更改密码->数据库', 88, 86),
('admin', '后台用户', 89, 0),
('index', '首页', 90, 89),
('choose', '管理', 91, 79),
('del', '删除', 92, 71),
('money', '充值', 93, 0),
('pay', '支付', 94, 0),
('del', '删除', 95, 93),
('del', '删除', 96, 94),
('updateScore', '修改积分', 97, 22),
('updateScorePay', '修改扣分规则', 99, 22);

-- --------------------------------------------------------

--
-- 表的结构 `licms_admin`
--

CREATE TABLE IF NOT EXISTS `licms_admin` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `qq` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `role_id` int(10) NOT NULL,
  `login_count` int(20) NOT NULL DEFAULT '0',
  `last_login_time` int(20) NOT NULL,
  `create_time` int(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `licms_admin`
--

INSERT INTO `licms_admin` (`user_id`, `username`, `phone`, `qq`, `email`, `password`, `other`, `province_id`, `city_id`, `role_id`, `login_count`, `last_login_time`, `create_time`) VALUES
(1, 'lili', '', '', '', '4124bc0a9335c27f086f24ba207a4912', '', 1, 1, 3, 0, 1337777682, 1338095866),
(2, '东东', '', '5757019', '', '202cb962ac59075b964b07152d234b70', '', 21, 232, 3, 0, 1337501533, 1338095866),
(6, 'wo', '', '', '', 'e0a0862398ccf49afa6c809d3832915c', '', 7, 51, 3, 0, 0, 1338095866),
(7, 'dd', 'sfds', 'sdfsdfds', 'sdfsdf', '1aabac6d068eef6a7bad3fdf50a05cc8', 'dsfdsfsdf', 23, 245, 2, 0, 1337777871, 1338095866),
(8, 'licms', '', '', '', '54235e92f122523b0f86149f9833bd12', '', 0, 0, 1, 0, 1349276079, 1338095866),
(11, 'ee', '', '', '', '08a4415e9d594ff960030b921d42b91e', '', 23, 242, 3, 0, 1337695499, 1338095866),
(13, 'aa', '', '', '', '4124bc0a9335c27f086f24ba207a4912', '', 23, 245, 3, 0, 1337780266, 1338095866),
(14, 'ccc', '', '', '', '9df62e693988eb4e1e1444ece0578579', '', 0, 0, 3, 0, 1339423136, 1338095866),
(15, 'nnnn', '', '', '', 'f7c0e071db137f5ae65382041c7cef4b', '', 23, 245, 2, 0, 1339398314, 1338095866);

-- --------------------------------------------------------

--
-- 表的结构 `licms_article`
--

CREATE TABLE IF NOT EXISTS `licms_article` (
  `article_id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) NOT NULL,
  `hospital_id` int(10) NOT NULL,
  `author` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `read_count` int(10) NOT NULL,
  `download_count` int(10) NOT NULL,
  `article_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `create_time` int(40) NOT NULL,
  `publish_time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `tag` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `guide` text COLLATE utf8_unicode_ci NOT NULL,
  `photos` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL,
  `thumb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `top_id` int(10) NOT NULL,
  `short` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`article_id`),
  FULLTEXT KEY `content` (`content`),
  FULLTEXT KEY `article_title` (`article_title`),
  FULLTEXT KEY `tag` (`tag`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=162 ;

--
-- 转存表中的数据 `licms_article`
--

INSERT INTO `licms_article` (`article_id`, `content`, `category_id`, `hospital_id`, `author`, `read_count`, `download_count`, `article_title`, `user_id`, `create_time`, `publish_time`, `province_id`, `city_id`, `tag`, `link`, `guide`, `photos`, `status`, `thumb`, `top_id`, `short`) VALUES
(150, '<div class="hd">\r\n	<div class="titBar" bosszone="titleDown">\r\n		<div class="info">\r\n			<span class="pubTime">2012年06月12日11:02</span><span class="infoCol"><span class="where"><a href="http://www.dnkb.com.cn" target="_blank">东南快报</a></span></span><span class="infoComm"><a id="cmt_1" href="http://comment5.news.qq.com/comment.htm?site=news&amp;id=32063342" target="_blank">我要评论<span class="num">(<em id="comNum">23</em>)</span></a></span> \r\n		</div>\r\n		<div class="fontSize">\r\n			字号：<span id="fontSmall" class="small" title="切换到小字体">T</span>|<span id="fontBig" class="big" title="切换到大字体">T<img src="/uploads/big/1238557320-18480384510.jpg" alt="" /></span> \r\n		</div>\r\n	</div>\r\n</div>\r\n<div class="bd">\r\n	<div class="Line">\r\n	</div>\r\n	<div style="position:relative;" id="Cnt-Main-Article-QQ" bosszone="content">\r\n		<p style="text-align:center;">\r\n			资料图：台湾民间团体抗议教科书去中国化\r\n		</p>\r\n		<p style="text-indent:2em;">\r\n			“立委”郑丽君昨日指出，“教育部”正讨论高中历史课本有关台湾史内容，要求“避免以台湾取代中国”，并以“中华文化”为主体原则。前“行政院长”郝柏村日前投书媒体，质疑历史教科书在搞“台独”后，“教育部”对此认真看待，还订出原则，像中小学社会领域教科书被要求应回归“宪法”和“法令”用语。\r\n		</p>\r\n		<p style="text-indent:2em;">\r\n			“教育部”主要根据一份民众建议意见，要求修改台湾史的“历史定位”，藉此纳进中国史范畴。该民众意见要求凡提及大陆地区时，不应简称“中国”，应改称中国大陆、大陆。另在涉及政治层面与国际关系，应避免以“台湾”来取代“中华民国”的正式名称。此外，不应该提及“台湾地位未定论”，凡提及台湾地位时，应明确说明台湾属于中国的事实，并阐明此事实从1945年起国际间无任何异议。\r\n		</p>\r\n		<p style="text-indent:2em;">\r\n			另外，包括在处理李登辉“特殊国与国关系”及陈水扁“一边一国论”时，应同时述及马英九的“一个中国各自表述”的立场，同时说明此一立场遵循“宪法”的陈述。同时，该份民众意见要求以“中华文化为主体原则”。而在提及台湾这个移民社会时，也要强调在汉人大量移民后，中国人和中华文化已经成为主体的事实。<a id="backqqcom" title="点击进入腾讯首页" href="http://www.qq.com/?pref=article" target="_blank" alt="点击进入腾讯首页" bosszone="backqqcom"><img src="http://www.qq.com/favicon.ico" width="16" height="16" /></a> \r\n		</p>\r\n	</div>\r\n</div>', 98, 0, '', 397, 0, '台湾“教育部”要求教科书写明台湾属于中国', 8, 1339560094, '', 0, 0, '', '', '台湾“教育部”要求教科书写明台湾属于中国', 'a:1:{i:0;s:60:"<img src="/uploads/big/1238557320-18480384510.jpg" alt="" />";}', 0, '<img src="/uploads/big/big/>thumb_', 0, ''),
(142, '<p>\r\n	我们通常把服务器只当作服务器看待——不需要类似传统工作站的安全控制的野蛮盒子。我经常在安全评估里看到这些。事实上，Windows服务器是需要终端控制来确保安全的。这里是几个关于Windows服务器终端安全的常见问题解答。<img src="/uploads/20120617/1_101010142324_3.jpg" alt="" /> \r\n</p>\r\n<p>\r\n	<strong>我不能承受我的Windows服务器由于补丁和杀毒软件而掉线或<img src="/uploads/20120617/SE@5)]R9PTV5[B%9)O~`X1T.jpg" alt="" />者崩溃。锁定服务器这一论点的基础是什么，比如它们就是工作站？</strong> \r\n</p>\r\n<p>\r\n	事实上，大多数服务器都是工作站，供网络管理员进行操作，如浏览网页、传输文件和邮件等等。在目前情况下，服务器就像是一座房子，存储业务的大部分\r\n信息资产。由于恶意软件而开发缺失的补丁，或由于Metasploit以及类似的工具进行定向渗透，这些是很伟大的工程。同工作站相比，如果不是更棒，那\r\n就是同样棒。目前存在的问题是，我遇到的任何给定的无补丁的Windows系统，几乎总是服务器而不是工作站。\r\n</p>\r\n<p>\r\n	<strong>服务器需要什么样的恶意软件防护？</strong> \r\n</p>\r\n<p>\r\n	我认为控件需要像工作站的一样牢固。对新手来说，一个可靠的反病毒程序是很好的选择。使用一些互补的控件来预防间谍软件会比较好。确保能够针对数据\r\n库和类似的应用程序进行实时的扫描微调，把性能影响最小化。也要留意先进的恶意软件的控制，如Damballa和FireEye产品。这些技术可能非常有\r\n利——尤其是如果你知道或怀疑入侵者进入“房子”。白名单技术也正在受到我的喜爱。白名单对服务器有益的（更简单的），在服务器上你可能会运行比较少的应\r\n用程序并且配置更加标准化。\r\n</p>\r\n<p>\r\n	<strong>服务器上需要使用磁盘加密技术吗？</strong> \r\n</p>\r\n<p>\r\n	如果有物理服务器的风险，那么答案是肯定的。我遭遇过许多Windows服务器被盗窃和滥用的情况。无论是BitLocker或第三方选项，全盘加\r\n密技术是坚强的最后防线。你可以在应用程序、数据库和操作系统级别拥有世界上的所有控件，但是一个物理入侵就会结束一切，这将出现在数据泄漏事件列表上并\r\n登上各大媒体头版头条。\r\n</p>\r\n<p>\r\n	<strong>推荐的服务器硬化的最佳实践是什么？</strong> \r\n</p>\r\n<p>\r\n	你的内部审计员和调整员也许已经跟你讲清楚了安全性要求。如果没有，你必须后退一步，确定你想要保护的是什么，然后确定如何实施。NIST对初学者\r\n来说是很好的资源。我喜欢Microsoft的推荐，尤其是他们的Security Compliance \r\nManager工具。硬化Windows服务器没有万能解决方案。确定风险，利用可用的免费资源创建适合自己独特需求的最佳解决方案。例如，审计日志记录\r\n可能只针对一个业务，但是也可以给另外一个增加最小限度的价值。类似的情况如密码策略、远程访问控制、加密的网络通信会话这类。因此，明白你的需求，选择\r\n可以用在Windows操作系统和相关应用程序的安全控件，并保持检查。\r\n</p>\r\n<p>\r\n	当然，Windows服务器本质上更为静态，但是它们有许多（如果不是更多）的Windows相关风险比如它们的同行工作站。每种情况都是不同的。只要确保找到缺陷和锁定最重要的——在端点处。\r\n</p>\r\n<br />', 98, 0, '', 362, 0, 'Windows服务器强化的四个常见问题', 8, 1339497766, '', 0, 0, '服务', '', '', 'a:1:{i:0;s:59:"<img src="/uploads/20120617/1_101010142324_3.jpg" alt="" />";}', 0, '<img src="/uploads/20120617/big/>thumb_', 20, ''),
(143, '<h1>\r\n	<br />\r\n</h1>\r\n<p>\r\n	本篇的议题如下：\r\n</p>\r\n<p>\r\n	1.&nbsp;如何配置权限\r\n</p>\r\n<p>\r\n	2.&nbsp;启动SQL Profiler\r\n</p>\r\n<p>\r\n	3.&nbsp;介绍SQL Profiler 的GUI\r\n</p>\r\n<p>\r\n	4.&nbsp;保存一个跟踪\r\n</p>\r\n<p>\r\n	通过上一篇文章的讲述，相信大家已经对SQL Profiler有了一个初步的了解，或者有些朋友已经开始磨拳擦掌，想跃跃欲试了。在开始使用SQL Profiler之前，有一些问题需要注意。\r\n</p>\r\n<p>\r\n	1.&nbsp;不要随意的在生产环境下（或者说：实际的数据库工作的服务器环境）轻易的使用SQL Profiler，特别是在初学的时候。因为使用SQL Profiler会对服务器产生压力，带来一定的性能的影响，在初学的时候，不要拿正式的环境做实验。\r\n</p>\r\n<p>\r\n	2.&nbsp;最好在自己的本地搭建测试的数据库，然后采用一些脚本或者工具来模拟对数据库的使用。在后面的讲解中，我会运行一些示例的SQL 脚本来模拟。\r\n</p>\r\n<p>\r\n	3.&nbsp;SQL Profiler是一个操作性比较强的工具，最好是跟着本系列中的示例，一个个的动手操作和体会。\r\n</p>\r\n<p>\r\n	<strong>理解如何配置权限</strong> \r\n</p>\r\n<p>\r\n	在SQL Server中，正如不是谁都可以创建表，试图一样，也不是谁都可以自由的运行SQL Profiler的。因为SQL Profiler在运行的过程中可以看到很多的与服务器以及客户端相关的信息，所以要求运行这个工具的权限也很高。\r\n</p>\r\n<p>\r\n	在默认情况下，只有sa（SQL Server中的一个超级用户）和在SYSADMIN组中的用户可以运行SQL Profiler。在SQL \r\nServer 2005中，也可以通过用sa或者SYSADMIN用户给其他用户授权，从而使得其他的SQL \r\nServer用户也可以有这个权限。授权的SQL 脚本如下图2-1所示：\r\n</p>\r\n<p>\r\n	<a target="_blank" href="http://images.51cto.com/files/uploadimg/20120529/095156334.jpg"><img class="fit-image" alt="" src="http://images.51cto.com/files/uploadimg/20120529/095156334.jpg" height="77" width="402" border="0" /></a> \r\n</p>\r\n<p>\r\n	如上图所示，我们可以将LoginID替换为我们想要授权的用户名。\r\n</p>\r\n<p>\r\n	下面的一段脚本是收回这个授权的，如图2-2所示：\r\n</p>\r\n<p>\r\n	<a target="_blank" href="http://images.51cto.com/files/uploadimg/20120529/095216232.jpg"><img class="fit-image" alt="" src="http://images.51cto.com/files/uploadimg/20120529/095216232.jpg" height="74" width="449" border="0" /></a> \r\n</p>\r\n<p>\r\n	<strong>启动SQL Profiler</strong> \r\n</p>\r\n<p>\r\n	好，有了权限之后，我们就来好好的体验一把！\r\n</p>\r\n<p>\r\n	可以通过很多的方式打开SQL Profiler。我这里给大家介绍一下：\r\n</p>\r\n<p>\r\n	1.&nbsp;使用命令行工具打开。步骤非常简单，只要在CMD命令窗口输入“profiler“，然后按下“回车”就行了。这里需要注意的是，如果安装的\r\n是SQL Server 2008，那么就输入“profiler”，如果安装的是SQL Server \r\n2005，那么就输入“profiler90”。\r\n</p>\r\n<p>\r\n	我个人喜欢使用命令行方法，快捷！\r\n</p>\r\n<p>\r\n	注：这里非常抱歉，因为我所在的环境安装的都是英文版的操作系统与软件，所以很多的时候，一些界面会以英文的形式显示，希望朋友们见谅！\r\n</p>\r\n<p>\r\n	2.&nbsp;直接在SQL Server Management Studio的菜单中打开，如图2-3所示：\r\n</p>\r\n<p>\r\n	<a target="_blank" href="http://images.51cto.com/files/uploadimg/20120529/095339442.jpg"><img class="fit-image" alt="" src="http://images.51cto.com/files/uploadimg/20120529/095339442.jpg" width="498" border="0" /></a> \r\n</p>\r\n<p>\r\n	不管用什么方式，打开SQL Profiler之后，就看到如下的界面，如图2-4所示：\r\n</p>\r\n<p>\r\n	<a target="_blank" href="http://images.51cto.com/files/uploadimg/20120529/095516839.jpg"><img class="fit-image" alt="" src="http://images.51cto.com/files/uploadimg/20120529/095516839.jpg" width="498" border="0" /></a> \r\n</p>\r\n<p>\r\n	然后，在菜单“File”中选择“New Trace”，如图2-5所示：\r\n</p>\r\n<p>\r\n	<a target="_blank" href="http://images.51cto.com/files/uploadimg/20120529/095532964.jpg"><img class="fit-image" alt="" src="http://images.51cto.com/files/uploadimg/20120529/095532964.jpg" width="498" border="0" /></a> \r\n</p>\r\n<p>\r\n	当我们选择了“New Trace”（创建新跟踪）之后，就会弹出如下的界面，如图2-6所示：\r\n</p>\r\n<p>\r\n	<a target="_blank" href="http://images.51cto.com/files/uploadimg/20120529/095555855.jpg"><img class="fit-image" alt="" src="http://images.51cto.com/files/uploadimg/20120529/095555855.jpg" width="498" border="0" /></a> \r\n</p>\r\n<p>\r\n	使用合法的身份验证方式进入之后，就会看到选择要跟踪的事件的界面，如图2-7所示：\r\n</p>\r\n<p>\r\n	<a target="_blank" href="http://images.51cto.com/files/uploadimg/20120529/095610905.jpg"><img class="fit-image" alt="" src="http://images.51cto.com/files/uploadimg/20120529/095610905.jpg" width="498" border="0" /></a> \r\n</p>\r\n<p>\r\n	在这个界面中，包含了两个选项卡，一个是“General”，另外一个是“Events Selection”。这里我们很有必要对界面中做一些简单的介绍。\r\n</p>\r\n<p>\r\n	在“General”选项卡中，我们可以对跟踪进行命名，还可以选择不同的模板，并且还可以设置很多不同的选项。\r\n</p>\r\n<p>\r\n	其中，Trace Provider name就是指的我们要跟踪的SQL Server的实例名；Trace provide type，指的就是数据库的版本名，而version就是版本的数字表示。\r\n</p>\r\n<p>\r\n	在这里，比较重要的一个选择就是“Use the template”，如图2-8所示:\r\n</p>\r\n<p>\r\n	<a target="_blank" href="http://images.51cto.com/files/uploadimg/20120529/095632705.jpg"><img class="fit-image" alt="" src="http://images.51cto.com/files/uploadimg/20120529/095632705.jpg" width="498" border="0" /></a> \r\n</p>\r\n<p>\r\n	在这里可以选择一个跟踪的模板，不同的模板，功能不一样，并且模板中事件，数据列，过滤器等都不一样！每一种模板的用处，我们会在后续文章讲述。\r\n</p>\r\n<p>\r\n	另外，在““Events Selection选项卡”中，选择我们要跟踪的事件，如图2-9所示：\r\n</p>\r\n<p>\r\n	<a target="_blank" href="http://images.51cto.com/files/uploadimg/20120529/095738418.jpg"><img class="fit-image" alt="" src="http://images.51cto.com/files/uploadimg/20120529/095738418.jpg" width="498" border="0" /></a> \r\n</p>\r\n<p>\r\n	这里出于体验的目的，我们将一切都保持默认！\r\n</p>\r\n<p>\r\n	下面，我们就开始启动SQL Profiler去监控数据库中发生的活动：点击“Run”按钮，如图2-10所示：\r\n</p>\r\n<p>\r\n	<a target="_blank" href="http://images.51cto.com/files/uploadimg/20120529/095758821.jpg"><img class="fit-image" alt="" src="http://images.51cto.com/files/uploadimg/20120529/095758821.jpg" width="498" border="0" /></a> \r\n</p>\r\n<p>\r\n	那么启动之后，因为这个时候SQL Profiler是对整个SQL Server实例进行监控的，也就是说，在SQL Server中的任意一个数据库发生了任何的活动，都会被SQL Profiler捕获到（当然，如果设置了过滤器就例外了）。\r\n</p>\r\n<p>\r\n	为了使得效果明显，我这里运行一些脚本，对数据库进行一些操作，起到模拟的作用。我们看到下面的一个效果图2-11所示：\r\n</p>\r\n<p>\r\n	<a target="_blank" href="http://images.51cto.com/files/uploadimg/20120529/095817795.jpg"><img class="fit-image" alt="" src="http://images.51cto.com/files/uploadimg/20120529/095817795.jpg" width="498" border="0" /></a> \r\n</p>\r\n<p>\r\n	从图中可以看到，我在SQL Server运行一个查询，这个时候SQL Profiler立刻就捕获到了这个动作。\r\n</p>\r\n<br />', 20, 0, '', 405, 0, '全面掌握SQL Profiler系列2：快速使用(1)', 8, 1339498392, '', 0, 0, '', '', '本篇的议题如下：  1. 如何配置权限  2. 启动SQL Profiler  3. 介绍SQL Profiler 的GUI  4. 保存一个跟踪', '', 0, '', 0, ''),
(144, '<p>\r\n	记得在2010年八九月份，清科曾举办过一场<a href="http://ec.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">电子商务</a>方面的小型论坛。那时候，京东、凡客还没有像今天这样显山露水。\r\n</p>\r\n<p>\r\n	金沙江创投合伙人在这个论坛上的一句话至今让人记忆犹新：现在如果哪家投资机构手里没几个电商项目的话，一定急死了。\r\n</p>\r\n<p>\r\n	也是在那个论坛上，有人做了这样的预测：未来几年，中国出现10家上市的电商公司没有问题。\r\n</p>\r\n<p>\r\n	近几年来，中国创业者和VC/PE在用实际行动证实比尔·盖茨十多年前的那个预言，“21世纪，要么<a href="http://ec.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">电子商务</a>，要么无商可务。”\r\n</p>\r\n<p>\r\n	据清科的统计，2008年，中国<a href="http://ec.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">电子商务</a>领域获得融资的企业有7家，2009年达到16家，2010年为52家，2011年飙升至116家。这个领域每年的融资额也随之剧增：从2008年的2.2838亿美金增至2011年的16.6941亿美金。\r\n</p>\r\n<p>\r\n	但上市却愈加成为一个难题。\r\n</p>\r\n<p>\r\n	2010年，麦考林和当当先后上市，但如今，麦考林股价已经跌至2美金以下，当当如今的股价也较16美金的发行价跌去一半多。第三家电商公司唯品会虽于近期上市，但截至目前一直流血不止。\r\n</p>\r\n<p>\r\n	一级市场也是风水轮流转：电商热的时候，是VC/PE求着企业给点份额，现在角色完全转换了。\r\n</p>\r\n<p>\r\n	对于VC而言，曾经的香饽饽真的完全变成了烫手山芋？大大小小的，融过资的，未融资的，上市的未上市的电商企业，该如何度过这个资本冬天？\r\n</p>\r\n<p>\r\n	<strong>IDG资本合伙人杨飞、某知名外资VC副总裁张扬(化名)、电商企业聚尚网副总裁易宗元各自给出了看法。</strong>\r\n</p>\r\n<p>\r\n	<strong>记者：</strong>现在电商投资趋冷，您现在对电商的投资态度是什么？\r\n</p>\r\n<p>\r\n	<strong>杨飞：</strong>我想我们的步骤不会太受这个影响。\r\n</p>\r\n<p>\r\n	IDG一直坚持的是，看创业团队和公司的内在价值多一些，相比其他人，我们的投机性会少一些。\r\n</p>\r\n<p>\r\n	以前，我们也没有拼命跟别人用高价去抢。现在是市场低潮期，如果有好的模式，好的团队，我们还是会投的。\r\n</p>\r\n<p>\r\n	<strong>张扬：</strong>用户越来越接受<a href="http://ec.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">电子商务</a>，还在持续地为<a href="http://ec.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">电子商务</a>买账，所以，这件事就有价值。VC还在继续投，就是认为，电商还是有机会的。\r\n</p>\r\n<p>\r\n	<strong>记者：</strong>现在，您认为什么样的电商公司还有融资机会？\r\n</p>\r\n<p>\r\n	<strong>杨飞：</strong>我们投过一个淘品牌叫韩都衣舍，它不光是盈利的，也不只是简单地弄点东西在网上卖，它的组织方式、销售方法、货品管理、渠道管理、客户管理等，都是不一样的。我认为这就是好的模式，好的团队。\r\n</p>\r\n<p>\r\n	<strong>张扬：</strong>比如，京东卖的货太多了，有时候，它的某一个单品类的跟一些垂直网站相比，没有优势，这就给了垂直的网站机会。比如卖鞋，一年的市场就有一两千亿，鞋又比较标准化，它就会有机会。\r\n</p>\r\n<p>\r\n	无论是本土还是外资GP，都有人在用人民币基金投一些电商。一些电商其实是盈利的，我们投资的公司里面，就有3家电商是盈利的，模式可能跟京东、凡客这些需要高举高打的不一样，但确实可以盈利。\r\n</p>\r\n<p>\r\n	<strong>记者：</strong>现在比较矛盾的一点是，对于已经私募融过资，仍需再次融资的电商来说，现在估值，可能低于上一轮投资者给的估值。无论创业者还是投资方，都难以接受。\r\n</p>\r\n<p>\r\n	<strong>杨飞：</strong>肯定还是要融资的，因为这个行业还是要靠大量资金来支撑的。关键还是创业者的心态。如果创业者认为，这个资金很重要，即便是Downround，他也应该融。不现实一点，就有可能死掉，或者变得规模很小，等到市场机会来了，它也没机会了。跟原来的梦想完全不对了嘛。\r\n</p>\r\n<p>\r\n	<strong>张扬：</strong>这个行业已经有公开定价了，一级市场估值必然要跟着下降。除非像京东、凡客这样在自己的领域里面遥遥领先的，才有议价能力，比如乐淘、好乐买，如果大家的数据差不多的话，那就谁也没有议价能力。\r\n</p>\r\n<p>\r\n	<strong>记者：</strong>是否还有其他的出路？\r\n</p>\r\n<p>\r\n	<strong>杨飞：</strong>我觉得接下来会是并购的好时候。我们投的一些电商公司也会有一些并购的计划。\r\n</p>\r\n<p>\r\n	<strong>张扬：</strong>肯定会有行业并购出现，无论是二级市场还是一级市场，都有并购的机会。\r\n</p>\r\n<strong>易宗元：</strong>今年可能有大量公司会死掉。并购会是一个不错的方法，抱团取暖嘛<br />', 97, 0, '', 280, 0, '电商融资进入冰冻期：企业如何活下来？', 8, 1339498502, '', 0, 0, '', '', '', '', 0, '', 0, ''),
(145, '<span class="font_1"><br />\r\n</span> \r\n<p>\r\n	记得在2010年八九月份，清科曾举办过一场<a href="http://ec.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">电子商务</a>方面的小型论坛。那时候，京东、凡客还没有像今天这样显山露水。\r\n</p>\r\n<p>\r\n	金沙江创投合伙人在这个论坛上的一句话至今让人记忆犹新：现在如果哪家投资机构手里没几个电商项目的话，一定急死了。\r\n</p>\r\n<p>\r\n	也是在那个论坛上，有人做了这样的预测：未来几年，中国出现10家上市的电商公司没有问题。\r\n</p>\r\n<p>\r\n	近几年来，中国创业者和VC/PE在用实际行动证实比尔·盖茨十多年前的那个预言，“21世纪，要么<a href="http://ec.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">电子商务</a>，要么无商可务。”\r\n</p>\r\n<p>\r\n	据清科的统计，2008年，中国<a href="http://ec.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">电子商务</a>领域获得融资的企业有7家，2009年达到16家，2010年为52家，2011年飙升至116家。这个领域每年的融资额也随之剧增：从2008年的2.2838亿美金增至2011年的16.6941亿美金。\r\n</p>\r\n<p>\r\n	但上市却愈加成为一个难题。\r\n</p>\r\n<p>\r\n	2010年，麦考林和当当先后上市，但如今，麦考林股价已经跌至2美金以下，当当如今的股价也较16美金的发行价跌去一半多。第三家电商公司唯品会虽于近期上市，但截至目前一直流血不止。\r\n</p>\r\n<p>\r\n	一级市场也是风水轮流转：电商热的时候，是VC/PE求着企业给点份额，现在角色完全转换了。\r\n</p>\r\n<p>\r\n	对于VC而言，曾经的香饽饽真的完全变成了烫手山芋？大大小小的，融过资的，未融资的，上市的未上市的电商企业，该如何度过这个资本冬天？\r\n</p>\r\n<p>\r\n	<strong>IDG资本合伙人杨飞、某知名外资VC副总裁张扬(化名)、电商企业聚尚网副总裁易宗元各自给出了看法。</strong> \r\n</p>\r\n<p>\r\n	<strong>记者：</strong>现在电商投资趋冷，您现在对电商的投资态度是什么？\r\n</p>\r\n<p>\r\n	<strong>杨飞：</strong>我想我们的步骤不会太受这个影响。\r\n</p>\r\n<p>\r\n	IDG一直坚持的是，看创业团队和公司的内在价值多一些，相比其他人，我们的投机性会少一些。\r\n</p>\r\n<p>\r\n	以前，我们也没有拼命跟别人用高价去抢。现在是市场低潮期，如果有好的模式，好的团队，我们还是会投的。\r\n</p>\r\n<p>\r\n	<strong>张扬：</strong>用户越来越接受<a href="http://ec.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">电子商务</a>，还在持续地为<a href="http://ec.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">电子商务</a>买账，所以，这件事就有价值。VC还在继续投，就是认为，电商还是有机会的。\r\n</p>\r\n<p>\r\n	<strong>记者：</strong>现在，您认为什么样的电商公司还有融资机会？\r\n</p>\r\n<p>\r\n	<strong>杨飞：</strong>我们投过一个淘品牌叫韩都衣舍，它不光是盈利的，也不只是简单地弄点东西在网上卖，它的组织方式、销售方法、货品管理、渠道管理、客户管理等，都是不一样的。我认为这就是好的模式，好的团队。\r\n</p>\r\n<p>\r\n	<strong>张扬：</strong>比如，京东卖的货太多了，有时候，它的某一个单品类的跟一些垂直网站相比，没有优势，这就给了垂直的网站机会。比如卖鞋，一年的市场就有一两千亿，鞋又比较标准化，它就会有机会。\r\n</p>\r\n<p>\r\n	无论是本土还是外资GP，都有人在用人民币基金投一些电商。一些电商其实是盈利的，我们投资的公司里面，就有3家电商是盈利的，模式可能跟京东、凡客这些需要高举高打的不一样，但确实可以盈利。\r\n</p>\r\n<p>\r\n	<strong>记者：</strong>现在比较矛盾的一点是，对于已经私募融过资，仍需再次融资的电商来说，现在估值，可能低于上一轮投资者给的估值。无论创业者还是投资方，都难以接受。\r\n</p>\r\n<p>\r\n	<strong>杨飞：</strong>肯定还是要融资的，因为这个行业还是要靠大量资金来支撑的。关键还是创业者的心态。如果创业者认为，这个资金很重要，即便是Downround，他也应该融。不现实一点，就有可能死掉，或者变得规模很小，等到市场机会来了，它也没机会了。跟原来的梦想完全不对了嘛。\r\n</p>\r\n<p>\r\n	<strong>张扬：</strong>这个行业已经有公开定价了，一级市场估值必然要跟着下降。除非像京东、凡客这样在自己的领域里面遥遥领先的，才有议价能力，比如乐淘、好乐买，如果大家的数据差不多的话，那就谁也没有议价能力。\r\n</p>\r\n<p>\r\n	<strong>记者：</strong>是否还有其他的出路？\r\n</p>\r\n<p>\r\n	<strong>杨飞：</strong>我觉得接下来会是并购的好时候。我们投的一些电商公司也会有一些并购的计划。\r\n</p>\r\n<p>\r\n	<strong>张扬：</strong>肯定会有行业并购出现，无论是二级市场还是一级市场，都有并购的机会。\r\n</p>\r\n<strong>易宗元：</strong>今年可能有大量公司会死掉。并购会是一个不错的方法，抱团取暖嘛<br />', 20, 0, '', 331, 0, '电商融资进入冰冻期：企业如何活下来？', 8, 1339498892, '', 0, 0, '', '', '', '', 0, '', 20, ''),
(146, '<p>\r\n	关于选用在线<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>还是安装型<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>的争论似乎从未停止。不久前，笔者还看到有文章列举了<a href="http://new.cioage.com/wuyou/%28http://www.cioage.com/art/201108/93877.htm%29">Saas与</a><a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>不兼容的三大原因，其中提及语音问题、网络流量问题和与其他软件的兼容问题。这些技术类问题在笔者看来，都不足以成为阻碍<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>云化的巨大障碍，而XTools副总裁谢亿民的观点中，Saas和云时代的<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>是<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>发展道路上的必经阶段。\r\n</p>\r\n<p>\r\n	谢亿民在回答CIOAge记者提问时提到，<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>的发展阶段包括以下几个部分：第一个阶段是：<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>被引入中国，第二阶段：中国的本土<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>企业兴衰，第三阶段：SaaS和云时代的<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>，XTools在2004年开启云<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>的新纪元。第四阶段：社会化<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>是未来。\r\n</p>\r\n<p>\r\n	<strong><a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>的触云之路：安全不是问题</strong>\r\n</p>\r\n<p>\r\n	谢亿民称，“据我了解，不下50家大小企业期望加入，和开发云端的<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>，我觉得这就是对整个云端的绝对正确的估计!<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>成为企业云端的核心毋庸置疑!”但他同时指出，“<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>云之路，不会一帆风顺，saasbb和阿里软件的失败，某企业的转型，都是警告!”\r\n</p>\r\n<p>\r\n	目前业界关于<a href="http://www.cioage.com/col/1338/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">云计算</a>的讨论正如火如荼，这股热焰也带动了Saas服务的再度兴起。不过，仍有相当的企业对<a href="http://www.cioage.com/col/1338/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">云计算</a>和Saas持观望态度。技术和市场不够成熟是一方面，但更重要的，很多企业主提到，将数据放在自己不能掌控的“云端”，对安全性问题着实不够放心。\r\n</p>\r\n<p>\r\n	云安全正在成为<a href="http://www.cioage.com/col/1338/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">云计算</a>发展道路上最大的拦路虎。而谢亿民却说“我不觉得，<a href="http://www.cioage.com/security/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">数据安全</a>和信任是阻碍云的发展的因素，反而这些因素在让很多厂商畏手畏脚，自己把自己吓住了，不敢前进一步”。谢进一步说，“客户目前并不怕<a href="http://www.cioage.com/security/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">网络安全</a>，怕的是云厂商对数据，对客户数据像中国移动，电信一样怠慢，在法律等方面协议上可以解决。”毕竟，<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>系统包含的是客户的关键数据，如何打消客户顾虑，仍是Saas型<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>厂商需要解决的问题。谢说，“如何让客户信任，不是技术手段可以简单解决的问题，他是一个综合的解决方案提供给客户”。\r\n</p>\r\n<p>\r\n	Saas <a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>领\r\n域的新秀WorkXP公司也面临这样的拷问。其创始人之一张鸿江在回答CIOAge记者关于安全性问题的质疑时，曾表示，作为一家期望做大做强的公\r\n司，WorkXP不会将客户数据用于非法用途，因为那不是他们的核心盈利模式，他们不会做因小失大的事。这是一个诚信问题。保障客户数据隐私安全，提供令\r\n其信任及信服的服务，才是一个有远见的公司应该做的事。\r\n</p>\r\n<p>\r\n	此观点与数据保护专家、香港计算机协会会长刘嘉敏先生的看法不谋而合。看来，诚信角度的云安全问题，我们已经不用太过担心了。至于技术层面，在企业和厂商双方共同的努力下，必然朝着乐观的方向发展(<a href="http://www.cioage.com/art/201109/94250.htm">推荐文章：10种方法保障</a><a href="http://www.cioage.com/col/1338/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">云计算</a>的安全性)。\r\n</p>\r\n<p>\r\n	<strong>社会化<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>是未来</strong>\r\n</p>\r\n<p>\r\n	我们注意到，在Xtools谢亿民的描述中，“社会化<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>是未来”。这一观点得到了GotoPartner刘江涛的呼应，刘在微博上表示：“<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>是管理“人”的关系，社会化也是以“人”为核心;<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>纵向必定会打通上下游企业边界，横向必然会融合其它企业应用进来，逐步过渡到第四阶段：社会化<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>。日前Yammer与Netsuite整合，即为社会化工具与<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>应用结合的又一例证。Salesforce的Chatter威力还未开始发挥出来，但指日可待。”\r\n</p>\r\n<p>\r\n	诚如刘江涛所言，将社会化网络的相关内容融入到<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>中来，已是众多<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>厂商正在尝试的内容。\r\n</p>\r\n<p>\r\n	甲骨文的社会化<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>产品Oracle <a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a> On Demand，在过去4年半时间里共发布了15个版本。今年他们还将这种应用推广到了手机上。\r\n</p>\r\n<p>\r\n	腾讯不久前正式对外宣布，旗下企业级微博营销产品“微空间”测试版正式上线，旨在为企业提供一个基于用户泛关系链营销的全平台社会化<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>(<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">客户关系管理</a>)工具。\r\n</p>\r\n<p>\r\n	今年5月，八百客正式推出其社会化<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>产品“KK通”，CIOAge曾就此话题专访过八百客副总李淼 (<a href="http://www.cioage.com/art/201106/93029.htm">专访八百客：社交</a><a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>将带来企业管理变革) ，李淼称社交<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>是一种“变革性产品”，它与传统<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>最大的不同是它是由“底层使用者的需求来推动的”。\r\n</p>\r\n<p>\r\n	多数人都认同社会化<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>将带来<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">客户关系管理</a>领域的变革：“传统<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>是将公司搜集到的消费者有关信息输入到<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>系统中，通过销售、市场推广以及产品服务等措施，借此有可能获得更多的潜在目标消费者。社会化<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>赋予了企业公关部门更重要的角色，通过公关部分与消费者更多的互动，从中获取消费者的反馈信息、褒贬意见、新想法新创意。之后再通过销售、市场推广以及产品服务等措施来吸引更多目标消费群，并用公关活动来进一步推广。同时，较传统<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>而言，客户有更多的主动权，而不是被动的‘被销售’。 ”\r\n</p>\r\n<p>\r\n	与<a href="http://www.cioage.com/col/1338/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">云计算</a>一样，这场变革将带给企业更大的机会和便利，但同时也带来了更多的考验。比如，一旦融入更开放的“社会化血液”，企业驾驭<a href="http://crm.cioage.com/" target="_blank" style="font-size:14px;text-decoration:none;color:#0000FF;">CRM</a>的难度也随之增加——不过，这又有什么关系呢，企业发展的哪一次跨越不是伴随着风浪?\r\n</p>\r\n<br />', 20, 0, '', 42, 0, 'CRM发展趋势：从“云”端到社会化', 8, 1339498958, '', 0, 0, '', '', '', '', 0, '', 0, ''),
(147, '<p>\r\n	走进嘉陵区农村信用合作联社，楼道间的一条条格言立即吸引了笔者的目光，“人生之旅阡陌路，心明眼亮不迷途”、“信仰是人生的精神支柱，信念是人生\r\n的精神食粮”、“追求无须好高骛远，爱岗敬业就好”……这一句句饱含哲理，予人启迪的格言诗，均出自该信用联社职工刘大勇之手。2009年，他出版了《格\r\n言诗典》，其中收录了8000多条他的原创格言，《人民日报》原社长、中华全国新闻工作者协会名誉主席、书法家邵华泽先生为此书提名。\r\n</p>\r\n<p>\r\n	50岁出头的刘大勇自幼对文学情有独钟。1992年从部队转业后，他开始创作诗歌。代表诗作《玫瑰花开》、《金十月》等曾分别获改革开放30年诗词终身成就奖、共和国60周年诗词特等奖。\r\n</p>\r\n<p>\r\n	作为一名业余作家，他积极参与各种文化活动，也多次受邀到北京等地参加交流会。这样的经历让他有机会结识文学大家，并拜他们为师，其作品得以受大师指点。长此以往，他形成了自己独特的文风，尤其是在叙事诗歌这种体裁上造诣很深。\r\n</p>\r\n<p>\r\n	2008年，刘大勇萌生了一个大胆的想法：绝大部分的人物传记都是以记叙文的形式写出来的，既然自己善于写叙事诗，为什么不用长篇叙事诗的形式来为这些历史人物作传记呢？\r\n</p>\r\n<p>\r\n	要把这个想法付诸实现，他做了大量的工作。他确定了朱德为写作人物，此后，便是长达1年多的准备。期间，他成了朱德故里的常客，每隔几周都要到那里\r\n去看看，边搜集资料边寻找创作灵感；此外，书店成了他的第二个家，几乎每天都要泡在书店里，由于跟朱德有关的书籍太多，自己不可能一一买下，他便随身携带\r\n上纸笔，看到有用的部分，就记下来。\r\n</p>\r\n<p>\r\n	2010年，他开始动笔。因为准备充分，写作起来也就驾轻就熟，用了1年多时间，去年7月，《朱德颂》完成。翻开书卷，一行行七言诗整齐排列着，朗朗上口的同时通俗易懂。\r\n</p>\r\n<p>\r\n	“我写书完全出于个人爱好，纯粹就是想把自己内心真实想法在书中表现出来，寻找一片心灵的净土。”刘大勇说。\r\n</p>\r\n<br />', 98, 0, '', 87, 0, '业余作家醉心文学 给心灵一方净土', 8, 1339500859, '', 0, 0, '', '', '', '', 0, '', 0, ''),
(148, '素罗衣\r\n<p>\r\n	一\r\n</p>\r\n<p>\r\n	他漂亮地挥着手，整个人掉进自己的指挥里，左一下，右一下，一会开，一会合。啪！帽子被自己的手碰掉了，不理会。下面善意的哄笑声仿佛没听见，继续\r\n全心全意挥着手，左一下，右一下，一会开，一会合，直到一曲终了，才打了个收势停下来，缓缓地躬下身，把帽子拾起来扣在自己欣欣向荣的白发上。\r\n</p>\r\n<p>\r\n	不过是一堂合唱指挥课，他却做得动情动容，从容有度。“这个老头儿临事不乱，有分有寸，真是认真得可以。”我心中闪过一念。\r\n</p>\r\n<p>\r\n	他姓罗，叫罗培尧，快80岁了。他的名头很多，大提琴手、音乐家、指挥家……可背地里，我们都直呼他罗老头儿，没有不敬的意思，相反是一种故意想要拉近距离的亲热，昵称似的。\r\n</p>\r\n<p>\r\n	二\r\n</p>\r\n<p>\r\n	记得第一次见他，是在2008年7月，他作为蓬安县迎七一“千人大合唱”的总指挥来训导我们。起始的他是风趣的，一开口，便博满堂彩：“有的人站在那儿面无表情，像个木头似的，脸上没有春夏秋冬！”\r\n</p>\r\n<p>\r\n	一片会心的笑声，“有的人”也笑了，但老先生自己并不笑。他不流露，这种不流露，也是一种低调的得意吧——明知道你们要笑，我偏不笑，这老头儿真是好玩得很。\r\n</p>\r\n<p>\r\n	有人东张西顾，他停下说，眼睛看哪儿呢，看我！我还不至于长得惨不忍睹吧？！——又是小顽皮。当然不惨，而是很可一睹。有女队员钦羡道，这老帅哥长得真好看，年轻时不知道好帅！——可不，他神观迈爽，仪表堂堂，高高的身体像钉子一样稳当当地戳在地里，威仪而有官相。\r\n</p>\r\n<p>\r\n	不过不是官。不但不是，而且常跟“官”过不去。他给某机关队排合唱，有人不守纪律接打手机，他当时就“黑”了脸，给对方一个“下不来台”，下面有人小声提醒：那是我们头儿。\r\n</p>\r\n<p>\r\n	他回话了，脸朝着提醒者，话却冲着“头儿”：“我晓得，今天‘长字号’挺多的，不过我不管你是市长还是局长，既然站在这儿，你的身份就只能是合唱队队员，就得听我指挥，把你们身上这个机那个机统统关掉，谁也不允许把办公室搬到我这儿来！”\r\n</p>\r\n<p>\r\n	话一出口，便是金戈铁马声，十分硬，十分沉，也不管人家脸上挂不挂得住。“长字号”&nbsp;知道自己理亏，红着脸关了机。其他人更虚了，再不敢开小差。\r\n</p>\r\n<p>\r\n	2008年，南充市举行首届嘉陵江合唱艺术节，我参加的教师队实力很强，可政府队获奖的呼声最高。比赛前夕，他拿着话筒对合唱队员喊话：“艺术是纯\r\n洁的，是至高无上的，是掺不得半点假的。我鄙视那些在艺术上玩弄权术的人。谁想在这次合唱中耍手腕来获取不该得的荣誉，我决不答应！”\r\n</p>\r\n<p>\r\n	好个“决不答应”！他的话音一落，掌声如雷。比赛结果，教师队无惊无险地拿了第一！比赛结束后，我写了篇博客，把他的话恭恭敬敬记下来，开篇第一句便是：有个人必须得写一写。\r\n</p>\r\n<p>\r\n	三\r\n</p>\r\n<p>\r\n	就是那一次，大家对他起了敬爱之心，是发自内心的敬与爱吧，老先生操守坚正，遇事敢前，受人尊重是因为人们崇尚公理与正义。\r\n</p>\r\n<p>\r\n	去年下半年又见到老先生。受蓬安县教育局之邀，他来给全县音乐老师授课，不知什么事惹他感触，讲着讲着就岔了道，突然发起威来，下面的人屏着呼吸，不敢再溜出去“上厕所”了。\r\n</p>\r\n<p>\r\n	他的身上，有一种“志于道，据于德”的东西吧，他的道德与良知，他鲜明的人格和立场，能忽儿让你起震动，然后惶惶然自惊自省，转尔自惭自悔，最后自警自励。\r\n</p>\r\n<p>\r\n	他说，现在不是倡导文化吗，不是说要大繁荣大发展吗？怎么有的地方电视台连个音乐频道也没有，即使有，也是放几首乐曲了事。这也能叫音乐频道？是繁荣文化？\r\n</p>\r\n<p>\r\n	那切切之意，真让人动容。我想，如果文化部门的官员在座，他定要直直问到人家脸上去。\r\n</p>\r\n<p>\r\n	老先生的信仰是音乐。他愿意每一个人都受到文学艺术的教化与养护，获得精神上的滋润，可是现实并不乐观。于是他赌气似的，像在和面前的一个影子，又像和自己较着劲：“我手头的资料很多，你们需要什么音乐，就给我打电话，我免费提供给你们。要我创作的作品也行，全都免费！”\r\n</p>\r\n<p>\r\n	他说，现在，有的人连中国音乐家协会都没进，却整天打着什么家什么家的牌子收学生，到处挣钱。我也收学生，也收学费，但我收的学费估计是全国最低\r\n的，比刚从艺校出来的小毛孩子收费都低。他又停了停，像书里的破折号，解释似地继续：“本来不想收费，但如果一点不收，学的人又不会珍惜，所以便象征性地\r\n收一点，结果却因为我收得太少了，竟有人去音协投诉，说我把市场价格搞乱了。”\r\n</p>\r\n<p>\r\n	在不少人都忙着淘金的当下，文化和艺术成了个别人的漂亮外衣，成了赚钱的工具，与某些人为伍，老先生是寂寞和不被理解的吧。一想到这，我心里就难过\r\n起来。他依然意气难平，语音朗朗：“本来学生们已花了学费，人家在学校里没学到东西，我们这些作老师的就有责任把知识教给他，这是我们的本分！”\r\n</p>\r\n<p>\r\n	我当时听得竟然呆住。没有流泪的理由，可是我流泪了。\r\n</p>\r\n<p>\r\n	社会是个大酱缸，不知淹了多少人的良心，而他却一直理智而清醒地站在缸口。他似乎与这个时代有些格格不入，是脱节的，有隔的，无论如何，他都把自己\r\n放不到这个时代中去。许多搞艺术的人，都靠着自己的才华和小聪明发了，老先生搞了一辈子音乐，至今仍住在一套仅有几十个平米的旧房子里。每天看看书，听听\r\n音乐，平静地坚持自己的艺术品格和人格，不折不从，不降格邀宠，不迁媚世俗，也不倚人自重。\r\n</p>\r\n<p>\r\n	这样的老头儿古而又稀，实在是太少了，太少了。\r\n</p>\r\n<p>\r\n	现在，我偶尔也要坐在评委席上，每当我提起笔，想要胡乱给出个分数的时候，就不由得想起老先生那灼热而严冷的目光，想起他那天紧咬着腮帮子，一字一字吐出来的话，我的心会平静下来，同时四周也变安静了，安静得就连太阳光落在房顶上和地上，也是有声响的。\r\n</p>\r\n<br />', 98, 0, '', 120, 0, '罗培尧这样的“老头儿”太少', 8, 1339500998, '', 0, 0, '', '', '', '', 0, '', 0, '');
INSERT INTO `licms_article` (`article_id`, `content`, `category_id`, `hospital_id`, `author`, `read_count`, `download_count`, `article_title`, `user_id`, `create_time`, `publish_time`, `province_id`, `city_id`, `tag`, `link`, `guide`, `photos`, `status`, `thumb`, `top_id`, `short`) VALUES
(149, '为集中展示“第21届国际木偶联会大会暨国际木偶节南充主题会场”系列活动的精彩画面和感人场景，进一步宣传、展示和提升南充城市形象，第21届国际木偶\r\n联会大会暨国际木偶节南充主题会场组委会办公室（以下简称“组委会办公室”）决定面向社会各界广泛征集活动期间的优秀摄影作品。\r\n<p>\r\n	一、征集时间：截至2012年7月10日。\r\n</p>\r\n<p>\r\n	二、作品内容：与第21届国际木偶联会大会暨国际木偶节南充主题会场系列活动相关的摄影作品。\r\n</p>\r\n<p>\r\n	三、报送要求：照片黑白、彩色均可，单幅、组照不限，需同时提交数码电子版照片。作品要求为原创。\r\n</p>\r\n<p>\r\n	四、评选办法：组委会办公室将聘请有关专家进行评选。本次评选活动将设置特等奖作品1幅，奖励现金2000元；一等奖作品5幅，每幅作品奖励现金\r\n1000元；二等奖作品10幅，每幅作品奖励现金800元；三等奖作品20幅，每幅奖励现金500元；优秀作品名额根据报送情况确定。特等奖和一、二、三\r\n等奖获奖作品由组委会办公室颁发证书和奖金，优秀奖只发证书不发奖金。\r\n</p>\r\n<p>\r\n	五、几点说明\r\n</p>\r\n<p>\r\n	1、每件作品需注明作品名称、作者姓名及联系方式，并附30字以内的文字说明；\r\n</p>\r\n<p>\r\n	2、参评作品如涉及肖像权、著作权等问题，由作者自行解决。作品一律不退还，请自留原版及有关资料底稿。\r\n</p>\r\n<p>\r\n	3、组委会办公室对参赛作品有无偿用于资料汇编、宣传、展示、公益活动的使用权，作品一经报送，均视为报送方同意。\r\n</p>\r\n<p>\r\n	六、联系方式\r\n</p>\r\n<p>\r\n	单位：第21届国际木偶联会大会暨国际木偶节南充主题会场组委会办公室；地址：南充市政府新区一号办公楼730室；邮编：637000；联系人：黎剑锋；联系电话：2666972；邮箱：373170982@qq.com。\r\n</p>\r\n<p>\r\n	第21届国际木偶联会大会暨国际木偶节南充主题会场组委会办公室\r\n</p>\r\n<br />', 98, 0, '', 215, 0, '关于征集“第21届国际木偶联会大会暨国际木偶节南充主题会场”活动期间摄影作品的启事', 8, 1339501326, '', 0, 0, '', '', '', '', 0, '', 0, ''),
(151, '<h1>\r\n	<div class="Line">\r\n	</div>\r\n	<div style="position:relative;" id="Cnt-Main-Article-QQ" bosszone="content">\r\n		<p align="center">\r\n			<br />\r\n		</p>\r\n		<div style="width:451px;" class="mbArticleSharePic     " r="1">\r\n			<div class="mbArticleShareBtn">\r\n				<span>转播到腾讯微博</span>\r\n			</div>\r\n<img alt="京东上市提速疑云：IPO两难 价格战成催化剂" src="http://img1.gtimg.com/tech/pics/hv1/87/18/1062/69061227.jpg" />\r\n		</div>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p class="pictext" align="center">\r\n			<span style="font-size:12px;">以上数据根据公开资料整理。南都制图：刘寅杉</span>\r\n		</p>\r\n		<p>\r\n			　　欧债危机依然前途未卜、<!--keyword--><span><a class="a-tips-Article-QQ" href="http://stockhtm.finance.qq.com/astock/ggcx/FB.OQ.htm" target="_blank"><!--/keyword-->Facebook<!--keyword--></a></span><!--/keyword-->“跌跌不休”引发IPO市场恐慌……京东商城却在此时加快上市的步伐。\r\n		</p>\r\n		<p>\r\n			　　从2004年成立至今，京东在8年时间内完成了近17亿美元的融资规模，过去5年间最低100%的年增速，让京东成为最受风投追捧的公司之一，同时也让京东在2012年成为行业“公敌”，激烈的价格战下京东不得不持续出招谋求扩张。\r\n		</p>\r\n		<p>\r\n			　　对于上市，京东商城董事局主席兼CEO刘强东<!--keyword-->(<span class="infoMblog"><a class="a-tips-Article-QQ" href="http://t.qq.com/liuqiangdong#pref=qqcom.keyword" rel="liuqiangdong" target="_blank" reltitle="刘强东">微博</a></span>)<!--/keyword-->的表态是“2013年前不会考虑上市”。但从年初至今，京东上市提速的消息从未间断。这究竟是乘胜出击，还是不得不为？成为了一个急于被解开的谜团。\r\n		</p>\r\n		<p>\r\n			　　<strong>两方部署只欠“东风”？</strong>\r\n		</p>\r\n		<p>\r\n			　　本月初，消息人士向南都记者透露，京东商城的管理团队在香港举行分析师会议，最快有望于今年6月提交上市文件，9月启动IPO.\r\n		</p>\r\n		<p>\r\n			　　但京东商城相关负责人在接受南都采访时表示，对该消息不予评论。\r\n		</p>\r\n		<p>\r\n			　　一周之后，原美银美林集团投资银行部董事蒉莺春加盟京东被曝光。京东内部人士向南都记者透露，这位新任的京东副总裁曾在投行任职六年，未来将主力负责京东的上市工作。\r\n		</p>\r\n		<p>\r\n			　　这是京东在一年内引进的第五位高管。从去年8月开始，原<!--keyword--><span><a class="a-tips-Article-QQ" href="http://stockhtm.finance.qq.com/astock/ggcx/BIDU.OQ.htm" target="_blank"><!--/keyword-->百度<!--keyword--></a></span><!--/keyword-->高级副总裁沈皓瑜加盟担任京东C O O；年底，原凡客副总裁吴声<!--keyword-->(<span class="infoMblog"><a class="a-tips-Article-QQ" href="http://t.qq.com/wusheng19740312#pref=qqcom.keyword" rel="wusheng19740312" target="_blank" reltitle="吴声">微博</a></span>)<!--/keyword-->跳槽至京东商城担任副总裁，主管公关和政府关系；此后，原宏碁中国区执行副总裁蓝烨将加盟京东任C M O职务，负责采购、市场等工作；春节后，京东宣布原<!--keyword--><span><a class="a-tips-Article-QQ" href="http://stockhtm.finance.qq.com/astock/ggcx/ORCL.OQ.htm" target="_blank"><!--/keyword-->甲骨文<!--keyword--></a></span><!--/keyword-->原全球副总裁王亚卿出任首任C T O.\r\n		</p>\r\n		<p>\r\n			　　但在最近的一次新闻发布会上，刘强东向南都记者表示，这并非为上市做准备。“今天的京东已经站在数百亿营业额的基础之上，很快我们会突破千亿的规模，公司会因为业务和规模的不断扩充来调整组织结构。”\r\n		</p>\r\n		<p>\r\n			　　除了在人员上的部署，与此前以“不赚钱”作为有力武器不同，京东还在通过一系列的措施强化盈利状况。去年11月，京东调整物流策略，不再实行全场免运费；启动开放平台，推动百货类销售，促进毛利率的提升；今年6月宣布停止与所有返利性质网站的C PS（以实际销售情况分成）合作……\r\n		</p>\r\n		<p>\r\n			　　在香港举行的分析师会议上，京东商城的部分经营数据得以披露。其中，2011年收入为212亿元人民币（含平台的收入为269亿人民币），毛利率5.5%，配送费占比6.6%，广告占比2.3%，技术和管理费用占1.5%，净亏损约5%，应付账期天数是38天，存货周转为35天。\r\n		</p>\r\n		<p>\r\n			　　对于未来的营收，京东预计2012年为450亿元，2013年为700亿元，2015年则可达1900亿-2200亿元。\r\n		</p>\r\n		<p>\r\n			　　“实现规模效应的利润增长”是资本市场对京东的最大期望。C hinaV enture投中集团李玮栋表示，收入的增长、扭亏的速度，是决定京东IPO估值的两个纬度。\r\n		</p>\r\n		<p>\r\n			　　有投资界人士向南都记者提供数据，显示从2007年至2010年京东的增长率为350%、266%、203%、155%.京东方面曾表示，2010年销售额为102亿人民币。若按分析师会议披露数据显示，2011年销售额同比增长为107%.\r\n		</p>\r\n		<p>\r\n			　　但李玮栋认为，2012年全年IP O市场并不乐观。今年前5个月，仅有<!--keyword--><span><a class="a-tips-Article-QQ" href="http://stockhtm.finance.qq.com/astock/ggcx/VIPS.N.htm" target="_blank"><!--/keyword-->唯品会<!--keyword--></a></span> <!--/keyword-->一家企业在美国证券市场挂牌，创下金融危机之后的最低点，中国概念股境外融资规模跌至谷底，而唯品会至今仍然破发。“Facebook上市，投资者大幅认购被套牢，投资者认为这类新兴企业的业绩增长被高估，进一步拖累整个IPO市场。”\r\n		</p>\r\n		<p>\r\n			　<strong>　IPO的两难</strong>\r\n		</p>\r\n		<p>\r\n			　　每年的6月，都是中国电商的价格战月。而今年，因为苏宁、国美<!--keyword-->(<span class="infoMblog"><a class="a-tips-Article-QQ" href="http://t.qq.com/GOME1987#pref=qqcom.keyword" rel="GOME1987" target="_blank" reltitle="国美">微博</a></span>)<!--/keyword-->这两位传统领域巨头的强势入主，这场价格战则来得更早了些。\r\n		</p>\r\n		<p>\r\n			　　4月，苏宁易购宣布投入10亿货源降价30%；之后，天猫电器城宣布拿出2亿元补贴商家；当当、<!--keyword--><span><a class="a-tips-Article-QQ" href="http://stockhtm.finance.qq.com/astock/ggcx/AMZN.OQ.htm" target="_blank"><!--/keyword-->亚马逊<!--keyword--></a></span><!--/keyword-->相继加入战局，京东最后宣布拿出5亿元对家电产品进行促销，分别在5月和6月投入，以拉动大家电的销售。\r\n		</p>\r\n		<p>\r\n			　　价格战，很大程度上是靠牺牲毛利来实现。刘强东对于“盈利”的看法是：“等京东整个物流系统和信息系统全部搭建完毕，在保证海量订单的情况下，依然保证每一天的用户体验，到那时候就一定能够盈利。”\r\n		</p>\r\n		<p>\r\n			　　但是，持续的投入和亏损，一个企业究竟能够支持多久？此前，<!--keyword--><span><a class="a-tips-Article-QQ" href="http://stockhtm.finance.qq.com/astock/ggcx/DANG.N.htm" target="_blank"><!--/keyword-->当当网<!--keyword--></a></span><!--/keyword-->总裁李国庆<!--keyword-->(<span class="infoMblog"><a class="a-tips-Article-QQ" href="http://t.qq.com/ddwlgq#pref=qqcom.keyword" rel="ddwlgq" target="_blank" reltitle="李国庆">微博</a></span>)<!--/keyword-->曾公开表示：“京东的钱只能维持到8月至12月，当当网是赚一个花两个，而京东则是赚一个花四个。”\r\n		</p>\r\n		<p>\r\n			　　不过，一位京东的供应商向南都记者透露，京东的现金流仍比较充裕。“即便是依靠应收账款周期，在不用自有资金的情况下维持经营1-2年都没有问题。”\r\n		</p>\r\n		<p>\r\n			　　上述人士表示，2008年春节前后，在销售额首次出现大规模增长时，京东第一次面临利润和流动资金的挑战，最后采用了“缩短存货时间、提高应付账款”的方式解决。“2008年中国在线零售市场刚进入爆发期，那时候京东最大的敌人是自己，但如今京东商城的竞争对手越来越多。”\r\n		</p>\r\n		<p>\r\n			　　国泰君安报告认为，大规模促销活动和仓储物流建设导致的资金压力是京东上市进程提前的主要原因，而天猫可能在2013年IPO，抢占先机也是另一考虑。\r\n		</p>\r\n		<p>\r\n			　　今年2月，刘强东向南都记者表示，2012年是京东整个物流和信息系统算是大规模投资的第三年，也是花钱最多的一年，同时开通6个项目。“大概花35亿-36个亿，包括土地、房产、各种设备的采购，所以是花钱最多的一年。”\r\n		</p>\r\n		<p>\r\n			　　在刘强东的商业逻辑里，电商盈利有两个前提条件：给用户带来足够好的购物体验，具有足够的规模，做到这两点现在不盈利并不代表没有盈利的能力。前者和物流布局密不可分，后者在今年国内的电商领域离不开价格战，两者都需要充足的资金。\r\n		</p>\r\n		<p>\r\n			　　上市，获得大规模融资，打破市场既有格局，中国概念股中不乏优酷、分众这类成功案例，但也有当当、<!--keyword--><span><a class="a-tips-Article-QQ" href="http://stockhtm.finance.qq.com/astock/ggcx/MCOX.OQ.htm" target="_blank"><!--/keyword-->麦考林<!--keyword--></a></span><!--/keyword-->这类切入资本市场后，面对投资者财务考核，在价格战下选择“保守”应战的案例。\r\n		</p>\r\n		<p>\r\n			　　C hinaV enture投中集团李玮栋分析称，IPO是把“双刃剑”。“从京东目前的情况来看，天猫、国美、苏宁步步逼近，京东要在巩固既有成绩下，大幅赶超对手，IPO利大于弊。IPO融资理想，将构筑起资本壁垒，一方面方便进行企业并购、有助于拓展经营范围，另一方面快速布局物流仓储，将决定行业未来的竞争格局。”\r\n		</p>\r\n		<p>\r\n			　　至于在繁琐的监管、严格的业绩压力等一系列限制下，刘强东要如何说服投资者赞同京东的中长期投资计划，李玮栋表示刘强东要向亚马逊的C E O Jeff B ezos学习“控制平衡公司长远发展与投资者期望”。\r\n		</p>\r\n		<p>\r\n			　　今年2月，刘强东曾经表示，京东不急于上市，是因为京东在物流、仓储、IT等基础建设上的大规模投资还将持续两年。亚马逊从1995年成立，一直到2002年才实现盈利，扭亏主要来自于物流成本和支付成本的下降。\r\n		</p>\r\n		<p>\r\n			　　<strong>类亚马逊的估值</strong>\r\n		</p>\r\n		<p>\r\n			　　在同行看来，以3C起家的京东所代表的只是“垂直B 2C”。天猫电器城总经理谭飚接受南都记者采访时表示，如今垂直B 2C变成产业链条里面的一个核心构成，但随着风投的钱投完之后，把低价口碑提高起来之后，服务的边际成本越来越高，整体运营成本都在往上涨。\r\n		</p>\r\n		<p>\r\n			　　不过，刘强东对京东的规划，显然并不是垂直B 2C，对于物流和开放平台的重金布局，使得京东看起来更倾向于“亚马逊”的路线。本月初，京东证实已递交“快递业务经营许可证”申请，这意味着如获得牌照将获准在全国范围内进行经营快递业务，同时还能够经营其他公司和个人的快递业务。\r\n		</p>\r\n		<p>\r\n			　　“今天使用京东整个仓储配送系统的公司已经超过1300家，配送包裹数超过4万台，随着下半年物流正式开放，会有更多商业和业务使用我们这套系统。”刘强东对京东的定位“是在物流方面投资很多钱的电子商务公司”，而目标肯定不仅是为京东自己销售业务服务。\r\n		</p>\r\n		<p>\r\n			　　此外，京东在2011年正式启动开放平台。在公布的数据中，2012年销售额将达到150亿，其中服装超过100亿，目前增长速度超过22%.开放平台主要是采取收取佣金的模式，公开资料显示京东向商家收取的年费是6000元，佣金在5%-30%，处于行业收费标准的上游。与其他同行不同的是，京东的开放平台更为灵活，不同的服务如支付、流量、售后可自由组合，收取的利润也不同。\r\n		</p>\r\n		<p>\r\n			　　这一些，都和亚马逊为人熟知的“我要开店”和“亚马逊物流”商业模式形似。“物流体系的建设、开放平台的布局、甚至到今年初电子书的发布，让京东可以以亚马逊为对比，向资本市场讲故事，增加投资者信心。”李玮栋表示。\r\n		</p>\r\n		<p>\r\n			　　有消息称，在香港举行的分析师会议上，有券商给出了60亿美元的估值，而京东则更倾向于100-120亿美元。\r\n		</p>\r\n		<p>\r\n			　　淘宝商城创始总经理、当当网前任C O O黄若认为，京东上市后至少有60亿到80亿美金的估值。他认为，亚马逊在盈利的情况下可以做到1.2-1.5倍的销售估值，但因为京东目前还没有盈利，所以仍不能和亚马逊的销售估值进行相\r\n		</p>\r\n	</div>\r\n</h1>', 97, 0, '', 78, 0, '京东上市提速疑云：IPO两难 价格战成催化剂', 8, 1339560221, '', 0, 0, '', '', '', '', 0, '', 0, ''),
(153, '<p>\r\n	今后，北京的高楼将配备消防协管员，负责日常巡视检查，提高火患的应急处置能力。昨天，市消防局和西城消防支队选聘的1000余名高层建筑消防协管员上岗，如此大规模选聘协管员，在本市还是头一回。据悉，这种模式将在全市推开。\r\n</p>\r\n<p>\r\n	消防部门介绍，中国自2005年起规定超过10层的住宅建筑和超过24米高的其他民用建筑为高层建筑。北京共有高层建筑7000栋以上。西城高层建筑的消防协管员配备是每栋楼至少一名，他们来自物业管理者、保安、消防志愿者和热心市民。\r\n</p>\r\n<p>\r\n	市\r\n消防局相关负责人表示，高层建筑物需明确产权单位、管理单位、使用单位，由产权单位或物业单位通过招聘或选派方式，在每栋高层建筑设置一名消防协管员。高\r\n层建筑的消防协管员，需确保高层建筑消防设施的完好有效，对外墙开设窗口、洞等敞开部位进行日常巡视检查，经常开展宣传教育培训，普及员工和领导的消防安\r\n全知识，提高大家防范火灾的素质和应急处置能力。\r\n</p>\r\n<br />', 97, 0, '', 46, 0, '北京高楼将首次配备消防协管员', 8, 1339771702, '', 0, 0, '', '', '', '', 0, '', 0, ''),
(154, '<p>\r\n	新华网杭州11月7日电 浙江省政府6日发布《关于深入推进小额贷款公司改革发展的若干意见》，在小额贷款公司的准入条件、资金来源渠道、服务模式创新、规范管理等方面的政策作出了适度放宽和调整。\r\n</p>\r\n<p>\r\n	《关\r\n于深入推进小额贷款公司改革发展的若干意见》明确，将适度放宽小额贷款公司的准入条件。小额贷款公司的主发起人及其关联股东首次入股比例上限扩大到\r\n30％，但不得再参股本县域其他小贷公司；对已设立的小额贷款公司增资扩股，注册资本不再设上限；鼓励经营层和业务骨干入股小额贷款公司；允许符合条件的\r\n企业到本地区欠发达县域主发起设立小额贷款公司。\r\n</p>\r\n<p>\r\n	小额贷款公司的服务范围也将适度扩大。运行情况良好、资本金规模较大、风险管控严密、连续\r\n两年考评为优秀的小额贷款公司，经相关政府及省级职能部门批准，可到省内欠发达地区及本市域范围内的乡镇设立分支机构。对设在主城区的小额贷款公司，经批\r\n准同意，可在同城范围内设立分支机构并开展贷款业务。\r\n</p>\r\n<p>\r\n	对于试点\r\n以来一直困扰着小额贷款公司的资金来源渠道，上述文件明确，将探索扩大融资比例。支持银行业金融机构与小额贷款公司开展资金批发业务与小额贷款零售业务合\r\n作，对坚持服务“三农”和小企业、合规经营、风险控制严格、利率水平合理的小额贷款公司，其融资比例可放宽到资本净额的100％。\r\n</p>\r\n<p>\r\n	浙江省政\r\n府重申，对小额贷款公司开展小额、分散业务设置相应“红线”，核心内容是“三不得”“三严禁”：即单户100万元以下的小额贷款以及种植业、养殖业等纯农\r\n业贷款余额占比不得低于70％，贷款期限在2个月以上的经营性贷款余额占比不得低于70％，对贷款客户不得在贷款利息之外以任何名义收取手续费、咨询费；\r\n严禁变相提高贷款利率，严禁账外经营，严禁贷款资金流向泡沫产业和民间借贷市场。\r\n</p>\r\n<br />', 98, 0, '', 45, 0, '浙江放宽小额贷款公司准入条件', 8, 1339771743, '', 0, 0, '', '', '', '', 0, '', 0, ''),
(155, '<div class="post_path">\r\n	You are here: <a class="first_home" rel="nofollow" title="Go to homepage" href="http://zww.me/"> Home</a>» <a class="first_home" rel="nofollow" href="http://zww.me/categories">All Categories</a>»<a href="http://zww.me/archives/category/play-wordpress" title="查看 Play WordPress 中的全部文章" rel="category tag">Play WordPress</a> » mb_strimwidth函数的简单应用\r\n</div>\r\n<h1 class="title title_s">\r\n	mb_strimwidth函数的简单应用\r\n</h1>\r\n<div id="scroll_s_p" class="p_meta_s_t">\r\n	<br />\r\n<span class="p_comment_s"></span> \r\n</div>\r\n<p class="entry_fl">\r\n	在《<a href="http://zww.me/archives/25181">简单的文章截断方法, 支持 Read more 加上 nofollow</a>》一文中所使用的文章截断是使用mb_strimwidth函数来实现的，其实稍微想想就可以发现很多地方都可以使用这个函数，下面说明一下和举一些例子。\r\n</p>\r\n<p>\r\n	<strong>先说说mb_strimwidth函数</strong>：\r\n</p>\r\n<p>\r\n	mb_strimwidth是超轻量级的php函数，用来获取指定的宽度截断字符串。\r\n</p>\r\n<p>\r\n	<strong>使用方法</strong>：\r\n</p>\r\n<p>\r\n	mb_strimwidth&nbsp;&nbsp;(&nbsp;&nbsp;string&nbsp;$str&nbsp;&nbsp;,&nbsp;&nbsp;int&nbsp;$start&nbsp;&nbsp;,&nbsp;&nbsp;int&nbsp;$width&nbsp;&nbsp;[,&nbsp;&nbsp;string&nbsp;$trimmarker&nbsp;&nbsp;[,&nbsp;&nbsp;string&nbsp;$encoding&nbsp;&nbsp;]]&nbsp;)\r\n</p>\r\n<p>\r\n	<strong>参数说明</strong>：\r\n</p>\r\n<p>\r\n	$str //指定字符串\r\n</p>\r\n<p>\r\n	$start //指定从何处开始截取\r\n</p>\r\n<p>\r\n	$width //截取文字的宽度\r\n</p>\r\n<p>\r\n	$trimmarker //超过$width数字后显示的字符串\r\n</p>\r\n<p>\r\n	<strong>例一、限制文章标题文字个数</strong> \r\n</p>\r\n<p>\r\n	如我侧边栏的“Random Posts”和“Recent Posts”，因为侧边栏宽度有限，所以对于长文章标题会出现两行，这样有点影响美观，这时就可以用mb_strimwidth函数来限制文字个数在一行内。\r\n</p>\r\n<p>\r\n	文章标题的调用函数一般是这样：\r\n</p>\r\n<p>\r\n	<em>&lt;?php the_title(); ?&gt;</em> \r\n</p>\r\n<p>\r\n	我主题的侧边栏最多大概显示20个中文，所以可以限制在18个文字内，使用mb_strimwidth函数后变成如下：\r\n</p>\r\n<p>\r\n	<em>&lt;?php echo mb_strimwidth(get_the_title(), 0, 36,"..."); ?&gt;</em> \r\n</p>\r\n<p>\r\n	其中 36 代表 18 个双字节文字\r\n</p>\r\n<p>\r\n	<strong>例二、最新评论的文字个数</strong> \r\n</p>\r\n<p>\r\n	上篇文章《<a href="http://zww.me/archives/25188">带头像显示的最新评论代码 - 蛋疼篇</a>》里面的最新评论长度是用css的overflow:hidden属性来隐藏评论长度的，从而使每条评论占用一行，其实也可以用mb_strimwidth函数来截取固定的文字数量\r\n</p>\r\n<p>\r\n	最新评论代码中评论内容是：<em>strip_tags($rc_comm-&gt;comment_content)</em> \r\n</p>\r\n<p>\r\n	用mb_strimwidth函数限制文字变成：<em>mb_strimwidth(strip_tags($rc_comm-&gt;comment_content), 0, 36,"...")</em> \r\n</p>\r\n<p>\r\n	很方便的一个函数，还有其他应用就自己举一反三吧，mb_strimwidth()是php的函数，所以不依赖wp的版本。\r\n</p>\r\n<br />', 99, 0, '', 25, 0, 'mb_strimwidth函数的简单应用 ', 8, 1339861752, '', 0, 0, '', '', '', '', 0, '', 0, ''),
(156, '<div class="lemma_name">\r\n	<h1 id="title">\r\n		该片改编自发生在1991年韩国大邱市的真实案件，讲述了5名小学生外出抓青蛙时失踪，11年后才被发现尸体，至今凶手依旧逍遥法外的故事。这起“青蛙少\r\n年失踪事件”被列为韩国社会三大未解悬案之一，另外两起案件已分别被拍摄为影片《杀人回忆》和《那家伙的声音》，均获得了不俗的票房与口碑。 \r\n据悉，《孩子们》将从“青蛙少年”失踪那一天开始，以朴勇宇饰演的电视台制作人员为线索人物，记录下追查案件真相的整个过程。事件发生后，“青蛙少年”们\r\n的父母找遍了全国，在社会引起巨大反响。随后，韩国中小学生当中发起了“寻找大邱青蛙少年”的活动，社会团体共印发百多万张传单，企业界在商品包装上印刷\r\n失踪少年的照片，就连当时的韩国总统卢泰宇也予以特别关注。 <br />\r\n这起案件在韩国创纪录地动员了超过30万名的警力，但都一无所获。当时还流传着外星\r\n人绑架及北朝鲜间谍诱拐等多样的说法。2002年失踪少年的遗骸在卧龙山被意外发现，死因被确定是他杀，但案件一直未能侦破。时间到了2006年，15年\r\n前发生的这起案件已经过了韩国的诉讼有效期，凶手们就将这样一直逍遥法外。<br />\r\n	</h1>\r\n</div>', 99, 0, '', 29, 0, '青蛙少年失踪事件', 8, 1339862227, '', 0, 0, '', '', '', '', 0, '', 0, ''),
(157, '<p>\n	Licms 是一款基于开源框架thinkphp的cms系统。使用无需商业授权\n</p>\n<br />', 103, 0, '', 1702, 0, '介绍', 8, 1339902639, '', 0, 0, '', '', '', '', 0, '', 0, ''),
(158, '<p>\r\n	2011年，发布第一版\r\n</p>\r\n<p>\r\n	2012年6月，重新设计架构，支持标签\r\n</p>\r\n<p>\r\n	2012年6月22日，完成友情链接模块\r\n</p>\r\n<p>\r\n	2012年6月24日，完成反馈模块\r\n</p>\r\n<p>\r\n	2012年6月26日，完成通知模块,增加，友情链接，反馈通知功能\r\n</p>\r\n<p>\r\n	<span style="white-space:normal;">2012年6月27日，对文章上传进行了修正，大图，缩略图分开存放，这样可以实现近期频繁使用的缩略图缓存</span> \r\n</p>\r\n<p>\r\n	<span style="white-space:normal;">2012年7月14日，敏感词完成</span>\r\n</p>', 103, 0, '', 498, 0, '发展简史', 8, 1339904346, '', 0, 0, '', '', '', '', 0, '', 103, ''),
(159, '<p>\r\n	改善验证规则：原有的tp验证，存在重复使用大量字段，licms使用了新的filter类，方便自己扩充验证规则\r\n</p>', 103, 0, '', 288, 0, '性能优化', 8, 1340513999, '', 0, 0, '', '', '', '', 0, '', 0, ''),
(160, '<img src="/uploads/20120627/1238557320-18480384510.jpg" alt="" />', 20, 0, '', 12, 0, 'sfsdf', 8, 1340770838, '', 0, 0, '', '', '', 'a:1:{i:0;s:65:"<img src="/uploads/20120627/1238557320-18480384510.jpg" alt="" />";}', 0, '', 0, ''),
(161, '的发顺丰阿斯顿发士大夫阿斯顿发阿斯顿发', 96, 0, '', 12, 0, '的司法斯蒂芬', 8, 1342264323, '', 0, 0, '', '', '', '', 0, '', 20, '');

-- --------------------------------------------------------

--
-- 表的结构 `licms_category`
--

CREATE TABLE IF NOT EXISTS `licms_category` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_title` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `p_id` int(10) NOT NULL,
  `child` int(1) NOT NULL,
  `user_id` int(10) NOT NULL,
  `create_time` int(40) NOT NULL,
  `lock` int(1) NOT NULL,
  `top_id` int(10) NOT NULL,
  `open` tinyint(1) NOT NULL,
  `url_rule` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(10) NOT NULL,
  `rewrite` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(10) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=149 ;

--
-- 转存表中的数据 `licms_category`
--

INSERT INTO `licms_category` (`category_id`, `category_title`, `p_id`, `child`, `user_id`, `create_time`, `lock`, `top_id`, `open`, `url_rule`, `level`, `rewrite`, `type`) VALUES
(20, '新闻', 0, 0, 1, 0, 1, 20, 0, 'news', 1, 'news', 0),
(21, '成员', 0, 0, 1, 0, 1, 21, 1, '', 0, '', 0),
(96, '科技', 20, 0, 8, 0, 0, 20, 0, '', 0, 'news', 0),
(97, '业界', 20, 0, 8, 0, 0, 20, 0, '', 0, 'news', 0),
(98, '本地', 20, 0, 8, 0, 0, 20, 0, '', 0, 'news', 0),
(113, '友情链接', 0, 0, 8, 0, 0, 113, 0, 'link', 0, 'link', 0),
(103, 'licms入门', 0, 0, 8, 0, 0, 103, 0, 'doc', 1, 'doc', 0),
(104, '网站介绍', 0, 0, 8, 0, 0, 104, 0, 'about', 1, 'about', 0),
(105, '关于我们', 104, 0, 8, 0, 0, 104, 0, 'aboutus', 1, 'about/aboutus', 0),
(106, '联系我们', 104, 0, 8, 0, 0, 104, 0, 'contact', 0, 'about/contact', 0),
(107, '加入我们', 104, 0, 8, 0, 0, 104, 0, 'joinus', 1, 'about/joinus', 0),
(108, '政策法规', 104, 0, 8, 0, 0, 104, 0, 'policy', 0, 'about/policy', 0),
(133, '购物', 113, 0, 8, 0, 0, 113, 0, 'shopping', 0, 'link/shopping', 0),
(134, '政府', 113, 0, 8, 0, 0, 113, 0, 'gov', 0, 'link/gov', 0),
(135, '教育', 113, 0, 8, 0, 0, 113, 0, 'edu', 0, 'link/edu', 0),
(136, '网站建设', 113, 0, 8, 0, 0, 113, 0, 'wz', 0, 'link/wz', 0),
(137, '商户', 113, 0, 8, 0, 0, 113, 0, 'shangye', 0, 'link/shangye', 0),
(138, '门户', 113, 0, 8, 0, 0, 113, 0, 'menuhu', 0, 'link/menuhu', 0),
(139, '校园', 113, 0, 8, 0, 0, 113, 0, 'school', 0, 'link/school', 0),
(140, '论坛', 113, 0, 8, 0, 0, 113, 0, 'luntan', 0, 'link/luntan', 0),
(141, '医药', 113, 0, 8, 0, 0, 113, 0, 'yiyao', 0, 'link/yiyao', 0),
(142, '公司', 113, 0, 8, 0, 0, 113, 0, 'company', 0, 'link/company', 0),
(143, '传媒', 113, 0, 8, 0, 0, 113, 0, 'chuanmei', 0, 'link/chuanmei', 1),
(144, '房产', 113, 0, 8, 0, 0, 113, 0, 'fangchan', 0, 'link/fangchan', 0),
(146, '娱乐', 113, 0, 8, 0, 0, 113, 0, 'yule', 0, 'link/yule', 0),
(147, '微博', 146, 0, 8, 0, 0, 113, 0, 'webo', 0, 'link/yule/webo', 0),
(148, 'qq群', 146, 0, 8, 0, 0, 113, 0, 'qq', 0, 'link/yule/qq', 0);

-- --------------------------------------------------------

--
-- 表的结构 `licms_category_article`
--

CREATE TABLE IF NOT EXISTS `licms_category_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL,
  `article_id` int(10) NOT NULL,
  PRIMARY KEY (`id`,`category_id`,`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `licms_cities`
--

CREATE TABLE IF NOT EXISTS `licms_cities` (
  `ID` int(10) NOT NULL,
  `CITYNAME` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ZIPCODE` int(10) NOT NULL,
  `PID` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `licms_cities`
--

INSERT INTO `licms_cities` (`ID`, `CITYNAME`, `ZIPCODE`, `PID`) VALUES
(1, '北京市', 100000, 1),
(2, '天津市', 100000, 2),
(3, '石家庄市', 50000, 3),
(4, '唐山市', 63000, 3),
(5, '秦皇岛市', 66000, 3),
(6, '邯郸市', 56000, 3),
(7, '邢台市', 54000, 3),
(8, '保定市', 71000, 3),
(9, '张家口市', 75000, 3),
(10, '承德市', 67000, 3),
(11, '沧州市', 61000, 3),
(12, '廊坊市', 65000, 3),
(13, '衡水市', 53000, 3),
(14, '太原市', 30000, 4),
(15, '大同市', 37000, 4),
(16, '阳泉市', 45000, 4),
(17, '长治市', 46000, 4),
(18, '晋城市', 48000, 4),
(19, '朔州市', 36000, 4),
(20, '晋中市', 30600, 4),
(21, '运城市', 44000, 4),
(22, '忻州市', 34000, 4),
(23, '临汾市', 41000, 4),
(24, '吕梁市', 30500, 4),
(25, '呼和浩特市', 10000, 5),
(26, '包头市', 14000, 5),
(27, '乌海市', 16000, 5),
(28, '赤峰市', 24000, 5),
(29, '通辽市', 28000, 5),
(30, '鄂尔多斯市', 10300, 5),
(31, '呼伦贝尔市', 21000, 5),
(32, '巴彦淖尔市', 14400, 5),
(33, '乌兰察布市', 11800, 5),
(34, '兴安盟', 137500, 5),
(35, '锡林郭勒盟', 11100, 5),
(36, '阿拉善盟', 16000, 5),
(37, '沈阳市', 110000, 6),
(38, '大连市', 116000, 6),
(39, '鞍山市', 114000, 6),
(40, '抚顺市', 113000, 6),
(41, '本溪市', 117000, 6),
(42, '丹东市', 118000, 6),
(43, '锦州市', 121000, 6),
(44, '营口市', 115000, 6),
(45, '阜新市', 123000, 6),
(46, '辽阳市', 111000, 6),
(47, '盘锦市', 124000, 6),
(48, '铁岭市', 112000, 6),
(49, '朝阳市', 122000, 6),
(50, '葫芦岛市', 125000, 6),
(51, '长春市', 130000, 7),
(52, '吉林市', 132000, 7),
(53, '四平市', 136000, 7),
(54, '辽源市', 136200, 7),
(55, '通化市', 134000, 7),
(56, '白山市', 134300, 7),
(57, '松原市', 131100, 7),
(58, '白城市', 137000, 7),
(59, '延边朝鲜族自治州', 133000, 7),
(60, '哈尔滨市', 150000, 8),
(61, '齐齐哈尔市', 161000, 8),
(62, '鸡西市', 158100, 8),
(63, '鹤岗市', 154100, 8),
(64, '双鸭山市', 155100, 8),
(65, '大庆市', 163000, 8),
(66, '伊春市', 152300, 8),
(67, '佳木斯市', 154000, 8),
(68, '七台河市', 154600, 8),
(69, '牡丹江市', 157000, 8),
(70, '黑河市', 164300, 8),
(71, '绥化市', 152000, 8),
(72, '大兴安岭地区', 165000, 8),
(73, '上海市', 200000, 9),
(74, '南京市', 210000, 10),
(75, '无锡市', 214000, 10),
(76, '徐州市', 221000, 10),
(77, '常州市', 213000, 10),
(78, '苏州市', 215000, 10),
(79, '南通市', 226000, 10),
(80, '连云港市', 222000, 10),
(81, '淮安市', 223200, 10),
(82, '盐城市', 224000, 10),
(83, '扬州市', 225000, 10),
(84, '镇江市', 212000, 10),
(85, '泰州市', 225300, 10),
(86, '宿迁市', 223800, 10),
(87, '杭州市', 310000, 11),
(88, '宁波市', 315000, 11),
(89, '温州市', 325000, 11),
(90, '嘉兴市', 314000, 11),
(91, '湖州市', 313000, 11),
(92, '绍兴市', 312000, 11),
(93, '金华市', 321000, 11),
(94, '衢州市', 324000, 11),
(95, '舟山市', 316000, 11),
(96, '台州市', 318000, 11),
(97, '丽水市', 323000, 11),
(98, '合肥市', 230000, 12),
(99, '芜湖市', 241000, 12),
(100, '蚌埠市', 233000, 12),
(101, '淮南市', 232000, 12),
(102, '马鞍山市', 243000, 12),
(103, '淮北市', 235000, 12),
(104, '铜陵市', 244000, 12),
(105, '安庆市', 246000, 12),
(106, '黄山市', 242700, 12),
(107, '滁州市', 239000, 12),
(108, '阜阳市', 236100, 12),
(109, '宿州市', 234100, 12),
(110, '巢湖市', 238000, 12),
(111, '六安市', 237000, 12),
(112, '亳州市', 236800, 12),
(113, '池州市', 247100, 12),
(114, '宣城市', 366000, 12),
(115, '福州市', 350000, 13),
(116, '厦门市', 361000, 13),
(117, '莆田市', 351100, 13),
(118, '三明市', 365000, 13),
(119, '泉州市', 362000, 13),
(120, '漳州市', 363000, 13),
(121, '南平市', 353000, 13),
(122, '龙岩市', 364000, 13),
(123, '宁德市', 352100, 13),
(124, '南昌市', 330000, 14),
(125, '景德镇市', 333000, 14),
(126, '萍乡市', 337000, 14),
(127, '九江市', 332000, 14),
(128, '新余市', 338000, 14),
(129, '鹰潭市', 335000, 14),
(130, '赣州市', 341000, 14),
(131, '吉安市', 343000, 14),
(132, '宜春市', 336000, 14),
(133, '抚州市', 332900, 14),
(134, '上饶市', 334000, 14),
(135, '济南市', 250000, 15),
(136, '青岛市', 266000, 15),
(137, '淄博市', 255000, 15),
(138, '枣庄市', 277100, 15),
(139, '东营市', 257000, 15),
(140, '烟台市', 264000, 15),
(141, '潍坊市', 261000, 15),
(142, '济宁市', 272100, 15),
(143, '泰安市', 271000, 15),
(144, '威海市', 265700, 15),
(145, '日照市', 276800, 15),
(146, '莱芜市', 271100, 15),
(147, '临沂市', 276000, 15),
(148, '德州市', 253000, 15),
(149, '聊城市', 252000, 15),
(150, '滨州市', 256600, 15),
(151, '荷泽市', 255000, 15),
(152, '郑州市', 450000, 16),
(153, '开封市', 475000, 16),
(154, '洛阳市', 471000, 16),
(155, '平顶山市', 467000, 16),
(156, '安阳市', 454900, 16),
(157, '鹤壁市', 456600, 16),
(158, '新乡市', 453000, 16),
(159, '焦作市', 454100, 16),
(160, '濮阳市', 457000, 16),
(161, '许昌市', 461000, 16),
(162, '漯河市', 462000, 16),
(163, '三门峡市', 472000, 16),
(164, '南阳市', 473000, 16),
(165, '商丘市', 476000, 16),
(166, '信阳市', 464000, 16),
(167, '周口市', 466000, 16),
(168, '驻马店市', 463000, 16),
(169, '武汉市', 430000, 17),
(170, '黄石市', 435000, 17),
(171, '十堰市', 442000, 17),
(172, '宜昌市', 443000, 17),
(173, '襄樊市', 441000, 17),
(174, '鄂州市', 436000, 17),
(175, '荆门市', 448000, 17),
(176, '孝感市', 432100, 17),
(177, '荆州市', 434000, 17),
(178, '黄冈市', 438000, 17),
(179, '咸宁市', 437000, 17),
(180, '随州市', 441300, 17),
(181, '恩施土家族苗族自治州', 445000, 17),
(182, '神农架', 442400, 17),
(183, '长沙市', 410000, 18),
(184, '株洲市', 412000, 18),
(185, '湘潭市', 411100, 18),
(186, '衡阳市', 421000, 18),
(187, '邵阳市', 422000, 18),
(188, '岳阳市', 414000, 18),
(189, '常德市', 415000, 18),
(190, '张家界市', 427000, 18),
(191, '益阳市', 413000, 18),
(192, '郴州市', 423000, 18),
(193, '永州市', 425000, 18),
(194, '怀化市', 418000, 18),
(195, '娄底市', 417000, 18),
(196, '湘西土家族苗族自治州', 416000, 18),
(197, '广州市', 510000, 19),
(198, '韶关市', 521000, 19),
(199, '深圳市', 518000, 19),
(200, '珠海市', 519000, 19),
(201, '汕头市', 515000, 19),
(202, '佛山市', 528000, 19),
(203, '江门市', 529000, 19),
(204, '湛江市', 524000, 19),
(205, '茂名市', 525000, 19),
(206, '肇庆市', 526000, 19),
(207, '惠州市', 516000, 19),
(208, '梅州市', 514000, 19),
(209, '汕尾市', 516600, 19),
(210, '河源市', 517000, 19),
(211, '阳江市', 529500, 19),
(212, '清远市', 511500, 19),
(213, '东莞市', 511700, 19),
(214, '中山市', 528400, 19),
(215, '潮州市', 515600, 19),
(216, '揭阳市', 522000, 19),
(217, '云浮市', 527300, 19),
(218, '南宁市', 530000, 20),
(219, '柳州市', 545000, 20),
(220, '桂林市', 541000, 20),
(221, '梧州市', 543000, 20),
(222, '北海市', 536000, 20),
(223, '防城港市', 538000, 20),
(224, '钦州市', 535000, 20),
(225, '贵港市', 537100, 20),
(226, '玉林市', 537000, 20),
(227, '百色市', 533000, 20),
(228, '贺州市', 542800, 20),
(229, '河池市', 547000, 20),
(230, '来宾市', 546100, 20),
(231, '崇左市', 532200, 20),
(232, '海口市', 570000, 21),
(233, '三亚市', 572000, 21),
(234, '重庆市', 400000, 22),
(235, '成都市', 610000, 23),
(236, '自贡市', 643000, 23),
(237, '攀枝花市', 617000, 23),
(238, '泸州市', 646100, 23),
(239, '德阳市', 618000, 23),
(240, '绵阳市', 621000, 23),
(241, '广元市', 628000, 23),
(242, '遂宁市', 629000, 23),
(243, '内江市', 641000, 23),
(244, '乐山市', 614000, 23),
(245, '南充市', 637000, 23),
(246, '眉山市', 612100, 23),
(247, '宜宾市', 644000, 23),
(248, '广安市', 638000, 23),
(249, '达州市', 635000, 23),
(250, '雅安市', 625000, 23),
(251, '巴中市', 635500, 23),
(252, '资阳市', 641300, 23),
(253, '阿坝藏族羌族自治州', 624600, 23),
(254, '甘孜藏族自治州', 626000, 23),
(255, '凉山彝族自治州', 615000, 23),
(256, '贵阳市', 55000, 24),
(257, '六盘水市', 553000, 24),
(258, '遵义市', 563000, 24),
(259, '安顺市', 561000, 24),
(260, '铜仁地区', 554300, 24),
(261, '黔西南布依族苗族自治州', 551500, 24),
(262, '毕节地区', 551700, 24),
(263, '黔东南苗族侗族自治州', 551500, 24),
(264, '黔南布依族苗族自治州', 550100, 24),
(265, '昆明市', 650000, 25),
(266, '曲靖市', 655000, 25),
(267, '玉溪市', 653100, 25),
(268, '保山市', 678000, 25),
(269, '昭通市', 657000, 25),
(270, '丽江市', 674100, 25),
(271, '思茅市', 665000, 25),
(272, '临沧市', 677000, 25),
(273, '楚雄彝族自治州', 675000, 25),
(274, '红河哈尼族彝族自治州', 654400, 25),
(275, '文山壮族苗族自治州', 663000, 25),
(276, '西双版纳傣族自治州', 666200, 25),
(277, '大理白族自治州', 671000, 25),
(278, '德宏傣族景颇族自治州', 678400, 25),
(279, '怒江傈僳族自治州', 671400, 25),
(280, '迪庆藏族自治州', 674400, 25),
(281, '拉萨市', 850000, 26),
(282, '昌都地区', 854000, 26),
(283, '山南地区', 856000, 26),
(284, '日喀则地区', 857000, 26),
(285, '那曲地区', 852000, 26),
(286, '阿里地区', 859100, 26),
(287, '林芝地区', 860100, 26),
(288, '西安市', 710000, 27),
(289, '铜川市', 727000, 27),
(290, '宝鸡市', 721000, 27),
(291, '咸阳市', 712000, 27),
(292, '渭南市', 714000, 27),
(293, '延安市', 716000, 27),
(294, '汉中市', 723000, 27),
(295, '榆林市', 719000, 27),
(296, '安康市', 725000, 27),
(297, '商洛市', 711500, 27),
(298, '兰州市', 730000, 28),
(299, '嘉峪关市', 735100, 28),
(300, '金昌市', 737100, 28),
(301, '白银市', 730900, 28),
(302, '天水市', 741000, 28),
(303, '武威市', 733000, 28),
(304, '张掖市', 734000, 28),
(305, '平凉市', 744000, 28),
(306, '酒泉市', 735000, 28),
(307, '庆阳市', 744500, 28),
(308, '定西市', 743000, 28),
(309, '陇南市', 742100, 28),
(310, '临夏回族自治州', 731100, 28),
(311, '甘南藏族自治州', 747000, 28),
(312, '西宁市', 810000, 29),
(313, '海东地区', 810600, 29),
(314, '海北藏族自治州', 810300, 29),
(315, '黄南藏族自治州', 811300, 29),
(316, '海南藏族自治州', 813000, 29),
(317, '果洛藏族自治州', 814000, 29),
(318, '玉树藏族自治州', 815000, 29),
(319, '海西蒙古族藏族自治州', 817000, 29),
(320, '银川市', 750000, 30),
(321, '石嘴山市', 753000, 30),
(322, '吴忠市', 751100, 30),
(323, '固原市', 756000, 30),
(324, '中卫市', 751700, 30),
(325, '乌鲁木齐市', 830000, 31),
(326, '克拉玛依市', 834000, 31),
(327, '吐鲁番地区', 838000, 31),
(328, '哈密地区', 839000, 31),
(329, '昌吉回族自治州', 831100, 31),
(330, '博尔塔拉蒙古自治州', 833400, 31),
(331, '巴音郭楞蒙古自治州', 841000, 31),
(332, '阿克苏地区', 843000, 31),
(333, '克孜勒苏柯尔克孜自治州', 835600, 31),
(334, '喀什地区', 844000, 31),
(335, '和田地区', 848000, 31),
(336, '伊犁哈萨克自治州', 833200, 31),
(337, '塔城地区', 834700, 31),
(338, '阿勒泰地区', 836500, 31),
(339, '石河子市', 832000, 31),
(340, '阿拉尔市', 843300, 31),
(341, '图木舒克市', 843900, 31),
(342, '五家渠市', 831300, 31),
(343, '香港特别行政区', 0, 32),
(344, '澳门特别行政区', 0, 33),
(345, '台湾省', 0, 34);

-- --------------------------------------------------------

--
-- 表的结构 `licms_comment`
--

CREATE TABLE IF NOT EXISTS `licms_comment` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT,
  `comment` char(100) NOT NULL,
  `p_id` int(1) NOT NULL,
  `reply` int(10) NOT NULL,
  `create_time` int(10) NOT NULL,
  `belong_id` int(10) NOT NULL,
  `agree` int(10) NOT NULL,
  `disagree` int(10) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `sensitive` smallint(1) NOT NULL,
  `status` smallint(1) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

--
-- 转存表中的数据 `licms_comment`
--

INSERT INTO `licms_comment` (`comment_id`, `comment`, `p_id`, `reply`, `create_time`, `belong_id`, `agree`, `disagree`, `ip`, `sensitive`, `status`) VALUES
(35, '***，哈哈', 0, 0, 1342258265, 144, 9, 10, '61.188.187.13', 0, 0),
(26, 'sb', 0, 0, 1342255330, 151, 10, 9, '61.188.187.13', 0, 0),
(5, '阿斯顿发送发送', 0, 0, 1342154438, 143, 18, 13, '', 0, 0),
(6, '阿斯顿发送的阿斯顿发生的法第三方', 0, 0, 1342154450, 143, 20, 11, '', 0, 1),
(8, 't发生大发飞', 0, 0, 1342161722, 142, 18, 19, '', 0, 1),
(9, '阿斯顿发大水发生大发艾丝凡', 0, 0, 1342161727, 142, 18, 20, '', 0, 1),
(13, '所发生的撒发生的发生发的阿士大夫阿士大夫asfads发生的阿士大夫阿斯顿发说的大声大湿ads发生发的阿斯顿发阿斯顿发阿斯顿发', 0, 0, 1342162679, 150, 11, 12, '', 0, 0),
(29, '***', 0, 0, 1342255342, 151, 10, 9, '61.188.187.13', 0, 0),
(30, '***', 0, 0, 1342255381, 151, 10, 9, '61.188.187.13', 0, 0),
(31, '***', 0, 0, 1342255387, 151, 10, 9, '61.188.187.13', 0, 0),
(32, '***', 0, 0, 1342255393, 151, 10, 9, '61.188.187.13', 0, 0),
(33, '***', 0, 0, 1342255412, 151, 10, 9, '61.188.187.13', 0, 0),
(34, '***', 0, 0, 1342256057, 150, 9, 9, '61.188.187.13', 0, 0),
(16, 'sdfassdfds', 0, 0, 1342163708, 150, 9, 10, '61.188.187.13', 0, 0),
(17, '说什么呢', 0, 0, 1342164056, 150, 18, 19, '61.188.187.13', 0, 0),
(18, '谁反对大第三方说的发送到飞洒地方', 0, 0, 1342164061, 150, 18, 19, '61.188.187.13', 0, 0),
(19, '说的发送到阿斯顿发水电费阿斯顿发阿斯顿发阿斯顿发阿斯顿发阿斯顿发啊', 0, 0, 1342164069, 150, 18, 20, '61.188.187.13', 0, 0),
(20, '哈哈哈', 0, 0, 1342164162, 150, 18, 19, '61.188.187.13', 0, 0),
(21, '&lt;php&gt;&lt;/php&gt;', 0, 0, 1342165152, 142, 18, 19, '61.188.187.13', 0, 0),
(28, '***', 0, 0, 1342255338, 151, 11, 9, '61.188.187.13', 0, 0),
(27, '***', 0, 0, 1342255334, 151, 10, 9, '61.188.187.13', 0, 0),
(25, 'sb', 0, 0, 1342255282, 151, 10, 9, '61.188.187.13', 0, 0),
(22, '是不是饿，哈哈哈', 0, 0, 1342236088, 150, 9, 10, '61.188.187.21', 0, 0),
(23, '共产党\r\n', 0, 0, 1342236098, 150, 9, 10, '61.188.187.21', 0, 0),
(24, '民主', 0, 0, 1342236112, 150, 9, 12, '61.188.187.21', 0, 0),
(36, '***', 0, 0, 1342258279, 144, 10, 9, '61.188.187.13', 0, 0),
(37, '测试敏感字', 0, 0, 1342258285, 144, 9, 9, '61.188.187.13', 0, 0),
(38, '打倒***', 0, 0, 1342259619, 143, 9, 9, '61.188.187.13', 0, 0),
(39, '哈哈', 0, 0, 1342264197, 150, 10, 11, '61.188.187.13', 0, 0),
(40, 'sfa', 0, 0, 1342264801, 142, 9, 9, '61.188.187.13', 0, 0),
(41, '说的发大水', 0, 0, 1342265418, 147, 10, 10, '61.188.187.13', 0, 0),
(42, 'fsfdas', 0, 0, 1342265506, 147, 9, 9, '61.188.187.13', 0, 0),
(43, 'fsdfadsfadsf', 0, 0, 1342265509, 147, 9, 9, '61.188.187.13', 0, 0),
(44, 'fsdfasfd', 0, 0, 1342265511, 147, 9, 9, '61.188.187.13', 0, 0),
(45, 'fsdfasddsaf', 0, 0, 1342265518, 147, 10, 9, '61.188.187.13', 0, 0),
(46, 'fsfsadfsa', 0, 0, 1342265521, 147, 9, 9, '61.188.187.13', 0, 0),
(47, 'sdfasdfasdfsa', 0, 0, 1342265524, 147, 9, 9, '61.188.187.13', 0, 0),
(48, '民主必亡', 0, 0, 1342314684, 147, 9, 9, '61.188.187.13', 0, 0),
(49, '不能为空\r\n', 0, 0, 1342314774, 149, 9, 9, '61.188.187.13', 0, 0),
(50, '说什么呢？thing', 0, 0, 1342315239, 150, 10, 10, '61.188.187.13', 0, 0),
(51, 'SFDDSF', 0, 0, 1342315444, 145, 0, 0, '61.188.187.13', 0, 0),
(52, 'FSDFAS', 0, 0, 1342315464, 145, 0, 0, '61.188.187.13', 0, 0),
(53, 'sdfasf', 0, 0, 1342316200, 145, 0, 0, '61.188.187.13', 0, 0),
(54, 'sdafasf', 0, 0, 1342318094, 143, 9, 9, '61.188.187.21', 0, 0),
(55, 'fsfsdafsafasf', 0, 0, 1342318100, 143, 9, 9, '61.188.187.21', 0, 0),
(56, 'sdfadsfsaf', 0, 0, 1342318106, 143, 9, 9, '61.188.187.21', 0, 0),
(57, 'fsdfsdafasdfsa', 0, 0, 1342318112, 143, 9, 9, '61.188.187.21', 0, 0),
(58, '民主\r\n', 0, 0, 1342318159, 143, 9, 9, '61.188.187.13', 0, 0),
(59, '***', 0, 0, 1342318961, 143, 9, 9, '61.188.187.13', 0, 0),
(60, '***', 0, 0, 1342318979, 143, 9, 9, '61.188.187.13', 0, 0),
(61, 'sadfASDA', 0, 0, 1342745765, 148, 9, 9, '61.188.187.13', 0, 0),
(62, 'SDFASFAFASFAS', 0, 0, 1342745770, 148, 10, 9, '61.188.187.13', 0, 0),
(63, '我哈哈', 0, 0, 1345895008, 148, 0, 0, '61.188.187.13', 0, 0),
(64, 'sfsadf', 0, 0, 1345896380, 142, 0, 0, '61.188.187.13', 0, 0),
(65, 'sdf', 0, 0, 1345896384, 142, 0, 0, '61.188.187.13', 0, 0),
(66, 'sdfsaf', 0, 0, 1345896388, 142, 0, 0, '61.188.187.13', 0, 0),
(67, 'afsdf', 0, 0, 1345896505, 142, 0, 0, '61.188.187.13', 0, 0),
(68, 'sfasdf', 0, 0, 1345896509, 142, 0, 0, '61.188.187.13', 0, 0),
(69, 'sfsdfa', 0, 0, 1345896513, 142, 0, 0, '61.188.187.13', 0, 0),
(70, 'sdf', 0, 0, 1345896517, 142, 0, 0, '61.188.187.13', 0, 0),
(71, 'sadfffffffffffffffffffffffffffff', 0, 0, 1345896522, 142, 0, 0, '61.188.187.13', 0, 0),
(72, 'sadffffffffffffff', 0, 0, 1345896526, 142, 2, 0, '61.188.187.13', 0, 0),
(73, 'sdfaaaaaaaaaaaaaaaa', 0, 0, 1345896530, 142, 0, 0, '61.188.187.13', 0, 0),
(74, 'sfaaaaad', 0, 0, 1345896533, 142, 0, 0, '61.188.187.13', 0, 0),
(75, 'sadffffffffffff', 0, 0, 1345896539, 142, 0, 0, '61.188.187.13', 0, 0),
(76, 'sfdaaaaaaaaaaaaaa', 0, 0, 1345896543, 142, 0, 0, '61.188.187.13', 0, 0),
(77, 'sfaddddddddddddd', 0, 0, 1345896547, 142, 0, 0, '61.188.187.13', 0, 0),
(78, 'sadffffffffffffffffffffff', 0, 0, 1345896551, 142, 0, 0, '61.188.187.13', 0, 0),
(79, 'fadfsaaaaaaa', 0, 0, 1345896933, 147, 0, 0, '61.188.187.13', 0, 0),
(80, 'asdffffffffffffffdfasafs', 0, 0, 1345896939, 147, 0, 0, '61.188.187.13', 0, 0),
(81, '我和你心连心', 0, 0, 1345896961, 147, 0, 0, '61.188.187.13', 0, 0),
(82, '哈哈哈', 0, 0, 1345896971, 147, 0, 0, '61.188.187.13', 0, 0),
(83, 'ZCxZc', 0, 0, 1345905038, 142, 0, 0, '61.188.187.21', 0, 0),
(84, 'zvcxxxxxxxxx', 0, 0, 1345905242, 150, 0, 0, '61.188.187.21', 0, 0),
(85, 'zvcxxxxxxxxxzvcx', 0, 0, 1345905245, 150, 0, 0, '61.188.187.21', 0, 0),
(86, 'zvcxxxxxxxxxzvcx', 0, 0, 1345905248, 150, 1, 0, '61.188.187.21', 0, 0),
(87, '嗯哼', 0, 0, 1345905836, 151, 0, 0, '61.188.187.21', 0, 0),
(88, '是不是啊', 0, 0, 1349074383, 144, 0, 0, '61.188.187.13', 0, 0),
(89, '你好好好好用啊 啊啊啊啊啊啊 啊', 0, 0, 1349074395, 144, 0, 0, '61.188.187.13', 0, 0),
(90, '哈哈哈', 0, 0, 1349145451, 150, 0, 0, '61.188.187.13', 0, 0),
(91, '***', 0, 0, 1349145465, 150, 1, 0, '61.188.187.13', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `licms_feedback`
--

CREATE TABLE IF NOT EXISTS `licms_feedback` (
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `username` varchar(10) NOT NULL,
  `feedback_id` int(10) NOT NULL AUTO_INCREMENT,
  `create_time` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `licms_feedback`
--

INSERT INTO `licms_feedback` (`title`, `content`, `username`, `feedback_id`, `create_time`, `status`) VALUES
('xiaok', 'licms支持多站点吗？', 'licms支持多站点', 14, 1340469629, 1),
('licms有什么优点', 'licms有什么优点?和ded，phpcms ，科讯相比', 'moli', 15, 1340470224, 1),
('博主美工做的不怎么样啊', '', 'yaby', 16, 1340470516, 1),
('下载地址在哪里？', '', 'binggo', 17, 1340470606, 1),
('老六', '性能不咋样', '老六', 27, 1340517605, 1),
('进入用户中心有问题', '用户中心还在改版', 'mb', 28, 1340596682, 1),
('&lt;php&gt;&lt;/php', 'fdssfds', 'sdfd', 29, 1342317959, 0),
('哈哈', '哈哈', '哈哈', 30, 1349145766, 0);

-- --------------------------------------------------------

--
-- 表的结构 `licms_feedback_reply`
--

CREATE TABLE IF NOT EXISTS `licms_feedback_reply` (
  `create_time` int(10) NOT NULL,
  `content` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `feedback_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `reply_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`reply_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `licms_feedback_reply`
--

INSERT INTO `licms_feedback_reply` (`create_time`, `content`, `user_id`, `feedback_id`, `p_id`, `reply_id`) VALUES
(1340470157, '抱歉暂时不支持', 8, 14, 0, 11),
(1340470338, 'licms使用了国内主流thinkphp，在原有的框架基础上，我们只是做了微小的改变，对于国内开发者来说，很容易进行二次开发。', 8, 15, 0, 12),
(1340470554, '确实，不善审美', 8, 16, 0, 13),
(1340470660, '目前还处于测试，暂不开放下载', 8, 17, 0, 14),
(1340517779, '一直在改进', 8, 27, 0, 16),
(1340596736, '还在开发中，谢谢谅解', 8, 28, 0, 17);

-- --------------------------------------------------------

--
-- 表的结构 `licms_hospital`
--

CREATE TABLE IF NOT EXISTS `licms_hospital` (
  `hospital_id` int(10) NOT NULL AUTO_INCREMENT,
  `hospital_title` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `create_time` int(40) NOT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `licms_hospital`
--

INSERT INTO `licms_hospital` (`hospital_id`, `hospital_title`, `hospital_address`, `hospital_phone`, `province_id`, `city_id`, `user_id`, `create_time`) VALUES
(13, '川北医学院附属医院', '南充市', '', 23, 245, 0, 1335492003),
(14, '四川大学华西医院', '成都市', '', 23, 235, 1, 1335580936),
(15, '四川省人民医院', '', '', 23, 235, 1, 1336144082),
(16, '遂宁市安居区人民医院', '遂宁市安居区', '', 23, 242, 1, 1336144092),
(21, '射洪县人民医院', '', '', 23, 242, 1, 1336144384),
(22, '大英县人民医院', '遂宁市大英县', '', 23, 242, 1, 1336144389),
(25, '南充市中心医院', '', '', 23, 245, 1, 1336466891),
(26, '蓬溪县人民医院', '', '', 23, 242, 0, 1336546702),
(27, '遂宁市中心医院', '遂宁市德胜西路', '0825', 23, 242, 0, 1337260637),
(28, '遂宁市第一人民医院', '遂宁市船山区', '', 23, 242, 0, 1337260674),
(29, '遂宁市第三人民医院', '', '', 23, 242, 0, 1337360621);

-- --------------------------------------------------------

--
-- 表的结构 `licms_level`
--

CREATE TABLE IF NOT EXISTS `licms_level` (
  `level_title` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `level_id` int(10) NOT NULL AUTO_INCREMENT,
  `score` int(10) NOT NULL,
  `back` int(10) NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=83 ;

--
-- 转存表中的数据 `licms_level`
--

INSERT INTO `licms_level` (`level_title`, `level_id`, `score`, `back`) VALUES
('初级用户', 74, 0, 0),
('中级用户', 77, 20000, 1),
('高级用户', 82, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `licms_link`
--

CREATE TABLE IF NOT EXISTS `licms_link` (
  `link_id` int(10) NOT NULL AUTO_INCREMENT,
  `link_title` varchar(20) NOT NULL,
  `link_href` varchar(40) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `category_id` int(10) NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `licms_link`
--

INSERT INTO `licms_link` (`link_id`, `link_title`, `link_href`, `logo`, `description`, `status`, `category_id`) VALUES
(3, '川北医学院', 'http://www.nsmc.edu.cn/', '<php><?php>', '', 1, 141),
(4, '西华师范大学', 'http://www.cwnu.edu.cn', '', '', 1, 139),
(5, '烟雨西华论坛', 'http://www.cwnu.org/', '<br></br>', '', 1, 139),
(6, '四川佳诚科技有限公司', 'http://www.ol163.net/jc/index.asp', '', '', 1, 142),
(7, '西华师范大学微群', 'http://q.weibo.com/215130', '', '', 1, 0),
(12, '南充市科技局', 'http://www.ncnet.ac.cn/', '', '', 1, 0),
(13, '四川省科技厅', 'http://www.scst.gov.cn/info/', '', '', 1, 134),
(14, '南充市中心医院', 'http://www.nc120.cn', '', '', 1, 141),
(15, '麻辣社区', 'http://http://www.mala.cn/forum-79-1.htm', '', '', 1, 140),
(16, '南充日报', 'http://www.scncrb.com/', '', '', 1, 143),
(17, '南充晚报', 'http://www.scncwb.com/', '', '', 1, 143),
(18, '南充新闻网', 'http://www.cnncw.cn/', '', '', 1, 138),
(19, '南房网', 'http://www.nfj.gov.cn/', '', '', 1, 144),
(20, '南充房产', 'http://www.0817.net', '', '', 1, 144),
(21, '南充房产网', 'http://www.0817f.com', '', '', 1, 0),
(22, '南充房地产交易网', 'http://www.nfj.gov.cn', '', '', 1, 144),
(23, '南充市人民政府', 'www.nanchong.gov.cn', '', '', 1, 134),
(24, '高坪政府网', 'http://www.gaoping.gov.cn/', '', '', 1, 0),
(25, '南充市卫生局', 'http://pwww.ncwsj.cn', '', '', 1, 134),
(26, '南充市教育局', 'http:/www.ncedu.net.cn', '', '', 1, 134),
(27, '众诚网络', 'http://www.ttkc.net/', '', '', 1, 136),
(28, '南充吧', 'http://tieba.baidu.com/f?kw=%C4%CF%B3%E4', '', '', 1, 146),
(29, '西华师大吧', 'http://tieba.baidu.com/f?kw=%CE%F7%BB%AA', '', '', 1, 146);

-- --------------------------------------------------------

--
-- 表的结构 `licms_menu`
--

CREATE TABLE IF NOT EXISTS `licms_menu` (
  `menu_id` int(10) NOT NULL AUTO_INCREMENT,
  `menu_title` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `p_id` int(10) NOT NULL,
  `menu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- 转存表中的数据 `licms_menu`
--

INSERT INTO `licms_menu` (`menu_id`, `menu_title`, `p_id`, `menu_name`) VALUES
(3, '前台用户', 0, ''),
(4, '后台用户', 0, ''),
(5, '文章', 0, ''),
(6, '系统', 0, ''),
(7, '附件', 0, ''),
(16, '管理', 2, 'hospital/manage'),
(17, '添加', 2, 'hospital/publish'),
(18, '管理', 3, 'user/manage'),
(19, '管理', 4, 'admin/manage'),
(20, '添加', 4, 'admin/publish'),
(21, '管理', 5, 'article/manage'),
(22, '发表', 5, 'article/publish'),
(23, '阅读', 6, 'system/read'),
(24, '积分', 6, 'system/money'),
(25, '栏目', 0, ''),
(26, '管理', 7, 'filemanager/index'),
(27, '管理', 25, 'category/choose'),
(28, '权限管理', 0, ''),
(29, '角色', 28, 'rbac/role'),
(30, '权限', 28, 'rbac/access'),
(31, '菜单', 28, 'rbac/menu'),
(32, '网站统计', 0, ''),
(33, '业务员业绩', 32, 'analyze/yewuyuan'),
(34, '编辑业绩', 32, 'analyze/bianji'),
(35, '地区营收', 32, 'analyze/area'),
(36, '充值管理', 32, 'money/manage'),
(37, '消费管理', 32, 'pay/manage'),
(38, '采集', 0, ''),
(39, '管理', 38, 'pick'),
(40, '添加采集规则', 38, 'pick/publish'),
(41, '模块', 0, ''),
(42, '友情链接', 41, 'link/index'),
(44, '管理', 42, 'link/index'),
(45, '添加', 42, 'link/publish'),
(46, '配置', 42, 'link/config'),
(47, '反馈', 41, 'feedback/index'),
(48, '管理', 47, 'feedback/index'),
(49, '通知', 41, 'notice/index'),
(50, '管理', 49, 'notice/index'),
(51, '添加', 49, 'notice/publish'),
(52, '配置', 47, 'feedback/config'),
(53, 'url路由', 6, 'url/index'),
(54, '管理', 53, 'url/index'),
(55, '添加', 53, 'url/publish'),
(56, '内容', 0, ''),
(57, '评论', 56, 'comment/index'),
(59, '管理', 57, 'comment/index'),
(60, '配置', 57, 'comment/config'),
(61, '敏感词', 41, 'sensitive/index'),
(62, '管理', 61, 'sensitive/index'),
(63, '添加', 61, 'sensitive/publish');

-- --------------------------------------------------------

--
-- 表的结构 `licms_money`
--

CREATE TABLE IF NOT EXISTS `licms_money` (
  `money_id` int(10) NOT NULL AUTO_INCREMENT,
  `create_time` int(40) NOT NULL,
  `user_id` int(10) NOT NULL,
  `province_id` int(10) NOT NULL,
  `money` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `score` int(10) NOT NULL,
  PRIMARY KEY (`money_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=54 ;

--
-- 转存表中的数据 `licms_money`
--

INSERT INTO `licms_money` (`money_id`, `create_time`, `user_id`, `province_id`, `money`, `city_id`, `owner_id`, `score`) VALUES
(5, 1335590752, 12, 0, 555, 0, 0, 0),
(49, 1337767175, 209, 1, 5, 1, 8, 50),
(51, 1337779671, 209, 1, 4, 1, 8, 40),
(9, 1335604264, 1, 0, 45, 0, 1, 0),
(34, 1337700185, 1, 0, 5, 0, 8, 50),
(15, 1335604445, 12, 0, 5, 0, 1, 0),
(21, 1336554270, 32, 0, 6, 0, 0, 24),
(22, 1336554276, 1, 0, 789, 0, 0, 3156),
(23, 1336554365, 12, 0, 6, 0, 0, 24),
(33, 1337700173, 1, 0, 6, 0, 8, 60),
(25, 1336554598, 32, 0, 6, 0, 0, 24),
(26, 1336554620, 12, 0, 789, 0, 0, 3156),
(28, 1336666537, 32, 0, 67, 0, 6, 268),
(29, 1336666680, 12, 0, 6, 0, 6, 24),
(30, 1336666688, 1, 0, 5, 0, 6, 20),
(31, 1336666693, 12, 0, 6, 0, 6, 24),
(32, 1336666698, 12, 0, 6, 0, 6, 24),
(36, 1337700201, 1, 0, 5, 0, 8, 50),
(37, 1337700984, 1, 23, 5, 245, 8, 50),
(38, 1337700991, 1, 23, 5, 245, 8, 50),
(39, 1337701068, 1, 23, 5, 245, 8, 50),
(40, 1337701418, 1, 23, 5, 245, 8, 50),
(41, 1337701859, 12, 0, 5, 0, 8, 50),
(42, 1337701875, 12, 0, 5, 0, 8, 50),
(43, 1337765648, 1, 23, 10, 245, 13, 100),
(44, 1337765728, 209, 1, 11, 1, 13, 110),
(46, 1337765957, 201, 26, 123, 281, 8, 1230),
(50, 1337778279, 1, 23, 1, 245, 14, 10),
(52, 1337946617, 256, 23, 5, 245, 8, 50),
(53, 1338386994, 1, 0, 100, 0, 8, 1000);

-- --------------------------------------------------------

--
-- 表的结构 `licms_notice`
--

CREATE TABLE IF NOT EXISTS `licms_notice` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `link` varchar(100) NOT NULL,
  `create_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `licms_notice`
--

INSERT INTO `licms_notice` (`id`, `title`, `link`, `create_time`) VALUES
(2, 'linux漏洞', '', 1340703703),
(3, '神州发射', '', 1340703713),
(4, '中艺杯体操', '', 1340703764),
(5, '通知模块完成', '', 1340704645);

-- --------------------------------------------------------

--
-- 表的结构 `licms_pay`
--

CREATE TABLE IF NOT EXISTS `licms_pay` (
  `pay_id` int(10) NOT NULL AUTO_INCREMENT,
  `pay` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `create_time` int(10) NOT NULL,
  `province_id` int(10) DEFAULT NULL,
  `city_id` int(10) DEFAULT NULL,
  `article_id` int(10) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=118 ;

--
-- 转存表中的数据 `licms_pay`
--

INSERT INTO `licms_pay` (`pay_id`, `pay`, `user_id`, `create_time`, `province_id`, `city_id`, `article_id`) VALUES
(15, 4, 1, 1338003609, 23, 245, 42),
(5, 4, 1, 1337761520, 23, 245, 39),
(14, 4, 1, 1337947227, 23, 245, 29),
(9, 4, 253, 1337856460, 23, 245, 28),
(10, 4, 253, 1337856474, 23, 245, 29),
(11, 4, 256, 1337857449, 23, 245, 41),
(12, 4, 256, 1337857469, 23, 245, 42),
(13, 4, 1, 1337870682, 23, 245, 30),
(16, 4, 1, 1338003958, 23, 245, 25),
(17, 4, 1, 1338040276, 23, 245, 44),
(18, 4, 1, 1338041555, 23, 245, 43),
(19, 4, 1, 1338041678, 23, 245, 41),
(20, 4, 1, 1338041708, 23, 245, 28),
(21, 4, 256, 1338220115, 23, 245, 25),
(22, 4, 1, 1338222825, 23, 245, 25),
(23, 4, 1, 1338222976, 23, 245, 25),
(24, 4, 1, 1338223117, 23, 245, 25),
(25, 4, 1, 1338223173, 23, 245, 25),
(26, 4, 1, 1338223221, 23, 245, 25),
(27, 4, 1, 1338223296, 23, 245, 25),
(28, 4, 1, 1338223317, 23, 245, 25),
(29, 4, 1, 1338223372, 23, 245, 25),
(30, 4, 1, 1338259095, 23, 245, 25),
(31, 4, 1, 1338292384, 23, 245, 25),
(32, 4, 1, 1338306772, 23, 245, 39),
(33, 4, 1, 1338344810, 23, 245, 25),
(34, 4, 1, 1338353121, 0, 0, 25),
(35, 4, 1, 1338387012, 0, 0, 28),
(36, 4, 1, 1338387249, 0, 0, 28),
(37, 4, 1, 1338387345, 0, 0, 29),
(38, 4, 1, 1338387651, 0, 0, 28),
(39, 4, 1, 1338387885, 0, 0, 28),
(40, 4, 1, 1338388137, 0, 0, 28),
(41, 4, 1, 1338388355, 0, 0, 29),
(42, 4, 1, 1338388595, 0, 0, 29),
(43, 4, 1, 1338388826, 0, 0, 29),
(44, 4, 1, 1338389188, 0, 0, 29),
(45, 4, 1, 1338389453, 0, 0, 29),
(46, 4, 1, 1338390064, 0, 0, 47),
(47, 4, 1, 1338390296, 0, 0, 47),
(48, 4, 1, 1338390487, 0, 0, 47),
(49, 4, 1, 1338390744, 0, 0, 47),
(50, 0, 1, 1338390988, 0, 0, 47),
(51, 0, 1, 1338391233, 0, 0, 25),
(52, 0, 1, 1338391878, 0, 0, 25),
(53, 0, 1, 1338531193, 23, 245, 48),
(54, 0, 1, 1338531278, 23, 245, 25),
(55, 0, 1, 1338532259, 23, 245, 48),
(56, 0, 1, 1338615381, 23, 245, 49),
(57, 0, 1, 1338615563, 23, 245, 50),
(58, 0, 1, 1338616886, 23, 245, 49),
(59, 0, 1, 1338617983, 23, 245, 48),
(60, 0, 1, 1338625123, 23, 245, 25),
(61, 0, 1, 1338626319, 23, 245, 49),
(62, 0, 1, 1338626657, 23, 245, 50),
(63, 0, 1, 1338627247, 23, 245, 50),
(64, 0, 1, 1338627626, 23, 245, 50),
(65, 10, 1, 1338628500, 23, 245, 29),
(66, 10, 1, 1338629125, 23, 245, 29),
(67, 10, 1, 1338629192, 23, 245, 25),
(68, 10, 1, 1338629237, 23, 245, 50),
(69, 10, 1, 1338629354, 23, 245, 47),
(70, 10, 1, 1338629614, 23, 245, 29),
(71, 10, 1, 1338629647, 23, 245, 39),
(72, 10, 1, 1338629720, 23, 245, 28),
(73, 10, 1, 1338631005, 23, 245, 49),
(74, 10, 1, 1338631482, 23, 245, 29),
(75, 10, 1, 1338631686, 23, 245, 29),
(76, 10, 1, 1338631869, 23, 245, 29),
(77, 10, 1, 1338632090, 23, 245, 29),
(78, 10, 1, 1338632116, 23, 245, 50),
(79, 10, 1, 1338632301, 23, 245, 50),
(80, 10, 1, 1338632519, 23, 245, 50),
(81, 10, 1, 1338632567, 23, 245, 51),
(82, 10, 1, 1338647162, 23, 245, 49),
(83, 10, 1, 1338647393, 23, 245, 48),
(84, 10, 1, 1338649402, 23, 245, 51),
(85, 0, 308, 1338649450, 23, 242, 25),
(86, 0, 308, 1338649465, 23, 242, 28),
(87, 10, 1, 1338649651, 23, 245, 25),
(88, 10, 1, 1338649866, 23, 245, 25),
(89, 10, 1, 1338650101, 23, 245, 25),
(90, 10, 1, 1338650286, 23, 245, 25),
(91, 10, 1, 1338650452, 23, 245, 50),
(92, 10, 1, 1338651532, 23, 245, 25),
(93, 10, 1, 1338651800, 23, 245, 49),
(94, 10, 1, 1338652413, 23, 245, 50),
(95, 10, 1, 1338652434, 23, 245, 47),
(96, 10, 1, 1338652908, 23, 245, 49),
(97, 10, 1, 1338653148, 23, 245, 49),
(98, 10, 1, 1338653355, 23, 245, 49),
(99, 10, 1, 1338653550, 23, 245, 49),
(100, 10, 1, 1338653768, 23, 245, 49),
(101, 10, 1, 1338653969, 23, 245, 49),
(102, 10, 1, 1338654185, 23, 245, 49),
(103, 10, 1, 1338699579, 23, 245, 25),
(104, 10, 1, 1338708581, 23, 245, 60),
(105, 10, 1, 1338710872, 23, 245, 61),
(106, 10, 1, 1338711075, 23, 245, 61),
(107, 10, 1, 1338723783, 23, 245, 25),
(108, 10, 1, 1338962144, 23, 242, 63),
(109, 10, 1, 1339221272, 23, 242, 61),
(110, 10, 1, 1339396925, 23, 242, 63),
(111, 30, 1, 1339431202, 23, 242, 61),
(112, 10, 1, 1339434537, 23, 242, 61),
(113, 10, 1, 1339435503, 23, 242, 61),
(114, 10, 1, 1339435544, 23, 242, 115),
(115, 15, 1, 1339435662, 23, 242, 120),
(116, 5, 1, 1339435726, 23, 242, 129),
(117, 10, 1, 1339435869, 23, 242, 61);

-- --------------------------------------------------------

--
-- 表的结构 `licms_provinces`
--

CREATE TABLE IF NOT EXISTS `licms_provinces` (
  `ID` int(10) NOT NULL,
  `PROVINCENAME` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `licms_provinces`
--

INSERT INTO `licms_provinces` (`ID`, `PROVINCENAME`) VALUES
(1, '北京市'),
(2, '天津市'),
(3, '河北省'),
(4, '山西省'),
(5, '内蒙古自治区'),
(6, '辽宁省'),
(7, '吉林省'),
(8, '黑龙江省'),
(9, '上海市'),
(10, '江苏省'),
(11, '浙江省'),
(12, '安徽省'),
(13, '福建省'),
(14, '江西省'),
(15, '山东省'),
(16, '河南省'),
(17, '湖北省'),
(18, '湖南省'),
(19, '广东省'),
(20, '广西壮族自治区'),
(21, '海南省'),
(22, '重庆市'),
(23, '四川省'),
(24, '贵州省'),
(25, '云南省'),
(26, '西藏自治区'),
(27, '陕西省'),
(28, '甘肃省'),
(29, '青海省'),
(30, '宁夏回族自治区'),
(31, '新疆维吾尔自治区'),
(32, '香港特别行政区'),
(33, '澳门特别行政区'),
(34, '台湾省');

-- --------------------------------------------------------

--
-- 表的结构 `licms_role`
--

CREATE TABLE IF NOT EXISTS `licms_role` (
  `role_id` int(10) NOT NULL AUTO_INCREMENT,
  `role_title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lock` int(1) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `licms_role`
--

INSERT INTO `licms_role` (`role_id`, `role_title`, `role_name`, `lock`) VALUES
(2, '资料编辑', 'bianji', 1),
(3, '业务员', 'yewuyuan', 1);

-- --------------------------------------------------------

--
-- 表的结构 `licms_role_access`
--

CREATE TABLE IF NOT EXISTS `licms_role_access` (
  `role_id` int(10) NOT NULL,
  `access_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `licms_role_access`
--

INSERT INTO `licms_role_access` (`role_id`, `access_id`) VALUES
(1, 6),
(1, 22),
(1, 28),
(2, 86),
(3, 73),
(2, 71),
(2, 90),
(28, 5),
(28, 6),
(28, 24),
(28, 28),
(28, 33),
(28, 49),
(28, 50),
(2, 91),
(2, 85),
(3, 66),
(3, 90),
(3, 75),
(3, 72),
(3, 56),
(3, 55),
(3, 54),
(3, 52),
(3, 76),
(3, 51),
(3, 77),
(2, 19),
(2, 21),
(2, 27),
(2, 63),
(2, 64),
(2, 65),
(2, 80),
(2, 81),
(2, 83),
(2, 84),
(3, 23),
(3, 86),
(3, 19),
(3, 21),
(3, 63),
(3, 50),
(3, 78);

-- --------------------------------------------------------

--
-- 表的结构 `licms_role_menu`
--

CREATE TABLE IF NOT EXISTS `licms_role_menu` (
  `role_id` int(10) NOT NULL,
  `menu_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `licms_role_menu`
--

INSERT INTO `licms_role_menu` (`role_id`, `menu_id`) VALUES
(2, 5),
(3, 18),
(3, 33),
(2, 21),
(2, 22),
(2, 2),
(2, 16),
(2, 17),
(2, 34),
(3, 16),
(3, 17),
(3, 5),
(3, 21),
(3, 22),
(3, 35),
(3, 36),
(3, 37),
(3, 2),
(3, 3),
(3, 32),
(3, 34),
(14, 5),
(14, 21),
(14, 22);

-- --------------------------------------------------------

--
-- 表的结构 `licms_sensitive`
--

CREATE TABLE IF NOT EXISTS `licms_sensitive` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `word` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `licms_sensitive`
--

INSERT INTO `licms_sensitive` (`id`, `word`) VALUES
(2, '共产党'),
(3, 'sb'),
(4, 'nb'),
(6, '操'),
(7, '牛逼'),
(8, '妈'),
(9, '鸡巴'),
(10, '妓女');

-- --------------------------------------------------------

--
-- 表的结构 `licms_site`
--

CREATE TABLE IF NOT EXISTS `licms_site` (
  `site_id` int(10) NOT NULL AUTO_INCREMENT,
  `site_title` char(20) NOT NULL,
  `site_name` char(20) NOT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `licms_system`
--

CREATE TABLE IF NOT EXISTS `licms_system` (
  `sname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `svalue` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `licms_system`
--

INSERT INTO `licms_system` (`sname`, `svalue`, `id`) VALUES
('page_size', '5000', 1),
('free_page', '50', 2),
('score_pay', '5', 3),
('score_default', '10', 4),
('bilv', '10', 5),
('user_search_count', '10', 6),
('site_title', '南充市计算机发展协会', 7),
('link_status_on', '1', 8),
('feedback_status_on', '1', 9),
('article_status_on', '0', 10),
('comment_status_on', '0', 11),
('comment_sensitive', '1', 12),
('site_keywords', '致力于南充地区计算机事业发展！,行业交流', 13),
('site_description', '计算机，网站，php,linux，服务器', 14);

-- --------------------------------------------------------

--
-- 表的结构 `licms_tag`
--

CREATE TABLE IF NOT EXISTS `licms_tag` (
  `tag_title` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tag_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `licms_tag`
--

INSERT INTO `licms_tag` (`tag_title`, `tag_id`) VALUES
('地方是否', 1),
('', 2),
('是否是否', 3),
('', 4),
('是发送啊', 5),
('', 6),
('dasdasd', 7),
('', 8),
('adsasd', 9),
('', 10),
('ad ad ad ', 11),
('', 12),
('sdfasf', 13),
('', 14),
('fsfdadfas', 15),
('', 16),
('sfsdf', 17),
('', 18),
('sdfasdf', 19),
('', 20),
('sadfasdfsad', 21),
('', 22),
('sdfs', 23),
('', 24),
('阿斯顿', 25),
('', 26),
('', 27),
('dfdf', 28),
('', 29);

-- --------------------------------------------------------

--
-- 表的结构 `licms_url`
--

CREATE TABLE IF NOT EXISTS `licms_url` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `action` varchar(40) NOT NULL,
  `url` varchar(100) NOT NULL,
  `rewrite` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `licms_url`
--

INSERT INTO `licms_url` (`id`, `action`, `url`, `rewrite`, `status`) VALUES
(2, '', '/list-5', '/list-{category_id}', 1),
(3, '', '/show-5.html', '/show-{article_id}', 0);

-- --------------------------------------------------------

--
-- 表的结构 `licms_user`
--

CREATE TABLE IF NOT EXISTS `licms_user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(40) NOT NULL,
  `last_login_time` int(100) NOT NULL,
  `login_count` int(100) NOT NULL,
  `role_id` int(10) NOT NULL,
  `score` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `truename` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sex` int(1) NOT NULL,
  `qq` int(20) NOT NULL,
  `fax` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `score_pay` int(10) NOT NULL COMMENT '每个用户默认修改规则',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=312 ;

--
-- 转存表中的数据 `licms_user`
--

INSERT INTO `licms_user` (`user_id`, `username`, `password`, `create_time`, `last_login_time`, `login_count`, `role_id`, `score`, `status`, `owner_id`, `address`, `phone`, `email`, `province_id`, `city_id`, `truename`, `sex`, `qq`, `fax`, `birthday`, `question`, `answer`, `score_pay`) VALUES
(12, 'bianji', '65ba841e01d6db7733e90a5b7f9e6f80', 1335455604, 0, 0, 1, 13144, 0, 1, '', '0', '', 0, 0, '', 0, 0, '', '', '', '', 0),
(209, 'lookyou', '3bab14413c66d9e82f7b0aa666602fe4', 1337477878, 0, 0, 0, 1380, 0, 0, '', '', 'lookyou08@126.com', 1, 1, '', 0, 0, '', '', 'lookyou', 'lookyou', 0),
(256, 'cccc', '41fcba09f2bdcdf315ba4119dc7978dd', 1337857165, 0, 0, 0, 24, 0, 0, '', '', 'cccc@qq.com', 13, 122, '', 0, 0, '', '', 'cccc', 'cccc', 0),
(253, '5555', '6074c6aa3488f3c2dddff2a7ca821aab', 1337856353, 0, 0, 0, 2, 0, 0, '', '', '5555@qq.com', 23, 245, '', 0, 0, '', '', '5555', '5555', 0),
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 0, 0, 0, 350, 0, 0, '', '', '', 23, 242, '', 0, 0, '', '', '', '', 5),
(307, '123', '202cb962ac59075b964b07152d234b70', 1338632871, 1338632871, 1, 0, 10, 0, 0, '', '', '123@123.123', 21, 233, '123', 0, 0, '', '', '123', '123', 0),
(310, 'larbon', '5b6a4ab4d475ea0bc342d88c70b939a4', 1339409288, 1339409288, 1, 0, 10, 0, 0, '', '', 'dadsadas@163.com', 28, 300, '', 0, 0, '', '', 'dddddddddd', 'aaaaaaaaaa', 0),
(311, 'woshishei', '08ab59358efbb47868a93bd0d617ae5c', 1349145943, 1349145943, 1, 0, 10, 0, 0, '', '', 'woshishei@qq.com', 0, 0, '', 0, 0, '', '', 'woshishei', 'woshishei', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
