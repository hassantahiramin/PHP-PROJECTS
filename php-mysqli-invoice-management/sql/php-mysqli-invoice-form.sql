-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2023 at 05:09 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20434609_invoiceform`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `company_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_address` text COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_description` text COLLATE utf8_unicode_ci NOT NULL,
  `ntn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`company_logo`, `company_name`, `company_address`, `city`, `state`, `zip`, `country`, `company_description`, `ntn`, `phone1`, `phone2`, `phone3`, `fax1`, `fax2`, `email`, `url`) VALUES
('logo.jpg', 'Company 1', 'Sialkot-51310, Pakistan', 'Sialkot', 'Punjab', '51310', 'Pakistan', '', '0000000-0', '+92-52-0000000', '+92-52-0000001', '+92-52-0000002', '+92-52-0000003', '+92-52-0000004', 'sales@example.com', 'https://example.com');

-- --------------------------------------------------------

--
-- Table structure for table `company_representative`
--

CREATE TABLE `company_representative` (
  `rep_id` int(11) NOT NULL,
  `rep_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep_job_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company_representative`
--

INSERT INTO `company_representative` (`rep_id`, `rep_avatar`, `rep_title`, `rep_name`, `rep_job_title`) VALUES
(1, '2exnl8g5h1og4co.jpg', 'Mr.', 'Christop Towne', 'Chief Executive Officer');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL,
  `currency_name` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `currency_symbol` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `currency_name`, `currency_code`, `currency_symbol`) VALUES
(1, 'Australia Dollar', 'AUD', '$'),
(2, 'Canada Dollar', 'CAD', '$'),
(3, 'Euro', 'EUR', '€'),
(4, 'Japan Yen', 'JPY', '¥'),
(5, 'Pakistan Rupee', 'PKR', '₨'),
(6, 'United Kingdom Pound', 'GBP', '£'),
(7, 'United States Dollar', 'USD', '$');

-- --------------------------------------------------------

--
-- Table structure for table `currency_type`
--

CREATE TABLE `currency_type` (
  `currency_id` int(11) NOT NULL,
  `currency_name` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `currency_symbol` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `currency_type`
--

INSERT INTO `currency_type` (`currency_id`, `currency_name`, `currency_code`, `currency_symbol`) VALUES
(1, 'United States Dollar', 'USD', '$'),
(2, 'United Kingdom Pound', 'GBP', '£'),
(3, 'Euro', 'EUR', '€'),
(4, 'Japan Yen', 'JPY', '¥');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `customer_id` int(11) NOT NULL,
  `csid` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `job_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `billing_address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `billing_city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `billing_state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `billing_zip` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `billing_country` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `billing_phone1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `billing_phone2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `billing_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_fax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_email1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `billing_email2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `billing_email3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `billing_website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_zip` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_country` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_phone1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_phone2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_mobile` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_fax` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_email1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_email2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_email3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shipping_website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comments` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`customer_id`, `csid`, `company_name`, `name`, `gender`, `title`, `job_title`, `billing_address`, `billing_city`, `billing_state`, `billing_zip`, `billing_country`, `billing_phone1`, `billing_phone2`, `billing_mobile`, `billing_fax`, `billing_email1`, `billing_email2`, `billing_email3`, `billing_website`, `shipping_address`, `shipping_city`, `shipping_state`, `shipping_zip`, `shipping_country`, `shipping_phone1`, `shipping_phone2`, `shipping_mobile`, `shipping_fax`, `shipping_email1`, `shipping_email2`, `shipping_email3`, `shipping_website`, `comments`) VALUES
