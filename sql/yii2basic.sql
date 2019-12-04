-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2019-12-04 12:37:26
-- 服务器版本： 5.7.26
-- PHP 版本： 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2basic`
--

-- --------------------------------------------------------

--
-- 表的结构 `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '表记录编号',
  `nameone` varchar(1000) NOT NULL COMMENT '第一作者',
  `nametwo` varchar(1000) NOT NULL COMMENT '第二作者',
  `namethree` varchar(1000) NOT NULL COMMENT '第三作者',
  `namefour` varchar(1000) NOT NULL COMMENT '第四作者',
  `namefive` varchar(1000) NOT NULL COMMENT '第五作者',
  `namesix` varchar(1000) NOT NULL COMMENT '第六作者',
  `nameseven` varchar(1000) NOT NULL COMMENT '第七作者',
  `nameeight` varchar(1000) NOT NULL COMMENT '第八作者',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='论文作者表';

--
-- 转存表中的数据 `author`
--

INSERT INTO `author` (`id`, `nameone`, `nametwo`, `namethree`, `namefour`, `namefive`, `namesix`, `nameseven`, `nameeight`) VALUES
(1, '学生一', '李晓鹏', '学生七', '学生五', '', '', '', ''),
(2, '学生二', '学生一', '学生七', '', '', '', '', ''),
(3, '学生三', '李晓鹏', '学生一', '学生二', '学生七', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` char(255) CHARACTER SET latin1 DEFAULT NULL,
  `redirect_url` char(255) CHARACTER SET latin1 DEFAULT NULL,
  `des` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `banner`
--

INSERT INTO `banner` (`id`, `img_url`, `redirect_url`, `des`) VALUES
(7, 'uploads/20190317142236769.jpg', 'www.baidu.com', '123'),
(8, 'uploads/20190317142448738.jpg', '123', '123'),
(9, 'uploads/1574510253.jpg', 'www.baidu.com', '数据改变生活'),
(10, 'uploads/1574510306.jpg', 'www.google.com', '智能导向未来'),
(11, 'uploads/1574510940.jpeg', 'www.google.com', '数据改变生活'),
(12, 'uploads/1574510951.jpg', 'www.google.com', '智能导向未来');

-- --------------------------------------------------------

--
-- 表的结构 `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `country`
--

INSERT INTO `country` (`code`, `name`, `population`) VALUES
('AU', 'Australia', 18886000),
('BR', 'Brazil', 170115000),
('CA', 'Canada', 1147000),
('CN', 'China', 1277558000),
('DE', 'Germany', 82164700),
('FR', 'France', 59225700),
('GB', 'United Kingdom', 59623400),
('IN', 'India', 1013662000),
('RU', 'Russia', 146934000),
('US', 'United States', 278357000);

-- --------------------------------------------------------

--
-- 表的结构 `group_index`
--

DROP TABLE IF EXISTS `group_index`;
CREATE TABLE IF NOT EXISTS `group_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgs` char(255) DEFAULT NULL,
  `highlights` char(255) DEFAULT NULL,
  `events` char(255) DEFAULT NULL,
  `news` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `group_index`
--

INSERT INTO `group_index` (`id`, `imgs`, `highlights`, `events`, `news`) VALUES
(1, '11,12', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `honor`
--

DROP TABLE IF EXISTS `honor`;
CREATE TABLE IF NOT EXISTS `honor` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '荣誉表id、主键、自增',
  `staff_id` int(11) DEFAULT NULL COMMENT '荣誉所属人员的id',
  `time` datetime DEFAULT NULL COMMENT '荣誉获得时间',
  `name` varchar(255) DEFAULT NULL COMMENT '荣誉名称',
  `rank` varchar(255) DEFAULT NULL COMMENT '荣誉级别',
  `describe` varchar(255) DEFAULT NULL COMMENT '额外描述',
  `other` varchar(255) DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `honor_id` (`staff_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `honor`
--

INSERT INTO `honor` (`id`, `staff_id`, `time`, `name`, `rank`, `describe`, `other`) VALUES
(1, 1, '2019-11-02 19:05:36', 'XIAOJIE GUO', '无', 'IEEE Senior Member, 2019', '无'),
(2, 1, '2019-11-01 19:06:59', 'XIAOJIE GUO', '无', '\r\nICME Best Student Paper Award Runner-up X2, 2018, IEEE. ', '无'),
(3, 1, '2019-11-02 19:07:40', 'XIAOJIE GUO', '无', 'Winner of CCF-Tencent Open Fund, 2018, Tencent Co Ltd. ', '无'),
(4, 1, '2019-11-02 19:08:07', 'XIAOJIE GUO', '无', 'Peiyang Young Scientist, 2017, Tianjin University. ', '无'),
(5, 1, '2019-11-07 19:08:38', 'XIAOJIE GUO', '无', 'Excellent Researcher Award, 2015, Institute of Information Engineering, Chinese Academy of Sciences. ', '无'),
(6, 1, NULL, '', '', 'IEEE Senior Member, 2019, IEEE.', '');

-- --------------------------------------------------------

--
-- 表的结构 `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员、主键',
  `name` varchar(255) DEFAULT NULL COMMENT '管理员姓名',
  `password` varchar(255) DEFAULT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'admin', 'gxjtju123');

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `memberid` int(20) NOT NULL AUTO_INCREMENT COMMENT '表记录编号',
  `leader` varchar(1000) DEFAULT NULL COMMENT '成员名',
  `title` varchar(1000) DEFAULT NULL COMMENT '职称',
  `mail` varchar(1000) DEFAULT NULL COMMENT '邮箱',
  `img` varchar(1000) DEFAULT NULL COMMENT '照片',
  `keywords` varchar(1000) DEFAULT NULL COMMENT '研究方向',
  PRIMARY KEY (`memberid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='团队成员表';

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`memberid`, `leader`, `title`, `mail`, `img`, `keywords`) VALUES
(2, '李晓鹏', '本科生', '3016218087@tju.edu.cn', '', '计算机视觉'),
(3, '学生二', '本科生', '3016218088@tju.edu.cn', '', '计算机视觉'),
(4, '学生三', '本科生', '3016218089@tju.edu.cn', '', '计算机视觉'),
(5, '学生四', '硕士研究生', '3016218090@tju.edu.cn', '', '图像处理'),
(6, '学生五', '博士研究生', '3016218091@tju.edu.cn', '', '计算机视觉'),
(9, '学生七', '博士研究生', '3016218084@tju.edu.cn', '', '计算机视觉'),
(10, '学生一', '博士研究生', '3016218065@tju.edu.cn', 'uploads/portrait/1574387144.jpg', '计算机视觉');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `href` char(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `name`, `date`, `content`, `image`, `href`) VALUES
(1, '习近平在“不忘初心、牢记使命”主题教育工作会议上的讲话', '2019-11-18', '　党的十九大决定，以县处级以上领导干部为重点，在全党开展“不忘初心、牢记使命”主题教育。今年是中华人民共和国成立70周年，也是我们党在全国执政第70个年头，在这个时刻开展这次主题教育，正当其时。党中央已经印发了关于在全党开展“不忘初心、牢记使命”主题教育的意见。今天会议就是对全党开展这次主题教育进行动员部署。', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1574064897043&di=ba89e826624a4b15fae9f18af90e7c40&imgtype=0&src=http%3A%2F%2Ftpic.home.news.cn%2FxhBlog%2Fxhpic003%2FM03%2F37%2F74%2FwKhTh1f4oW0EAAAAAAAAAAAAAAA687.jpg', 'http://pinglun.youth.cn/ll/201907/t20190701_11996816.htm?uc_biz_str=S:custom|C:smrobot'),
(2, '习近平：中法要展现大国担当', '2019-11-15', '习近平指出，面对百年未有之大变局，中法作为联合国安理会常任理事国和东西方文明代表，理应担负起更多责任，展现大国担当。两国应该坚持独立自主传统，共同维护以联合国为核心的国际体系、以国际法为基础的国际秩序、以世界贸易组织规则为基石的多边贸易体制。', 'http://paper.people.com.cn/rmrbhwb/res/1/20191107/1573066726660_1.jpg', 'http://www.xinhuanet.com/politics/leaders/2019-11/06/c_1125199108.htm');

-- --------------------------------------------------------

--
-- 表的结构 `paper`
--

DROP TABLE IF EXISTS `paper`;
CREATE TABLE IF NOT EXISTS `paper` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键、自增',
  `staff_id` int(11) NOT NULL COMMENT '人员id 外键',
  `name` varchar(255) DEFAULT NULL COMMENT '论文名',
  `rank` varchar(255) DEFAULT NULL COMMENT '论文中属于第几作者',
  `time` datetime DEFAULT NULL COMMENT '论文发表时间',
  `journal` varchar(255) DEFAULT NULL COMMENT '期刊名',
  `issue` varchar(255) DEFAULT NULL COMMENT '期刊号',
  `level` varchar(255) DEFAULT NULL COMMENT '论文所属级别：如CCFA、B类',
  `other` varchar(255) DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `paper_id` (`staff_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `paper`
--

INSERT INTO `paper` (`id`, `staff_id`, `name`, `rank`, `time`, `journal`, `issue`, `level`, `other`) VALUES
(1, 1, 'XIAOJIE GUO', '无', '2019-11-01 19:09:28', '无', '2017.08 \"ROUTE: Robust Outlier Estimation for Low Rank Matrix Recovery\" @ IJCAI, Melbourne, Australia', '无', '无'),
(2, 1, '', '', NULL, '', '2017.08 \"ROUTE: Robust Outlier Estimation for Low Rank Matrix Recovery\" @ IJCAI, Melbourne, Australia', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '表记录编号',
  `nameone` varchar(1000) NOT NULL,
  `nametwo` varchar(1000) NOT NULL,
  `namethree` varchar(1000) NOT NULL,
  `namefour` varchar(1000) NOT NULL,
  `namefive` varchar(1000) NOT NULL,
  `namesix` varchar(1000) NOT NULL,
  `nameseven` varchar(1000) NOT NULL,
  `nameeight` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='项目参与者表';

--
-- 转存表中的数据 `participant`
--

INSERT INTO `participant` (`id`, `nameone`, `nametwo`, `namethree`, `namefour`, `namefive`, `namesix`, `nameseven`, `nameeight`) VALUES
(1, '学生一', '学生二', '学生三', '学生五', '', '', '', ''),
(2, '李晓鹏', '学生五', '学生七', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '表记录编号',
  `name` varchar(1000) NOT NULL COMMENT '项目名',
  `objective` varchar(1000) NOT NULL COMMENT '项目目标',
  `introduction` text NOT NULL COMMENT '项目介绍',
  `participants` int(20) NOT NULL COMMENT '参与人表编号',
  `cooperator` varchar(1000) NOT NULL COMMENT '合作单位',
  PRIMARY KEY (`id`),
  KEY `particapant` (`participants`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='项目表';

--
-- 转存表中的数据 `project`
--

INSERT INTO `project` (`id`, `name`, `objective`, `introduction`, `participants`, `cooperator`) VALUES
(1, '第一项目', '学会C++', '为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++', 1, '天津大学'),
(2, '第二项目', '学会PHP', '为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP', 2, '天津大学');

-- --------------------------------------------------------

--
-- 表的结构 `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '表记录编号',
  `name` varchar(1000) NOT NULL COMMENT '论文名',
  `time` date NOT NULL COMMENT '发表日期',
  `place` varchar(1000) NOT NULL COMMENT '发表地点',
  `pdf` varchar(1000) NOT NULL COMMENT 'pdf',
  `authorid` int(20) NOT NULL COMMENT '作者表编号',
  `abstract` text NOT NULL COMMENT '论文摘要',
  `img` varchar(1000) NOT NULL COMMENT '论文图片',
  `acknowledgement` text NOT NULL COMMENT '致谢',
  PRIMARY KEY (`id`),
  KEY `author` (`authorid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='论文表';

--
-- 转存表中的数据 `publication`
--

INSERT INTO `publication` (`id`, `name`, `time`, `place`, `pdf`, `authorid`, `abstract`, `img`, `acknowledgement`) VALUES
(1, '论苏州园林的意境美', '2019-11-18', '亚洲科学周刊', 'uploads/pdf/论苏州园林的意境美_吴倩.pdf', 1, '论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容', 'uploads/publicationimg/paperimg.png', 'We want to thank Julio Marco for his help with figures, Ibón Guillén for discussions, and the members of the Graphics and Imaging Lab for proofreading. Min H. Kim acknowledges Korea NRF grants (2016R1A2B2013031, 2013M3A6A6073718) and additional support by KOCCA in MCST of Korea, Cross-Ministry Giga KOREA Project (GK17P0200), Samsung Electronics (SRFC-IT1402-02), and an ICT R&D program of MSIT/IITP of Korea (2017-0-00072, 2016-0-00018). Diego Gutierrez and Adrian Jarabo are funded by the European Research Council (ERC) under the European Union’s Horizon 2020 research and innovation program (CHAMELEON project, grant agreement No 682080), DARPA (project REVEAL), and the Spanish Ministerio de Economía y Competitividad (TIN2016-78753-P)'),
(2, '第二篇论文', '2019-11-14', '亚洲科学周刊', '', 2, '论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容', 'uploads/publicationimg/paperimg.png', 'We want to thank Julio Marco for his help with figures, Ibón Guillén for discussions, and the members of the Graphics and Imaging Lab for proofreading. Min H. Kim acknowledges Korea NRF grants (2016R1A2B2013031, 2013M3A6A6073718) and additional support by KOCCA in MCST of Korea, Cross-Ministry Giga KOREA Project (GK17P0200), Samsung Electronics (SRFC-IT1402-02), and an ICT R&D program of MSIT/IITP of Korea (2017-0-00072, 2016-0-00018). Diego Gutierrez and Adrian Jarabo are funded by the European Research Council (ERC) under the European Union’s Horizon 2020 research and innovation program (CHAMELEON project, grant agreement No 682080), DARPA (project REVEAL), and the Spanish Ministerio de Economía y Competitividad (TIN2016-78753-P)'),
(3, '简析苏州园林之美', '2019-11-20', '中国某植物学周刊', 'uploads/pdf/简析苏州园林之美_成婧欢.pdf', 3, '论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容', 'uploads/publicationimg/paperimg.png', 'We want to thank Julio Marco for his help with figures, Ibón Guillén for discussions, and the members of the Graphics and Imaging Lab for proofreading. Min H. Kim acknowledges Korea NRF grants (2016R1A2B2013031, 2013M3A6A6073718) and additional support by KOCCA in MCST of Korea, Cross-Ministry Giga KOREA Project (GK17P0200), Samsung Electronics (SRFC-IT1402-02), and an ICT R&D program of MSIT/IITP of Korea (2017-0-00072, 2016-0-00018). Diego Gutierrez and Adrian Jarabo are funded by the European Research Council (ERC) under the European Union’s Horizon 2020 research and innovation program (CHAMELEON project, grant agreement No 682080), DARPA (project REVEAL), and the Spanish Ministerio de Economía y Competitividad (TIN2016-78753-P)');

-- --------------------------------------------------------

--
-- 表的结构 `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '人员id、主键自增',
  `Name` varchar(255) DEFAULT NULL COMMENT '人员姓名',
  `Title` varchar(255) DEFAULT NULL COMMENT '职称',
  `Status` varchar(255) DEFAULT NULL COMMENT '状态',
  `Email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `Image` varchar(255) DEFAULT NULL COMMENT '照片',
  `Profile` text COMMENT '个人简介',
  `other` varchar(255) DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `staff`
--

INSERT INTO `staff` (`id`, `Name`, `Title`, `Status`, `Email`, `Image`, `Profile`, `other`) VALUES
(1, 'XIAOJIE GUO', 'associate professor', 'wu', 'xj.max.guo@gmail.com', 'uploads/avatar/GXJ.png', '<p>\r\n                        I am now a tenured Associate Professor with the College of Intelligence \r\nand Computing, Tianjin University.  \r\nMy research interest mainly includes Computer Vision, Pattern Recognition, and Machine Learning. \r\nPrior to TJU, I spent about 4 fantastic years at SKLOIS, IIE, Chinese Academy of Sciences. </p><p>Our lab has several Ph.D.  and Master positions  this year. </p><p>We are seeking passionate and innovative students to work on CV/PR/ML. </p>', '1'),
(2, 'a zhi', 'wu', 'dasi', 'liuzhi@tju.edu.cn', 'wu', 'jkhbuihuihuih', '1');

-- --------------------------------------------------------

--
-- 表的结构 `staff_project`
--

DROP TABLE IF EXISTS `staff_project`;
CREATE TABLE IF NOT EXISTS `staff_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '研究项目id、主键、自增',
  `staff_id` int(11) DEFAULT NULL COMMENT '项目所属人员id',
  `time_begin` datetime DEFAULT NULL COMMENT '研究项目申请时间',
  `time_end` datetime DEFAULT NULL COMMENT '研究项目截至时间',
  `name` varchar(255) DEFAULT NULL COMMENT '研究项目名',
  `category` varchar(255) DEFAULT NULL COMMENT '研究项目所属类别',
  `funds` double(255,0) DEFAULT NULL COMMENT '研究经费',
  `meaning` varchar(255) DEFAULT NULL COMMENT '研究意义',
  `other` varchar(255) DEFAULT NULL COMMENT '其他描述',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `project_id` (`staff_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `staff_project`
--

INSERT INTO `staff_project` (`id`, `staff_id`, `time_begin`, `time_end`, `name`, `category`, `funds`, `meaning`, `other`) VALUES
(1, 1, '2019-11-01 19:12:28', '2019-11-02 19:12:32', '\r\n2018.10-2019.09 \"CCF-Tencent Open Fund\", CCF-Tencent, PI ', NULL, NULL, NULL, NULL),
(2, 1, NULL, NULL, '2018.01-2021.12 \"Peiyang Young Scientist Special Grant\", Tianjin University, PI', NULL, NULL, NULL, NULL),
(3, 1, NULL, NULL, '2018.10-2019.09 \"CCF-Tencent Open Fund\", CCF-Tencent, PI ', '', NULL, '', ''),
(4, 1, NULL, NULL, 'IEEE Senior Member, 2019, IEEE.', '', NULL, '', '');

--
-- 限制导出的表
--

--
-- 限制表 `honor`
--
ALTER TABLE `honor`
  ADD CONSTRAINT `honor_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- 限制表 `paper`
--
ALTER TABLE `paper`
  ADD CONSTRAINT `paper_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- 限制表 `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `particapant` FOREIGN KEY (`participants`) REFERENCES `participant` (`id`);

--
-- 限制表 `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `author` FOREIGN KEY (`authorid`) REFERENCES `author` (`id`);

--
-- 限制表 `staff_project`
--
ALTER TABLE `staff_project`
  ADD CONSTRAINT `project_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
