SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `ruota_selezionata`;
CREATE TABLE `ruota_selezionata` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ruote_id` int(11) NOT NULL,
  `ultimo_aggiornamento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `ruota_selezionata` (`id`, `user_id`, `ruote_id`, `ultimo_aggiornamento`) VALUES
(1, 1, 7, '2022-05-24 00:26:35'),
(2, 2, 7, '2022-05-24 00:26:51');


ALTER TABLE `ruota_selezionata`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ruota_selezionata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


