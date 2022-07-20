-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 07:11 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cubics`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE `tbl_admin_login` (
  `admin_id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`admin_id`, `email`, `password`, `profile_pic`, `last_login`) VALUES
(1, 'Cubics247@gmail.com', '5c233c5b4234cb57b1976ba063a11904eddbc80fe4f7df5612ff99242ddb5466060252f48843aba27f388eae8235baf88335a87c387dc5170fdfa20799df294eB/3SQtqiJARhg/NDQMj/Jmcdd3ezXM0kNFZw1p6bWKg=', 'admin-assert/images/d701ec20c11b8a111c87ce5dd597378b.png', '2022-03-28 12:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `banner_id` int(5) NOT NULL,
  `path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`banner_id`, `path`) VALUES
(28, 'assert/banner/af4e030db8643fe3d4062900d6e1ee24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business`
--

CREATE TABLE `tbl_business` (
  `business_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `location_id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `website` varchar(50) NOT NULL,
  `category_id` int(5) NOT NULL,
  `open_closing_time` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `weekday` varchar(100) NOT NULL,
  `since` varchar(25) NOT NULL,
  `tagline` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `iframe` varchar(2000) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `last_login` datetime NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_business`
--

INSERT INTO `tbl_business` (`business_id`, `name`, `address`, `location_id`, `email`, `contact_no`, `website`, `category_id`, `open_closing_time`, `owner_name`, `weekday`, `since`, `tagline`, `description`, `iframe`, `password`, `profile_pic`, `last_login`, `status`) VALUES
(1, 'Shrimad Rajchandra Hospital', 'Opposite S. T. Bus Depot,Dharampur 396050, Dist. Valsad, Gujarat, India', 42, 'hospital@loveandcare.srmd.org', '9444525369', 'www.srloveandcare.org', 12, '12:00am To 12:00am', 'Shrimad Rajchandra Trust', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '1995', 'Shrimad Rajchandra Love and Care', 'A plaguing concern in rural India is providing affordable health care solutions in remote areas. The rural population located in the Valsad district of South Gujarat ranks amongst the poorest in the state, grappling with issues like poverty, malnutrition, illiteracy and the lack of awareness of health related issues. These factors lead to premature deliveries, physical and mental disabilities, vulnerability to diseases and illnesses, non-adherence to basic hygiene standards and other problems.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.2314626053653!2d73.1675402145691!3d20.537708386266416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0b91bee2f9eab%3A0x5fcc42a75c8a9d90!2sShrimad%20Rajchandra%20Hospital%20Dharampur!5e0!3m2!1sen!2sin!4v1651815480263!5m2!1sen!2sin', 'd8428f05121d982fdc6f5bb2834a94352d2ba9f24f0c62c0ee6672256cfacd799b870c66fbdb74b7bcb1ba35e606924901a0c7cb1bf56cba48907e0653cc6ff071/y5JLowNFvOCaTquVH+SjBinD3DP3YBKn4Kq/AIBA=', 'business-assert/profile/588ee54fe5b569581c8355c1ff63df65.png', '2022-05-31 12:44:07', 1),
(2, 'Shree Sainath Hospital', 'Shri Sainath Hospital, Dharampur Main Road , Red Cross Road , Dharampur - 396050', 42, 'drdcpatel@snakebites.in', '9879745588', '', 12, '00:00 To 24:00', 'Rahul Patel', 'monday,tuesday,wedenesday,thursday,sunday', '1998', 'Care People', 'Established in the year 1998, Shree Sainath Hospital in Dharampur Valsad, Valsad is a top player in the category Hospitals in the Valsad. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Valsad. Over the course of its journey, this business has established a firm foothold in it’s industry.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.217288257615!2d73.16742841456916!3d20.538288586266013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0b94df29f4563%3A0x606d3d8dd0ee9811!2sShree%20Sainath%20Hospital!5e0!3m2!1sen!2sin!4v1651818886321!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'c54cb8ed177048017a70dfa04f150a6d9be0e120e828271bd39ed3217ac97cac08666fd52241ae453ad20d1b50e10fb8c367da07ee74662cef531f1028d142ccrhXEWOOB9fWx4UwFdCpOaS0fdtln5yeOzA9fbadqQNE=', 'business-assert/profile/7699f3636c5f78adfb4c0773acbd3c4b.png', '2022-05-06 12:21:49', 1),
(3, 'Shalby Hospital', '6, Rupam Society, Vijay Cross Road , Near Memnagar Fire Station, Navrangpura, Ahmedabad-380009, Guja', 10, 'info.vijay@shalby.org', '7940203333', 'www.shalby.org', 12, '00:00 To 24:00', 'Vikram Shah', 'monday,tuesday,wedenesday,thursday,sunday', '1995', 'Approach to Healthcare', 'we have successfully performed thousands of joint replacement surgeries, and the number is on the rise day by day.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.744379513282!2d72.79880851458182!3d21.202311185904584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04c2bd38b220d%3A0xfd16cdc3f794f73b!2sShalby%20Hospital%2C%20Surat!5e0!3m2!1sen!2sin!4v1651820568786!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '0de78c2179d10348118435ccaf88804e42b5056a7934c5d09d946f7732a3f133768618c2f0662bc0ad0430234147576af8779322674a5878d4292e4f116bb353HF+NKGi34KOnLDXamjTuNgjaAFH8LFcB0ZzKbNBYhNM=', 'business-assert/profile/b744c69db105b532c76b8142df9400f7.png', '0000-00-00 00:00:00', 1),
(4, 'Wilson Hill Resort', 'Wilson Hill, Pangarbari, Dharampur Valsad, Valsad - 396050', 42, 'Hill.bookroom247@gmail.com', '9965654125', '', 1, '09:00am To 11:00pm', 'Shivam', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2018', 'Enjoy weekend', 'Wilson Hill Resort in Dharampur Valsad, Valsad is a top player in the category Resorts in the Valsad. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Valsad. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Valsad, this establishment occupies a prominent location in Dharampur Valsad. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is known to provide top service in the following categories: Resorts', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7473.777637977537!2d73.34835006977538!3d20.510783500000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0a5cda4c4a729%3A0x8d65ee67a141e753!2sWilson%20Hill%20Resort!5e0!3m2!1sen!2sin!4v1651822026217!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'dbd0635e164811573103e4d870e4ae48909f49ff4797d7189b5910728514a29375df7ae60d5e684d95b011f4e707084062c952470d0108e3119ed9c85e019f72XmB2B6hcdN9d8nCh4DP9plceDxtUlX+Ifyek0ADysCs=', 'business-assert/profile/c09eab4041d66efd9c0a3fe13c36333e.png', '2022-05-31 02:52:33', 1),
(5, 'Hotel Ashoka', 'State Highway 67, Dharmpur Towen, Valsad - 396050', 42, 'Hotelashoka@gmail.com', '9726652928', '', 1, '09:00am To 12:00am', 'Ashok', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2008', 'Guest House & Apartment', 'Hotel rates vary as per the date and number of people occupying a room. Hence, in order to accommodate more guests you will have to change your reservations and the hotel will then update you on the same', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.141137944768!2d73.15401561456918!3d20.5414053862643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0becace34dfc9%3A0xe19d61e0e7733884!2sHotel%20Ashoka!5e0!3m2!1sen!2sin!4v1651823135316!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '78acf925739acba05527a436a390d423a32b700c7c9926a4dcb7286afc4916c074fbe27ab67e1c29a72c9347dd15f3c6d7df91242855cd51b7dc13b42c7face7WvVkdnQ8/eEICJSh5SwgAoRTr9dZitMhGq3McdthgFQ=', 'business-assert/profile/5919d387a34e48c01ccfec7525bd8c68.png', '2022-06-02 11:30:22', 1),
(6, 'Hotel Orizon', 'RAMVADI, Valsad - Dharampur Rd, Dharampur, Gujarat 396050', 42, 'orizonvalsad@gmail.com', '9724263329', 'www.hotelorizon.in', 1, '09:00am To 11:30pm', 'Rahul', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2016', 'Rooms | Restaurant | Banquet | Conference room', 'Hotel Orizon is a business class hotel located in the centre of Dharampur city and  providing bunch of services and amenities. Just 1 Km from bus stop, Hotel Orizon is nicely placed on easy to locate area.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.8323114926993!2d73.0645281145694!3d20.554040886257443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0bf38c7e20507%3A0xc1d426d9b6bfd8c6!2sHOTEL%20ORIZON!5e0!3m2!1sen!2sin!4v1651824108753!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'd3b58403c45f7ff8b3da0190c1809ed2914dca7e280b2b7a54a4bb0d36efe93b66c7b90a39c102baf22a291df3bd3b1926c2ac344730899017db3246a2f45ac6iDd4CVPem4hzWCQnxu4KflQfKgDbX4Qqb6UtMyoga4g=', 'business-assert/profile/eb090c57056b37c2627b8544dbb53eb2.png', '2022-05-30 09:47:21', 1),
(7, 'Axn Resort', 'Plot No 1469, Chanvai Road, Valsad HO, Valsad - 396001, Near Vaya Atul, Chanvai', 36, 'Axn.resort227@gmail.com', '8884458589', '', 1, '09:00am To 11:00pm', 'Raj', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2010', 'Live life Freely', 'Surrounded by woodland, this unassuming resort is 2 km from the NH48 national highway, 4 km from Parnera Fort and 11 km from the dark sands of Tithal Beach along the Arabian Sea. Celebrated as one of the city\'s best is, Axn Resort in Valsad. The hotel is strategically located in chanvai road. Having been established in the year 2010, this hospitality destination has grown to become the ideal place for travelers and those on business to feel at home when in the city. Many have also reviewed the hotel to be among the sought after Hotels in Valsad. The hotel functions.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.9917957309012!2d72.96895941472282!3d20.547516586260993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0c3a725409b8d%3A0x88821ba2a3308626!2sAXN%20Resort!5e0!3m2!1sen!2sin!4v1651824752588!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '6bd52816950a5a111532a4e0e713da1406b12156ec910831fe10747116f1b8b7d0a69a7d94344c631c6ddcca3ecbbe29a30f28c8507b071ff7685b9155fafaa1p8coiBKbJdfe9zL4lTYWP52UYAAJyOzrLGLOWhny2b4=', 'business-assert/profile/286148f95c32389aafe7b8e1fc060d46.png', '2022-05-30 09:22:42', 1),
(8, 'Motel ', 'MN Complex, Dharampur, Valsad Dharampur Road, Dharampur, Valsad - 396050', 42, 'motel11@gamil.com', '9723756556', 'www.motel11dharampur.com', 1, '12:00am To 12:00am', 'Adarsh', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2015', 'Good Service', 'Motel  in Dharampur , Valsad is a top player in the category Hotels in the Valsad. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Valsad. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Valsad, this establishment occupies a prominent location in Dharampur . It is an effortless task in commuting to this establishment as there are various modes of transport readily available. The popularity of this business is evident from the 100+ reviews it has received from Justdial users. It is known to provide top service in the following categories: Hotels, Hotels (Rs 501 To Rs 1000), Hotels (Rs 1001 To Rs 2000), Banquet Halls, Hotels (Rs 2001 To Rs 3000), AC Banquet Halls, 2 Star Hotels, Florists.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.1521893192466!2d73.1614794147227!3d20.540953086264675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0b94dbabd1021%3A0x40c4990d083cc5b6!2sMotel%2011!5e0!3m2!1sen!2sin!4v1651861748341!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '33b0c06f338d0225761bad94ea64545229d58bdef4b6868e27608a49387c9bee324647e30f90112e5892ca1d76ec15bca9305de983d1b8148386dbc83f61f201YId00cwLjL9X8cTkGeq2kbecbCI9Or2PX0BeimnyLSs=', 'business-assert/profile/a6cb9a1b38f4c2fbe198153eeff86b5a.png', '2022-05-30 08:59:36', 1),
(9, 'Zaid water supply', 'Khoja Society, 9 B/4, Custom Road, Chala, Vapi, Gujarat 396191', 37, 'water247supplier@gmail.com', '9377437648', '', 9, '12:00am To 12:00am', 'zaid', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2021', 'water is life', 'Zaid water supply & Transport in Vapi has a wide range of products and / or services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Pay for the product or service with ease by using any of the available modes of payment, such as Cash, Cash on Delivery, Cheque, NEFT, RTGS, IMPS. This establishment is functional from Open 24 Hrs - Open 24 Hrs.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59842.1726770984!2d72.87912596201893!3d20.377290256721935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cf953e7428e5%3A0x1829819fe798f225!2sZaid%20water%20supply!5e0!3m2!1sen!2sin!4v1653938410067!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'fc9e86588c03856c398c503f12fce049cd04a0cabfbaa4ea86ed10986e0246e8913f8ecbf808c31028524c165bcfd197225508db59c7fbe751b1f76b0ac06a251+rXkf2ibV9gpnTvnJfyNHgTasUPbHSmDIXg5u0H/FY=', 'business-assert/profile/3fa4e03c2fb9431c9c47dd4adc0e7112.png', '2022-05-31 12:47:48', 1),
(10, 'Hardik Water Supply', 'At Salvav, Brahman Faliya Chharwada, Road, Vapi, Gujarat 396191', 37, 'waterhelp11rj@gmail.com', '9924882226', '', 9, '06:00am To 08:00pm', 'Hardik', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2006', 'Need water contactus', 'Hardik Water Supply in Vapi has a wide range of products and / or services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Pay for the product or service with ease by using any of the available modes of payment, such as Cash, Cash on Delivery, UPI, Paytm. This establishment is functional from 00:00 - 23:59.\r\n\r\nPlease scroll to the top for the address and contact details of R J Water Supplier at Vapi, Valsad.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59836.69309236977!2d72.85684715820312!3d20.391409900000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cfbfc02eba5d%3A0xb21bf96efe4e9aad!2sHardik%20Water%20Supply!5e0!3m2!1sen!2sin!4v1653938902953!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '2c54cf898bae7fa368461489ce23d3f437f200641cddd67e406077add49afd9ba06bdec279f46a9528eb32ca90a6636dd42182ec634ada1a3367547c9ac7cd44M7/8n9sRGAthi6XYE17Yf662phv4A7ywDb2z9cHe7ME=', 'business-assert/profile/26e8df03f903881e88e94055b4acba0f.png', '2022-05-31 12:55:58', 1),
(11, 'Kbs Just Call', 'Gold Coin Apartment, Daman Road, Chala, Vapi - 396191', 37, 'kbs2245h@gmail.com', '9777454563', '', 9, '00:00 To 24:00', 'Rajinder', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2012', 'Opposite Agnee Bakery', 'Established in the year 2018, Kbs Just Call in Chala, Vapi, Valsad is a top player in the category Food Home Delivery Services in the Vapi, Valsad. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Vapi, Valsad. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Vapi, Valsad, this establishment occupies a prominent location in Chala. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at Daman Road, Opposite Agnee Bakery, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Departmental Stores, Supermarkets, Bakeries, General Stores, Tiffin Services, Sweet Shops, Grocery Stores, Water Suppliers.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.0279095721344!2d72.89974071085457!3d20.381739095860592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cfd40ddb5133%3A0xe69adfa81a88cd56!2sGold%20Coin%20Aircondition!5e0!3m2!1sen!2sin!4v1651863955502!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'b812926f6aed504d12bf3fc87601b2cb48c4d32df81763af112c7382b20f535e01df8eb6cf5936697f29df655900932a41f13fc8e11454376952d6fd5bcf62fbU7X1dT5TPJg+W7T3ir0szXP3vA9KCwUJxGhcg5Z1wNM=', 'business-assert/profile/73ef1a518c056e06fee62ae3b434bb43.png', '2022-05-31 12:45:58', 1),
(12, 'Shrey Water Supply', 'M.g. Road, Valsad - 396001', 36, 'Shery.water141@gamil.com', '9723028777', '', 9, '00:00 To 24:00', 'Rajat', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2015', 'Drinking Water Suppliers', 'Potable water, also known as drinking water, comes from surface and ground sources and is treated to levels that that meet state and federal standards for consumption. Water from natural sources is treated for microorganisms, bacteria, toxic chemicals, viruses and fecal matter.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.2543321976896!2d72.9256529145706!3d20.618487586222006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0e826d6f36c71%3A0x25c0db6dc12fde46!2sMahatma%20Gandhi%20Rd%2C%20Valsad%2C%20Gujarat%20396001!5e0!3m2!1sen!2sin!4v1651898097945!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'e086d245b3b0ee0518c0d832a3cdcc9f8ccc8a789ddd60c6d8cb36ee7db31858e1b09c49baec1180e7d157d0c5c6d2bcdcc11131879354c6614e4285c0d262e9xa4z8JGH82suJocL6nEAjA4Q/8WLQ5se99dgMLyahmw=', 'business-assert/profile/395538229c0fefebaa8ed69446596dcd.png', '2022-05-31 12:59:21', 1),
(13, 'Croma', 'Croma, RATHOD CHAMBERS, Daman Rd, near BALAJI TOWERS, Chala, Vapi, Gujarat 396191', 37, 'customersupport@croma.com', '04046517910', 'www.croma.com', 2, '11:00am To 09:00pm', 'Tata Groups', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2009', 'Connect with us and we will help you out', 'If you are looking to set up your new home or replace some existing home appliances Croma is here to help you with all your electronic needs. Our range of home & kitchen appliances collection has everything you can dream of: televisions, washing machine, air fryers, refrigerators, microwaves, water heaters, and more.\r\n\r\n \r\n\r\nLaunched in 2006, Croma is the most reliable electronics store chain that caters to a catalogue of digital gadgets and home electronic needs, with a promise of #BrighterEveryday. From batteries to bottles, and screen protectors to massagers; you can find electronics products by brands namely Apple, Bajaj, Samsung, Nokia, LG, Nikon, Godrej, Voltas along with our own label – Croma Products, all under one roof. Visit one of the 240+ Croma stores spread across India or browse through the website Croma.com from the comfort of your home - Croma\'s omnichannel presence lets you shop at your convenience.\r\n\r\n \r\n\r\nSecure your home with top-of-the-line home safety security products or give your home a smart upgrade with smart home devices; think of a smartphone upgrade or pursue your lost gaming hobby or a LED TV to liven up your living room or being productive on the go with tablets and laptops - you will find it all at Croma. Put yourself first with Croma’s curation of fitness and personal grooming products and accessories. Croma\'s line of headphones, earphones and speakers lets you enjoy your music or watch movies with an unbeatable audio experience.\r\n\r\n \r\n\r\nShop for the newest launches from our New@Croma section. Not sure of what gift to buy for a loved one? Croma Gift Cards and e-Gift Vouchers are the way to go.\r\n\r\n \r\n\r\nAlong with an extensive catalogue of products, Croma offers exclusive deals and discounts, best bank offers including easy EMI options, and various payment options such as the newest Tata Pay to earn NeuCoins every time you shop. Loyalty Discounts, Pre-qualified Credit, Exchange & Upgrade Benefits - you always get a great deal when you ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3739.8416874388568!2d72.89447451456634!3d20.389416286348098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0d195ca730e89%3A0x2a6d51bdca96fdd8!2sCroma!5e0!3m2!1sen!2sin!4v1651899848480!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'd9aa9d6a708c07ce9991be52ab534d88cfb155c1df99bdf17eeb325e8d17ac0a5c9d20a3625b3b143e159ee67ae16695d4f1da23e24d87dd74e6208d83b14a2aTcT/zgjQKESsfwuXSrVb3hYDFQNUzu3PsTT8BfVDz+c=', 'business-assert/profile/7377349f1e8631eaeff060d10eadc144.png', '2022-05-30 10:34:10', 1),
(14, 'S M S M High School', 'Garden Road, Dharampur Valsad, Valsad - 396050, Near Three Gate', 42, 'school.smsm001@gmail.com', '9558568958', '', 3, '09:00am To 04:00pm', 'government', 'monday,tuesday,wedenesday,thursday,friday,saturday', '1995', 'Education', 'A school is an educational institution designed to provide learning spaces and learning environments for the teaching of students under the direction of teachers. Most countries have systems of formal education, which is sometimes compulsory. In these systems, students progress through a series of schools', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d741.3517929226854!2d73.16627241007637!3d20.5398802166463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0b94cfd05929d%3A0x654152ce0b4d60d4!2sSMSM%20High%20School%2C%20Gujarat%20396050!5e0!3m2!1sen!2sin!4v1651911145936!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '743517241c98c93c33fc6f748501720666a05fd8f251fd3041b14bd6a9f07127325ea97d09c8698ba31c9b6cec9ff27097e51c7b93a87adadf039b7ca19e9335IriXPzcK6zLqkZKpOT+rzFeQGU5C5ep1550dJiMenRk=', 'business-assert/profile/17acecf25ff6e3413f1c290576fed775.png', '2022-05-28 11:39:34', 1),
(15, 'B R International School', 'Kharvel, Dharampur Dist. Valsad Gujarat India-396050', 42, 'brdharampur@gmail.com', '9687688050', 'www.brinternationalschool.com', 3, '08:30 To 4:30pm', 'MAHESH CHOUDHARY', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2010', 'Education is Future', 'Our institution is a modern and goal- oriented English medium school in Dharampur , Valsad, with all streams such as arts, commerce, science affiliated to the Central Board of Secondary Education. Our school is essentially an autonomous private school offering classes leading to intermediate and higher secondary qualifications. BR international school has an appropriate record of students\' sincerity and reliability towards studies. Our unspoiled atmosphere offers your ward', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.1860236959897!2d73.14087871456915!3d20.539568286265343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0bed4a1a65165%3A0xb5f3f51c08f809ce!2sB.R.International%20School%20Dharampur%2C%20Valsad!5e0!3m2!1sen!2sin!4v1651911750288!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '3f9e629ced12169984a9b07741e5958c3fecb68715c715b45f012a70dbb5f0836367502b93c2a513b540b62d14ed807b7c93f1ed3b30e2ae5d1ed0f0811e35f0pDvNzrB8g/8eaS24yO/Mkm/SKe7NA6YinD7cJow13Cg=', 'business-assert/profile/e7344ffb1f43b17de906ace0c9fcb716.png', '2022-05-28 11:42:31', 1),
(16, 'SHRI SWAMINARAYAN GURUKUL', 'G58F+5G8, Valsad, Gujarat 396001', 42, 'malanpada.ssnips22@gamil.com', '9913458525', '', 3, '08:00am To 04:30pm', 'Swami narayan trust', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2000', 'Education', 'SHRI SWAMINARAYAN GURUKUL was established in 1993 and it is managed by the Tribal/Social Welfare Department. It is located in Urban area. It is located in DHARAMPUR block of VALSAD district of Gujrat. The school consists of Grades from 1 to 7. The school is Co-educational and it doesn\'t have an attached pre-primary section. The school is Ashram (Govt.) in nature and is not using school building as a shift-school. Gujarati is the medium of instructions in this school. This school is approachable by all weather road. In this school academic session starts in April.\r\n         The school has Private building. It has got 4 classrooms for instructional purposes. All the classrooms are in good condition. It has 2 other rooms for non-teaching activities. The school has a separate room for Head master/Teacher. The school has Pucca boundary wall. The school has have electric connection. The source of Drinking Water in the school is Well and it is functional. The school has 6 boys toilet and it is functional. and 6 girls toilet and it is functional. The school has a playground. The school has a library and has 250 books in its library. The school does not need ramp for disabled children to access classrooms. The school has 2 computers for teaching and learning purposes and all are functional. The school is not having a computer aided learning lab. The school is Not Applicable providing mid-day meal.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.7915187438734!2d73.1734265145686!3d20.514770986279093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6637ada054800c9a!2sSwaminarayan%20Gurukul!5e0!3m2!1sen!2sin!4v1651912199033!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '9da9ba0ab46d35e8d5226e50d48381c14eec8f9ba2d50d4e40937244554f9b353c3aedeeadde10570942fd068c170ec999bf175a811fb939a0e3afebb157d4435xXtGGIvyIG/w7RofVu/4DP/5bbUyONeRrKqg+8NCC8=', 'business-assert/profile/f2883c9ca34e6d5e1e2b55d51547fae9.png', '2022-05-28 11:44:12', 1),
(17, 'Usha Electricals', 'Police Chouki Asura, Dharampur, Gujarat 396050', 42, 'electrical55@gmail.com', '9586325476', '', 4, '09:00am To 11:30pm', 'Nitish', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2011', 'light', 'Usha Electricalsin Dharampur, Solan is one of the leading businesses in the Wire Dealers. Also known for Electrical Shops, Inverter Battery Dealers, Electrical Goods Dealers, Water Purifier Dealers, Ro Water Purifier Dealers, Geyser Dealers, Inverter Dealers, Fan Dealers and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Usha Electricals, Dharampur, Solan.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.2306197774074!2d73.1695495148459!3d20.537742886266383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0b97490f832e3%3A0xbc773056bdac187b!2sUsha%20Electricals!5e0!3m2!1sen!2sin!4v1653936052249!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '602fd738f8db0ae027cc9dece3db29aa84ed5343c266036e01221826523f96663245dac25fe8c8eb2d98f8b5de5a00b09047fe2eb60c8e329b9aae9ce84546f4uCKdvySKdyULjKvVWRAYvdSJrPOK1almUBxjD8dfgu8=', 'business-assert/profile/9ccf797e1fec8e70ed5d16c15c474ebc.png', '2022-05-31 12:17:18', 1),
(18, 'Shyam Electronics And Mobile', 'MSC, GJ SH 5, Dharampur, Gujarat 396050', 42, 'karan.ight247@gmail.com', '9696855542', '', 4, '10:00am To 10:00pm', 'Karan', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2013', 'Electrical Shops Electronic Goods Showrooms Home Appliance Dealers', 'All kinds of electric goods, accessories, appliances, fitting material, all kinds of electric wires, mcb, starters, fans, exhaust fans, geyser are available at reasonable prices with warranty.\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14944.700991159738!2d73.16944677596469!3d20.540009340723056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0b9514dd9bbd5%3A0x1bd34244afff0931!2sShyam%20Electronics%20And%20Mobile!5e0!3m2!1sen!2sin!4v1653936324214!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '9b4558b3c10345273c88ac2deb2db5240086c3f1f3eef5ea89ab048012dfa6c6c20068514dec4ad12e3cc669d663fe1f79c89c247e1f55f4389be713af10b2bcMaYvqYLArYmTuChcHvCtxeLqZwfpkH1bglTkf1QOfZI=', 'business-assert/profile/e46f7200b6256e6564e10037f9751318.png', '2022-05-31 12:14:17', 1),
(19, 'Patel Electrical ', '6 Jalaram Shopping Center, Vapi, Vapi - 396191, Opposite Bus Depot Near Zanda Chowk ', 37, 'tech.electrical@gmail.com', '9855368686', '', 4, '10:00am To 11:00pm', 'shivam', 'monday,tuesday,wedenesday,thursday,friday,saturday', '1995', 'Electrical Shops Electronic Goods Showrooms', 'Established in the year 1995, Patel Technical Institute in Vapi, Valsad is a top player in the category Electrical Shops in the Valsad. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Valsad. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Valsad, this establishment occupies a prominent location in Vapi. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at , Opposite Bus Depot Near Zanda Chowk, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Electrical Shops, Electrical Contractors, Institutes For AC Mechanic, Technical Institutes, Industrial Electrical Contractors, Institutes For Electrician, Institutes For Refrigeration, Electrical Contractors For Residentia', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.5128320267117!2d72.91763331456573!3d20.361734686363555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce38d405f641%3A0x84687e4f41f4e517!2sVapi%20I%20E%20Sub%20Post%20Office!5e0!3m2!1sen!2sin!4v1651918219704!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '158dad3e19a68fe7f4e8e8ef954d0379dd9e59ac8043064ecc4ba269fa42f7a10186fe2ca48df45df3dbd9aebb65542d99e4b2d0de9822924106d8550959f863nYAdZQcXMwpMN102roTiYswHnZyVoJFoZdp2xv8Ludo=', 'business-assert/profile/1b35c9fc8cd13126f76db7fc274a84f3.png', '2022-05-28 11:52:46', 1),
(20, 'P P ELECTRICALS', 'Shop No 11, Globe Chambers, Silvassa Vapi Road, Vapi Industrial Estate, Valsad - 396195, Opposite SB', 37, 'ppelectrical.help@gamil.com', '7947354479', '', 4, '09:30 To 11:00pm', 'Dhaval', 'monday,tuesday,wedenesday,thursday,friday,saturday', '1995', 'Electrical Goods Dealers', 'P P ELECTRICALS in Vapi Industrial Estate has a wide range of products and / or services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Pay for the product or service with ease by using any of the available modes of payment, such as Cash, Cheques. This establishment is functional from 09:00 - 20:00.\r\n\r\nPlease scroll to the top for the address and contact details of P P ELECTRICALS at Vapi Industrial Estate, Valsad.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.4617491115855!2d72.92120671456584!3d20.363842886362303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce476de4ad91%3A0x74a5ccd9749313ec!2sState%20Bank%20of%20India!5e0!3m2!1sen!2sin!4v1651918575660!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '935f81aeb811c1fb7e8983a82eb8c2dbd47948d15e5c5ca8e5a85855a54ef56ccd0040e94f309efc1858c39b0ba13e0a40e49d19896e3e61ffacd10ed7108146SPIqA7ovJTv4VnsxG290nhOia818ImvsCKQUVdlM7xc=', 'business-assert/profile/590989ebccbeb761fb185a042e6f17e3.png', '2022-05-28 11:54:52', 1),
(21, 'Varsha Travels', 'Shop No 11, Globe Chambers, Silvassa Vapi Road, Vapi Industrial Estate, Valsad - 396195, Opposite SB', 37, 'car.var.support@gmail.com', '7947479433', '', 5, '08:00am To 12:00pm', 'Rahul', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2012', 'Car Rent', 'VARSHA TRAVELS in Vapi, Valsad is one of the leading businesses in the Car Rental. Also known for Car Rental, Car Rental For Outstation, Car Rental For Self Driven, Air Ticketing Agents, Car Rental For Mumbai, Car Rental-Toyota Innova, Car Rental-Chevrolet Tavera, Car Rental-Toyota and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of VARSHA TRAVELS, Vapi, Valsad.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.717974937737!2d72.9576687348877!3d20.35326629999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce5eaaaaaa9d%3A0x35192b9eafb8ebdc!2svarsha%20road%20carrier%20vapi!5e0!3m2!1sen!2sin!4v1651919858331!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '977f5ee9d92e7ede16d52644fcdd7bdef9f3d759af4d641da1dcecfee6f65b60ac95c3b788f5f706ce01b567786ec62e397ad058dcd4d374cbdcfe779cb9e121F0nvVADbbcLILsjwYIa6z+wtR7MnPvAJrWAsdcB3P2A=', 'business-assert/profile/7a3120a6d1a202c7abab31b43e8fd098.png', '2022-05-29 12:06:17', 1),
(22, 'Jay Bherunath Tour and Travels', 'Swastik Sankul, Balitha, Balitha, Vapi - 396191, Near Swastik Sankul', 37, 'rental.jay.car24@gmial.com', '7937470299', '', 5, '10:00am To 11:30pm', 'ATUL PAWAR', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2020', 'raj kumar9th February, 2022 Good condition car and all new car', 'Jay Bherunath Tour and Travels in Balitha has a wide range of products and / or services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Pay for the product or service with ease by using any of the available modes of payment, such as Cash, Cash on Delivery, Paytm, PhonePe, UPI, BHIM, G Pay, NEFT, RTGS, IMPS. This establishment is functional from Open 24 Hrs - Open 24 Hrs.\r\n\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14957.73571808982!2d72.89160443318944!3d20.406216850390862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cf773f1592b1%3A0x3d929eb43ff87619!2sJay%20Bherunath%20Tours%20And%20Travels!5e0!3m2!1sen!2sin!4v1651920306063!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '7196b1878e0019c779f13daa37e7ec1977d58c4d611d618bd822fbb23f6e0c5fd610757a851eeb3a014c1a8644053a493897cabd89f30e9ab00f7273f2ab72f5skI5vzlrZpVQwms7ck+r/T+674xyBgQiqDcA7zwz7PM=', 'business-assert/profile/84855dd6b58ecb0230d27e40b4e52e26.png', '2022-05-29 12:07:28', 1),
(23, 'Sai Travels', 'Halar Road, Valsad Ho, Valsad - 396001, Behind Halar Lake, Opposite Water Tank', 36, 'sai.travels.help@gamil.com', '7947081747', '', 5, '10:00am To 10:30pm', 'Sandesh', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2013', 'Best and prompt service', 'Sai Leela Travels in Valsad Ho has a wide range of products and / or services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Pay for the product or service with ease by using any of the available modes of payment, such as Cash, Cheques, Debit Cards, Credit Card. This establishment is functional from Open 24 Hrs - Open 24 Hrs.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29876.149961102157!2d72.91046495549743!3d20.607702068573506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0c2995131533b%3A0x9074c44ea6dd7c74!2sHalar%20Water%20Tank!5e0!3m2!1sen!2sin!4v1651920666929!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'e43f78e11eec6d8faab8fac9dcf34a03e092f1ff3da0e2314e63a73148e96af2ef188d5f53cd49d55fe5e4c4cfa4bc6d489425313d55dd20ea454012a782464cQog0tgSSyUi9xqdk5jPHL5EEgXZW4eQdpypfx2xm5nY=', 'business-assert/profile/18fecf29b05acc8281380ed77dc649bf.png', '2022-05-29 12:09:29', 1),
(24, 'Skynet Enterprises', 'Plot No 26 2/2 New S No 2571/26, Maninagar, Mograwadi, Valsad - 396001', 36, 'skynet.anas@gmail.com', '8045791606', '', 5, '08:00am To 12:00pm', 'Reddy', 'monday,tuesday,wedenesday,thursday,saturday,sunday', '2017', 'Provide car services', 'Skynet Enterprises in Valsad is one of the leading businesses in the Domestic Travel Agents. Also known for Travel Agents, Car Rental, Railway Ticketing Agents, Car Rental For Outstation, Air Ticketing Agents, Tour Operators, Domestic Tour Operators, Tour Packages and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Skynet Enterprises, Valsad.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.2964759435854!2d72.93205201457057!3d20.61676888622302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0e825ff741c49%3A0xa2ec0674be51988f!2sIndian%20Oil%20Petrol%20Pump%20MANSI%20PETROLEUM!5e0!3m2!1sen!2sin!4v1651921547487!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '63202fb8ff73b5cca2dc9f6f4ffbea79783ada91e9751e9a445524e409782e0cbfd847d71a3249ddf7d11a1cf1ab484f7c9684633eaad502e27eda237357b18feexgzNG4W49JUUz6HSWE63LPfrr5zN6xX04wgTKfli4=', 'business-assert/profile/d08ea950ea701702bfca1679e02a45a2.png', '2022-05-29 12:11:13', 1),
(25, 'Sns Travels Vapi', 'RAVESHIYA COMPLEX 129, SARDAR CHOWK, Vapi Industrial Estate, Vapi - 396195, 40 SHED HANUMAN MANDIR', 37, 'sns222.rohit@gmail.com', '7947305093', '', 5, '08:30am To 10:00pm', 'Rohit', 'monday,wedenesday,thursday,friday,saturday,sunday', '2011', 'rent car', 'SNS Travels Vapi in Vapi, Valsad is one of the leading businesses in the Tempo Travellers On Hire For Jaipur. Also known for Car Rental, Tempo Travellers On Hire, Car Rental For Outstation, 24 Hours Car Rental, AC Tempo Traveller On Hire, Tempo Travellers On Hire For Outstation, 12 Seater Tempo Travellers On Hire, 17 Seater Tempo Travellers On Hire and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of SNS Travels Vapi, Vapi, Valsad.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.5128320267117!2d72.91763331456575!3d20.36173468636355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce38d405f641%3A0x84687e4f41f4e517!2sVapi%20I%20E%20Sub%20Post%20Office!5e0!3m2!1sen!2sin!4v1651923223687!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'a67647e7ec4f5668871a64f8b2d88f84b537c310d47ce8c3b5f105539c9f388e3901aa5cde789bdb6105f7636ce482417be48d73ae3fcf42ba888a0873cf61f6NjbvxaLM3L1VTWtjeKL9sGk0X0zG7tzYxSYqXDfAdXA=', 'business-assert/profile/ddc3883d87a89808cae14542e44c975a.png', '2022-05-29 12:12:27', 1),
(26, 'Yashraj Polytex Pvt Ltd', 'B-09 Busy BEE Center, Opp Hanuman Temple, Vapi, Valsad - 396191 (Vapi-Silvassa Road Bhadakmora)', 36, 'yashrajexport.help@gmail.com', '9552229696', 'www.yashraj.org', 6, '10:00am To 11:00pm', 'Yash', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2000', 'Export as itis', 'Yashraj Polytex Pvt Ltd in Vapi, Valsad is known to satisfactorily cater to the demands of its customer base. The business came into existence in 2012 and has, since then, been a known name in its field. It stands located at B-09 Busy BEE Center, Vapi-Silvassa Road Bhadakmora, Opp Hanuman Temple, Vapi-396191. Vapi-Silvassa Road Bhadakmora is a prominent landmark in the area and this establishment is in close proximity to the same.The business strives to make for a positive experience through its offerings.\r\n\r\nCustomer centricity is at the core of Yashraj Polytex Pvt Ltd in Vapi, Valsad and it is this belief that has led the business to build long-term relationships. Ensuring a positive customer experience, making available goods and/or services that are of top-notch quality is given prime importance.\r\n\r\nIndia’s leading B2B market place, Jd Mart ensures engaging in business activities is a seamless process for small and medium enterprises as well as large businesses. In a wake to enable these businesses to reach their audience, this portal lets them showcase their offerings in terms of the products and/or services through a digital catalogue. This business has a wide range of product offerings and the product/catalogue list includes Export Consultants, Export Obligation Dischargement Certificate Consultants, Exports And Imports Service, Ice Consultants, Import & Export Services etc.\r\n\r\nKindly scroll up for the address and contact details of Yashraj Polytex Pvt Ltd in Valsad', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29929.398894830727!2d72.93009850516717!3d20.334393678213807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce41b1bf6687%3A0x577321951e03b1e1!2sYASHRAJ%20GROUP!5e0!3m2!1sen!2sin!4v1651934377824!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'f74852d0a2dde3ca1f84417d939d08ad4d5301cb5e73f18a144fbcd65f3dbfc706469332c5df8fb55481199c838bce0c4bbe4089ecd7774b768be997d32fae1ddDwIHhHQTVIACjy84NRGAKFlR7UZmBEvPky0FK4v9lI=', 'business-assert/profile/7e94187c07266cb734621c89be2a3852.png', '2022-05-31 12:41:14', 1),
(27, 'SH COMPANY', '401.Star Complex. Nr.Ramjanwadi masjid. Ramjanwadi. Chhadvada, Vapi, Gujarat 396195', 36, 'info.sh25@gmail.com', '7487093017', '', 6, '09:30am To 10:30pm', 'shakib Hasan ', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2008', 'Goods', 'SH COMPANY in Vapi Industrial Estate, Valsad is known to satisfactorily cater to the demands of its customer base. The business came into existence in 2008 and has, since then, been a known name in its field. It stands located at Plot No 136 B/C, Phase II, Gidc, Silvassa Road, Vapi Industrial Estate-396195. Phase II,Gidc is a prominent landmark in the area and this establishment is in close proximity to the same.The business strives to make for a positive experience through its offerings.\r\n\r\nCustomer centricity is at the core of SH COMPANY in Vapi Industrial Estate, Valsad and it is this belief that has led the business to build long-term relationships. Ensuring a positive customer experience, making available goods and/or services that are of top-notch quality is given prime importance.\r\n\r\nIndia’s leading B2B market place, Jd Mart ensures engaging in business activities is a seamless process for small and medium enterprises as well as large businesses. In a wake to enable these businesses to reach their audience, this portal lets them showcase their offerings in terms of the products and/or services through a digital catalogue. This business has a wide range of product offerings and the product/catalogue list includes Merchant Export Services, Merchant Exporter Services, Merchant Exporters Services, Merchant Services, Export Agents etc.\r\n\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239387.99779444255!2d72.6389836328125!3d20.364845000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cfabee1d440d%3A0xcd6ada202f316182!2sSH%20%26%20COMPANY!5e0!3m2!1sen!2sin!4v1653936800236!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '924c4895522dc0fa89b73dbda43857c4151ff169adfc39d1e055cc26669c299a78e557c36202bdf38ec99df1e91d44db9eac7865e377d9c75e18be347fb5ebe3v5zSwrqtNjJsxb26TyZrETBACWM7aYlAfhecak5bH74=', 'business-assert/profile/5bd35490df0861d895747ac97f55cfab.png', '2022-05-31 12:20:51', 1),
(28, 'SBF Export Import Pvt Ltd', 'Sai darshan, Shop No 104,, 1st floor,Opp G.I.D.C office,G.I.D.C, Vapi, Gujarat 396195', 37, 'support.gr.groups@gmail.com', '9387877154', 'www.ramgroupofco.weebly.com', 6, '10:00am To 06:00pm', 'Ramji groups', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2005', 'Good Transport', 'SBF Export & Import Pvt. Ltd. in Vapi Industrial Estate, Valsad is known to satisfactorily cater to the demands of its customer base. The business came into existence in 2011 and has, since then, been a known name in its field. It stands located at 210, Panchratna Building, Four Cross Road, G.I.D.C., Vapi Industrial Estate-396195. Four Cross Road is a prominent landmark in the area and this establishment is in close proximity to the same.The business strives to make for a positive experience through its offerings. The accepted modes of payment such as Cheques make every business transaction easy and seamless, contributing to making the entire process even more effective.\r\n\r\nCustomer centricity is at the core of Ram Group Of Co in Vapi Industrial Estate, Valsad and it is this belief that has led the business to build long-term relationships. Ensuring a positive customer experience, making available goods and/or services that are of top-notch quality is given prime importance.\r\n\r\nIndia’s leading B2B market place, Jd Mart ensures engaging in business activities is a seamless process for small and medium enterprises as well as large businesses. In a wake to enable these businesses to reach their audience, this portal lets them showcase their offerings in terms of the products and/or services through a digital catalogue. This business has a wide range of product offerings and the product/catalogue list includes Import Export Sourcing etc.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239360.65824742746!2d72.62150363281249!3d20.382465799999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce39addc1ed7%3A0x563374baae078da4!2sSBF%20Export%20%26%20Import%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1653937712920!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'de02a130f654838d43c22610a5e64c4cf494d4ff4317f14bbdf97991b3e17343939b007dac9ba722b9512e6657adfc8e5207534d50228ef88a91d8fc89be9093/Y5BA955AAFJPc6LbfsGvHBz+EhSUrDk3GTCR7cd2f0=', 'business-assert/profile/b630e41e588946f500ba164d182711dd.png', '2022-05-31 12:36:40', 1);
INSERT INTO `tbl_business` (`business_id`, `name`, `address`, `location_id`, `email`, `contact_no`, `website`, `category_id`, `open_closing_time`, `owner_name`, `weekday`, `since`, `tagline`, `description`, `iframe`, `password`, `profile_pic`, `last_login`, `status`) VALUES
(29, 'C H International', 'Plot No 5005/a 5004/4a, Phase -4, Vapi Industrial Estate, Valsad - 396195 (Gidc)', 36, 'support.international.import.ch@gmail.com', '8788995858', '', 6, '10:00am To 08:00pm', 'Karan patel', 'monday,wednesday,thursday,friday', '2013', 'Good and Services', 'C H International in Vapi Industrial Estate, Valsad is known to satisfactorily cater to the demands of its customer base. The business came into existence in 1983 and has, since then, been a known name in its field. It stands located at Plot No 5005/a 5004/4a, Gidc, Phase -4, Industrial Estate-396195. Gidc is a prominent landmark in the area and this establishment is in close proximity to the same.The business strives to make for a positive experience through its offerings. The accepted modes of payment such as Cheques make every business transaction easy and seamless, contributing to making the entire process even more effective.\r\n\r\nCustomer centricity is at the core of C H International in Vapi Industrial Estate, Valsad and it is this belief that has led the business to build long-term relationships. Ensuring a positive customer experience, making available goods and/or services that are of top-notch quality is given prime importance.\r\n\r\nIndia’s leading B2B market place, Jd Mart ensures engaging in business activities is a seamless process for small and medium enterprises as well as large businesses. In a wake to enable these businesses to reach their audience, this portal lets them showcase their offerings in terms of the products and/or services through a digital catalogue. This business has a wide range of product offerings and the product/catalogue list includes Chemical, Inorganic Chemical, Merchant Export Services, Merchant Exporter Services, Merchant Exporters Services etc.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.521916598709!2d72.91429732176762!3d20.361359742747617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cf66bff01707%3A0x5cf5e1e4d4d5ce01!2sG-1%2C%20Plot%20no.%2032%2C%20Near%20Ameedhara%20complex%20%2C%20Beside%20Shree%20Khodiyar%20Kathiyawadi%20Dhaba%20%2C%20N.H.%20No.%208%20G.I.D.C%20Char%20Rasta%2C%20Phase-1%2C%20G.I.D.C%20Vapi%20%2C%20Gujarat%20-%20396195%2C%20Phase%201%2C%20GIDC%2C%20Vapi%2C%20Gujarat%20396191!5e0!3m2!1sen!2sin!4v1651935388227!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '5c841e59fc7d8a7d9707a1e66973a000850d9e51449ab5d7867ac79a6ced5d3532022fe8816a78b564f5e28de8cbe3e135301a722f46eb1a8df8f958a9acbe63LubQCO7BO8dFhZrqPvpz27XuEO7KuOmnge0Zhg8z+WE=', 'business-assert/profile/7a25429946096a806c8a9b1ca79119e7.png', '0000-00-00 00:00:00', 1),
(30, 'Paras Electricals ', 'Shop Number 4/5 Arihant Classic Shopping Center, Chival Road, Pardi, Valsad - 396125, Near Mari Mata', 37, 'paras252.elect@gmail.com', '9427945741', '', 4, '09:00am To 10:00pm', 'Parash', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2007', 'all types of wire provided', 'You can easily locate the establishment as it is in close proximity to Near Mari Mata Temple', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239387.36152027157!2d72.79933039301041!3d20.365255255372098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0c5c287315c31%3A0x14659c01f1614d5a!2sParas%20Electricals!5e0!3m2!1sen!2sin!4v1651944668878!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '03aa8326a2fd7b652f89e9b99069bb159f330adcc0c5d3685673132c987950664675dc2e2209f8612ba293caed1afcacb3cb0f508ed3786bea8bf2cd68dac6bcLM6p2uT7ncqaz9A/t28x2JOKHnWTdCyF+Cr1hlRp1Gw=', 'business-assert/profile/83626445bf5e560404a1c9ba17c76006.png', '2022-05-28 11:57:49', 1),
(31, 'International Organization Of Importer  Exporter', 'A 322/B, 40 Shed Area, Vapi Industrial Estate, Valsad - 396195 (Gidc)', 36, 'Adam.exports247@gmail.com', '7879958888', '', 6, '08:00am To 09:00pm', 'Adam ', 'monday,tuesday,friday,saturday', '2013', 'export services', 'Adam Exports in Vapi Industrial Estate, Valsad is known to satisfactorily cater to the demands of its customer base. The business came into existence in 2008 and has, since then, been a known name in its field. It stands located at A 322/B, 40 Shed Area, Gidc, Vapi Industrial Estate-396195. Gidc is a prominent landmark in the area and this establishment is in close proximity to the same.The business strives to make for a positive experience through its offerings.\r\n\r\nCustomer centricity is at the core of Adam Exports in Vapi Industrial Estate, Valsad and it is this belief that has led the business to build long-term relationships. Ensuring a positive customer experience, making available goods and/or services that are of top-notch quality is given prime importance.\r\n\r\nIndia’s leading B2B market place, Jd Mart ensures engaging in business activities is a seamless process for small and medium enterprises as well as large businesses. In a wake to enable these businesses to reach their audience, this portal lets them showcase their offerings in terms of the products and/or services through a digital catalogue. This business has a wide range of product offerings and the product/catalogue list includes Merchant Export Services, Merchant Exporter Services, Merchant Exporters Services, Merchant Services, Export Agents etc.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14961.805526196931!2d72.91710767814544!3d20.364270731791557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce4b63b8e543%3A0x37b5db80415202d7!2sNAVIN%20CHEMICALS!5e0!3m2!1sen!2sin!4v1651945262258!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'c105cefa607a5e0e7718044e857db89f1e5b06e245b3d487d13eea98eb347c260f58e8a7abad4dbb9df5ee797b15bd30864fc2a15fe971d337ef1d917041a68bQvGpDSnpl96DrnJw3askdC4R+ZJ0RuGfXFBu1FMGXQk=', 'business-assert/profile/01835088013f1a997740ada1de3208d6.png', '0000-00-00 00:00:00', 1),
(32, 'Octa Core Technologies', '207, Sai Darshan Complex, Telephone Exchange Road, Vapi Industrial Estate, Valsad - 396195, Near GID', 37, 'octa.tech.2@gmail.com', '7046649999', 'www.octacoretechnologies.com', 7, '09:30am To 8:00pm', 'saurav', 'monday,tuesday,wedenesday,thursday,friday', '2011', 'Tech', 'Octa Core Technologies in Valsad. Computer AMC with Address, Contact Number, Photos, Maps. View Octa Core Technologies, Valsad on Justdial.\r\n\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.427601761786!2d72.91719421484301!3d20.36525203636156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cf088e08efc9%3A0xf462b5c497dc840c!2sOctaCore%20Technologies!5e0!3m2!1sen!2sin!4v1651946070464!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '46a8b308034d19aaa4efd1b3b2a5574ada8deaf11ee2cd012092a44db36fdb957440f29f9451da9ad09782622cc7e9ea683f015c027b71b6d4e94995a7d77850rfESOKIb94JEVKYSzYo0Q0Lccq971jXgGAamE3J1n7w=', 'business-assert/profile/e4d026c7cbe20fcb653b25dd71131ed1.png', '2022-05-31 01:29:39', 1),
(33, 'Orizer ERP GST', '14-15, Mohid Tower, Vapi Daman Road, Chala, Vapi, Valsad HO, Valsad - 396001', 36, 'tech.orizer.support@gmail.com', '7777856996', 'www.orizer.in', 7, '10:00am To 08:30pm', 'Ujjawal', 'monday,tuesday,wedenesday,thursday,friday', '2021', 'Tech Support', 'Orizer ERP GST in Valsad is one of the leading businesses in the IT Solution Providers. Also known for Software Companies, Computer Software Dealers, Computer Software Developers, Computer Software Developers, Digital Marketing Services, Internet Website Designers, Logo Designers, Brochure Designers and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Orizer ERP GST, Valsad.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14959.632986960927!2d72.89423132815148!3d20.386672631593417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cfd697717921%3A0x94a3a5dceb22c44a!2sMOHID%20TOWER%2C%20Daman%20Road%2C%20Chala%2C%20Vapi%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1651946382395!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '9371dc2ce61c5532fab3f2d155730f6597e03ae64399e85d5f86231a9a6c49f3f507c3d29482e64d6dfedb5a061d5bfd66c27120c14e0cd8726673bd13d97278KXkKGZrJakrtOvUnxeVzKT91iTZqepOyE5skVrK3SOM=', 'business-assert/profile/6fc96e6ecec2bd9ebf68fe50d26471fd.png', '2022-05-31 01:34:18', 1),
(34, 'Blue Ink Infotech', '408 Maurya Atria, Opp Kalgi Apartment, Bodakdev, Ahmedabad - 380054, Near Atithi Restauran', 13, 'support.blue.infotech221@gmail.com', '7947080125', 'www.blueinkinfotech.com', 7, '09:00am To 11:00pm', 'Shiv Pratap Singh', 'monday,tuesday,wednesday,thursday,friday,saturday', '2012', 'Tech ', 'Blue Ink Infotech in Ahmedabad is one of the leading businesses in the IT Solution Providers. Also known for Data Entry Job Works, Offline Data Entry Job Works, IT Solution Providers, Data Entry Outsourcing Services, Data Entry Jobs From Home, Online Data Entry Job Works, BPO Consultants, BPO Solution Providers and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Blue Ink Infotech, Ahmedabad.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.6279749025152!2d72.51030671489083!3d23.03742803494558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b497323634f%3A0xae84342558eda255!2sMaurya%20Atria!5e0!3m2!1sen!2sin!4v1651946794833!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'bda9a523c70bdffd3217bac02c8f00f45da64cd80916235ca79e96df0fc6deeacf54294b229aea8fc414c0c31127090a289947f73c1733594768f498ef5bbb37FMa7L52GSSsGp8cPjvnwDK0xh4HEOVP3fjRnpZfTfBQ=', 'business-assert/profile/b327364fddfd2cd994fb54d4e5a214e9.png', '0000-00-00 00:00:00', 1),
(35, 'Apple Solution Tech Expert', 'Shop 11 Kalpvruksh, Tithal Road, Tithal, Valsad - 396001, Opposite World Of Titan', 36, 'solution.techgig.apple@gmail.com', '7041517007', 'www.app.waitwhile.com', 7, '10:00am To 10:30pm', 'HBR PATEL', 'monday,tuesday,wednesday,thursday,friday,saturday', '2009', 'Computer Dealers', 'Apple Solution- Tech Expert in Valsad is one of the leading businesses in the Data Recovery Services. Also known for Computer Dealers, Laptop Dealers, Mobile Phone Repair & Services, Computer Repair & Services, Laptop Repair & Services, Computer Printer Repair & Services, Laptop Repair & Services-Dell, Laptop Repair & Services-HP and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Apple Solution- Tech Expert, Valsad.\r\n\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239186.7779335292!2d72.77523128390818!3d20.494195086778515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0c329eeac5533%3A0x26c1e9cabb3792b7!2sVandana%20time!5e0!3m2!1sen!2sin!4v1651947133233!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '19a0d7cd2c170bc770d1ed7ed5469b8147f75bea574c609e6e5cae2f79ef2e75f1d0d519550deeec2c5240b426cb9de5c95cf835d7b224ca53eef06aef71a3227+PqlavC8iq0cUqO4FR9eXfvanHVBXJuFuxfk88X6Xs=', 'business-assert/profile/034a086bf66d950e3efbc34fbb906106.png', '0000-00-00 00:00:00', 1),
(36, 'Logon Computers', 'Shop No 4, Avabai Complex, Madhuli Restaurant, UCO Bank, Valsad, Nani Khatriwad, Valsad - 396001, Op', 36, 'logocomputer2411@gmail.com', '7947080498', 'www.logoncomputer.com', 7, '09:00am To 10:00pm', 'Jitesh', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2009', 'All types tech Support', 'Established in the year 2009, Logon Computers in Nani Khatriwad, Valsad is a top player in the category Computer Dealers in the Valsad. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Valsad. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Valsad, this establishment occupies a prominent location in Nani Khatriwad. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at Madhuli Restaurant , UCO Bank , Valsad, Opposite UCO Bank, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Hardware Shops, Computer Dealers, Laptop Dealers, CCTV Dealers, Computer Repair & Services, Power Tool Dealers, Hardware Dealers, Pipe Dealers.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.468180577781!2d72.92577291484719!3d20.609765036226815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0c29e0f5f55a7%3A0x489c3b689ac23422!2sBai%20Ava%20Bai%20High%20School!5e0!3m2!1sen!2sin!4v1651947518327!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '6a0336627232dd984c1062647b21b6503e4572b77942ac34937f013889ea22589502e201dfa5c005c19631b9f6e7a72d69d192a42aff47444a02295d9180aa4fIxabWOI4IQt3SBkshf71VTBfKYfj1WV3yB0oh2vge/U=', 'business-assert/profile/95e1ed7e9441aba4e8c42688f7c8a37a.png', '0000-00-00 00:00:00', 1),
(37, 'Shrimad Rajchandra Gurukul', 'Kangvi Road, Karanjveri,Dharampur 396051, Dist. Valsad, Gujarat. India.', 42, 'gurukul@loveandcare.srmd.org', '7069400097', 'www.srloveandcare.org', 3, '09:00am To 02:00pm', 'Pujya Gurudevshri Rakeshji', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2011', 'Education', 'Shrimad Rajchandra Gurukul is a progressive school that serves the economically deprived students, offering them the right infrastructure and environment to parent them into becoming constructive members of society. The core values that we seek to empower our students with are integrity, perseverance and empathy. While we work systematically towards improving the academic core of the students, giving them a platform to pursue higher education, we also pay keen attention to skill development and other activities and programmes to ensure holistic development.\r\n\r\nThe education scenario in South Gujarat is such that a large number of the villages remain deprived of this basic necessity. Tribals are recognised as one of the most marginalised groups and provision for their educational development in the area are scarce. An innovative and integrated educational approach to maximise their potential is most important for helping them escape the vicious cycle of ignorance and poverty.\r\n\r\nDharampur lies in one of the major tribal belts of South Gujarat, where access to higher education is limited. There posed an urgent need for higher secondary education in the stream of Science that could be accessible to tribal students. Responding immediately to this need, Shrimad Rajchandra Gurukul at Karanjveri in Dharampur was founded in June 2011.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.141697482697!2d73.21556681484596!3d20.541382486264446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0bb8b82c1e1a3%3A0xd402d70b86e70c2c!2sKangvi%20Rd%2C%20Gujarat%20396051!5e0!3m2!1sen!2sin!4v1652075185833!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '7872243d62239a9615da296af502c0e5e9ce62a29ce587b7ae3008482952d6e1fe5b372eabb4fad809d13acdb40d9efcd4272c35fc74a6702cd5cb278cc4a3faVAVM2hgUWDxL2YkttMDmVjl9gakTks6WWWh1/8TRuME=', 'business-assert/profile/e8820d098d593c74ebd20e3720166e7f.png', '2022-05-31 12:00:29', 1),
(38, 'Gujarat Water Suppliers', 'At. Post, Salvav ( Brahman Faliya ), Chharwada Roads, Vapi, Vapi - 396191, Near 360 Vida and Polaris', 37, 'hardik.water22@gmail.com', '9924882226', '', 9, '08:00am To 08:00pm', 'Hardik', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2008', 'Fresh Water', 'Water SuppliersDrinking \r\nWater SuppliersWater Suppliers (Upto 500 Litres)\r\nDrinking Water Tanker \r\nSuppliers Residential \r\nWater Suppliers', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59857.0054846236!2d72.87481565820312!3d20.339022399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cf117144b92b%3A0x35f1199ce5d41736!2sGujarat%20Water%20Suppliers!5e0!3m2!1sen!2sin!4v1653939142185!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '13b2558e665e6ec0d9a13bf948a70712b8318d368613cd72999322198faf92e1d2b2ca5cefff019bbe6f17b456d3a06c5d2371a73fb00d11351d3d678c6d1fb6v5cuQEajVApDCaHiiO+bpffCd/EsBcTWyS9F2UDI+yc=', 'business-assert/profile/ee11e6d70c57af4acfab0aa45cb314c1.png', '2022-05-31 01:00:31', 1),
(39, 'Amit fruit supplier', 'H546+8JX, Bamti, Gujarat 396055', 42, 'amit22.mango@gamil.com', '9985475863', '', 15, '10:00am To 10:30pm', 'amit', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2008', 'Fresh Mango', 'Amit fruit supplier in dharampur is one of the leading businesses in the Mango Wholesalers. Also known for Mango Wholesalers, Mango Retailers and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Apmc market Keri Market, Dharampur.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.8319423222865!2d73.15933761484618!3d20.55405598625746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcef2dd3f86c77e3!2sDharampur%20New%20Mango%20Market!5e0!3m2!1sen!2sin!4v1652075850245!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '591a6844ce67fa9f7bb5de746692f1c5579e2e2d14f5807d06a2ab09e4f7508055e11b7e2001aaa6d59d6baa752b826e3ac6bfd08b0f9a9095df4d5e273eba10OqmScEUGtEZU6YlhJQ/vYwvDHI5fIyGY47sj8D4ZT6k=', 'business-assert/profile/f04652da0e8fdc71a529b596fb8596d1.png', '2022-05-31 01:54:46', 1),
(40, 'Adarsh Fruit Supplier', 'H546+8JX, Bamti, Gujarat 396055', 42, 'mango.Adarsh77@gmail.com', '9428756178', '', 15, '10:00am To 12:00pm', 'Adarash Yadav', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2020', 'Mango', 'Adarsh fruit supplier apmc  keri Market in Dharampur is one of the leading businesses in the Mango Wholesalers. Also known for Mango Wholesalers, Mango Retailers and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Apmc market Keri Market, Dharampur.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.8319423222865!2d73.15933761484618!3d20.55405598625746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcef2dd3f86c77e3!2sDharampur%20New%20Mango%20Market!5e0!3m2!1sen!2sin!4v1652075850245!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '31a517ffdbf495832611555d50093b85824bd4669814577016d52c5cc6a6755dc74551d91659c6a7255084d17489f078b6a3ee95efab282089a112f1d026aa61EUdafzq2mq6hhMywDC5QhiVO0rgyblbBzHd9RPSZH68=', 'business-assert/profile/3f11349502c76df497c3e30862233d4e.png', '2022-05-31 01:55:38', 1),
(41, 'Yadav Fruit Supplier', 'H546+8JX, Bamti, Gujarat 396055', 42, 'keri.market25@gmail.com', '7758589696', '', 15, '10:00am To 12:00pm', 'ravi yadav', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2001', 'kaccha aam ', 'Yadav fruit supplier apmc  keri Market in Dharampur is one of the leading businesses in the Mango Wholesalers. Also known for Mango Wholesalers, Mango Retailers and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Apmc market Keri Market, Dharampur.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.8319423222865!2d73.15933761484618!3d20.55405598625746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcef2dd3f86c77e3!2sDharampur%20New%20Mango%20Market!5e0!3m2!1sen!2sin!4v1652075850245!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'b672d6ae705770a8901b30d4fc271ec442aac55eead59a6571f1566337e4d30a16caecabd69e79d30a9a5e721d29cc112486117602f18c4e70e55332fa5c4a02C/pmGu1TTCVJOJfu+SCw3qugFdhcqGRhtb6qf9yr53Y=', 'business-assert/profile/7673458a151db22f054a58b40a78a993.png', '2022-05-31 01:45:20', 1),
(42, 'Sita ram and sons', 'H546+8JX, Bamti, Gujarat 396055', 42, 'sitaram.mango.help@gmail.com', '8856952569', '', 15, '10:00am To 11:30pm', 'Prem Singh', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2010', 'Fresh mango', 'Sita ram and sons apmc  keri Market in Dharampur is one of the leading businesses in the Mango Wholesalers. Also known for Mango Wholesalers, Mango Retailers and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Apmc market Keri Market, Dharampur.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.8319423222865!2d73.15933761484618!3d20.55405598625746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcef2dd3f86c77e3!2sDharampur%20New%20Mango%20Market!5e0!3m2!1sen!2sin!4v1652075850245!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '5212b673b68c983afb60434c7c4faf4d2d4e4f5a3f61c384e0bfd66a99555440fa8a2aa7c3d86c324db95c019d56f91c136775d61228e7ee305ad2dd3caab236xJfmrf+nUO9Jdpjc3rGXvnrmgh/gPBZSNiZskuzo9Qg=', 'business-assert/profile/2482c0d13021265534b8c5d71a9d1822.png', '2022-05-31 01:56:37', 1),
(43, 'Singh Fruit supplier', 'H546+8JX, Bamti, Gujarat 396055', 42, 'support.mango.Singh88@gamil.com', '9636363399', '', 15, '10:00am To 12:30pm', 'Sachin', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2010', 'Mango supplier', 'Singh fruit supplier apmc  keri Market in Dharampur is one of the leading businesses in the Mango Wholesalers. Also known for Mango Wholesalers, Mango Retailers and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Apmc market Keri Market, Dharampur.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.8319423222865!2d73.15933761484618!3d20.55405598625746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcef2dd3f86c77e3!2sDharampur%20New%20Mango%20Market!5e0!3m2!1sen!2sin!4v1652075850245!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '41d7a23288ca792afa3a620a79d3f7dc8654292475dd2ee7827ac4bdfdb8f9abeb36c7c68552b64519d5a381ea75b8e28571d64df5087440760e652b2542e824Tn0INRgZEp175dWIUkKwP759lzAhV5rYO6cGa+hs7Fg=', 'business-assert/profile/ac90528f993b416c8343169a940b19a8.png', '2022-05-31 01:57:23', 1),
(44, 'D mart', 'Sulpad Colony, Chanod, Vapi - 396191', 37, 'Dmartindian.support@gmail.com', '02602450220', 'www.dmartindia.com', 2, '10:00am To 10:00pm', 'Radhakishan damani', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2016', 'Dmart Store', 'D Mart in Vapi, Valsad is one of the leading businesses in the D Mart. Also known for Mobile Phone Dealers, Readymade Garment Retailers, Departmental Stores, Supermarkets, Stationery Shops, Jewellery Showrooms, Shoe Dealers, Sports Goods Dealers and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of D Mart, Vapi, Valsad.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1870.3724751258285!2d72.92692170807166!3d20.35215249659221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce6971b00001%3A0xa0acce9ce50044f6!2sDMart%20Vapi%2CChanod!5e0!3m2!1sen!2sin!4v1652081394477!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '5bda88e3bd754910fb83e94c8f039d6fd1fdbbf6dfef035d24eedba5a81cd3f16aa209b14414852793bbe322e18b5f93eed376650ce7ee03c63eeb03117555c3ucMqAq3oUDtx7+x/jHpAT5l53g+VKAy08rWoF0fr/Xc=', 'business-assert/profile/51dcc80084fcb2d38a437e530720b229.png', '2022-06-01 02:08:27', 1),
(47, 'Naturals Ice Cream', 'Shop No 7, The Delta Co Op Housing Society, E-Wing, Chharawada Rd, GIDC, Vapi, Gujarat 396195', 37, 'Naturals.icecream36@gamil.com', '8980037800', 'naturalicecreams.in', 2, '11:00am To 12:00pm', 'Raghunandan Kamath', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2017', 'Taste The Original', 'Long-running ice cream parlour locale featuring natural colours, flavours & essences.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29920.669317072094!2d72.90605108162319!3d20.379440000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce4bd0e25d87%3A0xec6366cf8e128e6!2sNaturals%20Ice%20Cream!5e0!3m2!1sen!2sin!4v1652083166031!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '9ce3c2076463af142f9b2bb59cb75f4af87b9c9182c2a904ef46a21beef00461df9febed9d3e2eacf6b24ba00f426e4dfcc3809713c1f4576cf0c69cf71b43b6Lmu6UcCLGhUjrUVy7XaxtNvIxLPdpvrXuRHU+Vhs07g=', 'business-assert/profile/44fd224937feba1dcc1a8d580fbeb56e.png', '2022-05-30 06:42:21', 1),
(48, 'Bright Cool', 'Shop No.2 New Housing Board, Morarji Circle Road, Vapi Industrial Estate, Vapi - 396195, Opposite Pr', 37, 'Coldstorage.bright252@gamil.com', '9998114006', '', 14, '10:00am To 09:00pm', 'Rajnikant mishra', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2009', 'Cold Storage', 'Bright Cool in Vapi Industrial Estate, Vapi, Valsad\r\nBright Cool in Vapi, Valsad is one of the leading businesses in the AC Repair & Services. Also known for AC Repair & Services, Washing Machine Repair & Services, Refrigerator Repair & Services, Cold Storage Services, Washing Machine Repair & Services-IFB, Second Hand AC Dealers, Washing Machine Repair & Services-LG, Washing Machine Repair & Services-Samsung and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Bright Cool, Vapi, Valsad.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.389277500162!2d72.91936492176848!3d20.366833442734958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce47e7f1da19%3A0x6e5b9836a2b5e884!2sVIA%20Rd%2C%20Ajit%20Nagar%2C%20Phase%202%2C%20GIDC%2C%20Vapi%2C%20Gujarat%20396191!5e0!3m2!1sen!2sin!4v1652167471042!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'bfd6e53423d2e893eb9e49b96d47b3e85b4e094ff2a81ec3716e380214b4170822e597f26985304fcbdd7c4c60d715228f5199733853b5ad0fd3b2ebb2e2fcecmg/UukOAnk77Y38hCh0USIlLOqXKH4WTX1qhXJoq7bc=', 'business-assert/profile/57b0fd274ec6f1d1395940852557ac3d.png', '2022-05-30 06:49:55', 1),
(49, 'Pragati Cold Storage Works', 'Shop No.10, Garden Society, GIDC Road, Vapi Industrial Estate, Vapi - 396195, Housing Society', 37, 'Pragaticold88@gmail.com', '9685745899', '', 14, '08:00am To 09:00pm', 'Dev', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2010', 'Cold Storage Room Manufacturers', 'Pragati Cold Storage Works in Vapi, Valsad is one of the leading businesses in the False Ceiling Contractors. Also known for Fabricators, False Ceiling Contractors, Cold Storage Services, Project Consultants, Aluminium Door Fabricators, Cold Storage Room Manufacturers, Cold Storage Unit Manufacturers, Door Fabricators and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Pragati Cold Storage Works, Vapi, Valsad.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.440676721337!2d72.92342071471963!3d20.36471248636182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf7872546549e7e2b!2s7JGJ9W7G%2BV6Q!5e0!3m2!1sen!2sin!4v1652985389028!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'b0d9df134ec0b434c4c932f9f1b19bcadc1fd58ea881301e0ba6fe6b043e37c2cd92f79f45074369ff02a958beffe7480d519449aadb0b86ce8c9bd07602bac9Wx8hcHfCiS+Ha/9PKT1LGLCp9VVxLv/g5g+ZSsFAH5Y=', 'business-assert/profile/3942372619e4d4a7b77ef8cf4e3e2010.png', '2022-05-30 06:51:01', 1),
(50, 'Dew Refrigeration  Service', 'Shop No 3, Odhav Krupa Society, B K Marg, Valsad - 396191, Near Ashopalav Complex', 36, 'dewrefrigeration@gmail.com', '9714754725', 'www.dewrefrigeration.com', 14, '08:00am To 09:00pm', 'Mohit Patel', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2003', 'Cold Storage Services', 'Dew Refrigeration Sales & Service in Valsad is one of the leading businesses in the Chiller Dealers. Also known for AC Repair & Services, AC Dealers, Air Cooler Dealers, Refrigerator Dealers, AC Part Dealers, Cold Storage Services, AC Dealers-Daikin, AC Dealers-Voltas and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Dew Refrigeration Sales & Service, Valsad.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7481.56027678731!2d72.92730022965407!3d20.350699499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cffc4b64f61d%3A0xf7bd70d7a04702d0!2sODHAV%20KRUPA%20VILLA!5e0!3m2!1sen!2sin!4v1653711419846!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'fb0d88e8656df88768ede6c19318a12d824743c1edbc7a2d48289adbb2c884e35146f95cf8bbece27a54fc3c65f11523797d778e64b048057c3bab82afbe206deiZuavlwS8TYqRpDLGlGi/2laphoq68Bx/cmb75cvFk=', 'business-assert/profile/ab4fe6fc1a85c0a776aafe923842172a.png', '2022-05-28 10:44:25', 1),
(51, 'Nexus Enterprise', 'Shop.no.18 Super Market Opposite Vapi Police Station, Nehrustreet, Vapi, Vapi - 396191', 37, 'nexenterprise2@gmail.com', '8000505705', '', 14, '06:00am To 11:00pm', 'Vijay', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2008', 'Cold Storage Services, Puf Panel Wholesalers', 'Customer centricity is at the core of Nexus Enterprise and it is this belief that has led the business to build long-term relationships. Ensuring a positive customer experience, making available goods and/or services that are of top-notch quality is given prime importance.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29921.880879819724!2d72.87191987910157!3d20.373193800000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cfcc5e4ac387%3A0x4d99f8a7535350e2!2sKINGWELL!5e0!3m2!1sen!2sin!4v1653712934905!5m2!1sen!2sin', '9bcd4e69b33eaddde456a313f6a3bd6c5664681016eefa452f2b1f193b3d68d6b1b0994a4627aa3fcc38744a6190615e2d32c52701617b088ccf54dd98836a63uD7okyNki5TpWIz3psw0akfErCVg8F0Pr/AgcQem724=', 'business-assert/profile/1a18d76b152e3f8a3f112bd86f9e0cf6.png', '2022-05-28 10:47:48', 1),
(52, 'Green Shop', 'Dharampur Apmc Market, Bamti, Gujarat-396050', 42, 'ravivegi8@gmail.com', '9952697789', '', 11, '06:00am To 10:00pm', 'Ravi ', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2022', 'Vegitable wholesaler ', 'Green Shop in Dharampur is one of the leading businesses in the Kesar Mango Wholesalers. Also known for Chopped Vegetable Home Delivery Services, Mango Vendors, Dry Fruit Home Delivery Services, Organic Vegetable Home Delivery Services, Dairy Product Home Delivery Services, Grocery Home Delivery Services, Fruit Home Delivery Services, Vegetable Wholesalers and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Green Shop, Dharampur.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.831943396926!2d73.15704162311927!3d20.554055942301666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0bfcf5b637dad%3A0x4f5a18fcc4f8c84a!2sDharampur%20Apmc%20Market!5e0!3m2!1sen!2sin!4v1653714213593!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '50c80b1d743ee908bb4bea5650e3261869df32bbc2e182fb759f2e7232000be2b5dfc951a4122e81e2a73c5430988a17bd5910fd2e74c33813aae7b5b0da6730FWX8KbHJP1J+ByFLV0mBFbcrU8MuXVvyqQVYz60rv2I=', 'business-assert/profile/e4a4a30b308428f22ea6904a8ac4121b.png', '2022-05-30 12:16:30', 1),
(53, 'Nature Fresh ', 'Gidc Housing Board Colony, Golden Town, Gidc, Gunjan Road, Vapi, Valsad - 396191', 37, 'freshveg66@gmail.com', '9925114304', '', 11, '08:00am To 09:00pm', 'Kuldeep', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2017', 'Vegetable Vendors', 'One of the leading businesses in the Fruit and Vegitable Wholesalers industry is Vapi\'s Nature Fresh. Wholesalers of bananas, apples, pineapples, fruit marriages, apple fruit retailers, pineapple wholesalers and much more. Nature Fresh vegetable in Vapi: Get Address, Contact Number, Reviews & Ratings, Photos, Maps', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.205594295208!2d72.91913171471968!3d20.374411286356526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce49e6e7907f%3A0x84893333741f5c66!2sGunjan%20Rd%2C%20Golden%20Town%2C%20GIDC%2C%20Vapi%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1653849687841!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '2784b3d467dad50cf383a75226c7c50c1e75d72ccbdde4eb75e492089623b346b298a9e6774d84772b7978f6e282e27e0cb8f23c2f67a20f0870ae5081847a2dhrP+bGBbKpngfF8yzn2IJvuiUCXpyrmUv38agASVLa0=', 'business-assert/profile/45250706ca056cbde29fd04f9b989bf5.png', '2022-05-30 12:14:25', 1),
(54, 'Hotel IRIS', 'IRIS ARCADE, NEAR COURT BUILDING, DHARAMPUR-VALSAD ROAD, Dharampur, Gujarat 396050', 42, 'irisdharampur55@gmail.com', '9586933355', 'hotel-iris.business.site', 1, '12:00am To 12:00pm', 'Druv', 'monday,tuesday,wedenesday,thursday,friday,saturday,sunday', '2017', 'Best place', 'Located in Dharampur, Hotel Iris offers 3-star accommodations with a terrace. This 3-star hotel offers a 24-hour front desk, room service and free WiFi. Guests can have a drink at the snack bar.\r\n\r\nAt the hotel, rooms come with a closet. The private bathroom is equipped with a shower, slippers and free toiletries. At Hotel Iris, all rooms have a flat-screen TV with satellite channels.\r\n\r\nDaman is 35.4 km from the accommodation, while Vapi is 32.2 km away. The nearest airport is Surat Airport, 98.2 km from Hotel Iris.\r\n\r\nHotel Iris has been welcoming Booking.com guests since Nov 17, 2017', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.139305057159!2d73.16053553488769!3d20.5414804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0b94cac81997b%3A0x3e133237d68330f6!2sHotel%20IRIS!5e0!3m2!1sen!2sin!4v1653923624478!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'd6c48023892962a6f4f70fa0ccd66878aa304b97f7112afae3de66d4e902aa70de980bff9a18e19829a8cd9cd3042a9cdbe7246bec8e263131b01312a582f7a8Vb+vvl+Lv9SbrEaBo7eXY5X/iwFBw/3aJtjvkKx0x/g=', 'business-assert/profile/b443bc8dc1650600b3ad5c8df6525b5a.png', '2022-05-30 08:45:51', 1),
(55, 'Daudi General Store', 'Mota Bazaar Rd, Near Tower, Dharampur, Gujarat 396050', 42, 'daudistore44@gmail.com', '2633242376', 'daudi-general-store.business.site', 2, '09:00am To 09:00pm', 'Asan', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2004', 'Goods', 'Daudi General Store in Valsad is one of the leading businesses in the General Stores. Also known for General Stores, Grocery Stores and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Daudi General Store, Valsad.\r\n\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7472.568846700274!2d73.1653635697754!3d20.535540399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0b9516db8148f%3A0x4cb9b7126df04db!2sDaudi%20General%20Store!5e0!3m2!1sen!2sin!4v1653932997259!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '46ad88ab3acb1bf6ff497f6401cdc7fbb684602d32cda68923d1776957a57cb0a310e545334d5d0e003240442a1199587698959218b209fb0bb16f83e22ae5da7Ab7/M/OVvwvSKvVi7l/ZqdfYW3qHdZLHzwolsGaqfY=', 'business-assert/profile/c884fab2d232083bef901c430eda302d.png', '2022-05-30 11:21:26', 1),
(56, 'Pallav', 'Jail Road, Dis, opp. Forest Office, Dharampur, Gujarat 396050', 42, 'pallav.cake247@gmail.com', '9427153500', 'www.monginis.net', 2, '08:00am To 09:00pm', 'pallavi ', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2010', 'fresh birthday cake', 'Monginis Cake Shop in Valsad is one of the leading businesses in the Monginis. Also known for Departmental Stores, Cake Shops, Bakeries, General Stores, Grocery Stores, Ice Cream Parlours, Provision Stores, Namkeen Retailers and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Monginis Cake Shop, Valsad.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14944.926191096265!2d73.15545083955077!3d20.53770490000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0b97e8965c0a9%3A0xaffcb8e2007e6f99!2sPallav!5e0!3m2!1sen!2sin!4v1653933837325!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'ba34b9b5bc5351b4f0b1a83e4b0fd83aa2cec1a62b3e79c7e265b397f775d6cea4e1847ee08c93899040cef0520df2e02f107a4b47636e739d98864b7d17d813SFMByLLre6nrqs3iqM3MbzEWN9YPVLvTRy6N/ZETgVI=', 'business-assert/profile/8ac13f6c3b1afb615462c7de39b88e95.png', '2022-05-30 11:40:38', 1),
(57, 'Jay Joganiya Sweet', 'Shop no -8, opp. bus stand, Dharampur, Gujarat 396050', 42, 'joganiyasweet.dharampur@gmail.com', '9699341490', '', 2, '07:30am To 09:30pm', 'Rajat', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2015', 'Sweet Shop ,Bakery ,Cake Shops ', 'Jay Joganiya Sweet & Farsan Mart in Valsad. Farsan Shops with Address, Contact Number, Photos, Maps. View Jay Joganiya Sweet & Farsan Mart, Valsad', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.234075215064!2d73.16596402179601!3d20.537601442339586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0b94df5609711%3A0xc9016126718a06fd!2sJay%20Joganiya%20Sweet!5e0!3m2!1sen!2sin!4v1653934857666!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '1bc3b9d53bec4ab62e444363120e0717b166e6e572fa17a42acdb64d33bb24a45e8e670541a7f32e3807071840ef0f4478a36560f65dff9b6710ba9b4df7cf25U3B4f6JSmLDNgN3fo8wFUbSVeGN61pnFixO6d3FeCGQ=', 'business-assert/profile/7bc9628ccbeaa70caa92074e4f5543b4.png', '2022-05-30 11:54:00', 1),
(58, 'YS Enterprise', '8, Poonampark, Ajitnagar, near Jain Temple, Chala, Vapi, Gujarat 396191', 37, 'enterprise.ys.support247@gmail.com', '8848968625', '', 6, '12:00am To 12:00pm', 'KIshan', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2015', 'work', 'YS Enterprise - Exporter of sublimation paper roll, polyester strapping pet strap & other products since 2019 in Vapi, Gujarat.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239356.03394355802!2d72.6402982328125!3d20.3854448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cf56a25988e7%3A0x3c45cd93ad9753ed!2sYS%20Enterprise!5e0!3m2!1sen!2sin!4v1653937322436!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'd701a6de649a966b1262af1e8070acbcf33d70a8cfcc818e387fc42d95ae66bfc80789580d1fb2fd75fd043d32d72f369a52c525d6851d196989a5cfb188db8c81mReIM/6R70IPHLD+lY/4DfTt5JVE5/Nkz/1uwkock=', 'business-assert/profile/69ba83e6421e330d24ffcc3eca283073.png', '2022-05-31 12:33:16', 1),
(60, 'Slr Organic Farm', 'H535+VWP, APMC Market, Opp Vanraj Collage, Khergam Road, Bamti, DHARAMPUR, Dharampur, Gujarat 396050', 42, 'slrorganic.work@gmail.com', '07947307783', '', 11, '10:00am To 08:00pm', 'Vikash', 'monday,tuesday,wedenesday,thursday,friday,saturday', '2021', 'Fresh or organic', 'Slr Organic Farm in Gujarat is one of the leading businesses in the Vegetable Wholesalers. Also known for Vegetable Wholesalers, Onion Wholesalers, Vegetable Vendors, Fruit Wholesalers, Coconut Merchants, Coconut Wholesalers, Fruit Vendors, Garlic Wholesalers and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Slr Organic Farm', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14943.264054498635!2d73.14231153955075!3d20.55470750000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0bf38116f8eed%3A0x23c64dd75fe7aaa1!2sVIKAS%20FRUIT%20SUPPLIERS%20Ramkumar%20Yadav%20%26%20Vikas%20Yadav!5e0!3m2!1sen!2sin!4v1654075576263!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'daed02d7debf03a4b0d5949608aba1709bfaef4a9c804841225c7950167b8b9f3023c948e68ef1139f5528cb881cdbc7e945072440ea569a43fe8fd9cfb999aar8Y5zRyoB421mPLUNUb+g+TWxJSXbST9Wlu6uYHLBwA=', 'business-assert/profile/61b3485f48b83e4c7140216e5cd6664a.png', '2022-06-01 03:03:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `name`, `path`) VALUES
(1, 'Hotel and Resorts', 'assert/category/a150c9f62e474166f9dbdd223bd5dfa0.png'),
(2, 'Stores', 'assert/category/cc04e3fa56ad5f5ff9c88e1df21ee973.png'),
(3, 'Education', 'assert/category/5e008e367565c718204b97b89b644fcd.png'),
(4, 'Electronics', 'assert/category/2e5abe9532f56462dc09d9ed1b0bf930.png'),
(5, 'Vehicle Rental', 'assert/category/37c33a685c799c1c04167b0faf839abf.png'),
(6, 'Import Export ', 'assert/category/962cfe51518095c89122447f7d518535.png'),
(7, 'Software Solutions', 'assert/category/c7336cc506bc882e09e176fab9ac608e.png'),
(8, 'Agriculture', 'assert/category/d4245451b9f2a7141d3382960324276e.png'),
(9, 'Water Suppliers', 'assert/category/38acc0455bb1e01ec8ac808c6ca73f60.png'),
(10, 'Labour', 'assert/category/6046aaa288676b8c7173916fbcb33884.png'),
(11, 'Vegetable Supplier ', 'assert/category/24d00c442ceb7e31c50e467bc0c9019e.png'),
(12, 'Hospital', 'assert/category/bf28da1fabdfbe513113556aa106e7cd.png'),
(13, 'Mechanics ', 'assert/category/f02ff4da8af4f190a443104303c6f2b5.png'),
(14, 'Cold Storage', 'assert/category/43e3dc5687e3525a67e178ccea770d34.png'),
(15, 'Mango suppliers', 'assert/category/99758d417dff8f0cb170df8d1c2e7394.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `contact_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`contact_id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(1, 'Ravi Patel', 'Ravi.253.patel@gmail.com', '9875236583', 'How I list business ', 'Help to expand business'),
(2, 'Saurav', 'Saurav.dharampur.25@gamil.com', '7569368896', 'I have business', 'I have clothes business in your site no pool for list clothes business'),
(3, 'Amar', 'amar.rental.car@gamil.com', '9825365236', 'Car business', 'How I grow my business'),
(6, 'Shiv Gole', 'Shiv.business247@gmail.com', '8833565665', 'Mango business', 'How I List my business, and how much I pay for It.'),
(7, 'karan', 'support.water.44@gamil.com', '8869345635', 'Water supplier', 'How its work to grow business'),
(8, 'shiavm patel', 'auto.shiavm.patel@gmail.com', '9904965868', 'Automobile business', 'I have to many business hard to mange help me');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_subscriber`
--

CREATE TABLE `tbl_email_subscriber` (
  `subscriber_id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_subscriber`
--

INSERT INTO `tbl_email_subscriber` (`subscriber_id`, `email`) VALUES
(1, 'sahildobariya29@gmail.com'),
(2, 'shivam247patel@gmail.com'),
(3, 'acharyaarvindbhai111@gmail.com'),
(4, 'Dy69542@gmail.com'),
(5, 'Patelrohin02@gmail.com'),
(6, 'shivamrajbahaduryadav@gmail.com'),
(7, 'Kuldeeppatel5041@gmail.com'),
(8, 'jeetdonga297@gmail.com'),
(9, 'saurav.work247@gmail.com'),
(10, 'jagdish5586@gmail.com'),
(11, 'ravi858atel@gmail.com'),
(12, 'boot.s.r.1518@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `name`, `message`) VALUES
(1, 'P P ELECTRICALS', 'this will really help me'),
(2, 'VARSHRAJ EXPORTS PVT LTD', 'Thanks for making business better '),
(3, 'Yadav Fruit supplier', 'Thank you for making business easy!!!!'),
(4, 'Adarsh Fruit supplier', 'Its really work to grow my business, I have book order from out of my city.... '),
(5, 'Octa Core Technologies', 'I have collect to many order to making website'),
(6, 'Logon Computers', 'Thank You Cubics, it will help grow my business '),
(7, 'Shree Swaminarayan School', 'Its helps to increase admission this year'),
(8, 'Hotel Ashoka', 'Good platform to increase business'),
(9, 'shiv', 'Thank You for giving me this platform........'),
(10, 'Jenish', 'Thank you for connect us '),
(11, 'jeet ', 'Good work Cubics It will help to grow business .......');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_follow`
--

CREATE TABLE `tbl_follow` (
  `follow_id` int(5) NOT NULL,
  `business_id` int(5) NOT NULL,
  `register_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_follow`
--

INSERT INTO `tbl_follow` (`follow_id`, `business_id`, `register_id`) VALUES
(1, 44, 8),
(2, 56, 8),
(3, 40, 8),
(4, 41, 2),
(5, 4, 3),
(6, 43, 3),
(7, 44, 6),
(8, 13, 6),
(9, 26, 4),
(10, 39, 4),
(11, 42, 2),
(12, 16, 5),
(13, 42, 5),
(14, 35, 8),
(15, 44, 7),
(16, 5, 5),
(17, 33, 4),
(18, 33, 3),
(19, 13, 4),
(20, 13, 8),
(21, 15, 3),
(22, 55, 4),
(23, 40, 6),
(24, 39, 5),
(25, 44, 5),
(26, 44, 3),
(27, 18, 3),
(28, 17, 2),
(29, 40, 2),
(30, 41, 8),
(31, 21, 2),
(32, 33, 2),
(33, 9, 2),
(34, 52, 2),
(35, 41, 7),
(36, 4, 7),
(37, 5, 6),
(38, 5, 7),
(39, 5, 9),
(40, 5, 4),
(41, 44, 4),
(42, 5, 2),
(44, 44, 9),
(45, 47, 4),
(46, 47, 3),
(47, 47, 2),
(48, 47, 9),
(49, 47, 5),
(50, 47, 6),
(53, 8, 5),
(54, 8, 4),
(55, 8, 2),
(56, 8, 3),
(57, 8, 6),
(58, 8, 7),
(59, 8, 8),
(60, 44, 2),
(61, 58, 4),
(62, 60, 2),
(63, 60, 4),
(64, 58, 6),
(65, 60, 5),
(66, 60, 7),
(67, 60, 8),
(68, 57, 4),
(69, 57, 5),
(70, 57, 8),
(71, 53, 2),
(72, 53, 6),
(73, 53, 5),
(74, 53, 4),
(75, 53, 8),
(76, 57, 7),
(77, 56, 7),
(78, 56, 2),
(79, 56, 4),
(80, 58, 5),
(81, 60, 6),
(82, 58, 2),
(83, 58, 8),
(84, 56, 5),
(85, 55, 2),
(86, 55, 6),
(87, 50, 8),
(88, 51, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallary`
--

CREATE TABLE `tbl_gallary` (
  `gallary_id` int(5) NOT NULL,
  `path` varchar(500) NOT NULL,
  `business_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallary`
--

INSERT INTO `tbl_gallary` (`gallary_id`, `path`, `business_id`) VALUES
(1, 'business-assert/gallary/8cd6dd2e05aebba674fe6dcffcbf8edc.png', 2),
(2, 'business-assert/gallary/f8e2527dd5325e170d19736cb14e36a5.png', 1),
(3, 'business-assert/gallary/f5c3aecf082fdc652e4b2fb90544904b.png', 1),
(4, 'business-assert/gallary/7b521c4d34ec03770fc163f6cd229f50.png', 1),
(5, 'business-assert/gallary/fe3e80da5428b8d8a627bcb512450cb3.png', 1),
(7, 'business-assert/gallary/b5b66de1fa9f7f56d5f450c2a1ef7065.png', 3),
(9, 'business-assert/gallary/7275d45809d5ca558c83c936fe2187f7.png', 3),
(10, 'business-assert/gallary/ff9d52f40a81d1bf5e976232e0973649.png', 3),
(12, 'business-assert/gallary/6ead51869aec1efb6fe2eebef00d151d.png', 4),
(21, 'business-assert/gallary/8eb4bde17cf27d3e6daeb139d2724ebd.png', 6),
(23, 'business-assert/gallary/e646851c94c36557a27acf1d604c255a.png', 7),
(25, 'business-assert/gallary/c7731cfa31c52c27e8cf2160c83f179c.png', 8),
(26, 'business-assert/gallary/999980937dbf9512c29844cedf294231.png', 8),
(27, 'business-assert/gallary/91904f5b0c45b5aad801554ffdaa1d55.png', 8),
(28, 'business-assert/gallary/f659b5546b80e89519c3244d5cb748f4.png', 9),
(30, 'business-assert/gallary/162b555cf53c1a4943f6f5a717c11a03.png', 10),
(31, 'business-assert/gallary/2fd43fc747581c0a3e0d323b179b5512.png', 12),
(34, 'business-assert/gallary/f17a375b15c5139758a59bae555fd09e.png', 13),
(56, 'business-assert/gallary/e5d6b15a09dc71bf1b622de50002a08f.png', 48),
(57, 'business-assert/gallary/1b2e02f59cb159167987fa783165976a.png', 48),
(58, 'business-assert/gallary/2af7366095c9653e1f67f044d5821307.png', 48),
(59, 'business-assert/gallary/0967469bc015fcde08374d2ae2143d05.png', 48),
(60, 'business-assert/gallary/c0ea6eba93263723a1933eaadc129ddc.png', 48),
(61, 'business-assert/gallary/d88b84fc7be92154c05728ca2adc2b46.png', 49),
(62, 'business-assert/gallary/699b1ec8488b45ce896acd2e944bb9b7.png', 49),
(63, 'business-assert/gallary/77160f505df7e34a5ae4c64b3f1a631f.png', 49),
(64, 'business-assert/gallary/3a60712a33f8b51d761ff0fe8c013ef1.png', 50),
(65, 'business-assert/gallary/726e988890b8a3bbc0c86ba21707a903.png', 50),
(66, 'business-assert/gallary/1ec3afdaf2c0737223827378c0aa7e22.png', 50),
(67, 'business-assert/gallary/dc0f26a30cc96f800eb21bf84fa51b76.png', 50),
(68, 'business-assert/gallary/0585e73ca4f0bf8323c08f72037c1fa3.png', 51),
(69, 'business-assert/gallary/c1a4cec0518848cc51eee3173240584e.png', 51),
(70, 'business-assert/gallary/5cbc29706ce3c14c86e52659844b679c.png', 51),
(71, 'business-assert/gallary/c2ecd3c32bb16dcf72dfacc477475173.png', 51),
(72, 'business-assert/gallary/57098445c43303b6d163d3e93b2b7748.png', 44),
(73, 'business-assert/gallary/12dce7715a2ee4c5f76c623da8b53ad2.png', 44),
(74, 'business-assert/gallary/07cb6b4e0826a4933aab166b2a05bbe4.png', 44),
(75, 'business-assert/gallary/52b9eb073aa20ee3b283815e76b5b01e.png', 44),
(76, 'business-assert/gallary/1460f082075388ab382cf9eeb4b991eb.png', 44),
(77, 'business-assert/gallary/17a648a62a32ae0020f56fa314a6bee5.png', 45),
(78, 'business-assert/gallary/9ecb55b46a6a0949d0f80637b705dca7.png', 45),
(79, 'business-assert/gallary/a31afc9f3f57dc9347ee9a0edaea759a.png', 45),
(80, 'business-assert/gallary/7386d72bbdeb1fa40031c501b5803a4c.png', 45),
(81, 'business-assert/gallary/d6c80829b9051c0cefae26915beb3875.png', 45),
(82, 'business-assert/gallary/dfd4652fe3bca583d2a8f693c845593b.png', 45),
(83, 'business-assert/gallary/37cf195d42b78abd15c8994bd1ba6db8.png', 45),
(84, 'business-assert/gallary/c479640e6438e9305012b8479ca0895d.png', 45),
(85, 'business-assert/gallary/f0bb310463ef1f5a8436fd53b0cd051b.png', 46),
(86, 'business-assert/gallary/4167b6b53302c024d3897cd07906ad50.png', 46),
(87, 'business-assert/gallary/ae698bfdf2fb471ecb56a92cc8e8a678.png', 46),
(88, 'business-assert/gallary/de18a06d3359102e785148297912a698.png', 46),
(89, 'business-assert/gallary/90659591791fe28fdb548597b16f6881.png', 46),
(90, 'business-assert/gallary/8d5903f53f6c5c6ca4867c9b0793e3d4.png', 46),
(91, 'business-assert/gallary/1f7cbdc1644434494a270cd84ae92999.png', 46),
(92, 'business-assert/gallary/d978f0baab81904257f20d8a40265671.png', 46),
(93, 'business-assert/gallary/dcc592eb1ee9efeaef8245e264857d2c.png', 47),
(94, 'business-assert/gallary/c08fd174cd7f2a3eb38906a41f0fa080.png', 47),
(95, 'business-assert/gallary/afb8d8d5f7a79d5a42650d0f0f2ac90d.png', 47),
(96, 'business-assert/gallary/8941837bd948255452d275c912db3b8b.png', 47),
(97, 'business-assert/gallary/d198cafd8998d31f2bee89dd39cd55e8.png', 47),
(98, 'business-assert/gallary/21d67dd68bf8ff3c6b7ce69522321f89.png', 37),
(99, 'business-assert/gallary/b803a606c7b39ff0ccae3566116b16d8.png', 37),
(100, 'business-assert/gallary/b22d07a357abe308173c5aa6502f99a0.png', 37),
(101, 'business-assert/gallary/c673ef0f6567385f480ae7cbf6d018a3.png', 37),
(102, 'business-assert/gallary/f630202ae7ef85e8934c562dd3db7162.png', 37),
(103, 'business-assert/gallary/174e87869c9f363b83b682c83cbd8779.png', 14),
(104, 'business-assert/gallary/164a059a2aafb726e33469e51b41969a.png', 14),
(105, 'business-assert/gallary/fe0d063eb1b30bcb45217c668969cded.png', 14),
(106, 'business-assert/gallary/a3ba2e339706dba9ccf486526d9cb344.png', 14),
(107, 'business-assert/gallary/d16cdf0b1290d4f6f195547f90dfb362.png', 14),
(108, 'business-assert/gallary/f8355ad11233684c8aa2fc0db3ac33e7.png', 14),
(109, 'business-assert/gallary/93f4116e4d8e35be53f80aeb95939f27.png', 15),
(110, 'business-assert/gallary/4d0d92d12ae13f9e09dc354727c17c5b.png', 15),
(111, 'business-assert/gallary/b1a11a2fc027d13fc003a068c5ce5497.png', 15),
(112, 'business-assert/gallary/da04b6451a2929ff17a34cd92998f21e.png', 15),
(113, 'business-assert/gallary/c05661f39db07ef56b048d5b63349755.png', 16),
(114, 'business-assert/gallary/70ad16b0a7ea5752d7a8d067696741ad.png', 16),
(115, 'business-assert/gallary/035a76176256032b656fb9c71433b6df.png', 16),
(116, 'business-assert/gallary/f2298dca3d47c3aec740d0bc3618586a.png', 17),
(117, 'business-assert/gallary/666d6934aed8c0c43f66f2b3601e277c.png', 17),
(118, 'business-assert/gallary/f4afc21046571642c53ed63236511bd8.png', 17),
(119, 'business-assert/gallary/27cf961a49741dff3cc59c86ca8ff0f2.png', 18),
(120, 'business-assert/gallary/93a97c2d3ee65ba849d63abcfe38af1b.png', 18),
(121, 'business-assert/gallary/ffc43f4518a64dfd9b9a7eb719a39b35.png', 18),
(122, 'business-assert/gallary/a3d393c6e4844593a7a1852986727fc4.png', 18),
(123, 'business-assert/gallary/0064a6a2eb0b7d1da817612288c59042.png', 19),
(124, 'business-assert/gallary/c0080b63bfd1447e9b1c260742b5efb7.png', 19),
(125, 'business-assert/gallary/3db740380e7df42e3f8c7a1f099c9ccf.png', 19),
(126, 'business-assert/gallary/13d69002e93dc29c7601f367e2ead1bb.png', 19),
(127, 'business-assert/gallary/aa1d983119ac4bf1d313b08f9f0743c4.png', 19),
(128, 'business-assert/gallary/1be472e3222313176f3a7f7e8107051e.png', 19),
(129, 'business-assert/gallary/41925a69c9e99e0febf68cf00232c5f3.png', 20),
(130, 'business-assert/gallary/0fe1041dbb1b72f9e20071b65c16ca2b.png', 20),
(131, 'business-assert/gallary/a3e0ac19ead02b54d8842e7ac2eb787c.png', 20),
(132, 'business-assert/gallary/dab74472ef6614ed917e5bb75c3ad11e.png', 20),
(133, 'business-assert/gallary/600b276365316ceb281fa7b92cd9a306.png', 30),
(134, 'business-assert/gallary/4820a913c715a21a1ae8edcfa1d0e4aa.png', 30),
(135, 'business-assert/gallary/4aba8b3164d7285a636faaaa91fec3b6.png', 30),
(136, 'business-assert/gallary/0c8662fd9e5ed22f1522a5c7484b667c.png', 30),
(137, 'business-assert/gallary/f8c9d259c1a3d84df6ac2dd68c7e2879.png', 30),
(138, 'business-assert/gallary/36ffa741b086eeb19e4f2b4a3ad46c7a.png', 21),
(139, 'business-assert/gallary/322998943d8e6f1fc76ad2455a96ff72.png', 21),
(140, 'business-assert/gallary/fdf15fac6b233283be4ed2b4f9e55286.png', 21),
(141, 'business-assert/gallary/1f5feda27581a69397740537c8f3b4ca.png', 22),
(142, 'business-assert/gallary/df0feede47936ec6e13495b5b9a4458b.png', 22),
(143, 'business-assert/gallary/bcf5a6702ef07982a5586560bbc1d71e.png', 23),
(144, 'business-assert/gallary/201225f3c2f20c041ba3266fe572e6e9.png', 23),
(145, 'business-assert/gallary/ecb423e5cf9f02a414ed6524ed57fe05.png', 24),
(146, 'business-assert/gallary/0e08b9d589908d92877442c526ed6a17.png', 24),
(147, 'business-assert/gallary/81ac9c29433580e085b757f283b00f33.png', 25),
(148, 'business-assert/gallary/84897f319ea83b6dbae94956d93f33ce.png', 25),
(149, 'business-assert/gallary/cc8bd3ed60707d006fc2f362200852e1.png', 25),
(150, 'business-assert/gallary/a3d395de5eb678f457c4050bf6f40b6b.png', 53),
(151, 'business-assert/gallary/2809cd86f9f4bd03823f7bcc6dde97c5.png', 52),
(152, 'business-assert/gallary/34ef7ee4db3e600ffb8f71a0ad017552.png', 52),
(157, 'business-assert/gallary/18ba90123a317f3cee67022fe14687c0.png', 4),
(158, 'business-assert/gallary/20275c2e2679c92854f4eca21dd439fa.png', 4),
(159, 'business-assert/gallary/217c9825b8a0947895bce114b4924e66.png', 4),
(160, 'business-assert/gallary/acc2e9ae6962018c551eedf6b3c15a33.png', 4),
(161, 'business-assert/gallary/c9652e0aca1e89945a40f94c6954b036.png', 4),
(162, 'business-assert/gallary/46cca630a5026c7979e92f50b8989a53.png', 4),
(163, 'business-assert/gallary/1c720057dd85cc21e0aec1b4fb9144a2.png', 4),
(164, 'business-assert/gallary/c458a4ab1fac09c54fe710b26bec37c0.png', 4),
(165, 'business-assert/gallary/087b1c88fd6e4b5b66ab0e9ca8ab3ea1.png', 54),
(166, 'business-assert/gallary/f643d7d1529201bbef6a4ec7d82b1859.png', 54),
(167, 'business-assert/gallary/0dffade3b9591c943be0606d2b3313ee.png', 54),
(168, 'business-assert/gallary/c2a275b3af3617bae149c53cfadb037f.png', 54),
(169, 'business-assert/gallary/6005dd4467133a7da851b868bc59e416.png', 54),
(170, 'business-assert/gallary/00f75f77d0ce99ab0ad10594fe06529b.png', 54),
(171, 'business-assert/gallary/7e48a49d6d6c3805ffff16abd1a74a8e.png', 54),
(172, 'business-assert/gallary/cb185e48e8d4719360a87a728f497504.png', 8),
(173, 'business-assert/gallary/744b6048055c96b168741fe17b2a17e0.png', 8),
(174, 'business-assert/gallary/b9aff131ebf6558d191ac0a4b4354de6.png', 8),
(175, 'business-assert/gallary/3a3c9fa44f67b455557a68e8eefc1de8.png', 8),
(176, 'business-assert/gallary/90ff997c37acd7883b007326f9dab0e4.png', 7),
(177, 'business-assert/gallary/91352453d46091f76f6752e5e7555b76.png', 7),
(178, 'business-assert/gallary/c0f044d0e374e254066a0fc4ef1af316.png', 7),
(179, 'business-assert/gallary/f9b8b7d4d5ad541a1bd8f0bb2c0986b3.png', 7),
(180, 'business-assert/gallary/7b7ab8b6466879968b916a05e4677f04.png', 7),
(181, 'business-assert/gallary/7f803102fe8d10daab40462ddb1a2d28.png', 7),
(182, 'business-assert/gallary/ad95594ac1c4f6871aeec96c35b02712.png', 7),
(183, 'business-assert/gallary/5fd406b4d98c570ec32074bbf996f978.png', 6),
(184, 'business-assert/gallary/fe7be9f45031c4c7e2a26ef274b128d4.png', 6),
(185, 'business-assert/gallary/4ac5f08b1130771def877ff0fa85e14b.png', 6),
(186, 'business-assert/gallary/41488e2af75af5b79a0e312cc6caac78.png', 6),
(187, 'business-assert/gallary/96020b85a30a9123e10877d8eae6ddd4.png', 6),
(188, 'business-assert/gallary/1b0d020a346ee193bd79b053b91f8778.png', 6),
(189, 'business-assert/gallary/c1d624b45b803bc9309ef17dbcad4e9e.png', 6),
(190, 'business-assert/gallary/3c84c0c0186ec8a0354648b44bad9177.png', 5),
(191, 'business-assert/gallary/bd21c3f7b8639d9be6302ad2de70d8b1.png', 5),
(192, 'business-assert/gallary/48bd3edc7c5af0a2245e7239046f84b6.png', 5),
(193, 'business-assert/gallary/37bf73cd210cc795286c260e3f13ede2.png', 5),
(194, 'business-assert/gallary/a2591b69c278db55bceee442ce8a5942.png', 5),
(195, 'business-assert/gallary/594121f22e35c7e9ce06a1a39888a091.png', 5),
(196, 'business-assert/gallary/cf757aa79c7ffd56832954f26cb947c0.png', 5),
(197, 'business-assert/gallary/7a7bb62a7394951f47703266e1faa3f3.png', 5),
(198, 'business-assert/gallary/339f186c34bad01e791696f919dc84ab.png', 5),
(199, 'business-assert/gallary/71f2d879bb55a45ad8f2c938d7c9490d.png', 13),
(200, 'business-assert/gallary/97394d0495ec9179a7c7a2a18cc8007b.png', 13),
(201, 'business-assert/gallary/02b2d2baed27576478721751998bbdd9.png', 13),
(202, 'business-assert/gallary/58521aa3036f009b77f29e5a7b8e4636.png', 13),
(203, 'business-assert/gallary/902b8e3ee86bd560a11397875d43910b.png', 13),
(204, 'business-assert/gallary/783dc0ea4478d7b1082c13160852c700.png', 55),
(205, 'business-assert/gallary/669fb6de96d95cf1c2f2db1dabc78c9c.png', 55),
(206, 'business-assert/gallary/f9ab3e8aec746c943fd303cfc6dca680.png', 55),
(207, 'business-assert/gallary/feccdec8df8854174b66beeb49bef8d6.png', 56),
(208, 'business-assert/gallary/3c5ff53ebc4cb2bae9063f5f13044c67.png', 56),
(209, 'business-assert/gallary/24c520ab32c2157db4969787a555193c.png', 56),
(210, 'business-assert/gallary/94761ae924801bd43cf24cf594006a9f.png', 56),
(211, 'business-assert/gallary/5d3d35ac3a608872cad0f14a904cc241.png', 56),
(212, 'business-assert/gallary/dd89d3b7a7bebe0cef5dc88122763bfb.png', 56),
(213, 'business-assert/gallary/3beff7395367ef72b292ac1018505f27.png', 56),
(214, 'business-assert/gallary/a0decfea593aec1aa686c8c128f7d1c1.png', 57),
(215, 'business-assert/gallary/bab93aeed38d063d4397532a314d0aa1.png', 57),
(216, 'business-assert/gallary/e24b412538fc4065531c40f78f46888e.png', 57),
(217, 'business-assert/gallary/d9a11019bed4a7842330b0650fb52ff1.png', 57),
(218, 'business-assert/gallary/9fb07225c53f9eb83c7f731aea2dd3a4.png', 57),
(219, 'business-assert/gallary/56b67dccbf8cb4ed399fc136f770e672.png', 57),
(220, 'business-assert/gallary/57a9c8f998df56f4195c2067c56f1923.png', 57),
(221, 'business-assert/gallary/f8036a1036609a551f2b26d48b90c0d9.png', 58),
(222, 'business-assert/gallary/5cacbe3ceb7dea53018deca8cb299dc3.png', 26),
(223, 'business-assert/gallary/af0f3884637f0511bb81d7063fd0f97c.png', 26),
(224, 'business-assert/gallary/8b2d17a22d481db24d029793dc37551c.png', 9),
(225, 'business-assert/gallary/b22b702848478e9e6ce73abc7d4d5229.png', 9),
(226, 'business-assert/gallary/29df2973748ca7101bed8b9d391cfe38.png', 38),
(227, 'business-assert/gallary/1051a17cb051c4fa6b8cbc5259f9cc99.png', 38),
(228, 'business-assert/gallary/333321bbee292bbec640285a70b65a95.png', 38),
(229, 'business-assert/gallary/ad13586aaca482c2716e1d6d9545a15a.png', 59),
(230, 'business-assert/gallary/76a5cd62dd56276b4d080aa8504145b3.png', 59),
(231, 'business-assert/gallary/fae900d70999beaf588018180e739750.png', 59),
(232, 'business-assert/gallary/d87d94750767f72a21c68d27dbb45ee3.png', 59),
(233, 'business-assert/gallary/c99b2312ebabfa487fade4e8986c6b89.png', 32),
(234, 'business-assert/gallary/7af17b98a60b5811799c12180870ec52.png', 32),
(235, 'business-assert/gallary/13413beb27a4bd2f2896fba319e67f75.png', 32),
(236, 'business-assert/gallary/2736a06a57bd9c5eff1fb11195a133c5.png', 33),
(237, 'business-assert/gallary/1f80681add61352584bfde192b15dfeb.png', 33),
(238, 'business-assert/gallary/7123f87e64df07d3a057175541db1d84.png', 33),
(239, 'business-assert/gallary/17bce20b229b89ef8bc802e60a59e51c.png', 41),
(240, 'business-assert/gallary/1f2072f817b81ec2af04c14190548331.png', 41),
(241, 'business-assert/gallary/8b3b23d59dbb70c2f21d34c3abedf57b.png', 41),
(242, 'business-assert/gallary/047537668b439b09151796cd15593e2b.png', 41),
(243, 'business-assert/gallary/f5d642128f0beb38393df2ea233432ba.png', 39),
(244, 'business-assert/gallary/0ac28ad945a2d92e217aa4d0ce36cff4.png', 39),
(245, 'business-assert/gallary/a6ead40d52ca4f5b636da18098cadb38.png', 39),
(246, 'business-assert/gallary/e513325964edf78f10ecc937aa28c6cf.png', 39),
(247, 'business-assert/gallary/6c76213b9955aec59302e5f4b7a18d49.png', 40),
(248, 'business-assert/gallary/5783292d0e4c2d2634762ae190820c6e.png', 40),
(249, 'business-assert/gallary/372a9ff6c0981ca26b0e376ecb7a0a76.png', 40),
(250, 'business-assert/gallary/1efb6d6528226d8345886e02168a04f8.png', 40),
(251, 'business-assert/gallary/bc2eb7f39c3aec343b8f1e9766439301.png', 42),
(252, 'business-assert/gallary/1f33e01d602795cbc216a8a429b45b67.png', 42),
(253, 'business-assert/gallary/9c5a804f7265529eafb403eae2798dc5.png', 42),
(254, 'business-assert/gallary/1408b8726152024179645084cda91fba.png', 43),
(255, 'business-assert/gallary/4e7cc15a0beb5e3c1753e4b999e85bd0.png', 43),
(256, 'business-assert/gallary/098c4c508bbe05813cf087f9f9c0b0a0.png', 43),
(257, 'business-assert/gallary/fef994b8522dc622699da4afb05471b7.png', 43),
(258, 'business-assert/gallary/a97300e1af08649659677d8038747329.png', 60),
(259, 'business-assert/gallary/424b30a917d18d72b2934b68b423c511.png', 60),
(260, 'business-assert/gallary/3f23ac6fe60b7eae0cb40d92befc30a6.png', 60),
(261, 'business-assert/gallary/c8ae50941c5154a77f841dc6e6184e22.png', 60),
(262, 'business-assert/gallary/82e6744c94e5bf7c28f5cc3a6b43416a.png', 60),
(263, 'business-assert/gallary/8d8b7e3ff971965d0334599be1054154.png', 60);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry`
--

CREATE TABLE `tbl_inquiry` (
  `inquiry_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `business_id` int(5) NOT NULL,
  `register_id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inquiry`
--

INSERT INTO `tbl_inquiry` (`inquiry_id`, `name`, `email`, `business_id`, `register_id`, `title`, `message`) VALUES
(1, 'Arvind', 'acharyaarvindbhai111@gamil.com', 15, 3, 'Admission', '10 & 12 Fees structure'),
(2, 'Arvind', 'acharyaarvindbhai111@gamil.com', 4, 3, 'Price', 'How many rooms are available right now'),
(3, 'Arvind', 'acharyaarvindbhai111@gamil.com', 44, 3, 'Delivery', 'Home Delivery Timing'),
(4, 'Arvind', 'acharyaarvindbhai111@gamil.com', 18, 3, 'work', 'Wiring fitting charge'),
(5, 'Jenish', 'jenishvekariya00@gmail.com', 17, 2, 'cost', 'cost of 200meter copper wire'),
(6, 'jenish', 'jenishvekariya00@gmail.com', 40, 2, 'price', 'kesher mango price 20kg'),
(7, 'shiavm', 'shivamrajbahaduryadav@gamil.com', 39, 5, 'Price', 'kesar mango price 250kg '),
(8, 'Sahil', 'sahildobariya29@gmail.com', 41, 8, 'Price', 'keser mango price 1000kg'),
(9, 'Jenish', 'jenishvekariya00@gmail.com', 21, 2, 'Car', 'How much charge for one day trip'),
(10, 'Jenish', 'jenishvekariya00@gmail.com', 33, 2, 'Application', 'I need one Erp System?'),
(11, 'Jenish', 'jenishvekariya00@gmail.com', 9, 2, 'Water Tanker', 'I need 5000L water Tanker');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `location_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent_id` int(5) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`location_id`, `name`, `parent_id`, `label`) VALUES
(2, 'Gujarat', 0, 'state'),
(10, 'surat', 2, 'city'),
(13, 'Ahmedabad', 2, 'city'),
(36, 'Valsad', 2, 'city'),
(37, 'Vapi', 2, 'city'),
(42, 'Dharampur', 2, 'city');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recent_view`
--

CREATE TABLE `tbl_recent_view` (
  `view_id` int(5) NOT NULL,
  `register_id` int(5) NOT NULL,
  `business_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recent_view`
--

INSERT INTO `tbl_recent_view` (`view_id`, `register_id`, `business_id`) VALUES
(1, 8, 4),
(2, 3, 44),
(3, 6, 27),
(4, 2, 4),
(5, 2, 54),
(6, 4, 17),
(7, 5, 21),
(8, 7, 32),
(9, 2, 13),
(10, 3, 54),
(11, 3, 4),
(12, 2, 5),
(13, 6, 22),
(14, 8, 23),
(15, 7, 18),
(16, 3, 33),
(17, 2, 15),
(18, 4, 6),
(19, 8, 39),
(20, 4, 26),
(21, 6, 44),
(22, 7, 28),
(23, 5, 16),
(24, 3, 49),
(25, 3, 56),
(26, 7, 44),
(27, 8, 6),
(28, 8, 13),
(29, 8, 44),
(30, 8, 56),
(31, 8, 40),
(32, 2, 41),
(33, 3, 43),
(34, 6, 13),
(35, 8, 35),
(36, 4, 39),
(37, 2, 42),
(38, 5, 42),
(39, 5, 5),
(40, 2, 17),
(41, 4, 34),
(42, 4, 33),
(43, 4, 13),
(44, 3, 15),
(45, 4, 55),
(46, 6, 40),
(47, 5, 39),
(48, 5, 44),
(49, 3, 18),
(50, 2, 40),
(51, 8, 41),
(52, 2, 21),
(53, 2, 33),
(54, 2, 9),
(55, 2, 52),
(56, 3, 41),
(57, 5, 41),
(58, 6, 41),
(59, 7, 41),
(60, 6, 48),
(61, 6, 4),
(62, 9, 4),
(63, 4, 4),
(64, 4, 5),
(65, 5, 4),
(66, 7, 4),
(67, 9, 5),
(68, 6, 5),
(69, 7, 5),
(70, 4, 44),
(71, 2, 44),
(72, 9, 44),
(73, 4, 47),
(74, 3, 47),
(75, 2, 47),
(76, 9, 47),
(77, 5, 47),
(78, 6, 47),
(79, 7, 47),
(80, 5, 8),
(81, 4, 8),
(82, 2, 8),
(83, 3, 8),
(84, 6, 8),
(85, 7, 8),
(86, 8, 8),
(87, 8, 60),
(88, 13, 4),
(89, 4, 58),
(90, 2, 60),
(91, 4, 60),
(92, 6, 58),
(93, 5, 60),
(94, 7, 60),
(95, 2, 58),
(96, 2, 57),
(97, 4, 57),
(98, 5, 57),
(99, 8, 57),
(100, 7, 57),
(101, 2, 53),
(102, 6, 53),
(103, 5, 53),
(104, 4, 53),
(105, 8, 53),
(106, 4, 56),
(107, 7, 56),
(108, 2, 56),
(109, 5, 58),
(110, 6, 60),
(111, 8, 58),
(112, 5, 56),
(113, 2, 55),
(114, 6, 55),
(115, 8, 50),
(116, 7, 51),
(117, 9, 15),
(118, 7, 21);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `register_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `birth_date` date NOT NULL,
  `join_date` date NOT NULL,
  `last_login` datetime NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`register_id`, `name`, `email`, `mobile`, `profile_pic`, `password`, `gender`, `birth_date`, `join_date`, `last_login`, `status`) VALUES
(2, 'Jenish', 'jenishvekariya00@gmail.com', '8980889161', 'member-assert/profile/bf8a30c8dedabbc697957c8e9ef94575.png', '1fc278b97433e8a83b15c0ae33341c4ae1525131c289348fbc38ffae9f79ab7cca6ee25f7f7ce3394c5903db7af915e0af13594350c285d7da4eab8b02c7cf23keGsSEpHbPIQLoWkEWE4g2s/aTn1iID1DybMDObMMY4=', 'Male', '2000-05-22', '2022-05-31', '2022-06-03 03:23:32', 1),
(3, 'Arvind', 'acharyaarvindbhai111@gamil.com', '8347634213', 'member-assert/profile/dca39e86a178eb78db20c21a60d0a478.png', '40f7334c1c5487c483d3b241945abf6b09f9c13ead940db4c045868937d561a6cb341e923a14db76550f648e1e8957d17f32a41b23f5bc0d39d4a01ae1ad8ff8z4ZOL4TmN9E92RBLw7IkG+T4Jhjzpw+SUnOz+EjNoGU=', 'Male', '2001-08-02', '2022-05-31', '2022-06-01 12:35:37', 1),
(4, 'Rohin Patel', 'patelrohin02@gmail.com', '9737841738', 'member-assert/profile/f97df3557b5262d38d67bd7ee6a92c4d.png', '08bfa96a9c68f9e4d115ea436818eeb75ee270cfed727e0254858090ee56c62af36b047c6c965e3a6d1819a604422a6ae678a5837d7c22dbdbef7a9ba44d9160Vz0vML0pwu0lOxtSt6gIWdXnzDmb57wf6jiunuHsn5A=', 'Male', '2000-03-07', '2022-05-31', '2022-05-31 09:44:47', 1),
(5, 'Shivam Yadav', 'shivamrajbahaduryadav@gamil.com', '7041044826', 'member-assert/profile/01a375baa86b84248f2ab4de10a12f18.png', 'fac4698b465d47d13a9198aa09dc1f6b8d230c89f053cd3fa1b4a4cd7194938e211b42c064c25103ed379c67a09b3ae4d7ab0d2735bdc5257f3b21ac9893c27av/2kcjeUInhVaGUzPvKEjob6hVMpbm2drVmfMHguAZk=', 'Male', '2000-08-06', '2022-05-31', '2022-06-01 12:37:06', 1),
(6, 'kuldeep patel', 'kuldeep253@gamil.com', '7486984627', 'member-assert/profile/7ad985b10fa86f4af63fab7d79c36b86.png', 'dd08aafb4c8f5de75d13e6adbd9cd181d0a8ac098f55faf9cbbf0b90efd7cd5d7fc86d8f05504eb489f83df83649098675dbe338fd1008192707759310cc51279MXwAHiBGWTJlf42vuGIPRsAkGQvxdfVRrUof99d+uI=', 'Male', '1999-12-20', '2022-05-31', '2022-06-01 12:37:53', 1),
(7, 'shivam patel', 'shivam247@gamil.com', '7486984627', 'member-assert/profile/ad162393bd0fda321f89c46e459efbd7.png', 'bf881325ff6c8abc5c94ee7db6deae7498de06c3f096ea3a193165bb1446e4c15a4e416f8ad42b6f1d951cd2fd7e7df73f86c01739bb0b0332115dbd0187730bR+y5k2g42IYrLzqAyRn5aEtyPR4WHxVrbEqNMZo5PM0=', 'Male', '2000-07-03', '2022-05-31', '2022-06-03 02:26:12', 1),
(8, 'Sahil', 'sahildobariya29@gmail.com', '7984143910', 'member-assert/profile/3b81f2f1562c0f6d96e298d49ef10606.png', 'b46f54fe4e238aa314529ba57673785e274b8254d35dac70e5c52540983034ac65452b1594200c8b3502a60a24dbd9014e21fbc58ff387dbbd8078f52606c54ecLqF0+qAiTb3RlCBKZrsSIBvSy73kbPJvPMFZVQsv8s=', 'Male', '1999-12-05', '2022-05-31', '2022-06-01 03:07:14', 1),
(9, 'Dipak Yadav', 'dy69542@gmail.com', '7486984627', 'member-assert/profile/d4e6e0dec1dbb99f0fd886c95a725dc4.png', '5b5c551f1452637c75817abec1541eb4a9e8368e5f7cf0884d6ea31d618ebc7c15badc1428122baada6318943ff9e78dfd30a1179732899e250d707d63d013f56LVHSBYY4/TEA9EESjTbBmogstarYRowc0Ll7v/Le6o=', 'Male', '2002-05-19', '2022-05-31', '2022-05-31 12:04:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(5) NOT NULL,
  `register_id` int(5) NOT NULL,
  `business_id` int(5) NOT NULL,
  `rating` int(5) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `register_id`, `business_id`, `rating`, `msg`, `date`, `status`) VALUES
(1, 3, 44, 5, 'Very good store\nU can buy all things at one place only\nEasy for quick shoppings.', '2022-05-31 10:16:46', 1),
(2, 6, 27, 5, 'Really good exprince thanks to SH & COMPANY.', '2022-05-31 10:19:54', 1),
(4, 2, 54, 5, 'Good hotel, near the highway and surrounded by good food options. Easy to locate and with the parking. Lift is available for the guests. The restaurant is also inside and has a good ambience. The rooms are good, service is average, you may opt for breakfast.', '2022-05-31 10:20:44', 1),
(5, 4, 17, 4, 'Good working with fast Service', '2022-05-31 10:21:25', 1),
(6, 5, 21, 5, 'Such a smooth and fast service. Booked a intercity ride from vapi to mumbai , all it took was 10 min. Thanks for a wonderful trip\n', '2022-05-31 10:22:11', 1),
(7, 7, 32, 5, 'Best after sale service provider. Problem solving attitude makes it perfect. Genuine person with helping nature.', '2022-05-31 10:22:54', 1),
(8, 2, 13, 5, 'Nice place .. small super market with maximum day to day usage product\n', '2022-05-31 10:24:27', 1),
(9, 3, 4, 5, 'Nice, clean hotel', '2022-05-31 10:26:28', 1),
(10, 2, 5, 5, 'Food was  excellent and breakfast was ver nice', '2022-05-31 10:27:37', 1),
(11, 6, 22, 5, 'Nice service', '2022-05-31 10:28:55', 1),
(12, 8, 23, 4, 'Good quality and best price and good behaviour', '2022-05-31 10:30:43', 1),
(13, 7, 18, 4, 'Excellent service', '2022-05-31 10:31:49', 1),
(14, 3, 33, 4, 'software and cctv camera related views. Staff and management knows what they are doing and really helpful and the service is great', '2022-05-31 10:32:29', 1),
(15, 2, 15, 4, 'Very good school in whole world\n', '2022-05-31 10:33:31', 1),
(16, 4, 6, 5, 'Good breakfast and nice stay. Hotel rooms are clean and hygienic...', '2022-05-31 10:34:23', 1),
(17, 8, 39, 5, 'Export Quality Mango available here', '2022-05-31 10:35:55', 1),
(18, 4, 26, 5, 'Excellent product, quality & low price too. Timely and prompt delivery . I would recommend to bye more gifted from Exim décor. Thanks', '2022-05-31 10:38:51', 1),
(19, 6, 44, 5, 'Good place. Everything under one roof. Nice experience.', '2022-05-31 10:39:34', 1),
(20, 7, 28, 3, 'Great Product Portfolio', '2022-05-31 10:49:06', 1),
(21, 5, 16, 5, 'Parking place is nice and the play ground is big and clean.', '2022-05-31 10:49:55', 1),
(22, 3, 49, 5, 'Superb customer service', '2022-05-31 10:51:09', 1),
(23, 3, 56, 2, 'Bad Experience', '2022-05-31 10:52:34', 1),
(24, 7, 44, 4, 'Great Mall price is good for middle family \"all products are goods and staff is also good so you can purchase best products', '2022-05-31 10:53:53', 1),
(25, 8, 6, 5, 'Good location, decent rooms. Maintanance of the room should be checked. Decent food', '2022-05-31 10:55:13', 1),
(26, 6, 44, 5, 'My school is best ', '2022-05-31 10:55:55', 1),
(27, 7, 44, 5, 'Nice stay experience, Near Highway, Decent staff n clean place to stay', '2022-05-31 10:56:43', 1),
(28, 8, 13, 3, 'Expensive A little expensive compared to other shopping malls. Doesn\'t make much difference but is actually a little more expensive than others. But you can also find fresh vegetables and fruits here.', '2022-05-31 10:57:54', 1),
(29, 2, 41, 5, '(Original)\nMango bhoom', '2022-05-31 10:59:55', 1),
(30, 2, 41, 5, 'Not just the mango market, it is a fruit market where anyone can buy various fruits grown in nearby farms as per the seasons. Place is having good transport connectivity to state and national highways. Though there are problems during high time in summer when mango season is there at its peak.', '2022-05-31 11:00:54', 1),
(31, 3, 4, 3, 'Breakfast is wide spreader with good room service. Location very near to railway station and in vicinity to all pharma companies. Definately a recommend for all business/family travellers. Full five star from me.\nbreakfast', '2022-05-31 11:01:41', 1),
(32, 3, 43, 5, 'Really Great Place to buy Mangoes...!!! Various types of Mangoes like Hafus, Rajapuri, Kesar, Langdo, Payri, Desi etc...Out of which Valsadi Hafus is called King of Fruits...!!!', '2022-05-31 11:02:38', 1),
(33, 6, 13, 1, 'Good shopping experience but wasting time on payment counters.', '2022-05-31 11:04:21', 1),
(34, 8, 35, 3, 'We\'re appreciate him for very excellent service related Barcode, Tally Customize etc.', '2022-05-31 11:06:27', 1),
(35, 6, 13, 3, 'You will almost everything here.... Best in dharmpur area\n', '2022-05-31 11:07:25', 1),
(36, 4, 39, 5, 'South Gujarat mango available but from June that too in raw mangoes it takes a week to ripe.', '2022-05-31 11:08:24', 1),
(37, 5, 42, 4, 'Cheap mangoes are available here but be careful  and check  properly . Sometimes you may get bad quality of mango', '2022-05-31 11:09:35', 1),
(38, 7, 44, 1, 'Billing process is very slow, servers are also very slow, spoils costomer\'s valuable time, you may loose customers over a period of time', '2022-05-31 11:10:18', 1),
(39, 5, 5, 4, 'Good Budgeted hotel in town.\nClean, Cooperative staff, Food quality is good.', '2022-05-31 11:11:07', 1),
(40, 2, 17, 5, 'Good work', '2022-05-31 11:12:50', 1),
(41, 3, 33, 4, 'one of the best place for the IT solution. reliable and best in accounting software.', '2022-05-31 11:14:14', 1),
(42, 4, 13, 5, 'Good place to get branded products\n', '2022-05-31 11:15:09', 1),
(43, 8, 56, 5, 'Good place to buy grocery', '2022-05-31 11:16:41', 1),
(44, 3, 15, 5, 'I have studied here 2 years (11 and 12 commerce Stream) with good experienced.', '2022-05-31 11:18:31', 1),
(45, 4, 55, 4, 'Service very bad.customer complaint neglected', '2022-05-31 11:19:32', 1),
(46, 6, 40, 2, 'When will the full-fledged market begin.... Are the good quality mangoes  available now\nWhen is the best time to visit this market', '2022-05-31 11:20:16', 1),
(47, 5, 39, 3, 'You can buy mangos at very reasonable rate in mango ', '2022-05-31 11:21:02', 1),
(48, 5, 44, 4, 'A very good store to get all the home stuffs at good price', '2022-05-31 11:23:02', 1),
(49, 2, 52, 5, 'fresh vegetable shop ', '2022-05-31 03:05:24', 1),
(54, 3, 41, 5, 'Nice packaging ', '2022-06-01 12:36:47', 1),
(55, 5, 41, 5, 'Quality of mango good', '2022-06-01 12:37:36', 1),
(56, 6, 41, 5, 'reasonable price', '2022-06-01 12:38:40', 1),
(57, 7, 41, 5, 'Fast delivery ', '2022-06-01 12:39:47', 1),
(58, 8, 41, 5, 'delivery available', '2022-06-01 12:42:49', 1),
(59, 6, 4, 4, 'The hotel and staff is good but plumbing system of hotel is very bad', '2022-06-01 02:24:41', 1),
(60, 9, 4, 4, 'The food is good at this restaurant. I stayed at this resort with family and the staff was good and polite the room service is also very good Natural place with peace to stay wIt\'s family and friends', '2022-06-01 02:25:20', 1),
(61, 2, 4, 4, 'Wilson Hill', '2022-06-01 02:26:00', 1),
(62, 4, 4, 4, 'The place it pretty good for a night stay. The rooms are very good and have a fantastic view of the valley from the balcony of the rooms. The food is very good as well. The hotel manger said that they do not use any kind of food colouring', '2022-06-01 02:28:49', 1),
(63, 3, 4, 5, 'Nice view from the rooms. Very good parking space.', '2022-06-01 02:29:27', 1),
(64, 5, 4, 5, 'Nice place for peace', '2022-06-01 02:33:00', 1),
(65, 7, 4, 5, 'Superb Experience, and excellent service.', '2022-06-01 02:35:09', 1),
(66, 6, 5, 3, 'I had my dinner and was nice. They use ghee in their all foods, which is their traditional method for making. So for me its a heavy meal', '2022-06-01 02:38:54', 1),
(67, 7, 5, 5, 'Punjabi and Chinese food is good.. One of the best dining experience at Dharampur', '2022-06-01 02:39:16', 1),
(68, 5, 5, 5, 'Good food quality and test also....if you are hungry.........', '2022-06-01 02:39:44', 1),
(69, 9, 5, 4, 'I tried jain veg kolhapuri.. It took some time to prepare but it was tasty and food quality above average... Service was good as well... Would definitely recommend others to visit this restaurant in dharampur -valsad highway..', '2022-06-01 02:40:05', 1),
(70, 2, 5, 5, 'Good food (veg).Located on Dharmpur Valsad Road.Reasonable.', '2022-06-01 02:40:28', 1),
(71, 4, 5, 5, 'Good food is available here. Best dish is Baigan bharta try it once', '2022-06-01 02:41:06', 1),
(73, 7, 44, 5, 'Kinda regular customer here. An all stop destination for all your shopping needs. From groceries to clothing to kitchen supplies to bathroom supplies to decorative stuffs to students needs. It satisfies it all. Very well systematically', '2022-06-01 02:46:09', 1),
(74, 6, 44, 5, 'Great place for purchasing household items, grocery shopping at fair price! Good to shop monthly RASHAN from here! Usually crowded', '2022-06-01 02:46:58', 1),
(75, 3, 44, 5, 'Very good place for grocery shopping & other products. Good service provides by D mart\n', '2022-06-01 02:48:16', 1),
(76, 4, 44, 5, 'Great Place for shopping daily needs. D Mart delivering good discounts. You can find almost all products of your daily need products.', '2022-06-01 02:48:38', 1),
(77, 2, 44, 5, 'DMart doesnt need any any description. DMart is a store where tou get all your basic groceries and necessary goodies. DMart offers everything at very low cost as compared to other stores.', '2022-06-01 02:48:48', 1),
(78, 9, 44, 5, 'Nice all in one place for house hold goods', '2022-06-01 02:49:05', 1),
(79, 5, 44, 5, 'D mart vapi is a nice shopping mall for daily use product also wearable\nParking facility also available at free of cost and huge discount on daily grocery but Sunday full rush and crowd must buy instant food and drinks and huge discount on biscuits', '2022-06-01 02:49:23', 1),
(80, 3, 47, 5, 'If you are fan of their ice-cream then I don\'t think I need to say more about this place. The place is bit tiny but the flavors and service they offer at this place is best for their level. My personal favorites are tender coconut and ', '2022-06-01 02:54:16', 1),
(81, 4, 47, 5, 'One of the best icecreams in india they have. All natural no added colors or flavours.', '2022-06-01 02:54:28', 1),
(82, 2, 47, 4, 'They have really good quality Ice-cream and many varieties of flavors.', '2022-06-01 02:54:38', 1),
(83, 9, 47, 5, 'They have really good quality Ice-cream and many varieties of flavors.', '2022-06-01 02:54:51', 1),
(84, 5, 47, 5, 'Natural flavour yummy ice-cream,\nThere are different different tests fruit and nuts flavoured ice-cream.', '2022-06-01 02:55:02', 1),
(85, 6, 47, 5, 'One of the best places to have ice-cream. They have some very nice flavors. Malai, tender coconut, coffee walnut and roasted almonds these are my favorite. Each scoop cost you 60 bucks but trust me its worth all your money!!', '2022-06-01 02:55:17', 1),
(86, 5, 8, 5, 'Budget friendly rooms and is located right beside the main road. It\'s a good place to stay for tourists who want to explore the natural environment of Dharampur.', '2022-06-01 02:06:33', 1),
(87, 4, 8, 5, 'Good place to stay at a small town Dharampur in Valsad District. Clean rooms. No restaurant in hotel. You will get only tea in room. Staff arrange food from outside', '2022-06-01 02:07:15', 1),
(88, 2, 8, 5, 'Very good rooms and all staff members\nReception is very very good all of you\nThank you', '2022-06-01 02:08:25', 1),
(89, 3, 8, 5, 'Nice hotel... osm budget... Nice staff members & their response..', '2022-06-01 02:09:06', 1),
(90, 6, 8, 5, 'Best hotel in dharmapur low price and good service amezing staf', '2022-06-01 02:09:47', 1),
(91, 7, 8, 5, 'It was amazing hotel.. For staying.. Party.. Or other.....\nNice staff with friendly behavior and give super response.', '2022-06-01 02:10:18', 1),
(93, 8, 8, 5, 'Nice place to stay all facilities are provided ni motel 11', '2022-06-01 02:11:29', 1),
(94, 8, 60, 5, '100% Organic Vegetable', '2022-06-01 03:08:04', 1),
(95, 4, 58, 4, 'Good Services', '2022-06-02 06:01:38', 1),
(96, 2, 58, 4, 'Good quality and best price installation timely done and good behaviour\n', '2022-06-02 06:10:50', 1),
(97, 2, 60, 3, 'Its a farm house belongs to Mr Govindaiah\'s family. It has coconut arcanut and few Gauva trees. Periodically they grow few types of vegetables. Anything grown there is fully organic.', '2022-06-02 06:12:04', 1),
(98, 4, 60, 5, 'Good organic farm... Lot of pets\n', '2022-06-02 06:12:29', 1),
(99, 6, 58, 4, 'On Time delivery', '2022-06-02 06:13:38', 1),
(100, 5, 60, 5, 'One of the best farm house I have ever visited! Great hospitality! Amazing architecture! Serene & Green', '2022-06-02 06:14:02', 1),
(101, 7, 60, 4, ' we spent golden two hour\'s wide experience of economical & Corporate world, eventually with organic forming. Thank u ..', '2022-06-02 06:14:55', 1),
(102, 8, 60, 3, 'Educative, inspiring  amidst nature', '2022-06-02 06:15:27', 1),
(103, 6, 58, 4, 'This is a place one would dream of. A complete farm experience with a beautiful dakshin Kannada home with Tulsi katte. Architecture is something only one can experience and is beyond words. Go with ur family, carry your own food', '2022-06-02 06:15:58', 1),
(104, 2, 57, 5, 'Big Shop to have variety of local fastfood like Khaman Vadapav Paneer roll Kachori Icecream chocolates sweets Deserts . You can seat comfortably and enjoy a snacks here.. I have been there many times and all time a good experience..\n', '2022-06-02 06:18:28', 1),
(105, 4, 57, 4, 'There are lots of sweets pastries and snacks.they are so tasty.So you can try this foods.thank you', '2022-06-02 06:19:09', 1),
(106, 6, 58, 5, 'Lovely shop..had a nice Experience.\nGOOD to buy Farsan and Sweets and All.\nAnd also the staff and the owner is very nice at customer service.', '2022-06-02 06:19:24', 1),
(108, 5, 57, 5, 'Must visit In Dharampur For Sweet Lover, lot\'s of Milk And Mava Verity', '2022-06-02 06:20:23', 1),
(109, 8, 57, 5, 'Nice place for readymade foods', '2022-06-02 06:21:07', 1),
(110, 7, 57, 4, 'This is the most beautiful hotel and make a good food in dharmpur', '2022-06-02 06:22:19', 1),
(111, 2, 53, 4, 'So nice place and friendly vagetable vanders', '2022-06-02 06:23:43', 1),
(112, 6, 53, 4, 'Vegetables market of Morning.. Vegetables are cheap and fresh.. Timings are 6.30am to 10.00am after that cnly few venders are available..', '2022-06-02 06:24:36', 1),
(113, 5, 53, 5, 'Good available fresh vegetables at morning time.', '2022-06-02 06:25:16', 1),
(114, 4, 53, 5, 'Reasonable price avelable all vegetable', '2022-06-02 06:25:42', 1),
(115, 8, 53, 5, 'Nice experience but all vagetable are costly camper to local market', '2022-06-02 06:26:22', 1),
(116, 4, 60, 5, 'This place is really good for those people who want to purchase the vegetables at a very cost effective price. Seriously this place is quite cheap comparitively to those expensive markets where fruits and vegetables are priced very high ', '2022-06-02 06:27:36', 1),
(117, 6, 53, 5, 'Good place clean environment and fresh  vegetables', '2022-06-02 06:28:08', 1),
(118, 4, 56, 5, 'Good place ', '2022-06-02 06:29:43', 1),
(119, 2, 56, 5, 'good work', '2022-06-02 06:32:19', 1),
(122, 5, 58, 5, 'we done 3-4 deal, Very good fast responce and delivery best quality', '2022-06-02 06:34:46', 1),
(123, 8, 60, 5, 'I have been ordering Mangoes from here. The consistent quality and taste is incomparable to others. The most important thing for me in today\'s time is the organic nature in which it is being cultivated.', '2022-06-02 06:36:28', 1),
(124, 4, 60, 5, '100% Organic', '2022-06-02 06:37:37', 1),
(125, 6, 60, 5, 'Fresh vegitable ', '2022-06-02 06:38:25', 1),
(126, 7, 56, 5, 'I love cake', '2022-06-02 06:40:27', 1),
(127, 6, 60, 5, 'Multi-time purchase vegetable at low cost', '2022-06-02 06:42:06', 1),
(128, 2, 58, 5, 'Good work', '2022-06-02 06:43:09', 1),
(129, 8, 58, 5, 'Best person for business needs ,responds quickly', '2022-06-02 06:46:07', 1),
(130, 6, 58, 5, 'Nice', '2022-06-02 06:46:55', 1),
(131, 2, 56, 5, 'My fav. cake brand available', '2022-06-02 06:48:17', 1),
(132, 7, 56, 5, 'monginis', '2022-06-02 06:48:29', 1),
(133, 5, 56, 5, 'Nice shop', '2022-06-02 06:51:06', 1),
(134, 4, 55, 5, 'Super store ....', '2022-06-02 06:52:02', 1),
(135, 6, 55, 5, 'Super shop', '2022-06-02 06:52:31', 1),
(136, 8, 50, 5, 'State of art modernize cold storage\n', '2022-06-02 06:56:59', 1),
(137, 7, 51, 5, 'I love this place', '2022-06-02 06:57:35', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_business`
--
ALTER TABLE `tbl_business`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_email_subscriber`
--
ALTER TABLE `tbl_email_subscriber`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_follow`
--
ALTER TABLE `tbl_follow`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  ADD PRIMARY KEY (`gallary_id`);

--
-- Indexes for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `tbl_recent_view`
--
ALTER TABLE `tbl_recent_view`
  ADD PRIMARY KEY (`view_id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `banner_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_business`
--
ALTER TABLE `tbl_business`
  MODIFY `business_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `contact_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_email_subscriber`
--
ALTER TABLE `tbl_email_subscriber`
  MODIFY `subscriber_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_follow`
--
ALTER TABLE `tbl_follow`
  MODIFY `follow_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  MODIFY `gallary_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  MODIFY `inquiry_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `location_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_recent_view`
--
ALTER TABLE `tbl_recent_view`
  MODIFY `view_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `register_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
