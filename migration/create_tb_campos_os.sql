CREATE TABLE tb_campos_os (
    id int NOT NULL AUTO_INCREMENT,
    label varchar(255) NOT NULL,
    tipo_servico_id int,
    type varchar(255),
    tag varchar(255),
    PRIMARY KEY (id),
    FOREIGN KEY (tipo_servico_id)
    REFERENCES tb_tipo_de_servico(tipo_servico_id)
);
