-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-21 18:42:02
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emptrain`
--
set names utf8;
drop database if exists emptrain;
create database emptrain charset=utf8;
use emptrain;
-- --------------------------------------------------------

--
-- 表的结构 `course_classify`
--

CREATE TABLE `course_classify` (
  `clid` int(11) NOT NULL,
  `title` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `course_classify`
--

INSERT INTO `course_classify` (`clid`, `title`) VALUES
(1, '指男针'),
(2, '经济学'),
(3, '交际学'),
(4, '脱单学'),
(5, 'Web前端');

-- --------------------------------------------------------

--
-- 表的结构 `et_course`
--

CREATE TABLE `et_course` (
  `cid` int(11) NOT NULL,
  `cname` varchar(32) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `book` varchar(64) NOT NULL,
  `studytime` varchar(16) DEFAULT NULL,
  `info` varchar(256) DEFAULT NULL,
  `openTime` date DEFAULT NULL,
  `courseImg` varchar(64) DEFAULT NULL,
  `course_classify_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `et_course`
--

INSERT INTO `et_course` (`cid`, `cname`, `teacher_id`, `book`, `studytime`, `info`, `openTime`, `courseImg`, `course_classify_id`) VALUES
(1, '金融圈', 1, '', '32天', '叫你了解完整的金融圈哈哈啊哈啊哈哈哈h', '2017-07-04', NULL, 1),
(2, '金融的行为', 2, '', '36天', '很厉害的课程啊很厉害的课程哈哈哈哈哈哈啊哈啊哈', '2017-07-12', NULL, 1),
(3, '金融打杂全', 1, '', '234天', '很厉害的课程啊真的啊啊啊啊啊哈哈哈哈哈哈', '2017-07-19', NULL, 1),
(4, '经济的力量', 3, '', '13天', '啥地方啥地方沙发sad阿萨德发 啥地方哈哈哈啊哈啊哈哈', '2017-07-31', NULL, 2),
(5, '经济原理', 4, '', '34天', '阿斯蒂芬梵蒂冈地方发哈哈哈啊哈哈哈哈哈', '2017-07-18', NULL, 2),
(6, '经济社会', 5, '', '324天', '山东钢铁和刚回家根据对方过后个个哈哈哈啊哈啊哈哈哈哈', '2017-07-25', NULL, 3),
(7, '朋友圈', 5, '', '34天', '沙发第三方返回经济广告费的', '2017-07-31', '../img/courseImg/1.jpg', 3),
(8, '交际的魅力', 4, '', '34天', '啥地方收到啥地方啥地方', '2017-07-26', '../img/courseImg/2.jpg', 3),
(9, '交情很重要', 3, '', '543天', '是发沙发', '2017-07-26', '../img/courseImg/3.jpg', 3),
(10, '如何快速脱单', 1, '《7天谈恋爱速成》', '7天', '你还在为没有女盆友男朋友着急吗？你还在为过年回家带不回另一半而担心吗？来报这门课，这些问题统统不是问题。', '2017-07-11', '../img/courseImg/4.jpg', 4),
(11, '恋爱大法', 1, '《恋爱100天》', '100天', '这门课啊是教你谈恋爱啊谈恋爱啊谈恋爱啊谈恋爱啊。凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数。（测试用）', '2017-07-04', '../img/courseImg/5.jpg', 4),
(12, '初恋是什么', 1, '《如何快速摆脱初恋》', '1天', '摆脱初恋的阴影啊阴影阴影啊。凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数。', '2017-07-19', NULL, 4),
(13, '测试课程1', 1, '凑凑字数', '1天', '凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数', '2017-07-03', NULL, 4),
(14, '测试课程2', 4, '凑凑字数', '3天', '凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数', '2017-07-25', NULL, 4),
(15, '测试课程3', 1, '凑凑字数', '1年', '凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数', '2017-07-03', NULL, 4),
(16, '测试课程4', 1, '凑凑字数', '100年', '凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数', '2017-07-18', NULL, 4),
(17, '测试课程5', 1, '凑凑字数', '1000年', '凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数凑凑字数', '2017-07-25', NULL, 4),
(18, '数据库', 1, '《MySQL大法》', '7天', '完整的数据库课程，走向成功，走向辉煌。哈哈哈哈！我要仰天长啸。还有谁还有谁，就问还有谁？', '2017-07-06', NULL, 5),
(19, 'PHP大法', 1, '《3天速成PHP》', '3天', '完美的PHP课程，走向成功，走向辉煌。哈哈哈哈！我要仰天长啸。还有谁还有谁，就问还有谁？', '2017-07-17', NULL, 5),
(20, 'JavaScript大法', 1, '《JavaScript10天速成》', '10天', '完没得JavaScript课程，走向成功，走向辉煌。哈哈哈哈！我要仰天长啸。还有谁还有谁，就问还有谁？', '2017-07-04', NULL, 5),
(21, 'HTML大法', 1, '《HTML3天速成》', '3天', '完美的HTML课程，走向成功，走向辉煌。哈哈哈哈！我要仰天长啸。还有谁还有谁，就问还有谁？', '2017-07-03', NULL, 5),
(22, 'CSS大法', 1, '《CSS5天速成》', '5天', '完美的CSS课程，走向成功，走向辉煌。哈哈哈哈！我要仰天长啸。还有谁还有谁，就问还有谁？', '2017-07-27', NULL, 5),
(23, '前端UI大法', 1, '《前端UI11天速成》', '11天', '完美的前端UI课程，走向成功，走向辉煌。哈哈哈哈！我要仰天长啸。还有谁还有谁，就问还有谁？', '2017-07-25', NULL, 5),
(24, '代码优化大法', 1, '《我只想安静的写代码》', '10年', '完美的代码课程，走向成功，走向辉煌。哈哈哈哈！我要仰天长啸。还有谁还有谁，就问还有谁？', '2017-07-25', NULL, 5),
(25, '夏武没女票', 1, '《夏武为什么没女朋友》', '10000年', '夏武注定孤独终老', '2017-07-24', NULL, 5);

