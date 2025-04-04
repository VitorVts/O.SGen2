CREATE TABLE tb_tipo_campos (
    tipo_servico_id INT,
    campos_id INT,
    FOREIGN KEY (tipo_servico_id) REFERENCES tb_tipo_de_servico(tipo_servico_id),
    FOREIGN KEY (campos_id) REFERENCES tb_tipo_campos(campos_id)
)