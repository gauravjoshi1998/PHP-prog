Execute the following commands in your MySQL database before running the program:

CREATE DATABASE tutorials;

USE tutorials;

CREATE TABLE IF NOT EXISTS `products` ( 
  `id_product` int(11) NOT NULL AUTO_INCREMENT, 
  `name` varchar(100) NOT NULL, 
  `description` varchar(250) NOT NULL, 
  `price` decimal(6,2) NOT NULL, 
  PRIMARY KEY (`id_product`) 
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ; 
  
INSERT INTO `products` (`id_product`, `name`, `description`, `price`) VALUES
(1, 'Product 1', 'Product 1 description', '10.00'), 
(2, 'Product 2', 'Product 2 description', '20.00'), 
(3, 'Product 3', 'Product 3 description', '30.00'), 
(4, 'Product 4', 'Product 4 description', '40.00'), 
(5, 'Product 5', 'Product 5 description', '50.00'), 
(6, 'Product 6', 'Product 6 description', '60.00');
