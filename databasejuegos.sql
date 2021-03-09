SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `juegos` (
  `ID` int(11) NOT NULL,
  `CODIGO` varchar(50) NOT NULL,
  `TITULO` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(1024) NOT NULL,
  `PRECIO` decimal(18,2) NOT NULL,
  `CANTIDAD` int(11) NOT NULL DEFAULT '0'
);


INSERT INTO `juegos` (`ID`, `CODIGO`, `TITULO`, `DESCRIPCION`, `PRECIO`, `CANTIDAD`) VALUES
(1, 'AB001', 'Resident Evil village','Resident Evil', '8999.00', 57),
(2, 'AB002', 'Demons Souls: Remake','DemonsSouls', 11499, 10),
(3, 'AB003', 'Sackboy: A big Adventure','Sackboy', 7999, 25);


ALTER TABLE `juegos`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CODIGO` (`CODIGO`);

ALTER TABLE `juegos`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `juegos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;