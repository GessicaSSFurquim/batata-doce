USE academia; 

INSERT INTO `login` (`usuario`, `senha`) VALUES
('abc', 123),
('def', 456),
('ghi', 789);

INSERT INTO `pagamentos` (`valor`) VALUES
('49,99'),
('59,99'),
('69,99'),
('79,99'),
('89,99');

INSERT INTO `treinadores` (`nome`, `dataDeNascimento`, `cpf`, `endereco`, `telefone`, `email`,`idPagamento`) VALUES
('Maria', '1994-08-18', '103.103.103', 'Rua das Flores, 123', '123123123','abc@d.com', 1),
('João', '1998-06-26', '102.102.102', 'Rua das Lirios, 258', '456456456','abc@d.com', 2),
('Camila', '1997-07-22', '789.789.789', 'Rua das Margaridas, 259', '789789789','abc@d.com',3),
('Chico', '1998-08-21', '456.456.456', 'Rua das Primaveras, 147', '102102102','abc@d.com',4),
('Roberta', '1999-06-24', '123.123.123', 'Rua das Rosas, 159', '103103103','abc@d.com',5);

INSERT INTO `membros` (`nome`, `dataDeNascimento`, `cpf`, `endereco`, `telefone`, `email`, `idPagamento`,`idTreinador`) VALUES
('Maria', '1994-08-18','103.103.103', 'Rua das Flores, 123', '123123123','abc@d.com', 1, 1),
('João', '1998-06-26', '102.102.102', 'Rua das Lirios, 258', '456456456','abc@d.com', 2, 2),
('Camila', '1997-07-22', '789.789.789', 'Rua das Margaridas, 259', '789789789','abc@d.com', 3, 3),
('Chico', '1998-08-21', '456.456.456', 'Rua das Primaveras, 147', '102102102','abc@d.com', 4, 4),
('Roberta', '1999-06-24', '123.123.123', 'Rua das Rosas, 159', '103103103','abc@d.com', 5, 5);

