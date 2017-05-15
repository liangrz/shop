-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2017-05-11 21:17:02
-- 服务器版本： 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(22) NOT NULL COMMENT '管理员名称',
  `admin_password` varchar(32) NOT NULL COMMENT '管理员密码'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `adress`
--

CREATE TABLE `adress` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL COMMENT '关联',
  `is_del` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0未删除 1已删除',
  `address_add` varchar(200) NOT NULL COMMENT '收货地址',
  `code` tinyint(6) NOT NULL COMMENT '邮政编码',
  `tel` int(11) NOT NULL COMMENT '手机号码'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `goods_name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '商品名称',
  `goods_info` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '商品简介',
  `goods_image` varchar(50) NOT NULL COMMENT '商品头图片路径',
  `goods_text` text CHARACTER SET utf8 NOT NULL COMMENT '商品内容详情',
  `goods_text_image` varchar(50) NOT NULL COMMENT '商品内容详情图片',
  `goods_type` int(11) NOT NULL COMMENT '商品种类关联表type.id',
  `goods_prize` float NOT NULL COMMENT '商品单价',
  `goods_sales` int(11) NOT NULL COMMENT '商品销量',
  `goods_sy` int(11) NOT NULL COMMENT '商品库存',
  `admin_id` int(11) NOT NULL COMMENT '关联表admin.id',
  `is_none` tinyint(1) NOT NULL DEFAULT '0' COMMENT '商品下架，默认0不下架，显示所有数据',
  `is_del` tinyint(1) NOT NULL DEFAULT '0' COMMENT '删除商品默认0',
  `goods_time` date NOT NULL COMMENT '商品上架时间'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL COMMENT '关联user.id',
  `is_del` tinyint(1) NOT NULL DEFAULT '0' COMMENT '软删除，0为未删除',
  `order_time` varchar(20) NOT NULL COMMENT '订单创建时间',
  `order_total` float NOT NULL COMMENT '订单总价',
  `order_count` tinyint(4) NOT NULL COMMENT '购买数量',
  `state_no` enum('0','1') NOT NULL COMMENT '0未付款/1已付款',
  `state_send` enum('0','1','2','3') NOT NULL DEFAULT '0' COMMENT '0未发货/1已发货/2未确认收货/3确认收货',
  `state_open` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0交易未完成/1交易完成',
  `order_ms` text CHARACTER SET utf8 NOT NULL COMMENT '订单描述',
  `goods_id` int(11) NOT NULL COMMENT '关联goods'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `pinglun`
--

CREATE TABLE `pinglun` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL COMMENT '关联goods.id',
  `uid` int(11) NOT NULL COMMENT '关联user.id',
  `pl_text` text NOT NULL COMMENT '评论内容',
  `pingjia` enum('0','1','2') NOT NULL DEFAULT '2' COMMENT '2为好评，1中评，0差评',
  `create_time` datetime NOT NULL,
  `pinglun_image` varchar(50) NOT NULL COMMENT '评论图片路径'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '类别名称'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `user_name` varchar(11) NOT NULL COMMENT '用户名',
  `user_password` char(32) NOT NULL COMMENT '用户密码',
  `user_naickname` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '用户昵称',
  `user_email` char(20) NOT NULL COMMENT '用户邮箱',
  `id` int(11) NOT NULL COMMENT '关联',
  `is_del` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0为不删除，1为删除'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinglun`
--
ALTER TABLE `pinglun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `adress`
--
ALTER TABLE `adress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pinglun`
--
ALTER TABLE `pinglun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '关联';