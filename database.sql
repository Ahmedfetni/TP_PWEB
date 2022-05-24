

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

--
  --Table Des Messages
--
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

ALTER 'feedback' MODIFY 'id' int(11) NOT NULL , AUTO_INCREMENT=9;
COMMIT;


--
-- Table des annonces
--
REATE TABLE `pubs` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `corp` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  'adresse' varchar(255) NOT NULL,
  'wilaya' varchar(255) NOT NULL,
  'nbr_piece' varchar(255) NOT NULL,
  'numero_tlp' varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `pubs`
  ADD PRIMARY KEY (`id`);

ALTER 'pubs' MODIFY 'id' int(11) NOT NULL , AUTO_INCREMENT=9;
COMMIT