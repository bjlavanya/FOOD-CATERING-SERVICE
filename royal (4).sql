-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 04:25 AM
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
-- Database: `royal`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcourse`
--

CREATE TABLE `addcourse` (
  `id` int(20) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcourse`
--

INSERT INTO `addcourse` (`id`, `course`) VALUES
(7, 'starters'),
(8, 'chats'),
(9, 'combo'),
(10, 'rice'),
(11, 'juice'),
(13, 'DSS');

-- --------------------------------------------------------

--
-- Table structure for table `addmenuitem`
--

CREATE TABLE `addmenuitem` (
  `id` int(20) NOT NULL,
  `ordert` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `productid` varchar(50) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(60) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addmenuitem`
--

INSERT INTO `addmenuitem` (`id`, `ordert`, `course`, `productid`, `itemname`, `price`, `image`, `description`) VALUES
(15, 'Ice Creams', 'starters', 'ICECHO', 'Chocolate Ice cream Buffet', 250, 'chocolate.jpg', 'Ice cream is a frozen dessert typically made from milk or cream that has been flavoured with a sweetener, either sugar or an alternative, and a spice, such as cocoa or vanilla.'),
(17, 'non veg', 'rice', 'NONBIR', 'Hyderbadi Chicken Biryani', 200, 'hyderbadi1.jpg', 'Hyderabadi biryani (also known as Hyderabadi dum biryani) is a style of biryani originating from Hyderabad, India made with basmati rice and meat (mostly mutton).'),
(18, 'non veg', 'starters', 'NONCHILLI', 'Chilli Chicken', 100, 'chilli.jpg', 'Chilli Chicken is a popular Indo-Chinese dish which is famous all over India. Crispy fried chicken tossed in a spicy tangy chilli sauce to create a fiery experience. '),
(19, 'veg', 'starters', 'VEGPAN', 'Paneer Butter Masala', 120, 'butterpaneer.jpg', 'Paneer Butter Masala is one of India’s most popular paneer gravy recipes. It  is a rich and creamy dish of paneer (Indian cottage cheese) in a tomato, butter and cashew sauce.'),
(20, 'veg', 'starters', 'VEGTHAL', 'Veg Thali', 110, 'veg.webp', 'A thali consists of:rice,vegetables sambar, chutney: a condiment made with fruit, herbs, spices, and even vegetables and fish, raita,sweets-gulab jamun,pickles.'),
(21, 'Sweets', 'starters', 'SWTGUL', 'Gulab Jamun', 50, 'gulabjamun.webp', 'Gulab jamun is an Indian dessert of fried dough balls that are soaked in a sweet, sticky sugar syrup.It is a made mainly from milk solids(khoya).It is originating in the Indian subcontinent.'),
(22, 'veg', 'starters', 'VEGSPR', 'Paneer Spring Roll', 60, 'paneerspringroll.jpg', 'Paneer with veggies and combination of Indian spices and they are so nicely stuffed inside the Spring Roll sheet and deep fried  to a crispy and tasty Paneer Spring Rolls.'),
(24, 'non veg', 'rice', 'NONFRI', 'Egg Fried rice', 80, 'friedeggrice.jpg', 'Egg Fried Rice is a delightful rice treat made by cooking rice, veggies & spices along with scrambled eggs and sauces. Egg Fried Rice is a wholesome meal.'),
(25, 'chinese', 'starters', 'CHINCHOW', 'Veg Chowmein', 150, 'vegchowmein.jpg', 'Veg Chowmein is a popular Chinese dish of stir fried noodles with mix vegetables, soy sauce, aromatics and spices. This vegan dish is a savory masterpiece of smooth, velvety noodles and oodles of crunchy veggies.'),
(26, 'non veg', 'starters', 'NONLOL', 'Chicken Lollipop', 160, 'chickenlollipop.jpg', 'Chicken lollipop is nothing but legs of chicken cut in such a way it forms like a lollipop shape. These cuts of chicken lollipop marinated in masala and fried till crispy and juicy.You can have it with tomato or chilli sauces.'),
(27, 'non veg', 'starters', 'NONFISH', 'Masala Fried Pomfret', 120, 'fishfry1.webp', 'A super easy masala fish, marinated in a range of spices and coated in semolina before frying. Served with a sweet and tangy warm cabbage and kiwi salad.'),
(28, 'non veg', 'starters', 'NONFSHCUR', 'North Indian Fish Curry', 140, 'fishcurry.webp', 'North Indian (Punjabi style) fish masala is a fish curry made with onions,tomatoes, ginger, garlic, powdered spices and scented with kasuri methi and onion tomato base .'),
(29, 'veg', 'chats', 'CHATPURI', 'Pani Puri', 40, 'panipuri.jpg', 'Pani puri is a fried dough balls (puri) stuffed with boiled potatoes or steamed moong sprouts or boiled chickpeas or white peas curry (also known as ragda) together with spicy tangy water and a sweet chutney.'),
(30, 'veg', 'chats', 'CHATPAV', 'Pav Bhaji', 80, 'pavbhaji.jpg', 'Pav Bhaji  consisting of a vegetable curry (bhaji) cooked in tomato gravy and served with a soft bread roll (pav). Bhaji is made from a tasty and nutritious blend of vegetables and   blended with bhaji masala.');

-- --------------------------------------------------------

--
-- Table structure for table `addslider`
--

CREATE TABLE `addslider` (
  `id` int(20) NOT NULL,
  `image` varchar(60) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addslider`
--

INSERT INTO `addslider` (`id`, `image`, `content`) VALUES
(6, 'biryani.jpg', 'Try our Chicken Biryani!!'),
(8, 'chickenlollipop.jpg', 'Life is dull without good food'),
(9, 'dumbiryani.jpg', 'Where every flavor tells a story'),
(13, 'chatback.webp', 'The home of authentic, flavorful chat'),
(14, 'vegback.jpg', 'Food that Awaits you'),
(16, 'fishback.jpg', 'Flavored by the Ocean'),
(18, 'juice.webp', 'Taste joy after every sip'),
(19, 'dessertback.jpg', 'Happiness You Can’t Deny'),
(20, 'foodback1.jpg', 'Adorn your Food Senses'),
(21, 'sweetback.jpg', 'Sweet Treats You Crave');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'royalcatering@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(20) NOT NULL,
  `customername` varchar(50) NOT NULL,
  `bookingdate` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactnumber` varchar(10) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `eventdate` date NOT NULL,
  `timings` varchar(20) NOT NULL,
  `eventaddress` varchar(200) NOT NULL,
  `attendees` int(50) NOT NULL,
  `orderchinese` varchar(20) NOT NULL,
  `orderveg` varchar(20) NOT NULL,
  `ordernonveg` varchar(20) NOT NULL,
  `orderboth` varchar(20) NOT NULL,
  `fooditems` varchar(1200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `customername`, `bookingdate`, `email`, `contactnumber`, `eventname`, `eventdate`, `timings`, `eventaddress`, `attendees`, `orderchinese`, `orderveg`, `ordernonveg`, `orderboth`, `fooditems`, `message`, `status`) VALUES
(23, 'srithi', '', 'srithi@gmail.com', '8909908909', 'Wedding Event', '2023-12-29', 'Afternoon', 'Cordel hall', 1000, 'Chinese', 'Veg', '', '', 'chinese combo, veg combo, drink and beverages', 'no', 'Accepted'),
(24, 'Kavya', '', 'kavya123@gmail.com', '8909989098', 'Birthday Event', '2023-12-30', 'Night', 'Cordel hall, Kulshekara', 1000, 'Chinese', 'Veg', '', '', 'chinese combo, veg combo, drink and beverages, icecream combo, sweet combo', 'event food time- 8:30pm', 'Accepted'),
(26, 'kavya', '', 'kavya123@gmail.com', '8989000909', 'Anniversary Event', '2023-12-30', 'Night', 'Heritage Ground, Addoor', 600, '', '', '', 'Both veg and non-veg', 'veg combo, nonveg combo,fish combo,drink and beverages, icecream-chocolate', 'food timings is 9pm', 'Accepted'),
(27, 'srithi', '', 'srithi@gmail.com', '9806570098', 'Wedding Event', '2024-01-02', 'Afternoon', 'Corder hall, kulshekar', 1500, '', '', '', 'Both veg and non-veg', 'veg combo and non veg combo', 'no', 'Rejected'),
(28, 'srithi', '2023-12-29', 'srithi@gmail.com', '9806570098', 'Birthday Event', '2023-12-30', 'Night', 'Main MJ road,mangalore', 500, 'Chinese', '', '', 'Both veg and non-veg', 'chinese combo, veg combo, non veg combo', 'no', 'Accepted'),
(29, 'srithi', '2023-12-30', 'srithi@gmail.com', '9089097977', 'Anniversary', '2023-12-29', 'Evening', 'Main Road , kaikamba', 500, 'Chinese', '', '', 'Both veg and non-veg', 'chinese combo, veg combo and non veg combo', 'no', 'Accepted'),
(30, 'srithi', '2024-01-01', 'srithi@gmail.com', '9806570098', 'Name ceremony', '2024-01-03', 'Afternoon', 'Shubhalaxmi hall, Benjanpadavu', 1000, '', 'Veg', '', '', 'veg full combo, icecream combo, drink and beverages', 'no', 'Pending'),
(31, 'srithi', '2024-01-04', 'srithi@gmail.com', '9806570098', 'weeding', '2024-02-12', 'Afternoon', 'Heritage ground, addoor', 2000, '', '', '', 'Both veg and non-veg', 'veg and non veg combo', 'no', 'Accepted'),
(32, 'srithi', '2024-01-28', 'srithi@gmail.com', '8907778778', 'Wedding Event', '2024-02-01', 'Afternoon', 'Jugul hall, Mallikatte', 1500, '', '', '', 'Both veg and non-veg', 'veg combo, non veg combo, drink and beverages, sweet combo, icecream combo', 'no', 'Pending'),
(33, 'srithi', '2024-02-04', 'srithi@gmail.com', '9806570098', 'weeding', '2024-02-11', 'Morning', 'Corder hall, kulshekar', 3000, '', '', '', 'Both veg and non-veg', 'veg combo, non veg combo, drink and beverages, icecream combo, sweets combo', 'no', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `phonenumber`, `email`, `message`) VALUES
(6, 'Ramesh', '8906768443', 'ramesh345@gmail.com', 'We are celebrating anniversary party, so we need a catering services of yours . So can we book an order for event. Please can You call to this number.'),
(7, 'Priya', '9008955647', 'priya12@gmial.com', 'We are celebrating birthday party, so we need a catering services of yours . So can we book an order for event. Please can You call to this number.'),
(8, 'Siya', '7008677854', 'siyarao900@gmail.com', 'We are  having wedding event, so we need a catering services of yours . So can we book an order for event now it self or after confirming with you. Please can You please say about this.'),
(9, 'Pavithra', '7990899001', 'pavvi2323@gmail.com', 'We are having birthday event, so we need a catering services of yours . So can we book an order for event now it self or after confirming with you. We need order for 500 people. Please can You please say about this.');

-- --------------------------------------------------------

--
-- Table structure for table `deliciouscombo`
--

CREATE TABLE `deliciouscombo` (
  `id` int(20) NOT NULL,
  `comboimage` varchar(60) NOT NULL,
  `comboname` varchar(60) NOT NULL,
  `comboitems1` varchar(200) NOT NULL,
  `comboitems2` varchar(100) NOT NULL,
  `comboitems3` varchar(100) NOT NULL,
  `comboitems4` varchar(100) NOT NULL,
  `comboitems5` varchar(100) NOT NULL,
  `comboitems6` varchar(100) NOT NULL,
  `comboitems7` varchar(100) NOT NULL,
  `comboitems8` varchar(100) NOT NULL,
  `comboitems9` varchar(100) NOT NULL,
  `comboitems10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deliciouscombo`
--

INSERT INTO `deliciouscombo` (`id`, `comboimage`, `comboname`, `comboitems1`, `comboitems2`, `comboitems3`, `comboitems4`, `comboitems5`, `comboitems6`, `comboitems7`, `comboitems8`, `comboitems9`, `comboitems10`) VALUES
(3, 'breakfastcambo.webp', 'BREAKFAST COMBO', 'Idli Sambar', 'Plain Dosa', 'Masala Dosa', 'Vada Sambar', 'Plain Paratha', 'Aloo Paratha', 'Poori Baaji', 'Buns & Sambar', 'Veg Pulav', 'Upma'),
(5, 'southindian.jpg', 'SOUTH INDIAN COMBO', 'Steamed Rice', 'Pickle', 'Vegetable Palya', 'Sambar', 'Rasam', 'Papad', 'Payasa', 'Kesari Bath', 'Butter Milk', 'Salt'),
(7, 'northindian.jpg', 'NORTH INDIAN COMBO', 'Rice', 'Dal Makhni', 'Sahi Paneer', 'Naan/ Lachha parantha', 'Achar(pickle)', 'Papad', 'Vegetable chutney', 'Raita', 'Salad', 'Gulab Jamun'),
(8, 'drinkandbeverages.webp', 'DRINKS AND BEVERAGES', 'Tea', 'Coffee', 'Malt', 'Fruit Juice', 'Soft Drinks', 'Mojito- lime juice with pudina', 'Milkshakes', 'Water', 'Alcoholic beverages', 'Mocktails'),
(9, 'chinese.jpg', 'CHINESE COMBO', 'Veg schezwan fried rice', 'Paneer Chilly', 'Chilli potato', 'Manchurian', 'Veg chowmein', 'Veggie spring rolls', 'Hot and Sour soups', 'Veg momos', 'Chicken dumplings', 'Veg fried rice'),
(10, 'chatcombo.jpg', 'CHAT COMBO', 'Pani puri', 'Sev puri', 'Masala puri', 'Ragda puri', 'Samosa chat', 'Dahi puri', 'Pav bhaji', 'Papdi chat', 'Dahi aloo tikki', 'Dahi vada'),
(11, 'fishcombo.webp', 'FISH COMBO', 'Mangalorean fish curry', 'Fish Pulimunchi', 'Bangude masala(spicy mackerel)', 'Kane rava fry(ladyfish fry)', 'Anjal tawa fry(seer fish)', 'Neer dosa with fish curry', 'Pomfret recheado', 'Fish bonda', 'Prawns sukka', 'Crab sukka'),
(12, 'chickencombo.jpg', 'CHICKEN COMBO', 'Kori rotti', 'Chicken ghee roast', 'Chicken curry', 'Chicken sukka', 'Chicken biryani', 'Chicken kebabs', 'Nati koli saru', 'Kundapura chicken curry', 'Hyderbadi chicken biryani', 'Neer dosa with chicken sukka'),
(13, 'asiancombo.jpg', 'ASIAN INSPIRED DINNER COMBO', 'Loaded potato skins', 'Creamy tuscan chicken', 'Chicken parmesan', 'Sesame tofu and broccoli', 'Champagne margaritas', 'Indian butter chicken with Naan', 'Homemade ramen', 'Bibimbap', 'Mochi', 'Coconut and chilli pork stir fry'),
(14, 'sweetcombo.jpg', 'SWEET COMBO', 'Gulab Jamun', 'Halwa', 'Rasgulla', 'Rasmalai', 'Laddoo', 'Pedas', 'Mysore pak', 'Jalebi', 'Kaju katli', 'Brownies'),
(15, 'icecreamcombo.jpg', 'ICECREAM COMBO', 'Cereal and milk icecream', 'Honey pistachio icecream', 'Cinnamon Toast icecream', 'Vanilla  icecream', 'Butterscotch icecream', 'Coffee and oreo icecream', 'Strawberry icecream', 'Chocolate icecream', 'Mint chocolate chip icecream', 'Kulfi flavored icecream');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(20) NOT NULL,
  `eventimage` varchar(60) NOT NULL,
  `eventname` varchar(60) NOT NULL,
  `eventday` date NOT NULL,
  `eventdes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eventimage`, `eventname`, `eventday`, `eventdes`) VALUES
(4, 'birthdayevent.webp', 'Birthday Event', '2023-11-27', 'Birthday party catering provides more than just food for you and your guests; it allows for you as the birthday patron to be served. You don’t have to worry about cooking or serving others but rather will be served. The entire event will already be planned ahead of time and set up with professional party caterers tending to your needs.'),
(5, 'nameceremony.jpg', 'Name Ceremony Event', '2023-12-02', 'Our team of expert chefs uses high-quality ingredients to prepare delectable dishes that will delight your guests’ taste buds. From savory appetizers to mouth-watering desserts, our menu options cater to all dietary preferences and restrictions. We strive to make sure that every dish is not only aesthetically pleasing but also satisfyingly scrumptious.'),
(6, 'marriageevent.jpg', 'Wedding Event', '2023-12-13', 'Wedding catering services usually offer a variety of all-in-packages. Many things need to be considered, food, flowers, entertainment, servers, etc. Hiring a catering service will ensure that all of your wedding event needs will be taken care of from start to finish.'),
(7, 'anniversary.jpg', 'Anniversary Event', '2023-12-16', 'Our entire team of catering professionals is always committed to making your special anniversary celebration as special and memorable as possible. .From the taste to presentation, our expert chefs and wait staff will always give your guests a great food.');

-- --------------------------------------------------------

--
-- Table structure for table `ordertype`
--

CREATE TABLE `ordertype` (
  `id` int(20) NOT NULL,
  `ordert` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordertype`
--

INSERT INTO `ordertype` (`id`, `ordert`) VALUES
(5, 'veg and non veg'),
(7, 'chinese'),
(9, 'veg'),
(10, 'non veg'),
(11, 'Ice Creams'),
(12, 'Sweets');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(20) NOT NULL,
  `customerimage` varchar(60) NOT NULL,
  `customername` varchar(50) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `customerimage`, `customername`, `phonenumber`, `feedback`) VALUES
