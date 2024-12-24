-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2024 at 07:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_properties`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'essential_admin', 21, '2024-07-10 23:13:41', '2024-07-10 23:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `business_ID` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `user_id`, `business_ID`, `business_name`, `created_at`, `updated_at`) VALUES
(1, 23, 'Jolayemi123', 'Jolayemi Stores Limited', '2024-08-01 06:48:59', '2024-08-01 06:48:59'),
(2, 24, 'Kalu Nkuku', 'Kalu Global Properties', '2024-08-01 06:52:13', '2024-08-01 06:52:13'),
(3, 43, 'GTF1234', 'Ogbev Global Ltd.', '2024-08-21 14:32:24', '2024-08-21 14:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `auctions`
--

CREATE TABLE `auctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `starting_price` decimal(15,2) NOT NULL,
  `denomination` text NOT NULL,
  `append` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Ongoing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auctions`
--

INSERT INTO `auctions` (`id`, `property_id`, `start_date`, `start_time`, `end_date`, `end_time`, `starting_price`, `denomination`, `append`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-09-25', '22:08', '2024-10-29', '22:08', 2000000.00, '₦', 'Monthly', 'Ongoing', '2024-05-29 19:25:51', '2024-05-29 19:25:51'),
(2, 3, '2024-05-02', '23:08', '2024-05-18', '10:09', 25900000.00, '₦', 'Monthly', 'Ongoing', '2024-05-29 20:11:20', '2024-05-29 20:11:20'),
(4, 5, '2024-08-01', '13:35', '2024-12-26', '17:35', 12000000.00, '₦', 'Annually', 'Ongoing', '2024-06-22 10:40:27', '2024-12-24 11:15:27'),
(75, 2, '2024-05-24', '08:46:38', '2024-07-28', '18:29:13', 354233797.08, '₦', 'Annually', 'Ongoing', '2024-08-10 06:29:22', '2024-07-15 03:36:58'),
(76, 27, '2024-06-21', '00:26:28', '2024-07-09', '11:05:11', 6510203.23, '$', 'Monthly', 'Ongoing', '2024-08-14 16:51:43', '2024-07-22 17:25:32'),
(77, 35, '2024-07-12', '17:13:50', '2024-07-19', '06:45:36', 5000000.00, '$', 'Annually', 'Ongoing', '2024-07-07 12:02:42', '2024-06-30 10:41:16'),
(78, 26, '2024-06-27', '16:48:51', '2024-08-26', '10:49:18', 5000000.00, '₦', 'Monthly', 'Ongoing', '2024-08-23 04:22:41', '2024-09-23 19:38:38'),
(79, 34, '2024-06-12', '16:56:54', '2024-07-05', '13:26:56', 5000000.00, '$', 'Monthly', 'Ongoing', '2024-09-22 12:51:15', '2024-08-23 08:22:48'),
(80, 29, '2024-05-26', '09:15:06', '2024-07-05', '22:51:23', 50466633.57, '$', 'Monthly', 'Ongoing', '2024-07-23 05:38:29', '2024-07-29 07:26:22'),
(81, 31, '2024-06-20', '15:49:45', '2024-08-30', '14:17:48', 5000000.00, '$', 'Annually', 'Ongoing', '2024-08-05 23:48:16', '2024-07-19 00:27:09'),
(82, 30, '2024-05-28', '00:10:52', '2024-09-22', '23:37:19', 74829226.58, '$', 'Monthly', 'Ongoing', '2024-08-06 21:16:38', '2024-07-10 13:13:06'),
(83, 32, '2024-09-31', '04:44:40', '2024-12-02', '09:42:48', 5000000.00, '$', 'Annually', 'Ongoing', '2024-09-22 00:44:30', '2024-09-18 11:16:26'),
(84, 28, '2024-12-18', '05:49:55', '2024-12-31', '03:29:08', 5000000.00, '₦', 'Monthly', 'Ended', '2024-09-02 12:03:37', '2024-12-24 11:14:17'),
(85, 38, '2024-11-22', '22:40', '2024-12-21', '00:00', 5000000.00, '₦', 'Monthly', 'Ongoing', '2024-08-22 19:45:25', '2024-08-22 19:45:25'),
(86, 33, '', '', '', '', 0.00, '', '', 'Ongoing', NULL, NULL),
(87, 33, '2024-08-22', ' 20:31:44', '2024-10-22', ' 20:31:44', 4000000.00, '₦', 'Monthly', 'Ongoing', NULL, NULL),
(88, 40, '2024-08-06', '16:35', '2024-10-16', '13:58', 4000000.00, '₦', 'Monthly', 'Ongoing', '2024-08-27 14:42:16', '2024-08-27 14:42:16'),
(89, 41, '2008-06-02', '23:35:13', '2021-05-22', '08:01:29', 899931.00, '₦', 'Annually', 'Ongoing', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(90, 42, '1991-05-04', '09:31:03', '1975-12-17', '20:50:18', 204825.00, '₦', 'Annually', 'Ongoing', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(91, 43, '2000-02-13', '01:24:08', '2009-09-17', '16:56:16', 646973.00, '₦', 'Monthly', 'Ongoing', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(92, 44, '1996-03-27', '00:09:36', '1997-04-13', '15:00:52', 193457.00, '₦', 'Annually', 'Ongoing', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(93, 61, '1991-09-13', '08:27:29', '2006-10-18', '10:59:19', 602699.00, '₦', 'Monthly', 'Ongoing', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(94, 62, '1998-10-05', '05:42:29', '2003-12-02', '02:31:06', 390779.00, '₦', 'Annually', 'Ongoing', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(95, 63, '1974-09-12', '20:38:37', '2016-10-02', '17:29:06', 934191.00, '₦', 'Monthly', 'Ongoing', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(96, 64, '2023-06-16', '08:57:12', '1994-01-18', '12:46:13', 243704.00, '₦', 'Annually', 'Ongoing', '2024-12-23 09:22:31', '2024-12-23 09:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `auction_bids`
--

CREATE TABLE `auction_bids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auction_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bid_amount` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auction_bids`
--

