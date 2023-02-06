SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";


CREATE TABLE `tp2` (
  `id` int(11) NOT NULL,
  `villedep` text NOT NULL,
  `villearr` text NOT NULL,
  `date` date NOT NULL,
  `voitmodele` text NOT NULL,
  `nbplace` int(2) NOT NULL,
  `email` text NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tp2` (`id`, `villedep`, `villearr`, `date`, `voitmodele`, `nbplace`, `email`, `desc`) VALUES ('1', 'PARIS', 'NANTES', '2023-02-22', 'PEUGEOT', '3', 'MICHOU@GMAIL.COM', 'Trajet 1');
INSERT INTO `tp2` (`id`, `villedep`, `villearr`, `date`, `voitmodele`, `nbplace`, `email`, `desc`) VALUES ('2', 'PARIS', 'NANTES', '2023-02-22', 'CITROEN', '5', 'MICHEL@GMAIL.COM', 'Trajet 2');

ALTER TABLE `tp2`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tp2` 
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;