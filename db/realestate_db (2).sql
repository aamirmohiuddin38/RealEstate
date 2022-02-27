-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 06:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) UNSIGNED NOT NULL,
  `phrase` text NOT NULL,
  `english` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `phrase`, `english`) VALUES
(19, 'email', 'Email Address'),
(20, 'password', 'Password'),
(21, 'login', 'Log In'),
(22, 'incorrect_email_password', 'Incorrect Email/Password!'),
(23, 'user_role', 'User Role'),
(24, 'please_login', 'Please Log In'),
(25, 'settings', 'Settings'),
(26, 'profile', 'Profile'),
(27, 'logout', 'Log Out'),
(28, 'please_try_again', 'Please Try Again'),
(29, 'admin', 'Admin'),
(32, 'dashboard', 'Dashboard'),
(50, 'language_setting', 'Language Setting'),
(56, 'report', 'Report'),
(59, 'website', 'Website'),
(63, 'comments', 'Comment'),
(68, 'description', 'Description'),
(69, 'status', 'Status'),
(70, 'active', 'Active'),
(71, 'inactive', 'Inactive'),
(72, 'cancel', 'Cancel'),
(73, 'save', 'Save'),
(75, 'serial', 'SL.NO'),
(76, 'action', 'Action'),
(77, 'edit', 'Edit '),
(78, 'delete', 'Delete'),
(79, 'save_successfully', 'Save Successfully!'),
(80, 'update_successfully', 'Update Successfully!'),
(82, 'delete_successfully', 'Delete successfully!'),
(83, 'are_you_sure', 'Are You Sure'),
(84, 'first_name', 'First Name'),
(85, 'last_name', 'Last Name'),
(86, 'phone', 'Phone No'),
(87, 'mobile', 'Mobile No'),
(89, 'sex', 'Gender'),
(90, 'date_of_birth', 'Date of Birth'),
(91, 'address', 'Address'),
(92, 'invalid_picture', 'Invalid Picture'),
(94, 'edit_profile', 'Edit Profile'),
(100, 'picture', 'Picture'),
(102, 'male', 'Male'),
(103, 'female', 'Female'),
(105, 'create_date', 'Create Date'),
(106, 'view', 'View'),
(108, 'update_date', 'Update Date'),
(109, 'print', 'Print'),
(113, 'other', 'Other'),
(115, 'age', 'Age'),
(117, 'id_no', 'ID No.'),
(118, 'select_option', 'Select Option'),
(120, 'day', 'Day'),
(121, 'start_time', 'Start Time'),
(122, 'end_time', 'End Time'),
(126, 'timestamp', 'Timestamp'),
(127, 'available_days', 'Available Days'),
(129, 'available_time', 'Available Time'),
(130, 'serial_no', 'Serial No'),
(133, 'you_are_already_registered', 'You Are Already Registered'),
(135, 'invalid_input', 'Invalid Input'),
(140, 'please_fillup_all_required_fields', 'Please fillup all required filelds'),
(144, 'full_name', 'Full Name'),
(145, 'read_unread', 'Read / Unread'),
(146, 'date', 'Date'),
(147, 'ip_address', 'IP Address'),
(148, 'user_agent', 'User Agent'),
(153, 'filter', 'Filter'),
(157, 'favicon', 'Favicon'),
(158, 'logo', 'Logo'),
(159, 'footer_text', 'Footer Text'),
(160, 'language', 'Language'),
(167, 'type', 'Type'),
(168, 'website_title', 'Website Title'),
(169, 'invalid_logo', 'Invalid Logo'),
(170, 'details', 'Details'),
(171, 'website_setting', 'Website Setting'),
(172, 'submit_successfully', 'Submit Successfully!'),
(173, 'application_setting', 'Application Setting'),
(174, 'invalid_favicon', 'Invalid Favicon'),
(176, 'information', 'Information'),
(177, 'home', 'Home'),
(182, 'thank_you_for_your_comment', 'Thank you for your comment!'),
(183, 'comment_id', 'Comment ID'),
(184, 'comment_status', 'Comment Status'),
(185, 'comment_added_successfully', 'Comment Added Successfully'),
(186, 'comment_remove_successfully', 'Comment Remove Successfully'),
(191, 'position', 'Position'),
(192, 'invalid_icon_image', 'Invalid Icon Image!'),
(193, 'about', 'About'),
(195, 'service', 'Service'),
(197, 'registration_successfully', 'Registration Successfully'),
(200, 'invalid_featured_image', 'Invalid Featured Image!'),
(203, 'twitter_api', 'Twitter Api'),
(204, 'google_map', 'Google Map'),
(205, 'copyright_text', 'Copyright Text'),
(206, 'facebook_url', 'Facebook URL'),
(207, 'twitter_url', 'Twitter URL'),
(208, 'vimeo_url', 'Vimeo URL'),
(209, 'instagram_url', 'Instagram Url'),
(210, 'dribbble_url', 'Dribbble URL'),
(211, 'skype_url', 'Skype URL'),
(215, 'invalid_image', 'Invalid Image'),
(216, 'image_is_required', 'Image is required'),
(218, 'meta_keyword', 'Meta Keyword'),
(219, 'year', 'Year'),
(220, 'month', 'Month'),
(222, 'leave_a_comment', 'Leave a Comment'),
(223, 'submit', 'Submit'),
(224, 'google_plus_url', 'Google Plus URL'),
(232, 'icon_image', 'Icon Image'),
(234, 'add_to_website', 'Add to Website'),
(235, 'read_more', 'Read More'),
(238, 'contact', 'Contact'),
(239, 'optional', 'Optional'),
(240, 'customer_comments', 'Customer Comments'),
(247, 'select_user_role', 'Select User Role'),
(248, 'site_align', 'Website Align'),
(249, 'right_to_left', 'Right to Left'),
(250, 'left_to_right', 'Left to Right'),
(252, 'add_invoice', 'Add Invoice'),
(253, 'invoice_list', 'Invoice List'),
(254, 'account_list', 'Account List'),
(255, 'add_account', 'Add Account'),
(256, 'account_name', 'Account Name'),
(259, 'account_edit', 'Account Edit'),
(261, 'price', 'Price'),
(262, 'total', 'Total'),
(263, 'remove', 'Remove'),
(264, 'add', 'Add'),
(265, 'subtotal', 'Sub Total'),
(266, 'vat', 'Vat'),
(267, 'grand_total', 'Grand Total'),
(268, 'discount', 'Discount'),
(269, 'paid', 'Paid'),
(270, 'due', 'Due'),
(271, 'reset', 'Reset'),
(272, 'add_or_remove', 'Add / Remove'),
(273, 'invoice', 'Invoice'),
(274, 'invoice_information', 'Invoice Information'),
(275, 'invoice_edit', 'Invoice Edit'),
(276, 'update', 'Update'),
(277, 'all', 'All'),
(282, 'payment_list', 'Payment List'),
(283, 'add_payment', 'Add Payment'),
(284, 'payment_edit', 'Payment Edit'),
(285, 'pay_to', 'Pay To'),
(286, 'amount', 'Amount'),
(302, 'allocated', 'Allocated'),
(303, 'free_now', 'Free'),
(304, 'select_only_avaiable_days', 'Select Only Avaiable Days'),
(308, 'user_type', 'User Type'),
(320, 'noticeboard', 'Noticeboard'),
(321, 'notice_list', 'Notice List'),
(322, 'add_notice', 'Add Notice'),
(336, 'category_name', 'Category Name'),
(343, 'messages', 'Messages'),
(344, 'inbox', 'Inbox'),
(345, 'sent', 'Sent'),
(346, 'new_message', 'New Message'),
(347, 'sender', 'Sender Name'),
(349, 'message', 'Message'),
(350, 'subject', 'Subject'),
(351, 'receiver_name', 'Send To'),
(352, 'select_user', 'Select User'),
(353, 'message_sent', 'Messages Sent'),
(354, 'mail', 'Mail'),
(355, 'send_mail', 'Send Mail'),
(356, 'mail_setting', 'Mail Setting'),
(357, 'protocol', 'Protocol'),
(358, 'mailpath', 'Mail Path'),
(359, 'mailtype', 'Mail Type'),
(360, 'validate_email', 'Validate Email Address'),
(361, 'TRUE', 'TRUE'),
(362, 'FALSE', 'FALSE'),
(363, 'attach_file', 'Attach File'),
(365, 'send', 'Send'),
(366, 'upload_successfully', 'Upload Successfully!'),
(367, 'app_setting', 'App Setting'),
(379, 'add_document', 'Add Document'),
(380, 'upload_by', 'Upload By'),
(400, 'others', 'Others'),
(412, 'days', 'Days'),
(415, 'old', 'Old'),
(416, 'new', 'New'),
(423, 'name', 'Name'),
(432, 'balance', 'Balance'),
(433, 'account', 'Account'),
(446, 'sale', 'Sale'),
(447, 'purchase', 'Purchase'),
(448, 'cash', 'Cash'),
(449, 'cashType', 'Cash/Credit'),
(453, 'purchase_list', 'Purchase List'),
(454, 'addPurchase', 'Add Purchase'),
(455, 'add_supplier', 'Add Supplier'),
(456, 'list_supplier', 'Supplier List'),
(457, 'list_sale', 'Sale List'),
(468, 'picture_manager', 'Picture Manager'),
(469, 'picture_list', 'Picture List'),
(470, 'add_picture', 'Add Picture'),
(472, 'thumbnail', 'Thumbnail'),
(473, 'picture_information', 'Picture Information'),
(616, 'total_clients', 'Total Clients'),
(617, 'application_title', 'Application Title'),
(622, 'unique_id', 'Unique ID'),
(623, 'username', 'Username'),
(624, 'open_google_map', 'Open Google Map'),
(625, 'location', 'Location'),
(626, 'firstname', 'First Name'),
(627, 'lastname', 'Last Name'),
(628, 'latitude', 'Latitude'),
(629, 'longitude', 'Longitude'),
(634, 'search', 'Search'),
(636, 'rating', 'Rating'),
(637, 'view_clients', 'View Clients'),
(638, 'clients', 'Clients'),
(639, 'list_client', 'List Client'),
(640, 'user_info', 'User Information'),
(641, 'bookings', 'Bookings'),
(642, 'paid', 'Paid'),
(643, 'notpaid', 'Not Paid'),
(644, 'token_no', 'Token No'),
(655, 'symbol', 'Symbol'),
(659, 'color', 'Color'),
(661, 'view_booking', 'View Booking'),
(662, 'booking_report', 'Booking Report'),
(663, 'search_booking', 'Search Booking'),
(665, 'end_date', 'End Date'),
(666, 'owner_name', 'Owner Name'),
(667, 'turn', 'Turn'),
(668, 'booking_report', 'Booking Report'),
(669, 'start_date', 'Start Date'),
(670, 'country', 'Country'),
(671, 'state', 'State'),
(672, 'city', 'City'),
(673, 'time', 'Time'),
(674, 'otp', 'OTP'),
(675, 'select_time_slot', 'Select Time Slot'),
(676, 'select_type', 'Select Type'),
(677, 'add_feature', 'Add Feature'),
(678, 'property_feature', 'Property Feature'),
(679, 'add_view_feature', 'Add View Feature'),
(680, 'feature_list', 'Feature List'),
(681, 'feature_name', 'Feature Name'),
(682, 'unit_name', 'Unit Name'),
(683, 'add_view_unit', 'Add/View Unit'),
(684, 'add_unit', 'Add Unit'),
(685, 'unit_list', 'Unit List'),
(686, 'unit_code', 'Unit Code'),
(687, 'property_unit', 'Property Unit'),
(688, 'property_dimension', 'Property Dimension'),
(689, 'add_view_dimension', 'Add/View Dimension'),
(690, 'property', 'Property'),
(691, 'add_property', 'Add Property'),
(692, 'property_list', 'Property List'),
(693, 'edit_property', 'Edit Property'),
(694, 'property_title', 'Property Title'),
(695, 'content', 'Content'),
(696, 'label', 'Label'),
(697, 'select_property_type', 'Select Property Type'),
(698, 'select_property_status', 'Select Property Status'),
(699, 'bedrooms', 'Bedrooms'),
(700, 'bathrooms', 'Bathrooms'),
(701, 'area_size', 'Area Size'),
(702, 'size_postfix', 'Size Postfix'),
(703, 'land_area', 'Land Area'),
(704, 'land_area_postfix', 'Land Area Postfix'),
(705, 'garages', 'Garages'),
(706, 'garage_size', 'Garage Size'),
(707, 'year_built', 'Year Built'),
(708, 'title', 'Title'),
(709, 'value', 'Value'),
(710, 'sale_or_rent_price', 'Sale or Rent Price'),
(711, 'price_prefix', 'Price Prefix'),
(712, 'area', 'Area'),
(713, 'postal_code', 'Postal Code'),
(714, 'plan_title', 'Plan Title'),
(715, 'plan_bedrooms', 'Plan Bedrooms'),
(716, 'plan_bathrooms', 'Plan Bathrooms'),
(717, 'other_details', 'Other Details'),
(718, 'add_view_status', 'Add/View Status'),
(719, 'add_status', 'Add Status'),
(720, 'status_list', 'Status List'),
(721, 'add_view_type', 'Add/View Type'),
(722, 'add_view_label', 'Add/View Label'),
(723, 'add_new_lanaguage', 'Add New Lanaguage'),
(724, 'lanaguage_name', 'Lanaguage Name'),
(725, 'are_you_sure', 'Are You Sure'),
(726, 'add_type', 'Add Type'),
(727, 'type_list', 'Type List'),
(728, 'add_label', 'Add Label'),
(729, 'label_list', 'Label List'),
(730, 'properties', 'Properties'),
(731, 'search_property', 'Search Property'),
(732, 'front_facing', 'Front Facing'),
(733, 'total_properties', 'Total Properties'),
(734, 'total_unsold_properties', 'Total Unsold Properties'),
(735, 'view_property', 'View Property'),
(736, 'property_docs', 'Property Documents'),
(737, 'search_document', 'Search Document'),
(738, 'documents', 'Documents'),
(739, 'upload', 'Upload'),
(740, 'add_image', 'Add Image'),
(741, 'images', 'Images'),
(742, 'id', 'ID'),
(743, 'property_imgs', 'Property Images');

