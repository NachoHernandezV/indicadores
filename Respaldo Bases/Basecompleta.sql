
CREATE DATABASE  `indicadores` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE  `usuarios` (
 `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `usuario` VARCHAR( 50 ) NOT NULL ,
 `password` VARCHAR( 50 ) NOT NULL ,
 `departamento` VARCHAR( 50 ) NOT NULL
) ENGINE = MYISAM ;


CREATE TABLE  `selectdepartamento` (
 `iddepartamento` INT( 15 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `nombredep` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `selectindicador` (
 `idindicador` INT( 15 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `nombreind` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
 `iddepartamento` INT( 15 ) UNSIGNED NOT NULL
) ENGINE = MYISAM ;


CREATE TABLE  `a1_rot` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `a2_tiem` (
 `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `cpp1_plaz` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `cpp2_ind` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `cpc1_ind` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM 

CREATE TABLE  `cpc2_plaz` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `cpc3_cart` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `ced1_rot` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `ced2_tiem` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `ced3_cicl` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `gest1_tiem` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `gest2_aus` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `gest3_rot` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `gest4_hor` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `gest5_gas` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `seg1_ries` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `seg2_acci` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `seg3_prim` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `com1_efic` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `sis1_efic` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `adm1_end` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `adm2_liq` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;


CREATE TABLE  `adm3_rent` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `adm4_cap` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `impuest1` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE  `tesorer1` (
 `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `idmes` INT NOT NULL ,
 `objetivo` FLOAT NOT NULL ,
 `reals` FLOAT NOT NULL ,
 `year1` YEAR NOT NULL
) ENGINE = MYISAM ;







CREATE TABLE  `mes` (
 `idmes` INT( 15 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `mes` VARCHAR( 15 ) NOT NULL
) ENGINE = MYISAM ;



INSERT INTO  `indicadores`.`selectdepartamento` (
`iddepartamento` ,
`nombredep`
)
VALUES (
NULL ,  'Almacen de Refaciones'
), (
NULL ,  'Cuentas Por Pagar'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Rotacion de inventarios',  '1'
), (
NULL ,  'Tiempo de permancia de inventarios',  '1'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Indice de rotacion de cartera',  '2'
), (
NULL ,  'Plazo promedio de cobro',  '2'
);



INSERT INTO  `indicadores`.`mes` (
`idmes` ,
`mes`
)
VALUES (
NULL ,  'Enero'
), (
NULL ,  'Febrero'
);


INSERT INTO  `indicadores`.`arotinvent` (
`ida1` ,
`idmes` ,
`objetivo` ,
`reals`
)
VALUES (
NULL ,  '1',  '0.06',  '0.08'
), (
NULL ,  '2',  '0.12',  '0.13'
);

INSERT INTO  `indicadores`.`atiempperminv` (
`ida2` ,
`idmes` ,
`objetivo` ,
`reals`
)
VALUES (
NULL ,  '1',  '517',  '397'
), (
NULL ,  '2',  '492',  '479'
);

INSERT INTO  `indicadores`.`cpcplazpromcob` (
`idcpc2` ,
`idmes` ,
`objetivo` ,
`reals`
)
VALUES (
NULL ,  '1',  '44',  '39.74'
), (
NULL ,  '2',  '45',  '42.87'
);

INSERT INTO  `indicadores`.`selectdepartamento` (
`iddepartamento` ,
`nombredep`
)
VALUES (
NULL ,  'Cuentas Por Pagar'
), (
NULL ,  'Cedi'
);

INSERT INTO  `indicadores`.`selectdepartamento` (
`iddepartamento` ,
`nombredep`
)
VALUES (
NULL ,  'Compras'
);

INSERT INTO  `indicadores`.`selectdepartamento` (
`iddepartamento` ,
`nombredep`
)
VALUES (
NULL ,  'Gestion de Personal'
);

INSERT INTO  `indicadores`.`selectdepartamento` (
`iddepartamento` ,
`nombredep`
)
VALUES (
NULL ,  'Impuestos'
);

INSERT INTO  `indicadores`.`selectdepartamento` (
`iddepartamento` ,
`nombredep`
)
VALUES (
NULL ,  'Seguridad Industrial'
), (
NULL ,  'Sistemas'
);

INSERT INTO  `indicadores`.`selectdepartamento` (
`iddepartamento` ,
`nombredep`
)
VALUES (
NULL ,  'Tesoreria'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Indice de rotacion de cartera sin trigos',  '3'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Rotacion de inventarios',  '4'
), (
NULL ,  'Tiempo de permanencia de inventarios',  '4'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Ciclo operacional',  '4'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Eficiencia de Compras',  '5'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Tiempo extra',  '6'
), (
NULL ,  'Ausentismo',  '6'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Rotacion de personal',  '6'
), (
NULL ,  'Horas de capacitacion',  '6'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Gastos de capacitacion',  '6'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Endeudamiento',  '7'
), (
NULL ,  'Liquidez',  '7'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Rentabilidad',  '7'
), (
NULL ,  'Capital de trabajo',  '7'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Impuestos',  '8'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Indice de riesgo',  '9'
), (
NULL ,  'Indice de accidentabilidad',  '9'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Prima de riesgo',  '9'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Eficiencia de Sistemas',  '10'
);

INSERT INTO  `indicadores`.`selectindicador` (
`idindicador` ,
`nombreind` ,
`iddepartamento`
)
VALUES (
NULL ,  'Tesoreria',  '11'
);

UPDATE  `indicadores`.`selectindicador` SET  `nombreind` =  'Plazo promedio de pago sin trigos',
`iddepartamento` =  '3' WHERE  `selectindicador`.`idindicador` =8 LIMIT 1 ;


ALTER TABLE  `atiempperminv` CHANGE  `idmes`  `idmes` INT( 15 ) NOT NULL
ALTER TABLE  `arotinvent` CHANGE  `idmes`  `idmes` INT( 15 ) NOT NULL
UPDATE  `indicadores`.`selectdepartamento` SET  `nombredep` =  'Almacen de Refacciones' WHERE  `selectdepartamento`.`iddepartamento` =1 LIMIT 1 ;
UPDATE  `indicadores`.`selectindicador` SET  `nombreind` =  'Tiempo de permanencia de inventarios' WHERE  `selectindicador`.`idindicador` =2 LIMIT 1 ;

ALTER TABLE selectindicador ADD FOREIGN KEY ( iddepartamento ) REFERENCES selectdepartamento( iddepartamento ) ;
ALTER TABLE a1_rot ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE a2_tiem ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE cpp1_plaz ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE cpp2_ind ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE cpc1_ind ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE cpc2_plaz ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE ced1_rot ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE ced2_tiem ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE ced3_cicl ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE gest1_tiem ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE gest2_aus ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE gest3_rot ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE gest4_hor ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE gest5_gas ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE seg1_ries ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE seg2_acci ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE seg3_prim ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE com1_efic ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE sis1_efic ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE adm1_end ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE adm2_liq ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE adm3_rent ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE adm4_cap ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE impuest1 ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;
ALTER TABLE tesorer1 ADD FOREIGN KEY ( idmes ) REFERENCES mes( idmes ) ;











