/*
 Navicat MySQL Data Transfer

 Source Server         : 1
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3306
 Source Schema         : yii2basic_12-05

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 06/12/2019 13:14:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for author
-- ----------------------------
DROP TABLE IF EXISTS `author`;
CREATE TABLE `author`  (
  `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '表记录编号',
  `nameone` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '第一作者',
  `nametwo` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '第二作者',
  `namethree` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '第三作者',
  `namefour` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '第四作者',
  `namefive` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '第五作者',
  `namesix` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '第六作者',
  `nameseven` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '第七作者',
  `nameeight` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '第八作者',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '论文作者表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of author
-- ----------------------------
INSERT INTO `author` VALUES (1, '学生一', '李晓鹏', '学生七', '学生五', '', '', '', '');
INSERT INTO `author` VALUES (2, '学生二', '学生一', '学生七', '', '', '', '', '');
INSERT INTO `author` VALUES (3, '学生三', '李晓鹏', '学生一', '学生二', '学生七', '', '', '');

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` char(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `redirect_url` char(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `des` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES (7, 'uploads/20190317142236769.jpg', 'www.baidu.com', '123');
INSERT INTO `banner` VALUES (8, 'uploads/20190317142448738.jpg', '123', '123');
INSERT INTO `banner` VALUES (9, 'uploads/1574510253.jpg', 'www.baidu.com', '数据改变生活');
INSERT INTO `banner` VALUES (10, 'uploads/1574510306.jpg', 'www.google.com', '智能导向未来');
INSERT INTO `banner` VALUES (11, 'uploads/1574510940.jpeg', 'www.google.com', '数据改变生活');
INSERT INTO `banner` VALUES (12, 'uploads/1574510951.jpg', 'www.google.com', '智能导向未来');
INSERT INTO `banner` VALUES (13, 'uploads/1575472292.png', '', '数据改变生活');
INSERT INTO `banner` VALUES (14, 'uploads/1575472303.jpg', '', '智能导向未来');

-- ----------------------------
-- Table structure for country
-- ----------------------------
DROP TABLE IF EXISTS `country`;
CREATE TABLE `country`  (
  `code` char(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` char(52) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `population` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`code`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of country
-- ----------------------------
INSERT INTO `country` VALUES ('AU', 'Australia', 18886000);
INSERT INTO `country` VALUES ('BR', 'Brazil', 170115000);
INSERT INTO `country` VALUES ('CA', 'Canada', 1147000);
INSERT INTO `country` VALUES ('CN', 'China', 1277558000);
INSERT INTO `country` VALUES ('DE', 'Germany', 82164700);
INSERT INTO `country` VALUES ('FR', 'France', 59225700);
INSERT INTO `country` VALUES ('GB', 'United Kingdom', 59623400);
INSERT INTO `country` VALUES ('IN', 'India', 1013662000);
INSERT INTO `country` VALUES ('RU', 'Russia', 146934000);
INSERT INTO `country` VALUES ('US', 'United States', 278357000);

-- ----------------------------
-- Table structure for dataset
-- ----------------------------
DROP TABLE IF EXISTS `dataset`;
CREATE TABLE `dataset`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键自增',
  `contributor` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NULL DEFAULT NULL COMMENT '贡献者',
  `dataset_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NULL DEFAULT NULL COMMENT '数据集名',
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NULL DEFAULT NULL COMMENT '数据集大小',
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NULL DEFAULT NULL COMMENT '数据集下载链接',
  `describe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NULL DEFAULT NULL COMMENT '数据集描述',
  `other` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NULL DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_520_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dataset
-- ----------------------------
INSERT INTO `dataset` VALUES (1, 'amao', 'dffvvge', '5G', 'wu', 'wu', 'wu');

-- ----------------------------
-- Table structure for group_index
-- ----------------------------
DROP TABLE IF EXISTS `group_index`;
CREATE TABLE `group_index`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgs` char(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `highlights` char(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `events` char(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `news` char(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `publications` char(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of group_index
-- ----------------------------
INSERT INTO `group_index` VALUES (1, '13,14', '', '', '1,2', '1,2,3');

-- ----------------------------
-- Table structure for honor
-- ----------------------------
DROP TABLE IF EXISTS `honor`;
CREATE TABLE `honor`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '荣誉表id、主键、自增',
  `staff_id` int(11) NULL DEFAULT NULL COMMENT '荣誉所属人员的id',
  `time` datetime(0) NULL DEFAULT NULL COMMENT '荣誉获得时间',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '荣誉名称',
  `rank` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '荣誉级别',
  `describe` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '额外描述',
  `other` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `honor_id`(`staff_id`) USING BTREE,
  CONSTRAINT `honor_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of honor
-- ----------------------------
INSERT INTO `honor` VALUES (1, 1, '2019-11-02 19:05:36', 'XIAOJIE GUO', '无', 'IEEE Senior Member, 2019', '无');
INSERT INTO `honor` VALUES (2, 1, '2019-11-01 19:06:59', 'XIAOJIE GUO', '无', '\r\nICME Best Student Paper Award Runner-up X2, 2018, IEEE. ', '无');
INSERT INTO `honor` VALUES (3, 1, '2019-11-02 19:07:40', 'XIAOJIE GUO', '无', 'Winner of CCF-Tencent Open Fund, 2018, Tencent Co Ltd. ', '无');
INSERT INTO `honor` VALUES (4, 1, '2019-11-02 19:08:07', 'XIAOJIE GUO', '无', 'Peiyang Young Scientist, 2017, Tianjin University. ', '无');
INSERT INTO `honor` VALUES (5, 1, '2019-11-07 19:08:38', 'XIAOJIE GUO', '无', 'Excellent Researcher Award, 2015, Institute of Information Engineering, Chinese Academy of Sciences. ', '无');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员、主键',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '管理员姓名',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES (1, 'admin', 'gxjtju123');

-- ----------------------------
-- Table structure for meeting
-- ----------------------------
DROP TABLE IF EXISTS `meeting`;
CREATE TABLE `meeting`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键自增',
  `speaker` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NULL DEFAULT NULL COMMENT '组会发言人、分享者',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NULL DEFAULT NULL COMMENT '组会分享题目、主题',
  `time` datetime(0) NULL DEFAULT NULL COMMENT '组会时间',
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NULL DEFAULT NULL COMMENT '下载链接',
  `evaluation` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NULL DEFAULT NULL COMMENT '评价、反响、思考',
  `other` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NULL DEFAULT NULL COMMENT '其他、选填字段',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_520_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of meeting
-- ----------------------------
INSERT INTO `meeting` VALUES (1, 'amao', 'Fcn', '2019-12-05 12:52:17', 'wu', 'wu', 'wu');

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member`  (
  `memberid` int(20) NOT NULL AUTO_INCREMENT COMMENT '表记录编号',
  `leader` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '成员名',
  `title` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '职称',
  `mail` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '邮箱',
  `img` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '照片',
  `keywords` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '研究方向',
  PRIMARY KEY (`memberid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '团队成员表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES (2, '李晓鹏', '本科生', '3016218087@tju.edu.cn', '', '计算机视觉');
INSERT INTO `member` VALUES (3, '学生二', '本科生', '3016218088@tju.edu.cn', '', '计算机视觉');
INSERT INTO `member` VALUES (4, '学生三', '本科生', '3016218089@tju.edu.cn', '', '计算机视觉');
INSERT INTO `member` VALUES (5, '学生四', '硕士研究生', '3016218090@tju.edu.cn', '', '图像处理');
INSERT INTO `member` VALUES (6, '学生五', '博士研究生', '3016218091@tju.edu.cn', '', '计算机视觉');
INSERT INTO `member` VALUES (9, '学生七', '博士研究生', '3016218084@tju.edu.cn', '', '计算机视觉');
INSERT INTO `member` VALUES (10, '学生一', '博士研究生', '3016218065@tju.edu.cn', 'uploads/portrait/1574387144.jpg', '计算机视觉');
INSERT INTO `member` VALUES (11, '郭晓杰', '导师', 'xj.max.guo@gmail.com', 'uploads/portrait/1575552839.png', '计算机视觉');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` date NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `href` char(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, '习近平在“不忘初心、牢记使命”主题教育工作会议上的讲话', '2019-11-18', '　党的十九大决定，以县处级以上领导干部为重点，在全党开展“不忘初心、牢记使命”主题教育。今年是中华人民共和国成立70周年，也是我们党在全国执政第70个年头，在这个时刻开展这次主题教育，正当其时。党中央已经印发了关于在全党开展“不忘初心、牢记使命”主题教育的意见。今天会议就是对全党开展这次主题教育进行动员部署。', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1574064897043&di=ba89e826624a4b15fae9f18af90e7c40&imgtype=0&src=http%3A%2F%2Ftpic.home.news.cn%2FxhBlog%2Fxhpic003%2FM03%2F37%2F74%2FwKhTh1f4oW0EAAAAAAAAAAAAAAA687.jpg', 'http://pinglun.youth.cn/ll/201907/t20190701_11996816.htm?uc_biz_str=S:custom|C:smrobot');
INSERT INTO `news` VALUES (2, '习近平：中法要展现大国担当', '2019-11-15', '习近平指出，面对百年未有之大变局，中法作为联合国安理会常任理事国和东西方文明代表，理应担负起更多责任，展现大国担当。两国应该坚持独立自主传统，共同维护以联合国为核心的国际体系、以国际法为基础的国际秩序、以世界贸易组织规则为基石的多边贸易体制。', 'http://paper.people.com.cn/rmrbhwb/res/1/20191107/1573066726660_1.jpg', 'http://www.xinhuanet.com/politics/leaders/2019-11/06/c_1125199108.htm');

-- ----------------------------
-- Table structure for paper
-- ----------------------------
DROP TABLE IF EXISTS `paper`;
CREATE TABLE `paper`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键、自增',
  `staff_id` int(11) NOT NULL COMMENT '人员id 外键',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '论文名',
  `rank` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '论文中属于第几作者',
  `time` datetime(0) NULL DEFAULT NULL COMMENT '论文发表时间',
  `journal` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '期刊名',
  `issue` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '期刊号',
  `level` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '论文所属级别：如CCFA、B类',
  `other` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `paper_id`(`staff_id`) USING BTREE,
  CONSTRAINT `paper_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paper
-- ----------------------------
INSERT INTO `paper` VALUES (1, 1, 'XIAOJIE GUO', '无', '2019-11-01 19:09:28', '无', '2017.08 \"ROUTE: Robust Outlier Estimation for Low Rank Matrix Recovery\" @ IJCAI, Melbourne, Australia', '无', '无');
INSERT INTO `paper` VALUES (2, 1, '', '', NULL, '', '2017.08 \"ROUTE: Robust Outlier Estimation for Low Rank Matrix Recovery\" @ IJCAI, Melbourne, Australia', '', '');

-- ----------------------------
-- Table structure for participant
-- ----------------------------
DROP TABLE IF EXISTS `participant`;
CREATE TABLE `participant`  (
  `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '表记录编号',
  `nameone` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nametwo` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namethree` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namefour` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namefive` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namesix` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nameseven` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nameeight` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '项目参与者表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of participant
-- ----------------------------
INSERT INTO `participant` VALUES (1, '学生一', '学生二', '学生三', '学生五', '', '', '', '');
INSERT INTO `participant` VALUES (2, '李晓鹏', '学生五', '学生七', '', '', '', '', '');

-- ----------------------------
-- Table structure for project
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project`  (
  `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '表记录编号',
  `name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '项目名',
  `objective` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '项目目标',
  `introduction` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '项目介绍',
  `participants` int(20) NOT NULL COMMENT '参与人表编号',
  `cooperator` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '合作单位',
  `img` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `github` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `particapant`(`participants`) USING BTREE,
  CONSTRAINT `particapant` FOREIGN KEY (`participants`) REFERENCES `participant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '项目表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of project
-- ----------------------------
INSERT INTO `project` VALUES (1, '第一项目', '学会C++', '为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++为了C++', 1, '天津大学', 'uploads/projectimg/paperimg.png', 'https://github.com/huqiming513/Yii-XGroup');
INSERT INTO `project` VALUES (2, '第二项目', '学会PHP', '为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP为了PHP', 2, '天津大学', 'uploads/projectimg/paperimg.png', 'https://github.com/huqiming513/Yii-XGroup');

-- ----------------------------
-- Table structure for publication
-- ----------------------------
DROP TABLE IF EXISTS `publication`;
CREATE TABLE `publication`  (
  `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '表记录编号',
  `name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '论文名',
  `time` date NOT NULL COMMENT '发表日期',
  `place` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '发表地点',
  `pdf` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'pdf',
  `authorid` int(20) NOT NULL COMMENT '作者表编号',
  `abstract` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '论文摘要',
  `img` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '论文图片',
  `acknowledgement` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '致谢',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `author`(`authorid`) USING BTREE,
  CONSTRAINT `author` FOREIGN KEY (`authorid`) REFERENCES `author` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '论文表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of publication
-- ----------------------------
INSERT INTO `publication` VALUES (1, '论苏州园林的意境美', '2019-11-18', '亚洲科学周刊', 'uploads/pdf/论苏州园林的意境美_吴倩.pdf', 1, '论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容', 'uploads/publicationimg/paperimg.png', 'We want to thank Julio Marco for his help with figures, Ibón Guillén for discussions, and the members of the Graphics and Imaging Lab for proofreading. Min H. Kim acknowledges Korea NRF grants (2016R1A2B2013031, 2013M3A6A6073718) and additional support by KOCCA in MCST of Korea, Cross-Ministry Giga KOREA Project (GK17P0200), Samsung Electronics (SRFC-IT1402-02), and an ICT R&D program of MSIT/IITP of Korea (2017-0-00072, 2016-0-00018). Diego Gutierrez and Adrian Jarabo are funded by the European Research Council (ERC) under the European Union’s Horizon 2020 research and innovation program (CHAMELEON project, grant agreement No 682080), DARPA (project REVEAL), and the Spanish Ministerio de Economía y Competitividad (TIN2016-78753-P)');
INSERT INTO `publication` VALUES (2, '第二篇论文', '2019-11-14', '亚洲科学周刊', '', 2, '论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容', 'uploads/publicationimg/paperimg.png', 'We want to thank Julio Marco for his help with figures, Ibón Guillén for discussions, and the members of the Graphics and Imaging Lab for proofreading. Min H. Kim acknowledges Korea NRF grants (2016R1A2B2013031, 2013M3A6A6073718) and additional support by KOCCA in MCST of Korea, Cross-Ministry Giga KOREA Project (GK17P0200), Samsung Electronics (SRFC-IT1402-02), and an ICT R&D program of MSIT/IITP of Korea (2017-0-00072, 2016-0-00018). Diego Gutierrez and Adrian Jarabo are funded by the European Research Council (ERC) under the European Union’s Horizon 2020 research and innovation program (CHAMELEON project, grant agreement No 682080), DARPA (project REVEAL), and the Spanish Ministerio de Economía y Competitividad (TIN2016-78753-P)');
INSERT INTO `publication` VALUES (3, '简析苏州园林之美', '2019-11-20', '中国某植物学周刊', 'uploads/pdf/简析苏州园林之美_成婧欢.pdf', 3, '论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容论文内容', 'uploads/publicationimg/paperimg.png', 'We want to thank Julio Marco for his help with figures, Ibón Guillén for discussions, and the members of the Graphics and Imaging Lab for proofreading. Min H. Kim acknowledges Korea NRF grants (2016R1A2B2013031, 2013M3A6A6073718) and additional support by KOCCA in MCST of Korea, Cross-Ministry Giga KOREA Project (GK17P0200), Samsung Electronics (SRFC-IT1402-02), and an ICT R&D program of MSIT/IITP of Korea (2017-0-00072, 2016-0-00018). Diego Gutierrez and Adrian Jarabo are funded by the European Research Council (ERC) under the European Union’s Horizon 2020 research and innovation program (CHAMELEON project, grant agreement No 682080), DARPA (project REVEAL), and the Spanish Ministerio de Economía y Competitividad (TIN2016-78753-P)');

-- ----------------------------
-- Table structure for staff
-- ----------------------------
DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '人员id、主键自增',
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '人员姓名',
  `Title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '职称',
  `Status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '状态',
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '邮箱',
  `Image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '照片',
  `Profile` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '个人简介',
  `other` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of staff
-- ----------------------------
INSERT INTO `staff` VALUES (1, 'XIAOJIE GUO', 'associate professor', 'wu', 'xj.max.guo@gmail.com', 'uploads/20191206/20191206050019_26759.png', '<p>\r\n	I am now a tenured Associate Professor with the College of Intelligence \r\nand Computing, Tianjin University.  \r\nMy research interest mainly includes Computer Vision, Pattern Recognition, and Machine Learning. \r\n                        Prior to TJU, I spent about 4 fantastic years at SKLOIS, IIE, Chinese Academy of Sciences.\r\n</p>\r\n<p>Our lab has several <font color =\"#EE30A7\" >Ph.D. </font> and <font color =\"#EE30A7\" >Master positions </font>  this year.\r\nWe are seeking passionate and innovative students to work on CV/PR/ML.\r\n</p>', '1');
INSERT INTO `staff` VALUES (2, 'a zhi', 'wu', 'dasi', 'liuzhi@tju.edu.cn', 'wu', 'jkhbuihuihuih', '1');

-- ----------------------------
-- Table structure for staff_project
-- ----------------------------
DROP TABLE IF EXISTS `staff_project`;
CREATE TABLE `staff_project`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '研究项目id、主键、自增',
  `staff_id` int(11) NULL DEFAULT NULL COMMENT '项目所属人员id',
  `time_begin` datetime(0) NULL DEFAULT NULL COMMENT '研究项目申请时间',
  `time_end` datetime(0) NULL DEFAULT NULL COMMENT '研究项目截至时间',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '研究项目名',
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '研究项目所属类别',
  `funds` double(255, 0) NULL DEFAULT NULL COMMENT '研究经费',
  `meaning` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '研究意义',
  `other` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '其他描述',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `project_id`(`staff_id`) USING BTREE,
  CONSTRAINT `project_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of staff_project
-- ----------------------------
INSERT INTO `staff_project` VALUES (1, 1, '2019-11-01 19:12:28', '2019-11-02 19:12:32', '\r\n2018.10-2019.09 \"CCF-Tencent Open Fund\", CCF-Tencent, PI ', NULL, NULL, NULL, NULL);
INSERT INTO `staff_project` VALUES (2, 1, NULL, NULL, '2018.01-2021.12 \"Peiyang Young Scientist Special Grant\", Tianjin University, PI', NULL, NULL, NULL, NULL);
INSERT INTO `staff_project` VALUES (3, 1, NULL, NULL, '2018.10-2019.09 \"CCF-Tencent Open Fund\", CCF-Tencent, PI ', '', NULL, '', '');
INSERT INTO `staff_project` VALUES (4, 1, NULL, NULL, 'IEEE Senior Member, 2019, IEEE.', '', NULL, '', '');

SET FOREIGN_KEY_CHECKS = 1;
