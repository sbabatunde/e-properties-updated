-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 04:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auctions`
--

INSERT INTO `auctions` (`id`, `property_id`, `start_date`, `start_time`, `end_date`, `end_time`, `starting_price`, `denomination`, `append`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-09-01', '22:08', '2024-10-28', '22:08', 2000000.00, '₦', 'Monthly', '2024-05-29 19:25:51', '2024-05-29 19:25:51'),
(2, 3, '2024-05-02', '23:08', '2024-05-18', '10:09', 25900000.00, '₦', 'Monthly', '2024-05-29 20:11:20', '2024-05-29 20:11:20'),
(4, 5, '2024-08-01', '13:35', '2024-09-26', '17:35', 12000000.00, '₦', 'Annually', '2024-06-22 10:40:27', '2024-06-22 10:40:27'),
(75, 2, '2024-05-24', '08:46:38', '2024-07-28', '18:29:13', 354233797.08, '₦', 'Annually', '2024-08-10 06:29:22', '2024-07-15 03:36:58'),
(76, 27, '2024-06-21', '00:26:28', '2024-07-09', '11:05:11', 6510203.23, '$', 'Monthly', '2024-08-14 16:51:43', '2024-07-22 17:25:32'),
(77, 35, '2024-07-12', '17:13:50', '2024-07-19', '06:45:36', 5000000.00, '$', 'Annually', '2024-07-07 12:02:42', '2024-06-30 10:41:16'),
(78, 26, '2024-06-27', '16:48:51', '2024-08-26', '10:49:18', 5000000.00, '₦', 'Monthly', '2024-08-23 04:22:41', '2024-09-23 19:38:38'),
(79, 34, '2024-06-12', '16:56:54', '2024-07-05', '13:26:56', 5000000.00, '$', 'Monthly', '2024-09-22 12:51:15', '2024-08-23 08:22:48'),
(80, 29, '2024-05-26', '09:15:06', '2024-07-05', '22:51:23', 50466633.57, '$', 'Monthly', '2024-07-23 05:38:29', '2024-07-29 07:26:22'),
(81, 31, '2024-06-20', '15:49:45', '2024-08-30', '14:17:48', 5000000.00, '$', 'Annually', '2024-08-05 23:48:16', '2024-07-19 00:27:09'),
(82, 30, '2024-05-28', '00:10:52', '2024-09-22', '23:37:19', 74829226.58, '$', 'Monthly', '2024-08-06 21:16:38', '2024-07-10 13:13:06'),
(83, 32, '2024-05-31', '04:44:40', '2024-07-02', '09:42:48', 5000000.00, '$', 'Annually', '2024-09-22 00:44:30', '2024-09-18 11:16:26'),
(84, 28, '2024-06-18', '05:49:55', '2024-07-07', '03:29:08', 5000000.00, '₦', 'Monthly', '2024-09-02 12:03:37', '2024-08-24 11:11:37'),
(85, 38, '2024-08-22', '22:40', '2024-11-21', '00:00', 5000000.00, '₦', 'Monthly', '2024-08-22 19:45:25', '2024-08-22 19:45:25'),
(86, 33, '', '', '', '', 0.00, '', '', NULL, NULL),
(87, 33, '2024-08-22', ' 20:31:44', '2024-10-22', ' 20:31:44', 4000000.00, '₦', 'Monthly', NULL, NULL),
(88, 40, '2024-08-06', '16:35', '2024-10-16', '13:58', 4000000.00, '₦', 'Monthly', '2024-08-27 14:42:16', '2024-08-27 14:42:16');

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
(1, 79, 3, 90000000.00, '2024-07-01 12:16:13', '2024-07-01 12:51:31'),
(2, 79, 2, 70000000.00, '2024-07-01 12:17:57', '2024-07-01 12:17:57'),
(3, 79, 4, 0.00, '2024-07-01 12:18:07', '2024-07-01 12:18:07'),
(4, 79, 15, 130000000.00, '2024-07-01 12:52:34', '2024-07-01 12:52:34'),
(6, 80, 15, 70000000.00, '2024-07-04 23:42:23', '2024-07-04 23:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `blacklists`
--

CREATE TABLE `blacklists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reporter_id` bigint(20) NOT NULL,
  `reported_id` bigint(20) NOT NULL,
  `blacklisted_by` bigint(20) NOT NULL,
  `org_description` varchar(255) NOT NULL,
  `reported_on` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 21, 'Title: \"How Technology is Revolutionizing Nigeria’s Real Estate Sector\"', 'Explore the impact of technologies like property management software, virtual tours, and blockchain on Nigeria\'s real estate market. Highlight specific examples and case studies of how tech innovations are improving efficiency and transparency.', 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724688381/e-properties/blogs/wrydzleev28jnel9uepj.png', '2024-08-26 15:06:22', '2024-08-26 15:06:22'),
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
  `price` decimal(10,2) NOT NULL,
  `installment` varchar(255) DEFAULT 'No',
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `building_materials`
--

INSERT INTO `building_materials` (`id`, `user_id`, `thumbnail`, `title`, `type`, `address`, `quantity`, `unit`, `price`, `installment`, `description`, `created_at`, `updated_at`) VALUES
(2, 21, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1723891975/e-properties/media/image/ydt1rcpogkkftlytqujz.jpg', 'Thread Nails', 'roofing-hammer', '13, Tony Elumelu, Crescent, Ojodu Berger, Lagos.', '20', NULL, 20500.00, 'Yes', 'Verified nails with neat appearance', '2024-07-22 19:05:37', '2024-07-22 19:05:37'),
(4, 21, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1723892884/e-properties/media/image/quugircwctviluw82mlw.jpg', 'Jig Saw', 'saw', '10, Ekundayo road, Abule Odu, Alimosho,Lagos', '4 set', NULL, 40000.00, NULL, 'Very cool saws', '2024-07-22 19:13:19', '2024-07-22 19:13:19'),
(5, 21, 'https://res.cloudinary.com/dqcess34g/image/upload/v1723710466/building_materials/jhol9csesdxyb31a2zks.jpg', 'Long \n Nails', 'roofing-nail-gun', '2, banjo street off Lisabi Street off Ojuelegba Road, Yaba', '24', NULL, 200000.00, 'Yes', 'sssss', '2024-08-14 14:55:38', '2024-08-14 14:55:38'),
(6, 21, 'https://res.cloudinary.com/dqcess34g/image/upload/v1723710466/building_materials/jhol9csesdxyb31a2zks.jpg', 'Scre w Head Nail', 'roofing-nail-gun', '10, Emina Crescent, Off Toyin Street, behind White House Hotel, Ikeja, Lagos.', '24', NULL, 23000.00, 'Yes', 'ssss', '2024-08-15 07:27:46', '2024-08-15 07:27:46'),
(7, 21, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1723711298/building_materials/nzfsveeesst6ahckjprv.jpg', 'Nail', 'roofing-hammer', '10, Emina Crescent, Off Toyin Street, behind White House Hotel, Ikeja, Lagos.', '90', NULL, 300000.00, 'Yes', 'This nails are very good', '2024-08-15 07:41:38', '2024-08-15 07:41:38');

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
(45, 21, 1, '2024-08-23 08:36:15', '2024-08-23 08:36:15'),
(46, 21, 26, '2024-08-23 08:37:14', '2024-08-23 08:37:14');

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_posts`
--