-- --------------------------------------------------------

--
-- Table structure for table `property_tbl`
--

CREATE TABLE `property_tbl` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(300) NOT NULL,
  `p_content` text NOT NULL,
  `p_type` varchar(50) NOT NULL,
  `p_label` varchar(50) NOT NULL,
  `p_status` varchar(50) NOT NULL,
  `p_bathrooms` int(11) NOT NULL,
  `p_bedrooms` int(11) NOT NULL,
  `p_area` int(11) NOT NULL,
  `p_area_unit` varchar(10) NOT NULL,
  `p_land` int(11) NOT NULL,
  `p_land_unit` varchar(10) NOT NULL,
  `p_garage` int(11) NOT NULL,
  `p_garages_unit` varchar(10) NOT NULL,
  `p_year` int(11) NOT NULL,
  `p_price` decimal(10,0) NOT NULL,
  `p_private_note` text NOT NULL,
  `p_featured` tinyint(1) NOT NULL,
  `p_published` tinyint(1) NOT NULL,
  `p_doc` timestamp NOT NULL DEFAULT current_timestamp(),
  `p_dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_tbl`
--

INSERT INTO `property_tbl` (`p_id`, `p_title`, `p_content`, `p_type`, `p_label`, `p_status`, `p_bathrooms`, `p_bedrooms`, `p_area`, `p_area_unit`, `p_land`, `p_land_unit`, `p_garage`, `p_garages_unit`, `p_year`, `p_price`, `p_private_note`, `p_featured`, `p_published`, `p_doc`, `p_dou`) VALUES
(1, 'New property', 'Content', '3', '4', '6', 1, 1, 200, 'Sqft', 200, 'Sqft', 1, '100 Sqft', 2019, '1560000', 'Write private note for this property, it will not display for public.', 0, 0, '2022-02-12 17:18:11', '0000-00-00 00:00:00'),
(3, 'New House ', 'This is just demo content', '3', '4', '7', 1, 1, 200, 'Sqft', 200, 'Sqft', 0, '', 2021, '1200000', 'sdsadsadsadsadas', 1, 1, '2022-02-19 17:04:31', '0000-00-00 00:00:00'),
(4, 'New property 1', 'This is just demo content', '3', '4', '7', 1, 1, 200, 'Sqft', 200, 'Sqft', 0, '', 2021, '1200000', 'sdsadsadsadsadas', 1, 1, '2022-02-19 17:04:31', '0000-00-00 00:00:00'),
(5, 'Old Complex at Safapora', 'Old Complex at Safapora', '4', '6', '7', 1, 1, 200, 'Sqft', 250, 'Sqft', 1, '100 Sqft', 2019, '1560000', 'Old Complex at SafaporaOld Complex at SafaporaOld Complex at SafaporaOld Complex at SafaporaOld Complex at SafaporaOld Complex at SafaporaOld Complex at Safapora', 1, 1, '2022-02-19 17:47:52', '0000-00-00 00:00:00'),
(6, 'Old Complex at Safapora', 'Old Complex at Safapora', '4', '6', '7', 1, 1, 200, 'Sqft', 250, 'Sqft', 1, '100 Sqft', 2019, '1560000', 'Old Complex at SafaporaOld Complex at SafaporaOld Complex at SafaporaOld Complex at SafaporaOld Complex at SafaporaOld Complex at SafaporaOld Complex at Safapora', 1, 1, '2022-02-19 17:48:11', '0000-00-00 00:00:00'),
(7, '', '', '', '', '', 0, 0, 0, '', 0, '', 0, '', 0, '0', '', 1, 1, '2022-02-27 04:56:14', '0000-00-00 00:00:00'),
(8, '', '', '', '', '', 0, 0, 0, '', 0, '', 0, '', 0, '0', '', 1, 1, '2022-02-27 04:56:48', '0000-00-00 00:00:00'),
(9, '', '', '', '', '', 0, 0, 0, '', 0, '', 0, '', 0, '0', '', 1, 1, '2022-02-27 04:57:11', '0000-00-00 00:00:00'),
(10, '', '', '', '', '', 0, 0, 0, '', 0, '', 0, '', 0, '0', '', 1, 1, '2022-02-27 04:57:31', '0000-00-00 00:00:00'),
(11, '', '', '', '', '', 0, 0, 0, '', 0, '', 0, '', 0, '0', '', 1, 1, '2022-02-27 04:58:41', '0000-00-00 00:00:00'),
(12, '', '', '', '', '', 0, 0, 0, '', 0, '', 0, '', 0, '0', '', 1, 1, '2022-02-27 04:59:00', '0000-00-00 00:00:00'),
(13, '', '', '', '', '', 0, 0, 0, '', 0, '', 0, '', 0, '0', '', 1, 1, '2022-02-27 04:59:25', '0000-00-00 00:00:00'),
(14, '', '', '', '', '', 0, 0, 0, '', 0, '', 0, '', 0, '0', '', 1, 1, '2022-02-27 04:59:58', '0000-00-00 00:00:00'),
(15, '', '', '', '', '', 0, 0, 0, '', 0, '', 0, '', 0, '0', '', 1, 1, '2022-02-27 05:00:45', '0000-00-00 00:00:00'),
(16, 'New property', 'tetwerwer', '4', '7', '5', 1, 1, 200, 'Sqft', 200, 'Sqft', 0, '0', 2017, '1000000', 'sdfsdfsdfsdfsdfsdfsdfsd', 1, 1, '2022-02-27 05:01:50', '0000-00-00 00:00:00'),
(17, 'dfgdfsgdsg', 'fdgsdfgg', '4', '', '', 0, 0, 0, '', 0, '', 0, '', 0, '0', '', 1, 1, '2022-02-27 05:05:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `favicon` varchar(100) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `site_align` varchar(50) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`setting_id`, `title`, `description`, `email`, `phone`, `logo`, `favicon`, `language`, `site_align`, `footer_text`) VALUES
(1, 'Check My Property', 'Bagi Mehtab Srinagar', 'hyunkunun@gmail.com', '7006382025', 'uploads/logo/mainlogo.png', 'uploads/site/logo/2021-08-30/favicon.png', 'english', NULL, '©2021 HYUN KUNUN');

-- --------------------------------------------------------

--
-- Table structure for table `user_role_tbl`
--

CREATE TABLE `user_role_tbl` (
  `ur_id` int(11) NOT NULL COMMENT 'UserRoleId',
  `ur_role` varchar(200) NOT NULL COMMENT 'UserRole',
  `ur_status` int(11) NOT NULL DEFAULT 1 COMMENT 'Status'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role_tbl`
--

INSERT INTO `user_role_tbl` (`ur_id`, `ur_role`, `ur_status`) VALUES
(1, 'admin', 1),
(2, 'agent', 0),
(3, 'client', 0),
(4, 'agency', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `unique_id` varchar(30) NOT NULL,
  `user_role` int(11) NOT NULL COMMENT '1= Admin 2= Cleaner 3= Client',
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(300) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `picture` varchar(50) NOT NULL,
  `user_approved` int(11) NOT NULL,
  `otp` int(11) DEFAULT NULL,
  `doc` datetime NOT NULL DEFAULT current_timestamp(),
  `dou` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `unique_id`, `user_role`, `firstname`, `lastname`, `username`, `password`, `email`, `mobile`, `address`, `country`, `state`, `city`, `picture`, `user_approved`, `otp`, `doc`, `dou`, `status`) VALUES
(1, '1111111', 1, 'Faisal', 'Khan', 'superadmin', '21232f297a57a5a743894a0e4a801fc3', 'admin@hyunkunun.com', '7006382025 ', 'Lamber Lane Lal Chowk', NULL, NULL, NULL, 'uploads/admin/profilepic/2021-09-03/l5.png', 2, NULL, '2021-09-03 23:01:48', '2021-09-24 09:09:22', 1),
(2, '3TBEEFQ', 2, 'Cleaner', 'Worker', 'cleaner1', '85897242d4ec17862047e4eef51897cd', 'cleaner1@sparkcar.com', '9906753478', 'Old market Sopora', 101, 15, 1340, 'uploads/admin/profilepic/2020-10-08/p1.jpg', 2, NULL, '2020-10-04 23:01:48', '2020-10-08 00:00:00', 1),
(3, '5ZQ1XXT', 3, 'Suhail', 'Ahmad', 'suhail', '3cd257ab3cfbf97c950460f2771906d5', 'suhail@gmail.com', '7979451265', NULL, NULL, NULL, NULL, '', 0, 4566, '2021-01-02 22:33:10', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_tbl`
--
ALTER TABLE `property_tbl`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `user_role_tbl`
--
ALTER TABLE `user_role_tbl`
  ADD PRIMARY KEY (`ur_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=744;

--
-- AUTO_INCREMENT for table `property_tbl`
--
ALTER TABLE `property_tbl`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role_tbl`
--
ALTER TABLE `user_role_tbl`
  MODIFY `ur_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'UserRoleId', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