(1, 'CT-53700', 'Company 1', 'Christop Towne', 'Male', 'Mr.', 'Chief Executive', 'Lahore-53700, Pakistan.', 'Lahore', 'Punjab', '53700', 'Pakistan', '042-00000000', '042-00000001', '0300-00000000', '042-00000002', 'ceo@example.com', 'sales@example.com', 'marketing@example.com', 'https://www.example.com', 'Canal Road, Lahore-53700, Pakistan.', 'Lahore', 'Punjab', '53700', 'Pakistan', '042-00000000', '042-00000001', '0300-00000000', '042-00000002', 'ceo@example.com', 'sales@example.com', 'marketing@example.com', 'https://www.example.com', '<p>Address details for M/s Company-1.</p>'),
(2, 'HH-51310', 'Company 2', 'Hollis Hoeger\n', 'Male', 'Mr.', 'CEO', 'Sialkot Pakistan', 'Sialkot', 'Punjab', '51310', 'Pakistan', '+92 - 52 - 00000000', '+92 - 52 - 00000001', '+92 - 321 - 00000000', '+92 - 52 - 00000002', 'info@example.com', '', '', 'https://example.com', 'South S.I.E Sialkot Pakistan', 'Sialkot', 'Punjab', '51310', 'Pakistan', '+92 - 52 - 00000000', '+92 - 52 - 00000001', '+92 - 321 - 00000000', '+92 - 52 - 00000002', 'info@rheingroup.com', '', '', 'https://www.example.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `default_currency`
--

CREATE TABLE `default_currency` (
  `id` int(11) NOT NULL,
  `currency_symbol` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `default_currency`
--

INSERT INTO `default_currency` (`id`, `currency_symbol`) VALUES
(1, '€');

-- --------------------------------------------------------

--
-- Table structure for table `destination_port`
--

CREATE TABLE `destination_port` (
  `destination_port_id` int(11) NOT NULL,
  `destination_port` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `destination_port`
--

INSERT INTO `destination_port` (`destination_port_id`, `destination_port`) VALUES
(1, 'Lisbon, Portugal'),
(2, 'Mumbai, India');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `discount_id` int(11) NOT NULL,
  `discount_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount_description` text COLLATE utf8_unicode_ci NOT NULL,
  `discount_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount_rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`discount_id`, `discount_title`, `discount_description`, `discount_code`, `discount_rate`) VALUES
(1, 'Summer 2023 Discount', 'Summer 2023 Discount', 'SUMMER23', 11),
(2, 'Winter 2022 Discount', 'Winter 2022 Discount', 'WINTER22', 15);

-- --------------------------------------------------------

--
-- Table structure for table `docs_default_currency`
--

CREATE TABLE `docs_default_currency` (
  `set_currency` char(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `docs_default_currency`
--

INSERT INTO `docs_default_currency` (`set_currency`) VALUES
('EUR');

-- --------------------------------------------------------

--
-- Table structure for table `email_invoice`
--

CREATE TABLE `email_invoice` (
  `invoice_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invoice_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Invoice_subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invoice_message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email_invoice`
--

INSERT INTO `email_invoice` (`invoice_name`, `invoice_email`, `Invoice_subject`, `invoice_message`) VALUES
('Your Company Name', 'info@yourmailaddress.com', 'Your new invoice {invoiceNr} with a total amount of $ {invoiceAmount}', '<p>Dear Customer,<br />\n<br />\nYou have received a new invoice, please see the attachment.&nbsp;<br />\nWe would like to ask you to fulfill payment within 14 business days.<br />\n<br />\nIf you have any questions, please don&#39;t hesitate to contact us.<br />\n<br />\nKind Regards,<br />\n<br />\n<strong>John Doe&nbsp;Company Name Ltd.<br />\ninfo@yourmailaddress.com</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `exporting_carier`
--

CREATE TABLE `exporting_carier` (
  `exporting_carier_id` int(11) NOT NULL,
  `exporting_carier` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exporting_carier`
--

INSERT INTO `exporting_carier` (`exporting_carier_id`, `exporting_carier`) VALUES
(1, 'DHL'),
(2, 'FEDEX'),
(3, 'UPS');

-- --------------------------------------------------------

--
-- Table structure for table `export_docs_logo`
--

CREATE TABLE `export_docs_logo` (
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `export_docs_logo`
--

INSERT INTO `export_docs_logo` (`logo`) VALUES
('lrreo5z0ke8w08.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `freight`
--

CREATE TABLE `freight` (
  `freight_id` int(11) NOT NULL,
  `freight` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `freight`
--

INSERT INTO `freight` (`freight_id`, `freight`) VALUES
(1, 'Prepaid');

-- --------------------------------------------------------

--
-- Table structure for table `incoterms`
--

CREATE TABLE `incoterms` (
  `incoterms_id` int(11) NOT NULL,
  `incoterms` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `incoterms`
--

INSERT INTO `incoterms` (`incoterms_id`, `incoterms`) VALUES
(1, 'ExWorks (EXW)'),
(2, 'Free Carrier (FCA)'),
(3, 'Carriage Paid To (CPT)'),
(4, 'Carriage and Insurance Paid To (CIP)'),
(5, 'Delivered at Terminal (DAT)'),
(6, 'Delivered at Place (DAP)'),
(7, 'Delivered Duty Paid (DDP)'),
(8, 'Free Alongside Ship (FAS)'),
(9, 'Free on Board (FOB)'),
(10, 'Cost and Freight (CFR)'),
(11, 'Cost, Insurance, and Freight (CIF)');

-- --------------------------------------------------------

--
-- Table structure for table `invoiceform_clients`
--

CREATE TABLE `invoiceform_clients` (
  `clientID` int(21) NOT NULL,
  `userID` int(21) NOT NULL,
  `clientNr` varchar(25) NOT NULL,
  `clientCompany` varchar(255) NOT NULL,
  `clientFullname` varchar(255) NOT NULL,
  `clientAddress2` varchar(255) NOT NULL,
  `clientAddress1` varchar(255) NOT NULL,
  `clientCity` varchar(255) NOT NULL,
  `clientState` varchar(15) NOT NULL,
  `clientZipcode` varchar(15) NOT NULL,
  `clientEmailaddress` varchar(255) NOT NULL,
  `clientPhonenumber` varchar(15) NOT NULL,
  `clientFaxnumber` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoiceform_clients`
--

INSERT INTO `invoiceform_clients` (`clientID`, `userID`, `clientNr`, `clientCompany`, `clientFullname`, `clientAddress2`, `clientAddress1`, `clientCity`, `clientState`, `clientZipcode`, `clientEmailaddress`, `clientPhonenumber`, `clientFaxnumber`) VALUES
(1, 0, '11', 'Company-1', 'Christop Towne', '', 'Canal Road Lahore', 'Lahore', 'Punjab', '53700', 'sales@example.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoiceform_invoices`
--

CREATE TABLE `invoiceform_invoices` (
  `invoiceID` int(21) NOT NULL,
  `userID` int(21) NOT NULL,
  `invoiceNr` varchar(155) NOT NULL,
  `invoiceDate` date NOT NULL,
  `invoiceSubtotal` double NOT NULL,
  `invoiceTax` double NOT NULL,
  `invoiceTotal` double NOT NULL,
  `invoiceTotalPaid` double NOT NULL,
  `invoiceTotalDue` double NOT NULL,
  `invoiceClientID` int(11) NOT NULL,
  `invoiceClientName` varchar(255) NOT NULL,
  `invoiceLogo` varchar(255) NOT NULL,
  `invoiceNote` longtext NOT NULL,
  `invoiceTaxRate` double NOT NULL,
  `invoiceClientAddress` mediumtext NOT NULL,
  `invoiceStatus` int(1) NOT NULL DEFAULT 0,
  `invoiceAddress` mediumtext NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoiceform_invoices`
--

INSERT INTO `invoiceform_invoices` (`invoiceID`, `userID`, `invoiceNr`, `invoiceDate`, `invoiceSubtotal`, `invoiceTax`, `invoiceTotal`, `invoiceTotalPaid`, `invoiceTotalDue`, `invoiceClientID`, `invoiceClientName`, `invoiceLogo`, `invoiceNote`, `invoiceTaxRate`, `invoiceClientAddress`, `invoiceStatus`, `invoiceAddress`, `deleted`) VALUES
(1, 1, '20150001', '2015-08-31', 21, 4.41, 25.41, 0, 25.41, 1, 'Company-1', 'uploads/logos/33889_invoiceform-logo.png', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Company-1<br />Christop Towne', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                                                                                    ', 1),
(2, 0, '20150002', '2015-09-01', 10, 2.1, 12.1, 0, 12.1, 1, 'Company-1', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Company-1<br />Christop Towne', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(3, 0, '20150003', '2015-09-01', 0, 0, 0, 0, 0, 0, 'N/A', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Some Company<br />Address 1<br />Address 2<br />Zipcode State<br />Country<br />                    ', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(4, 0, '20150004', '2015-09-01', 11, 2.31, 13.31, 0, 13.31, 1, 'Company-1', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Company-1<br />Christop Towne', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(5, 0, '20150005', '2015-09-01', 0, 0, 0, 0, 0, 0, 'N/A', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Some Company<br />Address 1<br />Address 2<br />Zipcode State<br />Country<br />                    ', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(6, 0, '20150006', '2015-09-01', 0, 0, 0, 0, 0, 0, 'N/A', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Some Company<br />Address 1<br />Address 2<br />Zipcode State<br />Country<br />                    ', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(7, 0, '20150007', '2015-09-01', 0, 0, 0, 0, 0, 0, 'N/A', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Some Company<br />Address 1<br />Address 2<br />Zipcode State<br />Country<br />                    ', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(8, 0, '20150008', '2015-09-01', 0, 0, 0, 0, 0, 0, 'N/A', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Some Company<br />Address 1<br />Address 2<br />Zipcode State<br />Country<br />                    ', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(9, 0, '20150009', '2015-09-01', 0, 0, 0, 0, 0, 0, 'N/A', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Some Company<br />Address 1<br />Address 2<br />Zipcode State<br />Country<br />                    ', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(10, 0, '20150010', '2015-09-01', 0, 0, 0, 0, 0, 0, 'N/A', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Some Company<br />Address 1<br />Address 2<br />Zipcode State<br />Country<br />                    ', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(11, 0, '20150011', '2015-09-01', 0, 0, 0, 0, 0, 0, 'N/A', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Some Company<br />Address 1<br />Address 2<br />Zipcode State<br />Country<br />                    ', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(12, 0, '20150012', '2015-09-01', 0, 0, 0, 0, 0, 0, 'N/A', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Some Company<br />Address 1<br />Address 2<br />Zipcode State<br />Country<br />                    ', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(13, 0, '20150013', '2015-09-01', 0, 0, 0, 0, 0, 0, 'N/A', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Some Company<br />Address 1<br />Address 2<br />Zipcode State<br />Country<br />                    ', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(14, 0, '20150014', '2015-09-01', 0, 0, 0, 0, 0, 0, 'N/A', '', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Some Company<br />Address 1<br />Address 2<br />Zipcode State<br />Country<br />                    ', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                        ', 1),
(15, 1, '20150002', '2016-05-28', 110, 23.1, 133.1, 0, 133.1, 1, 'Company-1', 'uploads/logos/58880_logo.jpg', 'Total amount should be paid within 14 working days from invoice date. ', 21, 'Company-1<br />Christop Towne', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                                                                                    ', 0),
(16, 1, '20150003', '2015-09-11', 121, 18.15, 139.15, 0, 139.15, 1, '', 'uploads/logos/11505_logo.jpg', 'Total amount should be paid within 14 working days from invoice date. ', 15, 'Company-1<br />Christop Towne', 0, 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York                                                      ', 0),
(17, 1, '', '1970-01-01', 0, 0, 0, 0, 0, 0, 'N/A', 'uploads/logos/18865_logo.jpg', 'Example for Comments or Special Instructions: Total amount should be paid within 14 working days from invoice date.', -100, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoiceform_invoices_items`
--

CREATE TABLE `invoiceform_invoices_items` (
  `ID` int(21) NOT NULL,
  `invoiceID` int(21) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `itemDescription` varchar(255) NOT NULL,
  `itemPrice` double NOT NULL,
  `itemQty` double NOT NULL,
  `itemPriceTotal` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoiceform_invoices_items`
--

INSERT INTO `invoiceform_invoices_items` (`ID`, `invoiceID`, `itemName`, `itemDescription`, `itemPrice`, `itemQty`, `itemPriceTotal`) VALUES
(9, 2, '', '', 10, 1, 10),
(7, 1, 'Scalpel Blades', 'Dental Instruments', 11, 1, 11),
(8, 1, 'Scalpel Handles', 'Surgical Instruments', 10, 1, 10),
(10, 3, '', '', 0, 0, 0),
(11, 4, 'test', 'test', 11, 1, 11),
(12, 5, '', '', 0, 0, 0),
(13, 6, '', '', 0, 0, 0),
(14, 7, '', '', 0, 0, 0),
(15, 8, '', '', 0, 0, 0),
(16, 9, '', '', 0, 0, 0),
(17, 10, '', '', 0, 0, 0),
(18, 11, '', '', 0, 0, 0),
(19, 12, '', '', 0, 0, 0),
(20, 13, '', '', 0, 0, 0),
(21, 14, '', '', 0, 0, 0),
(29, 15, 'Scalpel Blades', '', 10, 11, 110),
(28, 16, '', '', 11, 11, 121);

-- --------------------------------------------------------

--
-- Table structure for table `invoiceform_items`
--

CREATE TABLE `invoiceform_items` (
  `itemID` int(21) NOT NULL,
  `userID` int(21) NOT NULL,
  `itemNr` varchar(255) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `itemDescription` varchar(255) NOT NULL,
  `itemPrice` decimal(15,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoiceform_items`
--

INSERT INTO `invoiceform_items` (`itemID`, `userID`, `itemNr`, `itemName`, `itemDescription`, `itemPrice`) VALUES
(1, 1, '1', 'Scalpel Handles', 'Surgical Instruments', 10.00);

-- --------------------------------------------------------

--
-- Table structure for table `invoiceform_taxes`
--

CREATE TABLE `invoiceform_taxes` (
  `taxID` int(21) NOT NULL,
  `userID` int(21) NOT NULL,
  `taxName` varchar(255) NOT NULL,
  `taxRate` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoiceform_taxes`
--

INSERT INTO `invoiceform_taxes` (`taxID`, `userID`, `taxName`, `taxRate`) VALUES
(1, 1, 'VAT', 21),
(2, 1, 'Sales Tax', 15);

-- --------------------------------------------------------

--
-- Table structure for table `invoiceform_users`
--

CREATE TABLE `invoiceform_users` (
  `userID` int(21) NOT NULL,
  `userCompanyname` varchar(255) NOT NULL,
  `userFullname` varchar(255) NOT NULL,
  `userAddress` varchar(255) NOT NULL,
  `userEmailaddress` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userMaxInvoices` int(5) NOT NULL,
  `userMaxQuotes` int(5) NOT NULL,
  `userLogo` varchar(255) NOT NULL,
  `userCurrency` varchar(255) NOT NULL,
  `setCurrency` varchar(25) NOT NULL,
  `setLogo` varchar(255) NOT NULL,
  `setInvoiceAddress` mediumtext NOT NULL,
  `setDefaultName` varchar(255) NOT NULL,
  `setDefaultSubject` varchar(255) NOT NULL,
  `setDefaultEmail` varchar(255) NOT NULL,
  `setDefaultMsg` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoiceform_users`
--

INSERT INTO `invoiceform_users` (`userID`, `userCompanyname`, `userFullname`, `userAddress`, `userEmailaddress`, `userPassword`, `userMaxInvoices`, `userMaxQuotes`, `userLogo`, `userCurrency`, `setCurrency`, `setLogo`, `setInvoiceAddress`, `setDefaultName`, `setDefaultSubject`, `setDefaultEmail`, `setDefaultMsg`) VALUES
(1, 'InvoiceForm', 'John Doe', 'Address 1', 'demo@demo.com', '26c669cd0814ac40e5328752b21c4aa6450d16295e4eec30356a06a911c23983aaebe12d5da38eeebfc1b213be650498df8419194d5a26c7e0a50af156853c79', 100, 100, '', '$', 'euro', 'uploads/logos/18865_logo.jpg', 'John Doe<br />My Company Ltd.<br />Streetaddress 1<br />1234 AB New York', 'John Doe', 'Your new invoice {invoiceNr} with a total amount of $ {invoiceAmount}', 'info@example.com', '<p>Dear Customer,<br><br>You have received a new invoice, please see the attachment.Â <br>We would like to ask you to fulfill payment within 14 business days.<br><br>If you have any questions, please don\'t hesitate to contact us.<br><br>Kind Regards,<br><br><b>John DoeÂ Company Name Ltd.<br>info@yourmailaddress.com</b></p><b>');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_status`
--

CREATE TABLE `invoice_status` (
  `invoice_status_id` int(11) NOT NULL,
  `invoice_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoice_status`
--

INSERT INTO `invoice_status` (`invoice_status_id`, `invoice_status`) VALUES
(1, 'Paid'),
(2, 'Unpaid'),
(3, 'Cancelled'),
(4, 'Partially Paid');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_type`
--

CREATE TABLE `invoice_type` (
  `invoice_type_id` int(11) NOT NULL,
  `invoice_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoice_type`
--

INSERT INTO `invoice_type` (`invoice_type_id`, `invoice_type`) VALUES
(1, 'Normal Invoice'),
(2, 'Recurring Invoice');

-- --------------------------------------------------------

--
-- Table structure for table `origin_country`
--

CREATE TABLE `origin_country` (
  `origin_country_id` int(11) NOT NULL,
  `origin_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `origin_country`
--

INSERT INTO `origin_country` (`origin_country_id`, `origin_country`) VALUES
(1, 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `payment_terms`
--

CREATE TABLE `payment_terms` (
  `payment_terms_id` int(11) NOT NULL,
  `payment_terms` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_terms`
--

INSERT INTO `payment_terms` (`payment_terms_id`, `payment_terms`) VALUES
(1, 'Cash in Advance');

-- --------------------------------------------------------

--
-- Table structure for table `prepared_by`
--

CREATE TABLE `prepared_by` (
  `prepared_by_id` int(11) NOT NULL,
  `prepared_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prepared_by`
--

INSERT INTO `prepared_by` (`prepared_by_id`, `prepared_by`) VALUES
(1, 'Sales Dept.');

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice`
--

CREATE TABLE `sales_invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invoice_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invoice_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_due_date` date NOT NULL,
  `invoice_prepared_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `purchase_order` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_origin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipment_port` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `destination_port` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sales_terms` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_terms` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `transport_mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exporting_carier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `freight` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipment_date` date NOT NULL,
  `currency_symbol` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `csid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_address` text COLLATE utf8_unicode_ci NOT NULL,
  `billing_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_phone1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_phone2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_email1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_email2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_email3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_phone1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_phone2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_email1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_email2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_email3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `invoice_tax_rate` decimal(10,2) NOT NULL,
  `invoice_tax` decimal(10,2) NOT NULL,
  `invoice_discount_rate` decimal(10,2) NOT NULL,
  `invoice_discount` decimal(10,2) NOT NULL,
  `invoice_insurance` decimal(10,2) NOT NULL,
  `shipping_handling` decimal(10,2) NOT NULL,
  `invoice_total` decimal(10,2) NOT NULL,
  `paid` decimal(10,2) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `amount_due` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invoice_note` text COLLATE utf8_unicode_ci NOT NULL,
  `after_tax` decimal(10,2) NOT NULL,
  `after_discount` decimal(10,2) NOT NULL,
  `after_insurance` decimal(10,2) NOT NULL,
  `after_shipping` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sales_invoice`
--

INSERT INTO `sales_invoice` (`invoice_id`, `invoice_type`, `invoice_status`, `invoice_number`, `invoice_date`, `invoice_due_date`, `invoice_prepared_by`, `purchase_order`, `country_origin`, `shipment_port`, `destination_port`, `sales_terms`, `payment_terms`, `transport_mode`, `exporting_carier`, `freight`, `shipment_date`, `currency_symbol`, `customer_id`, `csid`, `customer_name`, `title`, `job_title`, `company_name`, `billing_address`, `billing_city`, `billing_state`, `billing_zip`, `billing_country`, `billing_phone1`, `billing_phone2`, `billing_fax`, `billing_email1`, `billing_email2`, `billing_email3`, `billing_website`, `shipping_address`, `shipping_city`, `shipping_state`, `shipping_zip`, `shipping_country`, `shipping_phone1`, `shipping_phone2`, `shipping_fax`, `shipping_email1`, `shipping_email2`, `shipping_email3`, `shipping_website`, `sub_total`, `invoice_tax_rate`, `invoice_tax`, `invoice_discount_rate`, `invoice_discount`, `invoice_insurance`, `shipping_handling`, `invoice_total`, `paid`, `due`, `amount_due`, `invoice_note`, `after_tax`, `after_discount`, `after_insurance`, `after_shipping`) VALUES
(2, 'Normal Invoice', 'Unpaid', 'INV-16-008311', '2023-03-16', '2023-03-21', 'Sales Dept.', 'PO-16-008311', 'Pakistan', 'Sialkot, Pakistan', 'Mumbai, India', 'Delivered Duty Paid (DDP)', 'Cash in Advance', 'Airway Shipment', 'FEDEX', 'Prepaid', '2023-03-23', '€', 1, 'CT-53700', 'Christop Towne', 'Mr.', 'Chief Executive', 'Company 1', 'Lahore-53700, Pakistan.', 'Lahore', 'Punjab', '53700', 'Pakistan', '042-00000000', '042-00000001', '042-00000002', 'ceo@example.com', 'sales@example.com', 'marketing@example.com', 'https://www.example.com', 'Canal Road, Lahore-53700, Pakistan.', 'Lahore', 'Punjab', '53700', 'Pakistan', '042-00000000', '042-00000001', '042-00000002', 'ceo@example.com', 'sales@example.com', 'marketing@example.com', 'https://www.example.com', 1000.00, 17.00, 170.00, 11.00, 128.70, 9.00, 50.00, 1100.30, 1000.30, 100.00, 'Hundred Euro Only', 'Total amount should be paid within 14 working days from invoice date.', 1170.00, 1041.30, 1050.30, 1100.30),
(4, 'Normal Invoice', 'Paid', 'INV-16-008314', '2023-03-07', '2023-03-21', 'Sales Dept.', 'INV-16-008314', 'Pakistan', 'Sialkot, Pakistan', 'Lisbon, Portugal', 'Cost, Insurance, and Freight (CIF)', 'Cash in Advance', 'Airway Shipment', 'FEDEX', 'Prepaid', '2023-03-29', '€', 2, 'HH-51310', 'Hollis Hoeger', 'Mr.', 'CEO', 'Company 2', 'Sialkot Pakistan', 'Sialkot', 'Punjab', '51310', 'Pakistan', ' 92 - 52 - 00000000', ' 92 - 52 - 00000001', ' 92 - 52 - 00000002', 'info@example.com', '', '', 'https://example.com', 'South S.I.E Sialkot Pakistan', 'Sialkot', 'Punjab', '51310', 'Pakistan', ' 92 - 52 - 00000000', ' 92 - 52 - 00000001', ' 92 - 52 - 00000002', 'info@rheingroup.com', '', '', 'https://www.example.com', 200.00, 18.00, 36.00, 15.00, 35.40, 45.00, 55.00, 300.60, 300.60, 0.00, 'NIL', 'Total amount should be paid within 14 working days from invoice date.', 236.00, 200.60, 245.60, 300.60);

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice_items`
--

CREATE TABLE `sales_invoice_items` (
  `invoice_items_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_qty` decimal(10,2) NOT NULL,
  `product_price_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sales_invoice_items`
--

INSERT INTO `sales_invoice_items` (`invoice_items_id`, `invoice_id`, `product_name`, `product_description`, `product_price`, `product_qty`, `product_price_total`) VALUES
(5, 2, 'dfgdfgd', 'fhfhh', 20.00, 50.00, 1000.00),
(7, 4, '11-01-1001-01', 'Eyebrow Tweezer', 10.00, 20.00, 200.00);

-- --------------------------------------------------------

--
-- Table structure for table `shipment_port`
--

CREATE TABLE `shipment_port` (
  `shipment_port_id` int(11) NOT NULL,
  `shipment_port` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shipment_port`
--

INSERT INTO `shipment_port` (`shipment_port_id`, `shipment_port`) VALUES
(1, 'Sialkot, Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` int(11) NOT NULL,
  `tax_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tax_rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`tax_id`, `tax_name`, `tax_rate`) VALUES
(1, 'Sales Tax', 15),
(2, 'GST', 17),
(3, 'VAT', 18);

-- --------------------------------------------------------

--
-- Table structure for table `transport_mode`
--

CREATE TABLE `transport_mode` (
  `transport_mode_id` int(11) NOT NULL,
  `transport_mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transport_mode`
--

INSERT INTO `transport_mode` (`transport_mode_id`, `transport_mode`) VALUES
(1, 'Airway Shipment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`company_name`);

--
-- Indexes for table `company_representative`
--
ALTER TABLE `company_representative`
  ADD PRIMARY KEY (`rep_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `currency_type`
--
ALTER TABLE `currency_type`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `default_currency`
--
ALTER TABLE `default_currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination_port`
--
ALTER TABLE `destination_port`
  ADD PRIMARY KEY (`destination_port_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `docs_default_currency`
--
ALTER TABLE `docs_default_currency`
  ADD PRIMARY KEY (`set_currency`);

--
-- Indexes for table `email_invoice`
--
ALTER TABLE `email_invoice`
  ADD PRIMARY KEY (`invoice_name`);

--
-- Indexes for table `exporting_carier`
--
ALTER TABLE `exporting_carier`
  ADD PRIMARY KEY (`exporting_carier_id`);

--
-- Indexes for table `export_docs_logo`
--
ALTER TABLE `export_docs_logo`
  ADD PRIMARY KEY (`logo`);

--
-- Indexes for table `freight`
--
ALTER TABLE `freight`
  ADD PRIMARY KEY (`freight_id`);

--
-- Indexes for table `incoterms`
--
ALTER TABLE `incoterms`
  ADD PRIMARY KEY (`incoterms_id`);

--
-- Indexes for table `invoiceform_clients`
--
ALTER TABLE `invoiceform_clients`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `invoiceform_invoices`
--
ALTER TABLE `invoiceform_invoices`
  ADD PRIMARY KEY (`invoiceID`);

--
-- Indexes for table `invoiceform_invoices_items`
--
ALTER TABLE `invoiceform_invoices_items`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `invoiceform_invoices_items` ADD FULLTEXT KEY `itemDescription` (`itemDescription`);

--
-- Indexes for table `invoiceform_items`
--
ALTER TABLE `invoiceform_items`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `invoiceform_taxes`
--
ALTER TABLE `invoiceform_taxes`
  ADD PRIMARY KEY (`taxID`);

--
-- Indexes for table `invoiceform_users`
--
ALTER TABLE `invoiceform_users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `invoice_status`
--
ALTER TABLE `invoice_status`
  ADD PRIMARY KEY (`invoice_status_id`);

--
-- Indexes for table `invoice_type`
--
ALTER TABLE `invoice_type`
  ADD PRIMARY KEY (`invoice_type_id`);

--
-- Indexes for table `origin_country`
--
ALTER TABLE `origin_country`
  ADD PRIMARY KEY (`origin_country_id`);

--
-- Indexes for table `payment_terms`
--
ALTER TABLE `payment_terms`
  ADD PRIMARY KEY (`payment_terms_id`);

--
-- Indexes for table `prepared_by`
--
ALTER TABLE `prepared_by`
  ADD PRIMARY KEY (`prepared_by_id`);

--
-- Indexes for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `sales_invoice_items`
--
ALTER TABLE `sales_invoice_items`
  ADD PRIMARY KEY (`invoice_items_id`);

--
-- Indexes for table `shipment_port`
--
ALTER TABLE `shipment_port`
  ADD PRIMARY KEY (`shipment_port_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `transport_mode`
--
ALTER TABLE `transport_mode`
  ADD PRIMARY KEY (`transport_mode_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_representative`
--
ALTER TABLE `company_representative`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `currency_type`
--
ALTER TABLE `currency_type`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `default_currency`
--
ALTER TABLE `default_currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destination_port`
--
ALTER TABLE `destination_port`
  MODIFY `destination_port_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exporting_carier`
--
ALTER TABLE `exporting_carier`
  MODIFY `exporting_carier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `freight`
--
ALTER TABLE `freight`
  MODIFY `freight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `incoterms`
--
ALTER TABLE `incoterms`
  MODIFY `incoterms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `invoiceform_clients`
--
ALTER TABLE `invoiceform_clients`
  MODIFY `clientID` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoiceform_invoices`
--
ALTER TABLE `invoiceform_invoices`
  MODIFY `invoiceID` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `invoiceform_invoices_items`
--
ALTER TABLE `invoiceform_invoices_items`
  MODIFY `ID` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `invoiceform_items`
--
ALTER TABLE `invoiceform_items`
  MODIFY `itemID` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoiceform_taxes`
--
ALTER TABLE `invoiceform_taxes`
  MODIFY `taxID` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoiceform_users`
--
ALTER TABLE `invoiceform_users`
  MODIFY `userID` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_status`
--
ALTER TABLE `invoice_status`
  MODIFY `invoice_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice_type`
--
ALTER TABLE `invoice_type`
  MODIFY `invoice_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `origin_country`
--
ALTER TABLE `origin_country`
  MODIFY `origin_country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_terms`
--
ALTER TABLE `payment_terms`
  MODIFY `payment_terms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prepared_by`
--
ALTER TABLE `prepared_by`
  MODIFY `prepared_by_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales_invoice_items`
--
ALTER TABLE `sales_invoice_items`
  MODIFY `invoice_items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shipment_port`
--
ALTER TABLE `shipment_port`
  MODIFY `shipment_port_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transport_mode`
--
ALTER TABLE `transport_mode`
  MODIFY `transport_mode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
