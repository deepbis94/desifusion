-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2019 at 09:03 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dfdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `adult_count` int(11) NOT NULL,
  `child_count` int(11) NOT NULL,
  `bc_count` int(11) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `purpose` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `adult_count`, `child_count`, `bc_count`, `date`, `time`, `name`, `email`, `phone`, `purpose`) VALUES
(1, 2, 1, 0, '11/19/2019', '11:00 AM', 'deep', 'deep@email.com', '9145777888', 'Dating');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Chinese'),
(2, 'Starters'),
(3, 'Lunch'),
(4, 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `discount`, `name`) VALUES
(1, 20, 'All');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `price` double NOT NULL,
  `img` longtext NOT NULL,
  `cate_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `img`, `cate_id`, `rating`) VALUES
(1, 'Chillichicken', 'Chilli chicken is probably most common Chinese dish readily available in all parts of the nation. In fact, it is so famous, that most roadside street food stalls even sell Chilli Chicken. It is prepared with a Soy Sauce Marinade forthe chicken. The Chicken marinade is cooked with Garlic, Ginger, and spices and stir-fried with Onions and Green Chillies.', 350, 'https://craftlog.com/m/i/3129837=s1280=h960', 1, 4),
(2, 'Chicken Manchurian', 'Chicken Manchurian was supposedly created by the chef of China Garden in Mumbai in the year 1975, as he experimented with a variety of ingredients like Garlic, Chilli, and Ginger. The occasional use of Garam masala was replaced with soy Sauce. This mixture later became so famous that it even was attempted with Gobi, Mutton and Paneer.', 250, 'https://vaya.in/recipes/wp-content/uploads/2018/02/Chicken-Manchurian.jpg', 1, 0),
(3, 'Chicken Chowmein', 'Chowmein is a common dish in China as well as India. Over there, it is only boiled and served with Soy Sauce, Scrambled Eggs over the top resting on a layer of green vegetables. But in the Indian variant, it is prepared by stir-frying the boiled Noodles with Soy Sauce, Vinegar, and sometimes even MSG.', 150, 'https://www.cookingclassy.com/wp-content/uploads/2019/01/chow-mein-9.jpg', 1, 0),
(4, 'Schezuan Chicken', 'The Schezuan flavoured dishes are known to be ridiculously spicy for some people, so beware before you try this one. It uses a lot of dry Red Chillies, Garlic and Ginger.', 180, 'https://i.pinimg.com/originals/37/33/72/3733727f7d71ea89ae4510ef7369d3df.jpg', 1, 0),
(5, 'Hakka Noodles', 'Hakka Noodles are a common form of Indo- Chinese dishes. It is the mostsophisticated version of the common ChowMien. The Noodles are stir fried with Vegetables, Soy sauce, sometimes Eggs and Chicken too. Though in China, the dish is served with boiled Noodles and a Broth with vegetables in it. The Noodles are not stir fired. The flavours are quite mild, and not as fiery as the Indian version. It is a popular roadside snack in China.', 120, 'https://www.vittobox.com/media/recipe/5253363716852/How-to-make-Hakka-noodles.jpg', 1, 0),
(6, 'Momo', 'Our beloved Momos are officially known as Dimsums. And although it was restricted earlier to the North Eastern parts of the country, now you’ll find Momos in India just anywhere and everywhere. There are various varieties available with the difference in stuffing used- Chicken, Paneer and Vegetable. Dimsums are served in China as a tea-time snack and are of various types including both sweet and savoury.', 120, 'https://img.taste.com.au/mdKxKxoR/taste/2016/11/chicken-momos-with-tomato-achar-46671-1.jpeg', 1, 0),
(7, 'Sweet Corn Soup', 'Sweet Corn Soup is a favourite of anyone who has ever loved Chinese food in India. In fact, it is so popular that readymade versions are available in packets, the constituents of which when boiled in water gives you Sweet Corn Soup. The soup uses Sweet Corn, Chicken Stock, Egg and Chunks of Chicken in the dish. It is mildly sweet due to the addition of sweet corn.\r\n\r\n', 120, 'https://www.werecipes.com/app/uploads/2014/05/sweet-corn-soup-recipe-indian-sweetcorn.jpg', 1, 0),
(8, 'Chilli Paneer', 'This dish was created as avariation of the ChilliChicken, for the vegetarians. In this dish, cubes of Cottage Cheese are doused in a flour batter and fried and then cooked in a Gravy with Onions, Garlic, Soy Sauce and Vinegar.', 130, 'https://justhindi.in/recipes/wp-content/uploads/2017/03/Chilly-Paneer-678x381.jpg?ezimgfmt=rs:372x209/rscb3', 1, 0),
(9, 'Sweet & Sour Chicken', 'This is a popular Chicken dish with both sweet and spicy elements. The main sauce for this dish is a combination of Tomato ketchup, Vinegar, Soy Sauce and ChilliSauce.\r\n\r\nChilliBaby Corn\r\n\r\nMuch like the Chilli Chicken and ChilliPaneer, ChilliBaby Corn is another such dish where BabyCorn is prepared with Soy Sauce and Vinegar and loads of rich Chinese flavours.', 150, 'https://www.averiecooks.com/wp-content/uploads/2017/01/sweetsourchicken-10-720x540.jpg', 1, 0),
(10, 'Sesame Chilli Potatoes', 'A famous appetiser, Sesame Honey Chilli Potatoes is prepared using small Potatoes which are dipped in a Sauce and stir fried along with Sesame Seeds and Honey. The Potatoes have a slight sweet-like taste for the additions of Honey which makes this dish unique and loved by all.', 130, 'http://www.ndtv.com/cooks/images/Honey.chilli.potatoes.jpg', 1, 0),
(11, 'Lemon Chicken', 'Lemon Chicken, much like how the name suggests is a dish where Chicken is cooked in a Gravy with a lot of Lemon in it, making it a tangy delight. The taste of Lemon is delightful and makes this dish uniquely brilliant.', 120, 'https://www.cookingclassy.com/wp-content/uploads/2018/07/lemon-butter-chicken-18.jpg', 1, 0),
(12, 'Garlic Chicken', 'Garlic Chicken is a great favourite of Indian people. They enjoy a rich quantity of Garlic in all their dishes, which is how this dish came into existence. The dish is prepared with a huge amount of Garlic, which makes this dish a garlicky delight.', 450, 'https://food.fnr.sndimg.com/content/dam/images/food/fullset/2011/9/1/2/MN0502H_roasted-garlic-clove-chicken_s4x3.jpg.rend.hgtvcom.616.462.suffix/1433073353435.jpeg', 1, 0),
(14, 'Tandoori Prawns', '', 230, 'http://desifusion11.000webhostapp.com/product_images/Ajwaini-Tandoori-Prawns_485.jpg', 2, 0),
(15, 'Prawn Cocktail', '', 230, 'http://desifusion11.000webhostapp.com/product_images/prawn_cocktail_with_13755_16x9.jpg', 2, 0),
(16, 'Chicken Reshmi kabab', '', 120, 'http://desifusion11.000webhostapp.com/product_images/Chicken-Reshmi-Kabab-357.jpg', 2, 0),
(17, 'Siracha chicken', '', 120, 'http://desifusion11.000webhostapp.com/product_images/Siracha%20Chicken_485.jpg', 2, 0),
(18, 'Dahi ke kabab', '', 120, 'http://desifusion11.000webhostapp.com/product_images/Dahi-Ke-Kabab_218.jpg', 2, 0),
(19, 'Fish tikka achari', '', 150, 'http://desifusion11.000webhostapp.com/product_images/Fish-Tikka-Achari_395.jpg', 2, 0),
(20, 'Bhutte ke kabab', '', 80, 'http://desifusion11.000webhostapp.com/product_images/bhuttey%20k%20kebab_225.jpg', 2, 0),
(21, 'Smoked prawn salad', '', 110, 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/3B22492C-E9A4-40D5-A176-1E4EA1C8BD07/Derivates/7d5981e6-a363-4e32-ba80-e2e47691d249.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_settings`
--

CREATE TABLE `reservation_settings` (
  `id` int(11) NOT NULL,
  `g_count` int(50) NOT NULL,
  `date_range` int(11) NOT NULL,
  `time` longtext NOT NULL,
  `Purpose` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_settings`
--

INSERT INTO `reservation_settings` (`id`, `g_count`, `date_range`, `time`, `Purpose`) VALUES
(2, 10, 20, '11:00 AM,1:30 PM,4:30 PM,6:00 PM,9:00 PM', 'Normal,Dating,Birthday Party,Wedding,Anniversary,New Year Day,Christmas,New Year Eve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_settings`
--
ALTER TABLE `reservation_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reservation_settings`
--
ALTER TABLE `reservation_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