-- --------------------------------------------------------

--
-- 表的结构 `et_dept`
--

CREATE TABLE `et_dept` (
  `did` int(11) NOT NULL,
  `dname` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `et_product`
--

CREATE TABLE `et_product` (
  `proid` int(11) NOT NULL,
  `title` varchar(64) DEFAULT NULL,
  `img` varchar(128) DEFAULT NULL,
  `info` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `et_teacher`
--

CREATE TABLE `et_teacher` (
  `eid` int(11) NOT NULL,
  `tname` varchar(32) NOT NULL,
  `tpwd` varchar(32) NOT NULL,
  `teacher_name` varchar(32) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `gender` varchar(3) DEFAULT NULL,
  `avatar` varchar(128) DEFAULT NULL,
  `info` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `et_teacher`
--

INSERT INTO `et_teacher` (`eid`, `tname`, `tpwd`, `teacher_name`, `phone`, `email`, `gender`, `avatar`, `info`) VALUES
(1, '1234', '1234', '婷婷', '341515313', '32132123@qq.com', '女', '../img/avatar/1.jpg', '很厉害啊很厉害。该名老师的课最多。后面的添加的课程测试数据全是她的课。（仅测试）'),
(2, '1', '1', '李煜', '64564', '53415641', '男', '../img/avatar/2.jpg', '尽快哈的空间和客户阿卡精神卡号发啊回复'),
(3, '12', '12', '张宇', '414156165', '3135153', '女', '../img/avatar/3.jpg', '卡号发空间啊好看撒娇带你飞会计师带你飞空间和'),
(4, '123', '123', '小玉', '32165156', '5165165165', '女', '../img/avatar/4.jpg', '啊抠脚大汉比较快啊啊阿飞你'),
(5, '12345', '12345', '小姐姐', '34165', '321351', '女', '../img/avatar/5.png', '客户可就是你卡活动立刻就会');

-- --------------------------------------------------------

--
-- 表的结构 `et_train`
--

CREATE TABLE `et_train` (
  `tid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `other` varchar(128) DEFAULT NULL,
  `exam_date` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `et_train`
--

INSERT INTO `et_train` (`tid`, `user_id`, `course_id`, `grade`, `other`, `exam_date`) VALUES
(6, 1, 1, 99, '很棒棒', '2017-07-13'),
(9, 4, 9, NULL, NULL, NULL),
(10, 4, 1, 34, '很好好', '2017-07-05'),
(11, 4, 2, NULL, NULL, NULL),
(12, 4, 3, 35, '很好的孩子', '2017-07-03'),
(14, 1, 6, 100, '极为优秀，很棒很ok', '2017-11-08'),
(16, 1, 7, NULL, NULL, NULL),
(17, 5, 9, NULL, NULL, NULL),
(18, 5, 1, NULL, NULL, NULL),
(19, 5, 7, 59, '该生态度极差，不适合学习，应该回去放牛', '2017-07-11'),
(20, 5, 5, NULL, NULL, NULL),
(21, 5, 2, NULL, NULL, NULL),
(22, 5, 3, NULL, NULL, NULL),
(23, 5, 4, NULL, NULL, NULL),
(24, 6, 9, NULL, NULL, NULL),
(26, 6, 6, 100, '是', ''),
(27, 6, 8, NULL, NULL, NULL),
(28, 6, 4, NULL, NULL, NULL),
(29, 6, 1, NULL, NULL, NULL),
(30, 6, 12, NULL, NULL, NULL),
(31, 6, 14, NULL, NULL, NULL),
(32, 1, 18, NULL, NULL, NULL),
(33, 1, 24, NULL, NULL, NULL),
(34, 1, 23, NULL, NULL, NULL),
(35, 1, 22, NULL, NULL, NULL),
(36, 1, 14, NULL, NULL, NULL),
(37, 1, 21, NULL, NULL, NULL),
(38, 1, 12, NULL, NULL, NULL),
(39, 1, 11, NULL, NULL, NULL),
(40, 7, 24, 99, '问问', '2017-07-13');

-- --------------------------------------------------------

--
-- 表的结构 `et_user`
--

CREATE TABLE `et_user` (
  `uid` int(11) NOT NULL,
  `user_name` varchar(16) DEFAULT NULL,
  `upwd` varchar(32) DEFAULT NULL,
  `jobnum` varchar(32) NOT NULL,
  `IDcard` varchar(32) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `clid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `et_user`
--

INSERT INTO `et_user` (`uid`, `user_name`, `upwd`, `jobnum`, `IDcard`, `phone`, `email`, `dept_id`, `clid`) VALUES
(1, '丁稳', '1234', '1234', '654564654564564645', '17620306826', '920249218@qq.com', NULL, NULL),
(2, NULL, '258', '852', NULL, '123456789', NULL, NULL, NULL),
(3, NULL, '6665', '76', NULL, '655555', NULL, NULL, NULL),
(4, '翠花', '123456', '123456', '2342342342323', '214312123123', '324122143', NULL, NULL),
(5, '夏武', '11111', '11111', '·456321199582521111', '15826584575', '920249218@qq.com', NULL, NULL),
(6, '骆俊', '8888', '8888', '465465416', '6546654654', '6546541654', NULL, NULL),
(7, '王尼玛', '8888', '9999', '567486465465465', '6541564564', '65465456', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_classify`
--
ALTER TABLE `course_classify`
  ADD PRIMARY KEY (`clid`);

--
-- Indexes for table `et_course`
--
ALTER TABLE `et_course`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `course_classify_id` (`course_classify_id`);

--
-- Indexes for table `et_dept`
--
ALTER TABLE `et_dept`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `et_product`
--
ALTER TABLE `et_product`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `et_teacher`
--
ALTER TABLE `et_teacher`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `tname` (`tname`);

--
-- Indexes for table `et_train`
--
ALTER TABLE `et_train`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `et_user`
--
ALTER TABLE `et_user`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `clid` (`clid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `course_classify`
--
ALTER TABLE `course_classify`
  MODIFY `clid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `et_course`
--
ALTER TABLE `et_course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- 使用表AUTO_INCREMENT `et_dept`
--
ALTER TABLE `et_dept`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `et_product`
--
ALTER TABLE `et_product`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `et_teacher`
--
ALTER TABLE `et_teacher`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `et_train`
--
ALTER TABLE `et_train`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- 使用表AUTO_INCREMENT `et_user`
--
ALTER TABLE `et_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 限制导出的表
--

--
-- 限制表 `et_course`
--
ALTER TABLE `et_course`
  ADD CONSTRAINT `et_course_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `et_teacher` (`eid`),
  ADD CONSTRAINT `et_course_ibfk_2` FOREIGN KEY (`course_classify_id`) REFERENCES `course_classify` (`clid`);

--
-- 限制表 `et_train`
--
ALTER TABLE `et_train`
  ADD CONSTRAINT `et_train_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `et_user` (`uid`),
  ADD CONSTRAINT `et_train_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `et_course` (`cid`);

--
-- 限制表 `et_user`
--
ALTER TABLE `et_user`
  ADD CONSTRAINT `et_user_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `et_dept` (`did`),
  ADD CONSTRAINT `et_user_ibfk_2` FOREIGN KEY (`clid`) REFERENCES `course_classify` (`clid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
