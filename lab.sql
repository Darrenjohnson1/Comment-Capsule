CREATE DATABASE `lab`;
USE `lab`;

CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT,
  `username` varchar(255),
  `password` varchar(255),
  PRIMARY KEY(`id`)
);

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'dan', '$2y$10$jhSIk2N5BnkEEzgEBWQDw.AUQIEcrH8V0AcNLfW2nkjTAH2WgAAlW');

CREATE TABLE `posts` (
  `id` int(11) AUTO_INCREMENT,
  `post` varchar(255),
  PRIMARY KEY(`id`)
);

INSERT INTO `posts` (`id`, `post`) VALUES
(1, 'Wow this is super cool, I''m the first one!'),
(2, 'Please remember me'),
(3, 'I miss my wife, she took the house and kids.'),
(4, 'asdf');