(15, 'people1.jpeg', 'Ankith', '9008799504', 'Food is so delicious and the service provided by royal catering is so good. In future i have to try the catering service of royal catering. Its my pleasure to write review for royal catering.'),
(17, 'people2.jpeg', 'Prajwal', '9088677089', 'The service provided by royal catering is so good with amazing and delicious menu for function. There so many varieties of food and everything is so delicious. Its my pleasure to write review for royal catering.'),
(22, 'user4.jpg', 'krishna', '9800897789', ' Food was amazing – no disappointments . Presentation – perfect as usual . Food Quality just as good . Customer service perfect .Honestly there are no complaints, we continue love using your services, food is amazing.');

-- --------------------------------------------------------

--
-- Table structure for table `specialmenu`
--

CREATE TABLE `specialmenu` (
  `id` int(20) NOT NULL,
  `image` varchar(60) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specialmenu`
--

INSERT INTO `specialmenu` (`id`, `image`, `itemname`, `price`) VALUES
(3, 'butter.jpg', 'BUTTER CHICKEN WITH NAAN', 250),
(4, 'butterpaneer.jpg', 'PANEER BUTTER MASALA', 150),
(5, 'honeygarlic.jpg', 'HONEY GARLIC CHICKEN SKEWERS', 150),
(7, 'dumbiryani.jpg', 'CHICKEN DUM BIRYANI', 250),
(8, 'paneertikka.webp', 'PANEER TIKKA MASALA', 300),
(9, 'chickencutlet.jpg', 'CHICKEN CUTLET', 150),
(10, 'malaikofta.jpeg', 'MALAI KOFTA', 120),
(11, 'mushroommasala.webp', 'MUSHROOM MASALA', 150),
(12, 'shawarma.png', 'CHICKEN SHAWARMA', 150),
(13, 'dahialootikki.jpg', 'DAHI ALOO TIKKI', 80),
(16, 'biryani.jpg', 'NFJF', 3443);

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `username`, `email`, `phonenumber`, `password`) VALUES
(4, 'srithi', 'srithi@gmail.com', '9870123451', '2004'),
(5, 'Pallavi', 'pallavi909@gmail.com', '9088323221', '909'),
(6, 'kavya', 'kavya123@gmail.com', '8909989098', '9999'),
(9, 'Shreya', 'shreya777@gmail.com', '6789667500', '9000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcourse`
--
ALTER TABLE `addcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addmenuitem`
--
ALTER TABLE `addmenuitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addslider`
--
ALTER TABLE `addslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliciouscombo`
--
ALTER TABLE `deliciouscombo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertype`
--
ALTER TABLE `ordertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialmenu`
--
ALTER TABLE `specialmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcourse`
--
ALTER TABLE `addcourse`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `addmenuitem`
--
ALTER TABLE `addmenuitem`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `addslider`
--
ALTER TABLE `addslider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `deliciouscombo`
--
ALTER TABLE `deliciouscombo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ordertype`
--
ALTER TABLE `ordertype`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `specialmenu`
--
ALTER TABLE `specialmenu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
