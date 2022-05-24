CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'User'),
(2, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `displayname` varchar(256) NOT NULL,
  `registered` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL DEFAULT 'profilo/no-image-available.png',
  `role` int(11) NOT NULL DEFAULT 1,
  `updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `displayname`, `registered`, `image`, `role`, `updated`) VALUES
(1, 'Root', 'Admin', 'rootadmin@gmail.com', '799824ba3560d3955f302c392de50e2232991ffaeca6f24200cf46571b523489', 'Root Admin', '2022-02-02 18:40:11', 'profilos/vasilacheionut.jpeg', 2, '2022-02-02 18:40:11'),
(2, 'Vasilache', 'Ionut', 'vasilacheorionut@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Vasilache Ionut', '2022-02-02 18:41:56', 'profilos/vasilacheionut.jpeg', 1, '2022-02-02 18:41:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `displayname` (`displayname`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

