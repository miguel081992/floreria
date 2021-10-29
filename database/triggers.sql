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


DELIMITER ;
    