CREATE TABLE `group_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `post` varchar(255) NOT NULL,
  `likes` int(11) DEFAULT NULL,
  `dislikes` int(11) DEFAULT NULL,
  `total_comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(378, '2024_07_26_130939_create_blacklists_table', 10),
(379, '2024_08_14_150209_create_prof_messages_table', 10),
(380, '2024_08_22_212245_create_property_likes_table', 11),
(381, '2024_08_22_212507_create_property_views_table', 11),
(382, '2024_08_22_212518_create_property_shares_table', 11),
(383, '2024_08_23_102655_create_property_reviews_table', 12),
(384, '2024_08_24_181806_create_professional_reviews_table', 13),
(385, '2024_08_24_184534_create_professional_views_table', 13),
(387, '2024_08_25_190518_create_blogs_table', 14);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_reviews`
--

INSERT INTO `professional_reviews` (`id`, `user_id`, `professional_id`, `review`, `created_at`, `updated_at`) VALUES
(1, NULL, 23, 'The agent was well mannered and well behaved when I spoke with him.', '2024-08-25 12:01:16', '2024-08-25 12:01:16'),
(2, NULL, 23, 'He\'s very good at what he does, I think he will be fine with whatever he does.', '2024-08-25 12:01:56', '2024-08-25 12:01:56'),
(3, NULL, 43, 'This agent is a very experienced one and from my experience with him he knows his job well.', '2024-08-25 12:09:40', '2024-08-25 12:09:40'),
(4, NULL, 18, 'Mr Kunle is a very competent and trustworthy man. I\'ve been able to work with him on two or three occassion and I\'ve been impressed by his professionalism', '2024-08-25 12:25:18', '2024-08-25 12:25:18');

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
(29, 21, 23, '2024-08-29 11:21:35', '2024-08-29 11:21:35');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `agent_id`, `property_code`, `title`, `thumbnail`, `landlord`, `furnishing`, `type_id`, `status`, `bedrooms`, `bathrooms`, `toilets`, `auction`, `deal`, `description`, `state`, `localty`, `area`, `street`, `C_of_O`, `installment`, `survey_plan`, `deed_of_ass`, `grant_of_prob`, `deed_of_mort`, `deed_of_gift`, `property_doc`, `land_receipt`, `created_at`, `updated_at`) VALUES
(1, 15, 'EP6', '3 Bedroom Apartment', 'assets/frontend/property/thumbnail/1800420039830852.jpg', 'No', 'Yes', 2, 'Rent', 2, 3, 3, 'Yes', 'No', 'The house is very appealing and well furnished for your convenience', 'Lagos', 'Mainland, Lagos', 'Ikeja', '19,Toyin Street, Ikeja, Lagos', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'No', '2024-05-29 19:25:50', '2024-05-29 19:25:50'),
(2, 23, 'EP7', 'Multi Tenant Mall at Ajah', 'assets/frontend/property/thumbnail/1800422273928130.jpg', 'No', 'Yes', 8, 'Sale', 5, 4, 4, 'No', 'No', 'A very good mall for multi tenant.  It also has provision for quality water supply, reliable and constant power supply and maximum security is guaranteed.', 'Lagos', 'Island, Lagos', 'Ajah', '25, Anikulapo crescent, Lekki-Ajah,Lagos', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', '2024-05-29 20:01:21', '2024-05-29 20:01:21'),
(3, 24, 'EP3', '4 Bedroom Apartment', 'assets/frontend/property/thumbnail/1800422901276785.jpeg', 'No', 'No', 3, 'Rent', 7, 3, 3, 'Yes', 'No', 'Very good apartment with an affordable price and comfortable also.', 'Lagos', 'Island, Lagos', 'Ajah', '25, Anikulapo crescent, Lekki-Ajah,Lagos', 'No', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', '2024-05-29 20:11:19', '2024-05-29 20:11:19'),
(5, 24, 'EP9', '2 Bedroom Duplex at Green Land Estate', 'assets/frontend/property/thumbnail/1802561311014421.jpg', 'Yes', 'No', 4, 'Sale', 2, 3, 2, 'Yes', 'Yes', 'This property is in a very good condition and legally purchased from the Federal Ministry of Land and Housing. The proper documents are readily available upon payment completion', 'Lagos', 'Abule-Odu,Alimosho.', 'Alimosho.', '25, Anikulapo crescent, Lekki-Ajah,Lagos', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', '2024-06-22 10:40:26', '2024-06-22 10:40:26'),
(26, 18, 'EP9359', 'Veritatis aut eum cupiditate quae.', 'https://picsum.photos/800/600?random=772', 'Yes', 'No', 1, 'Sale', 8, 1, 2, 'No', 'No', 'Recusandae provident aut sit qui.', 'Lagos', 'West Dan', 'Secretariat', '967 Graham Mews', 'No', 'Yes', 'Yes', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', '2024-09-14 16:04:24', '2024-06-23 20:05:22'),
(27, 21, 'EP9921', 'Alias non nihil delectus atque eius delectus nulla cupiditate.', 'https://picsum.photos/800/600?random=320', 'Yes', 'Yes', 18, 'Let', 4, 2, 6, 'No', 'No', 'Debitis ea voluptatum libero voluptatum est dicta.', 'Lagos', 'Ornchester', 'Alloy Plaza', '40300 Ritchie Locks', 'No', 'Yes', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', '2024-07-30 21:01:37', '2024-06-23 20:05:22'),
(28, 21, 'EP9400', 'Sunt aspernatur animi veniam.', 'https://picsum.photos/800/600?random=458', 'Yes', 'No', 15, 'Let', 8, 8, 8, 'No', 'No', 'Iusto consequuntur delectus et eos beatae quos cum at.', 'Kaduna', 'New Trevor', 'Alloy Plaza', '360 Heller Branch Apt. 890', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'No', 'Yes', '2024-09-05 20:07:29', '2024-06-23 20:05:22'),
(29, 15, 'EP9969', 'Voluptatem impedit totam vel.', 'https://picsum.photos/800/600?random=401', 'Yes', 'Yes', 18, 'Sale', 1, 2, 8, 'No', 'No', 'Sit saepe quis blanditiis.', 'Lagos', 'West Giovanni', 'Mr Biggs Eatery', '109 Jeremie Springs', 'No', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', '2024-08-12 05:43:56', '2024-06-23 20:05:22'),
(30, 21, 'EP9184', 'Et voluptas tenetur consequatur pariatur dolor vero sed.', 'https://picsum.photos/800/600?random=376', 'Yes', 'Yes', 6, 'Sale', 3, 3, 2, 'No', 'No', 'Quas rerum eos reprehenderit unde et.', 'Kaduna', 'Freidaside', 'Shopping Mall', '76429 Amir Station', 'No', 'No', 'Yes', 'No', 'No', 'Yes', 'No', 'Yes', 'Yes', '2024-09-07 15:36:43', '2024-06-23 20:05:22'),
(31, 15, 'EP9641', 'Et impedit magnam laborum et et veniam.', 'https://picsum.photos/800/600?random=410', 'Yes', 'No', 10, 'Let', 8, 5, 9, 'No', 'No', 'Odit est sit sit natus deleniti nesciunt.', 'Lagos', 'Rippinfort', 'Alloy Plaza', '12845 Adelia Ways', 'No', 'Yes', 'No', 'Yes', 'No', 'No', 'Yes', 'Yes', 'No', '2024-09-05 20:01:33', '2024-06-23 20:05:22'),
(32, 18, 'EP9922', 'Sit aut est debitis dolorum voluptatem.', 'https://picsum.photos/800/600?random=722', 'Yes', 'No', 3, 'Let', 4, 1, 2, 'No', 'No', 'Dolor suscipit eaque praesentium.', 'Kaduna', 'Port Coopertown', 'Mr Biggs Eatery', '1347 Willie Throughway', 'No', 'Yes', 'No', 'No', 'Yes', 'Yes', 'No', 'Yes', 'No', '2024-09-21 04:55:19', '2024-06-23 20:05:22'),
(33, 23, 'EP9301', 'Deleniti voluptas fugiat et animi sed repellendus.', 'https://picsum.photos/800/600?random=558', 'Yes', 'Yes', 11, 'Let', 5, 5, 2, 'No', 'No', 'Et ab veniam error minus.', 'Enugu', 'Ewaldhaven', 'Mr Biggs Eatery', '955 Giles Radial Suite 730', 'Yes', 'No', 'No', 'Yes', 'No', 'No', 'Yes', 'Yes', 'Yes', '2024-07-10 10:33:00', '2024-06-23 20:05:22'),
(34, 15, 'EP9775', 'Atque quia fugiat delealiquam hic.', 'https://picsum.photos/800/600?random=225', 'Yes', 'Yes', 6, 'Let', 2, 5, 2, 'No', 'No', 'Quis explicabo quod quo voluptas.', 'Lagos', 'Lake Consuelo', 'Alloy Plaza', '7629 Wilbert Ferry Suite 159', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'No', '2024-08-13 07:31:37', '2024-06-23 20:05:22'),
(35, 23, 'EP9574', 'Sunt et qui vitae id et qui.', 'https://picsum.photos/800/600?random=534', 'Yes', 'No', 4, 'Let', 2, 9, 9, 'No', 'No', 'Placeat neque quis fugiat voluptatem est vel enim.', 'Oyo', 'Lake Devanteview', 'Mr Biggs Eatery', '81613 Martin Mountains Apt. 288', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'No', '2024-07-13 17:43:25', '2024-06-23 20:05:22'),
(38, 24, 'EP9', '4 Bedroom Flat at Ajanikoko Estate, Isolo.', 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724358703/e-properties/properties/thumbnail/v9qtcghumxqlqqospq0l.jpg', 'No', 'No', 1, 'Rent', 4, 3, 2, 'No', 'No', 'This is a house that is comfortable and situated in a very good environment. It has a lot of benefit just staying there.', 'Lagos', 'Mainland, Lagos', 'Isolo', 'Aruna Ikukoyi Road, Isolo Lagos.', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '2024-08-22 19:31:44', '2024-08-22 19:31:44'),
(40, 21, 'EP9', 'Mini Flat at Gateway Garden, Ewekoro', 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724773322/e-properties/properties/thumbnail/hfqblzlc0rbvprf2ykm5.jpg', 'No', 'No', 4, 'Sale', 2, 2, 2, 'Yes', 'No', 'It\'s a nice apartment in the neighbourhood. The coompound is also very neat and with constant power.', 'Ogun', 'Ewekoro', 'Ajagba', '23, Adejobi Ogog close, Ajagba,Ewekoro.', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'Yes', '2024-08-27 14:42:06', '2024-08-27 14:42:06');

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
(36, 40, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724773335/e-properties/properties/amenities/posxpkc2nfvxgpwd7du9.png', '2024-08-27 14:42:16', '2024-08-27 14:42:16');

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
(10, 39, '2024-08-01', '22:41', '2024-09-22', '06:41', 3500000.00, '₦', 'Monthly', '2024-08-22 19:45:25', '2024-08-22 19:45:25');

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
(17, 40, 'Monthly', 2000000.00, 500000.00, '₦', 'Monthly', '₦', 'Monthly', '2024-08-27 14:42:16', '2024-08-27 14:42:16');

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
(1, 21, 33, '<blockquote>\r\n<p>This is a very good property, the agent also is very nice and the place is very clean.</p>\r\n</blockquote>', '2024-08-23 09:36:09', '2024-08-23 09:36:09'),
(2, 21, 33, '<blockquote>\r\n<p>This is a very good property, the agent also is very nice and the place is very clean.</p>\r\n</blockquote>', '2024-08-23 09:37:17', '2024-08-23 09:37:17'),
(3, 21, 33, '<p>For me it&#39;s a very nice place of abode and very&nbsp;<strong>affordable.</strong><br />\r\nI couldn&#39;t believe my eyes when they told me the cost.</p>', '2024-08-23 09:44:33', '2024-08-23 09:44:33'),
(4, NULL, 1, 'It looks like a nice apartment and i also think it very okay.', '2024-08-24 16:45:36', '2024-08-24 16:45:36'),
(5, NULL, 1, 'I spoke with this agent and checked out the apartment, it befits the money that\'s placed on it.', '2024-08-24 16:46:28', '2024-08-24 16:46:28'),
(6, NULL, 28, 'It\'s beautiful apartment and very nice to have.\r\n\r\nI think it would be a lovely one.', '2024-08-24 17:20:58', '2024-08-24 17:20:58'),
(7, NULL, 28, 'It\'s beautiful apartment and very nice to have.\r\n\r\nI think it would be a lovely one.', '2024-08-25 11:48:30', '2024-08-25 11:48:30'),
(8, NULL, 28, 'I spoke with the agent in charge but his response wasn\'t very good. But apart from that I think it\'s a good place.', '2024-08-25 11:49:47', '2024-08-25 11:49:47'),
(9, NULL, 28, 'As a tenant who has lived in this house for a while i think it\'s a very good place to be.\r\n\r\nThere\'s water, constant power supply, and most importantly,, it\'s in a secure neighbourhood.', '2024-08-25 11:51:41', '2024-08-25 11:51:41'),
(10, NULL, 28, 'Well, I\'ve checked out the apartment and I love the place, but the total package seems too high for me.', '2024-08-25 11:52:26', '2024-08-25 11:52:26');

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
(22, 21, 5, '2024-08-29 12:03:12', '2024-08-29 12:03:12');

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
(1, 18, 'BDB1234', 'EmeMik Ventures', 19, '2024-06-22 15:41:06', '2024-06-22 15:41:06'),
(3, 54, 'Ejiwil1233', 'Williams Bar Association', 15, '2024-08-21 14:53:23', '2024-08-21 14:53:23');

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
(43, 1, 'trending', '2024-08-14 14:12:41', '2024-08-14 14:12:41');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `email`, `email_verified_at`, `password`, `firstname`, `lastname`, `business_name`, `business_image`, `photo`, `country_code`, `phone`, `whatApp`, `state`, `axis`, `about_org`, `org_service`, `org_state`, `org_desc`, `org_axis`, `business_cat`, `experience`, `fb`, `twitter`, `linkedIn`, `instagram`, `gender`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'tenant', 'salawubabatunde69@gmail.com', NULL, '$2y$12$Jps5HdQzBiXXLGtdgQhDXOzkGjDtuDXCTuKNbCyEnL9HSNsvljjdu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12', NULL, NULL, NULL, NULL, NULL, 'verified', NULL, '2024-05-29 07:00:22', '2024-08-27 13:15:02'),
(15, 'landlord', 'ajib@ng.com', NULL, '$2y$12$xXOBJ7pYsD/h6X640ZACeOo4L0.hMaNQ9ao3ugqymc.Z7eDDW5KCu', 'Ajibola', 'Adekunle', 'BeeDeeBee Ventures', '/assets/images/properties-1.png', '/assets/admin/images/photo/service11.png', 234, '09034578622', '09034578622', 'OYO', '+234', NULL, 'Great', 'OYO', NULL, '+234', '+234', '8', 'stunde@fb.com', 'stunde@twitter.com', 'salawutunde-104b', NULL, NULL, 'verified', NULL, '2024-05-29 09:29:05', '2024-08-21 15:39:36'),
(18, 'service_provider', 'stunde@gmail.com', NULL, '$2y$12$WVy1LmbqDqgzVbD1ItFbSO98bHUVLjA9R4iIAoHw4.vq1I3/FKAei', 'Adekunle', 'Gabriel', NULL, NULL, '/assets/admin/images/photo/service12.png', NULL, '08138504844', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', NULL, NULL, NULL, NULL, NULL, 'verified', NULL, '2024-06-22 15:41:06', '2024-08-21 15:39:34'),
(21, 'admin', 'admin@gmail.com', NULL, '$2y$12$ySdhBN2dG5RO5hW5726kXek99zSd9QrYQB.YXz7hfFsmVSNXTF3va', 'Essential', 'Admin', NULL, NULL, '/assets/admin/images/photo/service13.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, 'verified', NULL, '2024-07-10 23:13:41', '2024-08-27 14:10:33'),
(23, 'agent', 'jola@gmail.com', NULL, '$2y$12$wnQuGbZXWXD/8Er3ZcjcuuYp4xxjBj2l6Vcwq8/lNCqAMbQDNPiUi', 'Jolayemi', 'Olaiya', NULL, '/assets/images/properties-1.png', '/assets/admin/images/photo/service11.png', NULL, '08077889832', '09087459822', 'Ibadan', 'Iwo road', 'At Jolayemi Global we take every part of property negotiation with full precaution and guarantee customer\'s satisfaction.', NULL, 'Ibadan', NULL, 'Bashorun', NULL, '7', NULL, NULL, NULL, NULL, NULL, 'unverified', NULL, '2024-08-01 06:48:59', '2024-08-01 06:48:59'),
(24, 'agent', 'kalglo@gmail.com', NULL, '$2y$12$/JE7neoCHOQbzXB7yjIDPuendJt.BtXIvzH86AOIgSnKYXhxEY1xe', 'Kalu ', 'Uche', NULL, '/assets/images/RS1.jpg', '/assets/admin/images/photo/service12.png', NULL, '07067543213', NULL, NULL, NULL, 'We are very good at whatwe do rregardless of the circumstances\\', NULL, 'Lagos', NULL, 'Ikeja', NULL, '10', NULL, NULL, NULL, NULL, NULL, 'verified', NULL, '2024-08-01 06:52:12', '2024-08-21 15:39:47'),
(25, 'agent', 'ikekal@gmail.com', NULL, '$2y$12$MKkn1Ha2DD7nKzgkqv7OF./ira6aNNujxvDUS8NlLN4ZywurHcpv2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, 'unverified', NULL, '2024-08-20 20:00:52', '2024-08-20 20:00:52'),
(34, 'tenant', 'lukasade@gmail.com', NULL, '$2y$12$pFkERtrsKNH5iXwOFBBQ2OG3/8K1w8XLvh6WceMlR.2wF57Y0m.eS', 'Adeyemi', 'Lukas', NULL, NULL, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724253590/e-properties/users/rk4hcqtu6bpkcgr8ebex.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, NULL, NULL, NULL, NULL, 'verified', NULL, '2024-08-21 14:19:49', '2024-08-27 14:10:28'),
(43, 'agent', 'ogbevo@gmail.com', NULL, '$2y$12$S6L9YHpx46S8QxdpRAimGu.XlLOpNHNZMirgbNCvPBT6AHPsFUFW.', 'Ogbeviro', 'Eunice', NULL, NULL, 'https://res.cloudinary.com/dnqmjzvy3/image/upload/v1724254343/e-properties/users/k4bjzqexfisabcqzvwg3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15', NULL, NULL, NULL, NULL, NULL, 'unverified', NULL, '2024-08-21 14:32:22', '2024-08-21 14:32:24'),
(54, 'service_provider', 'ejiwil@yahoo.com', NULL, '$2y$12$WukESHc1qwM3OfsQ.nf9fuaxDvMJ/BhdFL0KRX6LUH7CBHEPx3.Um', 'Williams', 'Ejiroh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11', NULL, NULL, NULL, NULL, NULL, 'unverified', NULL, '2024-08-21 14:53:23', '2024-08-21 14:53:23');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

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
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `auction_bids`
--
ALTER TABLE `auction_bids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blacklists`
--
ALTER TABLE `blacklists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compare_properties`
--
ALTER TABLE `compare_properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compare_property`
--
ALTER TABLE `compare_property`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_posts`
--
ALTER TABLE `group_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_media`
--
ALTER TABLE `post_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professional_reviews`
--
ALTER TABLE `professional_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `professional_views`
--
ALTER TABLE `professional_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `property_amenities`
--
ALTER TABLE `property_amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `property_categories`
--
ALTER TABLE `property_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_deals`
--
ALTER TABLE `property_deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `property_likes`
--
ALTER TABLE `property_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `property_payments`
--
ALTER TABLE `property_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trendings`
--
ALTER TABLE `trendings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
