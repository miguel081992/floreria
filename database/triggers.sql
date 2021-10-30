DELIMITER //
CREATE TRIGGER act_cantidad_insumo_prod 
AFTER INSERT ON productos
	FOR EACH ROW 
    BEGIN
		UPDATE insumos
        SET  insumos.cantidad = insumos.cantidad - new.cantidadInsumo 
        WHERE insumos.id = new.insumo_id;
	END//



CREATE TRIGGER act_cantidad_insumo_compr
AFTER INSERT ON compras
	FOR EACH ROW 
    BEGIN
		UPDATE insumos
        SET  insumos.cantidad = insumos.cantidad + new.cantidad
        WHERE insumos.id = new.insumo_id;
	END//

CREATE TRIGGER act_cantidad_insumo_delete_compr
AFTER DELETE
ON compras
FOR EACH ROW
BEGIN
UPDATE insumos
SET insumos.cantidad = insumos.cantidad - old.cantidad
WHERE insumos.id = old.insumo_id;
END//

CREATE TRIGGER act_cantidad_insumo_delete_prod
AFTER DELETE
ON productos
FOR EACH ROW
BEGIN
UPDATE insumos
SET insumos.cantidad = insumos.cantidad + old.cantidadInsumo
WHERE insumos.id = old.insumo_id;
END//

DELIMITER ;
    

//Creación tabla que calcula automáticamente el total de la compra

CREATE TABLE compras (
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  insumo_id bigint(20) unsigned NOT NULL,
  proveedor varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  costo double(8,2) NOT NULL,
  cantidad int(11) NOT NULL,
  total double(8,2) generated always AS (costo * cantidad),
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



