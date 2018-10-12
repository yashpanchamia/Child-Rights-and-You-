-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2016 at 09:00 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE IF NOT EXISTS `recipe` (
  `rname` varchar(50) NOT NULL,
  `ingredients` varchar(1000) NOT NULL,
  `pingredients` varchar(1000) NOT NULL,
  `singredients` varchar(1000) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `prepmethod` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`rname`, `ingredients`, `pingredients`, `singredients`, `quantity`, `prepmethod`) VALUES
('Banana Walnut French Toast', '3 bananas, peeled and thinly sliced,\r\n2 tablespoons wild honey,\r\n50 g Walnuts, roughly chopped,\r\n4 slices white bread,\r\n4 eggs,\r\n1 teacup milk,\r\n1 tbsp butter,\r\n1 tsp icing sugar,\r\n300 g thick curd', 'bread', 'tomato', NULL, 'Ek banana ko slice kariye. Distribute evenly over 1 slices of bread. Add honey on it and sprinkle a few walnuts. Then pour some honey again. Doosre slice se sandwich ko seal kar de. Now heat the pan with a bit of butter. Pour out about 250 ml of milk. Crack the eggs into a bowl with milk and beat them together. Dip these banana sandwiches in the egg mixture. Melt the butter in the frying pan. Fry these for 3 – 4 min until they cook through, until nicely coloured and warmed through. Upar se whipped cream, blueberry aur walnuts se decorate kardijiye. '),
('Bread Barfi', '2 cups soft breadcrumbs,\r\n1 cup milk,\r\n1 grated coconut,\r\n1 cup castor sugar,\r\n4 table spoons oil,\r\npink color as required,\r\n2 or 3 drops rose essence 20 chopped cashewnuts + a few halved to garnish', 'bread', 'tomato', NULL, 'Soak bread crumbs in milk for about 10 minutes. Combine coconut and sugar, stir over a low fire till the sugar melts. Add the soaked breadcrumbs and stir till well mixed (for about 5 to 7 minutes). Add chopped cashew nuts , rose essence and oil and cook till the mixture leaves the sides of the pan. Spread into a greased baking tin and allow to cool. Cut into desired shapes and garnish with chopped cashew nuts and serve.'),
('INDIAN CHOLE', '400 grams chickpeas (soaked overnight),\r\n3 cloves garlic (minced),\r\n1 onions (large, minced),\r\n1 red bell pepper (minced),\r\n0.79 kg diced tomatoes,\r\n2.54 cms ginger (piece, minced),\r\n391 ml coconut milk,\r\n1/2 tsp cayenne pepper,\r\n1 tsp coriander powder,\r\n1/2 tsp tumeric,\r\n1/2 tsp ground cardamom,\r\n1/4 tsp ground cloves,\r\n1 tbsp vegetable oil,\r\n1 tsp garam masala,\r\n11/2 tsps mustard seeds,\r\n1/2 tsp salt', 'chickpeas,\r\ngarlic,\r\nonions,\r\npepper,\r\ntomatoes', 'coconut milk,\r\nginger,\r\ncayenne pepper,\r\ncoriander powder,\r\ntumeric,\r\nground cardamom,\r\nground cloves,\r\nvegetable oil,\r\ngaram masala,\r\nmustard seeds,\r\ntsp salt', NULL, 'Blend all the ingredients but chickpeas in a food processor or a blender until liquid. Wash and drain chickpeas, place them in a slow cooker, pour the blended mixture over and cook on low for 6-7 hours or on high for 4-5.'),
('Indian Naan', '4 cups flour, 2 cups low-fat plain yogurt, 1 tsp salt, 1 tsp baking powder', 'flour, baking powder', 'salt, yogurt', 0, 'Mix together the flour, baking powder and the salt. Stir the yogurt until the dough is too stiff to mix a spoon, then knead it in the bowl till it holds together well and add more flour if necessary. Turn it out on a floured surface and continue kneading it for about 5 minutes until the dough feels smooth and elastic. Form the dough into a ball and put it in an bowl that you oiled, covered with a towel, to rest for an hour or even longer. Take the dough out and cut it into 10 equal pieces. Form each piece into a ball and press the balls flat into round discs. Heat a large frying pan or griddle, either seasoned cast iron or even good non-stick finish. Set your oven to about 500 and have the broiler on (this is how it is made in the original recipe). Take 1 piece of dough at a time and roll it out on a surface that you floured, until it is about 8-10 inches across and less than 1/4 inches thick. Lay it on the hot griddle and cook it at medium heat for 4-5 minutes. It will puff up in some places or all over, and there will be some blackish-brown spots on the bottom of it. Slide a spatula under the naan and move it to the oven, directly onto the rack, for one minute or two, just until it finishes puffing up into a balloon and begins to color lightly on top. Remove the naan from the oven and brush it lightly with melted butter if you like. Continue doing this with all the dough, stacking the breads into a napkin-lined basket. Serve the bread hot, fresh from the oven, or let them cool down and wrap them up. To reheat them, they must be wraped in aluminum foil, in packets of 4 or 5 breads and put in a 400 degree oven for 10-15 minutes.'),
('Indian Samosa', '2 tbsps vegetable oil,\r\n1 cup all-purpose flour,\r\n1 onions (chopped),\r\n2 large potatoes (boiled),\r\n3 tbsps oil,\r\n2 green chilies (very finely chopped),\r\n1/2 tsp garlic (crushed),\r\n1/2 tsp ginger (grated),\r\n1 tbsp cilantro (finely chopped),\r\ncoriander seeds,\r\n1/2 tsp tumeric,\r\n1/2 lemon juice,\r\n1/2 tsp red chili powder,\r\n1/2 tsp garam masala,\r\nsalt', 'vegetable oil,\r\nflour,\r\nonions,\r\npotatoes,\r\noil', 'green chilies,\r\ngarlic,\r\nginger,\r\ncilantro,\r\ncoriander seeds,\r\ntumeric,\r\nlemon juice,\r\nred chili powder,\r\ngaram masala,\r\nsalt', 0, 'Mix together the flour, oil and salt. Add a little water, until the mixture becomes crumbly. Keep adding water, kneading the mixture until it becomes a soft pliable dough. Cover with a moist cloth and set aside for 20 minutes. Beat the dough on a work surface and knead again. Cover and set aside.\r\nFILLING.\r\nHeat 3 tablespoons of oil. Add ginger, garlic, green chillies and a few coriander seeds.\r\nStir fry for 1 minute, add onions and saute until it gets light brown. Add cilantro (fresh coriander), lemon juice, turmeric, red chili, salt and garam masala. Stir fry for 2 minutes. Add potatoes. Stir fry for another 2 minutes. Set it aside and allow to cool. Divide the dough into 10 equal portions. Use a rolling pin to roll a piece of dough into a 5? oval. Cut into 2 halves. Run a moist finger along the diameter. Roll it around the finger to make a cone. Place a tablespoon of the filling into the cone. Seal the third side using a moist finger. Deep fry the samosas on low to medium heat until it gets a light brown colour. Serve with tomato sauce or any chutney you love.'),
('Indian Spiced Peas', '1 tbsp vegetable oil,\r\n1/2 tsp ground cumin,\r\n1/2 tsp tumeric,\r\n1/2 tsp coriander,\r\n1/2 tsp garam masala,\r\n237 ml chicken stock (vegetable or water),\r\n255 grams frozen peas (defrosted),\r\nfresh mint (Garnish with)', 'vegetable oil,\r\nfrozen peas', 'ground cumin,\r\ntumeric,\r\ncoriander,\r\ngaram masala,\r\nchicken stock,\r\nfresh mint', NULL, 'To a large pan, heat the oil over medium heat.\r\nAdd the onions and pepper and cook until softened.\r\nLower the heat to low. Add the cumin, turmeric, coriander and garam masala.\r\nStir well and cook for 2 minutes.\r\nAdd the garlic, salt and pepper and cook for 1 more minute.\r\nAdd the stock or water and stir well.\r\nStir in the peas and bring to a simmer.\r\nCook for 5 minutes until liquid is reduced.\r\nServe warm, garnished with mint'),
('Palak Paneer Sandwich', 'Left Over Palak Paneer–½ Bowl,\r\nBread-4 slices,\r\nEggs–2nos.,\r\nMozzarella cheese grated–1/2 cup,\r\nButter-for roasting the bread,\r\nTomatoes–1 nos.,\r\nOnions–1 nos.,\r\nCucumber–1 nos.,\r\nSalt and pepper–to taste', 'bread', 'tomato,tomato,\r\nonion,\r\nbutter', NULL, '1.Apply butter on all the bread slices. Now put palak paneer on one slice, sprinkle cheese and top it with another bread slice. 2.Make a masala omelet with all veggies and add it on top of the palak paneer bread. Put the rest of the grated cheese on top and cover it with the 3rd slice.\r\n3.Grill this sandwich from both sides and have hot.'),
('Pit Pat Burger', '8 mini pita breads,\r\n16-18 broccoli florets, blanched,\r\n½ cup boiled corn kernels,\r\n1 cup mashed sweet potato,\r\nSalt to taste,\r\n½ tsp garam masala powder,\r\n1 cup breadcrumbs Oil for shallow-frying,\r\n2 cheese slices,\r\n4-5 iceberg lettuce leaves,\r\n1 medium tomato, sliced', 'bread', 'tomato', NULL, '1. Roughly chop broccoli florets and transfer in a bowl.\r\n2. Coarsely crush corn kernels in a grinder and add to the broccoli. Mix well. Add sweet potato and mix. Add salt and garam masala powder and mix well.\r\n3. Spread breadcrumbs on a plate.\r\n4. Divide the mixture into equal portions and shape them into small size tikkis.\r\n5. Heat some oil in a non-stick pan. Place the tikkis in it and shallow-fry till golden from both the sides.\r\n6. Slice pita breads horizontally into halves and toast lightly in the same pan.\r\n7. Cut cheese slices into four squares.\r\n8. Place a lower half of the toasted pita bread on the worktop. Top with a torn lettuce leaf followed by a tikki, a tomato slice and a cheese square. Cover with the othertoasted bread half and secure with a toothpick. Similarly prepare the rest.\r\n9. Serve immediately.'),
('Potato Masoor Dal Patties', '500 gms boiled potatoes,\r\n1 tbsp oil,\r\n1 chopped onion,\r\n1 tsp chopped garlic,\r\nBoiled Masoor dal,\r\n1 tbsp green chilli,\r\n1 tbsp parsley,\r\n100 gms breadcrumbs,\r\nTomato slices', 'bread,\r\npotato', 'tomato,\r\nonion,\r\ngarlic', NULL, 'In a bowl , grate potatoes. In a separate pan, heat oil and add chopped onion and garlic and sauté till golden brown. Add boiled Masoor dal , sauted onion and garlic , green chillies , parsley and breadcrumbs and mix well to prepare a mixture. Shape the mixture into patties , and shallow fry them on a pan with oil in it. Shallow fry till golden brown from both sides and remove.'),
('Quick Whole Wheat Chapati', '2 1/2 cups whole wheat flour,1 cup water,3/4 teaspoon salt', 'wheat flour', 'water,\r\nsalt', 0, 'Mix flour and salt together in a bowl. Stir in water to form a soft dough.\nTurn dough out onto a lightly floured work surface and knead several times. Divide into 8 pieces and roll each into a ball. Roll each ball into a very thin round using a rolling pin.\nHeat a griddle over medium-high heat. Cook each dough round on griddle until dough bubbles and blisters appear, about 2 minutes. Flip and cook until lightly browned on the other side.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD UNIQUE KEY `rname` (`rname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
