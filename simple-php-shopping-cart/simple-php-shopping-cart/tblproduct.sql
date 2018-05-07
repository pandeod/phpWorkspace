CREATE TABLE `tblproduct` (
  `id` int(8) PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  UNIQUE KEY `product_code` (`code`)
)

INSERT INTO `tblproduct` (`name`, `code`, `image`, `price`) VALUES
('3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00),
('External Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00),
('Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00);