INSERT INTO `auction_bids` (`id`, `auction_id`, `user_id`, `bid_amount`, `created_at`, `updated_at`) VALUES
(1, 84, 23, 90000000.00, '2024-07-01 12:16:13', '2024-07-01 12:51:31'),
(2, 84, 43, 70000000.00, '2024-07-01 12:17:57', '2024-07-01 12:17:57'),
(3, 4, 21, 8500000.00, '2024-07-01 12:18:07', '2024-07-01 12:18:07'),
(4, 4, 15, 130000000.00, '2024-07-01 12:52:34', '2024-07-01 12:52:34'),
(6, 84, 15, 70000000.00, '2024-07-04 23:42:23', '2024-07-04 23:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `blacklists`
--

CREATE TABLE `blacklists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reporter_id` bigint(20) NOT NULL,
  `reported_id` bigint(20) NOT NULL,
  `blacklisted_by` bigint(20) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `org_description` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `reported_on` varchar(255) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blacklists`
--

INSERT INTO `blacklists` (`id`, `reporter_id`, `reported_id`, `blacklisted_by`, `business_name`, `category`, `org_description`, `reason`, `reported_on`, `rating`, `created_at`, `updated_at`) VALUES
(1, 23, 15, 21, 'BeeDeeBee Ventures', 'landlord', 'Deals on property Sales and all', 'A complaint was raised concerning fraudulent activities which is yet to be clarified by the accused.', '2024-09-08', 2, '2024-09-08 16:00:12', '2024-09-08 16:00:12'),
(2, 21, 1, 21, '3 Bedroom Apartment', 'property', 'The house is very appealing and well furnished for your convenience', 'blacklisted', '2024-12-24 13:56:08', 1, '2024-12-24 12:56:08', '2024-12-24 12:56:08'),
(3, 21, 1, 21, '3 Bedroom Apartment', 'property', 'The house is very appealing and well furnished for your convenience', 'blacklisted', '2024-12-24 13:56:32', 1, '2024-12-24 12:56:32', '2024-12-24 12:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `news` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `news`, `photo`, `created_at`, `updated_at`) VALUES
(1, 21, 'Nigeria\'s Property Market: Emerging Trends and Investment Opportunities in 2024', 'Lagos, Nigeria — As Nigeria continues to evolve economically and socially, the property market is witnessing significant transformations. The year 2024 has already shown promising developments in the real estate sector, reflecting both challenges and opportunities for investors, developers, and homebuyers. Here’s a look at the latest trends and what they mean for the future of property in Nigeria.\r\n\r\n1. Surge in Urban Property Developments\r\nPicture Suggestion: A high-resolution image of the skyline of Lagos or Abuja, showcasing modern high-rise buildings under construction or recently completed.\r\n\r\nIn major cities like Lagos and Abuja, urban property developments are booming. The demand for high-rise residential buildings and mixed-use developments is on the rise, driven by a growing urban population and increasing affluence. Notable projects include the completion of luxury apartments in Lekki and the expansion of commercial spaces in Abuja\'s central business district.\r\n\r\nHighlight Project: The \"Skyline Towers\" in Lekki, a state-of-the-art residential complex, promises top-tier amenities and panoramic views of the cityscape. With occupancy rates already exceeding expectations, it sets a new standard for luxury living in Lagos.\r\n\r\n2. Affordable Housing Initiatives Gain Traction\r\nPicture Suggestion: An image of a modern, affordable housing community, ideally showing diverse families and well-designed housing units.\r\n\r\nAddressing the housing deficit has become a priority for both the government and private developers. Several affordable housing projects are underway to cater to the growing middle class and low-income families. Initiatives such as the \"National Affordable Housing Scheme\" aim to provide quality housing at reduced costs.\r\n\r\nSuccess Story: The \"Eagle Homes Initiative\" in Abuja has successfully delivered over 1,000 units of affordable housing in the past year. This project not only offers budget-friendly options but also incorporates sustainable design principles.\r\n\r\n3. Growing Interest in Real Estate Investment Trusts (REITs)\r\nPicture Suggestion: A graphical representation of the stock market or an image of financial analysts reviewing charts and data, symbolizing investment opportunities.\r\n\r\nReal Estate Investment Trusts (REITs) are gaining popularity among investors looking for diversified exposure to the property market without directly owning physical assets. REITs offer a way to invest in real estate through shares, providing liquidity and accessibility.\r\n\r\nInvestment Insight: The Nigerian Stock Exchange (NSE) recently saw an increase in REIT listings, reflecting growing investor confidence. The \"Nigerian Property Fund,\" which focuses on residential and commercial properties, has seen a 15% increase in value over the past six months.\r\n\r\n4. Emphasis on Sustainable and Green Buildings\r\nPicture Suggestion: An image of a green building with eco-friendly features like solar panels, rainwater harvesting systems, or green roofs.\r\n\r\nSustainability is becoming a key consideration in new property developments. Developers are increasingly focusing on green building practices to reduce environmental impact and enhance energy efficiency. Features such as solar panels, rainwater harvesting systems, and energy-efficient lighting are becoming standard.\r\n\r\nGreen Development: The \"EcoCity Complex\" in Lagos is a prime example of sustainable development. The project includes green roofs, advanced waste management systems, and a commitment to using locally sourced materials.\r\n\r\n5. Challenges in Property Financing\r\nPicture Suggestion: A picture of a financial meeting or a close-up of documents related to property financing and mortgage loans.\r\n\r\nDespite positive trends, challenges in property financing remain. High interest rates and limited access to credit continue to impact both buyers and developers. The Central Bank of Nigeria (CBN) has introduced measures to ease financing, including lower interest rates for mortgage loans and grants for first-time homebuyers.\r\n\r\nFinancial Update: The recent \"Affordable Housing Loan Scheme\" by the CBN offers competitive interest rates and favorable repayment terms, aimed at increasing home ownership among Nigerians.\r\n\r\n6. Future Outlook and Market Predictions\r\nPicture Suggestion: A futuristic cityscape of Nigeria with conceptual graphics or an image of a real estate analyst giving a presentation.\r\n\r\nLooking ahead, the Nigerian property market is expected to continue its growth trajectory, driven by urbanization, economic development, and infrastructure improvements. However, stakeholders should remain vigilant about potential risks such as fluctuating oil prices and political instability, which could impact market dynamics.\r\n\r\nExpert Opinion: According to real estate analyst Dr. Chuka Nwosu, \"The Nigerian property market holds significant potential. Investors who stay informed about market trends and adapt to evolving demands will find lucrative opportunities.\"\r\n\r\nConclusion\r\n\r\nThe Nigerian property market in 2024 is a dynamic landscape with evolving trends and opportunities. From urban developments and affordable housing initiatives to sustainable practices and REIT investments, there are numerous avenues for growth and innovation. Staying informed and strategically navigating these trends will be key for anyone involved in Nigeria\'s real estate sector.\r\n\r\nStay tuned to our blog for the latest updates and expert insights on Nigeria\'s property market.', 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724687838/e-properties/blogs/y8rska8tkhyn7rsunmdq.png', '2024-08-26 14:57:18', '2024-08-26 14:57:18'),
(2, 21, 'How Technology is Revolutionizing Nigeria’s Real Estate Sector', 'Explore the impact of technologies like property management software, virtual tours, and blockchain on Nigeria\'s real estate market. Highlight specific examples and case studies of how tech innovations are improving efficiency and transparency.', 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724688381/e-properties/blogs/wrydzleev28jnel9uepj.png', '2024-08-26 15:06:22', '2024-08-26 15:06:22'),
(3, 21, 'Building a Greener Future: Sustainable Real Estate Trends in Nigeria', '<p><strong>Examine the increasing focus on sustainable and eco-friendly buildings.</strong> <em>Discuss green building practices, benefits of sustainable living, and examples of</em> green real estate projects in Nigeria.<br />\r\n<br />\r\nExamine the increasing focus on sustainable and eco-friendly buildings. Discuss green building practices, benefits of sustainable living, and examples of green real estate projects in Nigeria.</p>', 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724688613/e-properties/blogs/zreerwuknaeoukbn3znl.png', '2024-08-26 15:10:14', '2024-08-26 15:10:14'),
(4, 21, 'Legal Considerations in the Sale of Real Property in Nigeria', '<p>The real estate market in Nigeria presents lucrative opportunities for investors, developers, and private individuals looking to buy or sell property. However, the process of selling real property in Nigeria is complex and requires careful navigation through a myriad of legal requirements and procedures. These legal considerations in the sale of real property are crucial to ensure that the transaction is legitimate, binding, and free from future disputes.</p>\r\n\r\n<p>The legal framework governing land transactions in Nigeria is influenced by the Land Use Act of 1978, which centralized land ownership in the hands of the government, making the Governor&rsquo;s consent a critical component of any land sale. Additionally, the legal environment is shaped by customary laws, particularly in rural and communal settings, adding another layer of complexity to land transactions.</p>\r\n\r\n<p>In this article, we will delve into the essential legal considerations involved in the sale of real property in Nigeria. From understanding land ownership types and verifying titles to drafting contracts and handling taxes, each step of the process requires meticulous attention to detail. Whether you are a seasoned real estate investor or a first-time seller, this guide will provide you with the necessary knowledge to navigate the legal landscape of property sales in Nigeria effectively.</p>\r\n\r\n<p>By understanding these legal considerations, parties involved in the sale of real property can protect their interests, avoid legal pitfalls, and ensure that the transaction is both smooth and compliant with Nigerian laws.<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>1.&nbsp;<strong>Land Ownership and Title Verification</strong></p>\r\n\r\n<p><strong>Types of Land Ownership:</strong>&nbsp;In Nigeria, land ownership can be classified into three main categories:</p>\r\n\r\n<ul>\r\n	<li><strong>Individual Ownership:</strong>&nbsp;Land owned by private individuals.</li>\r\n	<li><strong>Communal Ownership:</strong>&nbsp;Land owned by communities or families, often managed according to customary law.</li>\r\n	<li><strong>Government Ownership:</strong>&nbsp;Land controlled by the government, particularly under the&nbsp;<a href=\"https://www.kwikattorneys.com/understanding-the-land-use-act-of-1978-a-comprehensive-overview/\">Land Use Act of 1978</a>, which vests all land in a state in the governor of that state.</li>\r\n</ul>\r\n\r\n<p><strong>Title Verification:</strong>&nbsp;Verifying the title is crucial to confirm the seller&rsquo;s legal right to sell the property. This involves:</p>\r\n\r\n<ul>\r\n	<li><strong>Certificate of Occupancy (C of O):</strong>&nbsp;A crucial document issued by the state government indicating ownership.</li>\r\n	<li><strong>Governor&rsquo;s Consent:</strong>&nbsp;Required for transferring any interest in land, ensuring the transaction complies with the Land Use Act.</li>\r\n</ul>\r\n\r\n<p>2.&nbsp;<strong>Due Diligence</strong></p>\r\n\r\n<p><strong>Land Search:</strong>&nbsp;Conduct a thorough search at the land registry to verify:</p>\r\n\r\n<ul>\r\n	<li><strong>Legal Status:</strong>&nbsp;Ensure there are no legal disputes or encumbrances.</li>\r\n	<li><strong>Ownership History:</strong>&nbsp;Trace the history of the land to confirm the legitimacy of the seller&rsquo;s title.</li>\r\n</ul>\r\n\r\n<p><strong>Survey Plan:</strong>&nbsp;A registered survey plan is essential to:</p>\r\n\r\n<ul>\r\n	<li><strong>Verify Boundaries:</strong>&nbsp;Confirm the exact location and size of the property.</li>\r\n	<li><strong>Identify Discrepancies:</strong>&nbsp;Resolve any inconsistencies with the title documents.</li>\r\n</ul>\r\n\r\n<p>3.&nbsp;<strong>Governor&rsquo;s Consent</strong></p>\r\n\r\n<p>The Land Use Act mandates obtaining the Governor&rsquo;s consent for any land transfer to:</p>\r\n\r\n<ul>\r\n	<li><strong>Legitimize the Transaction:</strong>&nbsp;Validate the transfer of ownership.</li>\r\n	<li><strong>Avoid Legal Issues:</strong>&nbsp;Prevent future disputes related to unauthorized transfers.</li>\r\n</ul>\r\n\r\n<p>4.&nbsp;<strong>Contract of Sale</strong></p>\r\n\r\n<p><strong>Drafting the Contract:</strong>&nbsp;The contract of sale should include:</p>\r\n\r\n<ul>\r\n	<li><strong>Parties Involved:</strong>&nbsp;Details of the buyer and seller.</li>\r\n	<li><strong>Property Description:</strong>&nbsp;Accurate description of the property.</li>\r\n	<li><strong>Purchase Price and Payment Terms:</strong>&nbsp;Clearly stated financial terms.</li>\r\n	<li><strong>Obligations and Warranties:</strong>&nbsp;Responsibilities and assurances of both parties.</li>\r\n	<li><strong>Timelines:</strong>&nbsp;Specific dates for payment and possession transfer.</li>\r\n</ul>\r\n\r\n<p><strong>Execution of the Contract:</strong>&nbsp;Ensure the contract is:</p>\r\n\r\n<ul>\r\n	<li><strong>Signed by Both Parties:</strong>&nbsp;Legally binding once signed.</li>\r\n	<li><strong>Witnessed:</strong>&nbsp;Signature by witnesses to confirm authenticity.</li>\r\n</ul>\r\n\r\n<p>5.&nbsp;<strong>Deed of Assignment</strong></p>\r\n\r\n<p><strong>Preparation:</strong>&nbsp;After the sale, a Deed of Assignment is prepared to:</p>\r\n\r\n<ul>\r\n	<li><strong>Formalize Transfer:</strong>&nbsp;Legally transfer ownership from the seller to the buyer.</li>\r\n</ul>\r\n\r\n<p><strong>Execution:</strong>&nbsp;The Deed of Assignment must be:</p>\r\n\r\n<ul>\r\n	<li><strong>Signed and Stamped:</strong>&nbsp;By both parties and duly stamped at the relevant tax office.</li>\r\n	<li><strong>Registered:</strong>&nbsp;At the land registry to make the transfer legally binding.</li>\r\n</ul>\r\n\r\n<p>6.&nbsp;<strong>Taxes and Fees</strong></p>\r\n\r\n<p><strong>Capital Gains Tax:</strong>&nbsp;The seller is liable for&nbsp;<a href=\"https://www.firs.gov.ng/capital-gains-tax\">capital gains tax</a>&nbsp;on the profit made from the sale, typically calculated at 10% of the gain.</p>\r\n\r\n<p><strong>Stamp Duty:</strong>&nbsp;Paid on the Deed of Assignment, usually a percentage of the purchase price.</p>\r\n\r\n<p><strong>Registration Fees:</strong>&nbsp;Fees for registering the property at the land registry, varying by state.</p>\r\n\r\n<p>7.&nbsp;<strong>Legal and Professional Fees</strong></p>\r\n\r\n<p><strong>Legal Fees:</strong>&nbsp;Both parties typically engage lawyers, with fees often being a percentage of the purchase price.</p>\r\n\r\n<p><strong>Survey and Valuation Fees:</strong>&nbsp;Necessary for:</p>\r\n\r\n<ul>\r\n	<li><strong>Survey Fees:</strong>&nbsp;Confirming property boundaries.</li>\r\n	<li><strong>Valuation Fees:</strong>&nbsp;Determining the market value of the property.</li>\r\n</ul>\r\n\r\n<p>8.&nbsp;<strong>Possession and Handover</strong></p>\r\n\r\n<p><strong>Vacant Possession:</strong>&nbsp;Ensure the property is delivered free from occupants unless otherwise agreed.</p>\r\n\r\n<p><strong>Handover Process:</strong>&nbsp;Document the handover, including:</p>\r\n\r\n<ul>\r\n	<li><strong>Transfer of Keys:</strong>&nbsp;Physical handover of the property.</li>\r\n	<li><strong>Delivery of Documents:</strong>&nbsp;Transfer of all relevant documents.</li>\r\n</ul>\r\n\r\n<p>9.&nbsp;<strong>Dispute Resolution</strong></p>\r\n\r\n<p><strong>Arbitration and Mediation:</strong>&nbsp;Include clauses for alternative dispute resolution methods to handle potential disputes amicably.</p>\r\n\r\n<p><strong>Court Proceedings:</strong>&nbsp;As a last resort, disputes can be resolved through the judicial system, though this can be time-consuming and costly.</p>\r\n\r\n<p>10.&nbsp;<strong>Compliance with Local Laws</strong></p>\r\n\r\n<p><strong>Zoning and Planning Regulations:</strong>&nbsp;Ensure the property adheres to local zoning and planning laws to avoid future legal issues.</p>\r\n\r\n<p><strong>Environmental Regulations:</strong>&nbsp;Verify compliance with environmental laws, particularly for industrial properties, to avoid penalties.</p>\r\n\r\n<p>Conclusion</p>\r\n\r\n<p>The sale of real property in Nigeria involves multiple legal considerations to protect the interests of both the buyer and the seller. By conducting thorough due diligence, ensuring compliance with legal requirements, and engaging professional assistance, parties can facilitate a smooth and legally compliant transaction. It is essential to navigate these processes carefully to avoid potential legal pitfalls and ensure a successful transfer of ownership.</p>', 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724688743/e-properties/blogs/lrw6ljcadht9probeogi.png', '2024-08-26 15:12:25', '2024-08-26 15:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `building_categories`
--

CREATE TABLE `building_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `building_categories`
--

INSERT INTO `building_categories` (`id`, `category`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Roofing', 'roofing', '2024-06-22 16:08:54', '2024-06-22 16:08:54'),
(2, 'Dry Lining & Plaster', 'dry-lining-plaster', '2024-06-22 16:08:54', '2024-06-22 16:08:54'),
(3, 'Timber & Joinery', 'timber-joinery', '2024-06-22 16:08:54', '2024-06-22 16:08:54'),
(4, 'Insulation', 'insulation', '2024-06-22 16:08:54', '2024-06-22 16:08:54'),
(5, 'Garden & Outdoor', 'garden-outdoor', '2024-06-22 16:08:54', '2024-07-18 21:35:30'),
(6, 'Door', 'door', '2024-06-22 16:08:54', '2024-06-22 16:08:54'),
(7, 'Tools & Machineries', 'tools-machineries', '2024-06-22 16:08:54', '2024-06-22 16:08:54'),
(8, 'Roofing Sheet', 'roofing-sheet', '2024-07-17 19:22:34', '2024-07-17 19:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `building_category_types`
--

CREATE TABLE `building_category_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `building_category_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `building_category_types`
--

INSERT INTO `building_category_types` (`id`, `type`, `slug`, `building_category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Roofing hammer', 'roofing-hammer', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(2, 'Roofing nail gun', 'roofing-nail-gun', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(3, 'Roofing knife', 'roofing-knife', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(4, 'Roofing pry bar', 'roofing-pry-bar', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(5, 'Chalk line', 'chalk-line', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(6, 'Roofing safety harness', 'roofing-safety-harness', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(7, 'Roofing boots', 'roofing-boots', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(8, 'Roofing sealants', 'roofing-sealants', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(9, 'Roofing screws', 'roofing-screws', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(10, 'Flashing', 'flashing', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(11, 'Ladder', 'ladder', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(12, 'Nail', 'nail', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(13, 'Roofing wire', 'roofing-wire', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(14, 'Anticulut', 'anticulut', 'roofing', '2024-06-22 16:08:55', '2024-06-22 16:08:55'),
(15, 'Stud finder', 'stud-finder', 'dry-lining-plaster', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(16, 'Plasterboard support', 'plasterboard-support', 'dry-lining-plaster', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(17, 'Snips', 'snips', 'dry-lining-plaster', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(18, 'Drywall plane', 'drywall-plane', 'dry-lining-plaster', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(19, 'Staple gun', 'staple-gun', 'dry-lining-plaster', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(20, 'Trowel', 'trowel', 'dry-lining-plaster', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(21, 'Skeleton gun', 'skeleton-gun', 'dry-lining-plaster', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(22, 'Mallet', 'mallet', 'timber-joinery', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(23, 'Saw', 'saw', 'timber-joinery', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(24, 'Drill', 'drill', 'timber-joinery', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(26, 'Screw drivers', 'screw-drivers', 'timber-joinery', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(27, 'Planes', 'planes', 'timber-joinery', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(28, 'Chiesel', 'chiesel', 'timber-joinery', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(29, 'Jointer', 'jointer', 'timber-joinery', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(30, 'Measuring tape', 'measuring-tape', 'insulation', '2024-06-22 16:08:56', '2024-06-22 16:08:56'),
(31, 'Adhesive', 'adhesive', 'insulation', '2024-06-22 16:08:57', '2024-06-22 16:08:57'),
(33, 'Insulation support materials', 'insulation-support-materials', 'insulation', '2024-06-22 16:08:57', '2024-06-22 16:08:57'),
(35, 'Personal protective equipment', 'personal-protective-equipment', 'insulation', '2024-06-22 16:08:57', '2024-06-22 16:08:57'),
(36, 'Gloves', 'gloves', 'garden-outdoor', '2024-06-22 16:08:57', '2024-07-18 21:35:30'),
(37, 'Prunning shears', 'prunning-shears', 'garden-outdoor', '2024-06-22 16:08:57', '2024-07-18 21:35:30'),
(38, 'Loppers', 'loppers', 'garden-outdoor', '2024-06-22 16:08:57', '2024-07-18 21:35:30'),
(39, 'Garden fork', 'garden-fork', 'garden-outdoor', '2024-06-22 16:08:57', '2024-07-18 21:35:30'),
(40, 'Spade', 'spade', 'garden-outdoor', '2024-06-22 16:08:57', '2024-07-18 21:35:30'),
(41, 'Rake', 'rake', 'garden-outdoor', '2024-06-22 16:08:57', '2024-07-18 21:35:30'),
(42, 'Hoe', 'hoe', 'garden-outdoor', '2024-06-22 16:08:57', '2024-07-18 21:35:30'),
(43, 'Watering can', 'watering-can', 'garden-outdoor', '2024-06-22 16:08:57', '2024-07-18 21:35:30'),
(44, 'Wheelbarrow', 'wheelbarrow', 'garden-outdoor', '2024-06-22 16:08:57', '2024-07-18 21:35:30'),
(45, 'Saw', 'saw', 'door', '2024-06-22 16:08:57', '2024-06-22 16:08:57'),
(46, 'Router', 'router', 'door', '2024-06-22 16:08:57', '2024-06-22 16:08:57'),
(47, 'Router table', 'router-table', 'door', '2024-06-22 16:08:57', '2024-06-22 16:08:57'),
(48, 'Clamps', 'clamps', 'door', '2024-06-22 16:08:57', '2024-06-22 16:08:57'),
(49, 'Doweling jig', 'doweling-jig', 'door', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(50, 'Drill press', 'drill-press', 'door', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(51, 'Clamping square', 'clamping-square', 'door', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(53, 'Orbital sander', 'orbital-sander', 'door', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(54, 'Bulldozer', 'bulldozer', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(55, 'Excavators', 'excavators', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(56, 'Loaders', 'loaders', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(57, 'Mixers', 'mixers', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(58, 'Cranes', 'cranes', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(59, 'Compactors', 'compactors', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(60, 'Gloves', 'gloves', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(61, 'Graders', 'graders', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(62, 'Measuring box', 'measuring-box', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(63, 'Backhoe', 'backhoe', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(64, 'Bolster', 'bolster', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(65, 'Boning rod', 'boning-rod', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(66, 'Bump cutter', 'bump-cutter', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(67, 'Digging bar', 'digging-bar', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(68, 'Forklift', 'forklift', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(69, 'Plumb Bob', 'plumb-bob', 'tools-machineries', '2024-06-22 16:08:58', '2024-06-22 16:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `building_materials`
--

CREATE TABLE `building_materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `unit` text DEFAULT NULL,
  `denomination` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `installment` varchar(255) DEFAULT 'No',
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `building_materials`
--

INSERT INTO `building_materials` (`id`, `user_id`, `thumbnail`, `title`, `type`, `address`, `quantity`, `unit`, `denomination`, `price`, `installment`, `description`, `created_at`, `updated_at`) VALUES
(2, 21, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330631/building_materials/jvjukrkenrvb5xvekk1k.png', 'Thread Nails', 'nail', '13, Tony Elumelu, Crescent, Ojodu Berger, Lagos.', '20', 'pieces', '$', 20500.00, 'Yes', 'Verified nails with neat appearance', '2024-07-22 19:05:37', '2024-07-22 19:05:37'),
(4, 21, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330631/building_materials/maeaxoj2cufrstcn9fwt.png', 'Jig Saw', 'saw', '10, Ekundayo road, Abule Odu, Alimosho,Lagos', '4 ', 'set', '₦', 40000.00, NULL, 'Very cool saws', '2024-07-22 19:13:19', '2024-07-22 19:13:19'),
(5, 21, 'https://res.cloudinary.com/dqcess34g/image/upload/v1723710466/building_materials/jhol9csesdxyb31a2zks.jpg', 'Long \n Nails', 'roofing-nail-gun', '2, banjo street off Lisabi Street off Ojuelegba Road, Yaba', '24', 'pieces', '₦', 200000.00, 'Yes', 'sssss', '2024-08-14 14:55:38', '2024-08-14 14:55:38'),
(6, 21, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330631/building_materials/thkmf9bum8ufd2k73rlf.png', 'Screw Head Nail', 'roofing-nail-gun', '10, Emina Crescent, Off Toyin Street, behind White House Hotel, Ikeja, Lagos.', '24', 'units', '₦', 23000.00, 'Yes', 'ssss', '2024-08-15 07:27:46', '2024-08-15 07:27:46'),
(7, 21, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330630/building_materials/d40udgmtkv0j8lop1yjq.png', 'Nail', 'roofing-hammer', '10, Emina Crescent, Off Toyin Street, behind White House Hotel, Ikeja, Lagos.', '90', 'set', '₦', 300000.00, 'Yes', 'This nails are very good', '2024-08-15 07:41:38', '2024-08-15 07:41:38'),
(30, 9, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330630/building_materials/ha9bimybcpq4wr6nmr02.png', 'Roofing Hammer', 'roofing-hammer', '123 Main Street, Lagos', '10', 'pieces', '₦', 5000.00, 'No', 'A high-quality roofing hammer suitable for all roofing tasks.', '2024-10-30 22:28:28', '2024-10-30 22:28:28'),
(31, 15, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330630/building_materials/h6qk7zylpjf2ppkgtegl.png', 'Roofing Knife', 'roofing-knife', '456 Industrial Ave, Lagos', '15', 'pieces', '₦', 3000.00, 'No', 'A durable roofing knife designed for precision cutting.', '2024-10-30 22:28:28', '2024-10-30 22:28:28'),
(32, 63, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330631/building_materials/wbxklhebnbyzlj1urvlt.jpg', 'Roofing Pry Bar', 'roofing-pry-bar', '789 Commerce Blvd, Abuja', '8', 'pieces', '₦', 4500.00, 'No', 'A sturdy pry bar ideal for removing old shingles and nails.', '2024-10-30 22:28:28', '2024-10-30 22:28:28'),
(33, 18, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330631/building_materials/qcideid5o7m8g4csjeg6.png', 'Chalk Line', 'chalk-line', '987 Builder\'s Way, Lagos', '20', 'pieces', '₦', 1500.00, 'No', 'A reliable chalk line for accurate marking on surfaces.', '2024-10-30 22:28:28', '2024-10-30 22:28:28'),
(34, 43, 'https://res.cloudinary.com/dxyhmgqli/image/upload/building_materials/ktaszsc2bobyunyrmtcd', 'Roofing Boots', 'roofing-boots', '123 Main Street, Lagos', '12', 'pairs', '₦', 8000.00, 'No', 'Safety boots designed specifically for roofing work.', '2024-10-30 22:28:28', '2024-10-30 22:28:28'),
(35, 54, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330631/building_materials/spqzcczkkz7i00352e5t.png', 'Roofing Sealants', 'roofing-sealants', '456 Industrial Ave, Lagos', '30', 'tubes', '₦', 2000.00, 'No', 'High-quality sealants for waterproofing roofs.', '2024-10-30 22:28:28', '2024-10-30 22:28:28'),
(36, 54, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330630/building_materials/h6qk7zylpjf2ppkgtegl.png', 'Roofing Screws', 'roofing-screws', '789 Commerce Blvd, Abuja', '1000', 'pieces', '₦', 0.50, 'No', 'Durable screws suitable for metal roofing installations.', '2024-10-30 22:28:29', '2024-10-30 22:28:29'),
(37, 18, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330631/building_materials/qcideid5o7m8g4csjeg6.png', 'Flashing', 'flashing', '987 Builder\'s Way, Lagos', '50', 'pieces', '₦', 4000.00, 'No', 'Metal flashing to prevent water penetration at roof joints.', '2024-10-30 22:28:29', '2024-10-30 22:28:29'),
(38, 23, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330631/building_materials/ley4qzfwuplhwb2vwaml.png', 'Bulldozer', 'bulldozer', '123 Main Street, Lagos', '2', 'Set', '₦', 2000000.00, 'No', 'Aluminum ladder suitable for roofing and other construction tasks.', '2024-10-30 22:28:29', '2024-10-30 22:28:29'),
(39, 9, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330631/building_materials/s4n3hkenywacfeqlkgoh.png', 'Plasterboard Support', 'plasterboard-support', '456 Industrial Ave, Lagos', '7', 'pieces', '₦', 6000.00, 'No', 'Support tool for holding plasterboards during installation.', '2024-10-30 22:28:29', '2024-10-30 22:28:29'),
(40, 15, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730330631/building_materials/s4n3hkenywacfeqlkgoh.png', 'Snips', 'snips', '789 Commerce Blvd, Abuja', '20', 'pieces', '₦', 3500.00, 'No', 'Durable snips for cutting roofing sheets and wires.', '2024-10-30 22:28:29', '2024-10-30 22:28:29'),
(41, 43, 'https://res.cloudinary.com/dxyhmgqli/image/upload/building_materials/s2eszmqxjsowu2fp8bel', 'Measuring Tape', 'measuring-tape', '987 Builder\'s Way, Lagos', '50', 'pieces', '₦', 2000.00, 'No', 'Reliable measuring tape for accurate measurements.', '2024-10-30 22:28:29', '2024-10-30 22:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `building_material_comments`
--

CREATE TABLE `building_material_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `material_id` bigint(20) NOT NULL,
  `review` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `building_material_comments`
--

INSERT INTO `building_material_comments` (`id`, `user_id`, `material_id`, `review`, `created_at`, `updated_at`) VALUES
(1, NULL, 41, '<p>This material is a really good one and very good for taking measurement due to its high level of sensitivity.</p>', '2024-11-19 11:24:03', '2024-11-19 11:24:03'),
(3, NULL, 41, '<p>I think it&#39;s a very effectctive material even for home usage</p>\r\n\r\n<p>&nbsp;</p>', '2024-11-20 16:59:44', '2024-11-20 16:59:44'),
(7, NULL, 41, '<p>This tape measure is noted for its excellent visibility due to its unique blade color, which is beneficial for those with vision challenges</p>', '2024-11-20 17:06:17', '2024-11-20 17:06:17'),
(8, NULL, 41, '<p>&nbsp;I love this tape so&nbsp; much, it&#39;s efficiency is top notch.</p>', '2024-11-20 17:07:30', '2024-11-20 17:07:30'),
(9, 15, 31, '<p>I love this roofing knife.</p>', '2024-12-04 21:23:16', '2024-12-04 21:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `content` text NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `group_post_id`, `user_id`, `content`, `views`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 'I\'m not sure I quite agree to this though', 4, NULL, '2024-12-04 17:02:31', '2024-12-04 23:07:54'),
(2, 1, 15, '\"Great advice! It\'s amazing how small, everyday habits like eating the right foods, staying active, and managing stress can have such a big impact on our immune health. I’ve personally noticed a huge difference since I started prioritizing sleep and hydration. Definitely going to add Vitamin D to my routine too! Thanks for sharing these simple but powerful tips!\"', 3, NULL, '2024-12-04 17:02:44', '2024-12-06 13:09:10'),
(3, 1, 15, 'All these things are they real?', 0, NULL, '2024-12-04 17:03:35', '2024-12-04 17:03:35'),
(4, 1, 15, 'I think it\'s true', 0, 1, '2024-12-04 17:47:55', '2024-12-04 17:47:55'),
(7, 1, 15, 'Have you done your own research?', 0, 1, '2024-12-04 17:59:33', '2024-12-04 17:59:33'),
(8, 1, 15, 'Yes, I have done my research', 0, 1, '2024-12-04 18:18:49', '2024-12-04 18:18:49'),
(9, 1, 15, 'Why are you guys arguing on this?', 0, 1, '2024-12-04 18:19:57', '2024-12-04 18:19:57'),
(10, 1, 15, 'Have you done your own research?', 0, 1, '2024-12-04 18:22:32', '2024-12-04 18:22:32'),
(11, 1, 15, 'Yeah, I quite agree with your point', 0, 2, '2024-12-04 18:26:11', '2024-12-04 18:26:11'),
(12, 1, 15, 'Yeah, I quite agree with your point.', 0, 2, '2024-12-04 18:28:22', '2024-12-04 18:28:22'),
(13, 1, 15, 'I\'m not sure I quite agree to this though', 1, 2, '2024-12-04 18:29:17', '2024-12-04 18:33:34'),
(14, 1, 15, 'Yes they are, I can attest to that.', 1, 3, '2024-12-04 18:30:22', '2024-12-04 18:33:31'),
(15, 1, 15, 'I totally enjoyed your post. Thanks a lot.', 0, NULL, '2024-12-04 19:34:38', '2024-12-04 19:34:38'),
(16, 2, 15, 'Loving the layout! The like and comment features make it easy for users to engage with posts. Great job!', 8, NULL, '2024-12-04 19:42:51', '2024-12-06 12:35:59'),
(17, 2, 15, 'How can you tell if that\'s reealistic?', 6, 16, '2024-12-04 19:44:05', '2024-12-06 12:36:05'),
(18, 5, 15, 'This is such an inspiring story! It’s amazing how small changes can lead to big improvements in our health. Thank you for sharing your journey!', 10, NULL, '2024-12-04 21:30:02', '2024-12-06 13:08:56'),
(19, 5, NULL, 'I can completely relate to feeling overwhelmed and fatigued. Your story motivates me to start making small changes in my own life', 3, NULL, '2024-12-04 21:32:44', '2024-12-04 22:46:30'),
(20, 5, 15, 'I also concur with you', 4, 18, '2024-12-04 21:43:43', '2024-12-04 23:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `compare_properties`
--

CREATE TABLE `compare_properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `compare_property`
--

CREATE TABLE `compare_property` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `compare_property`
--

INSERT INTO `compare_property` (`id`, `user_id`, `property_id`, `created_at`, `updated_at`) VALUES
(35, 15, 3, '2024-07-03 20:37:18', '2024-07-03 20:37:18'),
(36, 15, 1, '2024-07-03 20:37:29', '2024-07-03 20:37:29'),
(39, 24, 5, '2024-08-22 19:51:32', '2024-08-22 19:51:32'),
(40, 24, 32, '2024-08-22 21:53:11', '2024-08-22 21:53:11'),
(47, 9, 29, '2024-11-15 13:09:35', '2024-11-15 13:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `follower_id` int(10) UNSIGNED NOT NULL,
  `following_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `follower_id`, `following_id`, `created_at`, `updated_at`) VALUES
(1, 21, 18, '2024-12-06 13:49:57', '2024-12-06 13:49:57'),
(2, 21, 15, '2024-12-06 13:51:27', '2024-12-06 13:51:27'),
(3, 21, 60, '2024-12-06 14:21:38', '2024-12-06 14:21:38'),
(4, 21, 24, '2024-12-18 19:10:19', '2024-12-18 19:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `photo` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'Essential Staff', 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730808003/e-properties/groups/akaijeklf2mpeaokxl7n.png', '2024-11-05 10:58:04', '2024-11-05 10:58:04'),
(3, 'IT News', 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730908237/e-properties/groups/ufbpu98z1senumqsqiqd.avif', '2024-11-05 11:00:04', '2024-11-06 14:50:37'),
(4, 'Tech Group', 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1730909708/e-properties/groups/xxpbbrqucwswzia9ipi6.avif', '2024-11-06 15:15:08', '2024-11-06 15:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `group_members`
--

CREATE TABLE `group_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_members`
--

INSERT INTO `group_members` (`id`, `group_id`, `user_id`, `created_at`, `updated_at`) VALUES
(13, 2, 15, '2024-11-05 14:01:16', '2024-11-05 14:01:16'),
(14, 2, 18, '2024-11-05 14:01:17', '2024-11-05 14:01:17'),
(15, 2, 21, '2024-11-05 14:01:17', '2024-11-05 14:01:17'),
(16, 4, 59, '2024-11-06 15:26:29', '2024-11-06 15:26:29'),
(17, 4, 60, '2024-11-06 15:26:29', '2024-11-06 15:26:29'),
(18, 2, 9, NULL, NULL),
(19, 3, 21, NULL, NULL),
(20, 4, 21, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_posts`
--

CREATE TABLE `group_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `post` longtext NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) DEFAULT NULL,
  `dislikes` int(11) DEFAULT NULL,
  `total_comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_posts`
--

INSERT INTO `group_posts` (`id`, `user_id`, `post`, `views`, `likes`, `dislikes`, `total_comments`, `created_at`, `updated_at`) VALUES
(1, 21, 'Maintaining a healthy immune system is key for overall well-being. Eating a balanced diet, exercising, getting enough sleep, staying hydrated, and managing stress can help. Consider supplements like Vitamin C and D to support your body’s defenses.', 47, NULL, NULL, NULL, '2024-11-15 14:59:12', '2024-12-06 13:09:10'),
(2, 15, 'Hey everyone! 🌟 As technology continues to evolve, artificial intelligence (AI) is becoming an integral part of our daily lives. From smart assistants like Siri and Alexa to advanced algorithms that enhance our online experiences, AI is reshaping how we interact with the world. What are your thoughts on the impact of AI on our future? Do you think it will lead to more convenience or potential challenges? Let’s discuss! Looking forward to hearing your insights! 💬 Feel free to adjust any part of the post to better fit your group\'s tone or specific interests!', 42, NULL, NULL, NULL, '2024-12-04 19:35:47', '2024-12-06 12:36:06'),
(5, NULL, 'Last year, I found myself feeling constantly fatigued and unmotivated. Simple tasks felt overwhelming, and I knew something had to change. After a visit to my doctor, I learned that my lifestyle choices were taking a toll on my health. Determined to turn things around, I started small. I replaced sugary snacks with fruits, began taking daily walks, and prioritized sleep. Each step felt challenging at first, but gradually, I noticed improvements in my energy levels and mood. One day, while out for a walk, I met an elderly woman who shared her own journey of overcoming health struggles. Her story inspired me to keep pushing forward. Today, I feel more vibrant and alive than ever before. It’s incredible how small changes can lead to significant transformations. Remember, it’s never too late to start your journey towards better health! Feel free to adjust any part of the story to better fit your style or the audience of the group!', 54, NULL, NULL, NULL, '2024-12-04 20:08:07', '2024-12-06 13:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landlords`
--

CREATE TABLE `landlords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `business_ID` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landlords`
--

INSERT INTO `landlords` (`id`, `user_id`, `business_ID`, `business_name`, `created_at`, `updated_at`) VALUES
(1, 15, 'Adekunle Abijo', 'Abijoade Enterprise', '2024-05-29 09:29:05', '2024-05-29 09:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `file_url` text NOT NULL,
  `comment` varchar(255) NOT NULL,
  `file_type` enum('video','image') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `user_id`, `file_url`, `comment`, `file_type`, `created_at`, `updated_at`) VALUES
(1, 21, 'https://res.cloudinary.com/dnqmjzvy3/video/upload/v1723887363/e-properties/media/video/dbw6zjju1rkuwft8ekyq.mp4', 'thi', 'video', '2024-08-17 08:36:04', '2024-08-17 08:36:04'),
(4, 21, 'https://res.cloudinary.com/dnqmjzvy3/video/upload/v1723889076/e-properties/media/video/grd2nbm8cje5tgofhhjx.mp4', 'Enjoy this short one.', 'video', '2024-08-17 09:04:36', '2024-08-17 09:04:36'),
(5, 21, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1723890024/e-properties/media/image/wqtvknnomdnclibyq6qy.jpg', 'I  was here last week and the experience was superb.', 'image', '2024-08-17 09:20:24', '2024-08-17 09:20:24'),
(6, 21, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1723891975/e-properties/media/image/ydt1rcpogkkftlytqujz.jpg', 'This event centre is very nice and very affordable. Can\'t wait for a better experience.', 'image', '2024-08-17 09:52:54', '2024-08-17 09:52:54'),
(7, 21, 'https://res.cloudinary.com/dnqmjzvy3/video/upload/v1723892729/e-properties/media/video/mpclbdbrgkfapbfhk9ui.mp4', 'very funny video. I still cant\'t stop laughing.', 'video', '2024-08-17 10:05:29', '2024-08-17 10:05:29'),
(8, 21, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1723892884/e-properties/media/image/quugircwctviluw82mlw.jpg', 'The beauty of Heritage resort. The experience is just phenomenal.', 'image', '2024-08-17 10:08:04', '2024-08-17 10:08:04'),
(9, 21, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1723893001/e-properties/media/image/pyonbymsnpfwja2rtxf5.jpg', 'Nice time with my noisy colleague.', 'image', '2024-08-17 10:10:01', '2024-08-17 10:10:01'),
(10, 21, 'https://res.cloudinary.com/dnqmjzvy3/video/upload/v1724250033/e-properties/media/video/yjmed5hvhgewo8tuhbfw.mp4', 'Checkout this shoort property video', 'video', '2024-08-21 13:20:33', '2024-08-21 13:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agent_id` varchar(255) DEFAULT NULL,
  `property_id` bigint(20) UNSIGNED DEFAULT NULL,
  `msg_name` varchar(255) DEFAULT NULL,
  `msg_email` varchar(255) DEFAULT NULL,
  `msg_mobile` varchar(255) DEFAULT NULL,
  `msg_phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` enum('read','unread') NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `agent_id`, `property_id`, `msg_name`, `msg_email`, `msg_mobile`, `msg_phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 18, '21', 33, 'Adekunle Gabriel', 'stunde@gmail.com', '08138504844', NULL, 'I need this house as soon as possible. But please rent is to start a month after full payment. \n\nKindly reach out if possible. \n\nThanks', 'unread', '2024-06-26 21:14:46', NULL),
(2, 18, '15', 2, 'Adekunle Gabriel', 'stunde@gmail.com', NULL, '08138504844', 'I need this house as soon as possible. But please rent is to start a month after full payment. \r\n\r\nKindly reach out if possible. \r\n\r\nThanks', 'unread', '2024-06-26 21:17:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(324, '2014_10_12_000000_create_users_table', 1),
(325, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(326, '2014_10_12_100000_create_password_resets_table', 1),
(327, '2019_08_19_000000_create_failed_jobs_table', 1),
(328, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(329, '2022_02_08_182531_create_admins_table', 1),
(330, '2022_02_14_105407_create_categories_table', 1),
(331, '2022_03_31_173325_create_properties_table', 1),
(332, '2022_03_31_182856_create_images_table', 1),
(333, '2022_04_10_144822_create_sliders_table', 1),
(334, '2024_04_05_083308_create_landlords_table', 1),
(335, '2024_04_05_083318_create_tenants_table', 1),
(336, '2024_04_05_083330_create_service_providers_table', 1),
(337, '2024_04_05_092028_create_agents_table', 1),
(338, '2024_05_02_205954_create_auctions_table', 1),
(339, '2024_05_02_212106_create_property_payments_table', 1),
(340, '2024_05_02_222500_create_property_amenities_table', 1),
(341, '2024_05_03_012039_create_requests_table', 1),
(342, '2024_05_11_164023_compare_property', 1),
(343, '2024_05_11_171432_create_scam_reports_table', 1),
(344, '2024_05_11_182148_create_auction_bids_table', 1),
(345, '2024_05_11_192930_create_messages_table', 1),
(346, '2024_05_19_193759_create_profiles_table', 1),
(347, '2024_05_27_104026_create_post_media_table', 1),
(348, '2024_05_27_151858_create_property_deals_table', 1),
(349, '2024_06_09_175849_create_groups_table', 2),
(350, '2024_06_19_205010_create_building_materials_table', 3),
(351, '2024_06_20_212434_compare_property', 3),
(352, '2024_06_21_104047_create_group_posts_table', 4),
(367, '2024_06_21_122821_create_property_categories_table', 7),
(368, '2024_06_21_123311_create_property_types_table', 7),
(369, '2024_06_21_214453_create_building_categories_table', 8),
(370, '2024_06_21_222250_create_service_categories_table', 8),
(371, '2024_06_21_223051_create_service_types_table', 8),
(372, '2024_06_21_223653_create_building_category_types_table', 8),
(373, '2024_07_23_140523_create_trendings_table', 9),
(377, '2020_06_14_000001_create_media_table', 10),
(379, '2024_08_14_150209_create_prof_messages_table', 10),
(380, '2024_08_22_212245_create_property_likes_table', 11),
(381, '2024_08_22_212507_create_property_views_table', 11),
(382, '2024_08_22_212518_create_property_shares_table', 11),
(383, '2024_08_23_102655_create_property_reviews_table', 12),
(384, '2024_08_24_181806_create_professional_reviews_table', 13),
(385, '2024_08_24_184534_create_professional_views_table', 13),
(387, '2024_08_25_190518_create_blogs_table', 14),
(389, '2024_07_26_130939_create_blacklists_table', 15),
(390, '2024_10_28_141954_create_subscribers_table', 16),
(391, '2024_11_05_130948_create_group_members_table', 17),
(393, '2024_11_19_120546_create_building_material_comments_table', 19),
(396, '2024_11_27_234856_create_post_likes_table', 20),
(397, '2024_11_15_160136_create_comments_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--

CREATE TABLE `post_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `group_post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_likes`
--

INSERT INTO `post_likes` (`id`, `user_id`, `ip_address`, `group_post_id`, `comment_id`, `created_at`, `updated_at`) VALUES
(77, 15, NULL, NULL, 2, '2024-12-04 18:11:02', '2024-12-04 18:11:02'),
(82, 15, NULL, NULL, 14, '2024-12-04 18:33:31', '2024-12-04 18:33:31'),
(83, 15, NULL, NULL, 13, '2024-12-04 18:33:34', '2024-12-04 18:33:34'),
(102, NULL, '127.0.0.1', NULL, 19, '2024-12-04 22:46:30', '2024-12-04 22:46:30'),
(121, 15, NULL, 1, NULL, '2024-12-04 23:10:19', '2024-12-04 23:10:19'),
(127, 15, NULL, NULL, 16, '2024-12-04 23:20:32', '2024-12-04 23:20:32'),
(129, 15, NULL, NULL, 17, '2024-12-04 23:20:43', '2024-12-04 23:20:43'),
(132, 15, NULL, 2, NULL, '2024-12-04 23:21:32', '2024-12-04 23:21:32'),
(135, NULL, '127.0.0.1', 2, NULL, '2024-12-06 12:35:40', '2024-12-06 12:35:40'),
(137, NULL, '127.0.0.1', NULL, 16, '2024-12-06 12:35:59', '2024-12-06 12:35:59'),
(138, NULL, '127.0.0.1', NULL, 17, '2024-12-06 12:36:06', '2024-12-06 12:36:06'),
(139, NULL, '127.0.0.1', NULL, 18, '2024-12-06 13:08:56', '2024-12-06 13:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `post_media`
--

CREATE TABLE `post_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professional_reviews`
--

CREATE TABLE `professional_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `professional_id` bigint(20) NOT NULL,
  `review` varchar(255) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_reviews`
--

INSERT INTO `professional_reviews` (`id`, `user_id`, `professional_id`, `review`, `rating`, `created_at`, `updated_at`) VALUES
(1, 63, 23, 'The agent was well mannered and well behaved when I spoke with him.', 0, '2024-08-25 12:01:16', '2024-08-25 12:01:16'),
(2, 64, 23, 'He\'s very good at what he does, I think he will be fine with whatever he does.', 0, '2024-08-25 12:01:56', '2024-08-25 12:01:56'),
(3, NULL, 43, 'This agent is a very experienced one and from my experience with him he knows his job well.', 0, '2024-08-25 12:09:40', '2024-08-25 12:09:40'),
(4, NULL, 18, 'Mr Kunle is a very competent and trustworthy man. I\'ve been able to work with him on two or three occassion and I\'ve been impressed by his professionalism', 0, '2024-08-25 12:25:18', '2024-08-25 12:25:18'),
(5, 9, 15, '<p>Very reliable and time conscious person. He gets you the most satisfying aparrtment with at a very good offer.</p>', 0, '2024-10-01 14:37:47', '2024-10-01 14:37:47'),
(6, 9, 69, '<p>His services are very good and he&#39;s very reliable. He doesn&#39;t also joke with timing.&nbsp;</p>', 0, '2024-10-25 13:54:43', '2024-10-25 13:54:43'),
(7, NULL, 15, '<p>The materials are good for me.</p>', NULL, '2024-10-31 00:48:00', '2024-10-31 00:48:00'),
(8, NULL, 9, '<p>These nails are good for your roofing and furnitueres. I have been having great reviews for it.</p>', NULL, '2024-11-19 10:48:52', '2024-11-19 10:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `professional_views`
--

CREATE TABLE `professional_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `professional_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_views`
--

INSERT INTO `professional_views` (`id`, `user_id`, `professional_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 18, '2024-08-24 18:05:03', '2024-08-24 18:05:03'),
(2, NULL, 23, '2024-08-24 18:05:41', '2024-08-24 18:05:41'),
(3, NULL, 43, '2024-08-24 18:05:47', '2024-08-24 18:05:47'),
(4, NULL, 24, '2024-08-25 12:08:20', '2024-08-25 12:08:20'),
(5, NULL, 43, '2024-08-25 12:08:35', '2024-08-25 12:08:35'),
(6, NULL, 43, '2024-08-25 12:09:40', '2024-08-25 12:09:40'),
(7, NULL, 23, '2024-08-25 12:11:05', '2024-08-25 12:11:05'),
(8, NULL, 18, '2024-08-25 12:23:43', '2024-08-25 12:23:43'),
(9, NULL, 18, '2024-08-25 12:25:18', '2024-08-25 12:25:18'),
(10, NULL, 18, '2024-08-25 12:27:25', '2024-08-25 12:27:25'),
(11, NULL, 18, '2024-08-25 12:28:05', '2024-08-25 12:28:05'),
(12, NULL, 18, '2024-08-25 12:29:28', '2024-08-25 12:29:28'),
(13, 21, 23, '2024-08-25 12:34:00', '2024-08-25 12:34:00'),
(14, 21, 23, '2024-08-25 12:34:55', '2024-08-25 12:34:55'),
(15, 21, 23, '2024-08-25 12:34:56', '2024-08-25 12:34:56'),
(16, NULL, 24, '2024-08-27 19:19:38', '2024-08-27 19:19:38'),
(17, 21, 23, '2024-08-29 10:40:52', '2024-08-29 10:40:52'),
(18, 21, 23, '2024-08-29 11:01:15', '2024-08-29 11:01:15'),
(19, 21, 23, '2024-08-29 11:06:08', '2024-08-29 11:06:08'),
(20, 21, 23, '2024-08-29 11:07:14', '2024-08-29 11:07:14'),
(21, 21, 23, '2024-08-29 11:09:30', '2024-08-29 11:09:30'),
(22, 21, 23, '2024-08-29 11:14:12', '2024-08-29 11:14:12'),
(23, 21, 23, '2024-08-29 11:15:02', '2024-08-29 11:15:02'),
(24, 21, 23, '2024-08-29 11:16:11', '2024-08-29 11:16:11'),
(25, 21, 23, '2024-08-29 11:17:28', '2024-08-29 11:17:28'),
(26, 21, 23, '2024-08-29 11:17:50', '2024-08-29 11:17:50'),
(27, 21, 23, '2024-08-29 11:18:08', '2024-08-29 11:18:08'),
(28, 21, 23, '2024-08-29 11:20:25', '2024-08-29 11:20:25'),
(29, 21, 23, '2024-08-29 11:21:35', '2024-08-29 11:21:35'),
(30, NULL, 24, '2024-09-16 15:25:50', '2024-09-16 15:25:50'),
(31, NULL, 25, '2024-09-21 08:51:35', '2024-09-21 08:51:35'),
(32, NULL, 18, '2024-09-21 08:59:32', '2024-09-21 08:59:32'),
(33, NULL, 15, '2024-09-21 08:59:46', '2024-09-21 08:59:46'),
(34, NULL, 43, '2024-09-21 08:59:57', '2024-09-21 08:59:57'),
(35, NULL, 23, '2024-09-21 09:26:23', '2024-09-21 09:26:23'),
(36, NULL, 43, '2024-09-21 09:40:33', '2024-09-21 09:40:33'),
(37, NULL, 15, '2024-09-21 09:42:53', '2024-09-21 09:42:53'),
(38, NULL, 23, '2024-09-21 09:44:47', '2024-09-21 09:44:47'),
(39, NULL, 15, '2024-09-21 09:53:06', '2024-09-21 09:53:06'),
(40, NULL, 24, '2024-10-01 14:32:44', '2024-10-01 14:32:44'),
(41, NULL, 15, '2024-10-01 14:36:31', '2024-10-01 14:36:31'),
(42, NULL, 15, '2024-10-01 14:37:49', '2024-10-01 14:37:49'),
(43, NULL, 25, '2024-10-09 18:07:27', '2024-10-09 18:07:27'),
(44, NULL, 18, '2024-10-09 18:08:44', '2024-10-09 18:08:44'),
(45, NULL, 25, '2024-10-09 20:42:26', '2024-10-09 20:42:26'),
(46, NULL, 24, '2024-10-09 20:42:43', '2024-10-09 20:42:43'),
(47, NULL, 24, '2024-10-09 20:43:24', '2024-10-09 20:43:24'),
(48, NULL, 34, '2024-10-09 22:22:55', '2024-10-09 22:22:55'),
(49, NULL, 61, '2024-10-09 23:05:58', '2024-10-09 23:05:58'),
(50, NULL, 61, '2024-10-09 23:06:41', '2024-10-09 23:06:41'),
(51, NULL, 15, '2024-10-12 12:45:22', '2024-10-12 12:45:22'),
(52, NULL, 15, '2024-10-12 12:46:20', '2024-10-12 12:46:20'),
(53, NULL, 15, '2024-10-12 12:46:35', '2024-10-12 12:46:35'),
(54, NULL, 15, '2024-10-12 12:47:24', '2024-10-12 12:47:24'),
(55, NULL, 15, '2024-10-12 12:47:45', '2024-10-12 12:47:45'),
(56, NULL, 15, '2024-10-12 12:48:09', '2024-10-12 12:48:09'),
(57, NULL, 15, '2024-10-12 12:48:43', '2024-10-12 12:48:43'),
(58, NULL, 15, '2024-10-12 12:49:01', '2024-10-12 12:49:01'),
(59, NULL, 15, '2024-10-12 12:49:18', '2024-10-12 12:49:18'),
(60, NULL, 15, '2024-10-12 13:03:32', '2024-10-12 13:03:32'),
(61, NULL, 15, '2024-10-12 13:03:53', '2024-10-12 13:03:53'),
(62, NULL, 15, '2024-10-12 13:04:11', '2024-10-12 13:04:11'),
(63, NULL, 15, '2024-10-12 13:04:32', '2024-10-12 13:04:32'),
(64, NULL, 34, '2024-10-21 10:54:44', '2024-10-21 10:54:44'),
(65, NULL, 34, '2024-10-22 09:17:01', '2024-10-22 09:17:01'),
(66, NULL, 34, '2024-10-22 09:17:31', '2024-10-22 09:17:31'),
(67, NULL, 34, '2024-10-22 09:18:00', '2024-10-22 09:18:00'),
(68, NULL, 34, '2024-10-22 09:18:51', '2024-10-22 09:18:51'),
(69, NULL, 34, '2024-10-22 10:46:41', '2024-10-22 10:46:41'),
(70, NULL, 34, '2024-10-22 10:52:16', '2024-10-22 10:52:16'),
(71, NULL, 34, '2024-10-22 10:58:35', '2024-10-22 10:58:35'),
(72, NULL, 34, '2024-10-22 10:59:38', '2024-10-22 10:59:38'),
(73, NULL, 34, '2024-10-22 11:01:25', '2024-10-22 11:01:25'),
(74, NULL, 34, '2024-10-22 11:03:11', '2024-10-22 11:03:11'),
(75, NULL, 34, '2024-10-22 11:04:37', '2024-10-22 11:04:37'),
(76, NULL, 34, '2024-10-22 11:05:09', '2024-10-22 11:05:09'),
(77, NULL, 34, '2024-10-22 11:05:43', '2024-10-22 11:05:43'),
(78, NULL, 34, '2024-10-22 11:11:06', '2024-10-22 11:11:06'),
(79, NULL, 34, '2024-10-22 11:11:27', '2024-10-22 11:11:27'),
(80, NULL, 34, '2024-10-22 11:13:15', '2024-10-22 11:13:15'),
(81, NULL, 69, '2024-10-25 13:22:23', '2024-10-25 13:22:23'),
(82, NULL, 69, '2024-10-25 13:22:48', '2024-10-25 13:22:48'),
(83, NULL, 69, '2024-10-25 13:23:14', '2024-10-25 13:23:14'),
(84, NULL, 69, '2024-10-25 13:33:38', '2024-10-25 13:33:38'),
(85, NULL, 69, '2024-10-25 13:34:10', '2024-10-25 13:34:10'),
(86, NULL, 69, '2024-10-25 13:36:33', '2024-10-25 13:36:33'),
(87, NULL, 69, '2024-10-25 13:48:19', '2024-10-25 13:48:19'),
(88, NULL, 69, '2024-10-25 13:48:58', '2024-10-25 13:48:58'),
(89, NULL, 69, '2024-10-25 13:49:50', '2024-10-25 13:49:50'),
(90, NULL, 69, '2024-10-25 13:51:07', '2024-10-25 13:51:07'),
(91, NULL, 69, '2024-10-25 13:53:05', '2024-10-25 13:53:05'),
(92, NULL, 69, '2024-10-25 13:53:40', '2024-10-25 13:53:40'),
(93, NULL, 69, '2024-10-25 13:53:51', '2024-10-25 13:53:51'),
(94, NULL, 69, '2024-10-25 13:54:46', '2024-10-25 13:54:46'),
(95, NULL, 69, '2024-10-25 13:55:31', '2024-10-25 13:55:31'),
(96, NULL, 69, '2024-10-25 13:56:43', '2024-10-25 13:56:43'),
(97, NULL, 69, '2024-10-25 13:58:25', '2024-10-25 13:58:25'),
(98, NULL, 69, '2024-10-25 13:59:36', '2024-10-25 13:59:36'),
(99, NULL, 69, '2024-10-25 14:00:13', '2024-10-25 14:00:13'),
(100, NULL, 69, '2024-10-25 14:08:37', '2024-10-25 14:08:37'),
(101, NULL, 69, '2024-10-25 14:09:23', '2024-10-25 14:09:23'),
(102, NULL, 69, '2024-10-25 14:09:40', '2024-10-25 14:09:40'),
(103, NULL, 69, '2024-10-25 14:09:59', '2024-10-25 14:09:59'),
(104, NULL, 69, '2024-10-25 14:10:10', '2024-10-25 14:10:10'),
(105, NULL, 69, '2024-10-25 14:11:40', '2024-10-25 14:11:40'),
(106, NULL, 69, '2024-10-25 14:14:09', '2024-10-25 14:14:09'),
(107, NULL, 69, '2024-10-25 14:37:41', '2024-10-25 14:37:41'),
(108, NULL, 69, '2024-10-25 14:44:45', '2024-10-25 14:44:45'),
(109, NULL, 69, '2024-10-25 14:45:17', '2024-10-25 14:45:17'),
(110, NULL, 69, '2024-10-25 14:45:38', '2024-10-25 14:45:38'),
(111, NULL, 69, '2024-10-25 14:46:16', '2024-10-25 14:46:16'),
(112, NULL, 69, '2024-10-25 14:48:21', '2024-10-25 14:48:21'),
(113, NULL, 69, '2024-10-25 14:50:21', '2024-10-25 14:50:21'),
(114, NULL, 69, '2024-10-25 14:51:03', '2024-10-25 14:51:03'),
(115, NULL, 95, '2024-10-25 14:58:45', '2024-10-25 14:58:45'),
(116, NULL, 69, '2024-10-25 15:12:14', '2024-10-25 15:12:14'),
(117, NULL, 69, '2024-10-28 11:57:37', '2024-10-28 11:57:37'),
(118, NULL, 15, '2024-10-28 14:30:37', '2024-10-28 14:30:37'),
(119, NULL, 54, '2024-10-28 14:31:50', '2024-10-28 14:31:50'),
(120, NULL, 54, '2024-10-28 14:32:48', '2024-10-28 14:32:48'),
(121, NULL, 97, '2024-10-28 14:33:06', '2024-10-28 14:33:06'),
(122, NULL, 97, '2024-10-28 14:33:29', '2024-10-28 14:33:29'),
(123, NULL, 97, '2024-10-28 14:37:36', '2024-10-28 14:37:36'),
(124, NULL, 97, '2024-10-28 14:38:09', '2024-10-28 14:38:09'),
(125, NULL, 97, '2024-10-28 14:38:43', '2024-10-28 14:38:43'),
(126, NULL, 97, '2024-10-28 14:39:07', '2024-10-28 14:39:07'),
(127, NULL, 97, '2024-10-28 14:41:09', '2024-10-28 14:41:09'),
(128, NULL, 97, '2024-10-28 14:44:13', '2024-10-28 14:44:13'),
(129, NULL, 69, '2024-10-28 14:46:43', '2024-10-28 14:46:43'),
(130, NULL, 21, '2024-10-28 14:47:06', '2024-10-28 14:47:06'),
(131, NULL, 69, '2024-10-28 14:59:04', '2024-10-28 14:59:04'),
(132, NULL, 21, '2024-10-28 15:01:11', '2024-10-28 15:01:11'),
(133, NULL, 94, '2024-10-28 15:01:30', '2024-10-28 15:01:30'),
(134, NULL, 21, '2024-10-28 15:01:48', '2024-10-28 15:01:48'),
(135, NULL, 81, '2024-10-28 15:02:36', '2024-10-28 15:02:36'),
(136, NULL, 94, '2024-10-28 15:02:47', '2024-10-28 15:02:47'),
(137, NULL, 21, '2024-10-28 15:03:08', '2024-10-28 15:03:08'),
(138, NULL, 81, '2024-10-28 15:05:09', '2024-10-28 15:05:09'),
(139, NULL, 81, '2024-10-28 15:05:51', '2024-10-28 15:05:51'),
(140, NULL, 69, '2024-10-28 15:15:22', '2024-10-28 15:15:22'),
(141, NULL, 69, '2024-10-28 15:15:52', '2024-10-28 15:15:52'),
(142, NULL, 69, '2024-10-28 15:16:26', '2024-10-28 15:16:26'),
(143, NULL, 94, '2024-10-28 15:16:45', '2024-10-28 15:16:45'),
(144, NULL, 94, '2024-10-28 15:19:49', '2024-10-28 15:19:49'),
(145, NULL, 94, '2024-10-28 15:21:00', '2024-10-28 15:21:00'),
(146, NULL, 94, '2024-10-28 15:27:27', '2024-10-28 15:27:27'),
(147, NULL, 94, '2024-10-29 14:39:53', '2024-10-29 14:39:53'),
(148, NULL, 94, '2024-10-29 14:41:31', '2024-10-29 14:41:31'),
(149, NULL, 94, '2024-10-29 14:44:09', '2024-10-29 14:44:09'),
(150, NULL, 94, '2024-10-29 15:00:54', '2024-10-29 15:00:54'),
(151, NULL, 98, '2024-10-29 15:01:30', '2024-10-29 15:01:30'),
(152, NULL, 68, '2024-10-30 17:13:16', '2024-10-30 17:13:16'),
(153, NULL, 21, '2024-01-10 17:13:54', '2024-10-30 17:13:54'),
(154, NULL, 66, '2024-10-30 17:36:00', '2024-10-30 17:36:00'),
(155, NULL, 66, '2024-10-30 17:36:32', '2024-10-30 17:36:32'),
(156, NULL, 21, '2024-03-05 17:41:07', '2024-10-30 17:41:07'),
(157, NULL, 66, '2024-10-30 17:41:40', '2024-10-30 17:41:40'),
(158, NULL, 66, '2024-10-30 17:42:04', '2024-10-30 17:42:04'),
(159, NULL, 66, '2024-10-30 17:52:15', '2024-10-30 17:52:15'),
(160, NULL, 66, '2024-10-30 17:54:32', '2024-10-30 17:54:32'),
(161, NULL, 21, '2024-07-24 17:55:23', '2024-10-30 17:55:23'),
(162, NULL, 66, '2024-10-30 17:55:58', '2024-10-30 17:55:58'),
(163, NULL, 21, '2024-07-16 17:56:23', '2024-10-30 17:56:23'),
(164, NULL, 66, '2024-10-30 17:56:45', '2024-10-30 17:56:45'),
(165, NULL, 66, '2024-10-30 17:57:02', '2024-10-30 17:57:02'),
(166, NULL, 66, '2024-10-30 17:57:18', '2024-10-30 17:57:18'),
(167, NULL, 21, '2024-10-30 17:57:33', '2024-10-30 17:57:33'),
(168, NULL, 21, '2024-10-30 17:57:52', '2024-10-30 17:57:52'),
(169, NULL, 21, '2024-04-10 17:58:15', '2024-10-30 17:58:15'),
(170, NULL, 66, '2024-10-30 17:59:23', '2024-10-30 17:59:23'),
(171, NULL, 21, '2024-10-30 17:59:53', '2024-10-30 17:59:53'),
(172, NULL, 66, '2024-10-30 18:03:22', '2024-10-30 18:03:22'),
(173, NULL, 66, '2024-10-30 18:03:44', '2024-10-30 18:03:44'),
(174, NULL, 66, '2024-10-30 18:03:59', '2024-10-30 18:03:59'),
(175, NULL, 21, '2024-10-30 19:07:44', '2024-10-30 19:07:44'),
(176, NULL, 98, '2024-10-30 19:11:22', '2024-10-30 19:11:22'),
(177, NULL, 21, '2024-11-19 10:47:50', '2024-11-19 10:47:50'),
(178, 21, 60, '2024-12-06 14:01:55', '2024-12-06 14:01:55'),
(179, 21, 21, '2024-12-06 14:02:04', '2024-12-06 14:02:04'),
(180, 21, 60, '2024-12-06 14:02:32', '2024-12-06 14:02:32'),
(181, 21, 60, '2024-12-06 14:02:36', '2024-12-06 14:02:36'),
(182, 21, 60, '2024-12-06 14:04:23', '2024-12-06 14:04:23'),
(183, 21, 60, '2024-12-06 14:06:52', '2024-12-06 14:06:52'),
(184, 21, 21, '2024-12-06 14:09:44', '2024-12-06 14:09:44'),
(185, 21, 21, '2024-12-06 14:15:14', '2024-12-06 14:15:14'),
(186, 21, 60, '2024-12-06 14:16:48', '2024-12-06 14:16:48'),
(187, 21, 60, '2024-12-06 14:17:59', '2024-12-06 14:17:59'),
(188, 21, 21, '2024-12-06 14:21:08', '2024-12-06 14:21:08'),
(189, 21, 24, '2024-12-18 19:09:39', '2024-12-18 19:09:39'),
(190, 21, 23, '2024-12-18 19:22:44', '2024-12-18 19:22:44'),
(192, 21, 57, '2024-12-18 19:27:38', '2024-12-18 19:27:38'),
(193, 21, 54, '2024-12-18 19:35:50', '2024-12-18 19:35:50'),
(194, 21, 77, '2024-12-18 19:36:20', '2024-12-18 19:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prof_messages`
--

CREATE TABLE `prof_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agent_id` varchar(255) DEFAULT NULL,
  `msg_name` varchar(255) DEFAULT NULL,
  `msg_email` varchar(255) DEFAULT NULL,
  `msg_phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` enum('read','unread','trash') NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prof_messages`
--

INSERT INTO `prof_messages` (`id`, `user_id`, `agent_id`, `msg_name`, `msg_email`, `msg_phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 18, '21', 'Salawu Babatunde', 'stunde@gmail.com', '09034578622', 'I need an house at Ojuelegba and I think with your years of experience you should be the best for the job.', 'unread', '2024-08-25 12:21:15', '2024-08-25 12:21:15'),
(2, 23, '23', 'Salawu Babatunde', 'stunde@gmail.com', '09034578622', 'I need an house at Ojuelegba and I think with your years of experience you should be the best for the job.', 'unread', '2024-08-25 12:22:00', '2024-08-25 12:22:00'),
(3, 21, '21', 'Essential Admin', 'admin@gmail.com', '07011237633', 'I need a two bedroom Apartment at Lekki Ajah, with price range of 1.2M to 2m', 'unread', '2024-08-25 12:34:54', '2024-08-25 12:34:54'),
(4, 21, '23', 'Essential Admin', 'admin@gmail.com', '07011237633', 'I need a two bedroom Apartment at Lekki Ajah, with price range of 1.2M to 2m', 'unread', '2024-08-25 12:34:55', '2024-08-25 12:34:55'),
(5, 21, '23', 'Essential Admin', 'admin@gmail.com', '08051835090', 'I need a house in Ajah area and someone told me you\'re the righ person for the job.', 'unread', '2024-08-29 11:00:47', '2024-08-29 11:00:47'),
(6, 21, '23', 'Essential Admin', 'admin@gmail.com', '090788230020', 'Hi I need a two bedroom apartment along Iju-Ishaga area, my budget is #230,000. Minimum of two bedroom. \r\nKindly let me know if it\'s available.', 'unread', '2024-08-29 11:06:03', '2024-08-29 11:06:03'),
(7, 21, '23', 'Essential Admin', 'admin@gmail.com', '09021234567', 'Can you help me out with an apartment in orile.', 'unread', '2024-08-29 11:07:07', '2024-08-29 11:07:07'),
(8, 21, '23', 'Essential Admin', 'admin@gmail.com', '0823039303', 'I need two bedroom apartment in a quiet area.', 'unread', '2024-08-29 11:09:23', '2024-08-29 11:09:23'),
(9, 21, '23', 'Essential Admin', 'admin@gmail.com', '888800000000', 'Test', 'unread', '2024-08-29 11:14:05', '2024-08-29 11:14:05'),
(10, 21, '23', 'Essential Admin', 'admin@gmail.com', '02223333', 'Test', 'unread', '2024-08-29 11:14:56', '2024-08-29 11:14:56'),
(11, 21, '23', 'Essential Admin', 'admin@gmail.com', '090456677888', 'Test 3', 'unread', '2024-08-29 11:16:03', '2024-08-29 11:16:03'),
(12, 21, '23', 'Essential Admin', 'admin@gmail.com', '090000000', 'Test 4', 'unread', '2024-08-29 11:17:20', '2024-08-29 11:17:20'),
(13, 21, '23', 'Essential Admin', 'admin@gmail.com', '07012345555', 'Test5', 'unread', '2024-08-29 11:18:03', '2024-08-29 11:18:03'),
(14, 21, '23', 'Essential Admin', 'admin@gmail.com', '080345552112', 'Test 6', 'unread', '2024-08-29 11:20:14', '2024-08-29 11:20:14'),
(15, 21, '23', 'Essential Admin', 'admin@gmail.com', '0902232112', 'Test 7', 'unread', '2024-08-29 11:21:30', '2024-08-29 11:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `property_code` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `landlord` text NOT NULL,
  `furnishing` varchar(255) NOT NULL,
  `type_id` bigint(20) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `toilets` int(11) NOT NULL,
  `auction` enum('Yes','No') NOT NULL DEFAULT 'No',
  `deal` enum('Yes','No') NOT NULL DEFAULT 'No',
  `description` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `localty` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `C_of_O` enum('Yes','No') NOT NULL DEFAULT 'No',
  `installment` enum('Yes','No') NOT NULL DEFAULT 'No',
  `survey_plan` enum('Yes','No') NOT NULL DEFAULT 'No',
  `deed_of_ass` enum('Yes','No') NOT NULL DEFAULT 'No',
  `grant_of_prob` enum('Yes','No') NOT NULL DEFAULT 'No',
  `deed_of_mort` enum('Yes','No') NOT NULL DEFAULT 'No',
  `deed_of_gift` enum('Yes','No') NOT NULL DEFAULT 'No',
  `property_doc` enum('Yes','No') NOT NULL DEFAULT 'No',
  `land_receipt` enum('Yes','No') NOT NULL DEFAULT 'No',
  `featured` enum('Yes','No') NOT NULL DEFAULT 'No',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `agent_id`, `property_code`, `title`, `thumbnail`, `landlord`, `furnishing`, `type_id`, `status`, `bedrooms`, `bathrooms`, `toilets`, `auction`, `deal`, `description`, `state`, `localty`, `area`, `street`, `C_of_O`, `installment`, `survey_plan`, `deed_of_ass`, `grant_of_prob`, `deed_of_mort`, `deed_of_gift`, `property_doc`, `land_receipt`, `featured`, `created_at`, `updated_at`) VALUES
(1, 15, 'EP6', '3 Bedroom Apartment', 'assets/frontend/property/thumbnail/1800420039830852.jpg', 'No', 'Yes', 2, 'Rent', 2, 3, 3, 'Yes', 'No', 'The house is very appealing and well furnished for your convenience', 'Lagos', 'Mainland, Lagos', 'Ikeja', '19,Toyin Street, Ikeja, Lagos', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'No', 'Yes', '2024-05-29 19:25:50', '2024-12-24 16:28:40'),
(2, 23, 'EP7', 'Multi Tenant Mall at Ajah', 'assets/frontend/property/thumbnail/1800422273928130.jpg', 'No', 'Yes', 8, 'Sold', 5, 4, 4, 'No', 'No', 'A very good mall for multi tenant.  It also has provision for quality water supply, reliable and constant power supply and maximum security is guaranteed.', 'Lagos', 'Island, Lagos', 'Ajah', '25, Anikulapo crescent, Lekki-Ajah,Lagos', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'Yes', '2024-05-29 20:01:21', '2024-12-24 16:30:21'),
(3, 24, 'EP3', '4 Bedroom Apartment', 'assets/frontend/property/thumbnail/1800422901276785.jpeg', 'No', 'No', 3, 'Rent', 7, 3, 3, 'Yes', 'No', 'Very good apartment with an affordable price and comfortable also.', 'Lagos', 'Island, Lagos', 'Ajah', '25, Anikulapo crescent, Lekki-Ajah,Lagos', 'No', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', '2024-05-29 20:11:19', '2024-05-29 20:11:19'),
(5, 24, 'EP9', '2 Bedroom Duplex at Green Land Estate', 'assets/frontend/property/thumbnail/1802561311014421.jpg', 'Yes', 'No', 4, 'Sale', 2, 3, 2, 'Yes', 'Yes', 'This property is in a very good condition and legally purchased from the Federal Ministry of Land and Housing. The proper documents are readily available upon payment completion', 'Lagos', 'Abule-Odu,Alimosho.', 'Alimosho.', '25, Anikulapo crescent, Lekki-Ajah,Lagos', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '2024-06-22 10:40:26', '2024-12-24 16:30:53'),
(26, 18, 'EP9359', 'Veritatis aut eum cupiditate quae.', 'https://picsum.photos/800/600?random=772', 'Yes', 'No', 1, 'Sale', 8, 1, 2, 'No', 'No', 'Recusandae provident aut sit qui.', 'Lagos', 'West Dan', 'Secretariat', '967 Graham Mews', 'No', 'Yes', 'Yes', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'No', '2024-09-14 16:04:24', '2024-12-24 17:01:50'),
(27, 21, 'EP9921', 'Alias non nihil delectus atque eius delectus nulla cupiditate.', 'https://picsum.photos/800/600?random=320', 'Yes', 'Yes', 18, 'Let', 4, 2, 6, 'No', 'No', 'Debitis ea voluptatum libero voluptatum est dicta.', 'Lagos', 'Ornchester', 'Alloy Plaza', '40300 Ritchie Locks', 'No', 'Yes', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', '2024-12-30 21:01:37', '2024-06-23 20:05:22'),
(28, 21, 'EP9400', 'Sunt aspernatur animi veniam.', 'https://picsum.photos/800/600?random=458', 'Yes', 'No', 15, 'Let', 8, 8, 8, 'No', 'No', 'Iusto consequuntur delectus et eos beatae quos cum at.', 'Kaduna', 'New Trevor', 'Alloy Plaza', '360 Heller Branch Apt. 890', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'No', 'Yes', 'No', '2024-11-05 20:07:29', '2024-12-24 17:01:46'),
(29, 15, 'EP9969', 'Voluptatem impedit totam vel.', 'https://picsum.photos/800/600?random=401', 'Yes', 'Yes', 18, 'Sale', 1, 2, 8, 'No', 'No', 'Sit saepe quis blanditiis.', 'Lagos', 'West Giovanni', 'Mr Biggs Eatery', '109 Jeremie Springs', 'No', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', '2024-08-12 05:43:56', '2024-06-23 20:05:22'),
(30, 21, 'EP9184', 'Et voluptas tenetur consequatur pariatur dolor vero sed.', 'https://picsum.photos/800/600?random=376', 'Yes', 'Yes', 6, 'Sale', 3, 3, 2, 'No', 'No', 'Quas rerum eos reprehenderit unde et.', 'Kaduna', 'Freidaside', 'Shopping Mall', '76429 Amir Station', 'No', 'No', 'Yes', 'No', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', '2024-11-07 15:36:43', '2024-12-24 17:02:10'),
(31, 15, 'EP9641', 'Et impedit magnam laborum et et veniam.', 'https://picsum.photos/800/600?random=410', 'Yes', 'No', 10, 'Let', 8, 5, 9, 'No', 'No', 'Odit est sit sit natus deleniti nesciunt.', 'Lagos', 'Rippinfort', 'Alloy Plaza', '12845 Adelia Ways', 'No', 'Yes', 'No', 'Yes', 'No', 'No', 'Yes', 'Yes', 'No', 'No', '2024-09-05 20:01:33', '2024-06-23 20:05:22'),
(32, 21, 'EP9922', 'Sit aut est debitis dolorum voluptatem.', 'https://picsum.photos/800/600?random=722', 'Yes', 'No', 3, 'Let', 4, 1, 2, 'No', 'No', 'Dolor suscipit eaque praesentium.', 'Kaduna', 'Port Coopertown', 'Mr Biggs Eatery', '1347 Willie Throughway', 'No', 'Yes', 'No', 'No', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', '2024-11-21 04:55:19', '2024-06-23 20:05:22'),
(33, 23, 'EP9301', 'Deleniti voluptas fugiat et animi sed repellendus.', 'https://picsum.photos/800/600?random=558', 'Yes', 'Yes', 11, 'Let', 5, 5, 2, 'No', 'No', 'Et ab veniam error minus.', 'Enugu', 'Ewaldhaven', 'Mr Biggs Eatery', '955 Giles Radial Suite 730', 'Yes', 'No', 'No', 'Yes', 'No', 'No', 'Yes', 'Yes', 'Yes', 'No', '2024-07-10 10:33:00', '2024-06-23 20:05:22'),
(34, 15, 'EP9775', 'Atque quia fugiat delealiquam hic.', 'https://picsum.photos/800/600?random=225', 'Yes', 'Yes', 6, 'Let', 2, 5, 2, 'No', 'No', 'Quis explicabo quod quo voluptas.', 'Lagos', 'Lake Consuelo', 'Alloy Plaza', '7629 Wilbert Ferry Suite 159', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'No', 'No', '2024-08-13 07:31:37', '2024-06-23 20:05:22'),
(35, 23, 'EP9574', 'Sunt et qui vitae id et qui.', 'https://picsum.photos/800/600?random=534', 'Yes', 'No', 4, 'Let', 2, 9, 9, 'No', 'No', 'Placeat neque quis fugiat voluptatem est vel enim.', 'Oyo', 'Lake Devanteview', 'Mr Biggs Eatery', '81613 Martin Mountains Apt. 288', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'No', 'No', '2024-07-13 17:43:25', '2024-06-23 20:05:22'),
(38, 24, 'EP9', '4 Bedroom Flat at Ajanikoko Estate, Isolo.', 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724358703/e-properties/properties/thumbnail/v9qtcghumxqlqqospq0l.jpg', 'No', 'No', 1, 'Rent', 4, 3, 2, 'No', 'No', 'This is a house that is comfortable and situated in a very good environment. It has a lot of benefit just staying there.', 'Lagos', 'Mainland, Lagos', 'Isolo', 'Aruna Ikukoyi Road, Isolo Lagos.', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '2024-08-22 19:31:44', '2024-08-22 19:31:44'),
(40, 21, 'EP9', 'Mini Flat at Gateway Garden, Ewekoro', 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724773322/e-properties/properties/thumbnail/hfqblzlc0rbvprf2ykm5.jpg', 'No', 'No', 4, 'Sale', 2, 2, 2, 'Yes', 'No', 'It\'s a nice apartment in the neighbourhood. The coompound is also very neat and with constant power.', 'Ogun', 'Ewekoro', 'Ajagba', '23, Adejobi Ogog close, Ajagba,Ewekoro.', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'No', '2024-08-27 14:42:06', '2024-08-27 14:42:06'),
(41, 1, 'EP6', 'Officia explicabo rerum mollitia.', 'assets/images/houses/residential/house2.jpg', 'Mr. Jonathan Johnson', 'No', 3, 'Let', 4, 3, 3, 'Yes', 'No', 'Molestiae error laudantium sunt ut. Aliquam adipisci illum nihil odio et reprehenderit. Adipisci commodi quod ut eos provident aspernatur ut. Animi consequatur aut aut voluptates ipsa.', 'Idaho', 'West Vivienne', 'town', '51923 Nona Ridge', 'Yes', 'Yes', 'Yes', 'No', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', '2024-12-23 09:22:28', '2024-12-23 09:22:28'),
(42, 1, 'EP0', 'Autem ad qui.', 'assets/images/houses/residential/house3.jpg', 'Vickie Ruecker', 'Yes', 2, 'Sold', 4, 1, 3, 'Yes', 'No', 'Nihil aut saepe ex est alias inventore omnis. Sequi expedita qui quisquam officia. Et quas quia similique.', 'Arkansas', 'Port Faymouth', 'bury', '208 Antonetta Ford Suite 299', 'No', 'Yes', 'Yes', 'No', 'No', 'Yes', 'Yes', 'No', 'No', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(43, 1, 'EP9223372036854775807', 'Molestiae possimus fuga.', 'assets/images/houses/residential/house4.jpg', 'Kayla Gulgowski', 'Yes', 2, 'Sold', 5, 2, 3, 'Yes', 'No', 'Accusamus itaque et quia cum facilis suscipit. Velit quisquam blanditiis voluptatem in veritatis aut. Minima corrupti magnam in assumenda unde qui accusantium.', 'Michigan', 'West Sheaville', 'town', '8708 Lowell Shore Apt. 737', 'No', 'Yes', 'No', 'No', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(44, 1, 'EP904837', 'Consequatur et sed omnis.', 'assets/images/houses/residential/house5.jpg', 'Carmela Schultz', 'Yes', 2, 'Sold', 4, 3, 4, 'Yes', 'No', 'Ipsum laborum perferendis voluptas repudiandae. Modi qui doloribus ea quam quae optio. Et cupiditate sit sit. Iusto cupiditate eligendi natus et distinctio expedita alias.', 'Oregon', 'New Kobeburgh', 'side', '3667 Pollich Ridge Suite 725', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(45, 1, 'EP33', 'Rerum ullam.', 'assets/images/houses/residential/house6.jpg', 'Mrs. Elenora Runte Sr.', 'Yes', 3, 'Let', 4, 3, 1, 'No', 'Yes', 'Qui nemo error odit dolore ut repellendus. Quaerat fuga odio sint magnam facilis consequatur. Et assumenda officiis reprehenderit et sunt qui.', 'Missouri', 'Port Linwood', 'mouth', '593 Mckayla Tunnel', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'Yes', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(46, 1, 'EP9', 'Quidem eos.', 'assets/images/houses/residential/house7.jpg', 'Noel Koch', 'No', 2, 'Rent', 1, 2, 4, 'No', 'Yes', 'Quisquam sequi quia dignissimos voluptatem eum error. Facilis corporis ut molestiae totam quos dolores itaque. Aut dolores laudantium sit quia nobis ullam omnis.', 'Missouri', 'Araceliborough', 'burgh', '8436 Bergstrom Junctions Suite 616', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'Yes', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(47, 1, 'EP0', 'Tempora est quis.', 'assets/images/houses/residential/house8.jpg', 'Lenore Considine', 'No', 3, 'Rent', 1, 3, 2, 'No', 'Yes', 'Possimus voluptatibus nesciunt voluptatem. Voluptatem et nisi qui vel. Debitis deleniti et delectus numquam exercitationem. Enim beatae ullam blanditiis excepturi sint natus nihil.', 'Delaware', 'North Merritt', 'mouth', '941 Emmanuel Island', 'No', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(48, 1, 'EP8', 'Nihil sed accusamus sapiente.', 'assets/images/houses/residential/house9.jpg', 'Hosea Johns DDS', 'Yes', 5, 'Sale', 2, 3, 1, 'No', 'No', 'Minima adipisci qui et magni odit adipisci quaerat. Explicabo voluptatem voluptatum est sed aut ab qui. Dolorum occaecati doloribus eaque non occaecati.', 'Virginia', 'Walkerberg', 'port', '8138 Bailey Grove Suite 255', 'Yes', 'No', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(49, 1, 'EP1513', 'Esse possimus reiciendis veniam.', 'assets/images/houses/residential/house10.jpg', 'Tre Kiehn', 'No', 4, 'Rent', 5, 4, 2, 'No', 'No', 'Sapiente rem quo omnis aut et occaecati minus. Voluptas asperiores officia repellat et quas ea.', 'Minnesota', 'Lake Dwight', 'bury', '71271 Eryn Throughway', 'Yes', 'No', 'Yes', 'No', 'No', 'Yes', 'Yes', 'Yes', 'No', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(50, 1, 'EP0', 'Sit perspiciatis earum.', 'assets/images/houses/residential/house11.jpg', 'Tyshawn Borer MD', 'No', 3, 'Rent', 5, 2, 1, 'No', 'No', 'Consequatur exercitationem non ea nulla. Quas iste nihil minus illo est est autem. Non deserunt reiciendis deleniti quasi soluta. Commodi blanditiis ratione et qui ipsum at qui eligendi. Velit distinctio officiis sunt saepe.', 'North Carolina', 'East Jimmiechester', 'furt', '77748 Renner Plaza Apt. 082', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(51, 1, 'EP517', 'Culpa nulla et.', 'assets/images/houses/residential/house12.jpg', 'Prof. Howell Balistreri Jr.', 'Yes', 3, 'Sold', 2, 3, 4, 'No', 'No', 'In porro officia omnis quisquam aliquid. Reiciendis soluta praesentium temporibus incidunt est. Aliquam soluta velit provident qui voluptatibus voluptates.', 'Indiana', 'Ambrosemouth', 'view', '493 Hollis Skyway', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(52, 1, 'EP32', 'In aliquam architecto quo.', 'assets/images/houses/residential/house13.jpg', 'Mr. Sigmund Walsh IV', 'No', 3, 'Sale', 3, 1, 4, 'No', 'No', 'Soluta distinctio nihil rerum voluptas harum occaecati magnam. Sit qui aliquid porro ut. Est totam odit rerum quasi. Molestiae beatae inventore ducimus suscipit expedita quis.', 'Rhode Island', 'New Francohaven', 'borough', '8937 Ebert Glens Suite 073', 'Yes', 'No', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(53, 1, 'EP9223372036854775807', 'Ut illum non.', 'assets/images/houses/residential/house14.jpg', 'Rae Luettgen', 'No', 4, 'Sold', 3, 4, 2, 'No', 'No', 'Aliquid commodi odit corporis. Et ut est rem quam vitae officia fuga. Aperiam soluta commodi sint deserunt.', 'West Virginia', 'West Noemie', 'port', '31522 Bernita Course', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(54, 1, 'EP6', 'Nostrum quos rerum ipsa laborum.', 'assets/images/houses/residential/house15.jpg', 'Prof. Dexter Robel II', 'Yes', 5, 'Sold', 5, 1, 4, 'No', 'No', 'Provident laborum eos odio. Ratione exercitationem atque harum aspernatur. Nemo ipsa non voluptatem est.', 'Hawaii', 'East Alibury', 'shire', '43210 Wunsch Keys', 'Yes', 'No', 'No', 'Yes', 'No', 'No', 'Yes', 'Yes', 'Yes', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(55, 1, 'EP3', 'Est quia molestiae dolor.', 'assets/images/houses/residential/house16.jpg', 'Shea Keeling', 'No', 1, 'Rent', 3, 3, 3, 'No', 'No', 'Dolorum quidem rerum et. Atque rerum animi ut nihil rerum. Molestias ut non quia odit. Minus sed voluptatem nihil autem veritatis velit est.', 'New York', 'Edisontown', 'furt', '2225 Schmeler Throughway', 'No', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(56, 1, 'EP5', 'Delectus praesentium debitis natus.', 'assets/images/houses/residential/house1.jpg', 'Miss Herta Glover I', 'Yes', 5, 'Rent', 5, 4, 4, 'No', 'No', 'Qui provident laborum consequatur pariatur fugit quam eligendi. Dolor quas sequi laborum est aut cupiditate. Et porro cum vel voluptate.', 'Louisiana', 'West Delaneyborough', 'mouth', '96501 Vandervort Pines Suite 295', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(57, 1, 'EP0', 'Eveniet molestias voluptas.', 'assets/images/houses/residential/house2.jpg', 'Lawson Konopelski', 'Yes', 4, 'Sale', 1, 1, 3, 'No', 'No', 'Nisi numquam vitae consequuntur labore quisquam. Quod quos illo ut nostrum est eum ea aut. Fugit quis architecto qui rerum.', 'Arizona', 'Brockland', 'ville', '88371 Lew Divide', 'No', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(58, 1, 'EP0', 'Quam provident illo voluptatem.', 'assets/images/houses/residential/house3.jpg', 'Dr. Rico Terry Jr.', 'No', 2, 'Rent', 2, 1, 4, 'No', 'No', 'Ratione incidunt placeat eligendi assumenda quisquam. Eos fuga sit corporis dolor. Temporibus reiciendis aut cum modi praesentium nobis.', 'Indiana', 'Pollichmouth', 'bury', '6810 Braun View Suite 192', 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(59, 1, 'EP0', 'Culpa quae.', 'assets/images/houses/residential/house4.jpg', 'Grayce Denesik', 'No', 5, 'Sale', 5, 4, 2, 'No', 'No', 'Accusamus dolor magni pariatur itaque ut. Repellat assumenda enim voluptas velit. Occaecati consequatur corporis eos et id cum aut voluptatibus. Et ipsam iure vero consequuntur blanditiis unde distinctio voluptas.', 'Maryland', 'Howeport', 'shire', '359 Roy Center Apt. 867', 'No', 'No', 'Yes', 'Yes', 'No', 'No', 'Yes', 'No', 'No', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(60, 1, 'EP700000', 'Aut sed voluptatem provident.', 'assets/images/houses/residential/house5.jpg', 'Prof. Lacey Hermiston', 'No', 3, 'Sale', 1, 3, 1, 'No', 'No', 'Velit eos et voluptatem. Sed sed eaque dolor quam quas recusandae est enim. Deleniti sed reiciendis ullam.', 'Maine', 'Wisokyburgh', 'stad', '208 Nienow Courts Suite 977', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', 'No', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(61, 1, 'EP577144', 'Ullam non ipsum.', 'assets/images/houses/residential/house2.jpg', 'Enola Wisoky', 'No', 3, 'Rent', 5, 1, 3, 'Yes', 'No', 'Et officia expedita quibusdam et voluptates modi. Quis explicabo itaque consequuntur quis illo. Sapiente eaque vero incidunt corporis earum quae. Est et temporibus quos. Aliquid suscipit voluptate sed eveniet.', 'Idaho', 'McLaughlintown', 'ville', '743 Dallin Hollow', 'No', 'No', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(62, 1, 'EP0', 'Quam unde dolore cum.', 'assets/images/houses/residential/house3.jpg', 'Skyla Mills', 'No', 4, 'Rent', 4, 3, 2, 'Yes', 'No', 'Corrupti maxime et ut quia veniam voluptas minus. Atque illum facilis hic. Molestiae velit et possimus consequuntur hic amet rerum.', 'Kansas', 'East Cornellport', 'land', '687 Oswaldo Loop', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(63, 1, 'EP9', 'Soluta aut molestiae.', 'assets/images/houses/residential/house4.jpg', 'Princess Fahey', 'Yes', 4, 'Rent', 3, 3, 2, 'Yes', 'No', 'Eius qui non tempore quae. Maiores minima non excepturi ullam aut aliquam et. Illum aspernatur id et sint provident dolore dolorum. Labore ut sit molestiae tenetur.', 'Hawaii', 'Garryfort', 'view', '887 Dibbert Meadows Apt. 348', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(64, 1, 'EP2', 'Molestias qui sed.', 'assets/images/houses/residential/house5.jpg', 'Prof. Ike Tromp Jr.', 'Yes', 1, 'Sale', 1, 4, 4, 'Yes', 'No', 'Dolore odit ut commodi velit ab non. Vero totam sunt et placeat. Perspiciatis sit voluptate veniam fugit. Incidunt voluptatem et sit consequatur laborum.', 'Oklahoma', 'South Imeldashire', 'berg', '25514 Blick Road', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'Yes', 'No', 'Yes', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(65, 1, 'EP0', 'Magnam qui voluptas.', 'assets/images/houses/residential/house6.jpg', 'Favian Schmidt', 'Yes', 1, 'Sale', 3, 1, 3, 'No', 'Yes', 'Aspernatur quisquam natus occaecati voluptatem placeat. Ipsum ipsa omnis dolorum minus maiores. Fugiat est voluptatem voluptatum eius et. Itaque esse suscipit ipsam alias.', 'Minnesota', 'Lake Anastacioton', 'ton', '93870 Kassulke Stravenue', 'No', 'No', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'Yes', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(66, 1, 'EP0', 'Illo repudiandae rerum labore.', 'assets/images/houses/residential/house7.jpg', 'Fredy Roob', 'No', 4, 'Rent', 3, 4, 4, 'No', 'Yes', 'Veritatis et laudantium sed ex. Iure aut tempore ut voluptatem at et. Unde magnam dicta omnis sunt in vel sed. Dolor esse earum maxime.', 'Oregon', 'North Vidaland', 'borough', '26529 Dion Village Apt. 064', 'No', 'No', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(67, 1, 'EP6', 'Consequatur et veritatis eos.', 'assets/images/houses/residential/house8.jpg', 'Ms. Natalia Bayer MD', 'Yes', 2, 'Rent', 5, 4, 3, 'No', 'Yes', 'Fuga voluptatem impedit itaque laudantium et. Autem quae maxime reprehenderit placeat molestiae. Voluptate est eum omnis non illum.', 'Massachusetts', 'New Piper', 'land', '94528 Koch Pine Apt. 968', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(68, 1, 'EP919', 'In qui consequatur.', 'assets/images/houses/residential/house9.jpg', 'Mohammed Turcotte', 'Yes', 2, 'Sale', 3, 3, 3, 'No', 'No', 'Porro quasi qui et vero ut rerum consequatur. Sint voluptas rerum nihil consequatur laudantium odio ut voluptatibus. Suscipit aliquid eum temporibus id illum enim. Possimus doloribus dolore enim assumenda necessitatibus deleniti ab.', 'Michigan', 'West Denaville', 'land', '4795 Damien Pass', 'Yes', 'No', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(69, 1, 'EP974', 'Eaque placeat modi delectus.', 'assets/images/houses/residential/house10.jpg', 'Prof. Anita Emmerich I', 'No', 1, 'Rent', 2, 2, 2, 'No', 'No', 'Natus possimus ut dolorem modi. Aspernatur ut architecto eligendi et ex nihil beatae. Et praesentium molestiae corrupti perspiciatis.', 'New Hampshire', 'Pearlville', 'bury', '672 Wilderman Squares Suite 212', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(70, 1, 'EP452103', 'Veniam expedita itaque.', 'assets/images/houses/residential/house11.jpg', 'Prof. Timmy Johns II', 'Yes', 2, 'Sale', 4, 3, 4, 'No', 'No', 'Saepe aut eum iure ea fugit at blanditiis iste. Cupiditate tempore officiis cumque in sequi. Error velit eum accusamus quia. Sint ducimus cum maiores quia labore. Aut et distinctio et et.', 'Idaho', 'New Verdaburgh', 'borough', '6914 Jenkins Land', 'Yes', 'No', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(71, 1, 'EP37', 'Aliquid laudantium necessitatibus.', 'assets/images/houses/residential/house12.jpg', 'Melissa Mohr', 'Yes', 4, 'Sale', 1, 4, 4, 'No', 'No', 'Officiis quis et ipsa voluptatem natus in. Omnis minima consequuntur et nam dicta quam.', 'Hawaii', 'Nikohaven', 'side', '43801 Ardith Point', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'Yes', 'No', 'No', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(72, 1, 'EP1473', 'Hic temporibus et.', 'assets/images/houses/residential/house13.jpg', 'Mrs. Lyla Kautzer DVM', 'No', 3, 'Let', 3, 1, 4, 'No', 'No', 'Enim modi sed nesciunt consequatur commodi ducimus voluptates aliquam. Blanditiis quasi nam molestiae nesciunt voluptates ut non. Consequatur dolorem quo tempore.', 'Ohio', 'Isaistad', 'borough', '1409 Kilback Viaduct Suite 268', 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(73, 1, 'EP1', 'Cumque modi recusandae consequatur ut.', 'assets/images/houses/residential/house14.jpg', 'Lydia Murazik', 'No', 4, 'Rent', 4, 1, 3, 'No', 'No', 'Dignissimos provident animi in autem mollitia eveniet tenetur. Vel fugit voluptatum assumenda magni porro et quis. Quibusdam ipsa nihil aut. Vel libero minus odio esse nobis minus tenetur.', 'New York', 'Port Aglaebury', 'land', '236 Cathy Ridges', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(74, 1, 'EP6', 'Corporis laboriosam laboriosam suscipit.', 'assets/images/houses/residential/house15.jpg', 'Violet Willms', 'No', 4, 'Sale', 1, 2, 3, 'No', 'No', 'Rem inventore nesciunt qui quis est commodi vero. Quidem dolorem saepe culpa illo. Natus quasi dolore laudantium autem delectus optio. Iusto sit rerum nisi.', 'Alabama', 'East Granthaven', 'shire', '8651 Seth Common Apt. 091', 'No', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'No', 'Yes', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(75, 1, 'EP43', 'Maiores ea ut.', 'assets/images/houses/residential/house16.jpg', 'Eveline Lubowitz', 'No', 5, 'Sale', 4, 4, 4, 'No', 'No', 'Ut voluptatem impedit sed in quos. Occaecati magnam earum consequatur eos sed reiciendis est quo. Est dolores nisi quia ipsam est incidunt.', 'South Carolina', 'Lynchburgh', 'shire', '1497 Jana Mountain', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'Yes', 'Yes', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(76, 1, 'EP2109', 'Quas minus et aut.', 'assets/images/houses/residential/house1.jpg', 'German O\'Hara', 'No', 2, 'Rent', 3, 1, 2, 'No', 'No', 'Voluptatibus quisquam voluptas sit fugiat aut. Mollitia autem magnam omnis. Dolores impedit labore error aut dolore provident ipsum.', 'North Dakota', 'New Glennie', 'burgh', '9196 Goyette Prairie', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(77, 1, 'EP70', 'Molestiae et sunt blanditiis.', 'assets/images/houses/residential/house2.jpg', 'Prof. Mekhi Anderson PhD', 'Yes', 3, 'Rent', 5, 3, 3, 'No', 'No', 'Quis nobis laboriosam magni voluptatem minus. Sint ea debitis officia. Dolores mollitia nobis aspernatur corporis.', 'Maine', 'Daughertymouth', 'bury', '27823 Carlie Via', 'Yes', 'No', 'No', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(78, 1, 'EP87', 'Quis ut.', 'assets/images/houses/residential/house3.jpg', 'Elmo Sporer', 'Yes', 4, 'Let', 3, 2, 2, 'No', 'No', 'Exercitationem saepe quia unde ipsum ut sunt. Magnam exercitationem eos at voluptas voluptatibus iusto. Excepturi sed temporibus qui veritatis praesentium perspiciatis minima. Suscipit omnis minima maxime iusto.', 'Georgia', 'South Millie', 'berg', '4982 Fae Overpass Apt. 572', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(79, 1, 'EP0', 'Sit enim dolor tempora.', 'assets/images/houses/residential/house4.jpg', 'Prof. Wilhelm Conn PhD', 'Yes', 1, 'Let', 3, 3, 4, 'No', 'No', 'Dolores est omnis consequatur officia minus aliquid voluptates. Iusto natus modi animi perspiciatis. Ipsum natus consequatur ipsa rerum. Et et incidunt vel possimus.', 'Illinois', 'Lake Isadoremouth', 'side', '20501 Romaguera Shoals Suite 868', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', 'Yes', 'No', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(80, 1, 'EP75', 'Eum dignissimos vel et.', 'assets/images/houses/residential/house5.jpg', 'Jerrod Harris', 'Yes', 2, 'Sold', 2, 3, 1, 'No', 'No', 'Vero aliquid totam nihil ut voluptatem perspiciatis. Natus nihil voluptate sit non dolorem. Voluptate harum autem explicabo voluptatum eaque. Consequatur quos totam placeat magnam unde eius eum provident.', 'Wyoming', 'Elizashire', 'furt', '233 Henriette Terrace', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', '2024-12-23 09:22:31', '2024-12-23 09:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `property_amenities`
--

CREATE TABLE `property_amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `amenities` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_amenities`
--

INSERT INTO `property_amenities` (`id`, `property_id`, `amenities`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/frontend/property/amenities/1800420039936994.jpg', '2024-05-29 19:25:50', NULL),
(2, 1, 'assets/frontend/property/amenities/1800420040060545.jpg', '2024-05-29 19:25:51', NULL),
(3, 1, 'assets/frontend/property/amenities/1800420040219632.jpg', '2024-05-29 19:25:51', NULL),
(4, 1, 'assets/frontend/property/amenities/1800420040336076.jpg', '2024-05-29 19:25:51', NULL),
(5, 2, 'assets/frontend/property/amenities/1800422274117919.jpeg', '2024-05-29 20:01:21', NULL),
(6, 2, 'assets/frontend/property/amenities/1800422274272188.jpg', '2024-05-29 20:01:21', NULL),
(7, 2, 'assets/frontend/property/amenities/1800422274502423.jpg', '2024-05-29 20:01:22', NULL),
(8, 2, 'assets/frontend/property/amenities/1800422274699648.jpeg', '2024-05-29 20:01:22', NULL),
(9, 3, 'assets/frontend/property/amenities/1800422901503745.jpeg', '2024-05-29 20:11:20', NULL),
(10, 3, 'assets/frontend/property/amenities/1800422901744901.jpeg', '2024-05-29 20:11:20', NULL),
(11, 3, 'assets/frontend/property/amenities/1800422901867215.jpeg', '2024-05-29 20:11:20', NULL),
(12, 3, 'assets/frontend/property/amenities/1800422901973196.jpeg', '2024-05-29 20:11:20', NULL),
(17, 5, 'assets/frontend/property/amenities/1802561311195925.jpg', '2024-06-22 10:40:26', NULL),
(18, 5, 'assets/frontend/property/amenities/1802561311314677.jpg', '2024-06-22 10:40:26', NULL),
(19, 5, 'assets/frontend/property/amenities/1802561311448120.jpg', '2024-06-22 10:40:26', NULL),
(20, 5, 'assets/frontend/property/amenities/1802561311800600.jpg', '2024-06-22 10:40:27', NULL),
(25, 38, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724358706/e-properties/properties/amenities/xtexlcbgrlddiju6qzfn.jpg', '2024-08-22 19:31:46', '2024-08-22 19:31:46'),
(26, 38, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724358708/e-properties/properties/amenities/ti5t9dlntnquy5zaukjb.jpg', '2024-08-22 19:31:49', '2024-08-22 19:31:49'),
(27, 38, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724358711/e-properties/properties/amenities/pucfrm1us0rirrgibvhz.jpg', '2024-08-22 19:31:52', '2024-08-22 19:31:52'),
(28, 38, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724358714/e-properties/properties/amenities/vqgs39h3orhfxaozsccq.jpg', '2024-08-22 19:31:54', '2024-08-22 19:31:54'),
(29, 39, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724359513/e-properties/properties/amenities/cqucnxzijuwnpzq6fjo7.jpg', '2024-08-22 19:45:14', '2024-08-22 19:45:14'),
(30, 39, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724359516/e-properties/properties/amenities/tj8qm7rsxw34x89d964l.jpg', '2024-08-22 19:45:17', '2024-08-22 19:45:17'),
(31, 39, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724359519/e-properties/properties/amenities/fbgb6pgyaabriu4uyclz.jpg', '2024-08-22 19:45:19', '2024-08-22 19:45:19'),
(32, 39, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724359521/e-properties/properties/amenities/ypa1cqcdr3f0pv3ysvhe.jpg', '2024-08-22 19:45:24', '2024-08-22 19:45:24'),
(33, 40, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724773328/e-properties/properties/amenities/mh3hqefrfsoskab3vrfx.png', '2024-08-27 14:42:09', '2024-08-27 14:42:09'),
(34, 40, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724773331/e-properties/properties/amenities/zhjuteoc5tlh6na8clp7.png', '2024-08-27 14:42:11', '2024-08-27 14:42:11'),
(35, 40, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724773333/e-properties/properties/amenities/dyugdksixiftlif3vy26.png', '2024-08-27 14:42:14', '2024-08-27 14:42:14'),
(36, 40, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724773335/e-properties/properties/amenities/posxpkc2nfvxgpwd7du9.png', '2024-08-27 14:42:16', '2024-08-27 14:42:16'),
(37, 41, 'assets/images/houses/amenities/amenity14.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(38, 41, 'assets/images/houses/amenities/amenity9.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(39, 41, 'assets/images/houses/amenities/amenity10.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(40, 41, 'assets/images/houses/amenities/amenity12.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(41, 42, 'assets/images/houses/amenities/amenity18.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(42, 42, 'assets/images/houses/amenities/amenity13.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(43, 42, 'assets/images/houses/amenities/amenity4.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(44, 42, 'assets/images/houses/amenities/amenity19.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(45, 43, 'assets/images/houses/amenities/amenity15.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(46, 43, 'assets/images/houses/amenities/amenity22.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(47, 43, 'assets/images/houses/amenities/amenity19.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(48, 43, 'assets/images/houses/amenities/amenity21.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(49, 44, 'assets/images/houses/amenities/amenity19.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(50, 44, 'assets/images/houses/amenities/amenity13.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(51, 44, 'assets/images/houses/amenities/amenity23.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(52, 44, 'assets/images/houses/amenities/amenity12.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(53, 45, 'assets/images/houses/amenities/amenity23.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(54, 45, 'assets/images/houses/amenities/amenity20.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(55, 45, 'assets/images/houses/amenities/amenity21.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(56, 45, 'assets/images/houses/amenities/amenity1.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(57, 46, 'assets/images/houses/amenities/amenity7.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(58, 46, 'assets/images/houses/amenities/amenity20.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(59, 46, 'assets/images/houses/amenities/amenity14.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(60, 46, 'assets/images/houses/amenities/amenity21.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(61, 47, 'assets/images/houses/amenities/amenity3.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(62, 47, 'assets/images/houses/amenities/amenity10.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(63, 47, 'assets/images/houses/amenities/amenity17.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(64, 47, 'assets/images/houses/amenities/amenity22.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(65, 48, 'assets/images/houses/amenities/amenity8.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(66, 48, 'assets/images/houses/amenities/amenity5.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(67, 48, 'assets/images/houses/amenities/amenity20.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(68, 48, 'assets/images/houses/amenities/amenity2.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(69, 49, 'assets/images/houses/amenities/amenity19.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(70, 49, 'assets/images/houses/amenities/amenity20.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(71, 49, 'assets/images/houses/amenities/amenity14.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(72, 49, 'assets/images/houses/amenities/amenity23.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(73, 50, 'assets/images/houses/amenities/amenity22.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(74, 50, 'assets/images/houses/amenities/amenity2.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(75, 50, 'assets/images/houses/amenities/amenity15.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(76, 50, 'assets/images/houses/amenities/amenity12.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(77, 51, 'assets/images/houses/amenities/amenity7.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(78, 51, 'assets/images/houses/amenities/amenity23.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(79, 51, 'assets/images/houses/amenities/amenity12.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(80, 51, 'assets/images/houses/amenities/amenity11.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(81, 52, 'assets/images/houses/amenities/amenity2.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(82, 52, 'assets/images/houses/amenities/amenity6.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(83, 52, 'assets/images/houses/amenities/amenity7.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(84, 52, 'assets/images/houses/amenities/amenity21.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(85, 53, 'assets/images/houses/amenities/amenity3.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(86, 53, 'assets/images/houses/amenities/amenity13.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(87, 53, 'assets/images/houses/amenities/amenity8.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(88, 53, 'assets/images/houses/amenities/amenity18.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(89, 54, 'assets/images/houses/amenities/amenity10.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(90, 54, 'assets/images/houses/amenities/amenity4.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(91, 54, 'assets/images/houses/amenities/amenity12.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(92, 54, 'assets/images/houses/amenities/amenity17.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(93, 55, 'assets/images/houses/amenities/amenity2.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(94, 55, 'assets/images/houses/amenities/amenity17.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(95, 55, 'assets/images/houses/amenities/amenity14.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(96, 55, 'assets/images/houses/amenities/amenity19.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(97, 56, 'assets/images/houses/amenities/amenity18.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(98, 56, 'assets/images/houses/amenities/amenity6.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(99, 56, 'assets/images/houses/amenities/amenity22.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(100, 56, 'assets/images/houses/amenities/amenity4.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(101, 57, 'assets/images/houses/amenities/amenity10.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(102, 57, 'assets/images/houses/amenities/amenity15.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(103, 57, 'assets/images/houses/amenities/amenity21.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(104, 57, 'assets/images/houses/amenities/amenity5.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(105, 58, 'assets/images/houses/amenities/amenity14.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(106, 58, 'assets/images/houses/amenities/amenity16.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(107, 58, 'assets/images/houses/amenities/amenity3.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(108, 58, 'assets/images/houses/amenities/amenity2.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(109, 59, 'assets/images/houses/amenities/amenity9.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(110, 59, 'assets/images/houses/amenities/amenity2.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(111, 59, 'assets/images/houses/amenities/amenity18.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(112, 59, 'assets/images/houses/amenities/amenity21.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(113, 60, 'assets/images/houses/amenities/amenity16.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(114, 60, 'assets/images/houses/amenities/amenity19.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(115, 60, 'assets/images/houses/amenities/amenity13.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(116, 60, 'assets/images/houses/amenities/amenity14.jpg', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(117, 61, 'assets/images/houses/amenities/amenity17.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(118, 61, 'assets/images/houses/amenities/amenity3.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(119, 61, 'assets/images/houses/amenities/amenity20.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(120, 61, 'assets/images/houses/amenities/amenity22.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(121, 62, 'assets/images/houses/amenities/amenity6.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(122, 62, 'assets/images/houses/amenities/amenity16.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(123, 62, 'assets/images/houses/amenities/amenity1.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(124, 62, 'assets/images/houses/amenities/amenity8.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(125, 63, 'assets/images/houses/amenities/amenity4.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(126, 63, 'assets/images/houses/amenities/amenity9.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(127, 63, 'assets/images/houses/amenities/amenity8.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(128, 63, 'assets/images/houses/amenities/amenity18.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(129, 64, 'assets/images/houses/amenities/amenity5.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(130, 64, 'assets/images/houses/amenities/amenity9.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(131, 64, 'assets/images/houses/amenities/amenity20.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(132, 64, 'assets/images/houses/amenities/amenity3.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(133, 65, 'assets/images/houses/amenities/amenity10.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(134, 65, 'assets/images/houses/amenities/amenity16.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(135, 65, 'assets/images/houses/amenities/amenity18.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(136, 65, 'assets/images/houses/amenities/amenity2.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(137, 66, 'assets/images/houses/amenities/amenity5.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(138, 66, 'assets/images/houses/amenities/amenity12.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(139, 66, 'assets/images/houses/amenities/amenity20.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(140, 66, 'assets/images/houses/amenities/amenity18.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(141, 67, 'assets/images/houses/amenities/amenity7.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(142, 67, 'assets/images/houses/amenities/amenity18.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(143, 67, 'assets/images/houses/amenities/amenity9.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(144, 67, 'assets/images/houses/amenities/amenity16.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(145, 68, 'assets/images/houses/amenities/amenity11.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(146, 68, 'assets/images/houses/amenities/amenity2.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(147, 68, 'assets/images/houses/amenities/amenity10.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(148, 68, 'assets/images/houses/amenities/amenity4.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(149, 69, 'assets/images/houses/amenities/amenity5.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(150, 69, 'assets/images/houses/amenities/amenity21.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(151, 69, 'assets/images/houses/amenities/amenity18.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(152, 69, 'assets/images/houses/amenities/amenity1.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(153, 70, 'assets/images/houses/amenities/amenity14.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(154, 70, 'assets/images/houses/amenities/amenity5.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(155, 70, 'assets/images/houses/amenities/amenity20.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(156, 70, 'assets/images/houses/amenities/amenity9.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(157, 71, 'assets/images/houses/amenities/amenity16.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(158, 71, 'assets/images/houses/amenities/amenity10.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(159, 71, 'assets/images/houses/amenities/amenity18.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(160, 71, 'assets/images/houses/amenities/amenity1.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(161, 72, 'assets/images/houses/amenities/amenity23.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(162, 72, 'assets/images/houses/amenities/amenity5.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(163, 72, 'assets/images/houses/amenities/amenity7.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(164, 72, 'assets/images/houses/amenities/amenity6.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(165, 73, 'assets/images/houses/amenities/amenity2.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(166, 73, 'assets/images/houses/amenities/amenity8.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(167, 73, 'assets/images/houses/amenities/amenity22.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(168, 73, 'assets/images/houses/amenities/amenity10.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(169, 74, 'assets/images/houses/amenities/amenity15.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(170, 74, 'assets/images/houses/amenities/amenity5.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(171, 74, 'assets/images/houses/amenities/amenity16.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(172, 74, 'assets/images/houses/amenities/amenity7.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(173, 75, 'assets/images/houses/amenities/amenity17.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(174, 75, 'assets/images/houses/amenities/amenity18.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(175, 75, 'assets/images/houses/amenities/amenity22.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(176, 75, 'assets/images/houses/amenities/amenity3.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(177, 76, 'assets/images/houses/amenities/amenity14.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(178, 76, 'assets/images/houses/amenities/amenity10.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(179, 76, 'assets/images/houses/amenities/amenity3.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(180, 76, 'assets/images/houses/amenities/amenity12.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(181, 77, 'assets/images/houses/amenities/amenity1.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(182, 77, 'assets/images/houses/amenities/amenity7.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(183, 77, 'assets/images/houses/amenities/amenity21.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(184, 77, 'assets/images/houses/amenities/amenity12.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(185, 78, 'assets/images/houses/amenities/amenity15.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(186, 78, 'assets/images/houses/amenities/amenity2.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(187, 78, 'assets/images/houses/amenities/amenity22.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(188, 78, 'assets/images/houses/amenities/amenity10.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(189, 79, 'assets/images/houses/amenities/amenity7.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(190, 79, 'assets/images/houses/amenities/amenity20.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(191, 79, 'assets/images/houses/amenities/amenity13.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(192, 79, 'assets/images/houses/amenities/amenity21.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(193, 80, 'assets/images/houses/amenities/amenity15.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(194, 80, 'assets/images/houses/amenities/amenity8.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(195, 80, 'assets/images/houses/amenities/amenity13.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(196, 80, 'assets/images/houses/amenities/amenity23.jpg', '2024-12-23 09:22:31', '2024-12-23 09:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `property_categories`
--

CREATE TABLE `property_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_categories`
--

INSERT INTO `property_categories` (`id`, `category_name`, `category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Commercial', 'commercial-1', '2024-06-22 00:59:08', '2024-06-22 00:59:08'),
(2, 'Residential', 'residential-2', '2024-06-22 00:59:08', '2024-06-22 00:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `property_deals`
--

CREATE TABLE `property_deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `deal_price` decimal(15,2) NOT NULL,
  `denomination` text NOT NULL,
  `append` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_deals`
--

INSERT INTO `property_deals` (`id`, `property_id`, `start_date`, `start_time`, `end_date`, `end_time`, `deal_price`, `denomination`, `append`, `created_at`, `updated_at`) VALUES
(1, 5, '2024-06-01', '13:35', '2024-07-06', '15:36', 10000000.00, '₦', 'Annually', '2024-06-22 10:40:27', '2024-06-22 10:40:27'),
(2, 1, '2024-06-11', '13:53:22', '2024-09-08', '22:13:53', 5000000.00, '$', 'Monthly', '2024-05-28 14:01:42', '2024-06-20 16:07:16'),
(3, 2, '2024-07-15', '17:18:07', '2024-07-24', '05:47:19', 5000000.00, '$', 'Annually', '2024-06-08 19:49:39', '2024-06-20 06:57:14'),
(4, 27, '2024-06-12', '10:01:15', '2024-09-04', '17:20:18', 5000000.00, '₦', 'Annually', '2024-06-05 02:30:17', '2024-06-04 10:31:58'),
(5, 35, '2024-06-01', '02:56:16', '2024-08-26', '03:24:19', 5000000.00, '₦', 'Monthly', '2024-06-18 16:50:58', '2024-06-04 18:36:22'),
(6, 10, '2024-06-18', '17:22:26', '2024-07-17', '16:48:55', 208801190.41, '₦', 'Monthly', '2024-06-14 04:59:20', '2024-06-14 23:40:00'),
(7, 28, '2024-05-29', '14:26:59', '2024-07-22', '11:44:48', 5000000.00, '₦', 'Annually', '2024-05-31 07:58:25', '2024-06-22 09:26:20'),
(8, 3, '2024-05-29', '12:29:10', '2024-09-08', '21:38:13', 6361189.99, '₦', 'Annually', '2024-05-24 22:17:40', '2024-05-26 18:21:45'),
(9, 34, '2024-07-03', '04:44:15', '2024-07-29', '04:34:22', 78635210.26, '$', 'Annually', '2024-06-19 18:20:08', '2024-05-26 12:58:50'),
(10, 39, '2024-08-01', '22:41', '2024-09-22', '06:41', 3500000.00, '₦', 'Monthly', '2024-08-22 19:45:25', '2024-08-22 19:45:25'),
(11, 45, '2016-02-07', '02:25:16', '1999-12-22', '02:28:18', 479283.00, '₦', 'Annually', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(12, 46, '1978-11-20', '20:28:46', '2024-07-05', '18:54:45', 723923.00, '₦', 'Annually', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(13, 47, '1990-01-03', '00:26:14', '1974-04-05', '14:16:45', 194165.00, '₦', 'Annually', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(14, 65, '2003-10-07', '04:48:39', '1975-05-09', '10:43:50', 739309.00, '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(15, 66, '1994-01-05', '23:21:20', '1999-08-31', '20:29:35', 962150.00, '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(16, 67, '2017-10-13', '01:50:08', '1990-09-12', '22:07:58', 358415.00, '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `property_likes`
--

CREATE TABLE `property_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `property_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_likes`
--

INSERT INTO `property_likes` (`id`, `user_id`, `property_id`, `created_at`, `updated_at`) VALUES
(1, 24, 32, '2024-08-22 20:51:34', '2024-08-22 20:51:34'),
(2, 24, 28, '2024-08-22 21:51:36', '2024-08-22 21:51:36'),
(3, 24, 26, '2024-08-22 21:55:16', '2024-08-22 21:55:16'),
(4, 21, 28, '2024-08-23 07:47:13', '2024-08-23 07:47:13'),
(5, 21, 26, '2024-08-23 08:49:37', '2024-08-23 08:49:37'),
(6, 21, 3, '2024-08-23 08:51:31', '2024-08-23 08:51:31'),
(7, 21, 33, '2024-08-23 08:51:46', '2024-08-23 08:51:46'),
(8, 21, 5, '2024-08-29 12:00:37', '2024-08-29 12:00:37'),
(9, 21, 35, '2024-08-29 12:02:36', '2024-08-29 12:02:36'),
(10, 21, 40, '2024-08-29 12:02:38', '2024-08-29 12:02:38'),
(11, 21, 30, '2024-08-29 12:02:59', '2024-08-29 12:02:59'),
(12, 21, 32, '2024-08-29 12:03:06', '2024-08-29 12:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `property_payments`
--

CREATE TABLE `property_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `sequence` varchar(255) NOT NULL,
  `initial_pay` decimal(15,2) NOT NULL,
  `subsequent_pay` decimal(15,2) NOT NULL,
  `initial_denomination` text NOT NULL,
  `initial_append` text NOT NULL,
  `subsequent_denomination` text NOT NULL,
  `subsequent_append` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_payments`
--

INSERT INTO `property_payments` (`id`, `property_id`, `sequence`, `initial_pay`, `subsequent_pay`, `initial_denomination`, `initial_append`, `subsequent_denomination`, `subsequent_append`, `created_at`, `updated_at`) VALUES
(1, 1, 'Annually', 500000.00, 250000.00, '₦', 'NA', '₦', 'NA', '2024-05-29 19:25:51', '2024-05-29 19:25:51'),
(2, 2, 'Annually', 500000.00, 250000.00, '₦', 'NA', '₦', 'NA', '2024-05-29 20:01:22', '2024-05-29 20:01:22'),
(3, 3, 'Monthly', 500000.00, 1000000.00, '₦', 'NA', '₦', 'NA', '2024-05-29 20:11:20', '2024-05-29 20:11:20'),
(5, 5, 'Annually', 7000000.00, 2000000.00, '₦', 'Annually', '₦', 'Monthly', '2024-06-22 10:40:27', '2024-06-22 10:40:27'),
(6, 27, 'Annually', 5000000.00, 5000000.00, '$', 'Annually', '$', 'Annually', '2024-06-06 23:48:56', '2024-06-12 21:42:35'),
(7, 26, 'Annually', 366568461.64, 208713874.86, '₦', 'Monthly', '₦', 'Monthly', '2024-06-03 19:58:10', '2024-05-28 08:51:55'),
(8, 29, 'Annually', 5000000.00, 5000000.00, '$', 'Monthly', '$', 'Annually', '2024-06-17 07:16:28', '2024-06-16 03:34:57'),
(9, 30, 'Monthly', 5000000.00, 5000000.00, '$', 'Monthly', '$', 'Monthly', '2024-06-07 05:47:36', '2024-06-05 22:16:21'),
(10, 34, 'Annually', 10867675.36, 29799006.28, '$', 'Monthly', '$', 'Monthly', '2024-06-10 20:59:02', '2024-05-28 02:40:53'),
(11, 32, 'Annually', 5000000.00, 5000000.00, '$', 'Monthly', '₦', 'Monthly', '2024-06-21 07:26:20', '2024-06-11 12:59:55'),
(12, 31, 'Annually', 5000000.00, 5000000.00, '$', 'Annually', '₦', 'Annually', '2024-06-22 22:10:18', '2024-05-28 05:17:40'),
(13, 28, 'Annually', 5000000.00, 38021947.20, '$', 'Annually', '₦', 'Monthly', '2024-06-10 13:38:03', '2024-06-12 09:20:37'),
(14, 35, 'Annually', 7443112.69, 5000000.00, '₦', 'Annually', '$', 'Monthly', '2024-06-23 19:20:39', '2024-06-12 04:57:51'),
(15, 33, 'Annually', 5000000.00, 5000000.00, '₦', 'Monthly', '₦', 'Annually', '2024-06-17 04:40:49', '2024-05-27 02:15:19'),
(16, 38, 'Monthly', 900000.00, 600000.00, '₦', 'Annually', '₦', 'Monthly', '2024-08-22 19:31:54', '2024-08-22 19:31:54'),
(17, 40, 'Monthly', 2000000.00, 500000.00, '₦', 'Monthly', '₦', 'Monthly', '2024-08-27 14:42:16', '2024-08-27 14:42:16'),
(18, 41, 'Single', 118450.00, 14715.00, '₦', 'Monthly', '₦', 'Annually', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(19, 42, 'Installments', 71656.00, 10717.00, '₦', 'Monthly', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(20, 43, 'Installments', 75458.00, 49884.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(21, 44, 'Installments', 167337.00, 22596.00, '₦', 'Annually', '₦', 'Annually', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(22, 45, 'Single', 164194.00, 23336.00, '₦', 'Monthly', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(23, 46, 'Single', 116566.00, 27020.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(24, 47, 'Single', 87748.00, 32208.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(25, 48, 'Installments', 64345.00, 48031.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(26, 49, 'Installments', 88255.00, 14146.00, '₦', 'Monthly', '₦', 'Annually', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(27, 50, 'Installments', 140094.00, 45823.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(28, 51, 'Single', 132421.00, 24670.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(29, 52, 'Installments', 71613.00, 38529.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(30, 53, 'Installments', 134216.00, 33860.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(31, 54, 'Installments', 168865.00, 10823.00, '₦', 'Monthly', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(32, 55, 'Single', 53622.00, 13587.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(33, 56, 'Single', 113383.00, 21882.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(34, 57, 'Single', 75625.00, 26172.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(35, 58, 'Installments', 125342.00, 35841.00, '₦', 'Monthly', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(36, 59, 'Installments', 183638.00, 32282.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(37, 60, 'Installments', 120225.00, 34252.00, '₦', 'Monthly', '₦', 'Monthly', '2024-12-23 09:22:29', '2024-12-23 09:22:29'),
(38, 61, 'Installments', 128173.00, 33164.00, '₦', 'Monthly', '₦', 'Monthly', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(39, 62, 'Installments', 169450.00, 49554.00, '₦', 'Monthly', '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(40, 63, 'Installments', 93818.00, 13110.00, '₦', 'Annually', '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(41, 64, 'Installments', 115767.00, 44346.00, '₦', 'Monthly', '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(42, 65, 'Single', 81560.00, 18364.00, '₦', 'Monthly', '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(43, 66, 'Installments', 58040.00, 27564.00, '₦', 'Monthly', '₦', 'Monthly', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(44, 67, 'Single', 167065.00, 36364.00, '₦', 'Annually', '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(45, 68, 'Single', 175966.00, 28579.00, '₦', 'Monthly', '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(46, 69, 'Single', 62841.00, 32794.00, '₦', 'Monthly', '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(47, 70, 'Installments', 186229.00, 14955.00, '₦', 'Monthly', '₦', 'Monthly', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(48, 71, 'Installments', 101112.00, 22444.00, '₦', 'Monthly', '₦', 'Monthly', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(49, 72, 'Single', 184268.00, 25795.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(50, 73, 'Installments', 169924.00, 44619.00, '₦', 'Monthly', '₦', 'Monthly', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(51, 74, 'Installments', 65850.00, 38587.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(52, 75, 'Single', 100979.00, 33606.00, '₦', 'Monthly', '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(53, 76, 'Installments', 87639.00, 47416.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(54, 77, 'Installments', 111870.00, 48380.00, '₦', 'Annually', '₦', 'Monthly', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(55, 78, 'Installments', 72037.00, 27721.00, '₦', 'Annually', '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(56, 79, 'Installments', 143489.00, 49919.00, '₦', 'Annually', '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31'),
(57, 80, 'Single', 146905.00, 19723.00, '₦', 'Annually', '₦', 'Annually', '2024-12-23 09:22:31', '2024-12-23 09:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `property_reviews`
--

CREATE TABLE `property_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `property_id` bigint(20) NOT NULL,
  `review` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_reviews`
--

INSERT INTO `property_reviews` (`id`, `user_id`, `property_id`, `review`, `created_at`, `updated_at`) VALUES
(1, 15, 33, '<blockquote>\r\n<p>This is a very good property, the agent also is very nice and the place is very clean.</p>\r\n</blockquote>', '2024-08-23 09:36:09', '2024-08-23 09:36:09'),
(2, 15, 33, '<blockquote>\r\n<p>This is a very good property, the agent also is very nice and the place is very clean.</p>\r\n</blockquote>', '2024-08-23 09:37:17', '2024-08-23 09:37:17'),
(3, 9, 33, '<p>For me it&#39;s a very nice place of abode and very&nbsp;<strong>affordable.</strong><br />\r\nI couldn&#39;t believe my eyes when they told me the cost.</p>', '2024-08-23 09:44:33', '2024-08-23 09:44:33'),
(4, 9, 1, 'It looks like a nice apartment and i also think it very okay.', '2024-08-24 16:45:36', '2024-08-24 16:45:36'),
(5, 9, 1, 'I spoke with this agent and checked out the apartment, it befits the money that\'s placed on it.', '2024-08-24 16:46:28', '2024-08-24 16:46:28'),
(6, 15, 28, 'It\'s beautiful apartment and very nice to have.\r\n\r\nI think it would be a lovely one.', '2024-08-24 17:20:58', '2024-08-24 17:20:58'),
(7, 9, 28, 'It\'s beautiful apartment and very nice to have.\r\n\r\nI think it would be a lovely one.', '2024-08-25 11:48:30', '2024-08-25 11:48:30'),
(8, NULL, 28, 'I spoke with the agent in charge but his response wasn\'t very good. But apart from that I think it\'s a good place.', '2024-08-25 11:49:47', '2024-08-25 11:49:47'),
(9, NULL, 28, 'As a tenant who has lived in this house for a while i think it\'s a very good place to be.\r\n\r\nThere\'s water, constant power supply, and most importantly,, it\'s in a secure neighbourhood.', '2024-08-25 11:51:41', '2024-08-25 11:51:41'),
(10, 15, 28, 'Well, I\'ve checked out the apartment and I love the place, but the total package seems too high for me.', '2024-08-25 11:52:26', '2024-08-25 11:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `property_shares`
--

CREATE TABLE `property_shares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `property_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `property_type_slug` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `property_type`, `property_type_slug`, `image_path`, `category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Apartment', 'apartment', 'assets/frontend/property/type/apartment.png', 'residential-2', '2024-06-22 00:59:08', '2024-06-22 00:59:08'),
(2, 'Bungalow', 'bungalow', 'assets/frontend/property/type/bungalow.png', 'residential-2', '2024-06-22 00:59:08', '2024-06-22 00:59:08'),
(3, 'Detached', 'detached', 'assets/frontend/property/type/detached.png', 'residential-2', '2024-06-22 00:59:08', '2024-06-22 00:59:08'),
(4, 'Mini Duplex', 'mini-duplex', 'assets/frontend/property/type/mini_duplex.png', 'residential-2', '2024-06-22 00:59:08', '2024-06-22 00:59:08'),
(5, 'Single Rooms', 'single-rooms', 'assets/frontend/property/type/single_rooms.png', 'residential-2', '2024-06-22 00:59:08', '2024-06-22 00:59:08'),
(6, 'Penthouse', 'penthouse', 'assets/frontend/property/type/penthouse.png', 'residential-2', '2024-06-22 00:59:08', '2024-06-22 00:59:08'),
(7, 'Terraced', 'terraced', 'assets/frontend/property/type/terraced.png', 'residential-2', '2024-06-22 00:59:08', '2024-06-22 00:59:08'),
(8, 'Office Space', 'office-space', 'assets/frontend/property/type/office_space.png', 'commercial-1', '2024-06-22 00:59:09', '2024-06-22 00:59:09'),
(9, 'Church', 'church', 'assets/frontend/property/type/church.png', 'commercial-1', '2024-06-22 00:59:09', '2024-06-22 00:59:09'),
(10, 'Guest House', 'guest-house', 'assets/frontend/property/type/guest_house.png', 'commercial-1', '2024-06-22 00:59:09', '2024-06-22 00:59:09'),
(11, 'Farm Land', 'farm-land', 'assets/frontend/property/type/farm_land.png', 'commercial-1', '2024-06-22 00:59:09', '2024-06-22 00:59:09'),
(12, 'Malls', 'malls', 'assets/frontend/property/type/malls.png', 'commercial-1', '2024-06-22 00:59:09', '2024-06-22 00:59:09'),
(13, 'Hotels', 'hotels', 'assets/frontend/property/type/hotels.png', 'commercial-1', '2024-06-22 00:59:09', '2024-06-22 00:59:09'),
(14, 'Parking Space ', 'parking-space', 'assets/frontend/property/type/parking_spaces.png', 'commercial-1', '2024-06-22 00:59:09', '2024-06-22 00:59:09'),
(15, 'Shops', 'shops', 'assets/frontend/property/type/shops.png', 'commercial-1', '2024-06-22 00:59:09', '2024-06-22 00:59:09'),
(16, 'Event Halls', 'event-halls', 'assets/frontend/property/type/event_halls.png', 'commercial-1', '2024-06-22 00:59:09', '2024-06-22 00:59:09'),
(17, 'Town House', 'town-house', 'assets/frontend/property/type/town_house.png', 'commercial-1', '2024-06-22 00:59:09', '2024-06-22 00:59:09'),
(18, 'Ware House', 'ware-house', 'assets/frontend/property/type/ware_house.png', 'commercial-1', '2024-06-22 00:59:09', '2024-06-22 00:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `property_views`
--

CREATE TABLE `property_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `property_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_views`
--

INSERT INTO `property_views` (`id`, `user_id`, `property_id`, `created_at`, `updated_at`) VALUES
(6, 24, 29, '2024-08-22 22:19:16', '2024-08-22 22:19:16'),
(7, 24, 2, '2024-08-22 22:20:38', '2024-08-22 22:20:38'),
(8, 21, 5, '2024-08-23 07:47:37', '2024-08-23 07:47:37'),
(9, 21, 26, '2024-08-23 08:50:13', '2024-08-23 08:50:13'),
(10, 21, 33, '2024-08-23 08:52:03', '2024-08-23 08:52:03'),
(11, NULL, 3, '2024-08-24 16:43:36', '2024-08-24 16:43:36'),
(12, NULL, 1, '2024-08-24 16:45:03', '2024-08-24 16:45:03'),
(13, NULL, 28, '2024-08-24 17:20:13', '2024-08-24 17:20:13'),
(14, NULL, 2, '2024-08-25 17:49:50', '2024-08-25 17:49:50'),
(15, NULL, 28, '2024-08-25 17:53:30', '2024-08-25 17:53:30'),
(16, 21, 2, '2024-08-27 18:56:10', '2024-08-27 18:56:10'),
(17, 21, 5, '2024-08-29 11:54:12', '2024-08-29 11:54:12'),
(18, 21, 5, '2024-08-29 11:54:29', '2024-08-29 11:54:29'),
(19, 21, 5, '2024-08-29 11:54:36', '2024-08-29 11:54:36'),
(20, 21, 5, '2024-08-29 11:58:34', '2024-08-29 11:58:34'),
(21, 21, 5, '2024-08-29 12:00:31', '2024-08-29 12:00:31'),
(22, 21, 5, '2024-08-29 12:03:12', '2024-08-29 12:03:12'),
(23, NULL, 38, '2024-09-21 09:21:39', '2024-09-21 09:21:39'),
(24, NULL, 2, '2024-09-21 09:44:52', '2024-09-21 09:44:52'),
(25, NULL, 2, '2024-09-21 10:41:25', '2024-09-21 10:41:25'),
(26, NULL, 1, '2024-10-09 18:02:07', '2024-10-09 18:02:07'),
(27, NULL, 1, '2024-10-21 09:52:53', '2024-10-21 09:52:53'),
(28, NULL, 1, '2024-10-25 15:24:35', '2024-10-25 15:24:35'),
(29, NULL, 1, '2024-10-28 11:46:07', '2024-10-28 11:46:07'),
(30, NULL, 27, '2024-11-19 10:20:09', '2024-11-19 10:20:09'),
(31, NULL, 40, '2024-11-25 14:40:50', '2024-11-25 14:40:50'),
(32, NULL, 75, '2024-12-23 10:29:19', '2024-12-23 10:29:19'),
(33, NULL, 75, '2024-12-23 10:31:16', '2024-12-23 10:31:16'),
(34, NULL, 75, '2024-12-23 10:32:16', '2024-12-23 10:32:16'),
(35, NULL, 75, '2024-12-23 10:35:38', '2024-12-23 10:35:38'),
(36, NULL, 75, '2024-12-23 10:36:19', '2024-12-23 10:36:19'),
(37, NULL, 75, '2024-12-23 10:37:08', '2024-12-23 10:37:08'),
(38, NULL, 75, '2024-12-23 10:37:55', '2024-12-23 10:37:55'),
(39, NULL, 75, '2024-12-23 10:39:03', '2024-12-23 10:39:03'),
(40, NULL, 79, '2024-12-23 10:42:01', '2024-12-23 10:42:01'),
(41, NULL, 2, '2024-12-23 12:44:45', '2024-12-23 12:44:45'),
(42, NULL, 65, '2024-12-23 13:04:09', '2024-12-23 13:04:09'),
(43, NULL, 76, '2024-12-23 13:05:35', '2024-12-23 13:05:35'),
(44, NULL, 76, '2024-12-23 13:06:50', '2024-12-23 13:06:50'),
(45, NULL, 3, '2024-12-23 13:07:26', '2024-12-23 13:07:26'),
(46, NULL, 2, '2024-12-23 13:08:39', '2024-12-23 13:08:39'),
(47, NULL, 5, '2024-12-23 13:09:29', '2024-12-23 13:09:29'),
(48, NULL, 5, '2024-12-23 13:10:55', '2024-12-23 13:10:55'),
(49, NULL, 76, '2024-12-23 13:12:10', '2024-12-23 13:12:10'),
(50, NULL, 76, '2024-12-23 13:12:31', '2024-12-23 13:12:31'),
(51, NULL, 5, '2024-12-23 13:12:48', '2024-12-23 13:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `further_info` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `location`, `short_description`, `property_type`, `area`, `budget`, `further_info`, `name`, `country`, `email`, `phone_no`, `created_at`, `updated_at`) VALUES
(1, 'Mainland', 'A shop to let for a month.', 'Let', 'Igando', '1500000', 'I need a shop to let for a month before I travel out of the country', 'Salawu Babatunde', 'Nigeria', 'smyke@gmail.com', '08177654310', '2024-06-15 08:31:23', '2024-06-15 08:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `scam_reports`
--

CREATE TABLE `scam_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name_of_offender` varchar(255) NOT NULL,
  `business` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `reporter` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scam_reports`
--

INSERT INTO `scam_reports` (`id`, `user_id`, `name_of_offender`, `business`, `location`, `complaint`, `reporter`, `country`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 21, 'Idoma Ugboniyo', 'Akulo Business Ltd.', 'Agege', 'I met this man and he didn\'t pay me as we agreed. This is not the first time he\'s been doing that', 'Kalu Uche', 'Ghana', '090332233344', 'kalush@gmail.com', '2024-08-29 10:43:28', '2024-08-29 10:43:28'),
(2, 21, 'Idoma Ugboniyo', 'Akulo Business Ltd.', 'Agege', 'I met this man and he didn\'t pay me as we agreed. This is not the first time he\'s been doing that', 'Kalu Uche', 'Ghana', '090332233344', 'kalush@gmail.com', '2024-08-29 10:49:17', '2024-08-29 10:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `category`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Maintenance', 'maintenance', '2024-06-22 16:08:58', '2024-06-22 16:08:58'),
(2, 'Building Development', 'building-development', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(3, 'Legal', 'legal', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(4, 'Property', 'property', '2024-06-22 16:08:59', '2024-06-22 16:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `service_providers`
--

CREATE TABLE `service_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `business_ID` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `service_type_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`id`, `user_id`, `business_ID`, `business_name`, `service_type_id`, `created_at`, `updated_at`) VALUES
(54, 18, '280CCDBA-ABAD-37B1-9ECD-F4F63C2F8CAE', 'Watsica-Thiel', 16, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(55, 54, 'D53F17C7-CFEE-3F50-BF5D-368097BF06B1', 'Larson-Sauer', 9, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(56, 55, '254BC99A-1356-30E7-A2E0-AC37FC8E870A', 'Bashirian-Mraz', 12, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(57, 56, '462EA13C-B6A3-306A-8DC8-D7AF1C16BA02', 'Rippin, Rosenbaum and Heller', 10, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(58, 57, '9C271CBB-0B3D-3E0E-8A08-B2D6F01348A3', 'Lynch Group', 2, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(59, 58, 'BF7D2112-76CA-3274-B448-63CFFC7C9827', 'Heller, Kshlerin and Moen', 9, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(60, 59, '8CDD7FAD-FE4B-36E0-B88D-E9446E45701C', 'Beier and Sons', 3, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(61, 60, 'CBE36BD6-4163-3817-BF4B-E001EF5FF48F', 'Schroeder-King', 2, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(62, 61, 'F5433EF6-7C15-3121-A174-7017C68DF2C5', 'Kris Inc', 2, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(63, 62, 'BEE762B7-EA20-3BF8-9A4C-C8F6E268CDC0', 'Lehner PLC', 14, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(64, 63, 'E90D5F07-2346-3EE8-BDE6-F272BFDA7232', 'Mosciski Inc', 13, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(65, 64, '94689C06-189E-3BCE-89E4-656387E6B0C5', 'Gorczany, Lang and Hilpert', 1, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(66, 65, '72D98E10-124D-36B1-9A98-7BD156B75BE8', 'Monahan Group', 20, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(67, 66, '60F6DF00-80B3-3742-B254-8C9A885839A0', 'Keeling, Marvin and Harber', 12, '2024-10-29 14:59:37', '2024-10-29 14:59:37'),
(68, 67, 'D0FEC7D3-EB2F-3B72-AA0C-A30F5B6CC66A', 'Swift, Connelly and Bradtke', 13, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(69, 68, 'F8FD16C2-64F6-3EBD-BF70-1AA9F35E84F9', 'Reilly, Conn and Schuster', 1, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(70, 69, '90F30D39-5D6E-36A3-B24C-6167A346B98F', 'Jacobi LLC', 14, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(71, 70, '59B65B0C-4B92-3DA9-8A2C-8D48C5361242', 'Dooley-Fay', 8, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(72, 71, 'B1B6AA51-1905-3EE3-96A1-A1034C74B63D', 'Muller-Pollich', 15, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(73, 72, 'A9A91DBB-3B4B-3A0A-A911-E21692F257E8', 'Wiegand-Turner', 17, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(74, 73, '61191D60-10D4-393C-AA0C-3EFC9DF4EC62', 'Jerde and Sons', 3, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(75, 74, '720C2469-7C11-387D-AD41-191E22AEC9D8', 'Pacocha-Fadel', 18, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(76, 75, 'AEED90D4-B005-3B44-B10F-4CCB79E79BCD', 'Kulas, Harris and Braun', 15, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(77, 76, '0FC78BEF-A8FC-3BCD-9B46-D55AC5214FC5', 'Wunsch and Sons', 18, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(78, 77, '5DF6FC80-028F-3E98-90C2-A1AED2AAEA8E', 'Gulgowski, Armstrong and Conn', 21, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(79, 78, '0D034577-6849-3ABD-9041-A35EF9D40216', 'Mraz, Kassulke and Schinner', 18, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(80, 79, 'DFC3C79E-1CED-37EE-95A6-97AE04DCD6E4', 'Ryan-Schultz', 7, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(81, 80, '94C2DF76-D838-3CD8-A015-C157A3162605', 'Oberbrunner, Konopelski and Batz', 20, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(82, 81, '83B1A2AE-CEC0-336E-AEC2-EE8DECEC0842', 'Runte Ltd', 15, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(83, 82, 'F3DAB808-646C-3621-8235-2C5284DA44F7', 'Streich-Rowe', 12, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(84, 83, '158FD865-29F3-3FEB-B5FB-772B1F8A4B1A', 'Hintz, Schiller and Kshlerin', 16, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(85, 84, '966203A1-33B4-3F22-88C8-AF77DCD162DF', 'Barrows LLC', 16, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(86, 85, '009D1DB4-9CA5-319E-AA59-3586D473EC96', 'Wiza-Prosacco', 12, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(87, 86, 'D1F51AFF-4248-3314-81FB-24759B79F0D0', 'Wolf, Harris and Jerde', 24, '2024-10-29 14:59:38', '2024-10-29 14:59:38'),
(88, 87, 'FDAADBDF-340B-3413-88D3-D64A493A36F9', 'Windler, Torp and Lockman', 17, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(89, 88, '1476178E-8AA4-31BE-A690-6B84ABDC6F01', 'VonRueden-Abbott', 8, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(90, 89, '65AE1084-FCE8-3310-9A92-17EC25B6DD68', 'Willms-Farrell', 20, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(91, 90, '72B2E301-2C1E-3334-8B4B-BFC569060F2B', 'Beahan Ltd', 9, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(92, 91, 'EB3969BE-1465-3AA8-AC12-BB6064197CFB', 'Spinka, Luettgen and Howe', 2, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(93, 92, 'CC7075AB-734E-31A2-94E4-CCDACAE1E765', 'Bergnaum Ltd', 22, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(94, 93, '933D1456-6D64-3263-937B-2B127FD1A3B4', 'Brekke LLC', 10, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(95, 94, 'CC2B1035-06C4-301A-94F1-8665B5B6C6A9', 'Emard LLC', 3, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(96, 95, '39400047-1A09-3CDC-8AD3-4CEFA71C2202', 'Marvin-Grimes', 15, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(97, 96, '607E809A-AC27-3FA6-A640-D52F568BA43B', 'Raynor, Kozey and Bashirian', 14, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(98, 97, '09DF4F84-8097-31EE-A2D2-A096C60C9539', 'Rutherford, Marks and Parker', 23, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(99, 98, '3DE381CA-1342-3E9C-9BF8-49896C12AD8F', 'Conn-Hilpert', 4, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(100, 99, '72CF6A55-5E9A-315F-84B6-E4ECA77FE457', 'Heidenreich, Bednar and Blanda', 1, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(101, 100, 'F6DD085E-42F8-30A3-B832-7EDA226E8E0D', 'Tremblay-Braun', 16, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(102, 101, '65F6E824-44AD-34BB-B24C-7BDA7E0F3A37', 'Franecki PLC', 7, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(103, 102, 'C287D657-1296-3343-B655-ABD28B6FAC2E', 'Hettinger Inc', 9, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(104, 103, 'D6E0C871-EE01-3BE5-A6F3-60EA423813B3', 'Swift, Reynolds and Wisoky', 13, '2024-10-29 14:59:39', '2024-10-29 14:59:39'),
(105, 104, '12848D5C-7A93-353C-9B67-14ADA9663990', 'Mayer-Haag', 1, '2024-10-29 14:59:39', '2024-10-29 14:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE `service_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `service_category_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_types`
--

INSERT INTO `service_types` (`id`, `service`, `image`, `slug`, `service_category_slug`, `created_at`, `updated_at`) VALUES
(1, 'AC Repairs', 'assets/images/services/category/ac.png', 'ac-repairs', 'maintenance', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(2, 'Electricians', 'assets/images/services/category/electricians.png', 'electricians', 'maintenance', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(3, 'Painters', 'assets/images/services/category/painters.png', 'painters', 'maintenance', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(4, 'Carpenters', 'assets/images/services/category/carpenter.png', 'carpenters', 'maintenance', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(5, 'Plumbers', 'assets/images/services/category/plumbers.png', 'plumbers', 'maintenance', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(6, 'Welders', 'assets/images/services/category/welder.png', 'welders', 'maintenance', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(7, 'Cleaners', 'assets/images/services/category/cleaners.png', 'cleaners', 'maintenance', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(8, 'Aluminium Repairs', 'assets/images/services/category/alluminium.png', 'aluminium-repairs', 'maintenance', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(9, 'Real Estate Developers', 'assets/images/services/category/archi.png', 'real-estate-developers', 'building-development', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(10, 'Real Estate Investors', 'assets/images/services/category/economist.png', 'real-estate-investors', 'building-development', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(11, 'Land Use Planners', 'assets/images/services/category/archi.png', 'land-use-planners', 'building-development', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(12, 'Real Estate Economists', 'assets/images/services/category/economist.png', 'real-estate-economists', 'building-development', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(13, 'Home Inspectors', 'assets/images/services/category/surveyors.png', 'home-inspectors', 'building-development', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(14, 'Environmental Consultants', 'assets/images/services/category/surveyors.png', 'environmental-consultants', 'building-development', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(15, 'Real Estate Attorneys', 'assets/images/services/category/economist.png', 'real-estate-attorneys', 'legal', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(16, 'Property Tax Consultants', 'assets/images/services/category/archi.png', 'property-tax-consultants', 'legal', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(17, 'Real Estate Agents', 'assets/images/services/category/economist.png', 'real-estate-agents', 'property', '2024-06-22 16:08:59', '2024-06-22 16:08:59'),
(18, 'Real Estate Brokers', 'assets/images/services/category/archi.png', 'real-estate-brokers', 'property', '2024-06-22 16:09:00', '2024-06-22 16:09:00'),
(19, 'Property Managers', 'assets/images/services/category/property.png', 'property-managers', 'property', '2024-06-22 16:09:00', '2024-06-22 16:09:00'),
(20, 'Real Estate Appraisers', 'assets/images/services/category/surveyors.png', 'real-estate-appraisers', 'property', '2024-06-22 16:09:00', '2024-06-22 16:09:00'),
(21, 'Mortgage Brokers', 'assets/images/services/category/economist.png', 'mortgage-brokers', 'property', '2024-06-22 16:09:00', '2024-06-22 16:09:00'),
(22, 'Residential Estate Agents', 'assets/images/services/category/archi.png', 'residential-estate-agents', 'property', '2024-06-22 16:09:00', '2024-06-22 16:09:00'),
(23, 'Commercial Estate Agents', 'assets/images/services/category/property.png', 'commercial-estate-agents', 'property', '2024-06-22 16:09:00', '2024-06-22 16:09:00'),
(24, 'Real Estate Investment Analyser', 'assets/images/services/category/economist.png', 'real-estate-investment-analyser', 'property', '2024-06-22 16:09:00', '2024-06-22 16:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'Creating Generational wealth through e-properties', 'assets/admin/images/sliders/1802392829291986.jpg', '2024-06-20 14:02:34', '2024-06-20 14:02:34'),
(6, 'INVEST WITH SUCCESS BUY FROM E-PROPERTY.COM', 'assets/admin/images/sliders/s-4.jpg', '2024-06-22 02:24:52', '2024-06-22 02:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sbabatunde@syscodescomms.com', '2024-10-28 14:02:36', '2024-10-28 14:02:36'),
(2, 'iaynalc@gmail.com', '2024-10-28 14:06:01', '2024-10-28 14:06:01'),
(3, 'sbabatunde@gmai.com', '2024-10-28 14:07:01', '2024-10-28 14:07:01'),
(4, 'sbabatunde@gmail.com', '2024-11-20 16:02:26', '2024-11-20 16:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `user_id`, `fullname`, `created_at`, `updated_at`) VALUES
(2, 9, 'Babatunde Salawu', '2024-05-29 07:00:22', '2024-05-29 07:00:22'),
(5, 34, 'Adeyemi Lukas', '2024-08-21 14:19:51', '2024-08-21 14:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `trendings`
--

CREATE TABLE `trendings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trendings`
--

INSERT INTO `trendings` (`id`, `property_id`, `status`, `created_at`, `updated_at`) VALUES
(35, 5, 'trending', '2024-07-24 07:53:59', '2024-07-24 07:53:59'),
(37, 33, 'trending', '2024-07-24 08:00:07', '2024-07-24 08:00:07'),
(40, 27, 'trending', '2024-07-24 18:34:45', '2024-07-24 18:34:45'),
(42, 35, 'trending', '2024-08-11 11:40:18', '2024-08-11 11:40:18'),
(43, 1, 'trending', '2024-08-14 14:12:41', '2024-08-14 14:12:41'),
(45, 28, 'trending', '2024-11-27 20:42:38', '2024-11-27 20:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` enum('agent','landlord','tenant','service_provider','admin') NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `business_image` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `country_code` int(11) DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `whatApp` text DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `axis` varchar(255) DEFAULT NULL,
  `about_org` varchar(255) DEFAULT NULL,
  `org_service` varchar(255) DEFAULT NULL,
  `org_state` varchar(255) DEFAULT NULL,
  `org_desc` varchar(255) DEFAULT NULL,
  `org_axis` varchar(255) DEFAULT NULL,
  `business_cat` varchar(255) DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedIn` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `status` enum('verified','unverified') NOT NULL DEFAULT 'unverified',
  `followers_count` bigint(20) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `email`, `email_verified_at`, `password`, `firstname`, `lastname`, `business_name`, `business_image`, `photo`, `country_code`, `phone`, `whatApp`, `state`, `axis`, `about_org`, `org_service`, `org_state`, `org_desc`, `org_axis`, `business_cat`, `experience`, `fb`, `twitter`, `linkedIn`, `instagram`, `gender`, `status`, `followers_count`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'tenant', 'salawubabatunde69@gmail.com', NULL, '$2y$12$Jps5HdQzBiXXLGtdgQhDXOzkGjDtuDXCTuKNbCyEnL9HSNsvljjdu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12', NULL, NULL, NULL, NULL, NULL, 'verified', 0, NULL, '2024-05-29 07:00:22', '2024-09-08 16:08:55'),
(15, 'landlord', 'ajib@ng.com', NULL, '$2y$12$xXOBJ7pYsD/h6X640ZACeOo4L0.hMaNQ9ao3ugqymc.Z7eDDW5KCu', 'Ajibola', 'Adekunle', 'BeeDeeBee Ventures', '/assets/images/properties-1.png', '/assets/admin/images/photo/service11.png', 234, '09034578622', '09034578622', 'OYO', '+234', NULL, 'Great', 'OYO', NULL, '+234', '+234', '8', 'stunde@fb.com', 'stunde@twitter.com', 'salawutunde-104b', NULL, NULL, 'verified', 1, NULL, '2024-05-29 09:29:05', '2024-12-06 13:51:27'),
(18, 'service_provider', 'stunde@gmail.com', NULL, '$2y$12$WVy1LmbqDqgzVbD1ItFbSO98bHUVLjA9R4iIAoHw4.vq1I3/FKAei', 'Adekunle', 'Gabriel', NULL, NULL, '/assets/admin/images/photo/service12.png', NULL, '08138504844', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', NULL, NULL, NULL, NULL, NULL, 'verified', 1, NULL, '2024-06-22 15:41:06', '2024-12-06 13:49:57'),
(21, 'admin', 'admin@gmail.com', NULL, '$2y$12$ySdhBN2dG5RO5hW5726kXek99zSd9QrYQB.YXz7hfFsmVSNXTF3va', 'Essential', 'Admin', NULL, NULL, '/assets/admin/images/photo/service13.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We are very good at whatwe do rregardless of the circumstances\\', NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, 'verified', 0, NULL, '2024-07-10 23:13:41', '2024-08-27 14:10:33'),
(23, 'agent', 'jola@gmail.com', NULL, '$2y$12$wnQuGbZXWXD/8Er3ZcjcuuYp4xxjBj2l6Vcwq8/lNCqAMbQDNPiUi', 'Jolayemi', 'Olaiya', NULL, '/assets/images/properties-1.png', '/assets/admin/images/photo/service11.png', NULL, '08077889832', '09087459822', 'Ibadan', 'Iwo road', 'At Jolayemi Global we take every part of property negotiation with full precaution and guarantee customer\'s satisfaction.', NULL, 'Ibadan', NULL, 'Bashorun', NULL, '7', NULL, NULL, NULL, NULL, NULL, 'unverified', 0, NULL, '2024-08-01 06:48:59', '2024-08-01 06:48:59'),
(24, 'agent', 'kalglo@gmail.com', NULL, '$2y$12$/JE7neoCHOQbzXB7yjIDPuendJt.BtXIvzH86AOIgSnKYXhxEY1xe', 'Kalu ', 'Uche', NULL, '/assets/images/RS1.jpg', '/assets/admin/images/photo/service12.png', NULL, '07067543213', NULL, NULL, NULL, 'We are very good at whatwe do rregardless of the circumstances\\', NULL, 'Lagos', NULL, 'Ikeja', NULL, '10', NULL, NULL, NULL, NULL, NULL, 'verified', 1, NULL, '2024-08-01 06:52:12', '2024-12-18 19:10:19'),
(25, 'agent', 'ikekal@gmail.com', NULL, '$2y$12$MKkn1Ha2DD7nKzgkqv7OF./ira6aNNujxvDUS8NlLN4ZywurHcpv2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, 'unverified', 0, NULL, '2024-08-20 20:00:52', '2024-08-20 20:00:52'),
(34, 'tenant', 'lukasade@gmail.com', NULL, '$2y$12$pFkERtrsKNH5iXwOFBBQ2OG3/8K1w8XLvh6WceMlR.2wF57Y0m.eS', 'Adeyemi', 'Lukas', NULL, NULL, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724253590/e-properties/users/rk4hcqtu6bpkcgr8ebex.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, NULL, NULL, NULL, NULL, 'verified', 0, NULL, '2024-08-21 14:19:49', '2024-08-27 14:10:28'),
(43, 'agent', 'ogbevo@gmail.com', NULL, '$2y$12$S6L9YHpx46S8QxdpRAimGu.XlLOpNHNZMirgbNCvPBT6AHPsFUFW.', 'Ogbeviro', 'Eunice', NULL, NULL, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724254343/e-properties/users/k4bjzqexfisabcqzvwg3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15', NULL, NULL, NULL, NULL, NULL, 'unverified', 0, NULL, '2024-08-21 14:32:22', '2024-08-21 14:32:24'),
(54, 'service_provider', 'ejiwil@yahoo.com', NULL, '$2y$12$WukESHc1qwM3OfsQ.nf9fuaxDvMJ/BhdFL0KRX6LUH7CBHEPx3.Um', 'Williams', 'Ejiroh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11', NULL, NULL, NULL, NULL, NULL, 'unverified', 0, NULL, '2024-08-21 14:53:23', '2024-08-21 14:53:23'),
(55, 'service_provider', 'xjohns@example.org', NULL, '$2y$12$Rm9u31EQwVKwY9UU0fGF9ukRrWL0oMER/xfj2gdWBGoqq0EHE9iQy', 'Janessa', 'Marquardt', 'Schaefer, Herzog and Gleichner', 'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gif', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 10, '734.309.0940', NULL, 'Florida', NULL, 'Quo cupiditate illo iusto ratione asperiores.', 'neque', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'Xwq2gFziQK', '2024-10-09 21:35:40', '2024-10-09 21:35:40'),
(56, 'service_provider', 'heller.delbert@example.net', NULL, '$2y$12$4/MKP.4BnbhqJO1zvPTZA.MpfBqFx/s8CUU.DXGpf82RgArLGAiCe', 'Leanna', 'Cormier', 'Okuneva-Emard', 'https://media.giphy.com/media/l1J9GvG1eX0vWXvH2/giphy.gif', 'https://media.giphy.com/media/1xZr5DzY7ob2c/giphy.gif', 39, '680.886.3666', NULL, 'Wyoming', NULL, 'Ut libero magni excepturi placeat aut atque quisquam.', 'illo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'K0sDKbijp4', '2024-10-09 21:35:41', '2024-10-09 21:35:41'),
(57, 'service_provider', 'carroll.amari@example.org', NULL, '$2y$12$.9BBeHtEuIjCHOWgOdPEJeT3dNp7706P6cTP.UAYNTWieqS.d2M4S', 'Carmel', 'Pacocha', 'Connelly, Rau and Grady', 'https://media.giphy.com/media/3o6nV4b7GR5u0uTgS4/giphy.gif', 'https://media.giphy.com/media/1xZr5DzY7ob2c/giphy.gif', 41, '478.436.8609', NULL, 'Tennessee', NULL, 'Quibusdam et repellendus sit rerum enim eos.', 'cupiditate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'xIFzHRsiOg', '2024-10-09 21:35:41', '2024-10-09 21:35:41'),
(58, 'service_provider', 'gerlach.ashlynn@example.net', NULL, '$2y$12$z0cKF/IP86STANCtHW7sKe65q7PwKiGtz3iRMdc..5vxlLyDOeGKm', 'Gerson', 'Legros', 'Wiza-Zieme', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gifhttps://res.cloudinary.com/dnqmjzvy3/image/upload/v1724254343/e-properties/users/k4bjzqexfisabcqzvwg3.jpg', 35, '347.787.5087', NULL, 'New Mexico', NULL, 'Blanditiis ab laudantium laudantium necessitatibus ea et mollitia quia.', 'quibusdam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'vXI0er129M', '2024-10-09 21:35:42', '2024-10-09 21:35:42'),
(59, 'service_provider', 'hill.ray@example.net', NULL, '$2y$12$LI3qi9g2eLdSmL0Rrxr26uEk6EWxEEOAeOeCG1xE2XmiLxL0cN9I2', 'Hal', 'Walter', 'Schimmel-Macejkovic', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 50, '1-772-616-4555', NULL, 'Alaska', NULL, 'At accusamus quia fugiat porro.', 'dolores', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'ZPSwSFYIZc', '2024-10-09 21:35:42', '2024-10-09 21:35:42'),
(60, 'service_provider', 'simonis.baron@example.com', NULL, '$2y$12$qpbQne/K34onl05JOX5ApucdoHKBvUsza3QQIhgjeRxMxQHUhzOLi', 'Teagan', 'Johns', 'Bernier, Kihn and Wolff', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 29, '512.916.1034', NULL, 'Missouri', NULL, 'Aut et eum quasi ipsum.', 'labore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 1, 'tpLR8ZN8oT', '2024-10-09 21:35:43', '2024-12-06 14:21:38'),
(61, 'service_provider', 'tlangosh@example.org', NULL, '$2y$12$GSpZawtTJCWzjjyFRq1kCOKFZFgnIuCFQescNkhevqyXcK9JMgzsu', 'Carmel', 'Dickens', 'Lind-Hickle', 'https://media.giphy.com/media/3o6nV4b7GR5u0uTgS4/giphy.gif', 'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gif', 94, '1-219-587-9493', NULL, 'New Jersey', NULL, 'Exercitationem consequuntur assumenda architecto et dolorum.', 'deleniti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'cYlJXnW6ei', '2024-10-09 21:35:43', '2024-10-09 21:35:43'),
(62, 'service_provider', 'justice22@example.org', NULL, '$2y$12$9/mGXP8FGvap2mIyw2TY.u/vU0QIha9v7KJz7jdlkWVXrfLyuoHNe', 'Efren', 'O\'Kon', 'Moen, Hayes and Harris', 'https://media.giphy.com/media/l1J9GvG1eX0vWXvH2/giphy.gif', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 24, '480-675-4186', NULL, 'Maine', NULL, 'Quia nobis nobis at harum.', 'suscipit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'A8VP094lnj', '2024-10-09 21:35:44', '2024-10-09 21:35:44'),
(63, 'service_provider', 'jan.ward@example.org', NULL, '$2y$12$mltzrmVDWWcKocONfxzCTe31peM0o19YqHJ6rDDAQkQnSIzKIUAKO', 'Elenora', 'Harber', 'Brekke LLC', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 17, '+17577378459', NULL, 'North Carolina', NULL, 'Nemo vero placeat ipsam maiores aut est voluptas repellendus.', 'vero', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'TJhbDZo4zA', '2024-10-09 21:35:44', '2024-10-09 21:35:44'),
(64, 'service_provider', 'nemard@example.org', NULL, '$2y$12$XyN1BW2aYB7JjV0dkeyfFeA.zLAn6cZQQTUCTAGIQ8YZqOOCbR9K.', 'Elsie', 'Crist', 'Jenkins-Towne', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 16, '857-955-0021', NULL, 'Utah', NULL, 'Quis quia laudantium omnis.', 'amet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'CqyMzBGXmf', '2024-10-09 21:35:44', '2024-10-09 21:35:44'),
(65, 'service_provider', 'ujones@example.net', NULL, '$2y$12$dulZFlqshXw2qobyOmkRVezFbGGTiyY9i3.J/dmz1HAERJ7jEWwd2', 'Brigitte', 'Kutch', 'Bartoletti, Walter and Jacobson', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 49, '1-938-912-6407', NULL, 'Louisiana', NULL, 'Quia mollitia in explicabo iusto qui.', 'in', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, '7x0cvGYA9A', '2024-10-09 21:35:45', '2024-10-09 21:35:45'),
(66, 'service_provider', 'mraz.nick@example.com', NULL, '$2y$12$k7jWAGHnmaOJpk68pkVSRe13aXCaDx4/lmRwx9dVgAAuqks3tQ5Wq', 'Deanna', 'Cormier', 'Aufderhar-Moore', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 'https://media.giphy.com/media/l1J9GvG1eX0vWXvH2/giphy.gif', 91, '949.646.9871', NULL, 'Massachusetts', NULL, 'Dolores sed expedita quia et et et repellat.', 'quos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'Dg94NYEx82', '2024-10-09 21:35:45', '2024-10-09 21:35:45'),
(67, 'service_provider', 'ilene44@example.net', NULL, '$2y$12$4QiOPKqeld3d7UA7Buu00eGs.GOMI/iCjHjQYBz.ju0dKzwxqEN4C', 'Alyce', 'Larkin', 'Hauck-Wolff', 'https://media.giphy.com/media/3o6nV4b7GR5u0uTgS4/giphy.gif', 'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gif', 28, '+19412912850', NULL, 'Maine', NULL, 'Aut et impedit facilis sequi officia animi ducimus.', 'soluta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'W9jYa03BkK', '2024-10-09 21:35:46', '2024-10-09 21:35:46'),
(68, 'service_provider', 'hudson.destin@example.net', NULL, '$2y$12$O2SSI1nqbl1exE5xjFxe9.PqFRWQ.Plv6wGFvGOZ2MUAEOSsUwTri', 'Lupe', 'Wiza', 'Rice, Konopelski and Walter', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 96, '1-724-297-9455', NULL, 'Iowa', NULL, 'Ut dicta molestias exercitationem voluptatem.', 'exercitationem', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, '34gl5cbFMV', '2024-10-09 21:35:46', '2024-10-09 21:35:46'),
(69, 'service_provider', 'skyla.abshire@example.net', NULL, '$2y$12$MRjms/gPfR5xQq5EJxXXGuv/XeiYAhoaepfdjmje1VZcM./.bBvKC', 'Oma', 'Leannon', 'Dibbert, Mann and McGlynn', 'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gif', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 66, '+1-534-616-7605', NULL, 'Louisiana', NULL, 'Earum aliquid illo placeat.', 'veritatis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'L8xjQPTqmu', '2024-10-09 21:35:47', '2024-10-09 21:35:47'),
(70, 'service_provider', 'erica52@example.net', NULL, '$2y$12$ALfizAYtWPwDneqaeevFGu6KtA0Hp6a4Y6mqmYFw2wqtzh0djm8pa', 'Saul', 'Franecki', 'Zboncak Ltd', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 'https://media.giphy.com/media/1xZr5DzY7ob2c/giphy.gif', 48, '+1 (980) 364-7240', NULL, 'Mississippi', NULL, 'Molestiae sit officia exercitationem ut et nostrum.', 'qui', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'xZQhch7UeE', '2024-10-09 21:35:47', '2024-10-09 21:35:47'),
(71, 'service_provider', 'koch.modesto@example.net', NULL, '$2y$12$xmhQAcn2UG0jjYNFwJWMJeDllyQoaBBGqkpQaOferHfRaPfRjsle.', 'Dakota', 'Considine', 'Cruickshank, Mills and Jaskolski', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 'https://media.giphy.com/media/l1J9GvG1eX0vWXvH2/giphy.gif', 56, '1-272-781-1059', NULL, 'Wyoming', NULL, 'Sit veritatis natus quia vero sit qui dignissimos.', 'cumque', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'FlWP0SQmZw', '2024-10-09 21:35:48', '2024-10-09 21:35:48'),
(72, 'service_provider', 'juston.okon@example.net', NULL, '$2y$12$xMDPIxMxcqGSQsh0nZKFpu0oARIV2ScoyM9LtEZeaV/sD3DLxweom', 'Dorcas', 'Kihn', 'Rutherford, Maggio and Boyle', 'https://media.giphy.com/media/l1J9GvG1eX0vWXvH2/giphy.gif', 'https://media.giphy.com/media/l1J9GvG1eX0vWXvH2/giphy.gif', 5, '+1 (401) 745-0501', NULL, 'Michigan', NULL, 'Facilis nihil sit eligendi quas voluptas illo quis.', 'aut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'iLjdlZXMIb', '2024-10-09 21:35:48', '2024-10-09 21:35:48'),
(73, 'service_provider', 'thad58@example.org', NULL, '$2y$12$KRG8K9vkYUFssAdDq1I7rO8XurywdPYVY8gb8l53zVL7eT8JdROIS', 'Jesus', 'Doyle', 'Gutmann Group', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 51, '458.272.6680', NULL, 'Maryland', NULL, 'Assumenda et sint optio ut temporibus voluptas saepe sed.', 'excepturi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'KvcH0Mf7k3', '2024-10-09 21:35:48', '2024-10-09 21:35:48'),
(74, 'service_provider', 'barrows.michel@example.org', NULL, '$2y$12$ByUxByqw0Lmn7UraSZMOu.4junpQa2HEhh.GKbDnP9YrFvKITkVXy', 'Lourdes', 'Lockman', 'Keebler Ltd', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gif', 39, '+1 (912) 363-2014', NULL, 'Utah', NULL, 'Vel rerum numquam ea occaecati.', 'maiores', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'e4wK3zehuy', '2024-10-09 21:35:49', '2024-10-09 21:35:49'),
(75, 'service_provider', 'domenico.jacobi@example.org', NULL, '$2y$12$xlPeucUlJQ6xLEgRU7K6iecj5f9Tev3s3fvm1xSI.7tQGtR5/cn.W', 'Geovanni', 'Stehr', 'Doyle-Murphy', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 24, '567.646.8894', NULL, 'Tennessee', NULL, 'Fugit consequatur molestiae optio quas.', 'commodi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'DJYKN5AppS', '2024-10-09 21:35:50', '2024-10-09 21:35:50'),
(76, 'service_provider', 'baby61@example.org', NULL, '$2y$12$ySZqlKUmkNDck4NOAtjDbOs94okGlabDKOv.4OtewI4a9TPLAusFC', 'Brannon', 'Heathcote', 'Crist-Schmitt', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gif', 60, '940-348-8145', NULL, 'Idaho', NULL, 'Minima perspiciatis aliquid commodi omnis id amet.', 'corporis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'R2gGiCn8OX', '2024-10-09 21:35:50', '2024-10-09 21:35:50'),
(77, 'service_provider', 'hegmann.earline@example.com', NULL, '$2y$12$wQWYf6nKjPuv0CLtpiPYsecMEQ76U6lUg/MSH6jpZwKNVp2.ct5Aq', 'Felicita', 'Feil', 'Larkin, Howell and Schaefer', 'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gif', 'https://media.giphy.com/media/l1J9GvG1eX0vWXvH2/giphy.gif', 11, '+17543928425', NULL, 'North Carolina', NULL, 'Sequi officiis enim praesentium impedit magnam aperiam est nostrum.', 'inventore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'VViUKTAdmL', '2024-10-09 21:35:51', '2024-10-09 21:35:51'),
(78, 'service_provider', 'adan10@example.com', NULL, '$2y$12$PTgLgU5HbnblqfiVxp38WuiNEb99SnheyMUwUgAUceqTFnhPBLNau', 'Otha', 'Armstrong', 'Sawayn, Zulauf and Gusikowski', 'https://media.giphy.com/media/3o6nV4b7GR5u0uTgS4/giphy.gif', 'https://media.giphy.com/media/3o6nV4b7GR5u0uTgS4/giphy.gif', 6, '1-856-697-2287', NULL, 'Florida', NULL, 'Fugiat vel ipsam iure sunt quia ut.', 'nesciunt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'AukGc9OFZE', '2024-10-09 21:35:51', '2024-10-09 21:35:51'),
(79, 'service_provider', 'walton82@example.org', NULL, '$2y$12$H1.3fF7Ty79GPrJNYH4sHeaul/LqTdthgRE5eUMPJ9kqDOojb588u', 'Lue', 'Donnelly', 'Brakus and Sons', 'https://media.giphy.com/media/l1J9GvG1eX0vWXvH2/giphy.gif', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 33, '937-978-0008', NULL, 'Kentucky', NULL, 'Veritatis ea dolores odio nesciunt omnis sed.', 'harum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, '5RI3FwQDN0', '2024-10-09 21:35:51', '2024-10-09 21:35:51'),
(80, 'service_provider', 'berge.noelia@example.com', NULL, '$2y$12$j8rjIFuySIRMDBpYhLGy1OVqwbKTncA.aL2qA3WDxeaFOhj6aqJfW', 'Regan', 'Okuneva', 'Kutch, Romaguera and Sawayn', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 'https://media.giphy.com/media/3o6nV4b7GR5u0uTgS4/giphy.gif', 49, '820-306-6217', NULL, 'Vermont', NULL, 'Eos sed error officiis accusamus velit.', 'blanditiis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'yydNvqx12h', '2024-10-09 21:35:52', '2024-10-09 21:35:52'),
(81, 'service_provider', 'wbatz@example.net', NULL, '$2y$12$odCxy.O86i5S0vUZjmD1yuH1urbVt0x4iPSpzLZxIbHnO4oDlKmHq', 'Aniyah', 'Greenholt', 'Murphy, Hettinger and Pouros', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 'https://media.giphy.com/media/3o6nV4b7GR5u0uTgS4/giphy.gif', 2, '+1 (854) 447-4511', NULL, 'North Carolina', NULL, 'Dignissimos quidem laudantium natus est ea ut quo velit.', 'at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'Kdmbf7lEj9', '2024-10-09 21:35:52', '2024-10-09 21:35:52'),
(82, 'service_provider', 'emmanuel17@example.net', NULL, '$2y$12$CQkPUtmTo6snDg.vEh0pNO.NtIyySAOQUmHc3IIoSXvzia5IdA8ry', 'Carrie', 'Kulas', 'Shanahan, Mills and Jacobs', 'https://media.giphy.com/media/3o6nV4b7GR5u0uTgS4/giphy.gif', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 55, '(701) 216-3742', NULL, 'Maine', NULL, 'Omnis laborum asperiores est laborum nisi aliquam dolore.', 'est', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'xRr6ZCaH59', '2024-10-09 21:35:53', '2024-10-09 21:35:53'),
(83, 'service_provider', 'arvid15@example.org', NULL, '$2y$12$Iy5v0A.UWp5EOtGldws1KuvVuPcpFlbstSUG3q0BrvI0w0IP8b6qG', 'Dayana', 'Jacobs', 'Langosh PLC', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 62, '+16518440552', NULL, 'Rhode Island', NULL, 'Dolores dolorem culpa incidunt nihil.', 'ut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'uBz7uewcc1', '2024-10-09 21:35:53', '2024-10-09 21:35:53'),
(84, 'service_provider', 'magnus26@example.net', NULL, '$2y$12$kL/RxsbJdHMzDuXzOQefP.nd1hO9XzPZXgiGpZI2aPVaeLgsSjyOW', 'Loraine', 'Considine', 'Price Inc', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gif', 29, '925.348.1941', NULL, 'Georgia', NULL, 'Aut ullam iure officia pariatur.', 'nemo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'C8MnGgwFnq', '2024-10-09 21:35:54', '2024-10-09 21:35:54'),
(85, 'service_provider', 'dixie.toy@example.com', NULL, '$2y$12$6HASlpTdGDI65qLzQM776eN4sSnBLU0bWw0Xb7ztHHXN3Ayx9V1MW', 'Thelma', 'Runolfsson', 'Herman-Lowe', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 12, '+12832862402', NULL, 'Indiana', NULL, 'Neque numquam porro beatae est labore aliquam.', 'inventore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'kyqGGiTZqC', '2024-10-09 21:35:55', '2024-10-09 21:35:55'),
(86, 'service_provider', 'rocio.king@example.net', NULL, '$2y$12$6IrgH1ZAVfW4N857AnM.puVg8rRLZv8//YvHpshi6t17QKy.UjAka', 'Gabriella', 'Jakubowski', 'Torp-Weber', 'https://media.giphy.com/media/l1J9GvG1eX0vWXvH2/giphy.gif', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 62, '478-747-5472', NULL, 'Alabama', NULL, 'Dolor omnis sed quia nobis.', 'quis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'kgv4POmn1z', '2024-10-09 21:35:55', '2024-10-09 21:35:55'),
(87, 'service_provider', 'tianna.koelpin@example.org', NULL, '$2y$12$MjDx8MlteSUaFS2032LIs.bfAC8apKd/d9LuY7QaWzlhkdqAJGUgu', 'Dejah', 'Moore', 'O\'Kon-Greenholt', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 'https://media.giphy.com/media/3o6nV4b7GR5u0uTgS4/giphy.gif', 72, '512.481.8098', NULL, 'Connecticut', NULL, 'Mollitia harum esse eaque dolores illum voluptatem beatae rerum.', 'ut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'bF9J6GCkcw', '2024-10-09 21:35:56', '2024-10-09 21:35:56'),
(88, 'service_provider', 'bernard.schoen@example.com', NULL, '$2y$12$oEY2AN6FtnlFabk28bVHUu5ooVdytKc2sa7ONrPR1zUX6yYpw/l/m', 'Audie', 'Ryan', 'Oberbrunner Ltd', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 5, '+1-360-990-6018', NULL, 'Rhode Island', NULL, 'Labore veritatis quod doloremque dolor molestiae.', 'non', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'UInPnnPTzU', '2024-10-09 21:35:56', '2024-10-09 21:35:56'),
(89, 'service_provider', 'luisa12@example.com', NULL, '$2y$12$CvQHF3p03M5AnwyHIrHI9uI51oRPvEdVYbGy8cli1ua4T0HtSUoHq', 'Bailee', 'Armstrong', 'Fritsch Ltd', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 70, '551.969.9563', NULL, 'Hawaii', NULL, 'Et suscipit dolores ipsa et.', 'consectetur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'oM98Nh9L82', '2024-10-09 21:35:57', '2024-10-09 21:35:57'),
(90, 'service_provider', 'ayla15@example.org', NULL, '$2y$12$hCU6hwd0kGyyl5xXpnvJEebgCIURZIQfbeXr//DJHg4P5P2iSO62W', 'Allene', 'Sporer', 'Hodkiewicz-Fisher', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 'https://media.giphy.com/media/1xZr5DzY7ob2c/giphy.gif', 44, '1-779-340-1623', NULL, 'Louisiana', NULL, 'Expedita voluptates vel qui voluptate.', 'saepe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'n1xlpn9hto', '2024-10-09 21:35:57', '2024-10-09 21:35:57'),
(91, 'service_provider', 'christy.tromp@example.com', NULL, '$2y$12$lPmpZAvTwQB6cGPjS6V0UuSC7Pu4XV.tekeixXE5cdl3G9Mf.l53y', 'Lempi', 'Abshire', 'Grimes and Sons', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 43, '(503) 333-3208', NULL, 'Nevada', NULL, 'Ut laboriosam ipsam praesentium sint tempora.', 'quia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'VmBctgjBOO', '2024-10-09 21:35:58', '2024-10-09 21:35:58'),
(92, 'service_provider', 'spencer.kelsie@example.org', NULL, '$2y$12$fgI/MVkxjZ2Vu7Y2qoYOOufeGhW8AIIEA2f3B1pevn74qICGXvaFK', 'Weldon', 'Willms', 'Morar, Lubowitz and McKenzie', 'https://media.giphy.com/media/1xZr5DzY7ob2c/giphy.gif', 'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gif', 41, '208-956-1953', NULL, 'Vermont', NULL, 'Ab accusamus assumenda modi consequuntur.', 'ducimus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'UwFGvG8PLy', '2024-10-09 21:35:58', '2024-10-09 21:35:58'),
(93, 'service_provider', 'sister12@example.net', NULL, '$2y$12$KHVB7LVVAo0ofTGbiZtgY.36DJLMAKFp8qtGQv.V96JXIRv/UwCJq', 'Darlene', 'Hessel', 'Graham Inc', 'https://media.giphy.com/media/l1J9GvG1eX0vWXvH2/giphy.gif', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 95, '732-751-0258', NULL, 'South Dakota', NULL, 'Suscipit distinctio itaque qui harum doloremque consequatur.', 'veniam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'GJKwR5tHFg', '2024-10-09 21:35:59', '2024-10-09 21:35:59'),
(94, 'service_provider', 'jade.trantow@example.net', NULL, '$2y$12$EqkM.nwewpRO2ojx.A2HtOzocTrlHKO2ZQCbgwpz1frcHMmV43yDi', 'Jovanny', 'Kemmer', 'Huels-Bernhard', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 57, '+1 (352) 898-4173', NULL, 'Arkansas', NULL, 'Officiis aut necessitatibus qui placeat.', 'pariatur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'k9NzG9n9yO', '2024-10-09 21:35:59', '2024-10-09 21:35:59'),
(95, 'service_provider', 'vivienne.kuhn@example.com', NULL, '$2y$12$ikao3sodBD.9JsW4IzH1COh7.PsyqKOAN0.ps4QJH6aqTxcj2v7fS', 'Hermina', 'Frami', 'Heaney Ltd', 'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gif', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 39, '972.347.9693', NULL, 'Alaska', NULL, 'Officia in ex eos quo veritatis.', 'iusto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'tONFZS5Mlg', '2024-10-09 21:35:59', '2024-10-09 21:35:59'),
(96, 'service_provider', 'satterfield.garry@example.org', NULL, '$2y$12$UCldIf6MBcMpgUzgsTZGc.qAKKnLH4DNMuOQX76Y/Z.qKmBJJeUDG', 'Daphne', 'Osinski', 'Ondricka Group', 'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gif', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 18, '(470) 657-2942', NULL, 'Washington', NULL, 'Omnis voluptas nostrum illum impedit.', 'maiores', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'FIFq6KX7hO', '2024-10-09 21:36:00', '2024-10-09 21:36:00'),
(97, 'service_provider', 'shane.pagac@example.com', NULL, '$2y$12$ib7PpU0e3QEhzb4oTahz2OQ3kg07T.jJ1fIt3IGKBkIW7LegMFkG2', 'Jarret', 'Quitzon', 'Abernathy, Okuneva and Hane', 'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 5, '+1-678-631-8790', NULL, 'Rhode Island', NULL, 'Nihil recusandae cum expedita explicabo rerum dolorem explicabo inventore.', 'nihil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'FqqwDhRYIf', '2024-10-09 21:36:00', '2024-10-09 21:36:00'),
(98, 'service_provider', 'malcolm.berge@example.com', NULL, '$2y$12$9VUbLRusBvkKToBK5yxfK.1CvHycRRuXW8jor1wkg2PtHDYtz6b7a', 'Lavinia', 'Reynolds', 'Kuvalis-Keebler', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 35, '+1-216-860-7117', NULL, 'Nebraska', NULL, 'Maxime laboriosam dolor adipisci vitae.', 'totam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'WNtdiTBAxD', '2024-10-09 21:36:01', '2024-10-09 21:36:01'),
(99, 'service_provider', 'west.leone@example.org', NULL, '$2y$12$lDWBx0egMv6SA8GcyZn1u.Giiupnam5gG8rIWPKtfToeA4Kdys4dq', 'Alexa', 'Macejkovic', 'Schoen and Sons', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 87, '1-231-401-8838', NULL, 'New Mexico', NULL, 'Non ipsam eum autem doloribus quos reiciendis.', 'rerum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'yeoPpIntex', '2024-10-09 21:36:01', '2024-10-09 21:36:01'),
(100, 'service_provider', 'hipolito.spinka@example.org', NULL, '$2y$12$9o9A35DNdbaCr8hUgv/uqOr/F.OZUEhIWkddM8lOgT6CYtK3V0Aha', 'Dylan', 'Hauck', 'Dibbert-Kling', 'https://media.giphy.com/media/1xZr5DzY7ob2c/giphy.gif', 'https://media.giphy.com/media/3o6nV4b7GR5u0uTgS4/giphy.gif', 27, '650-267-4852', NULL, 'Missouri', NULL, 'Doloremque impedit nobis corporis sit incidunt.', 'totam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 's9lMTrI06s', '2024-10-09 21:36:02', '2024-10-09 21:36:02'),
(101, 'service_provider', 'royal42@example.org', NULL, '$2y$12$WVXpAkS/3kVxvn3DSZiyuuVrrLxxZBZkdRVivy9AB7W6Y80EWj4L2', 'Sylvester', 'Zemlak', 'Ledner Group', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif', 45, '708-592-0309', NULL, 'Kansas', NULL, 'Nulla quae soluta et ipsa consequuntur alias.', 'eos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'TGpSJbyvCW', '2024-10-09 21:36:02', '2024-10-09 21:36:02'),
(102, 'service_provider', 'parker.giovanna@example.net', NULL, '$2y$12$r4NXjWRmi.9JYs5/uRVaO.eM3nUb529EQN77KADOySWcTTdXe62rO', 'Constantin', 'Conroy', 'Kerluke Ltd', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 39, '(501) 658-5149', NULL, 'Florida', NULL, 'Illo autem magni aut quia quo non sapiente.', 'veritatis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verified', 0, 'wq1OTjhA8L', '2024-10-09 21:36:02', '2024-10-09 21:36:02'),
(103, 'service_provider', 'alena.bahringer@example.net', NULL, '$2y$12$16uV0bIiTVjnIlHhJGctxOk4yk/dbfyzXzt3HD6NsGptR/UWcchQW', 'Colleen', 'Renner', 'Sauer and Sons', 'https://media.giphy.com/media/1xZr5DzY7ob2c/giphy.gif', 'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif', 79, '+1 (828) 600-2162', NULL, 'Washington', NULL, 'Exercitationem laudantium nobis dignissimos id amet dolor qui.', 'eveniet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, '72RLDBaTeN', '2024-10-09 21:36:03', '2024-10-09 21:36:03'),
(104, 'service_provider', 'nico.ankunding@example.com', NULL, '$2y$12$awG9AGCuLufCZg/LhIVDwe9F7.LdCSRDCmKgsJRWW3QEV7PDfqjKu', 'Christophe', 'Thiel', 'Zemlak, Veum and Reichel', 'https://media.giphy.com/media/1xZr5DzY7ob2c/giphy.gif', 'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif', 70, '(747) 546-9298', NULL, 'Massachusetts', NULL, 'Voluptas ab in ea enim repellat debitis quos explicabo.', 'sunt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unverified', 0, 'rxrZSTidO7', '2024-10-09 21:36:03', '2024-10-09 21:36:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auction_bids`
--
ALTER TABLE `auction_bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blacklists`
--
ALTER TABLE `blacklists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building_categories`
--
ALTER TABLE `building_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building_category_types`
--
ALTER TABLE `building_category_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building_materials`
--
ALTER TABLE `building_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building_material_comments`
--
ALTER TABLE `building_material_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_group_post_id_foreign` (`group_post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `compare_properties`
--
ALTER TABLE `compare_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compare_property`
--
ALTER TABLE `compare_property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_members`
--
ALTER TABLE `group_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_members_group_id_foreign` (`group_id`),
  ADD KEY `group_members_user_id_foreign` (`user_id`);

--
-- Indexes for table `group_posts`
--
ALTER TABLE `group_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landlords`
--
ALTER TABLE `landlords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_likes_user_id_foreign` (`user_id`),
  ADD KEY `post_likes_group_post_id_foreign` (`group_post_id`),
  ADD KEY `post_likes_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `post_media`
--
ALTER TABLE `post_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_reviews`
--
ALTER TABLE `professional_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_views`
--
ALTER TABLE `professional_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prof_messages`
--
ALTER TABLE `prof_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_amenities`
--
ALTER TABLE `property_amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_categories`
--
ALTER TABLE `property_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `property_categories_category_slug_unique` (`category_slug`);

--
-- Indexes for table `property_deals`
--
ALTER TABLE `property_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_likes`
--
ALTER TABLE `property_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_payments`
--
ALTER TABLE `property_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_reviews`
--
ALTER TABLE `property_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_shares`
--
ALTER TABLE `property_shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_views`
--
ALTER TABLE `property_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scam_reports`
--
ALTER TABLE `scam_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trendings`
--
ALTER TABLE `trendings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auctions`
--
ALTER TABLE `auctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `auction_bids`
--
ALTER TABLE `auction_bids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blacklists`
--
ALTER TABLE `blacklists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `building_categories`
--
ALTER TABLE `building_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `building_category_types`
--
ALTER TABLE `building_category_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `building_materials`
--
ALTER TABLE `building_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `building_material_comments`
--
ALTER TABLE `building_material_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `compare_properties`
--
ALTER TABLE `compare_properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compare_property`
--
ALTER TABLE `compare_property`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `group_members`
--
ALTER TABLE `group_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `group_posts`
--
ALTER TABLE `group_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landlords`
--
ALTER TABLE `landlords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=398;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `post_media`
--
ALTER TABLE `post_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professional_reviews`
--
ALTER TABLE `professional_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `professional_views`
--
ALTER TABLE `professional_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prof_messages`
--
ALTER TABLE `prof_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `property_amenities`
--
ALTER TABLE `property_amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `property_categories`
--
ALTER TABLE `property_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_deals`
--
ALTER TABLE `property_deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `property_likes`
--
ALTER TABLE `property_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `property_payments`
--
ALTER TABLE `property_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `property_reviews`
--
ALTER TABLE `property_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `property_shares`
--
ALTER TABLE `property_shares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `property_views`
--
ALTER TABLE `property_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scam_reports`
--
ALTER TABLE `scam_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trendings`
--
ALTER TABLE `trendings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_group_post_id_foreign` FOREIGN KEY (`group_post_id`) REFERENCES `group_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `group_members`
--
ALTER TABLE `group_members`
  ADD CONSTRAINT `group_members_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `group_members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD CONSTRAINT `post_likes_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_likes_group_post_id_foreign` FOREIGN KEY (`group_post_id`) REFERENCES `group_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
